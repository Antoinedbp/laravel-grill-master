@extends('template.back')

@section('contentBO')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h4>#{{$customers->id}}</h4>
            <h3 class="card-title">{{$customers->img}}</h3>
            <h3 class="card-title">{{$customers->nom}}</h3>
            <h3 class="card-title">{{$customers->description}}</h3>
            <form action="{{route('customers.destroy', $customers->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">DELETE</button>
                <a href="{{route('customers.edit', $customers->id)}}" class="btn btn-info">EDIT</a>
            </form>
        </div>
    </div>
@endsection