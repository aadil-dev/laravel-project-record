<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Records;
use App\User;

class RecordController extends Controller
{
    function recordstore(Request $request)
    {
    	$this->validate($request, [
			'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		]);

		$name_image = '';

		if ($request->hasFile('picture')) {
			$image = $request->file('picture');
			$name_image = time().'.'.$image->getClientOriginalExtension();
			$destinationPath = public_path('/images');
			$image->move($destinationPath, $name_image);
		}
		$records = new Records;

		$records->image_path = $name_image;
		$records->name = $request->name;
		$records->address = $request->address;
		$records->contact = $request->contact;
		$records->education = $request->education;
		$records->job = $request->job;
		$records->company = $request->company;

		$records->save();
		$user = User::find(Auth::user()->id);
		$user->record_id = $records->id;
		$user->save();

		$users = Auth::user();
        $records = Records::all();


		return view ('create_profile' , compact('records' , 'users'));

    }

    function createProfile(Request $request)
    {
    	return view('create_profile');

    }

}
