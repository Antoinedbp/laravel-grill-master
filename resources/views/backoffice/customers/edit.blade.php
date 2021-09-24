@extends('template.back')

@section('contentBO')

    <div class="ab">
        <h1>Modifier Customer</h1>
        <br>
        <form action="{{route('customers.update', $customer->id)}}" method="POST">
            @csrf
            @method('PUT')
            <p class="p1">
                Image: <textarea type="text" name="img" class="main" value="{{$customer->img}}">{{$customer->img}}</textarea>
            </p>
            <p>
                Nom: <input type="text" name="nom" class="monT" value="{{$customer->nom}}">
            </p>
            <p>
                Description: <input type="text" name="description" class="monT" value="{{$customer->description}}">
            </p>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

@endsection

