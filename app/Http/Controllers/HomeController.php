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
        foreach ($request->fileToUpload as $file){
            $originalFile = $file->getClientOriginalName();
            $time = microtime('.') * 10000;
            $filename=$time.$originalFile;
            $destinationPath = storage_path('app/polls/');
            $file->move($destinationPath,$filename);
            Media::create([
                'name'=>$originalFile,
                'full_path'=>$destinationPath,
                'user_id'=>Auth::id()
            ]);
        }
         return redirect()->route('home')->with('success','File uploaded successfully');

    }
}
