@extends('layouts.app')

@section('main_content')

<section class="container mt-4">

    @foreach ($comicsList as $comics)
    <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{$comics['thumb']}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{$comics['title']}}</h5>
              <p class="card-text">{{$comics['description']}}</p>
              <p class="card-text"><small class="text-muted">{{$comics['series']}}</small></p>
            </div>
          </div>
        </div>
      </div>
    @endforeach
</section>
    
@endsection