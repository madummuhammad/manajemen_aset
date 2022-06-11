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
                                    <h4 class="card-title">Asset <u><strong>{{$nama_grup->nama_grup}}</strong></u></h4>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <a href="{{url('inventory/create/').'/'.$url2}}" class="btn btn-primary btn-sm">Tambah Aset <i class="fa fa-plus text-white"></i></a>
                                        <a href="#mutasi" data-toggle="modal" class="btn btn-success btn-sm" id="mutasi-inventory">Mutasi Aset <i class="fa-solid fa-rotate"></i></a>

                                        <div class="modal fade" id="mutasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                          <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Dokumen Mutasi</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
                                            <form class="mutasi-form">
                                                @csrf
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label>ID Mutasi</label>
                                                        @if($id_mutasi == null)
                                                        <input type="text" name="id_mutasi" class="form-control" placeholder="" value="1" readonly>
                                                        @else
                                                        <input type="text" name="id_mutasi" class="form-control" placeholder="" value="{{$id_mutasi->id_mutasi+1}}" readonly>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Nama</label>
                                                        <input type="text" name="nama" class="form-control" placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Lokasi Mutasi</label>
                                                        <select id="inputState" name="lokasi" class="form-control">
                                                            <option selected value="">Pilih Lokasi...</option>
                                                            @foreach($lokasi as $lokasi)
                                                            <option value="{{$lokasi->kode_property}}">{{$lokasi->kode_property}} - {{$lokasi->nama_property}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Deskripsi</label>
                                                        <textarea name="deskripsi" id="" cols="30" rows="4" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                            <button id="mutasi-inventory" class="btn btn-primary">Mutasi <i class="fa-solid fa-rotate"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a href="" class="btn btn-success btn-sm" id="mutasi-inventory">Mutasi Aset <i class="fa-solid fa-arrow-rotate-left"></i></a> -->
                        </div>
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
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
                                            @if($value->status_mutasi==0)
                                            <input type="checkbox" class="inventory-check" value="{{$value->kode_inventory}}">
                                            @else
                                            <a href="{{url('inventory/mutasi/')}}/{{Request::segment(2)}}/{{$value->id_mutasi}}" class="badge badge-warning text-white">Proses Mutasi</a>
                                            @endif
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
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th>Kode Inventory</th>
                                    <th>Nama Inventory</th>
                                    <th>Harga Satuan</th>
                                    <th>Lokasi</th>
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