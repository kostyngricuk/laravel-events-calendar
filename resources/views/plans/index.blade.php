@extends('layout')

@section('content')
    <section class="hero">
        <div class="container">
            <h1>{{ $pageProperty['pageTitle'] }}</h1>
        </div>
    </section>
    <section>
        <div class="container">
            <h2>Section</h2>
            @foreach ($plans as $plan)
                <div class="plan">{{ $plan->title }}</div>
            @endforeach
        </div>
    </section>        
@endsection