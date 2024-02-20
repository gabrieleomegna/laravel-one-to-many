@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{$project->proj_image}}" alt="{{$project->title}} image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$project->title}}</h5>
                  <p class="card-text">{{$project->description}}</p>
                  <p class="card-text">This project was made in: {{$project->no_days_taken}} days</p>
                  <p class="card-text">Start date: {{$project->start_date}}</p>
                  <p class="card-text">Completion date: {{$project->completion_date}}</p>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection