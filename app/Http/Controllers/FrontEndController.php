<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Message;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //

    public function index(){
        $doctors = Doctor::all();
        return view('frontend.home', compact('doctors'));
    }

    public function storeAppointment(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'email',
            'phone' => 'required|numeric',
            'doctor_id'=>'required',
            'date_appointment'=>'required',
            'message'=>'string|nullable',
        ]);

        Appointment::create(array_merge($request->only(
            ['name', 'email', 'phone', 'doctor_id', 'message','date_appointment']),
            [
                'status'=>'Pending',
            ])
        );

        return back()->with('message', 'Appointment save successfully');
    }

    public function storeMessage(Request $request){

        $request->validate([
            'name_ct' => 'required',
            'email_ct' => '',
            'message_ct' => 'required',
            'phone_ct' => 'required',
            'subject' => 'required'
        ]);

        Message::create(array_merge($request->only(['subject']),
            [
                'name' => $request->input('name_ct'),
                'email'=>$request->input('email_ct'),
                'message'=>$request->input('message_ct'),
                'phone'=>$request->input('phone_ct'),
            ])
        );

        return back()->with('message', 'Message Sent Successfully');
    }
}
