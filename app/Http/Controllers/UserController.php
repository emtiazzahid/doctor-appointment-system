<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Branch;
use App\Doctor;
use App\Slot;
use App\Speciality;
use Illuminate\Http\Request;
use DB;
use Auth;

use App\Http\Requests;

class UserController extends Controller
{
    public function getIndex(){
        $doctors = Doctor::all();
        $specialities= Speciality::all();
        $branches= Branch::all();
        return view('welcome')->with(['doctors'=>$doctors, 'specialities'=>$specialities, 'branches'=>$branches]);
    }
    public function getDoctors(Request $request)
    {
        $spcId = $request['id'];
        $dayId = $request['dayId'];
        $doctors = DB::select( DB::raw("Select DISTINCT(`doctors`.id), `doctors`.name, `doctors`.branch_id, `doctors`.speciality_id FROM `doctors`, `doctor_schedules` WHERE `doctors`.id = `doctor_schedules`.doctor_id And `doctor_schedules`.day_id = $dayId AND `doctors`.speciality_id =$spcId"));
        return $doctors;
    }
    public function availableSlot(Request $request){
        $date = $request['date'];
        $docId = $request['id'];
        $dayId = $request['dayId'];
        $results = DB::select( DB::raw("SELECT `slots`.id, `slots`.start_time, `slots`.end_time
        FROM
            slots,
            doctor_schedules
        WHERE
            start_time >= `doctor_schedules`.entry_time
        AND end_time <= `doctor_schedules`.leave_time
        AND `doctor_schedules`.doctor_id = $docId
        AND `doctor_schedules`.day_id = $dayId
        AND `slots`.id NOT IN (SELECT `appointments`.slot_id FROM `appointments` WHERE `appointments`.doctor_id = $docId AND `appointments`.date = '$date')") );
        return $results;
    }
    public function postAppointment(Request $request){
        
        $slot = explode(" - ",$request['slot']);

        $slot = Slot::where('start_time', $slot[0])->first();
        // dd($request->all());
        $appointment = new Appointment();
        $appointment->name = $request['name'];
        $appointment->phone = $request['phone'];
        $appointment->age = $request['age'];
        $appointment->gender = $request['gender'];
        $appointment->date = $request['date'];
        $appointment->gender = $request['gender'];
        $appointment->doctor_id = $request['doc_id'];
        $appointment->day_id = 5;
        $appointment->slot_id = $slot['id'];
        $appointment->save();

        return redirect()->back();
    }
    public function userSignIn(Request $request){
                $this->validate($request,[
                'email' => 'required',
                'password' => 'required'
            ]);

        //dd($request->all());
        if(Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])){
            return redirect()->route('adminIndex');
        }
        session()->flash('wrong_pass_message','Wrong email or password!');
        return redirect()->route('login');
    }
    public function adminIndex(){
        $results = DB::select( DB::raw("SELECT appointments.id, doctors.name AS DoctorName, days.name AS DaysName, slots.start_time AS StartTime, slots.end_time AS EndTime, appointments.name AS Name, appointments.age as Age, appointments.gender AS Gender, appointments.phone as Phone, appointments.date as date FROM doctors, days, slots, appointments WHERE doctors.id = appointments.doctor_id AND (days.id = appointments.day_id) AND (slots.id = appointments.slot_id)") );
        return view('admin.index')->with(['appointments' => $results]);
    }

    public function deleteAppointmentRow($id){
        $results = Appointment::where('id', $id)->delete();
        return redirect()->back();
    }

    public function userLogout(){
        Auth::logout();
        return view('admin.login');
    }

    public function doctor(){
        $results = DB::select(DB::raw("SELECT doctors.id, doctors.name, branches.name as branch , specialities.name speciality   FROM branches, specialities, doctors WHERE doctors.branch_id = branches.id AND doctors.speciality_id = specialities.id"));
        return view('admin.doctor')->with(['doctors' => $results]);
    }

    public function specialities(){
         $results = DB::select(DB::raw("SELECT specialities.id, specialities.name FROM specialities"));
        return view('admin.specialities')->with(['specialities' => $results]);
    }
    public function branches(){
         $results = DB::select(DB::raw("SELECT branches.id, branches.name FROM branches"));
        return view('admin.branches')->with(['branches' => $results]);
    }
   

}