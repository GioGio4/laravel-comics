@extends('layouts.app')

@section('main_content')

<section class="py-5 comics-container">
    <div class="container">
        <div class="row row-cols-6">
    
            @foreach ($comicsList as $comics)
            <div class="col">
                <img src="{{$comics['thumb']}}" alt="comics">
                <p class="text-light">{{$comics['title']}}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>
    
@endsection