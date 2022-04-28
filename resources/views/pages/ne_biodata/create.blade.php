@extends('layouts.app')

@push('addon-style')
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Get Started!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('biodata.update', Auth::user()->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <label for="posisi" class="col-md-4 col-form-label ">Posisi Yang Dilamar</label>

                            <div class="col-md-8">
                                <input id="posisi" type="text" class="form-control @error('posisi') is-invalid @enderror" name="posisi" value="{{ old('posisi') }}" required autocomplete="posisi">

                                @error('posisi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                  
                        <div class="row mb-3">
                            <label for="nama" class="col-md-4 col-form-label ">Nama</label>

                            <div class="col-md-8">
                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama">

                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="no_ktp" class="col-md-4 col-form-label ">No KTP</label>
                        
                            <div class="col-md-8">
                                <input id="no_ktp" type="text" class="form-control @error('no_ktp') is-invalid @enderror" name="no_ktp" value="{{ old('no_ktp') }}" required autocomplete="no_ktp">
                        
                                @error('no_ktp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tempat_lahir" class="col-md-4 col-form-label ">Tempat / Tanggal Lahir</label>
                        
                            <div class="col-md-4">
                                <input id="tempat_lahir" type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required autocomplete="tempat_lahir">
                        
                                @error('tempat_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                
                            </div>

                            <div class="col-md-4">
                                <input id="tanggal_lahir" type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required autocomplete="tanggal_lahir">
                        
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
                                        <input class="form-check-input" name="jenis_kelamin" type="radio" id="radioJKL" value="l">
                                        <label class="form-check-label" for="inlineCheckbox1">Laki-Laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="jenis_kelamin" type="radio" id="radioJKP" value="p">
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
                                <input id="agama" type="text" class="form-control @error('agama') is-invalid @enderror" name="agama" value="{{ old('agama') }}" required autocomplete="agama">
                        
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
                                        <input class="form-check-input" name="golongan_darah" type="radio" id="radioGDA" value="a">
                                        <label class="form-check-label" for="radioGDA">A</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="golongan_darah" type="radio" id="radioGDB" value="b">
                                        <label class="form-check-label" for="radioGDB">B</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="golongan_darah" type="radio" id="radioGDAB" value="ab">
                                        <label class="form-check-label" for="radioGDAB">AB</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="golongan_darah" type="radio" id="radioGDO" value="o">
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
                                <input id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" required autocomplete="status">
                        
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
                                <textarea id="alamat_ktp" type="text" class="form-control @error('alamat_ktp') is-invalid @enderror" name="alamat_ktp" value="{{ old('alamat_ktp') }}" required autocomplete="alamat_ktp"></textarea>
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
                                <textarea id="alamat_tinggal" type="text" class="form-control @error('alamat_tinggal') is-invalid @enderror" name="alamat_tinggal" value="{{ old('alamat_tinggal') }}" required autocomplete="alamat_tinggal"></textarea>
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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        
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
                                <input id="no_telp" type="tel" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{ old('no_telp') }}" required autocomplete="no_telp">
                        
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
                                <input id="kontak_darurat" type="text" class="form-control @error('kontak_darurat') is-invalid @enderror" name="kontak_darurat" value="{{ old('kontak_darurat') }}" required autocomplete="kontak_darurat">
                        
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
                                        <th>Jenis Pendidikan Terakhir</th>
                                        <th>Nama Institusi</th>
                                        <th>Jurusan</th>
                                        <th>Tahun Lulus</th>
                                        <th>IPK</th>
                                        <th>Aksi</th>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="pendidikan[0][jenjang_pendidikan_terakhir]" class="form-control" />
                                        </td>
                                        <td><input type="text" name="pendidikan[0][nama_instansi]" class="form-control" />
                                        </td>
                                        <td><input type="text" name="pendidikan[0][jurusan]" class="form-control" />
                                        </td>
                                        <td><input type="number" name="pendidikan[0][tahun_lulus]" class="form-control year" />
                                        </td>
                                        <td><input type="text" name="pendidikan[0][ipk]" class="form-control" />
                                        </td>
                                         
                                        <td><button type="button" name="add_pendidikan" id="dynamic-pendidikan" class="btn btn-outline-primary">+</button></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="pelatihan" class="col-md-4 col-form-label ">Riwayat Pelatihan</label>
                        
                            <div class="col-md-12 mt-2">
                                <table class="table table-bordered" id="dynamicPelatihan">
                                    <tr>
                                        
                                        <th>Nama Kursus / Seminar</th>
                                        <th>Sertifikat</th>
                                        <th>Tahun</th>
                                        
                                        <th>Aksi</th>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="pelatihan[0][nama_kursus]" class="form-control" />
                                        </td>
                                        <td><input type="text" name="pelatihan[0][sertifikat]" class="form-control" />
                                        </td>
                                        <td><input type="number" name="pelatihan[0][tahun]" class="form-control year" />
                                        </td>
                                         
                                        <td><button type="button" name="add_pelatihan" id="dynamic-pelatihan" class="btn btn-outline-primary">+</button></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="pekerjaan" class="col-md-4 col-form-label ">Riwayat Pekerjaan</label>
                        
                            <div class="col-md-12 mt-2">
                                <table class="table table-bordered" id="dynamicPekerjaan">
                                    <tr>
                                        
                                        <th>Nama Perusahaan</th>
                                        <th>Posisi Terakhir</th>
                                        <th>Pendapatan Terakhir</th>
                                        <th>Tahun</th>
                                        
                                        <th>Aksi</th>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="pekerjaan[0][nama_perusahaan]" class="form-control" />
                                        </td>
                                        <td><input type="text" name="pekerjaan[0][posisi_terakhir]" class="form-control" />
                                        </td>
                                        <td><input type="text" name="pekerjaan[0][pendapatan_terakhir]" class="form-control" />
                                        </td>
                                        <td><input type="number" name="pekerjaan[0][tahun]" class="form-control year" />
                                        </td>
                                         
                                        <td><button type="button" name="add_pekerjaan" id="dynamic-pekerjaan" class="btn btn-outline-primary">+</button></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="keahlian" class="col-md-4 col-form-label ">Keahlian</label>
                        
                            <div class="col-md-8">
                                <textarea id="keahlian" type="text" class="form-control @error('keahlian') is-invalid @enderror" name="keahlian" value="{{ old('keahlian') }}" required autocomplete="keahlian"></textarea>
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
                                        <input class="form-check-input" name="persetujuan_penempatan" type="radio" id="radioPTY" value="y">
                                        <label class="form-check-label" for="radioPTY">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="persetujuan_penempatan" type="radio" id="radioPTN" value="n">
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
                                <input id="harapan_gaji" type="text" class="form-control @error('harapan_gaji') is-invalid @enderror" name="harapan_gaji" value="{{ old('harapan_gaji') }}" required autocomplete="harapan_gaji">
                        
                                @error('harapan_gaji')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">

    $(".year").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years"
    });
    var i_pendidikan = 0;
    $("#dynamic-pendidikan").click(function () {
        ++i_pendidikan;
        var text_pendidikan = `<tr>
            <td><input type="text" name="pendidikan[${i_pendidikan}][jenjang_pendidikan_terakhir]" class="form-control" />
            </td>
            <td><input type="text" name="pendidikan[${i_pendidikan}][nama_instansi]" class="form-control" />
            </td>
            <td><input type="text" name="pendidikan[${i_pendidikan}][jurusan]" class="form-control" />
            </td>
            <td><input type="text" name="pendidikan[${i_pendidikan}][tahun_lulus]" class="form-control year" />
            </td>
            <td><input type="text" name="pendidikan[${i_pendidikan}][ipk]" class="form-control" />
            </td>
                
            <td><button type="button" class="btn btn-outline-danger remove-input-field">-</button></td>
        </tr>
        `;
        $("#dynamicPendidikan").append(text_pendidikan);
    });

    var i_pelatihan = 0;

    $("#dynamic-pelatihan").click(function () {
        ++i_pelatihan;
        var text_pelatihan = `<tr>
            <td><input type="text" name="pelatihan[${i_pelatihan}][nama_kursus]" class="form-control" />
            </td>
            <td><input type="text" name="pelatihan[${i_pelatihan}][sertifikat]" class="form-control" />
            </td>
            <td><input type="text" name="pelatihan[${i_pelatihan}][tahun]" class="form-control year" />
            </td>
            
                
            <td><button type="button" class="btn btn-outline-danger remove-input-field">-</button></td>
        </tr>
        `;
        $("#dynamicPelatihan").append(text_pelatihan);
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });

    var i_pekerjaan = 0;

    $("#dynamic-pekerjaan").click(function () {
        ++i_pekerjaan;
        var text_pekerjaan = `<tr>
            <td><input type="text" name="pekerjaan[${i_pekerjaan}][nama_perusahaan]" class="form-control" />
            </td>
            <td><input type="text" name="pekerjaan[${i_pekerjaan}][posisi_terakhir]" class="form-control" />
            </td>
            <td><input type="text" name="pekerjaan[${i_pekerjaan}][pendapatan_terakhir]" class="form-control" />
            </td>
            <td><input type="text" name="pekerjaan[${i_pekerjaan}][tahun]" class="form-control year" />
            </td>
                
            
                
            <td><button type="button" class="btn btn-outline-danger remove-input-field">-</button></td>
        </tr>
        `;
        $("#dynamicPekerjaan").append(text_pekerjaan);
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
</script>
@endpush