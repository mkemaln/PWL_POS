@extends('adminlte::page')
@section('title', 'Tambah User')
@section('content_header')
    <h1>Tambah</h1>
@stop

@section('content')
    <div class="card card-secondary">
        <div class="card-header">
          <h3 class="card-title">Form Tambah User</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="/user/tambah_simpan" method="post">
                {{ csrf_field() }}
            <div class="row">
              <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Enter the Username">
                </div>
              </div>
              <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter the Password">
                </div>
              </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Enter your name">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- select -->
                    <div class="form-group">
                    <label>Pilih Level</label>
                    <input type="text" name="level_id" class="form-control @error('level_id') is-invalid @enderror" placeholder="Enter the Level ID">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/user" class="btn btn-secondary mx-3">Kembali</a>
            </div>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
@stop

@section('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
 