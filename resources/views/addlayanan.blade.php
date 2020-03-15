@extends('layouts.app')
@section('content')
<section class="content-header">
    <h1>Layanan</h1>
</section>
<section class="content">
    <div class="nav-tabs-custom">
        <div class="box-header with-border">
            <h3 class="box-title">Form Tambah Layanan</h3>
        </div>
        <form class="form-horizontal">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Layanan</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="layanan" placeholder="Layanan">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Kategori Layanan</label>
                    <div class="col-sm-10">
                        <select name="kategorilayanan" class="form-control">
                            <option>Pendidikan</option>
                            <option>Penyewaan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="harga" placeholder="Harga">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea id="editor1" name="deskripsi" rows="10" cols="80">
                            
                        </textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection