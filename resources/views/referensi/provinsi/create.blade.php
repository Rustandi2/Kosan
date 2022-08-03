@extends('layouts.admin')

@section('title', 'SIM Kosan | Data Kosan')

@section('breadcumb')
     <div class="col-md-5 col-8 align-self-center">
          <h3 class="text-themecolor">Kosan</h3>
          <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
               <li class="breadcrumb-item"><a href="{{ route('referensi.provinsi.store') }}">Kosan</a></li>
               <li class="breadcrumb-item active">Tambah Alamat Kosan</li>
          </ol>
     </div>
@endsection

@section('content')
    <div class="row">
         <div class="col-lg-12">
              <div class="card">
                   <div class="card-body">
                        <div>
                              <i class="mdi mdi-unity text-success" style="font-size: 35px !important;"></i>
                              <span style="font-size: 25px !important;">Tambah Alamat <strong>Kosan</strong></span>
                         </div>
                        <div class="form mt-5">
                              <form action="{{ route('referensi.provinsi.store') }}" method="POST">
                                   <div class="form-group">
                                   {{ csrf_field() }}
                                   </div>
                                   <div class="form-group">
                                        <label for="nama_provinsi">Provinsi</label>
                                        <input type="text" class="form-control" id="nama_provinsi" name="nama_provinsi" required autocomplete="off">
                                   </div>
                                   <div class="form-group">
                                        <label for="kota">kota</label>
                                        <input type="text" class="form-control" id="kota" name="kota" required autocomplete="off">
                                   </div>
                                   <div class="form-group">
                                        <label for="kode_pos">Kode Pos</label>
                                        <input type="text" class="form-control" id="kode_pos" name="kode_pos" required autocomplete="off">
                                   </div>

                                   <input type="hidden" name="redirect" value="{{ url()->previous() }}">
                                   <div class="form-group float-right mt-3">
                                        <button type="submit" class="btn btn-info">Simpan</button>
                                        <a href="{{ url()->previous() }}" class="btn btn-warning">Kembali</a>
                                   </div>
                              </form>
                         </div>
                   </div>
              </div>
         </div>
    </div>
@endsection

@section('script')
    <!--  -->
@endsection