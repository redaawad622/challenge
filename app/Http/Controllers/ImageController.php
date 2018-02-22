<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    public function imageUpload()
    {
        return view('image-upload');
    }

    public function imageUploadPost(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move('image', $imageName);

        return back()
            ->with('success', 'Image Uploaded successfully.')
            ->with('path', $imageName);
    }
}
