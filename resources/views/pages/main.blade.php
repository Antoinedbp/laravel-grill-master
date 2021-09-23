@extends('template.welcome')

@section('content')
    @include('partials.header')
    @include('partials.secWelcome')
    @include('partials.secSteak')
    @include('partials.secChef')
    @include('partials.secCustomers')
    @include('partials.secWrap')
@endsection