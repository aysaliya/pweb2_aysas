<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="stylesheet" href="template/vendors/typicons/typicons.css">
        <link rel="stylesheet" href="template/vendors/css/vendor.bundle.base.css">
        <link rel="stylesheet" href="template/css/vertical-layout-light/style.css">
        <link rel="shortcut icon" href="template/images/favicon.png" />
        <link rel="stylesheet" href="template/pages/charts/chartjs.html">
    </head>

    <body>
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper">
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="pemesanan" aria-expanded="false" aria-controls="pemesanan">
                                <i class="typcn typcn-film menu-icon"></i>
                                <span class="menu-title">Tabel Pemesanan</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pemesanan/create" aria-expanded="false" aria-controls="pemesanan">
                                <i class="typcn typcn-film menu-icon"></i>
                                <span class="menu-title">Buat Pesanan</span>
                            </a>
                        </li>
                    </ul>
                </nav>

                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                                            <div>
                                                <p class="mb-2 text-md-center text-lg-left">Total Pengeluaran</p>
                                                <h1 class="mb-0">8742</h1>
                                            </div>
                                            <i class="typcn typcn-briefcase icon-xl text-secondary"></i>
                                        </div>
                                        <canvas id="expense-chart" height="80"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                                            <div>
                                                <p class="mb-2 text-md-center text-lg-left">Total Anggaran</p>
                                                <h1 class="mb-0">47,840</h1>
                                            </div>
                                            <i class="typcn typcn-chart-pie icon-xl text-secondary"></i>
                                        </div>
                                        <canvas id="budget-chart" height="80"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                                            <div>
                                                <p class="mb-2 text-md-center text-lg-left">Total Keseimbangan</p>
                                                <h1 class="mb-0">$7,243</h1>
                                            </div>
                                            <i class="typcn typcn-clipboard icon-xl text-secondary"></i>
                                        </div>
                                        <canvas id="balance-chart" height="80"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="footer">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="https://www.bootstrapdash.com/" class="text-muted" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
                                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-muted">Aysa Saliya_210202074_TI2D</span>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- container-scroller -->
        </div>

        <!-- base:js -->
        <script src="{{ asset('/template/vendors/js/vendor.bundle.base.js') }}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page-->
        <script src="{{ asset('/template/vendors/chart.js/Chart.min.js') }}"></script>
        <!-- End plugin js for this page-->
        <!-- inject:js -->
        <script src="{{ asset('/template/js/off-canvas.js') }}"></script>
        <script src="{{ asset('/template/js/hoverable-collapse.js') }}"></script>
        <script src="{{ asset('/template/js/template.js') }}"></script>
        <script src="{{ asset('/template/js/settings.js') }}"></script>
        <script src="{{ asset('/template/js/todolist.js') }}"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="{{ asset('/template/js/dashboard.js') }}"></script>
        <!-- End custom js for this page-->
    </body>

    </html>
</x-app-layout>