<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use function Sodium\add;

class PersonController extends Controller
{

    public function api_sign_in(Request $request){
        $phone = $request->phone;
        $password = $request->password;

        $person = Person::where( "phone", $phone)->get()->first();
        if ($person == null){
          return [
            "status_code"=>400,
            "status_message"=>"Account Not found",
            "person"=>null
          ];
        }

        if ( $this->verifyMd5Password($password, $person->password) ){

          return [
            "status_code"=>200,
            "status_message"=>"Account found",
            "person"=>$person
          ];

        } else {

          return [
            "status_code"=>400,
            "status_message"=>"Password is wrong",
            "person"=>null
          ];

        }





    }

  private function verifyMd5Password($password, $hashedPassword)
  {
    return md5($password) === $hashedPassword;
  }

    public function api_sign_up(Request $request){
      $name = $request->name;
      $type = $request->type;
      $target_trees_to_plant = $request->target_trees_to_plant;
      $members = $request->members;
      $members_male = $request->members_male;
      $members_female = $request->members_female;
      $gender = $request->gender;
      $date_of_birth = $request->date_of_birth;
      $age = $request->age;
      $phone = $request->phone;
      $email = $request->email;
      $password = $request->password;
      $country = $request->country;
      $address = $request->address;
      $gps_x = $request->gps_x;
      $gps_y = $request->gps_y;
      $bio = $request->bio;

      if ( Person::where("phone",$phone)->count() != 0 ){
        return [
          "status_code"=>400,
          "status_message"=>"Phone number already exists",
        ];
      }

      if ( Person::where("email",$email)->count() != 0 ){
        return [
          "status_code"=>400,
          "status_message"=>"Email already exists",
        ];
      }


      $person = new Person();
      $person->name = $name;
      $person->type = $type;
      $person->target_trees_to_plant = $target_trees_to_plant;
      $person->members = $members;
      $person->members_male = $members_male;
      $person->members_female = $members_female;
      $person->gender = $gender;
      $person->age = $age;
      $person->phone = $phone;
      $person->email = $email;
      $person->gps_x = $gps_x;
      $person->gps_y = $gps_y;
      $person->password = md5($password);
      $person->country = $country;
      $person->address = $address;
      $person->save();

      return [
        "status_code"=>200,
        "status_message"=>"Account created",
        "person"=>$person
      ];

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
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        //
    }
}
