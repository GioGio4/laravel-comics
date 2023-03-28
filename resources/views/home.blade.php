@extends('layouts.app')

@section('main_content')

<section class="container mt-4">

    <div class="row row-cols-6">

        @foreach ($comicsList as $comics)
        <div class="col">
            <img src="{{$comics['thumb']}}" alt="comics">
            <p>{{$comics['title']}}</p>
        </div>
        @endforeach
    </div>
</section>
    
@endsection