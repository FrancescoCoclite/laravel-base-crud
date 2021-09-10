@extends('layouts.app')
@section('title', 'Comics')
@section('content')
    <div class="container">
        <p>
            @if (session ('deleted'))
                <div class="alert alert-success">
                    {{session ('deleted')}}
                </div>
            @endif
        </p>
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
                            <a href="{{route('comics.edit',$fumetto->id)}}" class="btn btn-success">Edit</a>
                            <form action="{{ route ('comics.destroy', $fumetto->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>  
                    
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    
@endsection