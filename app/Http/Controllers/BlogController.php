<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::get();
        return view('admin_pannel.create.blog_view' ,compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'title'=> 'Required|min:10',
            'comtent'=> 'Required|min:500'
        ];
        

        if($request->hasFile('multiple_images')) {
            $images =  $request->file('multiple_images');
            $imagepath = [];

            foreach ($images as $image){
                $filename = date('dmY').time(). '.' .$image->getClientOriginalExtension();
                $image->move(public_path("/uploads"), $filename);
                $imagepath[] = $filename;
            }

            $validator = Validator::make($request->all(),$data);
        if($validator->fails()){
            return redirect()->route('')->withInput()->withErrors($validator);
        }
            $data['multiple_images'] = json_encode($imagepath);
            $create = Blog::create($data);
            return redirect()->route('')->with('success','Blog Added Successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
