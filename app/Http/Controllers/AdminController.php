<?php

namespace App\Http\Controllers;

use App\Models\ClassTime;
use App\Models\Routine;
use App\Models\Subject;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){


       $data['routines'] = Routine::with('subject')
           ->where('status',1)
           ->get()
           ->groupBy('day');


        return view('admin.dashboard.index',$data);
    }

    public function addSubjectform(){

        $data = [''];
        $data['subjects'] = Subject::all();

        return view('admin.dashboard.addSubject',$data);
    }


    public function processSubjectform(Request $request){

        $request ->validate([
            'name' => 'required| unique:subjects,subject_name',
            'status' => 'required',

        ]);

        Subject::create([
            'subject_name' => $request->input('name'),
            'status'=> $request->input('status'),
            'created_by'=> auth()->user()->name,
            'updated_by'=> auth()->user()->name,


        ]);


        session()->flash('type', 'success');
        session()->flash('message', 'Subject added Successfully');
        return redirect()->back();



    }


    public function addTime(){
        return view('admin.dashboard.addClasstime');
    }


    public function processTime(Request $request){

        $request ->validate([
            'time' => 'required| unique:class_times,time_duration',
            'status' => 'required',

        ]);

        ClassTime::create([
            'time_duration' => $request->input('time'),
            'status'=> $request->input('status'),
            'created_by'=> auth()->user()->name,
            'updated_by'=> auth()->user()->name,


        ]);


        session()->flash('type', 'success');
        session()->flash('message', 'Class Time added Successfully');
        return redirect()->back();

    }


    public function addRoutine()
    {

        $data = [''];
        $data['subjects'] = Subject::all();
        $data['classtimes'] = ClassTime::all();

    return view('admin.dashboard.routineForm', $data);

    }

    public function processRoutine(Request $request){


        $request ->validate([
            'time' => 'required',
            'day' => 'required',
            'subject' => 'required',

        ]);


//        $check = Routine::select('subject_id','class_time_id','day')
//            ->where('subject_id',$request->subject_id)
//            ->where('class_time_id',$request->class_time_id)
//            ->where('day',$request->day)
//            ->first();





        Routine::create([
            'day' => $request->input('day'),
            'subject_id' => $request->input('subject'),
            'class_time_id' => $request->input('time'),
            'status'=> $request->input('status'),
            'created_by'=> auth()->user()->name,
            'updated_by'=> auth()->user()->name,


        ]);


        session()->flash('type', 'success');
        session()->flash('message', 'Routine added Successfully');
        return redirect()->back();

    }

}
