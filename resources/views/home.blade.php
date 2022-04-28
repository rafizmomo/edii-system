@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Selamat Datang {{Auth::user()->email}}
                    <br>
                    @if(Auth::user()->roles->roles == 2)
                    <div class="row mt-3">
                        <div class="col-md-4">
                            @if (Auth::user()->biodata->nama == null && Auth::user()->biodata->posisi == null)
                            <a href="{{ route('get-started') }}" class="btn btn-block btn-outline-warning">Ayo Mulai</a>
                            @else
                            <a href="{{ route('profile') }}" class="btn btn-block btn-outline-success">Profilmu</a>
                            @endif
                        </div>
                    </div>
                    @else
                    <div class="row mt-3">
                        <div class="col-md-4">
                             
                            <a href="{{ route('biodata.index') }}" class="btn btn-block btn-outline-info">Data User</a>
                             
                        </div>
                    </div>
                    @endif
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
