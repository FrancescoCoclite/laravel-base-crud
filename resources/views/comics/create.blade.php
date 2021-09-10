@extends('layouts.app')
@section('title', 'Comics')
@section('content')
<div class="container">
    <div class="row mb-5 mt-5">
        <div class="col-12">
            <form action="{{route('comics.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="titolo" class="form-label">Title</label>
                    <input name="title" type="text" class="form-control" id="titolo">
                </div>
                <div class="mb-3">
                    <label for="serie" class="form-label">Series</label>
                    <input name="series" type="text" class="form-control" id="serie">
                </div>
                <div class="mb-3">
                    <label for="img" class="form-label">Image</label>
                    <input name="thumb" type="text" class="form-control" id="img">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input name="price" type="text" class="form-control" id="price">
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="desc" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Data di vendita</label>
                    <input name="sale_date" type="text" class="form-control" id="date">
                </div>
                <div class="mb-3">
                    <label for="tipo" class="form-label">Type</label>
                    <input name="type" type="text" class="form-control" id="tipo">
                </div>
             
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection