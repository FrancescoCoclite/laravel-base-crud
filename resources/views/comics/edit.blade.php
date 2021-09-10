@extends('layouts.app')
@section('title', 'Comics')
@section('content')
<div class="container">
    <div class="row mb-5 mt-5">
        <div class="col-12">
            
            <form action="{{route('comics.update',$edit->id)}}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="titolo" class="form-label">Title</label>
                    <input name="title" type="text" class="form-control" id="titolo" value="{{$edit->title}}">
                </div>
                <div class="mb-3">
                    <label for="serie" class="form-label">Series</label>
                    <input name="series" type="text" class="form-control" id="serie" value="{{$edit->series}}">
                </div>
                <div class="mb-3">
                    <label for="img" class="form-label">Image</label>
                    <input name="thumb" type="text" class="form-control" id="img" value="{{$edit->thumb}}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input name="price" type="text" class="form-control" id="price" value="{{$edit->price}}">
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="desc" rows="3">{{$edit->description}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Data di vendita</label>
                    <input name="sale_date" type="text" class="form-control" id="date" value="{{$edit->sale_date}}">
                </div>
                <div class="mb-3">
                    <label for="tipo" class="form-label">Type</label>
                    <input name="type" type="text" class="form-control" id="tipo" value="{{$edit->type}}">
                </div>
             
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection