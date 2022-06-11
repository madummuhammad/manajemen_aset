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
                    <div class="row text-dark">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Dokumen Mutasi Aset {{$nama_grup->nama_grup}}</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row py-2">
                                        <div class="col-3">ID Mutasi</div>
                                        <div class="col-7">: asdf</div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-3">Nama Mutasi</div>
                                        <div class="col-7">: asdf</div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-3">Penanggung Jawab</div>
                                        <div class="col-7">: asdf</div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-3">Tanggal Pengajuan Mutasi</div>
                                        <div class="col-7">: asdf</div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-3">Lokasi Mutasi</div>
                                        <div class="col-7">: asdf</div>
                                    </div>
                                    <a href="#tambahmutasi" data-toggle="modal" class="btn btn-primary btn-sm my-2">Tambah Aset <i class="fas fa-plus"></i></a>
                                    <div class="modal fade" id="tambahmutasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Pilih Aset</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                      <div class="modal-body">
                                        <select class="multi-select" name="states[]" multiple="multiple">
                                            @foreach($inventory as $value)
                                            <option value="AL">{{$value->kode_inventory.' - '.$value->nama_inventory}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive mt-3">
                            <table class="table table-bordered table-responsive-sm text-dark">
                                <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" class="main-checkbox">
                                        </th>
                                        <th>Kode Inventory</th>
                                        <th>Nama Inventory</th>
                                        <th>Harga Per Satuan</th>
                                        <th>Lokasi</th>
                                        <th>Kondisi</th>
                                        <th>Keterangan</th>
                                        <th>Tanggal Input</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no=1; @endphp
                                    @foreach($asset as $value)
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="inventory-check" value="{{$value->kode_inventory}}">
                                        </td>
                                        <td>{{$value->kode_inventory}}</td>
                                        <td>{{$value->nama_inventory}}</td>
                                        <td>{{$value->harga_satuan}}/{{$value->satuan}}</td>
                                        <td>{{$value->nama_property}}</td>
                                        <td>{{$value->kondisi}}</td>
                                        <td>{{$value->keterangan}}</td>
                                        <td>{{$value->tgl_input}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteinventory{{$no}}"><i class="fa fa-trash"></i></button>
                                                <div id="deleteinventory{{$no}}" class="modal fade" tabindex="-1">
                                                    <div class="modal-dialog model-sm modal-dialog-centered">
                                                        <div class="modal-content">
                                                          <div class="modal-body">
                                                            <p class="font-weight-bold">Hapus data ini?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                            <form method="POST" action="{{url('inventory')}}">
                                                                @csrf
                                                                @method('delete')
                                                                <input type="text" name="kode_inventory" value="{{$value->kode_inventory}}" hidden>
                                                                <input type="text" name="id_grup_aset" value="{{Request::segment(2)}}" hidden>
                                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="{{url('inventory/show/')}}/{{Request::segment(2)}}/{{$value->kode_inventory}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                        </div>
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
</div>
</div>
        <!--**********************************
            Content body end
            ***********************************-->

            @endsection