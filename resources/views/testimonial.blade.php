@extends('layouts.main')

@section('title','Testimonials')

@section('container')
  <main id="main">
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">
        <div class="row">
          @forelse($testimonials as $testimonial)
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="{{ $testimonial['delay'] }}">
            <div class="testimonial-item mt-4">
              <img src="{{ $testimonial['url'] }}" class="testimonial-img" alt="">
              <h3>{{ $testimonial['name'] }}</h3>
              <h4>{{ $testimonial['work'] }}</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                {{ $testimonial['caption'] }}
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
          @empty
          @endforelse
        </div>
      </div>
    </section>
    <!-- End Testimonials Section -->
  </main>
  <!-- End #main -->
@endsection