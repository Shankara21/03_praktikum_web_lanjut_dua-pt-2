@extends('layouts.main')

@section('content')

<div class="page-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>About Us</h1>
        <span>We have over 20 years of experience</span>
      </div>
    </div>
  </div>
</div>

<div class="more-info about-info">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="more-info-content">
          <div class="row">
            <div class="col-md-6 align-self-center">
              <div class="right-content">
                <span>our solid background on finance</span>
                <h2>Get to know about <em>our company</em></h2>
                <p>Fusce nec ultrices lectus. Duis nec scelerisque risus. Ut id tempor turpis, ac dignissim ipsum. Nulla
                  ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem.
                  <br><br>Pellentesque in sagittis lacus, vel auctor sem. Quisque eu quam eleifend, ullamcorper dui nec,
                  luctus quam.
                </p>
                <a href="" class="filled-button">Read More</a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="left-image">
                <img src="assets/images/about-image.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="team">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Our team <em>members</em></h2>
          <span>Suspendisse a ante in neque iaculis lacinia</span>
        </div>
      </div>
      @foreach ($about as $a)

      <div class="col-md-6">
        <div class="team-item">
          <img src="assets/images/team_01.jpg" alt="">
          <div class="down-content">
            <h4>{{ $a->nama }}</h4>
            <span>{{ $a->jabatan }}</span>
            <p>{{ $a->kampus }}</p>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</div>

<div class="fun-facts">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="left-content">
          <span>Lorem ipsum dolor sit amet</span>
          <h2>Our solutions for your <em>business growth</em></h2>
          <p>Pellentesque ultrices at turpis in vestibulum. Aenean pretium elit nec congue elementum. Nulla luctus
            laoreet porta. Maecenas at nisi tempus, porta metus vitae, faucibus augue.
            <br><br>Fusce et venenatis ex. Quisque varius, velit quis dictum sagittis, odio velit molestie nunc, ut
            posuere ante tortor ut neque.
          </p>
          <a href="" class="filled-button">Read More</a>
        </div>
      </div>
      <div class="col-md-6 align-self-center">
        <div class="row">
          <div class="col-md-6">
            <div class="count-area-content">
              <div class="count-digit">945</div>
              <div class="count-title">Work Hours</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="count-area-content">
              <div class="count-digit">1280</div>
              <div class="count-title">Great Reviews</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="count-area-content">
              <div class="count-digit">578</div>
              <div class="count-title">Projects Done</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="count-area-content">
              <div class="count-digit">26</div>
              <div class="count-title">Awards Won</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="testimonials">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>What they say <em>about us</em></h2>
          <span>testimonials from our greatest clients</span>
        </div>
      </div>
      <div class="col-md-12">
        <div class="owl-testimonials owl-carousel">

          @foreach ($about as $a)

          <div class="testimonial-item">
            <div class="inner-content">
              <h4>{{ $a->nama }}</h4>
              <span>{{ $a->jabatan }}</span>
              <p>{{ $a->kampus }}</p>
            </div>
            <img src="http://placehold.it/60x60" alt="">
          </div>
          @endforeach



        </div>
      </div>
    </div>
  </div>
</div>

@endsection
