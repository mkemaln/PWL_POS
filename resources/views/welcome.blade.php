@extends('layouts.app')

{{-- Cuztomize layout sections --}}

@section('subtitle', 'welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Welcome')

{{-- Content body: main page content --}}

@section('content_body')
    <p>Welcome to this beatiful admin panel</p>
@endsection

{{-- Push extra css --}}

@push('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- Push extra script --}}

@push('js')
    <script>
        console.log("Hi, im using laravel adminLTE package!");
    </script>
@endpush