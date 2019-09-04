<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

        return view('admin.election')
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
        $this->validate( $request , [
            'election_type' => 'required',
            'term' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required'
        ]);

        $tbl_elections = new Election();
        
        $name = $request->input('election_type');
        $term = $request->input('term');

        //election name
        switch($_POST['election_type']){
        case 'Student Council Election':
        $ename = $name . " " . $term;
        break;
        case 'Organization Election':
        $ename = $request->input('org') . " Election " . $term;
        break;
        }

        $tbl_elections->electionname = $ename;
        $tbl_elections->term = $term;
        $tbl_elections->startdate = $request->input('start_date');
        $tbl_elections->enddate = $request->input('end_date');
        $tbl_elections->starttime = $request->input('start_time');
        $tbl_elections->endtime = $request->input('end_time');

        $tbl_elections->save();

        //$tbl_candidates = new Candidate();

        //$tbl_candidates->student_no = $request->input();

        return redirect('/create-election/step2');
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

    public function step2()
    {
        $tbl_positions = Position::all();

        return view('admin.election2')
            ->with('tbl_positions', $tbl_positions);
    }

    public function step3()
    {
        $tbl_partylists = Partylist::all();

        return view('admin.election3')
            ->with('tbl_partylists', $tbl_partylists);
    }
}
