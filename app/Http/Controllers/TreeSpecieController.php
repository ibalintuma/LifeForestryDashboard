<?php

namespace App\Http\Controllers;

use App\Models\TreeSpecie;
use Illuminate\Http\Request;

class TreeSpecieController extends Controller
{

  public function api_get_tree_species(Request $request){
    return TreeSpecie::get();
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TreeSpecie  $treeSpecie
     * @return \Illuminate\Http\Response
     */
    public function show(TreeSpecie $treeSpecie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TreeSpecie  $treeSpecie
     * @return \Illuminate\Http\Response
     */
    public function edit(TreeSpecie $treeSpecie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TreeSpecie  $treeSpecie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TreeSpecie $treeSpecie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TreeSpecie  $treeSpecie
     * @return \Illuminate\Http\Response
     */
    public function destroy(TreeSpecie $treeSpecie)
    {
        //
    }
}
