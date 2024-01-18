<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use App\Models\PJ;
use Illuminate\Support\Facades\DB;

class PJController extends Controller{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $PJ = PJ::all();
        return view('pj', ['PJ'=>$PJ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pj_create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $request->validate([
            'nome_fantasia' => 'required'
        ]);
        PJ::insert([
            'nome_fant' => $request->nome_fantasia
        ]);
        return redirect()->route('pj.index')->width('success', 'Nome fantasia criado!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){
        // $pj = PJ::find(1);
        $pjWhere = PJ::where('id', $id)->get();
        return view("pj_show", ['pjx'=>$pjWhere]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id){
        $pjWhere = PJ::find($id);
        return view('pj_edit', ['pjx'=>$pjWhere]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome_fantasia' => 'required'
        ]);
        PJ::where('id', $id)
            ->update([
                'nome_fant' => $request->nome_fantasia
            ]);
        return redirect()
        ->route('pj.index')
        ->with('success', 'Nome fantasia atualizado!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
