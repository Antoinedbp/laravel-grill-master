@extends('template.back')

@section('contentBO')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h4>#{{$about->id}}</h4>
            <h3 class="card-title">{{$about->titre}}</h3>
            <h3 class="card-title">{{$about->description1}}</h3>
            <h3 class="card-title">{{$about->description2}}</h3>
            <form action="{{route('abouts.destroy', $about->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">DELETE</button>
                <a href="{{route('abouts.edit', $about->id)}}" class="btn btn-info">EDIT</a>
            </form>
        </div>
    </div>
@endsection