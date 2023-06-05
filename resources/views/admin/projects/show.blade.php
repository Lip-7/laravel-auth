@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="name my-3">
        <h4>Name: <span class="h3">{{$project->name}}</span></h4>
    </div>
    <div class="gitUrl my-3">
        <a href="{{$project->gitUrl}}"><h4>Git Url</h4></a>
    </div>
    <div class="framework my-3">
        <h4>framework: <span class="h3">{{$project->framework}}</span></h4>
    </div>
    <div class="tecnologies my-3">
        <h4>tecnologies: <span class="h3">{{$project->tecnologies}}</span></h4>
    </div>
    <div class="description align-items-center justify-content-center my-3">
        <h4>description:</h4>
        <p>{{$project->description}}</p>
    </div>
</div>
@endsection
