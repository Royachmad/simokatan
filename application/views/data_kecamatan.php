<div class="page-body">
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-sm-6">
          <h3>Data Kecamatan</h3>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Data Kecamatan</li>
          </ol>
        </div>
        <div class="col-sm-6">
          <!-- Bookmark Start-->
          <div class="bookmark">
            <ul>
              <li>
                <button class="btn btn-sm btn-success" onclick="add_person()"><i class="fa fa-plus-circle"> </i> Tambah</button>
              </li>
              <li>
                <a class="btn btn-pill btn-outline-success btn-air-success" href="javascript:void(0)" data-bs-original-title="" title=""><span class="fa fa-download"></span> Download Data</a>
              </li>
            </ul>
            <div class="modal fade" id="modal_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Tambah Data</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body" style="text-align:left;">
                    <form action="#" id="form">
                      <input type="hidden" name="id_kecamatan" />
                      <div class="mb-2">
                        <label class="col-form-label">Nama Kecamatan:</label>
                        <input class="form-control" type="text" name="nama_kecamatan" id="nama_kecamatan" value="">
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" id="btnSave" onclick="save()" class="btn btn-success">Simpan</button>
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="modal_form2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Tambah Data</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body" style="text-align:left;">
                    <form action="#" id="form2">
                      <input type="hidden" name="id_kecamatan" />
                      <div class="mb-2">
                        <label class="col-form-label">Nama Kecamatan:</label>
                        <input class="form-control" type="text" name="nama_kecamatan" id="nama_kecamatan" value="">
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" id="btnSave" onclick="save()" class="btn btn-success">Simpan</button>
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Bookmark Ends-->
        </div>
      </div>
    </div>
    <div class="row">
      <!-- Language Starts-->
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="basic-kecamatan" class="table table-striped table-bordered nowrap">
                <thead>
                  <tr>
                    <th style="text-align: center; width: 10%">No</th>
                    <th style="text-align: center; width: 50%">Kecamatan</th>
                    <th style="text-align: center; width: 40%">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  var save_method; //for save method string
  var table;
  var base_url = '<?php echo base_url(); ?>';
  $(document).ready(function() {

    //datatables
    table = $('#basic-kecamatan').DataTable({

      "processing": true, //Feature control the processing indicator.
      "serverSide": true, //Feature control DataTables' server-side processing mode.
      "order": [], //Initial no order.

      // Load data for the table's content from an Ajax source
      "ajax": {
        "url": "<?php echo site_url('kecamatan/ajax_list1') ?>",
        "type": "POST"
      },

      //Set column definition initialisation properties.
      "columnDefs": [{
        "targets": [-1], //last column
        "orderable": false, //set not orderable
      }, ],
      "language": {
        "lengthMenu": 'Tampilkan _MENU_ Baris',
        "search": '_INPUT_',
        "searchPlaceholder": 'Pencarian . . .'
      },
      dom: "<'row'<'col-md-8'l><'col-md-2 pull-right'f> <'col-md- pull-right' B>>" +
        "<'row'<'col-md-12't>>" +
        "<'row'<'col-md-5'i><'col-md-7'p>>",
      buttons: [

      ]
    });

  });

  function add_person() {
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Tambah Data Kecamatan'); // Set Title to Bootstrap modal title
  }

  function edit_data(id) {
    save_method = 'update';
    $('#form2')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
      url: "<?php echo site_url('kecamatan/ajax_edit1/') ?>/" + id,
      type: "GET",
      dataType: "JSON",
      success: function(data) {
        $('[name="id_kecamatan"]').val(data.id_kecamatan);
        $('[name="nama_kecamatan"]').val(data.nama_kecamatan);
        $('#modal_form2').modal('show'); // show bootstrap modal when complete loaded
        $('.modal-title').text('Update Data Kecamatan'); // Set title to Bootstrap modal title
        // $('#photo-preview').show(); // show photo preview modal
      },
      error: function(jqXHR, textStatus, errorThrown) {
        alert('Error get data from ajax');
      }
    });
  }

  function reload_table() {
    table.ajax.reload(null, false); //reload datatable ajax 
  }

  function save() {
    if (save_method == 'add') {
      url = "<?php echo site_url('kecamatan/ajax_add1') ?>";
      var formData = new FormData($('#form')[0]);
      var url;
      var nama_kecamatan = document.getElementById("nama_kecamatan").value;

      if (nama_kecamatan != "") {
        $('#btnSave').text('saving...'); //change button text
        $('#btnSave').attr('disabled', true); //set button disable 
        $.ajax({
          url: url,
          type: "POST",
          data: formData,
          contentType: false,
          processData: false,
          dataType: "JSON",
          success: function(data) {

            if (data.status) //if success close modal and reload ajax table
            {
              $('#modal_form').modal('hide');
              reload_table();
            }

            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled', false); //set button enable 


          },
          error: function(jqXHR, textStatus, errorThrown) {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled', false); //set button enable 

          }
        });
      } else {
        alert('Complete the form ! ');
        return false;
      }
    } else {
      url = "<?php echo site_url('kecamatan/ajax_update1') ?>";
      var formData = new FormData($('#form2')[0]);
      var url;
      var kecamatan = document.getElementById("nama_kecamatan").value;

      if (kecamatan != "") {
        $('#btnSave').text('saving...'); //change button text
        $('#btnSave').attr('disabled', true); //set button disable 
        $.ajax({
          url: url,
          type: "POST",
          data: formData,
          contentType: false,
          processData: false,
          dataType: "JSON",
          success: function(data) {

            if (data.status) //if success close modal and reload ajax table
            {
              $('#modal_form').modal('hide');
              reload_table();
            }
            if (data.status) {
              $('#modal_form2').modal('hide');
              reload_table();
            }
            if (data.status) //if success close modal and reload ajax table
            {
              $('#modal_form3').modal('hide');
              reload_table();
            }

            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled', false); //set button enable 


          },
          error: function(jqXHR, textStatus, errorThrown) {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled', false); //set button enable 

          }
        });
      } else {
        alert('Complete the form ! ');
        return false;
      }
    }
  }

  function delete_data(id) {
    if (confirm('Apakah anda yakin akan menghapus data tersebut ?')) {
      // ajax delete data to database
      $.ajax({
        url: "<?php echo site_url('kecamatan/ajax_delete1') ?>/" + id,
        type: "POST",
        dataType: "JSON",
        success: function(data) {
          //if success reload ajax table
          $('#modal_form').modal('hide');
          reload_table();

        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert('Error deleting data');
        }
      });

    }
  }
</script>