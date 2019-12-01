<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Catagory;
use App\Hotel;
use App\Room_Image;
use Image;

class AdminPlaceController extends Controller
{
  public function create()
  {
    return view('admin.pages.place.create');
  }
  public function edit($id)
  {
    $catagory = Catagory::find($id);
    return view('admin.pages.place.edit')->with('catagory',$catagory);
  }
  public function index()
  {
    $catagorys = Catagory::orderBy('id','desc')->get();
    return view('admin.pages.place.index',compact('catagorys'));
  }

  public function store(Request $request)
{

$request->validate([
 'name' => 'required|max:255',
 'description' => 'required',
 ]);
$catagory = new Catagory;
$catagory->name = $request->name;
$catagory->description = $request->description;
$catagory->parent_id = $request->parent_id;
//insert images also
$catagory->save();

session()->flash('success', 'A new category has added successfully !!');
return redirect()->route('admin.place.create');
}

public function update(Request $request, $id)
{

$request->validate([
'name' => 'required|max:255',
'description' => 'required',
]);
$catagory = Catagory::find($id);
$catagory->name = $request->name;
$catagory->description = $request->description;
$catagory->parent_id = $request->parent_id;
//insert images also
$catagory->save();

session()->flash('success', 'Updated successfully !!');
return redirect()->route('admin.places');
}

public function delete($id)
{
  $catagory = Catagory::find($id);
  if(!is_null($catagory))
  {
    $catagory->delete();
  }
  session()->flash('success','place has been deleted successfully!!');
  return back();
}

}
