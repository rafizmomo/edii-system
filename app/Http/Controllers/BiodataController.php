<?php

namespace App\Http\Controllers;

use App\Models\NE\Biodata;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = User::whereHas('roles', function ($query) {
            return $query->where('roles', '=', 2);
        })->whereHas('biodata', function ($query) {
            return $query->where('posisi', '!=', null);
        })->get();
        return view('pages.ne_biodata.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Biodata::where('user_id', $id)->first();
        return view('pages.ne_biodata.view', [
            'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'posisi' => 'required|string',
            'nama' => 'required|string',
            'no_ktp' => 'required|min:10|max:20',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'golongan_darah' => 'required',
            'status' => 'required',
            'alamat_ktp' => 'required',
            'alamat_tinggal' => 'required',
            'email' => 'required|email',
            'no_telp' => 'required',
            'kontak_darurat' => 'required',
            'keahlian' => 'required',
            'persetujuan_penempatan' => 'required',
            'harapan_gaji' => 'required',
        ]);

        $biodata = Biodata::where('user_id', $id)->first();

        $biodata->update([
            'posisi' => $request->posisi,
            'nama' => $request->nama,
            'no_ktp' => $request->no_ktp,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'golongan_darah' => $request->golongan_darah,
            'status' => $request->status,
            'alamat_ktp' => $request->alamat_ktp,
            'alamat_tinggal' => $request->alamat_tinggal,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'kontak_darurat' => $request->kontak_darurat,
            'keahlian' => $request->keahlian,
            'persetujuan_penempatan' => $request->persetujuan_penempatan,
            'harapan_gaji' => $request->harapan_gaji,
        ]);

        foreach ($request->pendidikan as  $pendidikan) {
            if ($pendidikan['jenjang_pendidikan_terakhir'] != null) {
                $biodata->ne_pendidikan()->insert([
                    'ne_biodata_id' => $biodata->id,
                    'jenjang_pendidikan_terakhir' => $pendidikan['jenjang_pendidikan_terakhir'],
                    'nama_instansi' => $pendidikan['nama_instansi'],
                    'jurusan' => $pendidikan['jurusan'],
                    'tahun_lulus' => $pendidikan['tahun_lulus'],
                    'ipk' => $pendidikan['ipk'],
                ]);
            }
        }
        foreach ($request->pelatihan as $pelatihan) {
            if ($pelatihan['nama_kursus'] != null) {
                $biodata->ne_pelatihan()->insert([
                    'ne_biodata_id' => $biodata->id,
                    'nama_kursus' => $pelatihan['nama_kursus'],
                    'sertifikat' => $pelatihan['sertifikat'],
                    'tahun' => $pelatihan['tahun'],

                ]);
            }
        }
        foreach ($request->pekerjaan as $pekerjaan) {
            if ($pekerjaan['nama_perusahaan'] != null) {
                $biodata->ne_pekerjaan()->insert([
                    'ne_biodata_id' => $biodata->id,
                    'nama_perusahaan' => $pekerjaan['nama_perusahaan'],
                    'posisi_terakhir' => $pekerjaan['posisi_terakhir'],
                    'pendapatan_terakhir' => $pekerjaan['pendapatan_terakhir'],
                    'tahun' => $pekerjaan['tahun'],

                ]);
            }
        }

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function get_started()
    {
        if (Auth::user()->biodata->nama != null) {
            return view('home');
        } else {
            return view('pages.ne_biodata.create');
        }
    }
}
