<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('judul_halaman')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="{{asset('assets/vendor/pg-calendar/css/pignose.calendar.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/chartist/css/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/icons/fontawesome/css/all.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/vendor/select2/css/select2.min.css')}}">

</head>

<body>

    <!--*******************
        Preloader start
        ********************-->
        <div id="preloader">
            <div class="sk-three-bounce">
                <div class="sk-child sk-bounce1"></div>
                <div class="sk-child sk-bounce2"></div>
                <div class="sk-child sk-bounce3"></div>
            </div>
        </div>
    <!--*******************
        Preloader end
        ********************-->


    <!--**********************************
        Main wrapper start
        ***********************************-->
        <div id="main-wrapper">

        <!--**********************************
            Nav header start
            ***********************************-->
            <div class="nav-header">
                <a href="index.html" class="brand-logo">
                    Mts Attaqwa Jatingarang
                    <!-- <img class="logo-abbr" src="{{url('assets')}}/images/logo.png" alt=""> -->
                    <!-- <img class="logo-compact" src="{{url('assets')}}/images/logo-text.png" alt=""> -->
                    <!-- <img class="brand-title" src="{{url('assets')}}/images/logo-text.png" alt=""> -->
                </a>

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="line"></span><span class="line"></span><span class="line"></span>
                    </div>
                </div>
            </div>
        <!--**********************************
            Nav header end
            ***********************************-->

        <!--**********************************
            Header start
            ***********************************-->
            <div class="header">
                <div class="header-content">
                    <nav class="navbar navbar-expand">
                        <div class="collapse navbar-collapse justify-content-between">
                            <div class="header-left">
                                <div class="search_bar dropdown">
                                    <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                        <i class="mdi mdi-magnify"></i>
                                    </span>
                                    <div class="dropdown-menu p-0 m-0">
                                        <form>
                                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <ul class="navbar-nav header-right">
                                <li class="nav-item dropdown notification_dropdown">
                                    <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                        <i class="mdi mdi-bell"></i>
                                        <div class="pulse-css"></div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="list-unstyled">
                                            <li class="media dropdown-item">
                                                <span class="success"><i class="ti-user"></i></span>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                        </p>
                                                    </a>
                                                </div>
                                                <span class="notify-time">3:20 am</span>
                                            </li>
                                            <li class="media dropdown-item">
                                                <span class="primary"><i class="ti-shopping-cart"></i></span>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                    </a>
                                                </div>
                                                <span class="notify-time">3:20 am</span>
                                            </li>
                                            <li class="media dropdown-item">
                                                <span class="danger"><i class="ti-bookmark"></i></span>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                        </p>
                                                    </a>
                                                </div>
                                                <span class="notify-time">3:20 am</span>
                                            </li>
                                            <li class="media dropdown-item">
                                                <span class="primary"><i class="ti-heart"></i></span>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                    </a>
                                                </div>
                                                <span class="notify-time">3:20 am</span>
                                            </li>
                                            <li class="media dropdown-item">
                                                <span class="success"><i class="ti-image"></i></span>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                        </p>
                                                    </a>
                                                </div>
                                                <span class="notify-time">3:20 am</span>
                                            </li>
                                        </ul>
                                        <a class="all-notification" href="#">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown header-profile">
                                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                            <i class="mdi mdi-account"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="./app-profile.html" class="dropdown-item">
                                                <i class="icon-user"></i>
                                                <span class="ml-2">Profile </span>
                                            </a>
                                            <a href="./email-inbox.html" class="dropdown-item">
                                                <i class="icon-envelope-open"></i>
                                                <span class="ml-2">Inbox </span>
                                            </a>
                                            <form action="/logout" method="POST">
                                                @csrf
                                                <button type="submit" class="dropdown-item">
                                                    <i class="icon-key"></i>
                                                    <span class="ml-2">Logout</span>
                                                </button>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
        <!--**********************************
            Header end ti-comment-alt
            ***********************************-->

        <!--**********************************
            Sidebar start
            ***********************************-->
            <div class="quixnav">
                <div class="quixnav-scroll">
                    <ul class="metismenu" id="menu">
                        <li class="nav-label first">Main Menu</li>
                    <!-- <li><a href="index.html"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                    </li> -->
                    <li><a href="/" aria-expanded="false"><i class="icon icon-single-04-2"></i><span
                        class="nav-text">Dashboard</span></a></li>

                        <li class="nav-label">Aset</li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-app-store"></i><span class="nav-text">Grup Aset</span></a>
                            <ul aria-expanded="false">
                                @foreach(DB::table('kriteria_grup_aset')->get() as $kriteria)
                                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">{{$kriteria->nama_kriteria}}</a>
                                    <ul aria-expanded="false">
                                        @foreach(DB::table('grup_aset')->where('id_kriteria_grup_aset',$kriteria->id_kriteria)->get() as $value)
                                        @if($kriteria->id_kriteria==1)
                                        <li><a href="{{url('property')}}/{{$value->id_grup_aset}}">{{$value->nama_grup}}</a></li>
                                        @else
                                        <li><a href="{{url('inventory')}}/{{$value->id_grup_aset}}">{{$value->nama_grup}}</a></li>
                                        @endif
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-chart-bar-33"></i><span class="nav-text">Laporan</span></a>
                            <ul aria-expanded="false">
                                <li><a href="{{url('inventory/mutasi')}}">Mutasi</a></li>
                                <li><a href="./chart-flot.html">Penghapusan</a></li>
                                <li><a href="./chart-flot.html">Laporan Aset</a></li>
                            </ul>
                        </li>
                        <li class="nav-label">Pengaturan</li>
                        <li><a href="widget-basic.html" aria-expanded="false"><i class="icon icon-single-04-2"></i><span
                            class="nav-text">Admin</span></a></li>
                            <li><a href="widget-basic.html" aria-expanded="false"><i class="icon icon-single-04-2"></i><span
                                class="nav-text">Profile</span></a></li>
                            </ul>
                        </div>
                    </div>
        <!--**********************************
            Sidebar end
            ***********************************-->



            @yield('konten')


                    <!--**********************************
            Footer start
            ***********************************-->
            <div class="footer">
                <div class="copyright">
                    <!-- <p>Copyright ?? Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p> -->
                </div>
            </div>
        <!--**********************************
            Footer end
            ***********************************-->

        <!--**********************************
           Support ticket button start
           ***********************************-->

        <!--**********************************
           Support ticket button end
           ***********************************-->


       </div>
    <!--**********************************
        Main wrapper end
        ***********************************-->

    <!--**********************************
        Scripts
        ***********************************-->
        <!-- Required vendors -->
        <script src="{{asset('assets/vendor/global/global.min.js')}}"></script>
        <script src="{{asset('assets/js/quixnav-init.js')}}"></script>
        <script src="{{asset('assets/js/custom.min.js')}}"></script>

        <script src="{{asset('assets/vendor/chartist/js/chartist.min.js')}}"></script>

        <script src="{{asset('assets/vendor/moment/moment.min.js')}}"></script>
        <script src="{{asset('assets/vendor/pg-calendar/js/pignose.calendar.min.js')}}"></script>


        <script src="{{asset('assets/js/dashboard/dashboard-2.js')}}"></script>
        <!-- Circle progress -->

        <!-- Datatable -->
        <script src="{{asset('assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins-init/datatables.init.js')}}"></script>
        <script src="{{asset('assets/icons/fontawesome/js/all.js')}}"></script>

        <script src="{{asset('assets/vendor/select2/js/select2.full.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins-init/select2-init.js')}}"></script>
        <script>

            $('.main-checkbox').on('click',function(){
                if (this.checked) {
                    $('.inventory-check').prop('checked',true);
                } else {
                    $('.inventory-check').prop('checked',false);
                }
            })

            $(".modal-footer #mutasi-inventory").on('click',function(){
                if ($(".inventory-check").is(':checked')) {
                    var inventoryCheck = $(".inventory-check:checked");
                    var mutasinama=$(".mutasi-form [name=nama]").val();
                    var mutasilokasi=$(".mutasi-form [name=lokasi").val();
                    var mutasideskripsi=$(".mutasi-form [name=deskripsi").val();
                    var id_mutasi=$(".mutasi-form [name=id_mutasi]").val();
                    var csrf=$('input[name=_token]').val();
                    

                    $.ajax({
                        url: "{{url('inventory/mutasi')}}",
                        type:'POST',
                        data:{
                            nama:mutasinama,
                            lokasi:mutasilokasi,
                            deskripsi:mutasideskripsi,
                            id_mutasi:id_mutasi,
                            _token:csrf
                        },
                        success: function(e){
                            for (let i = 0; i < inventoryCheck.length; i++) {
                                var kode_inventory=$(inventoryCheck[i]).val();
                                $.ajax({
                                    url: "{{url('inventory/transaksi_mutasi')}}",
                                    type:'POST',
                                    data:{
                                        id_mutasi:id_mutasi,
                                        kode_inventory:kode_inventory,
                                        _token:csrf
                                    },
                                    success: function(e){
                                        setTimeout(function (){
                                            window.location.href="{{url('inventory/mutasi')}}"+'/'+{{Request::segment(2)}}+'/'+id_mutasi;
                                        }, 100);
                                    }
                                });
                            }
                        }
                    });

                }
            })
            // for (let i = 0; i < button_modal.length; i++) {
            //     button_modal[i].onclick = function () {
            //         var project=$(this).data('project');
            //         var id=$(this).data('id');
            //         var status = $(this).val();
            //         var method = '_post';
            //         var csrf=$('input[name=token]').val(); 
            //         $.ajax({
            //             url: "",
            //             type:'POST',
            //             data:{
            //                 id:id,
            //                 applied:status,
            //                 _post:method,
            //                 csrf_test_name:csrf
            //             },
            //             success: function(e){
            //                 Swal.fire({    
            //                     icon: 'success',
            //                     title: 'Berhasil Dikonfirmasi',
            //                     showConfirmButton: false,
            //                     timer: 1000
            //                 });
            //                 setTimeout(function (){
            //                     window.location.href=""+project;
            //                 }, 1000);
            //             }
            //         });
            //     }
            // }
        </script>

    </body>

    </html>