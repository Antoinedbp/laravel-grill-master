@extends('template.back')

@section('contentBO')

    <div class="ab">
        <h1>Modifier Chef</h1>
        <br>
        <form action="{{route('headers.update', $header->id)}}" method="POST">
            @csrf
            @method('PUT')
            <p class="p1">
                Logo: <textarea type="text" name="logo" class="main" value="{{$header->logo}}">{{$header->logo}}</textarea>
            </p>
            <p>
                Image 1: <input type="text" name="img1" class="monT" value="{{$header->img1}}">
            </p>
            <p>
                Image 2: <input type="text" name="img2" class="monT" value="{{$header->img2}}">
            </p>
            <p>
                Image 3: <input type="text" name="img3" class="monT" value="{{$header->img3}}">
            </p>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

@endsection

