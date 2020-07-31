<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Functionarea;
class FunctionareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
         {
         return view('functionareas.create');
        }

    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required',
        ]);
        Functionarea::create($request->all());



       return redirect()->route('functionareas.index2')

                       ->with('success','created successfully.');

   }
   public function edit(Functionarea $functionarea)

   {

       return view('functionareass.edit',compact('functionareass'));

   }

   public function destroy( functionarea $functionarea)

   {

       $functionarea->delete();



       return redirect()->route('functionareas.index2')

                       ->with('success','functionareas deleted successfully');

   }




   public function index2()

   {

       $functionareas = Functionarea::latest()->paginate(5);



       return view('functionareas.index2',compact('functionareas'))

           ->with('i', (request()->input('page', 1) - 1) * 5);

   }

}
