<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Election;
use App\Org;
use App\Position;
use App\Partylist;

class ElectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbl_elections = Election::all();
        $tbl_orgs = Org::all();
        $tbl_positions = Position::all();
        $tbl_partylists = Partylist::all();

        return view('admin.createelection')
            ->with('tbl_elections', $tbl_elections)
            ->with('tbl_orgs', $tbl_orgs)
            ->with('tbl_positions', $tbl_positions)
            ->with('tbl_partylists', $tbl_partylists);
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
        $tbl_elections = new Election();
        
        $tbl_elections->electionname = $request->input('');
        $tbl_elections->term = $request->input('term');
        $tbl_elections->startdate = $request->input('startdate');
        $tbl_elections->enddate = $request->input('enddate');
        $tbl_elections->starttime = $request->input('starttime');
        $tbl_elections->endtime = $request->input('endtime');

        $tbl_elections->save();
        return redirect('/create-election');
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
