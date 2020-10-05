<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Port;
use App\Timetable;
use Cache;
use TCG\Voyager\Models\Post;

class VapurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $ports = Port::Ports()->get();

	    return view( "index",compact( 'ports'));
    }


	/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function result(Request $request)
    {


	    \Carbon\Carbon::setLocale('tr');

	    $now = \Carbon\Carbon::now('Europe/Istanbul');
	    $hour = $now->format('H:i:s');

	    $jhour = $now->format('H');
	    $jmin = $now->format('i');

	    //Find current day
	    if ($now->isWeekday()){
		    $day = 'WEEKDAYS';
	    }
	    elseif($now->isSaturday()) {
		    $day = 'SATURDAY';
	    }
	    else{
		    $day = 'SUNDAY';
	    }

	    $data      = $request->all();

	    //Get next scheduled ferry time
	    $timeslots = Timetable::Timetables()
	                          ->where([
		                          ['day', '=', $day],
		                          ['from', '=', $data['from']],
		                          ['to', '=', $data['to']]
	                          ])
	                          ->whereTime('time', '>', $hour)
	                          ->take( 18 )->get();

	    $from = Port::Ports()
	                 ->where('id', $data['from'])->value('name');

	    $to = Port::Ports()
	                ->where('id', $data['to'])->value('name');

	    return view( "result",compact( 'timeslots','from','to'));
    }

	public function getPost( $slug ) {
		$post     = Post::where( 'slug', '=', $slug )->firstOrFail();

		return view( 'post', compact( 'post' ) );
	}

	public function admin( ) {

		return view( 'admin' );
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
