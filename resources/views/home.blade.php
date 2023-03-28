@extends('layouts.app')

@section('main_content')

<section class="py-5 comics-container">

    <span class="badge-comics-new bg-primary text-light px-4 py-2">
        Ultime Uscite
    </span>

    <div class="container">

        <div class="row row-cols-6 mt-5">
            @foreach ($comicsList as $comics)
            <div class="col">
                <img src="{{$comics['thumb']}}" alt="comics">
                <p class="text-light">{{$comics['title']}}</p>
            </div>
            @endforeach
        </div>

        <div class="text-center my-3">
            <a class="btn btn-primary px-4 py-2" href="{{route('comics')}}" role="button">Scopri tutti i fumetti</a>
        </div>

    </div>
</section>
    
@endsection