<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Catagory;
use App\Hotel;
use App\Room_Image;
use Image;

class AdminHotelController extends Controller
{


  public function create()
  {
    return view('admin.pages.hotel.create');
  }
  public function edit($id)
  {
    $hotel = Hotel::find($id);
    return view('admin.pages.hotel.edit')->with('hotel',$hotel);
  }
  public function index()
  {
    $hotels = Hotel::orderBy('id','desc')->get();
    return view('admin.pages.hotel.index')->with('hotels',$hotels);
  }

  public function store(Request $request)
  {

  $request->validate([
  'name' => 'required|max:255',
  'discription' => 'required',
  'address' => 'required',
  ]);
  $hotel = new Hotel;
  $hotel->name = $request->name;
  $hotel->address = $request->address;
  $hotel->discription = $request->discription;
  //insert images also

  $hotel->save();

  session()->flash('success', 'A new category has added successfully !!');
  return redirect()->route('admin.hotel.create');
  }

  public function update(Request $request, $id)
  {

  $request->validate([
  'name' => 'required|max:255',
  'discription' => 'required',
  'address' => 'required',
  ]);
  $hotel = Hotel::find($id);
  $hotel->name = $request->name;
  $hotel->discription = $request->discription;
  $hotel->address = $request->address;
  //insert images also
  $hotel->save();

  session()->flash('success', 'Updated successfully !!');
  return redirect()->route('admin.hotels');
  }

  public function delete($id)
  {
    $hotel = Hotel::find($id);
    if(!is_null($hotel))
    {
      $hotel->delete();
    }
    session()->flash('success','hotel has been deleted successfully!!');
    return back();
  }

}
