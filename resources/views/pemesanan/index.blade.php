<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Buat Pesanan</title>
        <!-- base:css -->
        <link rel="stylesheet" href="../../vendors/typicons/typicons.css" />
        <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css" />
        <!-- endinject -->
        <!-- plugin css for this page -->
        <link rel="stylesheet" href="../../vendors/select2/select2.min.css" />
        <link rel="stylesheet" href="../../vendors/select2-bootstrap-theme/select2-bootstrap.min.css" />
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="../../css/vertical-layout-light/style.css" />
        <!-- endinject -->
        <link rel="shortcut icon" href="../../images/favicon.png" />
        <link rel="stylesheet" href="template/vendors/typicons/typicons.css" />
        <link rel="stylesheet" href="template/vendors/css/vendor.bundle.base.css" />
        <link rel="stylesheet" href="template/css/vertical-layout-light/style.css" />
        <link rel="shortcut icon" href="template/images/favicon.png" />
        <link rel="stylesheet" href="template/pages/charts/chartjs.html" />
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
                            <a class="nav-link" href="" aria-expanded="false" aria-controls="form-elements">
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
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="table-responsive pt-3">
                                        <table class="table table-striped project-orders-table">
                                            <thead>
                                                <tr>
                                                    <th class="ml-5">Nomor Antrian</th>
                                                    <th>Nama Pembeli</th>
                                                    <th>Nama Menu</th>
                                                    <th>Harga </th>
                                                    <th>Jumlah</th>
                                                    <th>Catatan</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($pemesanan as $pesan)
                                                <tr>
                                                    <td>{{$pesan->nomor_antrian}}</td>
                                                    <td>{{$pesan->nama_pembeli}}</td>
                                                    <td>{{$pesan->nama_menu}}</td>
                                                    <td>{{$pesan->harga}}</td>
                                                    <td>{{$pesan->jumlah}}</td>
                                                    <td>{{$pesan->catatan}}</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="/pemesanan/{{$pesan->nomor_antrian}}/edit">
                                                                <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                                                                    Ubah
                                                                    <i class="typcn typcn-edit btn-icon-append"></i>
                                                                </button></a>
                                                            <form action="/pemesanan/{{$pesan->nomor_antrian}}" method='POST'>
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-danger btn-sm btn-icon-text mr-3">
                                                                    Hapus
                                                                    <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                                </button>
                                                            </form>
                                                            <a href="/pemesanan/detail/{{$pesan->nomor_antrian}}">
                                                                <button type="button" class="btn btn-info btn-sm btn-icon-text mr-3">
                                                                    Lihat
                                                                    <i class="typcn typcn-eye-outline btn-icon-append"></i>
                                                                </button></a>
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

                        <!-- base:js -->
                        <script src="../../vendors/js/vendor.bundle.base.js"></script>
                        <!-- endinject -->
                        <!-- inject:js -->
                        <script src="../../js/off-canvas.js"></script>
                        <script src="../../js/hoverable-collapse.js"></script>
                        <script src="../../js/template.js"></script>
                        <script src="../../js/settings.js"></script>
                        <script src="../../js/todolist.js"></script>
                        <!-- endinject -->
                        <!-- plugin js for this page -->
                        <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
                        <script src="../../vendors/select2/select2.min.js"></script>
                        <!-- End plugin js for this page -->
                        <!-- Custom js for this page-->
                        <script src="../../js/file-upload.js"></script>
                        <script src="../../js/typeahead.js"></script>
                        <script src="../../js/select2.js"></script>
                        <!-- End custom js for this page-->
    </body>

    </html>
</x-app-layout>