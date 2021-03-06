<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Student;
use App\Course;
use App\Imports\CsvImport;
use Excel;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __contruct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $tbl_students = Student::all();
        $tbl_courses = Course::all();
        return view('admin.managestudents')
            ->with('tbl_students', $tbl_students)
            ->with('tbl_courses', $tbl_courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate( $request , [
            'student_no' => 'required|min:15|max:15',
            'student_pw' => 'required|min:8',
            'lastname' => 'required',
            'firstname' => 'required',
            'course_id' => 'required',
            'year' => 'required',
            'section' => 'required',
            'email_add' => 'required|email'
        ]);

        $tbl_students = new Student();
        
        $tbl_students->student_no = $request->input('student_no');
        $tbl_students->student_pw = Hash::make($request['student_pw']);
        $tbl_students->lastname = $request->input('lastname');
        $tbl_students->firstname = $request->input('firstname');
        $tbl_students->middlename = $request->input('middlename');
        $tbl_students->course_id = $request->input('course_id');
        $tbl_students->year = $request->input('year');
        $tbl_students->section = $request->input('section');
        $tbl_students->email_add = $request->input('email_add');

        $tbl_students->save();
        return redirect('/manage-students')->with('success', 'Successfully Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function csv_import()
    {
        Excel::import(new CsvImport, request()->file('file'));
        return back();
    }
}
