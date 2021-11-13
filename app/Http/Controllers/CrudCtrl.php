<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;

class CrudCtrl extends Controller
{
    function showPage() {
        $data = Crud::all();
        return view('display', ['data' => $data]);
    }
    function showAdd() {
        return view('add');
    }
    function addUser(Request $req) {
        $data = new Crud;
        $data -> name = $req -> name;
        $data -> email = $req -> email;
        $data -> mobile = $req -> mobile;
        $data -> password = $req -> password;
        $data -> save();
        return redirect('/');
    }
    function deleteUser($id) {
        $data = Crud::find($id);
        $data -> delete();
        return redirect('/');
    }
    function showUpdate(Request $req)
    {
        $data = Crud::find($req->id);
        return view('update', ['data' => $data]);
    }
    function updateUser(Request $req)
    {
        $data = Crud::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->mobile = $req->mobile;
        $data->password = $req->password;
        $data->save();
        return redirect('/');
    }
}
