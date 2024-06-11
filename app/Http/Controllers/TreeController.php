<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Tree;
use App\Models\TreeSpecie;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TreeController extends Controller
{

    public function api_create_tree(Request $request){

      $person_id = $request->person_id;
      $tree_specie_id = $request->tree_specie_id;
      $date_of_planting = $request->date_of_planting;
      $source = $request->source;
      $obtained_from = $request->obtained_from;
      $location = $request->location;
      $soil_prep = $request->soil_prep;
      $method = $request->input("method");
      $weather = $request->weather;
      $watering = $request->watering;
      $mulch = $request->mulch;
      $initial_health = $request->initial_health;
      $care_schedule = $request->care_schedule;
      $growth = $request->growth;
      $survival = $request->survival;
      $pests_diseases = $request->pests_diseases;
      $notes = $request->notes;

      $tree = new Tree();
      $tree->person_id = $person_id;
      $tree->tree_specie_id = $tree_specie_id;
      $tree->date_of_planting = $date_of_planting;
      $tree->source = $source;
      $tree->obtained_from = $obtained_from;
      $tree->location = $location;
      $tree->soil_prep = $soil_prep;
      $tree->method = $method;
      $tree->weather = $weather;
      $tree->watering = $watering;
      $tree->mulch = $mulch;

      if (isset($request->number_of_trees_planted)){
        $tree->number_of_trees_planted = $request->number_of_trees_planted;
      }
      if (isset($request->source_other)){
        $tree->source_other = $request->source_other;
      }
      if (isset($request->height)){
        $tree->height = $request->height;
      }

      $tree->care_schedule = $care_schedule;
      $tree->initial_health = $initial_health;
      $tree->growth = $growth;
      $tree->survival = $survival;
      $tree->pests_diseases = $pests_diseases;
      $tree->notes = $notes;
      $tree->gps_x = $request->gps_x;
      $tree->gps_y = $request->gps_y;

      if ($files = $request->file('picture')){
        $fName = Str::random(10).time().'.'.$request->picture->extension();
        $request->picture->move(public_path("images"), $fName);
        $tree->picture = url("images/".$fName);
      }

      $tree->save();

      return [
        "status_code"=>200,
        "status_message"=>"Tree Created",
      ];
    }

    public function api_get_trees(Request $request){

      if ( isset( $request->person_id) ){
        $list_builder = Tree::where("person_id", $request->person_id);
      } else {
        $list_builder = Tree::whereNotNull("id");
      }

      return $list_builder->get()->map( function ($t){
        $t->tree_specie = TreeSpecie::find( $t->tree_specie_id);
        return $t;
      });

    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("dashboard.trees.index",[
                "list"=>Tree::orderBy("id","desc")->get()->map( function ($t){
                  $t->tree_specie = TreeSpecie::find($t->tree_specie_id);
                  $t->person = Person::find($t->person_id);
                  return $t;
                })
              ]);
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
     * @param  \App\Models\Tree  $tree
     * @return \Illuminate\Http\Response
     */
    public function show(Tree $tree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tree  $tree
     * @return \Illuminate\Http\Response
     */
    public function edit(Tree $tree)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tree  $tree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tree $tree)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tree  $tree
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tree $tree)
    {
              $tree->delete();
              return redirect( url()->previous() );
    }
}
