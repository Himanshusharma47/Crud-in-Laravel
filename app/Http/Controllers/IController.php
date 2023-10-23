<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RateLimiter\RequestRateLimiterInterface;
use App\Models\Student;
use PHPUnit\Framework\MockObject\Builder\Stub;
use Psy\CodeCleaner\ReturnTypePass;

class IController extends Controller
{
    public function display_form()
    {
      return view('display_form');   
    }

    // insert data section
    public function form_submit(Request $request) {
    
        $add = new Student;
        if($request->isMethod('post'))
        {
            $add->firstname = $request->get('fname');
            $add->lastname = $request->get('lname');
            $add->marks1 = $request->get('marks1');
            $add->marks2 = $request->get('marks2');
            $add->save();
        }
        return redirect('/display-form');
    }

    // display the all data section 
    public function display_data(){
        $data = Student::paginate(4);
        return view('display', compact('data'));
    }

    // delete data section
    public function delete_data($id){
        $ob = Student::find($id);  // student file is coming from the models folder 
        $ob->delete();
        return redirect('display-data');
    }

    // edit data section
    public function edit_display($id) {
        $findrow = Student::where('id',$id)->get();
        return view('edit', compact('findrow'));
    }


    // edit data section  means update the data
    public function edit_data(Request $request , $id='' )
    {
        // $add = new Student;
        $add = Student::find($id);
        if($request->isMethod('post'))
        {
            $add->firstname = $request->get('fname');
            $add->lastname = $request->get('lname');
            $add->marks1 = $request->get('marks1');
            $add->marks2 = $request->get('marks2');
            $add->save();
        }
        return redirect('/display-data');
    }


    // search section
    public function search(Request $request){
        if($request->isMethod('post')){
            $name = $request->get('sname');
            $data = Student::where('firstname','LIKE', '%'. $name . '%')->paginate(4);
        }
        return view('/display', compact('data'));
    }
}