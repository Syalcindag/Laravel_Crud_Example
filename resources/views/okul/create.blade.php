@extends('layout.template')
@section('content')
    <h1>Create Student</h1>
    {!! Form::open(['url' => 'okul']) !!}
    <div class="form-group">
        {!! Form::label('no', 'No:') !!}
        {!! Form::text('no',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('ad', 'AD:') !!}
        {!! Form::text('ad',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Soyad', 'Soyad:') !!}
        {!! Form::text('soyad',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop
