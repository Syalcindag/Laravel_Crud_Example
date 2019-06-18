<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Student;
use App\Http\Controllers\Controller;
use Request; // use Illuminate\Http\Request; bunun yerine kullanılmış komut

class OkulController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
   public function index()
   {
      $okul = Student::paginate(3);  //Database veri alma kısmı
      return view('okul.index', compact('okul'));
   }
   /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
   public function create()
   {
        return view('okul.create');
   }
   /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
   public function store()
   {
        $kayit=Request::all();
        Student::create($kayit);
        return redirect('okul'); //işlem bitince gidilecek adres "/okul"
   }
   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function show($id)
   {
      //
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $no
    * @return Response
    */
   public function edit($no)
   {
        $student=Student::find($no);
        return view('okul.edit',compact('student'));
   }
   /**
    * Update the specified resource in storage.
    *
    * @param  int  $no
    * @return Response
    */
   public function update($no)
   {
        $studentUpdate=Request::all();
        $student=Student::find($no);
        $student->update($studentUpdate);
        return redirect('okul');
   }
   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $no
    * @return Response
    */
   public function destroy($no)
   {
        Student::find($no)->delete();
        return redirect('okul'); //İşlem sonucunda gönderilecek adres (/okul)
   }
}
