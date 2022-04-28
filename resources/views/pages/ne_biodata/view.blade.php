@extends('layouts.app')

@push('addon-style')
 
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ route('biodata.index') }}" class="btn btn-outline-warning mb-3">Kembali</a>
            <div class="card">
                <div class="card-header">Profil Pelamar</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                        <div class="row mb-3">
                            <label for="nama" class="col-md-4 col-form-label ">Posisi yang Dilamar</label>

                            <div class="col-md-8">
                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $item->posisi }}" readonly required autocomplete="nama">

                                
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nama" class="col-md-4 col-form-label ">Nama</label>

                            <div class="col-md-8">
                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $item->nama }}" readonly required autocomplete="nama">

                                 
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="no_ktp" class="col-md-4 col-form-label ">No KTP</label>
                        
                            <div class="col-md-8">
                                <input id="no_ktp" type="text" class="form-control @error('no_ktp') is-invalid @enderror" name="no_ktp" value="{{  $item->no_ktp }}" readonly required autocomplete="no_ktp">
                        
                                
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tempat_lahir" class="col-md-4 col-form-label ">Tempat / Tanggal Lahir</label>
                        
                            <div class="col-md-4">
                                <input id="tempat_lahir" type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{  $item->tempat_lahir }}"readonly required autocomplete="tempat_lahir">
                        
                                

                                
                            </div>

                            <div class="col-md-4">
                                <input id="tanggal_lahir" type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{  $item->tanggal_lahir }}"readonly required autocomplete="tanggal_lahir">
                        
                                @error('tanggal_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       

                        <div class="row mb-3">
                            <label for="jenis_kelamin" class="col-md-4 col-form-label ">Jenis Kelamin</label>
                        
                            <div class="col-md-8">
                                 
                                <div class="mt-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="jenis_kelamin" type="radio" id="radioJKL" value="l" {{ $item->jenis_kelamin == 'l' ?  'checked' : 'disabled'}} >
                                        <label class="form-check-label" for="inlineCheckbox1">Laki-Laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="jenis_kelamin" type="radio" id="radioJKP" value="p" {{ $item->jenis_kelamin == 'p' ?  'checked' : 'disabled'}} >
                                        <label class="form-check-label" for="radioJKLP">Perempuan</label>
                                    </div>
                                </div>
                                 

                                @error('jenis_kelamin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="agama" class="col-md-4 col-form-label ">Agama</label>
                        
                            <div class="col-md-8">
                                <input id="agama" type="text" class="form-control @error('agama') is-invalid @enderror" name="agama" value="{{ $item->agama }}" readonly required autocomplete="agama">
                        
                                @error('agama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="golongan_darah" class="col-md-4 col-form-label ">Golongan Darah</label>
                        
                            <div class="col-md-8">
                                <div class="mt-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="golongan_darah" type="radio" id="radioGDA" value="a" {{ $item->golongan_darah == 'a' ?  'checked' : 'disabled'}} >
                                        <label class="form-check-label" for="radioGDA">A</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="golongan_darah" type="radio" id="radioGDB" value="b" {{ $item->golongan_darah == 'b' ?  'checked' : 'disabled'}} >
                                        <label class="form-check-label" for="radioGDB">B</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="golongan_darah" type="radio" id="radioGDAB" value="ab" {{ $item->golongan_darah == 'ab' ?  'checked' : 'disabled'}} >
                                        <label class="form-check-label" for="radioGDAB">AB</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="golongan_darah" type="radio" id="radioGDO" value="o" {{ $item->golongan_darah == 'o' ?  'checked' : 'disabled'}} >
                                        <label class="form-check-label" for="radioGDO">O</label>
                                    </div>
                                </div>
                                @error('golongan_darah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="status" class="col-md-4 col-form-label ">Status</label>
                        
                            <div class="col-md-8">
                                <input id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{   $item->status }}" readonly required autocomplete="status">
                        
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="alamat_ktp" class="col-md-4 col-form-label ">Alamat KTP</label>
                        
                            <div class="col-md-8">
                                <textarea id="alamat_ktp" type="text" class="form-control @error('alamat_ktp') is-invalid @enderror" name="alamat_ktp"  readonly autocomplete="alamat_ktp">{{  $item->alamat_ktp }}</textarea>
                                @error('alamat_ktp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="alamat_tinggal" class="col-md-4 col-form-label ">Alamat Tinggal</label>
                        
                            <div class="col-md-8">
                                <textarea id="alamat_tinggal" type="text" class="form-control @error('alamat_tinggal') is-invalid @enderror" name="alamat_tinggal" readonly required autocomplete="alamat_tinggal">{{  $item->alamat_tinggal }}</textarea>
                                @error('alamat_tinggal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label ">Email</label>
                        
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{  $item->email }}" readonly required autocomplete="email">
                        
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="no_telp" class="col-md-4 col-form-label ">Nomor Telepon</label>
                        
                            <div class="col-md-6">
                                <input id="no_telp" type="tel" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{  $item->no_telp }}" readonly required autocomplete="no_telp">
                        
                                @error('no_telp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="kontak_darurat" class="col-md-4 col-form-label ">Orang Terdekat Yang Dapat Dihubungi</label>
                        
                            <div class="col-md-8">
                                <input id="kontak_darurat" type="text" class="form-control @error('kontak_darurat') is-invalid @enderror" name="kontak_darurat" value="{{ $item->kontak_darurat }}" readonly required autocomplete="kontak_darurat">
                        
                                @error('kontak_darurat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="pendidikan_terakhir" class="col-md-4 col-form-label ">Pendidikan Terakhir</label>
                        
                            <div class="col-md-12 mt-2">
                                <table class="table table-bordered" id="dynamicPendidikan">
                                    <tr>
                                        <th class="text-center">Jenis Pendidikan Terakhir</th>
                                        <th class="text-center">Nama Institusi</th>
                                        <th class="text-center">Jurusan</th>
                                        <th class="text-center">Tahun Lulus</th>
                                        <th class="text-center">IPK</th>
                                         
                                    </tr>
                                   
                                    @forelse ($item->ne_pendidikan as $pendidikan)
                                    <tr>
                                        <td><input type="text" name="jenjang_pendidikan_terakhir" readonly value="{{ $pendidikan->jenjang_pendidikan_terakhir }}" class="form-control" />
                                        </td>
                                        <td><input type="text" name="nama_instansi" readonly  value="{{ $pendidikan->nama_instansi }}" class="form-control" />
                                        </td>
                                        <td><input type="text" name="jurusan" readonly value="{{ $pendidikan->jurusan }}" class="form-control" />
                                        </td>
                                        <td><input type="text" name="tahun_lulus" readonly value="{{ $pendidikan->tahun_lulus }}" class="form-control year" />
                                        </td>
                                        <td><input type="text" name="ipk" readonly value="{{ $pendidikan->ipk }}" class="form-control" />
                                        </td>
                                        
                                        
                                    </tr>
                                    @empty
                                    <tr>
                                        <td><input type="text" name="jenjang_pendidikan_terakhir" readonly value="" class="form-control" />
                                        </td>
                                        <td><input type="text" name="nama_instansi" readonly  value="" class="form-control" />
                                        </td>
                                        <td><input type="text" name="jurusan" readonly value="" class="form-control" />
                                        </td>
                                        <td><input type="text" name="tahun_lulus" readonly value="" class="form-control year" />
                                        </td>
                                        <td><input type="text" name="ipk" readonly value="" class="form-control" />
                                        </td>
                                    </tr>
                                    @endforelse
                                    
                                   
                                </table>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="pelatihan" class="col-md-4 col-form-label ">Riwayat Pelatihan</label>
                        
                            <div class="col-md-12 mt-2">
                                <table class="table table-bordered" id="dynamicPelatihan">
                                    <tr>
                                        
                                        <th class="text-center">Nama Kursus / Seminar</th>
                                        <th class="text-center">Sertifikat</th>
                                        <th class="text-center">Tahun</th>
                                        
                                         
                                    </tr>
                                  
                                   
                                    @forelse ($item->ne_pelatihan as $pelatihan)
                                    <tr>
                                        <td><input type="text" name="nama_kursus" readonly value="{{ $pelatihan->nama_kursus }}" class="form-control" />
                                        </td>
                                        <td><input type="text" name="sertifikat" readonly  value="{{ $pelatihan->sertifikat }}" class="form-control" />
                                        </td>
                                        <td><input type="text" name="tahun" readonly value="{{ $pelatihan->tahun }}" class="form-control" />
                                        </td>
                                        
                                        
                                    </tr>
                                    @empty
                                    <tr>
                                        <td><input type="text" name="nama_kursus" readonly value=" " class="form-control" />
                                        </td>
                                        <td><input type="text" name="sertifikat" readonly  value=" " class="form-control" />
                                        </td>
                                        <td><input type="text" name="tahun" readonly value=" " class="form-control" />
                                        </td>
                                        
                                        
                                    </tr>
                                    @endforelse
                                    
                                </table>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="pekerjaan" class="col-md-4 col-form-label ">Riwayat Pekerjaan</label>
                        
                            <div class="col-md-12 mt-2">
                                <table class="table table-bordered" id="dynamicPekerjaan">
                                    <tr>
                                        
                                        <th class="text-center">Nama Perusahaan</th>
                                        <th class="text-center">Posisi Terakhir</th>
                                        <th class="text-center">Pendapatan Terakhir</th>
                                        <th class="text-center">Tahun</th>
                                        
                                         
                                    </tr>
                                     
                                        @forelse ($item->ne_pekerjaan as $pekerjaan)
                                        <tr>
                                            <td><input type="text" name="nama_perusahaan" readonly value="{{ $pekerjaan->nama_perusahaan }}" class="form-control" />
                                            </td>
                                            <td><input type="text" name="posisi_terakhir" readonly  value="{{ $pekerjaan->posisi_terakhir }}" class="form-control" />
                                            </td>
                                            <td><input type="text" name="pendapatan_terakhir" readonly  value="{{ $pekerjaan->pendapatan_terakhir }}" class="form-control" />
                                            </td>
                                            <td><input type="text" name="tahun" readonly value="{{ $pekerjaan->tahun }}" class="form-control" />
                                            </td>
                                            
                                            
                                        </tr>
                                        @empty
                                        <tr>
                                            <td><input type="text" name="nama_perusahaan" readonly value=" " class="form-control" />
                                            </td>
                                            <td><input type="text" name="posisi_terakhir" readonly  value=" " class="form-control" />
                                            </td>
                                            <td><input type="text" name="pendapatan_terakhir" readonly  value=" " class="form-control" />
                                            </td>
                                            <td><input type="text" name="tahun" readonly value=" " class="form-control" />
                                            </td>
                                             
                                             
                                        </tr>
                                        @endforelse
                                    
                                   
                                </table>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="keahlian" class="col-md-4 col-form-label ">Keahlian</label>
                        
                            <div class="col-md-8">
                                <textarea id="keahlian" type="text" class="form-control @error('keahlian') is-invalid @enderror" name="keahlian" readonly required autocomplete="keahlian">{{ $item->keahlian }}</textarea>
                                @error('keahlian')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="row mb-3">
                            <label for="persetujuan_penempatan" class="col-md-4 col-form-label ">Persetujuan Penempatan</label>
                        
                            <div class="col-md-8">
                                <div class="mt-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="persetujuan_penempatan" type="radio" id="radioPTY" value="y" {{ $item->persetujuan_penempatan == 'y' ?  'checked' : 'disabled'}} >
                                        <label class="form-check-label" for="radioPTY">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="persetujuan_penempatan" type="radio" id="radioPTN" value="n" {{ $item->persetujuan_penempatan == 'n' ?  'checked' : 'disabled'}} >
                                        <label class="form-check-label" for="radioPTN">Tidak</label>
                                    </div>
                                </div>
                                @error('persetujuan_penempatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="harapan_gaji" class="col-md-4 col-form-label ">Harapan Gaji</label>
                        
                            <div class="col-md-8">
                                <input id="harapan_gaji" type="text" class="form-control @error('harapan_gaji') is-invalid @enderror" name="harapan_gaji" value="{{ $item->harapan_gaji }}" readonly required autocomplete="harapan_gaji">
                        
                                @error('harapan_gaji')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('addon-script')
<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script> 
@endpush