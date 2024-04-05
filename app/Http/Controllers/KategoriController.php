<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriModel;
use Yajra\DataTables\DataTables;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\DataTables\KategoriDataTable;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Redirect;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        // $data = [
        //     'kategori_kode' => 'SNK',
        //     'kategori_nama' => 'Snak/ Makanan Ringan',
        //     'created_at' => now()
        // ];
        // DB::table('m_kategori')->insert($data);
        // return 'Insert data baru berhasil';

        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
        // return 'Update data berhasil. Jumlah data yang diupdate: '.$row.' baris';

        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
        // return 'Delete data berhasil. Jumlah data yang dihapus: '.$row.' baris';

        // $data = DB::table('m_kategori')->get();
        // return view('kategori', ['data' => $data]);

        // return $dataTable->render('kategori.index');

        $breadcrumb = (object) [
            'title' => 'Daftar kategori',
            'list' => ['Home', 'kategori']
        ];

        $page = (object) [
            'title' => 'Daftar kategori yang terdaftar dalam sistem'
        ];

        $activeMenu = 'kategori';

        return view('kategori.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }

    public function list(Request $request)
    {
        $kategori = KategoriModel::select('kategori_id', 'kategori_kode', 'kategori_nama')->get();

        return DataTables::of($kategori)
        ->addIndexColumn() // menambahkan kolom index / no urut (default nama kolom: DT_RowIndex)
        ->addColumn('aksi', function ($kategori) { // menambahkan kolom aksi
            $btn = '<a href="'.url('/kategori/' . $kategori->kategori_id).'" class="btn btninfo btn-sm">Detail</a> ';
            $btn .= '<a href="'.url('/kategori/' . $kategori->kategori_id . '/edit').'"class="btn btn-warning btn-sm">Edit</a> ';
            $btn .= '<form class="d-inline-block" method="POST" action="'.url('/kategori/'.$kategori->kategori_id).'">'. csrf_field() . method_field('DELETE') .'<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakit menghapus data ini?\');">Hapus</button></form>';
        return $btn;
        })
        ->rawColumns(['aksi']) // memberitahu bahwa kolom aksi adalah html
        ->make(true);
    }

    public function create()
    {
        $breadcrumb = (object) [
            'title' => 'Tambah Kategori',
            'list' => ['Home', 'Kategori', 'Tambah']
        ];

        $page = (object) [
            'title' => 'Tambah Kategori baru'
        ];

        $activeMenu = 'kategori';

        return view('kategori.create', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }

    // public function store(StorePostRequest $request): RedirectResponse
    // {
    //     // KategoriModel::create([
    //     //     'kategori_kode' => $request->kategori_kode,
    //     //     'kategori_nama' => $request->kategori_nama
    //     // ]);
        
    //     $validated = $request->validated();

    //     $validated = $request->safe()->only(['kategori_kode', 'kategori_nama']);
    //     $validated = $request->safe()->except(['kategori_kode', 'kategori_nama']);

    //     return redirect('/kategori');
    // }

    public function store(Request $request)
    {
        $request->validate([
            //aturan
            'kategori_kode' => 'required|string|min:3|max:10|unique:m_kategori,kategori_kode',   // harus ada, harus string, minimal 3 karakter, harus beda dari yg sudah ada
            'kategori_nama' => 'required|string|max:100',    // harus ada, harus string, max 100 chara
        ]);

        KategoriModel::create([
            'kategori_kode' => $request->kategori_kode,
            'kategori_nama' => $request->kategori_nama,
        ]);

        return redirect('/kategori')->with('success', 'Data kategori berhasil disimpan ');
    }

    public function show(string $id)
    {
        $kategori = KategoriModel::find($id);

        $breadcrumb = (object) [
            'title' => 'Detail Kategori',
            'list' => ['Home', 'Kategori', 'Detail']
        ];

        $page = (object) [
            'title' => 'Detail Kategori'
        ];

        $activeMenu = 'kategori';

        return view('kategori.show', ['breadcrumb' => $breadcrumb, 'page' => $page, 'kategori' => $kategori, 'activeMenu' => $activeMenu]);        
    }

    public function edit($id)
    {
        // $kategori = KategoriModel::find($id);
        // return view('kategori.edit', ['data' => $kategori]);

        $kategori = kategoriModel::find($id);

        $breadcrumb = (object) [
            'title' => 'Edit Kategori',
            'list' => ['Home', 'Kategori', 'Edit']
        ];

        $page = (object) [
            'title' => 'Edit Kategori'
        ];

        $activeMenu = 'kategori';

        return view('kategori.edit', ['breadcrumb' => $breadcrumb, 'page' => $page, 'kategori' => $kategori, 'activeMenu' => $activeMenu]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            //aturan
            'kategori_kode' => 'required|string|min:3|max:10|unique:m_kategori,kategori_kode,'.$id.',kategori_id',   // harus ada, harus string, minimal 3 karakter, harus beda dari yg sudah ada
            'kategori_nama' => 'required|string|max:100',    // harus ada, harus string, max 100 chara
        ]);

        KategoriModel::find($id)->update([
            'kategori_kode' => $request->kategori_kode,
            'kategori_nama' => $request->kategori_nama,
        ]);

        return redirect('/kategori')->with('success', 'Data kategori berhasil disimpan ');
    }

    public function destroy(string $id)
    {
        $check = KategoriModel::find($id);
        // apabila di $check tidak ada datanya
        if (!$check) {
            return redirect('/kategori')->with('error', 'Data kategori tidak ditemukan');
        }

        try {
            KategoriModel::destroy($id);

            return redirect('/kategori')->with('success', 'Data kategori berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {

            // Jika terjadi error saat menghapus data
            return redirect('/kategori')->with('error', 'Data kategori gagal dihapus karena masih terdapat tabel lain yang terkait dengan data ini');
        }
    }

    // public function edit_save($id, Request $request)
    // {
    //     $kategori = KategoriModel::find($id);

    //     $kategori->kategori_kode = $request->kodeKategori;
    //     $kategori->kategori_nama = $request->namaKategori;

    //     $kategori->save();

    //     return redirect('/kategori');
    // }

    // public function delete($id)
    // {
    //     $kategori = KategoriModel::find($id);
    //     return view('kategori.delete', ['data' => $kategori]);
    // }

    // public function delete_conf($id)
    // {
    //     $kategori = KategoriModel::find($id);
    //     $kategori->delete();

    //     return redirect('/kategori');
    // }
}
