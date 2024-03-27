<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ParkingCar;
use Illuminate\Http\RedirectResponse;

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
    public function store(Request $request) : RedirectResponse
    {
        ParkingCar::create($request->all());
        return redirect()->route('parking.index')->with(['success' => 'Data Berhasil Ditambahkan!']);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = ParkingCar::findOrFail($id);
        return view('parkingCar.edit', compact('data'));
        // dd($data->id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $newData= $request->validate([
            'pemilik' => 'required',
            'nopol' => 'required',
            'jenis_mobil' => 'required',
            'no_telp' => 'required',
            'tanggal_keluar' => 'nullable'
        ]);
        ParkingCar::where('id', $request->id)->update($newData);

        return redirect()->route('parking.index')->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = ParkingCar::find($id);
        $data->delete();
        return redirect()->route('parking.index')->with('success', 'Data Berhasil Di Hapus');
    }
}
