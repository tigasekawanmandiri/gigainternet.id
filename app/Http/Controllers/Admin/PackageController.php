<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('Admin.package',[
            'categories'=> Category::all(),
            'packages'=> Package::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validateData = $request->validate([
            'package_name'=> 'required',
            'category_package_id'=> 'required',
            'speeds'=> 'required',
            'price'=> 'required',
        ],
        [
            'package_name'=> 'Nama Paket Harus di Isi',
            'category_package_id'=> 'kategori Harus di Pilih',
            'speeds'=> 'Kecepatan Internet Harus di Isi',
            'price'=> 'Harga Paket Harus di Isi',
        ]);
        DB::beginTransaction();
        try {
            Package::create($validateData);
            DB::commit();
            return redirect()->back()->with('success','Paket Berhasil di Tambahkan');
        }catch(\Exception $e){
            DB::rollBack();
            return Redirect::back()->with('error',$e->getMessage());
        }
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
