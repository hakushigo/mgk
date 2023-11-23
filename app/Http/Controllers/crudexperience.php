<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Experience;
use Illuminate\Contracts\Validation\Validator;

class crudexperience extends Controller
{
    public function insert(Request $request){

        $valid = $this->validate($request, [
            "user_id" => "required",
            "experiece_title"=> "required",
            "experience_organization" => "required",
            "experience_start_date"=> "required",
            "experience_end_date" => "required",
            "experience_description" => "required"
        ]);

        $data = $request->all();
        
        Experience::created($data);
    }

    public function update(Request $request, $id){
        $valid = $this->validate($request, [
            "user_id" => "required",
            "experiece_title"=> "required",
            "experience_organization" => "required",
            "experience_start_date"=> "required",
            "experience_end_date" => "required",
            "experience_description" => "required"
        ]);

        $data = $request->all();
        Experience::where("id", $id)->update($data);
    }

    public function destroy($id){
        Experience::where("id", $id)->delete();
    }
}
