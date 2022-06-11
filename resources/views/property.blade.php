       @extends('main')

       @section('judul_halaman','Aset')

       @section('konten')
        <!--**********************************
            Content body start
            ***********************************-->
            <div class="content-body">
                <div class="container-fluid">
                    <div class="row page-titles mx-0">
                        <div class="col-sm-6 p-md-0">
                            <div class="welcome-text">
                                <h4>Hi, {{auth()->user()->nama}}!</h4>
                                <span class="ml-1">Datatable</span>
                            </div>
                        </div>
                        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item text-capitalize"><a href="javascript:void(0)">{{Request::segment(1)}}</a></li>
                                <li class="breadcrumb-item active"><a href="javascript:void(0)">{{$nama_grup->nama_grup}}</a></li>
                            </ol>
                        </div>
                    </div>
                    <!-- row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <a href="{{url('property/create/').'/'.$url2}}" class="btn btn-primary btn-sm">Tambah Aset <i class="fa fa-plus text-white"></i></a>
                                    <h4 class="card-title">Asset <u><strong>{{$nama_grup->nama_grup}}</strong></u></h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="display" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Kode Property</th>
                                                    <th>Nama Aset</th>
                                                    <th>Harga Per Satuan</th>
                                                    <th>Kondisi</th>
                                                    <th>Keterangan</th>
                                                    <th>Tanggal Input</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-dark">
                                                @foreach($asset as $value)
                                                <tr>
                                                    <td>{{$value->kode_property}}</td>
                                                    <td>{{$value->nama_property}}</td>
                                                    <td>{{$value->harga_satuan}}/{{$value->satuan}}</td>
                                                    <td>{{$value->kondisi}}</td>
                                                    <td>{{$value->keterangan}}</td>
                                                    <td>{{$value->tgl_input}}</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteproperty{{$value->kode_property}}"><i class="fa fa-trash"></i></button>
                                                            <div id="deleteproperty{{$value->kode_property}}" class="modal fade" tabindex="-1">
                                                                <div class="modal-dialog model-sm modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                      <div class="modal-body">
                                                                        <p class="font-weight-bold">Hapus data ini?</p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                                        <form method="POST" action="{{url('property')}}">
                                                                            @csrf
                                                                            @method('delete')
                                                                            <input type="text" name="kode_property" value="{{$value->kode_property}}" hidden>
                                                                            <input type="text" name="id_grup_aset" value="{{Request::segment(2)}}" hidden>
                                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="{{url('property/show/')}}/{{Request::segment(2)}}/{{$value->kode_property}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                             <th>Kode Property</th>
                                             <th>Nama Aset</th>
                                             <th>Harga Satuan</th>
                                             <th>Kondisi</th>
                                             <th>Keterangan</th>
                                             <th>Tanggal Input</th>
                                             <th>Aksi</th>
                                         </tr>
                                     </tfoot>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
        <!--**********************************
            Content body end
            ***********************************-->

            @endsection