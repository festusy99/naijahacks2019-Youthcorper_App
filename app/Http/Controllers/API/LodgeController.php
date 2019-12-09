<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Lodge;
use Validator;
use App\Http\Resources\Lodge as LodgeResource;
   
class LodgeController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lodges = Lodge::all();
    
        return $this->sendResponse(LodgeResource::collection($lodges), 'Lodges retrieved successfully.');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'lodge_name' => 'required',
            'lodge_type' => 'required',
            'description' => 'required',
            'state' => 'required',
            'local_govt' => 'required',
            'address' => 'required',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $lodge = Lodge::create($input);
   
        return $this->sendResponse(new LodgeResource($lodge), 'Lodge created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lodge = Lodge::find($id);
  
        if (is_null($lodge)) {
            return $this->sendError('Lodge not found.');
        }
   
        return $this->sendResponse(new LodgeResource($lodge), 'Lodge retrieved successfully.');
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lodge $lodge)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'lodge_name' => 'required',
            'lodge_type' => 'required',
            'description' => 'required',
            'state' => 'required',
            'local_govt' => 'required',
            'address' => 'required',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $lodge->lodge_name = $input['lodge_name'];
        $lodge->lodge_type = $input['lodge_type'];
        $lodge->description = $input['description'];
        $lodge->state = $input['state'];
        $lodge->local_govt = $input['local_govt'];
        $lodge->address = $input['address'];
        $lodge->save();
   
        return $this->sendResponse(new LodgeResource($lodge), 'Lodge updated successfully.');
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lodge $lodge)
    {
        $lodge->delete();
   
        return $this->sendResponse([], 'Lodge deleted successfully.');
    }
}