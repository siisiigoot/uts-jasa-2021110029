@extends('layouts.main')

@section('container')
  @component('components.alert')

    @slot('judul')
      ini adalah
    @endslot
    @slot('title')
      {{ $title }}
    @endslot
    @slot('class')
      danger
    @endslot
  @endcomponent

  <h1>Halaman Home</h1>
@endsection