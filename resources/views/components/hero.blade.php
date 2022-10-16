  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide -->
        @forelse($carousels as $key => $carousel)
        <div class="carousel-item {{ $key==0? 'active':'' }}" style="background-image: url('{{ $carousel['url'] }}');">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>BIKE<span>SEKALI</span></h2>
              <p>{{ $carousel['caption'] }}</p>
              {{-- <div class="text-center"><a href="" class="btn-get-started">Read More</a></div> --}}
            </div>
          </div>
        </div>
        @empty
        <div class="carousel-item" style="background-image: url('https://keyassets.timeincuk.net/inspirewp/live/wp-content/uploads/sites/11/2016/07/Bruni-custom-bike.png');">
          {{-- <div class="carousel-item" style="background-image: url({{ asset('img/slide/slide-2.jpg') }});"> --}}
            <div class="carousel-container">
              <div class="carousel-content animate__animated animate__fadeInUp">
                <h2>BIKE<span>SEKALI</span></h2>
                <p>THE PRICE IS CHEAPER THAN OTHER WORKSHOPS AND CAN BE PAYLATER</p>
                <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
              </div>
            </div>
          </div>
        @endforelse
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section>
  <!-- End Hero -->
