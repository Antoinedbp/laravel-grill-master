@extends('template.back')

@section('contentBO')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h4>#{{$steaks->id}}</h4>
            <h3 class="card-title">{{$steaks->titre}}</h3>
            <h3 class="card-title">{{$steaks->description}}</h3>
            <h3 class="card-title">{{$steaks->txtBouton}}</h3>
            <form action="{{route('steaks.destroy', $steaks->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">DELETE</button>
                <a href="{{route('steaks.edit', $steaks->id)}}" class="btn btn-info">EDIT</a>
            </form>
        </div>
    </div>
@endsection