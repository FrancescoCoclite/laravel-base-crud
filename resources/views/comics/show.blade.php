@extends('layouts.app')
@section('title', 'Comics-details')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-7 mx-5">

            <h2>{{$dettaglio->title}}</h2>
            <p>{{$dettaglio->description}}</p>
        </div>
        <div class="col-4 mb-5">
            <img src="{{$dettaglio->thumb}}" alt="">
        </div>

        <div class="col-12 mb-5 text-center">
            <a class="btn btn-primary">Buy Now</a>
        </div>
        

    </div>
</div>
@endsection