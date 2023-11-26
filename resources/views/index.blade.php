@extends('layout.app')

@push('styles')
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
@endpush

@push('scripts')
{{-- <script src="{{ asset('../resources/js/swiper.js') }}"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
@endpush

@section('contenido')
    <div class="container mx-auto overflow-hidden relative mt-4 w-16">
        <ul class="slider__contenedor">
            <li class="slider__slide  h-full flex-shrink-0 w-full relative transition-transform">
                <picture>
                    {{-- <img loading="lazy" src="{{ asset('uploads/0815afc6-6a4b-4f56-b0d9-ce6569127a74.jpg') }}" alt="slide 1" class="slider__img"> --}}
                    <img loading="lazy" src="{{ asset('upload/slider1.jpg') }}" alt="slide 1" class="slider__img">
                </picture>
            </li>
            <li class="slider__slide h-full flex-shrink-0 w-full relative transition-transform">
                <picture>
                    {{-- <img loading="lazy" src="{{ asset('uploads/4e8c311c-d6bb-46ed-85c5-4f1eb9268e2a.jpg') }}" alt="slide 1" class="slider__img"> --}}
                    <img loading="lazy" src="{{ asset('upload/slider2.jpg') }}" alt="slide 1" class="slider__img">
                </picture>
            </li>
            <li class="slider__slide h-full flex-shrink-0 w-full relative transition-transform">
                {{-- <img loading="lazy" src="{{ asset('uploads/4e0bdcd6-f94c-4164-9475-d1b3b9109d3b.jpg') }}" alt="slide 1" class="slider__img"> --}}
                <img loading="lazy" src="{{ asset('upload/slider3.jpg') }}" alt="slide 1" class="slider__img">
            </li>
        </ul>
        <div class="slider__paginacion text-center px-1"></div>
    </div>
@endsection

