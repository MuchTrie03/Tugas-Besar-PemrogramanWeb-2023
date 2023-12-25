<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{ config('app.name') }} - Admin</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/adminlte.min.css') }}">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <!-- Google Font: Nunito -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    @yield('css')
</head>

<div class="wrapper">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
            </ul>
        
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <img class="img-circle img-fit mr-1" width="25" height="25" src=""
                            alt="Foto Profil">
                    </a>
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                        <a href="" class="dropdown-item">
                            <i class="fas fa-user-edit mr-2"></i> Edit Profil
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt mr-2"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="" class="brand-link mt-2">
                <i class="fas fa-tshirt brand-image mt-1 "></i>
                <h4 class="brand-text text-center">ADMIN </h4>
            </a>

            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ url('admin') }}"
                                class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/input') }}"
                                class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p>Input Transaksi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/riwayat') }}"
                                class="nav-link">
                                <i class="nav-icon fas fa-history"></i>
                                <p>Riwayat Transaksi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/harga') }}"
                                class="nav-link">
                                <i class="nav-icon fas fa-list"></i>
                                <p>Daftar Harga</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/members') }}"
                                class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Daftar Member</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#logoutModal">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
        </aside>
    <!-- konten utama -->
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Daftar Harga</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @elseif (session('warning'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                {{ session('warning') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @elseif (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-body">
                                <h5>Tambah Harga</h5>
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="barang">Barang</label>
                                                <div class="row">
                                                    <div class="col-8">
                                                        <select class="form-control" id="barang" name="item">
                                                                <option value=""></option>
                                                        </select>
                                                    </div>
                                                    <div class="col-4">
                                                        <a id="tambah-barang" class="text-white btn btn-primary"
                                                            data-toggle="modal" data-target="#addItemModal"><i
                                                                class="fas fa-plus"></i>
                                                            Barang</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="servis">Servis</label>
                                                <div class="row">
                                                    <div class="col-8">
                                                        <select class="form-control" id="servis" name="service">
                                                                <option value=""></option>
                                                        </select>
                                                    </div>
                                                    <div class="col-4">
                                                        <a id="tambah-servis" class="text-white btn btn-primary"
                                                            data-toggle="modal" data-target="#addServiceModal"><i
                                                                class="fas fa-plus"></i>
                                                            Servis</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="kategori">Kategori</label>
                                                <select class="form-control" id="kategori" name="category">
                                                        <option value=""></option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="harga-modal">Harga</label>
                                                <input type="number" class="form-control" id="harga" name="price"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Tambah Harga</button>
                                </form>
                                <hr>
                                <h5 class="mt-3">Daftar Harga</h5>
                                <ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="kiloan-tab" data-toggle="tab" href="#kiloan"
                                            role="tab" aria-controls="kiloan" aria-selected="true">Kiloan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="satuan-tab" data-toggle="tab" href="#satuan" role="tab"
                                            aria-controls="satuan" aria-selected="false">Satuan</a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-3" id="myTabContent">
                                    <div class="tab-pane fade show active" id="kiloan" role="tabpanel"
                                        aria-labelledby="kiloan-tab">
                                        <table id="tbl-kiloan" class="table dataTable dt-responsive nowrap"
                                            style="width:100%">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Barang</th>
                                                    <th>Servis</th>
                                                    <th>Harga</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>/kilo</td>
                                                        <td>
                                                            <a href="#" class="badge badge-warning btn-ubah-harga"
                                                                data-id="" data-toggle="modal"
                                                                data-target="#changePriceModal">Ubah Harga</a>
                                                        </td>
                                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="satuan" role="tabpanel" aria-labelledby="satuan-tab">
                                        <table id="tbl-satuan" class="table dataTable dt-responsive nowrap"
                                            style="width:100%">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Barang</th>
                                                    <th>Servis</th>
                                                    <th>Harga</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>/pcs</td>
                                                        <td>
                                                            <a href="#" class="badge badge-warning btn-ubah-harga"
                                                                data-id="" data-toggle="modal"
                                                                data-target="#changePriceModal">Ubah Harga</a>
                                                        </td>
                                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <hr>
                                <h5 class="mt-3">Daftar Tipe Service</h5>
                                <div class="tab-content mt-3" id="myTabContent">
                                    <table id="tbl-kiloan" class="table dataTable dt-responsive nowrap" style="width:100%">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Tipe Service</th>
                                                <th>Biaya</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <a href="#" class="badge badge-warning btn-update-cost"
                                                            data-id="" data-toggle="modal"
                                                            data-target="#updateCostModal">Ubah Harga</a>
                                                    </td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
    </div>   
    <!-- /Konten utama -->

        <!-- Main Footer -->
        <footer class="main-footer">
            Copyright &copy; 2023 Malaundry All rights reserved.
        </footer>
    </div>

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('vendor/adminlte/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('js/myscript.js') }}"></script>

    @yield('scripts')

    @stack('js')
</body>

</html>
