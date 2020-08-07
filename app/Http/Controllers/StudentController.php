<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all() ;
        
        return view('student',['students'=>$students,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $students = Student::all() ;
      return view('student',['students'=>$students,'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student() ;
        $student->RollNo = $request->input('RollNo') ;
        $student->FirstName = $request->input('FirstName') ;
        $student->LastName = $request->input('LastName') ;
        $student->Age = $request->input('Age') ;
         $student->Gender = $request->input('Gender') ;
          $student->Attendence = $request->input('Attendence') ;
        $student->Speciality = $request->input('Speciality') ;
        $student->save() ;
        return redirect('/') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($RollNo)
    {
        $student = Student::find($RollNo);
        $students = Student::all() ;
        return view('student',['students'=>$students,'student'=>$student,'layout'=>'show']);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($RollNo)
    {
      $student = Student::find($RollNo);
      $students = Student::all() ;
      return view('student',['students'=>$students,'student'=>$student,'layout'=>'edit']);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $RollNo)
    {
      $student = Student::find($RollNo);
       $student->RollNo = $request->input('RollNo') ;
      $student->FirstName = $request->input('FirstName') ;
      $student->LastName = $request->input('LastName') ;
      $student->Age = $request->input('Age') ;
       $student->Gender = $request->input('Gender') ;
       $student->Attendence = $request->input('Attendence') ;
      $student->Speciality = $request->input('Speciality') ;
      $student->save() ;
      return redirect('/') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($RollNo)
    {
      $student = Student::find($RollNo);
      $student->delete() ;
      return redirect('/') ;
    }
}
