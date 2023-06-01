<!-- DataTables -->
<link href="<?= base_url()?>vertical/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url()?>vertical/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="<?= base_url()?>vertical/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.7/css/rowReorder.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">

<!-- Required datatable js -->
<script src="<?= base_url()?>vertical/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>vertical/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.7/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <h5>Semua Data Mahasiswa</h5>
                </div>
                <div class="pull-right">
                    <button type="button" class="btn btn-primary btn-md" id="tomboltambah">
                        <i class="fa fa-user-plus"></i> Tambah Mahasiswa
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped text-center display nowrap" id="datamahasiswa" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NOBP</th>
                            <th>Nama Mashasiswa</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="viewmodal" style="display: none;"></div>

<script>
    $(document).ready(function(){
        table = $('#datamahasiswa').DataTable({
            responsive: true,
            "destroy": true,
            "processing": true,
            "serverSide": true,
            "order": [],
    
            "ajax": {
                "url": "<?= site_url('mahasiswa/ambildata') ?>",
                "type": "POST"
            },
    
    
            "columnDefs": [{
                "targets": [0],
                "orderable": false,
                "width": 5
            }],
    
        });

        $('#tomboltambah').click(function(e){
            $.ajax({
                url: "<?= base_url('mahasiswa/formtambah')?>",
                dataType: "json",
                success: function(response){
                    if(response.sukses){
                        $('.viewmodal').html(response.sukses).show();
                        $('#modaltambah').modal('show');
                    }
                }
            });
        });
    });
</script>