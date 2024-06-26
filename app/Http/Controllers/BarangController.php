<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Validator;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Satuan;
use App\Models\Barang;



class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Barang List';
    // ELOQUENT
    $barangs = Barang::all();

    return view('barang.index', [
        'pageTitle' => $pageTitle,
        'barangs' => $barangs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Barang';
        // ELOQUENT
        $satuans = Satuan::all();

        return view('barang.create', compact('pageTitle', 'satuans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $messages = [
        'required' => ':Attribute harus diisi.',
        'numeric' => 'Isi :attribute dengan angka'
        ];
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'harga' => 'required|numeric',
            'satuan' => 'required',
        ], $messages);
        if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();}
        // ELOQUENT
        $barang = New Barang;
        $barang->name = $request->name;
        $barang->description = $request->description;
        $barang->harga = $request->harga;
        $barang->satuan_id = $request->satuan;
        $barang->save();
        return redirect()->route('barangs.index');    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Barang';
        // ELOQUENT
        $satuans = Satuan::all();
        $barang = Barang::find($id);
        return view('barang.edit', compact('pageTitle', 'satuans',
        'barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka'
            ];
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'description' => 'required',
                'harga' => 'required|numeric',
                'satuan' => 'required',
            ], $messages);
            if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();}

            // ELOQUENT
            $barang = Barang::find($id);
            $barang->name = $request->name;
            $barang->description = $request->description;
            $barang->harga = $request->harga;
            $barang->satuan_id = $request->satuan;
            $barang->save();

            return redirect()->route('barangs.index');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // ELOQUENT
            Barang::find($id)->delete();
            return redirect()->route('barangs.index');

        // QUERY BUILDER
        // DB::table('employees')
        // ->where('id', $id)
        // ->delete();
        // return redirect()->route('employees.index');
    }

    public function show(string $id)
    {
       // ELOQUENT
        // Employee::find($id)->delete();

        // return redirect()->route('employees.index');

        $pageTitle = 'Barang Detail'; // ELOQUENT
        $barang = Barang::find($id);
        return view('barang.show', compact('pageTitle', 'barang'));
    }

}
