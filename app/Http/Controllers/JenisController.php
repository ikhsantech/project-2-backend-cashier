<?php

namespace App\Http\Controllers;

use App\Models\jenis;
use Illuminate\Http\Request;
use App\Http\Requests\JenisRequest;
use Exception;
use PDOException;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = Jenis::get();
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
    public function store(Request $request)
    {
    try {
          $data = Jenis::create($request->all());
            return response()->json(['status' => true, 'message' => 'success', 'data' => $data]);
        }catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(jenis $jeni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(jenis $jeni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(jenisRequest $request, jenis $jeni)
    {
       try {
                $validate =$request->validated();
          $data = $jeni->update($validate);
            return response()->json(['status' => true, 'message' => 'data berhasil di update', 'data' => $data]);
        }catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'Data Gagal Di Update','error_type'=> $e]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(jenis $jeni)
    {
      try {
          $data = $jeni->delete();
            return response()->json(['status' => true, 'message' => 'delete data sukses', 'data' => $data]);
        }catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal delete data','error_type'=> $e]);
        }
    }
}
