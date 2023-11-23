<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class crudeducation extends Controller
{
    public function insert(Request $request){
        $valid = $request->validate([
            "user_id"=> "required",
            "degree_title"=> "required",
            "institute"=> "required",
            "edu_start_date"=> "required",
            "edu_end_date" => "required",
            "education_description"=> "required"]);
        
        $data = $request->all();
        Education::create($data);
    }

    public function update(Request $request, $id){
        $valid = $request->validate([
            "user_id"=> "required",
            "degree_title"=> "required",
            "institute"=> "required",
            "edu_start_date"=> "required",
            "edu_end_date" => "required",
            "education_description"=> "required"]);

        Education::findOrFail($id)->update($request->all());
    }

    public function destroy($id){
        Education::findOrFail($id)->delete();
    }
}
