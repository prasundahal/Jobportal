<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Category;
use App\Functional;
class CategoryController extends Controller
{
    public function index($id){
    	$jobs = Job::where('category_id',$id)->paginate(20);
    	$categoryName = Category::where('id',$id)->first();


    	return view('jobs.jobs-category',compact('jobs','categoryName'));
    }


    public function create()

    {

        return view('categorys.create');

    }

    public function store(Request $request)
    {


        $request->validate([
           'name' => 'required',
           'functionareas_id' => 'required',
        ]);
       Category::create($request->all());



       return redirect()->route('category.index2')

                       ->with('success','created successfully.');

   }
   public function edit(Category $category)

   {

       return view('categorys.edit',compact('categorys'));

   }

   public function destroy( Category $category)

   {

       $category->delete();



       return redirect()->route('category.index2')

                       ->with('success','category deleted successfully');

   }




   public function index2()

   {

       $categorys = Category::latest()->paginate(5);



       return view('categorys.index2',compact('categorys'))

           ->with('i', (request()->input('page', 1) - 1) * 5);

   }


}
