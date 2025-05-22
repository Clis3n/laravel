@extends('layouts.template')

@section('content')
<div class="container mt-5">
    <div class="text-center mb-5">
        <h1 class="display-4">Sistem Informasi Geografis</h1>
        <p class="lead">Kelola dan analisis data spasial desa dengan mudah dan cepat.</p>
    </div>

    <div class="row">


    <!-- Modul Akses -->
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Kelola Data Layer</h5>
                    <p class="card-text">Tambah, edit, atau hapus data spasial yang tersedia.</p>
                    <a href="{{ url('/table') }}" class="btn btn-outline-primary">Buka Tabel</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Lihat Peta Interaktif</h5>
                    <p class="card-text">Eksplorasi peta dengan fitur interaktif dan overlay layer.</p>
                    <a href="{{ url('/map') }}" class="btn btn-outline-success">Lihat Peta</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Dokumentasi & Profil</h5>
                    <p class="card-text">Informasi tentang pengembang dan panduan aplikasi.</p>
                    <a href="{{ url('/profil') }}" class="btn btn-outline-secondary">Lihat Profil</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


