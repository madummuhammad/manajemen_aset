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
                                <h4>Hi, welcome back!</h4>
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
                                    <h4 class="card-title">Asset <u><strong>{{$nama_grup->nama_grup}}</strong></u></h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="display" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th>Kode Inventory</th>
                                                    <th>Nama Aset</th>
                                                    <th>Harga Per Satuan</th>
                                                    <th>Lokasi</th>
                                                    <th>Kondisi</th>
                                                    <th>Keterangan</th>
                                                    <th>Tanggal Input</th>
                                                    <th>Vendor</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($asset as $value)
                                                <tr>
                                                    <td>{{$value->kode_aset}}</td>
                                                    <td>{{$value->nama_aset}}</td>
                                                    <td>{{$value->harga_satuan}}/{{$value->satuan}}</td>
                                                    <td>{{$value->id_lokasi}}</td>
                                                    <td>{{$value->kondisi}}</td>
                                                    <td>{{$value->keterangan}}</td>
                                                    <td>{{$value->tgl_input}}</td>
                                                    <td>{{$value->id_vendor}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                   <th>Kode Inventory</th>
                                                   <th>Nama Aset</th>
                                                   <th>Harga Satuan</th>
                                                   <th>Lokasi</th>
                                                   <th>Kondisi</th>
                                                   <th>Keterangan</th>
                                                   <th>Tanggal Input</th>
                                                   <th>Vendor</th>
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