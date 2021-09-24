@extends('template.back')

@section('contentBO')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h4>#{{$header->id}}</h4>
            <h3 class="card-title">{{$header->logo}}</h3>
            <h3 class="card-title">{{$header->img1}}</h3>
            <h3 class="card-title">{{$header->img2}}</h3>
            <h3 class="card-title">{{$header->img3}}</h3>
            <form action="{{route('headers.destroy', $header->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">DELETE</button>
                <a href="{{route('headers.edit', $header->id)}}" class="btn btn-info">EDIT</a>
            </form>
        </div>
    </div>
@endsection