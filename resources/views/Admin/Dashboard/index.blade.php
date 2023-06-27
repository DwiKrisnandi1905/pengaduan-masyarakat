@extends('layouts.admin')

@section('title', 'Halaman Dashboard')

@section('header', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header text-center" style="background-color: Blue; color: white;">Admin</div>
                <div class="card-body" style="background-color: DeepSkyBlue; color: white;">
                    <div class="text-center">
                        {{ $petugas }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header text-center" style="background-color: Blue; color: white;">Mahasiswa</div>
                <div class="card-body" style="background-color: DeepSkyBlue; color: white;">
                <div class="text-center">
                        {{ $masyarakat }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header text-center" style="background-color: Blue; color: white;">Pengaduan Proses</div>
                <div class="card-body" style="background-color: DeepSkyBlue; color: white;">
                <div class="text-center">
                        {{ $proses }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header text-center" style="background-color: Blue; color: white;">Pengaduan Selesai</div>
                <div class="card-body" style="background-color: DeepSkyBlue; color: white;">
                <div class="text-center">   
                        {{ $selesai }}
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center" style="width: 100%">
            <a href="{{ route('admin.logout') }}" class="btn btn-danger text-white mt-3">LOGOUT</a>
        </div>
    </div>
@endsection