<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\Models\Booking;
use DB;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = DB::table('events')
                    ->get();
        return view('events', ['events'=>$events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createSport()
    {
        if (Auth::check()) {
            Booking::create([
                'user_id' => auth()->id(),
                'event_id' => request('event_id')
            ]);
            return redirect('sportsEvents');
        }
        else {
            return redirect('login')->with('alert', 'Please Login to book');
        }
    }

    public function createCulture()
    {
        if (Auth::check()) {
            Booking::create([
                'user_id' => auth()->id(),
                'event_id' => request('event_id')
            ]);
            return redirect('cultureEvents');
        }
        else {
            return redirect('login')->with('status', 'Please Login to book');
        }
    }

    public function createOther()
    {
        if (Auth::check()) {
            Booking::create([
                'user_id' => auth()->id(),
                'event_id' => request('event_id')
            ]);
            return redirect('otherEvents');
        }
        else {
            return redirect('login')->with('status', 'Please Login to book');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showData($id)
    {
        $data = Event::find($id);
        return view('show', ['data'=>$data]);
    }
}
