<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;


class LikesController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createSport()
    {
        if(Auth::check()) {
            Like::create([
                'user_id' => auth()->id(),
                'event_id' => request('event_id')
            ]);
            return redirect('sportsEvents')->with('status', 'Liked!');
        }
        else {
            return redirect('login')->with('status', 'Please Login to like');
        }
    }

    public function createCulture()
    {
        if(Auth::check()) {
            Like::create([
                'user_id' => auth()->id(),
                'event_id' => request('event_id')
            ]);
            return redirect('cultureEvents')->with('status', 'Liked!');
        }
        else {
            return redirect('login')->with('status', 'Please Login to like');
        }
    }

    public function createOther()
    {
        if(Auth::check()) {
            Like::create([
                'user_id' => auth()->id(),
                'event_id' => request('event_id')
            ]);
            return redirect('otherEvents')->with('status', 'Liked!');
        }
        else {
            return redirect('login')->with('status', 'Please Login to like');
        }
    }

    public function destroy($id)
    {
        $like = Like::find($id);
        $like->delete();
        return redirect('events')->with('status', 'Like Removed!');
    }
}
