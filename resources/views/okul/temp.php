@extends('layouts/template')

@section('content')
    <div class="container">
        <h2>Edit A Form</h2><br  />
        <form method="post" action="{{action('OkulController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
            <div class="row">
                <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                    <label for="no">No:</label>
                <input type="text" class="form-control" name="no" value="{{$student->no}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="ad">Ad:</label>
                <input type="text" class="form-control" name="ad" value="{{$student->ad}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="soyad">Soyad:</label>
                    <input type="text" class="form-control" name="soyad" value="{{$student->soyad}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4" style="margin-top:60px">
                <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
                </div>
            </div>
        </form>
    </div>

@endsection
