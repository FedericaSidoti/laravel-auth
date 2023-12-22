@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    <div class="row p-5">
                        <div class="col-3 d-flex p-1">
                            <div class=" border border-warning p-2">
                                <h2>  <a href={{route('admin.projects.index')}}>vai alla Lista</a></h2>
                            </div>
                        </div>
                        <div class="col-3 d-flex p-1">
                            <div class="border border-warning p-2">
                                <h2> <a href="{{route('admin.projects.create')}}">Crea Nuovo</a></h2>
                            </div>
                        </div>
                    </div>
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

    

    
</div>
@endsection
