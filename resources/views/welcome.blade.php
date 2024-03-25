@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    {{-- <div class="card-body">
    <form>
        <div class="row">
            <div class="col-sm-6">
            <!-- text input -->
                <div class="form-group">
                    <label>Level id</label><input type="text" class="form-control" placeholder="id">
                </div>
            </div>
        </div>
        <button type = "submit" class ="btn btn-info">Submit </button>
    </div> --}}
    <div class="card card-warning">
        <div class="card-header">
          <h3 class="card-title">Form Tambah Level</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <form>
            <div class="row">
              <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                  <label>Kode Level</label>
                  <input type="text" class="form-control" placeholder="Enter the Level Code">
                </div>
              </div>
              <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                  <label>Nama Level</label>
                  <input type="text" class="form-control" placeholder="Enter the Name Code">
                </div>
              </div>
            </div>
          </form>
          <div type="submit" class="btn btn-info">Submit</div>
        </div>
        <!-- /.card-body -->
      </div>

    <div class="card card-secondary">
        <div class="card-header">
          <h3 class="card-title">Form Tambah User</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <form>
            <div class="row">
              <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" placeholder="Enter the Username">
                </div>
              </div>
              <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" placeholder="Enter the Password">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <!-- select -->
                <div class="form-group">
                  <label>Pilih Level</label>
                  <select class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                  </select>
                </div>
              </div>
            </div>
          </form>
          <div type="submit" class="btn btn-info">Submit</div>
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
