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
                    <img loading="lazy" src="{{ asset('upload/slider1.jpg') }}" alt="slide 1" class="slider__img">
                </picture>
            </li>
            <li class="slider__slide h-full flex-shrink-0 w-full relative transition-transform">
                <picture>
                    <img loading="lazy" src="{{ asset('upload/slider2.jpg') }}" alt="slide 1" class="slider__img">
                </picture>
            </li>
            <li class="slider__slide h-full flex-shrink-0 w-full relative transition-transform">
                <img loading="lazy" src="{{ asset('upload/slider3.jpg') }}" alt="slide 1" class="slider__img">
            </li>
        </ul>
        <div class="slider__paginacion text-center px-1"></div>
    </div>
@endsection

