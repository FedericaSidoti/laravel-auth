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
        <div class="modal fade" id="modal-{{$project->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Attenzione</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h3>Vuoi davvero eliminare {{$project->title}}?</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Annulla</button>
                        <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card border-primary">
                <img src="{{$project->thumb}}">
                <h2>{{$project->title}}</h2>
                <p>{{$project->description}}</p>
                <div class="d-flex justify-content-around">
                    <button class="btn btn-primary"><a href="{{route('admin.projects.show', $project->id)}}">Dettagli</a></button>
                    <button class="btn btn-primary"><a href="{{route('admin.projects.edit', $project->id)}}">Modifica</a></button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{$project->id}}">Elimina</button>
                </div>
                
            </div>
        </div>
        @empty
            <h2>Non ci sono progetti da mostrare!</h2>
        @endforelse
    </div>

    
</div>
@endsection