@extends('layouts.admin')

@section('title', 'SIM Kosan | Data Kosan')

@section('breadcumb')
     <div class="col-md-5 col-8 align-self-center">
          <h3 class="text-themecolor">Kosan</h3>
          <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
               <li class="breadcrumb-item active">Kosan</li>
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
                              <span style="font-size: 25px !important;">Data Daerah Kosan <strong></strong></span>
                         </div>
                         <a href="{{ route('referensi.provinsi.create') }}" class="btn btn-rounded btn-success waves-effect float-right m-t-1-10 m-b-10">
                              <i class="fa fa-plus m-r-5"></i>
                              Tambah Data 
                              <!-- Tambah <strong>Pemilik</strong> Baru -->
                         </a>
                         <div class="table-responsive m-t-40">
                              <table id="KosanTable" class="table table-bordered table-striped">
                                   <thead>
                                        <tr>
                                             <th>No</th>
                                             <th>Nama Provinsi</th>
                                             <th>kota</th>
                                             <th>Kode Pos</th>
                                             <th>Aksi</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                   @php $no=1;  @endphp
                                   @php $no=1;  @endphp
                                   @foreach($data as $items)
                                        <tr>
                                             <td>{{ $no++ }}</td>
                                             <td>{{ $items->nama_provinsi }}</td>
                                             <td>{{ $items->kota }}</td>
                                             <td>{{ $items->kode_pos }}</td>
                                             <td>
                                                  <form action="{{ route('referensi.provinsi.destroy', $items->id) }}" method="post">
                                                     {{ csrf_field() }}
                                                     {{ method_field('DELETE') }}
                                                     <a href="{{ route('referensi.provinsi.edit', $items->id) }}" class="btn btn-warning waves-effect" data-toggle="tooltip" title="Edit">
                                                         <i class="fa fa-edit"></i>
                                                     </a>
                                                     <button type="submit" class="btn btn-danger waves-attack swalDelete" data-toggle="tooltip" title="Hapus">
                                                         <i class="fa fa-trash-alt"></i>
                                                     </button>
                                                 </form>
                                             </td>
                                        </tr>
               @endforeach
                                   </tbody>
                              </table>
                         </div>
                    </div>
               </div>
          </div>
     </div>
@endsection

@section('script')
    <script>
         $('#KosanTable').DataTable();
    </script>
@endsection