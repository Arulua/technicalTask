<?php
namespace App\Http\Controllers;

use App\Models\Entity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

//  This is a controller class called 'EntityController' that handles various CRUD operations for the 'Entity' model.

class EntityController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     //Retrieves paginated entitles and renders the index view
    public function index()
    {
        //
        $entities =Entity::paginate(3);
        return view('entities.index',compact('entities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('entities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate the input data
        $validator =Validator::make($request->all(),[
        'title'=>'required|regex:/^[^0-9]+$/',
        'description' => 'required|string|regex:/^[^<>]+$/',
        'date' => 'required|date|after:today',
    ]);

    //id validation fails,redirects back with errors and input data
    if($validator->fails()){
        return redirect()->back()->withErrors($validator)->withInput();
    }

    //create a new entity using the provided data
    Entity::create($request->all());
    return redirect()->route('entities.index')->with('success','Entity added sucessfully');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entity $entity)
    {
        //  Renders the edit view for a specific entity
        return view('entities.edit',compact('entity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Entity $entity)
    {
        //validate input data
        $validator=Validator::make($request->all(),[
        'title'=>'required|regex:/^[^0-9]+$/',
        'description' => 'required| string',
        'date' => 'required|date|after:today',
        ]);

     if($validator->fails()){
        return redirect()->back()->withErrors($validator)->withInput();
    }

    //update the entity with the provided data
    $entity->update($request->all());

    //redirected to the index page with a success message
    return redirect()->route('entities.index')->with('success','Entity updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entity $entity)
    {
        //delete the specific entity
        $entity->delete();

        //Redirected to the index page with a success message
        return redirect()->route('entities.index')->with('success','Entity Deleted Sucessfully');
    }
}
