<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto">
            <a href="{{ route('home') }}">
                <span>Bike</span>Sekali</a>
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        {{-- <a href="index.html" class="logo me-auto me-lg-0"><img
        src="assets/img/logo.png" alt="" class="img-fluid"></a> --}}

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li>
                    <a href="{{ route('home') }}" class="{{ ($active === "home") ? 'active' : '' }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('services') }}" class="{{ ($active === "service") ? 'active' : '' }}">Services</a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="{{ ($active === "about") ? 'active' : '' }}">About</a>
                </li>

                <li>
                    <a href="{{ route('testimonials') }}" class="{{ ($active === "testimonial") ? 'active' : '' }}">Testimonials</a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

        <div class="header-social-links d-flex">
            <a href="https://twitter.com/si6ot" target="_blank" class="twitter">
                <i class="bu bi-twitter"></i>
            </a>
            <a href="#" class="facebook">
                <i class="bu bi-facebook"></i>
            </a>
            <a href="https://www.instagram.com/sigitp1892/" target="_blank" class="instagram">
                <i class="bu bi-instagram"></i>
            </a>
    </div>

</div>
</header>
<!-- End Header -->