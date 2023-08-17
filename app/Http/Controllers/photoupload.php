<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class photoupload extends Controller
{
   

    public function upload(Request $request)
    {
      
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $uploadedPhoto = $request->file('photo');
        $photoPath = $uploadedPhoto->store('public/photos');

        $photoUrl = Storage::url($photoPath);

        return response()->json(['photo_url' => $photoUrl], 201);
    


    }


}
