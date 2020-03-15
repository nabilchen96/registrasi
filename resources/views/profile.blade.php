@extends('layouts.app')
@section('content')
<section class="content-header">
    <h1>Profile</h1>
</section>
@if ( Auth::user()->role == 'perorangan')
  <section class="content">
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#tab_1" data-toggle="tab">Profile</a></li>
          <li><a href="#tab_2" data-toggle="tab">Riwayat Pendidikan</a></li>
          <li><a href="#tab_3" data-toggle="tab">Riwayat Pekerjaan</a></li>
          <li><a href="#tab_4" data-toggle="tab">Data Lain</a></li>
          <li><a href="#tab_5" data-toggle="tab">Dokumen</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
                <form class="form-horizontal">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Nama Lengkap</label>
      
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail3" placeholder="Nama Lengkap">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Jenis Kelamin</label>
      
                        <div class="col-sm-10">
                          <select class="form-control">
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Tempat/TGL Lahir</label>
      
                        <div class="col-sm-5">
                          <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-5">
                          <input type="date" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Agama</label>
      
                        <div class="col-sm-10">
                          <select class="form-control">
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Katolik</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                            <option>Lainnya</option>
                            <option>Konghucu</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Pangkat/Golongan</label>
      
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail3">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Jabatan</label>
      
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail3">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Instansi</label>
      
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail3">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">No KTP</label>
      
                        <div class="col-sm-10">
                          <input type="number" class="form-control" id="inputEmail3">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">No Hp</label>
      
                        <div class="col-sm-10">
                          <input type="number" class="form-control" id="inputEmail3">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Alamat Email</label>
      
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail3" placeholder="exmple : email@mail.com">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
      
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail3" placeholder="password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Alamat Rumah</label>
      
                        <div class="col-sm-10">
                          <textarea class="form-control" rows="3"></textarea>
                        </div>
                      </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane" id="tab_2">
              <form class="form-horizontal">
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">SD</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">SMP</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">SMA</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Perguruan Tinggi</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Diklat</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3">
                    </div>
                  </div>
                </div>
              </form>
            </div>

            <div class="tab-pane" id="tab_3">
            
            </div>
            <div class="tab-pane" id="tab_4">
            
            </div>
            <div class="tab-pane" id="tab_5">
            
            </div>

        </div>
    </div>
  </section>
@else
  <section class="content">
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#tab_1" data-toggle="tab">Profile Perusahaan</a></li>
          <li><a href="#tab_2" data-toggle="tab">Dokumen</a></li>
          <li><a href="#tab_3" data-toggle="tab">Daftar Peserta</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
                <form class="form-horizontal">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Nama Perusahaan</label>
      
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail3" placeholder="Nama Perusahaan">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Alamat Email</label>
      
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail3" placeholder="exmple : email@mail.com">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
      
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail3" placeholder="password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Alamat Perusahaan</label>
      
                        <div class="col-sm-10">
                          <textarea class="form-control" rows="3"></textarea>
                        </div>
                      </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane" id="tab_2">
            
            </div>

            <div class="tab-pane" id="tab_3">
              <div class="box-header">
                <a class="btn btn-success btn-sm"><i class="fa fa-plus"></i>Tambah</a>
              </div>
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Email</th>
                    <th>No Telpon</th>
                    <th>Alamat</th>
                    <th>Action</th>
                  </tr>
                  </thead>

                </table>
              </div>
            </div>
        </div>
    </div>
  </section>
@endif
@endsection