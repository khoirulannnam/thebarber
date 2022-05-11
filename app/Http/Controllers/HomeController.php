<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Team;
use App\Models\Appointment;
use Barryvdh\DomPDF\Facade\Pdf;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                $team = team::all();
                return view('user.home', compact('team'));
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }

    public function index()
    {
        if (Auth::id())
        {
            return redirect('home');
        } else
        {
            $team = team::all();
            return view('user.home', compact('team'));
        }
    }

    public function appointment(Request $request)
    {
        $data = new appointment;
        $data->name = $request->name;
        $data->instagram = $request->instagram;
        $data->date = $request->date;
        $data->team = $request->team;
        $data->reservation = $request->reservation;
        $data->message = $request->message;
        $data->status = 'In Progress';
        if (Auth::id()) {
            $data->user_id = Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message','Appointment Success. We will contact with you soon');
    }

    public function myappointment()
    {
        if(Auth::id())
        {
            $userid=Auth::user()->id;
            $appoint=appointment::where('user_id', $userid)->get();
            return view('user.my_appointment', compact('appoint'));
        }
        else
        {
            return redirect()->back();
        }
    }

    public function cancel_appoint($id)
    {
        $data=appointment::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function print($id)
    {
        $data=appointment::where('id',$id)->first();
        // return view('user.print', compact('data'));
        $pdf = PDF::loadView('user.print', ['data' => $data]);
        return $pdf->download('ProofAppointment.pdf');
    }
}
