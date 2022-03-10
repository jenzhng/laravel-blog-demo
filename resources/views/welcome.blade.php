@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
                Click the following button to see blog
                <br>
				<br>
				<button onclick="location.href='/blog'">Go to Blog</button>
               
            </adiv>
        </div>
    </div>
@endsection
