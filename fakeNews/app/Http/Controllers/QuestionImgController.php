<?php

namespace App\Http\Controllers;

use App\Models\QuestionImg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\QuestionsImgCreateRequest;
class QuestionImgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $questionImg = DB::table('question_img')->get();
        return response()->json(['questions'=>$questionImg]);
    }
    public function store(QuestionsImgCreateRequest $request)
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
        } catch (\Exception $e ) {
             $feedBack = ['feedback'=>'Could not be saved'];
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

    public function update(Request $request,$id)
    {
        try {
            $questionImg = QuestionImg::find($id);
            $result = $questionImg->update($request->all());
            $feedBack = ['feedback'=>'Update correctly'];
        } catch (\Exception $e) {
             $feedBack = ['feedback'=>'could not be update'];
        }
         return response()->json($feedBack);
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
    
    public function showQuiz(Request $request)
    {
        //$numQuestions=$request->numQuestions;
        $numQuestions=5;
        $questionImg = QuestionImg::inRandomOrder()->take($numQuestions)->get();
        $arrayPreguntas = ['questions'=>$questionImg];
        return response()->json($arrayPreguntas);
    }
}
