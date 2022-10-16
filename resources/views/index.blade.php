@extends('layouts.main')

@section('title', 'Home')

@section('container')
  {{-- @component('components.alert')

    @slot('judul')
      ini adalah
    @endslot
    @slot('title')
      {{ $title }}
    @endslot
    @slot('class')
      danger
    @endslot
  @endcomponent --}}

  <section id="features" class="features">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>“WE ARE PASSIONATE RIDERS WITH A LIFESTYLE CENTERED AROUND MOUNTAIN BIKING & FIXING BIKES”</h2>
      </div>
    </div>
  </section><!-- End Features Section -->

@endsection