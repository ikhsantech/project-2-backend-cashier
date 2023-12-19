<?php

namespace App\Http\Controllers;

use App\Models\stok;
use Illuminate\Http\Request;
use App\Http\Requests\StokRequest;
use Exception;
use PDOException;

class StokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = stok::get();
            return response()->json(['status' => true, 'message' => 'success', 'data' => $data]);
        }catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data']);
        }
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
    public function store(StokRequest $request)
    {
      try {
          $data = Stok::create($request->all());
            return response()->json(['status' => true, 'message' => 'success', 'data' => $data]);
        }catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(stok $stok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(stok $stok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StokRequest $request, stok $stok)
    {
   try {
          $data = $stok->update();
            return response()->json(['status' => true, 'message' => 'data berhasil di update', 'data' => $data]);
        }catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'Data Gagal Di Update','error_type'=> $e]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(stok $stok)
    {
       try {
          $data = $stok->delete();
            return response()->json(['status' => true, 'message' => 'delete data sukses', 'data' => $data]);
        }catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal delete data','error_type'=> $e]);
        }
    }
}
