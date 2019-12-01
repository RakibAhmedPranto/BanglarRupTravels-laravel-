<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Catagory;
use App\Hotel;
use App\Room_Image;
use Image;

class AdminPagesController extends Controller
{
    public function index()
    {
    	return view('admin.pages.index');
    }

}
