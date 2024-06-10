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
        return view("dashboard.tree_species.index",[
                "list"=>TreeSpecie::all()
              ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.tree_species.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                $obj = new TreeSpecie();
                        $obj->name = $request->name;
                        $obj->type = $request->type;
                        $obj->status = $request->status;
                        $obj->notes = $request->notes;
                        $obj->care_duration_in_days = $request->care_duration_in_days;
                        $obj->mature_duration_in_days = $request->mature_duration_in_days;

                        if ($files = $request->file('picture')){
                            $fName = time().'.'.$request->picture->extension();
                            $request->picture->move(public_path("images"), $fName);
                            $obj->picture = url("images/".$fName);
                        }

                        $obj->save();

                        return redirect()->route('tree_species.index');
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
        return view("dashboard.tree_species.edit", ["obj" => $treeSpecie]);
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
        $obj = $treeSpecie;

      $obj->name = $request->name;
      $obj->type = $request->type;
      $obj->status = $request->status;
      $obj->notes = $request->notes;
      $obj->care_duration_in_days = $request->care_duration_in_days;
      $obj->mature_duration_in_days = $request->mature_duration_in_days;

      if ($files = $request->file('picture')){
        $fName = time().'.'.$request->picture->extension();
        $request->picture->move(public_path("images"), $fName);
        $obj->picture = url("images/".$fName);
      }

      $obj->save();

      return redirect()->route('tree_species.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TreeSpecie  $treeSpecie
     * @return \Illuminate\Http\Response
     */
    public function destroy(TreeSpecie $treeSpecie)
    {
              $treeSpecie->delete();
              return redirect( url()->previous() );
    }
}
