@extends('template.back')

@section('contentBO')

    <div class="ab">
        <h1>Modifier Chef</h1>
        <br>
        <form action="{{route('chefs.update', $chef->id)}}" method="POST">
            @csrf
            @method('PUT')
            <p class="p1">
                Nom: <textarea type="text" name="nom" class="main" value="{{$chef->nom}}">{{$chef->nom}}</textarea>
            </p>
            <p>
                Icon 1: <input type="text" name="icon1" class="monT" value="{{$chef->icon1}}">
            </p>
            <p>
                Icon 2: <input type="text" name="icon2" class="monT" value="{{$chef->icon2}}">
            </p>
            <p>
                Icon 3: <input type="text" name="icon3" class="monT" value="{{$chef->icon3}}">
            </p>
            <p>
                Icon 4: <input type="text" name="icon4" class="monT" value="{{$chef->icon4}}">
            </p>
            <p>
                Icon 5: <input type="text" name="icon5" class="monT" value="{{$chef->icon5}}">
            </p>
            <p>
                Icon 6: <input type="text" name="icon6" class="monT" value="{{$chef->icon6}}">
            </p>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

@endsection

