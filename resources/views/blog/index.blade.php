@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                 <div class="row" >
                    <div class="column" >
                        <h1 class="display-one">List of Recipes</h1>
                        List of recipes. Click on a recipe.
						
                    </div>
                    <div class="column" >
						<br>
                        Create new Post
						<br>
						<br>
						
                        <a href="/blog/create/post" class="btn btn-primary btn-sm">Add Post</a>
                    </div>
            </div>
                </div>     
					<br>				
                @forelse($posts as $post)
                    <ul>
                        <li><a href="./blog/{{ $post->id }}">{{ ucfirst($post->title) }}</></li>
                    </ul>
                @empty
                    < paclass="text-warning">No blog Posts available</>
                @endforelse
					
        </div>
    </div>
@endsection