<div class="page-body">
          <!-- Container-fluid starts-->
          <div class="container-fluid">
          <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Data Titik Kordinat</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Data Titik Kordinat</li>
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                  <ul>
                      <li>
                      <a class="btn btn-pill btn-outline-success btn-air-success" href="javascript:void(0)" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalfat" data-whatever="@mdo" data-bs-original-title="" title=""><span class="fa fa-plus"></span> Tambah Data</a>
                    </li>
                  <li>
                  <a class="btn btn-pill btn-outline-success btn-air-success" href="<?php echo site_url() ?>Lahan" data-bs-original-title="" title=""><span class="fa fa-arrow-circle-left"></span> Kembali</a>
                    </li>
                    </ul>
                    <div class="modal fade" id="exampleModalfat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel2">Tambah Titik Kordinat</h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body" style="text-align:left;">
                            <form action="" method="post">
                              <div class="mb-2">
                                <label class="col-form-label">Titik Kordinat:</label>
                                <input class="form-control" type="text" name="titik" value="">
                              </div>
                              
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">Simpan</button>
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
                      <table class="display" id="basic-14">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Titik Kordinat</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td></td>
                            <td>
                            <a class="btn btn-warning btn-xs" href="javascript:void(0)"><span class="fa fa-edit"></span></a> 
                            <a class="btn btn-danger btn-xs" href="javascript:void(0)"><span class="fa fa-trash"></span></a>                            
                            </td>
                          </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>