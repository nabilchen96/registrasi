@extends('layouts.app')
@section('content')
    <section class="content-header">
        <h1>Layanan</h1>
    </section>
    
    <section class="content">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Pendidikan</a></li>
              <li><a href="#tab_2" data-toggle="tab">Penyewaan</a></li>
              <li><a href="#tab_3" data-toggle="tab">Status Pendaftaran</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <div class="">
                    @if (Auth::user()->role == 'admin')
                        <div class="box-header">
                            <a href="{{url('addlayanan')}}"  class="btn btn-success btn-sm"><i class="fa fa-plus"></i>Tambah</a>
                        </div>
                    @endif
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>Layanan</th>
                          <th width="550px">Deskripsi Layanan</th>
                          <th>Harga</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $k => $v)
                                @if ($v->kategorilayanan == 'pelatihan')
                                    <tr>
                                        <td>{{$k+1}}</td>
                                        <td>{{$v->layanan}}</td>
                                        <td width="550px">{{$v->deskripsi}}</td>
                                        <td>Rp. {{$v->harga}}</td>
                                        <td>
                                            @if (Auth::user()->role != 'admin')
                                                <a class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal-default">Daftar</a>
                                                <a href="{{url('layanandetail')}}{{$v->idlayanan}}" class="btn btn-sm btn-info">Detail</a>
                                            @else
                                                <a class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                                <a class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                            @endif
                                        </td>
                                        {{-- daftar layanan Pendidikan --}}
                                        <div class="modal fade" id="modal-default">
                                            @if (Auth::user()->role == 'perorangan')
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title">Pendaftaran Layanan Pendidikan</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="">
                                                            <form class="form-horizontal">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam diam tellus, blandit a massa mattis, 
                                                                gravida fringilla justo. Donec in tincidunt lectus, quis iaculis enim. Cras congue venenatis dui, 
                                                                sed luctus neque dignissim eget. Nam et nisi nibh. Suspendisse nec nibh eleifend, tincidunt velit nec, 
                                                                pellentesque augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                                                                Vivamus eu finibus sapien.
                                                                <div class="box-footer">
                                                                    <button type="submit" class="btn btn-info pull-right">Daftar</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @else
                                                


                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title">Pendaftaran Layanan Pendidikan</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="">
                                                            <form class="form-horizontal">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam diam tellus, blandit a massa mattis, 
                                                                gravida fringilla justo. Donec in tincidunt lectus, quis iaculis enim. Cras congue venenatis dui, 
                                                                sed luctus neque dignissim eget. Nam et nisi nibh. Suspendisse nec nibh eleifend, tincidunt velit nec, 
                                                                pellentesque augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                                                                Vivamus eu finibus sapien.
                                                                <br><br>
                                                                <div>
                                                                    <div class="form-group">
                                                                        <input type="number" class="form-control" id="inputEmail3" placeholder="Jumlah Peserta">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select class="form-control" id="mySelect" onchange="myFunction()">
                                                                            <option value="cash">Cash</option>
                                                                            <option value="kredit">Kredit</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select id="demo" disabled class="form-control">
                                                                            <option>2x</option>
                                                                            <option>4x</option>
                                                                            <option>8x</option>
                                                                            <option>10x</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="box-footer">
                                                                    <button type="submit" class="btn btn-info pull-right">Daftar</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                      </table>
                    </div>
                    <!-- /.box-body -->
                </div>
              </div>
              <div class="tab-pane" id="tab_2">
                  @if (Auth::user()->role == 'admin')
                    <div class="box-header">
                        <a class="btn btn-success btn-sm"><i class="fa fa-plus"></i>Tambah</a>
                    </div>
                  @endif
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th>No</th>
                        <th>Layanan</th>
                        <th width="550px">Deskripsi Layanan</th>
                        <th>Harga</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $k => $v)
                            @if ($v->kategorilayanan == 'penyewaan')
                                <tr>
                                    <td>{{$k+1}}</td>
                                    <td>{{$v->layanan}}</td>
                                    <td width="550px">{{$v->deskripsi}}</td>
                                    <td>Rp. {{$v->harga}}</td>
                                    <td>
                                        @if (Auth::user()->role != 'admin')
                                            <a class="btn btn-sm btn-success" data-toggle="modal" data-target="#penyewaan">Daftar</a>
                                            <a href="{{url('layanandetail')}}{{$v->idlayanan}}" class="btn btn-sm btn-info">Detail</a>
                                        @else
                                            <a class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                        @endif
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
                <div class="tab-pane" id="tab_3">
                    <p>Anda Belum Melakukan Pendaftaran Apapun</p>
                </div>
            </div>
          </div>
    </section>

    {{-- daftar layanan Pendidikan --}}
    <div class="modal fade" id="penyewaan">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Pendaftaran Layanan Pendidikan</h4>
              </div>
              <div class="modal-body">
                  <div class="">
                      <form class="form-horizontal">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam diam tellus, blandit a massa mattis, 
                          gravida fringilla justo. Donec in tincidunt lectus, quis iaculis enim. Cras congue venenatis dui, 
                          sed luctus neque dignissim eget. Nam et nisi nibh. Suspendisse nec nibh eleifend, tincidunt velit nec, 
                          pellentesque augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                          Vivamus eu finibus sapien.

                          <div class="box-body">
                                <div class="form-group">
                                    <label>Sewa Dari</label>
                                    <input type="date" class="form-control" id="inputEmail3">
                                </div>
                                <div class="form-group">
                                    <label>Sewa Sampai</label>
                                    <input type="date" class="form-control" id="inputEmail3">
                                </div>
                              <div class="form-group">
                                <label>Metode Pembayaran</label>
                                  <select class="form-control" id="sewa" onchange="mySewa()">
                                      <option value="cash">Cash</option>
                                      <option value="kredit">Kredit</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                <label>Termin</label>
                                <select disabled id="sewakredit" class="form-control">
                                    <option>2x</option>
                                    <option>4x</option>
                                    <option>8x</option>
                                    <option>10x</option>
                                </select>
                            </div>
                          </div>
                          <div class="box-footer">
                              <button type="submit" class="btn btn-info pull-right">Daftar</button>
                          </div>
                      </form>
                  </div>
              </div>
            </div>
          </div>
    </div>
    <script language="JavaScript">
        function myFunction() {
            var x = document.getElementById("mySelect").value;
            if(x == 'cash'){
                document.getElementById("demo").setAttribute("disabled", "true");
            }else{
                document.getElementById("demo").removeAttribute("disabled"); 
            }
        }
        function mySewa() {
            var y = document.getElementById("sewa").value;
            if(y == 'cash'){
                document.getElementById("sewakredit").setAttribute("disabled", "true");
            }else{
                document.getElementById("sewakredit").removeAttribute("disabled"); 
            }
        }
    </script>
@endsection