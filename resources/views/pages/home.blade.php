@extends('layouts.app')

@section('title')
    pandaTravel
@endsection

@section('content')
        <!--Header-->
        <header class="text-center">
            <h1>
              Explore The Beautiful of Indonesia
              <br />
              As Easy One Click
            </h1>
            <p class="mt-3">
              You will see beautiful
              <br />
              moment you never see before
            </p>
            <a href="#popular" class="btn btn-get-started px-4 mt-4">
              Get Started
            </a>
          </header>

          <!--Main-->
          <main>
            <div class="container">
              <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                  <h2>20K</h2>
                  <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                  <h2>12</h2>
                  <p>Cities</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                  <h2>3K</h2>
                  <p>Hotels</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                  <h2>72</h2>
                  <p>Partners</p>
                </div>
              </section>
            </div>
            <section class="section-popular" id="popular">
              <div class="container">
                <div class="row">
                  <div class="col text-center section-popular-heading">
                    <h2>Wisata Popular</h2>
                    <p>
                      Something that you never try
                      <br />
                      before in this world
                    </p>
                  </div>
                </div>
              </div>
            </section>
            <section class="section-popular-content" id="popularContent">
              <div class="container">
                <div class="section-popular-travel row justify-content-center">
                  @foreach ($items as $item)
                  <div class="col-sm-6 col-md-4 col-lg-3">
                    <div
                      class="card-travel text-left d-flex flex-column"
                      style="background-image: url('{{$item->galleries->count()?Storage::url($item->galleries->first()->image) : ''}}');"
                    >
                      <div class="travel-country" style="color: #202c2d;
text-shadow: 0 1px #808d93, -1px 0 #cdd2d5, -1px 2px #808d93, -2px 1px #cdd2d5, -2px 3px #808d93, -3px 2px #cdd2d5, -3px 4px #808d93, -4px 3px #cdd2d5, -4px 5px #808d93, -5px 4px #cdd2d5, -5px 6px #808d93, -6px 5px #cdd2d5, -6px 7px #808d93, -7px 6px #cdd2d5, -7px 8px #808d93, -8px 7px #cdd2d5;">{{$item->location}}</div>
                      <div class="travel-location" style="color: #444444;
text-shadow: 1px 0px 1px #CCCCCC, 0px 1px 1px #EEEEEE, 2px 1px 1px #CCCCCC, 1px 2px 1px #EEEEEE, 3px 2px 1px #CCCCCC, 2px 3px 1px #EEEEEE, 4px 3px 1px #CCCCCC, 3px 4px 1px #EEEEEE, 5px 4px 1px #CCCCCC, 4px 5px 1px #EEEEEE, 6px 5px 1px #CCCCCC, 5px 6px 1px #EEEEEE, 7px 6px 1px #CCCCCC;">{{$item->title}}</div>
                      <div class="travel-button mt-auto">
                        <a href="{{route('detail',$item->slug)}}" class="btn btn-travel-details px-4">
                          View Details
                        </a>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </section>
            <section class="section-networks" id="networks">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <h2>Our Networks</h2>
                    <p>
                      Companies are trusted us
                      <br />
                      more than just a trip
                    </p>
                  </div>
                  <div class="col-md-8 text-center">
                    <img src="frontend/images/partner.png" class="img-patner" />
                  </div>
                </div>
              </div>
            </section>
            <section class="section-testimonials-heading" id="testimonialsHeading">
              <div class="container">
                <div class="row">
                  <div class="col text-center">
                    <h2>They Are Loving Us</h2>
                    <p>
                      Moments were giving them
                      <br />
                      the best experience
                    </p>
                  </div>
                </div>
              </div>
            </section>
            <section class="section-testimonials-content" id="testimonialsContent">
              <div class="container">
                <div
                  class="section-popular-travel row justify-content-center match-height"
                >
                  <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                      <div class="testimonial-content">
                        <img
                          src="frontend/images/avatar-1.png"
                          alt=""
                          class="mb-4 rounded-circle"
                        />
                        <h3 class="mb-4">Angga Risky</h3>
                        <p class="testimonials">
                          “ It was glorious and I could not stop to say wohooo for
                          every single moment Dankeeeeee “
                        </p>
                      </div>
                      <hr />
                      <p class="trip-to mt-2">Trip to Ubud</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                      <div class="testimonial-content">
                        <img
                          src="frontend/images/avatar-2.png"
                          alt=""
                          class="mb-4 rounded-circle"
                        />
                        <h3 class="mb-4">Shayna</h3>
                        <p class="testimonials">
                          “ The trip was amazing and I saw something beautiful in that
                          Island that makes me want to learn more “
                        </p>
                      </div>
                      <hr />
                      <p class="trip-to mt-2">Trip to Nusa Penida</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                      <div class="testimonial-content mb-auto">
                        <img
                          src="frontend/images/avatar-3.png"
                          alt=""
                          class="mb-4 rounded-circle"
                        />
                        <h3 class="mb-4">Shabrina</h3>
                        <p class="testimonials">
                          “ I loved it when the waves was shaking harder — I was
                          scared too “
                        </p>
                      </div>
                      <hr />
                      <p class="trip-to mt-2">Trip to Karimun Jawa</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 text-center">
                    <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                      I Need Help
                    </a>
                    <a href="{{route('register')}}" class="btn btn-get-started px-4 mt-4 mx-1">
                      Get Started
                    </a>
                  </div>
                </div>
              </div>
            </section>
          </main>
@endsection
