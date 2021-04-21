<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;
use App\Models\Event;
use App\Models\User;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $user = Auth::user();
        echo $user->name;

        $bookings = DB::table('bookings')->get();

        // foreach ($bookings as $event) {
        // echo $event->name; //access table2 data
        // echo $event->bookings->id; //access table1 data
        // }

        // $event = Booking::first();
        // if ($user->id == $event->user_id) {
        //     $events = $event->event_id;
        //     echo $events;
        //     return view('bookings')->with('bookings', $events);
        // }

        return view('bookings', ['bookings'=>$bookings]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $user = Auth::user();
        // $booking = Booking::get();
        // if ($user->id == $booking->user_id) {
        //     $userBookings = $booking->event_id;
        //     return view('bookings')->with('Booking', $userBookings);
        // }

        // $user_id = Auth::user()->id;
        // $data['data'] = DB::table('users')
        //                 ->join('bookings', 'users.id', '=', 'bookings.user_id')
        //                 ->select('users.id', 'bookings.*')
        //                 ->where('users.id', $user_id)
        //                 ->get();
        // if(count($data)>0) {
        //     return view('bookings', ['bookings'=>$data]);
        // } else {
        //     return view('bookings');
        // }
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
