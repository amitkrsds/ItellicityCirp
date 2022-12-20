<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class
HomeController extends Controller
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
        foreach ($files as $file){
            $file->category=Category::find($file->category_id)->name;
        }
        $category=Category::all();
        return view('home',['files'=>$files,'categories'=>$category]);
    }

    public function welcome(){
        $catgories=Category::all();
        foreach ($catgories as $category){
            $category->files=Media::where('category_id',$category->id)->get();
        }
        return view('welcome',['categories'=>$catgories]);
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
                'user_id'=>Auth::id(),
                'category_id'=>$request->category_id
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

    public function categoryCreate(){
        return view('category-create');
    }

    public function savecategory(Request $request)
    {
        Category::create([
            'name'=>$request->name
        ]);
        return redirect()->route('home')->with('success','Created successfully');
    }

    public function categoryDelete(){
        $catgories=Category::all();
        return view('category',['categories'=>$catgories]);
    }

    public function deleteCategory(Category $category){
        $category->delete();
        return redirect()->route('category')->with('success','Deleted successfully');
    }

    public function categoryShow(Category $category){
         dd($category);
    }



}
