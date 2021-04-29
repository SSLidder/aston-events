<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\Models\Booking;
use DB;

class SportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $sorting;

    public function index()
    {
        $events = DB::table('events')
                    ->where('type', 'Sport')
                    ->orderBy('date', 'ASC')
                    ->get();
        return view('sportsEvents', ['events'=>$events]);
    }

    public function sportEvents() {
        $events = DB::table('events')
        ->where('type', 'Sport')
        ->take(1)
        ->get();
        return view('sportEvent1', ['events'=>$events]);
    }

    public function mount() {
        $this->sorting = 'default';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()) {
            Booking::create([
                'user_id' => auth()->id(),
                'event_id' => request('event_id')
            ]);
            return redirect('sportsEvents')->with('status', 'Booking Successful!');
        }
        else {
            return redirect('login')->with('status', 'Please Login to book');
        }
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
    public function showData($id)
    {
        $data = Event::find($id);
        return view('show', ['data'=>$data]);
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

    public function render() {
        if($this->sorting=='date') {
            $events = DB::table('events')
            ->where('type', 'Sport')
            ->orderBy('date', 'ASC')
            ->get();
        } else {
            $events = DB::table('events')
            ->where('type', 'Sport')
            ->get();
        }
        return view('sportsEvents', ['events'=>$events]);
    }
}
