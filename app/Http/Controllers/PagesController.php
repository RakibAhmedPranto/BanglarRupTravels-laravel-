<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\room;
use App\booking;
use App\Catagory;


class PagesController extends Controller
{
    public function index()
    {
      $rooms = room::orderBy('id','desc')->paginate(3);
      return view('pages.index', compact('rooms'));
    }

    public function rooms()
    {
      $rooms = room::orderBy('id','desc')->paginate(3);
      return view('pages.room.index')->with('rooms',$rooms);
    }

    public function contact()
    {
      return view('pages.contact');
    }

    public function show($slug)
    {
      $room = room::where('slug',$slug)->first();
      if(!is_null($room))
      {
        return view('pages.room.show',compact('room'));
      }
      else
      {
        session()->flash('errors','sorry!! there is no room by this url...');
        return redirect()->route('rooms');
      }
    }

    public function search(Request $request)
    {
      $search=$request->search;
      $rooms = room::orWhere('title','like','%'.$search.'%')
      ->orWhere('price','like','%'.$search.'%')
      ->orWhere('discription','like','%'.$search.'%')
      ->orderBy('id','desc')
      ->paginate(1);
      return view('pages.search', compact('search','rooms'));
    }


    public function create()
    {
    	return view('pages.create');
    }



    public function book(Request $request)
    {


      $request->validate([
       'name' => 'required|max:255',
       'phone_number' => 'required',
       'address' => 'required',
       'email' => 'required',
       'checkin' => 'required',
       'checkout' => 'required',
       'room_id' => 'required',
       ]);

      $booking = new booking;
      $booking->title = $request->name;
      $booking->address = $request->address;
      $booking->phone_number = $request->phone_number;
      $booking->email = $request->email;
      $booking->room_id = $request->room_id;
      $booking->check_in = $request->checkin;
      $booking->check_out = $request->checkout;
      $booking->save();


       return redirect()->route('index');
    }




}
