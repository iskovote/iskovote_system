<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Org;

class OrgsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbl_orgs = Org::all();
        return view('admin.manageorg')->with('tbl_orgs', $tbl_orgs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tbl_orgs = new Org();
        
        $tbl_orgs->org_id = $request->input('org_id');
        $tbl_orgs->org_name = $request->input('org_name');
        //$tbl_orgs->org_logo = $request->input('org_logo');
        $tbl_orgs->course_id = $request->input('course_id');


        
        if($request->hasfile('org_logo')) {
            $file->$request->file('org_logo');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename =  time() .'.' . $extension;
            $file->move('/images/logo/', $filename);
            $tbl_orgs->org_logo=$filename;
        }
        else {
            return $request;
            $tbl_orgs->org_logo= '';
        }

        $tbl_orgs->save();
        return redirect('/manage-org')->with('success', 'Successfully Added');
        
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

}
