@extends ('layouts.guests')

@section('title')
    HomeGuests
@endsection

@section('content')

    <div class="container">
        <h1 class="p-5">Homepage</h1>
        <div class="row">
        @forelse ($projects as $project)
        <div class="col-4">
            <div class="card">
                <h2>{{$project->title}}</h2>
                <img src="{{$project->thumb}}">
                <p>{{$project->description}}</p>
            </div>
        </div>
        @empty
            
        @endforelse
            
            
        </div>
    
        <button class="btn btn-primary"><a href="{{route('admin.dashboard')}}">Vai alla Admin Table </a></button>
    </div>



    
    
@endsection