<?php

namespace App\Http\Controllers;

use App\Models\QuestionImg;
use Illuminate\Http\Request;


class QuestionImgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questionImg = QuestionImg::all();
        $arrayPreguntas = ['questions'=>$questionImg];
        return response()->json($arrayPreguntas);
    }
    public function store(Request $request)
    {
        $feedBack=null;
        try {
            $question = new QuestionImg($request->all());
            /*if($request->hasFile('img') && $request->file('img')->isValid()) {
             $archivo = $request->file('img');
             $path = $archivo->getRealPath();
             $imagen = file_get_contents($path);
             $question->img = base64_encode($imagen);
            }
            */
            $question->save();
            $feedBack = ['feedback'=>'Save correctly'];
        } catch (Exception ) {
             $feedBack = ['feedback'=>'could not be saved'];
        }
        return response()->json($feedBack);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\questionImg  $questionImg
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $questionImg = QuestionImg::find($id);
        return response()->json($questionImg);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\questionImg  $questionImg
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $questionImg = QuestionImg::find($id);
        return response()->json($questionImg);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\questionImg  $questionImg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
        try {
            $questionImg = QuestionImg::find($id);
            $result = $questionImg->update($request->all());
            $feedBack = ['feedback'=>'Update correctly'];
        } catch (Exception ) {
             $feedBack = ['feedback'=>'could not be update'];
        }
         return response()->json($questionImg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\questionImg  $questionImg
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feedBack=null;
        $questionImg = QuestionImg::find($id);
        try {
            $questionImg->delete();
            $feedBack = ['feedback'=>'Delete correctly'];
        } catch (Exception ) {
             $feedBack = ['feedback'=>'could not be deleted'];
        }
        return response()->json($feedBack);
    }
    
     public function showQuiz()
    {
        $numQuestions=3;
        $questionImg = QuestionImg::inRandomOrder()->take($numQuestions)->get();;
        $arrayPreguntas = ['questions'=>$questionImg];
        return response()->json($arrayPreguntas);
    }
}
