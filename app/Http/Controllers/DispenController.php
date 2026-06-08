<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dispen;

class DispenController extends Controller
{
    public function index()
    {
        $dispen = Dispen::all();

        $total = Dispen::count();

        $diproses = Dispen::where('status', 'Diproses')->count();

        $disetujui = Dispen::where('status', 'Disetujui')->count();

        $ditolak = Dispen::where('status', 'Ditolak')->count();

        return view('dispen.index', compact(
            'dispen',
            'total',
            'diproses',
            'disetujui',
            'ditolak'
        ));
    }

    public function create()
    {
        return view('dispen.create');
    }

    public function store(Request $request)
    {
        Dispen::create([

            'nama_siswa' => $request->nama_siswa,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'alasan' => $request->alasan,
            'tujuan' => $request->tujuan,
            'jam_keluar' => $request->jam_keluar,
            'jam_kembali' => $request->jam_kembali,
            'status' => 'Diproses'

        ]);

        return redirect('/siswa');
    }

    public function edit($id)
    {
        $dispen = Dispen::findOrFail($id);

        return view('dispen.edit', compact('dispen'));
    }

    public function update(Request $request, $id)
    {
        $dispen = Dispen::findOrFail($id);

        $dispen->update([

            'nama_siswa' => $request->nama_siswa,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'alasan' => $request->alasan,
            'tujuan' => $request->tujuan,
            'jam_keluar' => $request->jam_keluar,
            'jam_kembali' => $request->jam_kembali,
            'status' => $request->status

        ]);

        return redirect('/dispen');
    }

    public function destroy($id)
    {
        $dispen = Dispen::findOrFail($id);

        $dispen->delete();

        return redirect('/dispen');
    }

    public function approve($id)
    {
        $dispen = Dispen::findOrFail($id);

        $dispen->update([
            'status' => 'Disetujui'
        ]);

        return redirect('/dispen');
    }

    public function tolak($id)
    {
        $dispen = Dispen::findOrFail($id);

        $dispen->update([
            'status' => 'Ditolak'
        ]);

        return redirect('/dispen');
    }

    public function updateStatus(Request $request, $id)
    {
        $dispen = Dispen::findOrFail($id);

        $dispen->update([
            'status' => $request->status
        ]);

        return redirect('/dispen');
    }
    public function cetak($id)
{
    $dispen = Dispen::findOrFail($id);

    return view('dispen.cetak', compact('dispen'));
}
public function siswa()
{
    $dispen = Dispen::latest()->get();

    return view('dispen.siswa', compact('dispen'));
}
}