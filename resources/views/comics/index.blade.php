@extends('layouts.app')
@section('title', 'Comics')
@section('content')
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-12">
                
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Bottoni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($fumetti as $fumetto)
                        <tr>
                        <th scope="row">{{$fumetto->id}}</th>
                        <td>{{$fumetto->title}}</td>
                        <td>{{$fumetto->price}}</td>
                        <td>
                            <a href="{{route('comics.show',$fumetto->id)}}" class="btn btn-primary">Info</a>
                            <a href="" class="btn btn-secondary">Edit</a>
                            <a href="" class="btn btn-danger">Delate</a>
                    
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    
@endsection