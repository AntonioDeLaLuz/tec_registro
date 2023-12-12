@extends('layout.app')

@push('styles')
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<style>
    .contenido_swiper {
      position: relative;
      height: 100%;
    }
     swiper-container {
      width: 100%;
      height: 50vh;
    }

    swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    swiper-container {
      margin-left: auto;
      margin-right: auto;
    }
</style>
@endpush
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

@endpush

@section('contenido')
<div class="contenido_swiper">
    <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" navigation="true" space-between="30"
    loop="true">
    <swiper-slide><img src="{{ asset('uploads/0815afc6-6a4b-4f56-b0d9-ce6569127a74.jpg') }}" alt=""></swiper-slide>
    <swiper-slide>Slide 2</swiper-slide>
    <swiper-slide>Slide 3</swiper-slide>
    <swiper-slide>Slide 4</swiper-slide>
    <swiper-slide>Slide 5</swiper-slide>
    <swiper-slide>Slide 6</swiper-slide>
    <swiper-slide>Slide 7</swiper-slide>
    <swiper-slide>Slide 8</swiper-slide>
    <swiper-slide>Slide 9</swiper-slide>
</div>
</swiper-container>
@endsection

