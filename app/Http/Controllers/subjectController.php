<?php

namespace App\Http\Controllers;
use App\Models\subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class subjectController extends Controller
{
    public function index(){
        $subjects = subject::all();
        return view("subject",compact('subjects'));
    }
    public function insert(Request $request)
    {
            $new_subject = new subject;
            $new_subject->subj_name =$request->subj_name;
            $new_subject->cradit=$request->cradit;
            $new_subject->faculty=$request->faculty;
            $new_subject->save();
            $subjects = subject::all();
            return view("subject",compact('subjects'));
        }
        function delete($sub_id){
         subject ::destroy($sub_id);
         return redirect('/subject');
        }
    }
    

