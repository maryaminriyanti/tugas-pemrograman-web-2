<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Smartphone;
use Illuminate\Http\Request;



class SmartphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Smartphone::latest();

        if ($request->keyword) {
            $query->where('name', 'like', '%' . $request->keyword . '%');
        }

        return view('smartphone.index', [
            'title' => 'Smartphone',
            'smartphones' => $query->paginate(5)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('smartphone.create', 
         ['title' => 'Create Smartphone',
        'brands' => Brand::latest()->get(),
    ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'ram' => 'required|numeric',
            'storage' => 'required|numeric',
            'release_year' => 'required|numeric|digits:4',
            'brand_id' => 'required|exists:brands,id',
        ], [
            'name.required' => 'Nama tidak boleh kosong',
            'name.max' => 'Nama tidak boleh lebih dari :max karakter',
            'price.required' => 'Harga tidak boleh kosong',
            'price.numeric' => 'Harga harus berupa angka',

            'ram.required' => 'RAM tidak boleh kosong',
            'ram.numeric' => 'RAM harus berupa angka',

            'storage.required' => 'Storage tidak boleh kosong',
            'storage.numeric' => 'Storage harus berupa angka',

            'release_year.required' => 'Tahun rilis tidak boleh kosong',
            'release_year.digits' => 'Tahun rilis harus 4 digit',
        ]);

        Smartphone::create($validated);

        return to_route('smartphone.index')->withSuccess('Data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Smartphone $smartphone)
    {
        return view('smartphone.show', 
            ['title' => 'Detail Smartphone',
            'smartphone'=> $smartphone,
            
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Smartphone $smartphone)
    {
        return view('smartphone.edit', 
            ['title' => 'Edit Lecturer',
                'brands'=> Brand::latest()->get(),
                'smartphone' => $smartphone,
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Smartphone $smartphone)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'ram' => 'required|numeric',
            'storage' => 'required|numeric',
            'release_year' => 'required|numeric|digits:4',
            'brand_id' => 'required|exists:brands,id',
        ], [
            'name.required' => 'Nama tidak boleh kosong',
            'name.max' => 'Nama tidak boleh lebih dari :max karakter',
            'price.required' => 'Harga tidak boleh kosong',
            'price.numeric' => 'Harga harus berupa angka',

            'ram.required' => 'RAM tidak boleh kosong',
            'ram.numeric' => 'RAM harus berupa angka',

            'storage.required' => 'Storage tidak boleh kosong',
            'storage.numeric' => 'Storage harus berupa angka',

            'release_year.required' => 'Tahun rilis tidak boleh kosong',
            'release_year.digits' => 'Tahun rilis harus 4 digit',
        ]);

        $smartphone->update($validated);

        return to_route('smartphone.index')->withSuccess('Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Smartphone $smartphone)
    {
        $smartphone->delete($smartphone);

        return to_route('smartphone.index')->withSuccess('Data Berhasil Di Hapus');
    }
}
