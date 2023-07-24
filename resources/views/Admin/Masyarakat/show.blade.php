@extends('layouts.admin')

@section('title', 'Detail Mahasiswa')

@section('css')
    <style>
        .text-primary:hover {
            text-decoration: underline;
        }

        .text-grey {
            color: #6c757d;
        }

        .text-grey:hover {
            color: #6c757d;
        }
    </style>
@endsection

@section('header')
    <a href="{{ route('masyarakat.index') }}" class="text-primary">Data Mahasiswa</a>
    <a href="#" class="text-grey">/</a>
    <a href="#" class="text-grey">Detail Mahasiswa</a>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        Detail Mahasiswa
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>NIM</th>
                                <td>:</td>
                                <td>{{ $masyarakat->nik }}</td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>:</td>
                                <td>{{ $masyarakat->nama }}</td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td>:</td>
                                <td>{{ $masyarakat->username }}</td>
                            </tr>
                            <tr>
                                <th>No Telp</th>
                                <td>:</td>
                                <td>{{ $masyarakat->telp }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection