<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\kategori;
use App\Models\monitor;

class MonitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagename = 'Dokumen';
        $data = monitor::all();
        return view('monitor.index', compact('data', 'pagename'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=monitor::all();
        $data_kategori=kategori::all();
        $pagename='Form Monitor Dokumen';
        return view('monitor.create', compact('pagename','data', 'data_kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nomor' => 'required',
            'divisi' => 'required',
            'nama' => 'required',
            'tanggal' => 'required',
            'review' => 'required',
            'revisi' => 'required',
            'status' => 'required',
        ]);

        $data_monitor = new monitor([
            'no_dok' => $request -> get('nomor'),
            'id_kategori' => $request -> get('divisi'),
            'nama_dok' => $request -> get('nama'),
            'tgl_terbit' => $request -> get('tanggal'),
            'status_review' => $request -> get('review'),
            'status_revisi' => $request -> get('revisi'),
            'status_dok' => $request -> get('status'),
        ]);

        $data_monitor->save();
        return redirect('monitor')->with('sukses','Dokumen berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $data_kategori=kategori::all();
        $pagename='Update Data';
        $data=monitor::find($id);
        return view('monitor.edit', compact('data_kategori','pagename', 'data'));
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
        //
        $request -> validate([
            'nomor' => 'required',
            'divisi' => 'required',
            'nama' => 'required',
            'tanggal' => 'required',
            'review' => 'required',
            'revisi' => 'required',
            'status' => 'required',
        ]);

        $data_monitor = monitor::find($id);

            $data_monitor->no_dok = $request -> get('nomor');
            $data_monitor->id_kategori = $request -> get('divisi');
            $data_monitor->nama_dok = $request -> get('nama');
            $data_monitor->tgl_terbit = $request -> get('tanggal');
            $data_monitor->status_review = $request -> get('review');
            $data_monitor->status_revisi = $request -> get('revisi');
            $data_monitor->status_dok = $request -> get('status');
        

        $data_monitor->save();
        return redirect('monitor')->with('sukses','Dokumen berhasil diupdate');
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
        $data = monitor::find($id);
        $data->delete();
        return redirect('monitor')->with('sukses','Dokumen berhasil dihapus');
    }
}
