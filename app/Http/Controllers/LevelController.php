<?php

namespace App\Http\Controllers;

use App\Http\Requests\LevelPostRequest;
use App\Models\LevelModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function index()
    {
        // DB::insert('insert into m_level(level_kode, level_nama, created_at) values (?, ?, ?)', ['CUS', 'Pelanggan', now()]);
        // return 'Insert data berhasil';

        // $row = DB::update('update m_level set level_nama = ? where level_kode = ?', ['Customer', 'CUS']);
        // return 'Update data berhasil, Jumlah data yang diiupdate: '. $row .' baris';

        // $row = DB::delete('delete from m_level where level_kode = ?', ['CUS']);
        // return 'Delete data berhasil, Jumlah data yang dihapus: '.$row.' baris';

        $data = DB::select('select * from m_level');
        return view('level', ['data' => $data]);
    }

    public function create()
    {
        return view('level_create');
    }

    public function store(LevelPostRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $validated = $request->safe()->only(['level_kode', 'level_nama']);
        $validated = $request->safe()->except(['level_kode', 'level_nama']);

        // if the $validated were error, below this code wont be run, it is redirect from LevelPostRequest
        LevelModel::create([
            'level_kode' => $request->level_kode,
            'level_nama' => $request->level_nama 
        ]);

        return redirect('/level');
    }
}
