<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Team;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_team');
    }

    public function upload(Request $request)
    {
        $team= new team;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('teamimage',$imagename);
        $team->image=$imagename;
        $team->name=$request->name;
        $team->instagram=$request->instagram;

        $team->save();

        return redirect()->back()->with('message','Team Added Succsess');
    }

    public function showappointment()
    {
        $data=Appointment::all();
        return view('admin.showappointment',compact('data'));
    }

    public function showteam()
    {
        $data=Team::all();
        return view('admin.showteam',compact('data'));
    }

    public function approved($id)
    {
        $data=appointment::find($id);
        $data->status='Approved';
        $data->save();

        return redirect()->back();
    }

    public function cancel($id)
    {
        $data=appointment::find($id);
        $data->status='Cancel';
        $data->save();

        return redirect()->back();
    }

    public function deleteteam($id)
    {
        $data=team::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function updateteam()
    {
        return view('admin.updateteam');
    }
}
