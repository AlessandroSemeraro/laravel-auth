@extends('layouts.app')

@section('main-content')
<section class="container">
    <div class="text-white pt-3 text-center">
        
        
    </div>
    <div class="row">
        <div class="col3">
            <ul class="d-flex flex-wrap">
                @forelse ($projects as $project)
                <li class="me-3 mb-3">
                    <div class="card" style="width: 18rem;">
                        <h2 class="card-title">
                            {{$project->title}} 
                        </h2>
                        <img src="{{$project->img_url}}" class="card-img-top" alt="project image">
                        <div class="card-body">
                            <h4 class="card-title">Date: {{$project->date}} </h4>
                            <p class="card-text">Description: {{$project->description}}</p>
                        </div>
                    </div>
                </li>
                @empty
                <li>
                    projects not found
                </li>
                @endforelse
            </ul>
        </div>
    </div>
</section>

@endsection