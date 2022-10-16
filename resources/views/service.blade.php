@extends('layouts.main')

@section('title','Services')

@section('container')
<main id="main">
  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            @foreach ($dataFilters as $key => $filter)
            <li data-filter="{{ $filter['filter'] }}" class="filter-{{ $key==0? 'active':'' }}">{{ $filter['caption'] }}</li>
            @endforeach
          </ul>
        </div>
      </div>
      <div class="row portfolio-container" data-aos="fade-up">
        @foreach ($items as $item)
        <div class="col-lg-4 col-md-6 portfolio-item {{ $item['class'] }}">
          <img src="{{ $item['img'] }}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>{{ $item['title'] }}</h4>
            <p>{{ $item['group'] }}</p>
            <a href="{{ $item['img'] }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{ $item['title'] }}"><i class="bx bx-zoom-in"></i></a>
            <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </section><!-- End Portfolio Section -->

</main><!-- End #main -->


@endsection