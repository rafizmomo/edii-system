@extends('layouts.app')

@push('addon-style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/r-2.2.9/sb-1.3.2/sp-2.0.0/datatables.min.css"/>

@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ route('home') }}" class="btn btn-outline-warning mb-3">Kembali</a>
            <div class="card">
                <div class="card-header">Data Pelamar</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered" id="tableUser">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Tempat & Tanggal Lahir</th>
                                <th>Posisi yang Dilamar</th>
                                 
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($items as $item) 
                        <tr>
                            <td>{{ $item->biodata->nama }}</td>
                            <td>{{ $item->biodata->tempat_lahir }}, {{ $item->biodata->tanggal_lahir }}</td>
                            <td>{{ $item->biodata->posisi }}</td>
                            
                            <td><a href="{{ route('biodata.show', $item->id) }}" class="btn btn-sm btn-outline-primary">Lihat</a></td>
                        </tr>
                        
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('addon-script')
<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/r-2.2.9/sb-1.3.2/sp-2.0.0/datatables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#tableUser').DataTable();
    } );
</script>
@endpush