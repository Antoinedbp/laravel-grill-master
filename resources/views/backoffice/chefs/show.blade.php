@extends('template.back')

@section('contentBO')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h4>#{{$chef->id}}</h4>
            <h3 class="card-title">{{$chef->nom}}</h3>
            <h3 class="card-title">{{$chef->icon1}}</h3>
            <h3 class="card-title">{{$chef->icon2}}</h3>
            <h3 class="card-title">{{$chef->icon3}}</h3>
            <h3 class="card-title">{{$chef->icon4}}</h3>
            <h3 class="card-title">{{$chef->icon5}}</h3>
            <h3 class="card-title">{{$chef->icon6}}</h3>
            <form action="{{route('chefs.destroy', $chef->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">DELETE</button>
                <a href="{{route('chefs.edit', $chef->id)}}" class="btn btn-info">EDIT</a>
            </form>
        </div>
    </div>
@endsection