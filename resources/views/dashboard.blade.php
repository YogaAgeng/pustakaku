<x-app-layout>
    {{-- <x-slot name="header"> --}}
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight"> --}}
            <!DOCTYPE html>
            <html lang="en">

            <head>

                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta name="description" content="">
                <meta name="author" content="">

                <title>Dashboard</title>

                <!-- Custom fonts for this template-->
                <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
                <link
                    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
                    rel="stylesheet">
                <link href="{{ url('/templates/sbadmin2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet"
                    type="text/css">

                <!-- Custom styles for this template-->
                <!-- <link href="css/sb-admin-2.min.css" rel="stylesheet"> -->
                <link href="{{ url('/templates/sbadmin2/css/sb-admin-2.min.css') }}" rel="stylesheet">
                @livewireStyles
            </head>

            <body id="page-top">

                <!-- Page Wrapper -->
                <div id="wrapper">

                    <!-- Sidebar -->
                    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                        <!-- Sidebar - Brand -->
                        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                            <!-- <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div> -->
                            <div class="sidebar-brand-text mx-3">Menu</div>
                        </a>

                        <!-- Divider -->
                        <hr class="sidebar-divider my-0">

                        <!-- Nav Item - Dashboard -->
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">
                                <i class="fas fa-fw fa-tachometer-alt"></i>
                                <span>Dashboard</span></a>
                        </li>

                        <!-- Divider -->
                        <hr class="sidebar-divider">

                    </ul>
                    <!-- End of Sidebar -->

                    <!-- Content Wrapper -->
                    <div id="content-wrapper" class="d-flex flex-column">

                        <!-- Main Content -->
                        <div id="content">

                            <!-- Begin Page Content -->
                            <div class="container-fluid">

                                <!-- Page Heading -->
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                                </div>

                                <!-- Content Row -->
                                <div class="row">
                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-primary shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div
                                                            class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                            Jumlah Buku</div>
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <i class="fas fa-book fa-2x text-gray-300"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Content Row -->
                                <div class="row">
                                    <div class="col-4">
                                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModal">
                                                Tambah Buku
                                            </button>
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Buku
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form wire:submit.prevent="save">
                                                                <div class="mb-3">
                                                                    <label for="book_name" class="form-label">{{ __('Nama Buku') }}</label>
                                                                    <input type="text" class="form-control" wire:model="title">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="book_author" class="form-label">Penerbit</label>
                                                                    <input type="text" class="form-control" id="book_author" name="book_author"
                                                                        placeholder="Penerbit">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="book_release" class="form-label">Tahun
                                                                        Terbit</label>
                                                                    <input type="text" class="form-control" id="book_release" name="book_release"
                                                                        placeholder="Tahun Terbit">
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Simpan
                                                                Buku</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="input-group mb-3">
                                            <form
                                                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                                <div class="input-group"
                                                    style="border:1px solid #4e73df;border-radius:5px">
                                                    <input type="text" class="form-control bg-light border-0 small"
                                                        placeholder="Search">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary" type="submit">
                                                            <i class="fas fa-search fa-sm"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <table class="table table-bordered border-dark">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nomor</th>
                                                <th scope="col">Nama Buku</th>
                                                <th scope="col">Penerbit</th>
                                                <th scope="col">Tahun Terbit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Harry Potter</td>
                                                <td>JK Rowling</td>
                                                <td>1999</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>

                        <!-- Footer -->
                        <footer class="sticky-footer bg-white">
                            <div class="container my-auto">
                                <div class="copyright text-center my-auto">
                                    <span>Perpustakaanku &copy; 2023</span>
                                </div>
                            </div>
                        </footer>
                        <!-- End of Footer -->

                    </div>
                    <!-- End of Content Wrapper -->

                </div>
                <!-- End of Page Wrapper -->

                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>

                <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <form method="post" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="btn btn-secondary" type="submit">Log Out

                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bootstrap core JavaScript-->
                <script src="{{ url('/templates/sbadmin2/vendor/jquery/jquery.min.js') }}"></script>
                <script src="{{ url('/templates/sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

                <!-- Core plugin JavaScript-->
                <script src="{{ url('/templates/sbadmin2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

                <!-- Custom scripts for all pages-->
                <script src="{{ url('/templates/sbadmin2/js/sb-admin-2.min.js') }}"></script>


                <!-- Page level plugins -->
                <script src="{{ url('/templates/sbadmin2/vendor/chart.js/Chart.min.js') }}"></script>


                <!-- Page level custom scripts -->
                <script src="{{ url('/templates/sbadmin2/js/demo/chart-area-demo.js') }}"></script>
                <script src="{{ url('/templates/sbadmin2/js/demo/chart-pie-demo.js') }}"></script>
                @livewireScripts

            </body>

            </html>

</x-app-layout>
