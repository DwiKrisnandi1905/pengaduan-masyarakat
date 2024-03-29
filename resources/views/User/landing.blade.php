@extends('layouts.user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endsection

@section('title', 'PEKAT POLINES - Pengaduan Masyarakat POLINES')

@section('content')
{{-- Section Header --}}
<section class="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
        <img src="images/polines.png" width="90px">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h4 class="semi-bold mb-0 text-white">PEKAT POLINES</h4>
                <p class="italic mt-0 text-white">Pengaduan Masyarakat POLINES</p>
            </a>
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    @if(Auth::guard('masyarakat')->check())
                    <ul class="navbar-nav text-center ml-auto">
                        <li class="nav-item">
                            <a class="nav-link ml-3 text-white" href="{{ route('pekat.laporan') }}">Laporan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ml-3 text-white" href="{{ route('pekat.logout') }}"
                                style="text-decoration: underline">{{ Auth::guard('masyarakat')->user()->nama }}</a>
                        </li>
                    </ul>
                    @else
                    <ul class="navbar-nav text-center ml-auto">
                        <li class="nav-item">
                            <a href="" class="btn btn-info text-white mt-3" data-toggle="modal"
                                data-target="#loginModal">Masuk</a>
                            <a href="{{ route('pekat.formRegister') }}" class="btn btn-info text-white mt-3">Registrasi Mahasiswa</a>
                            <a href="{{ route('admin.formLogin') }}" class="btn btn-info text-white mt-3">Admin Login</a>
                    </ul>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
    <div class="text-center">
        <div class="card1">
            <div class="card-body1">
                <h2 class="semi-bold text-white mt-3">Layanan Pengaduan Masyarakat POLINES</h2>
                <p class="semi-bold text-white mb-5">Sampaikan laporan Anda langsung kepada pihak POLINES</p>
            </div>
        </div>
    </div>
</div>
    <div class="wave wave1"></div>
    <div class="wave wave2"></div>
    <div class="wave wave3"></div>
    <div class="wave wave4"></div>
</section>
@if(Auth::guard('masyarakat')->check())

{{-- Section Card Pengaduan --}}
<div class="row justify-content-center move-up">
    <div class="col-lg-6 col-10 col">
        <div class="content shadow">

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif

            @if (Session::has('pengaduan'))
                <div class="alert alert-{{ Session::get('type') }}">{{ Session::get('pengaduan') }}</div>
            @endif
            <div class="card mb-3">Tulis Laporan Disini</div>
            <form action="{{ route('pekat.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <textarea name="isi_laporan" placeholder="Masukkan Isi Laporan" class="form-control"
                        rows="4">{{ old('isi_laporan') }}</textarea>
                </div>
                <button type="submit" class="btn btn-custom mt-2">Kirim</button>
            </form>
        </div>
    </div>
</div>
@endif

{{-- Kategori Pengaduan --}}
<div class="pengaduan mt-5">
    <div class="bg-purple">
        <div class="text-left">
            <h5 class="medium text-white mt-3">KATEGORI PENGADUAN</h5>
            <h2 class="medium text-white">1. Fasilitas</h2>
            <h2 class="medium text-white">2. Kebersihan</h2>
            <h2 class="medium text-white">3. Sarana dan Prasarana</h2>
        </div>
    </div>
</div>

{{-- Footer --}}
<div class="mt-5">
    <hr>
    <div class="text-center">
        <p class="italic text-secondary">Dwi Krisnandi</p>
    </div>
</div>
{{-- Modal --}}
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h3 class="mt-3">Masuk terlebih dahulu</h3>
                <p>Silahkan masuk menggunakan akun yang sudah didaftarkan.</p>
                <form action="{{ route('pekat.login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-purple text-white mt-3" style="width: 100%">MASUK</button>
                </form>
                @if (Session::has('pesan'))
                <div class="alert alert-danger mt-2">
                    {{ Session::get('pesan') }}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    @if (Session::has('pesan'))
    <script>
        $('#loginModal').modal('show');

    </script>
    @endif
@endsection