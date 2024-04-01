<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('Admin.clients',[
            'clients'=>Client::all(),
            'packages'=>Package::all()
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
        
        $validateData = $request->validate([
            'package_id'=> 'required',
            'name'=> 'required',
            'nik'=> 'required|unique:clients',
            'email'=> 'required|unique:clients',
            'phone_1'=> 'required|unique:clients',
            'phone_2'=> 'required|unique:clients',
            'address'=> 'required',
            'documents' => 'required|max:10000|mimes:pdf,png,jpg,jpeg',
        ],[
            'name.required'=> 'Nama Harus di isi.',
            'nik.required'=> 'NIK harus di isi.',
            'nik.unique'=> 'NIK sudah pernah di daftarkan.',
            'email.required'=> 'Email harus di isi',
            'email.unique'=> 'Email sudah pernah di daftarkan.',
            'phone_1.required'=> 'Telepon 1 harus di isi',
            'phone_1.unique'=> 'Telepon 1 sudah pernah di daftarkan.',
            'phone_2.required'=> 'Telepon 2 harus di isi',
            'phone_2.unique'=> 'Telepon 2 sudah pernah di daftarkan.',
            'address.required'=> 'Alamat harus di isi.',
            'documents.required'=> 'Dokumen harus di lampirkan.',
            'documents.max'=> 'Ukuran gambar maksimal 1mb',
            'documents.mimes'=> 'Hanya diperbolehkan file jenis jpg,jpeg,png dan pdf.',
            
            
        ]);
        
        DB::beginTransaction();
        try {

            $documents = $request->file('documents');
            $nama_documents = time() . "-" . str_replace(' ', '_', $documents->getClientOriginalName());;
            $documents->move('files/img/dokumen_lampiran', $nama_documents);

            Client::create([
                'package_id'=> $request->package_id,
                'name'=> $request->name,
                'nik'=> $request->nik,
                'email'=> $request->email,
                'phone_1'=> $request->phone_1,
                'phone_2'=> $request->phone_2,
                'address'=> $request->address,
                'documents' => $nama_documents,
            ]);
            DB::commit();
            session()->flash('success', 'Permintaan Berhasil di Tambahkan');
            return redirect()->back();
        }catch(\Throwable $th){
            DB::rollBack();
            session()->flash('error', 'Terjadi Kesalahan ' . $th);
            return redirect()->back();
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
