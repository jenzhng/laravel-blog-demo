@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
		
            <div class="col-md-12">
				<br>
                <a href="/blog" class="btn btn-outline-primary">Go back</a>
                <h1 aclass="display-one">{{ ucfirst($post->title) }}</h1>
                <span>{!! $post->body !!}</span>
				<br>
				
                <hr>
				
                <a href="/blog/{{ $post->id }}/edit" class="btn btn-outline-primary">Edit Post</a>
			
                <br><br>
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection