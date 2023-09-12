<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Resources\PropertyResource;
use Hamcrest\Arrays\IsArray;
use Hamcrest\Core\IsCollectionContaining;
use Hamcrest\Core\IsNot;

use function PHPUnit\Framework\isNull;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $user_id)
    {
        $properties = Property::where('user_id', $user_id)->get();

        if ($properties->count()){
            $resourcesProperties= new PropertyResource($properties);
            return response($resourcesProperties->collection($properties), 200);
            //$resourcesProperties= new PropertyCollection($properties);
            // $resourcesProperties->withoutWrapping()
        }
        else{
            return response(["message" => "Properties not found."], 404);  
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $user_id, string $property_id)
    {
        $properties =  Property::where('user_id', $user_id)->get();

        if ($properties->count() > 0) { //ToDo: Mejorar sentencia if else
            $property = $properties->find($property_id);
           
            if ($property) {
                $resourceProperty = new PropertyResource($property);
                return response($resourceProperty, 200);
            }
            else {
                return response(["message" => "Property not found."], 404);
            }
        }
        else{
            return response(["message" => "Property not found."], 404);  
        }
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
