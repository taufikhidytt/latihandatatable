<!-- Modal -->
<div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="pesan" style="display: none;"></div>
      <form action="<?= base_url('mahasiswa/simpandata')?>" method="POST" class="formsimpan">
        <div class="modal-body">
          <div class="form-group">
            <label for="nobp">NOBP:</label>
            <input type="text" name="nobp" id="nobp" class="form-control" autocomplete="off" placeholder="Masukan NOBP">
          </div>
          <div class="form-group">
            <label for="nama">Nama Mahasiswa:</label>
            <input type="text" name="nama" id="nama" class="form-control" autocomplete="off" placeholder="Masukan Nama Mahasiswa">
          </div>
          <div class="form-group">
            <label for="tmp_lahir">Tempat Lahir:</label>
            <input type="text" name="tmp_lahir" id="tmp_lahir" class="form-control" autocomplete="off" placeholder="Masukan Tempat Lahir">
          </div>
          <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir:</label>
            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" autocomplete="off" placeholder="Masukan Tanggal Lahir">
          </div>
          <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
              <option value="">--Pilih--</option>
              <option value="Pria">Pria</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" >
            <i class="fa fa-paper-plane"></i> Save
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){
    $('.formsimpan').submit(function(e){
      $.ajax({
        type: 'post',
        url: $(this).attr('action'),
        data: $(this).serialize(),
        dataType: "json",
        success: function(response){
          if(response.error){
            $('.pesan').html(response.error).show();
          }
        },
        error: function(xhr, ajaxOptions, thrownError){
          alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
        }
      });
      return false;
    });
  });
</script>
