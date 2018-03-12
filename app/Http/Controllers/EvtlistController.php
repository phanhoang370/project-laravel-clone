<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evtlist;
use Illuminate\Support\Facades\DB;

class EvtlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        $this->validate($request,
            [
                'GID' => 'required|numeric',
                'NODEID' => 'required|numeric',
                'NODEIP' => 'required',
                'NODENAME' => 'required|min:3|max:35',
                'EVTDESCR' => 'required',
                'EVTCOMMENT' => 'required',
                'EVTID' => 'required|numeric',
                'EVTGROUP' => 'required|numeric',
                'EVTITEM' => 'required',
                'EVTOPEN' => 'required|boolean',
                'NODESTAT' => 'required|boolean',
                'EVTIGNORE' => 'required|boolean',
                'EVTNOTIFY' => 'required|boolean',
                'CLSNOTIFY' => 'required|boolean',
                'WCHK' => 'required|boolean',
                'CURWEIGHT' => 'required|boolean'
            ]
        );
        $item  =  Evtlist::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $evtlist = DB::table('evtlists')->where('id',$id)->get()->toArray();
        return $evtlist;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evtlist = DB::table('evtlists')->where('id',$id)->get();
        return $evtlist;
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
        $this->validate($request,
            [
                'GID' => 'required|numeric',
                'NODEID' => 'required|numeric',
                'NODEIP' => 'required',
                'NODENAME' => 'required|min:3|max:35',
                'EVTSTART' => 'required',
                'EVTEND' => 'required',
                'EVTDESCR' => 'required',
                'EVTCOMMENT' => 'required',
                'EVTID' => 'required|numeric',
                'EVTGROUP' => 'required|numeric',
                'EVTITEM' => 'required',
                'CHKDATE' => 'required|date',
                'EVTOPEN' => 'required|boolean',
                'NODESTAT' => 'required|boolean',
                'EVTIGNORE' => 'required|boolean',
                'EVTNOTIFY' => 'required|boolean',
                'CLSNOTIFY' => 'required|boolean',
                'WCHK' => 'required|boolean',
                'CURWEIGHT' => 'required|boolean'
            ]
        );
        $edit = DB::table('evtlists')
            ->where('id', $id)
            ->update([
                'CHKDATE'=>$request->input('CHKDATE'),
                'CLSNOTIFY'=>$request->input('CLSNOTIFY'),
                'CURWEIGHT'=>$request->input('CURWEIGHT'),
                'EVTCOMMENT'=>$request->input('EVTCOMMENT'),
                'EVTDESCR'=>$request->input('EVTDESCR'),
                'EVTEND'=>$request->input('EVTEND'),
                'EVTGROUP'=>$request->input('EVTGROUP'),
                'EVTID'=>$request->input('EVTID'),
                'EVTIGNORE'=>$request->input('EVTIGNORE'),
                'EVTITEM'=>$request->input('EVTITEM'),
                'EVTNOTIFY'=>$request->input('EVTNOTIFY'),
                'EVTOPEN'=>$request->input('EVTOPEN'),
                'EVTSTART'=>$request->input('EVTSTART'),
                'GID'=>$request->input('GID'),
                'NODEID'=>$request->input('NODEID'),
                'NODEIP'=>$request->input('NODEIP'),
                'NODENAME'=>$request->input('NODENAME'),
                'NODESTAT'=>$request->input('NODESTAT'),
                'WCHK'=>$request->input('WCHK')]);
        return response()->json("ok");
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

    public function Evtlist()
    {
        $evtlists = DB::table('evtlists')->get()->toJson();
        $evtlist = json_decode($evtlists);
        return response()->json($evtlist);
    }

    public function Remove(Request $request)
    {
        $evtlists = $request->input('data');
        $result = array_unique($evtlists);
        foreach ($result as $evtlist) {
            DB::table('evtlists')
                ->where('NODEID', $evtlist)
                ->delete();
        }

        return response()->json("Delete Complete");
    }
}
