<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NEWSAPIController extends Controller
{
    function create(Request $req)
    {
        $validator = Validator::make($req->all(),[
            "title"=>"required",
            "description"=>"required",
            "type"=>"required",
            "date"=>"required"
        ],[
            "title.required"=>"Please provide name",
            "description.required"=>"Please provide description",
            "type.required"=>"Please provide type",
            "date.required"=>"please provide date"
        ]);
        if($validator->fails()){
            return response()->json($validator->errors());
        }
        $st = new News();
        $st->title = $req->title;
        $st->description = $req->description;
        $st->type = $req->type;
        $st->date = $req->date;
        $st->save();
        return response()->json(["msg"=>"Success","data"=>$st]);
    }
    function getAll()
    {
        $st = News::all();
        return response()->json($st);
    }
    function getId()
    {

    }
    function update()
    {

    }
    function delete()
    {

    }
    function getType()
    {

    }
    function getDate()
    {

    }
    function getTypeDate()
    {

    }
}
