@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <!-- start page title -->
        <div class="row p-4" style="background-color: #fff;">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <div>
                        <h4 class="mb-0 font-size-18 mb-2">Halo Selamat Datang, {{$userData->name}}</h4>
                        <p>Semoga Aktifitas Belajarmu Menyenangkan</p>
                    </div>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Aljabar</a></li>
                            <li class="breadcrumb-item active">Home</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    <!-- end page title -->
    <div class="row mt-3">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    
                    <h4 class="card-title"><i class="far fa-clock"></i> Aktifitas Belajar Siswa</h4>
                    <div class="border-bottom border-gray-300 mb-8"></div>
                    <br>
                        <div class="table-responsive mb-3 bg-gray p-3">
                            <table class="table table-centered table-borderless table-xl mb-0" id="recent-orders" width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <h6 class="font-size-5 mb-2 mt-2 font-weight-bold">Belum Selesai</h6>
                                            <span class="text-muted font-size-16">Aljabar itu Mudah</span>
                                        </td>
                                        <td width="30%">
                                            <a href="" >Lanjutkan Belajar <i class="mdi mdi-chevron-right d-none d-sm-inline-block"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="table-responsive mb-3 bg-gray p-3">
                            <table class="table table-centered table-borderless table-xl mb-0" id="recent-orders" width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <h6 class="font-size-5 mb-2 mt-2 font-weight-bold text-success">Telah Selesai <i class="fas fa-check text-success"></i></h6>
                                            <span class="text-muted font-size-16">Materi Aljabar Awal</span>
                                        </td>
                                        <td width="30%">
                                            <center>
                                            <a href="" class="font-size-5 badge badge-dark p-2 text-white "><i class="fas fa-clipboard-check"></i>  Lihat Nilai Akhir</a>
                                            </center>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="table-responsive mb-3 bg-gray p-3">
                            <table class="table table-centered table-borderless table-xl mb-0" id="recent-orders" width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <h6 class="font-size-5 mb-2 mt-2 font-weight-bold text-success">Telah Selesai <i class="fas fa-check text-success"></i></h6>
                                            <span class="text-muted font-size-16">Materi Aljabar Akhir</span>
                                        </td>
                                        <td width="30%">
                                            <center>
                                            <a href="" class="font-size-5 badge badge-dark p-2 text-white "><i class="fas fa-clipboard-check"></i>  Lihat Nilai Akhir</a>
                                            </center>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="">

                        </div>
                        <div class="table-responsive mb-3 bg-gray p-3">
                            <table class="table table-centered table-borderless table-xl mb-0" id="recent-orders" width="100%"> 
                                <tbody>
                                    <tr>
                                        <td>
                                            <h6 class="font-size-5 mb-2 font-weight-bold">Belum Selesai</h6>
                                            <span class="text-muted font-size-16">Mengetahui Dasar Aljabar</span>
                                        </td>
                                        <td width="30%">
                                            <a href="" >Lanjutkan Belajar <i class="mdi mdi-chevron-right d-none d-sm-inline-block"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    <p class=""><a href="">Lihat Selengkapnya</a></p>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
        
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    
                    <h4 class="card-title"><i class="fas fa-tasks"></i> Laporan Belajar Siswa</h4>
                    <div class="border-bottom border-gray-300 mb-8"></div>
                        <div class="row mt-3">
                            <div class="col-xl-6">
                                <div class="card border-0" style="background-color: #ececec;">
                                    <div class="card-body">
                                    <h4 class="card-title">XXX</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card border-0" style="background-color: #ececec;">
                                    <div class="card-body">
                                    <h4 class="card-title">XX</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card border-0" style="background-color: #ececec;">
                                    <div class="card-body">
                                    <h4 class="card-title">XX</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    
</div> <!-- container-fluid -->
@endsection
