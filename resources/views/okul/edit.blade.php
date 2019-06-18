@extends('layout.template')
@section('content')
    <h1>Update Book</h1>
    {!! Form::model($student,['method' => 'PATCH','route'=>['okul.update',$student->no]]) !!}
    <div class="form-group">
        {!! Form::label('no', 'No:') !!}
        {!! Form::text('no',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('ad', 'Ad:') !!}
        {!! Form::text('ad',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('soyad', 'Soyad:') !!}
        {!! Form::text('soyad',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop
