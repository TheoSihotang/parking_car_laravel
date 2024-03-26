<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ParkingCar;

class ParkingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ParkingCar::latest()->get();
        return view('parkingCar.dashboard', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('parkingCar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ParkingCar::create($request->all());
        return redirect()->route('parking.index')->with('success', 'Data Berhasil Ditambahkan');
        // $this->validate($request, [
        //     'pemilik' => 'required',
        //     'jenis_mobil' => 'nullable',
        //     'nopol' => 'required',
        //     'no_telp' => 'required',
        //     'tanggal_masuk' => 'nullable',
        //     'tanggal_keluar' => 'nullable'
        // ]);

        // $data = ParkingCar::create([
        //     'pemilik' => $request->pemilik,
        //     'jenis_mobil' => $request->jenis_mobil,
        //     'nopol' => $request->nopol,
        //     'no_telp' => $request->no_telp,
        //     'tanggal_masuk' => $request->tanggal_masuk,
        //     'tanggal_keluar' => $request->tanggal_keluar
        // ]);

        // return redirect()->route('parking.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $data = ParkingCar::find($id);
        // return view('parkingCar.edit', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
