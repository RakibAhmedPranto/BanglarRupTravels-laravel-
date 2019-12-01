<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Room_Image;
use Image;

class AdminRoomController extends Controller
{
  public function index()
  {
    $rooms = Room::orderBy('id','desc')->get();
    return view('admin.pages.room.index')->with('rooms',$rooms);
  }

    public function create()
    {
    	return view('admin.pages.room.create');
    }

    public function edit($id)
    {
      $room = Room::find($id);
      return view('admin.pages.room.edit')->with('room', $room);
    }


     public function store(Request $request)
     {


       $request->validate([
        'title' => 'required|max:255',
        'discription' => 'required',
        'price' => 'required|numeric',
        'catagory_id' => 'required|numeric',
        'hotel_id' => 'required|numeric',
        'numbers_room' => 'required|numeric',
        ]);

     	 $room = new Room;
       $room->title = $request->title;
       $room->discription = $request->discription;
       $room->price = $request->price;
       $room->numbers_room = $request->numbers_room;
       $room->catagory_id = $request->catagory_id;
       $room->slug = str_slug($room->title);
       $room->hotel_id = $request->hotel_id;
       $room->admin_id = 1;
       $room->save();

       if(count($request->room_image)>0)
       {
         foreach($request->room_image as $image){



             $img = mt_rand(10,time()) . '.'.$image->getClientOriginalExtension();
             $room_image =new Room_Image;
             $room_image->room_id = $room->id;
             $room_image->image = $img;
             $room_image->save();
             $location = public_path('images/hotels/' .$img);
             Image::make($image)->save($location);
           }
       }

        return redirect()->route('admin.room.create');
     }


     public function update(Request $request, $id)
    {
      $request->validate([
        'title' => 'required|max:255',
        'discription' => 'required',
        'price' => 'required|numeric',
        'numbers_room' => 'required|numeric',
    ]);


    	$room = Room::find($id);
      $room->title = $request->title;
      $room->title = $request->title;
      $room->discription = $request->discription;
      $room->price = $request->price;
      $room->numbers_room = $request->numbers_room;
      $room->status = $request->status;
      $room->save();

      return redirect()->route('admin.rooms');
    }

    public function delete($id)
    {
      $room = Room::find($id);
      if(!is_null($room))
      {
        $room->delete();
      }
      session()->flash('success','room has been deleted successfully!!');
      return back();
    }

}
