@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Delete')

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Hapus Kategori</h3>
            </div>
            {{ method_field('PUT') }}
            <div class="card-body">
                <p>Apakah anda yakin untuk menghapus data ini?</p>
                <ul>
                    <li>Kode Kategori : {{ $data->kategori_kode }}</li>
                    <li>Nama Kategori : {{ $data->kategori_nama }}</li>
                </ul>
            </div>

            <div class="card-footer">
                <form action="../delete_confirm/{{ $data->kategori_id }}">
                    <button type="submit" class="btn btn-danger mr-5">Konfirmasi</button>
                    <a href="/kategori"><button type="button" class="btn btn-success">Kembali</button></a>
                </form>
                
            </div>
        </div>
    </div>
@endsection