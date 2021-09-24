@extends('template.back')

@section('contentBO')

    <div class="ab">
        <h1>Modifier Steak</h1>
        <br>
        <form action="{{route('steaks.update', $steak->id)}}" method="POST">
            @csrf
            @method('PUT')
            <p class="p1">
                Titre: <textarea type="text" name="titre" class="main" value="{{$steak->titre}}">{{$steak->titre}}</textarea>
            </p>
            <p>
                Description: <input type="text" name="description" class="monT" value="{{$steak->description}}">
            </p>
            <p>
                Texte du Bouton: <input type="text" name="txtBouton" class="monT" value="{{$steak->txtBouton}}">
            </p>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

@endsection

