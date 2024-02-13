@extends('layouts.app')

@section('main-content')
<section class="container ">
    <div class="card" style="width: 18rem;">
        <h2 class="card-title">
            {{ $project->title }}
        </h2>
        <img class="card-img-top" src="{{ $project->img_url }}" alt="{{ $project->name }}">
        <div class="card-body">
            <h4 class="card-title">
             Date: {{ $project->date }}
            </h4>
            <p class="card-text">
              <strong>  Description: </strong> {{ $project->description }}
            </p>
        </div>
    </div>
</section>

@endsection