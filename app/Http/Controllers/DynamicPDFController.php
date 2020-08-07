<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use PDF;



class DynamicPdfController extends Controller
{
    function index()
    {
    	$student_data=$this->get_student_data();
    	return view('dynamic_pdf')->with('student_data',$student_data);

    }
    function get_student_data(){
    	$student_data=DB::table('students')
    	               ->limit(10)
    	               ->get();
    	return $student_data;
    }
    function pdf()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_student_data_to_html());
     return $pdf->stream();
    }

    function convert_student_data_to_html()
    {
     $student_data = $this->get_student_data();
     $output = '
     <h3 align="center">Student Data</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%">RollNo</th>
    <th style="border: 1px solid; padding:12px;" width="30%">First Name</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Last Name</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Age</th>
     <th style="border: 1px solid; padding:12px;" width="15%">Gender</th>
      <th style="border: 1px solid; padding:12px;" width="15%">Attendence</th>
    <th style="border: 1px solid; padding:12px;" width="20%">Speciality</th>
   </tr>';
     
     foreach($student_data as $student)
     {
      $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$student->RollNo.'</td>
       <td style="border: 1px solid; padding:12px;">'.$student->FirstName.'</td>
       <td style="border: 1px solid; padding:12px;">'.$student->LastName.'</td>
       <td style="border: 1px solid; padding:12px;">'.$student->Age.'</td>
        <td style="border: 1px solid; padding:12px;">'.$student->Gender.'</td>
         <td style="border: 1px solid; padding:12px;">'.$student->Attendence.'</td>
       <td style="border: 1px solid; padding:12px;">'.$student->Speciality.'</td>
      </tr>
      ';
     }
     $output .= '</table>';
     return $output;
    }
}
