@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>Status Pembayaran</h1>
</section>
<section class="content">
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#tab_1" data-toggle="tab">Tagihan</a></li>
          <li><a href="#tab_2" data-toggle="tab">History Pembayaran</a></li>
          <li><a href="#tab_3" data-toggle="tab">Konfirmasi Pembayaran</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab_1">
            <div class="">
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Tagihan</th>
                            <th>Tgl Tagihan</th>
                            <th>Tagihan</th>
                            <th>Jumlah Tagihan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>#ID345678</td>
                            <td>20 Maret 2020</td>
                            <td>Tagihan Pelatihan Pilot Angsuran ke-2</td>
                            <td>Rp. 500.000</td>
                            <td><small class="label bg-red">Belum Dibayar</small></td>
                            <td>
                                <a class="btn btn-info btn-sm"><i class="fa fa-download"></i></a>
                            </td>
                        </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->
            </div>
          </div>
          <div class="tab-pane" id="tab_2">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pengguna</th>
                            <th>No Kwitansi</th>
                            <th>Tgl Bayar</th>
                            <th>Pembayaran</th>
                            <th>Jumlah Bayar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Palcomtech</td>
                            <td>#ID5679876</td>
                            <td>20 Maret 2020</td>
                            <td>Pembayaran Tagihan Pelatihan Pilot Angsuran ke-1</td>
                            <td>Rp. 500.000</td>
                            <td><a class="btn btn-info btn-sm"><i class="fa fa-download"></i></a></td>
                        </tr>
                    </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <div class="tab-pane" id="tab_3">
            <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                Lakukan konfirmasi pembyaran anda di form ini jika pembayaran belum diproses di akun anda
            </div>
          </div>
        </div>
      </div>
</section>
@endsection