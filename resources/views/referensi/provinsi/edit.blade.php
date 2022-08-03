@extends('layouts.admin')

@section('title','SIM Kosan | Owner')
    
@section('breadcumb')
     <div class="col-md-5 col-8 align-self-center">
          <h3 class="text-themecolor">User</h3>
          <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
               <li class="breadcrumb-item"><a href="{{ route('referensi.provinsi.edit', $data->id) }}">Provinsi</a></li>
               <li class="breadcrumb-item active">Edit Data </li>
          </ol>
     </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <i class="mdi mdi-account text-success" style="font-size: 35px !important;"></i>
                        <span style="font-size: 25px !important;">Edit Data Provinsi <strong>{{ $data->nama_provinsi }}</strong></span>
                    </div>
                    <div class="form mt-5">
                        <form action="{{ route('referensi.provinsi.update', $data->id ) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}

                            
                            <div class="form-group">
                                <label for="nama_provinsi">Nama Provinsi</label>
                                <input type="text" name="nama_provinsi" id="nama_provinsi" value="{{ $data->nama_provinsi }}" class="form-control" required readonly autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="kota">Kota</label>
                                <input type="text" name="kota" id="kota" value="{{ $data->kota }}" class="form-control" required autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="kode_pos">Kode Pos</label>
                                <input type="number" name="kode_pos" id="kode_pos" class="form-control" value="{{ $data->kode_pos }}" required autocomplete="off">
                            </div>

                            <div class="form-group float-right mt-3">
                                <button type="submit" class="btn btn-info">Update</button>
                                <a href="{{ url()->previous() }}" class="btn btn-warning">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection