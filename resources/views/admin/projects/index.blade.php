@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>

    <div class="row p-5">
        @forelse ($projects as $project)
        <div class="col-3">
            <div class="card border-primary">
                <img src="{{$project->thumb}}">
                <h2>{{$project->title}}</h2>
                <p>{{$project->description}}</p>
                <div class="d-flex justify-content-around">
                    <button class="btn btn-primary"><a href="{{route('admin.projects.show', $project->id)}}">Dettagli</a></button>
                    <button class="btn btn-primary"><a href="{{route('admin.projects.edit', $project->id)}}">Modifica</a></button>
                </div>
                
            </div>
        </div>
        @empty
            <h2>Non ci sono progetti da mostrare!</h2>
        @endforelse
    </div>

    
</div>
@endsection