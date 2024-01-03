<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
class MemberController extends Controller
{
    function show()
    {
        $data=Member::all();
        return view ('list',['Members'=>$data]);
    }
    function addData(Request $req)
    {
       $member=new Member;
       $member->name=$req->name;
       $member->email=$req->email;
       $member->address=$req->address;
       $member->save();
       return redirect('list');
    }
    function del()
    {
        $data=Member::all();
        return view('del',['Members'=>$data]);
    }
    function delete($id)
    {
        $data=Member::find($id);
        $data->delete();
        return redirect('list');
    }
    function showData($id)
    {
        $data=Member::find($id);
        return view('edit',['Members'=>$data]);
    }
    function update(Request $req)
    {
        $member = Member::find($req->id);
        $member->name = $req->name;
    $member->email = $req->email;
    $member->address = $req->address;
    $member->save();
       $member->save();
       return redirect('list');
    }
}