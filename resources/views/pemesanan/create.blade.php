<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="stylesheet" href="/template/vendors/typicons/typicons.css">
        <link rel="stylesheet" href="/template/vendors/css/vendor.bundle.base.css">
        <link rel="stylesheet" href="/template/css/vertical-layout-light/style.css">
        <link rel="shortcut icon" href="/template/images/favicon.png" />
        <link rel="stylesheet" href="/template/pages/charts/chartjs.html">
        <link rel="stylesheet" href="/template/vendors/select2/select2.min.css">
        <link rel="stylesheet" href="/template/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    </head>

    <body>
        <div class="container-scroller">
            <!-- partial:partials/_navbar.html -->
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_settings-panel.html -->
                <!-- partial -->
                <!-- partial:partials/_sidebar.html -->
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/pemesanan" aria-expanded="false" aria-controls="form-elements">
                                <i class="typcn typcn-film menu-icon"></i>
                                <span class="menu-title">Tabel Pemesanan
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pemesanan/create" aria-expanded="false" aria-controls="pemesanan">
                                <i class="typcn typcn-film menu-icon"></i>
                                <span class="menu-title">Buat Pesanan</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-md-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            Silahkan Masukkan Pesanan Anda!
                                        </h4>
                                        <form class="forms-sample" action="/pemesanan/store" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Nama Anda</label>
                                                <input type="text" name="nama_pembeli" class="form-control" id="exampleInputUsername1" placeholder="Nama" />
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Nama Menu</label>
                                                <input type="text" name="nama_menu" class="form-control" id="exampleInputUsername1" placeholder="Nama" />
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Harga</label>
                                                <input type="text" name="harga" class="form-control" id="exampleInputUsername1" placeholder="Harga" />
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Jumlah Pesanan</label>
                                                <input type="text" name="jumlah" class="form-control" id="exampleInputUsername1" placeholder="Jumlah" />
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Catatan</label>
                                                <input type="text" name="catatan" class="form-control" id="exampleInputUsername1" placeholder="Catatan" />
                                            </div>
                                            <button type="submit" name="submit" value="Save" class="btn btn-primary mr-2">
                                                Pesan
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- main-panel ends -->
                </div>
                <script src="{{ asset('vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
                <script src="{{ asset('vendors/select2/select2.min.jss') }}"></script>
                <script src="{{ asset('js/file-upload.js') }}"></script>
                <script src="{{ asset('js/typeahead.js') }}"></script>
                <script src="{{ asset('js/select2.js') }}"></script>
                <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
                <!-- endinject -->
                <!-- Plugin js for this page-->
                <script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script>
                <!-- End plugin js for this page-->
                <!-- inject:js -->
                <script src="{{ asset('js/off-canvas.js') }}"></script>
                <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
                <script src="{{ asset('js/template.js') }}"></script>
                <script src="{{ asset('js/settings.js') }}"></script>
                <script src="{{ asset('js/todolist.js') }}"></script>
                <!-- endinject -->
                <!-- Custom js for this page-->
                <script src="{{ asset('js/dashboard.js') }}"></script>

    </body>

    </html>
</x-app-layout>