       @extends('main')

       @section('judul_halaman','Mutasi')

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
                            </ol>
                        </div>
                    </div>
                    <!-- row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Asset <u><strong></strong></u></h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="display" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th>Kode Mutasi</th>
                                                    <th>Nama Mutasi</th>
                                                    <th>Lokasi Mutasi</th>
                                                    <th>Deskripsi</th>
                                                    <th>Disetujui</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($mutasi as $value)
                                                <tr>
                                                    <td>{{$value->id_mutasi}}</td>
                                                    <td>{{$value->nama}}</td>
                                                    <td>{{$value->nama_property}}</td>
                                                    <td>{{$value->deskripsi}}</td>
                                                    <td>{{$value->disetujui}}</td>
                                                    <td>{{$value->deskripsi}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                 <th>Kode Mutasi</th>
                                                 <th>Nama Mutasi</th>
                                                 <th>Lokasi Mutasi</th>
                                                 <th>Deskripsi</th>
                                                 <th>Disetujui</th>
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