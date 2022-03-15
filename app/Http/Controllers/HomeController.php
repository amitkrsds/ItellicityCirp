<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $files= Media::where('user_id',Auth::id())->get();
        return view('home',['files'=>$files]);
    }

    public function uploadFiles(Request $request)
    {
        if($request->fileToUpload == null){
            return redirect()->back()->withErrors('Please select files');
        }
        foreach ($request->fileToUpload as $file){
            $originalFile = $file->getClientOriginalName();
            $time = microtime('.') * 10000;
            $filename=$time.$originalFile;
            $destinationPath = storage_path('app/files/');
            $file->move($destinationPath,$filename);
            Media::create([
                'name'=>$originalFile,
                'full_path'=>$filename,
                'user_id'=>Auth::id()
            ]);
        }
         return redirect()->route('home')->with('success','File uploaded successfully');

    }

    public function deleteFiles(Media $media){
        $file=storage_path('app/files/'.$media->full_path);
        unlink($file);
        $media->delete();
        return redirect()->back()->with('success','File deleted successfully');
    }


}
