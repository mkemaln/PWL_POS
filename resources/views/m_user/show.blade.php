@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'User')
@section('content_header_title', 'M_User')
@section('content_header_subtitle', 'Show')

@section('content')
<div class="card">
    <div class="card-header bg-warning">
        <div class="card-title">
            <h2>Show User</h2>
        </div>
    </div>
    
    <div class="card-body">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>User_id:</strong>
                    {{ $useri->user_id }}
                </div>
            </div>
        
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Level_id:</strong>
                    {{ $useri->level_id }}
                </div>
            </div>
        
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Username:</strong>
                    {{ $useri->username }}
                </div>
            </div>
        
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    {{ $useri->nama }}
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Password:</strong>
                    {{ $useri->password }}
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <a class="btn btn-secondary float-left" href="{{ route('m_user.index') }}">Kembali</a>
    </div>
</div>

@endsection
