<?php

namespace App\Http\Controllers;

use App\Models\QuestionImg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD
use App\Http\Requests\QuestionsImgRequest;
use Illuminate\Support\Facades\Validator;
=======

>>>>>>> 41c747e25698b9d9e8c8c54f41db75e86472a6ce
class QuestionImgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve all question images from the database
        $questionImg = DB::table('question_img')->get();
        return response()->json(['questions' => $questionImg]);
    }
<<<<<<< HEAD
    public function store(Request $request)
    {
        
        $feedBack=$this->validation($request->all());
       if(!$feedBack){
           try {
            $question = new QuestionImg($request->all());
=======

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $feedBack = null;
        try {
            // Create a new QuestionImg instance with request data
            $question = new QuestionImg($request->all());

            // Uncomment the following code if you want to handle image uploads
            /*
            if ($request->hasFile('img') && $request->file('img')->isValid()) {
                $archivo = $request->file('img');
                $path = $archivo->getRealPath();
                $imagen = file_get_contents($path);
                $question->img = base64_encode($imagen);
            }
            */

            // Save the question to the database
>>>>>>> 41c747e25698b9d9e8c8c54f41db75e86472a6ce
            $question->save();
            $feedBack = ['feedback' => 'Saved correctly'];
        } catch (\Exception $e) {
            $feedBack = ['feedback' => 'Could not be saved'];
        }
       }
        
        return response()->json($feedBack);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Find a specific question image by ID
        $questionImg = QuestionImg::find($id);
        return response()->json($questionImg);
    }

<<<<<<< HEAD
    public function update(Request $request,$id)
    {    
        $feedBack=$this->validation($request->all());
        if(!$feedBack){
            try {
                $questionImg = QuestionImg::find($id);
                $result = $questionImg->update($request->all());
                $feedBack = ['feedback'=>'Update correctly'];
            } catch (\Exception $e) {
                 $feedBack = ['feedback'=>'could not be update'];
            }
=======
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            // Find the existing question image by ID
            $questionImg = QuestionImg::find($id);

            // Update the question image with request data
            $result = $questionImg->update($request->all());
            $feedBack = ['feedback' => 'Updated correctly'];
        } catch (\Exception $e) {
            $feedBack = ['feedback' => 'Could not be updated'];
>>>>>>> 41c747e25698b9d9e8c8c54f41db75e86472a6ce
        }
        return response()->json($questionImg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Implement the logic to delete a question image
        // ...
        return response()->json(['message' => 'Deleted successfully']);
    }
    
    
    
    private function validation($data){
         $validator = Validator::make($data, [
                'question' => 'required|string',
            'correct' => 'required|numeric|between:0,1',
            'realNew' => 'required|string',
            'img' => 'nullable|string|max:255',
            ]);
            
            if($validator->fails()) {
                return  ['feedback' =>  $validator->getMessageBag()->first()];
            }else{
                return false;
            }
            
    }
}
