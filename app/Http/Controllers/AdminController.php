<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.index');
    }

    public function upload_image(Request $request)
    {
        if ($request->hasFile('upload') && $request->file('upload')->isValid()) {
            $path = $request->file('upload')->store('public/uploads');
            $filename = str_replace('public/uploads/', '', $path);

            return response()->json([
                'uploaded' => 1,
                'fileName' => $filename,
                'url' => '/storage/uploads/' . $filename
            ]);
        }

        return response()->json([
            'uploaded' => 0,
            'error' => 'Ha ocurrido un error al subir la imagen.'
        ]);
        
    }
}
