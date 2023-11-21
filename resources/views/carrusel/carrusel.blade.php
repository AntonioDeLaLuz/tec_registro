@extends('layout.app')
@section('title')
Tec Registro
@endsection

@section('contenido')

<section class="my-15 container mx-auto">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 50px">
        <ol class="carousel-indicators">
            @foreach($publications as $key => $publication)
            <li data-target="#myCarousel" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach($publications as $key => $publication)
            <div class="item {{ $key == 0 ? 'active' : '' }}">
                <img src="{{ asset('uploads') . '/' . $publication->urlimg }}" alt="{{ $publication->name }}"
                     style="width: 100%; cursor: pointer;"
                     onclick="window.location='/publications/show/{{ $publication->name }}'">
            </div>
            @endforeach
        </div>
        <a class="left carousel-control" data-target="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" data-target="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

@endsection
