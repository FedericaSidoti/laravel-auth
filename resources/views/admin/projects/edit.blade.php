@extends('layouts.app');

@section('content')
    <div class="container">
        <h1> Modifica il progetto: {{$project->title}}</h1>
        <form action="{{route('admin.projects.update')}}" method="POST">
            @csrf

            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Nome Progetto</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Nome..." value="{{old('title')}}">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">URL immagine</label>
                <input type="text" class="form-control" name="thumb" id="thumb" value="{{old('thumb')}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="4" placeholder="Descrizione del progetto">{{old('description')}}</textarea>
            </div>
            <div>
                <input type="submit" class="btn btn-primary" value="Modifica">
            </div>
        </form>
    </div>
@endsection