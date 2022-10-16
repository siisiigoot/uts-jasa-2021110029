    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Our Clients</h2>
          </div>
  
          <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">
            @forelse($clients as $client)
            <div class="col-lg-3 col-md-4 col-6">
              <div class="client-logo">
                <img src="{{ $client['url'] }}" class="img-fluid" alt="">
              </div>
            </div>
            @empty

            @endforelse
          </div>
  
        </div>
      </section><!-- End Our Clients Section -->
  