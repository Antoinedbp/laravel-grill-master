@extends('template.back')

@section('contentBO')

    <div class="ab">
        <h1>Modifier About</h1>
        <br>
        <form action="{{route('abouts.update', $about->id)}}" method="POST">
            @csrf
            @method('PUT')
            <p>
                Titre: <input type="text" name="titre" class="monT" value="{{$about->titre}}">
            </p>
            <p>
                1ère description: <textarea type="text" name="description1" class="monT" value="{{$about->description1}}"></textarea>
            </p>
            <p class="p1">
                2ème description: <textarea type="text" name="description2" class="main" value="{{$about->description2}}"></textarea>
            </p>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

@endsection

