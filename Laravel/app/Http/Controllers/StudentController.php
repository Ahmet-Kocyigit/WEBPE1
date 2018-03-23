<?php
/**
 * Created by PhpStorm.
 * User: Ahmet
 * Date: 20/03/2018
 * Time: 18:22
 */

namespace App\Http\Controllers;
use App\Student;
use Faker\Factory;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Input;

class StudentController extends Controller
{


    /** Route controller views*/
    public function getHome()
    {
        return view('welcome');
    }
    public function getAdd()
    {
        return view('add');
    }
    public function getOverview()
    {
        $students = Student::all();
        return view('overview',['students' => $students]);
    }
    /** Route controller views*/



    public function getStudents()
    {
        $this->student = new Student();
        $studenten = $this->student->getStudent();
        return view('student',['posts' => $studenten]);
    }

    public function deleteStudent($id)
    {
        $student = Student::find(intval( request('id')));
        $student->delete();
        return $this->getOverview();
    }

    public function updateStudent(Request $request)
    {
        $student = Student::find($request->input('id'));
        $student->Naam = $request->input('Naam');
        $student->Voornaam = $request->input('Voornaam');
        $student->Leeftijd = $request->input('Leeftijd');
        $student->Beschrijving = $request->input('Beschrijving');
        $student->save();

        return $this->getOverview();
    }

    public function getStudentsById($id)
    {
        $student = Student::find(intval( request('id')));
        return view('edit',['student' => $student]);
    }

    public function addStudent(Request $request, \Illuminate\Contracts\Validation\Factory $validator)
    {
        $validation = $validator->make($request->all(),[
                'Voornaam' => 'required|min:2',
                'Naam' => 'required|min:2',
                'Leeftijd' => 'required',
                'Beschrijving' => 'required|min:10'
            ]);

        if($validation->fails()){
            return redirect('add')->withErrors($validation);
        }
        $post = new Student([
        'Naam' =>$request->input('Naam'),
        'Voornaam' => $request->input('Voornaam'),
        'Leeftijd' => $request->input('Leeftijd'),
        'Beschrijving' => $request->input('Beschrijving')]);
        $post->save();


        return redirect('add')->with('info', 'Nieuwe student is toegevoegd: '
                . $request->input('Voornaam')
                .' '.$request->input('Naam'));
    }
}