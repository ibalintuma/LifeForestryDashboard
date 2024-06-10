<?php

namespace App\Http\Controllers;

use App\Models\Tree;
use App\Models\TreeFollowUp;
use App\Models\TreeSpecie;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TreeFollowUpController extends Controller
{

    public function api_create_tree_followup(Request $request){

      $tree_followup = new TreeFollowUp();
      $tree_followup->person_id = $request->person_id;
      $tree_followup->tree_id = $request->tree_id;
      $tree_followup->height = $request->height;
      $tree_followup->canopy = $request->canopy;
      $tree_followup->trunk_diameter = $request->trunk_diameter;
      $tree_followup->leaf_condition = $request->leaf_condition;
      $tree_followup->new_growth = $request->new_growth;
      $tree_followup->watering = $request->watering;
      $tree_followup->fertilization = $request->fertilization;
      $tree_followup->mulch = $request->mulch;
      $tree_followup->weed_pest_control = $request->weed_pest_control;
      $tree_followup->pruning = $request->pruning;
      $tree_followup->general_health = $request->general_health;
      $tree_followup->environmental_conditions = $request->environmental_conditions;
      $tree_followup->notes = $request->notes;
      $tree_followup->status = $request->status;
      $tree_followup->date_of_follow_up = $request->date_of_follow_up;
      $tree_followup->gps_x = $request->gps_x;
      $tree_followup->gps_y = $request->gps_y;


              if ($files = $request->file('picture')){
                          $fName = Str::random(10).time().'.'.$request->picture->extension();
                          $request->picture->move(public_path("images"), $fName);
                          $tree_followup->picture = url("images/".$fName);
                      }





      $tree_followup->save();

      return [
        "status_code"=>200,
        "status_message"=>"Follow Up Created"
      ];

    }

    public function api_get_tree_follow_up(Request $request){

        if ( isset( $request->tree_id) ){
          $list_builder = TreeFollowUp::where("tree_id", $request->tree_id);
        } else {
          $list_builder = TreeFollowUp::whereNotNull("id");
        }

        return $list_builder->get()->map( function ($t){
          $t->tree = Tree::find( $t->tree_id);
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
     * @param  \App\Models\TreeFollowUp  $treeFollowUp
     * @return \Illuminate\Http\Response
     */
    public function show(TreeFollowUp $treeFollowUp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TreeFollowUp  $treeFollowUp
     * @return \Illuminate\Http\Response
     */
    public function edit(TreeFollowUp $treeFollowUp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TreeFollowUp  $treeFollowUp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TreeFollowUp $treeFollowUp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TreeFollowUp  $treeFollowUp
     * @return \Illuminate\Http\Response
     */
    public function destroy(TreeFollowUp $treeFollowUp)
    {
        //
    }
}
