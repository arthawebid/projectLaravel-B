<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class temansController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dta = DB::table('temans')->get();
        return view('sobat.index', compact('dta'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // https://github.com/arthawebid/projectLaravel-B/tree/main/laraproj
        return view('sobat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama'   => 'required|string|max:50',
            'alamat' => 'required|string',
            'kota'   => 'required|string|max:50',
            'telp'   => 'required|string|max:20',
        ]);

        // Tambahkan timestamp karena menggunakan query builder
        $data['created_at'] = now();
        $data['updated_at'] = now();

        DB::table('temans')->insert($data);

        return redirect()->route('sobat.index')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $d = DB::table('temans')->where('id', $id)->first();

        if (! $d) {
            return redirect()->route('sobat.index')->with('error', 'Data tidak ditemukan.');
        }

        return view('sobat.edit', compact('d'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'nama'   => 'required|string|max:50',
            'alamat' => 'required|string',
            'kota'   => 'required|string|max:50',
            'telp'   => 'required|string|max:20',
        ]);

        $data['updated_at'] = now();

        DB::table('temans')->where('id', $id)->update($data);

        return redirect()->route('sobat.index')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $d = DB::table('temans')->where('id', $id)->first();

        if (! $d) {
            return redirect()->route('sobat.index')->with('error', 'Data tidak ditemukan.');
        }

        DB::table('temans')->where('id', $id)->delete();

        return redirect()->route('sobat.index')->with('success', 'Data berhasil dihapus.');
    }
}
