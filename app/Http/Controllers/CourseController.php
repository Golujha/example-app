<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {   
        $data = ['courses' => Course::all()];
        return view("admin.manageCourse",$data);



        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.addCourse");
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'discount_price' => 'required',
            'duration' => 'required',
            'image' => 'required',
            'description' => 'required',

        ]);
        $course = new Course();
        $course->title = $request->title;
        $course->duration = $request->duration;
        $course->price = $request->price;
        $course->discount_price = $request->discount_price;
        $course->description = $request->description;
        
        $file  = $request->image;
        $fileName = $file->getClientOriginalName();
        $file->move("product_image", $fileName);
        $course->image = $fileName;
        $course->save();
        return redirect()->route('course.index');
    }
    public function addCourse(){
        $data = [
            'courses' => Course::all(),
        ];
        return view("admin.addCourse",$data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
        $data['course'] = $course;
        return view("admin/editCourse",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'discount_price' => 'required',
            'duration' => 'required',
            'image' => 'required',
            'description' => 'required',

        ]);
        $course->title = $request->title;
        $course->duration = $request->duration;
        $course->price = $request->price;
        $course->discount_price = $request->discount_price;
        $course->description = $request->description;
        
        $file  = $request->image;
        $fileName = $file->getClientOriginalName();
        $file->move("product_image", $fileName);
        $course->image = $fileName;
        $course->save();
        return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
        $course->delete();
        return redirect()->route('course.index');
    }
}
