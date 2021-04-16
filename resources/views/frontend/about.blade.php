@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
<section id="about-us-page">
      <div class="container">

      @include('frontend.layouts.menu')

        <div class="about-us-content about-web">
          <h1>about</h1>
          <div class="main-row row">
            <div class="main-left-about col-md-5 col-sm-12">
              <!-- <div class="second-row row">
                <div class="single-image col-md-3">
                  <img class="gray-image-full-width" src="{{asset('img/assets/team/1.jpg')}}" />
                </div>
                <div class="single-image col-md-3">
                  <img class="gray-image-full-width" src="{{asset('img/assets/team/2.jpg')}}" />
                </div>
                <div class="single-image col-md-3">
                  <img class="gray-image-full-width" src="{{asset('img/assets/team/3.jpg')}}" />
                </div>
                <div class="single-image col-md-3">
                  <img class="gray-image-full-width" src="{{asset('img/assets/team/4.jpg')}}" />
                </div>
              </div>
              <div class="second-row row">
                <div class="single-image col-md-3">
                  <img class="gray-image-full-width" src="{{asset('img/assets/team/5.jpg')}}" />
                </div>
                <div class="single-image col-md-3">
                  <img class="gray-image-full-width" src="{{asset('img/assets/team/6.jpg')}}" />
                </div>
                <div class="single-image col-md-3">
                  <img class="gray-image-full-width" src="{{asset('img/assets/team/7.jpg')}}" />
                </div>
                <div class="single-image col-md-3">
                  <img class="gray-image-full-width" src="{{asset('img/assets/team/8.jpg')}}" />
                </div>
              </div> -->
            </div>
            <div class="main-right-about col-md-7">
              <div class="row">
                <!-- <div class="text-col col-md-9"> -->
                  <p>
                    Mathew Mangaladaz Godridge Samuel (MMGS), born in Colombo in
                    1962, graduated from the University of Moratuwa Sri Lanka.
                    Became corporate member of the Sri Lanka Institute of
                    Architects (SLIA) in 1992. Elected a fellow member of SLIA
                    in 2003.
                  </p>
                  <p>
                    Started his practice in the living room with a single
                    draughtsman in 1992, today the practice is known as MMGS
                    ARCHITECTS having its own design studio in central Colombo.
                  </p>
                  <p>
                    MMGS ARCHITECTS, an award winning architectural practice in
                    Sri Lanka, comprising young and energetic architects,
                    experimenting with creative solutions for their clients.
                    Each project is a celebration of innovation, work of joy,
                    worthy addition to the contemporary Sri Lankan architecture.
                  </p>
                  <p>
                    Winning number of design and color awards and a few design
                    competitions makes Godridge Samuel, a leading, award winning
                    architect in Sri Lanka.
                  </p>
                  <p>
                    Today, Godridge Samuel has evolved a distinctive style of
                    his own ‘MODERN, MINIMALISTIC, TROPICAL, SUSTAINABLE
                    ARCHITECTURE’.
                  </p>
                <!-- </div> -->
                <!-- <div class="right-image col-md-3" style="padding: 0">
                  <img class="gray-image-full-width" src="{{asset('img/assets/team/9.jpg')}}" />
                  <img class="gray-image-full-width" src="{{asset('img/assets/team/10.jpg')}}" />
                </div> -->
              </div>
            </div>
          </div>
        </div>

        <div class="about-us-content about-mobile d-none">
          <br>
          <h1>about</h1>
          <br>
          <!-- <div class="main-row row"> -->

          <div class="main-right-about col-md-12">
              <div class="row">
                <div class="text-col">
                  <br />
                  <p class="about-paragraph" style="text-align: justify;font-weight: 300;">
                    Mathew Mangaladaz Godridge Samuel (MMGS), born in Colombo in
                    1962, graduated from the University of Moratuwa Sri Lanka.
                    Became corporate member of the Sri Lanka Institute of
                    Architects (SLIA) in 1992. Elected a fellow member of SLIA
                    in 2003.
                  </p>
                  <br>
                  <p class="about-paragraph" style="text-align: justify;font-weight: 300;">
                    Started his practice in the living room with a single
                    draughtsman in 1992, today the practice is known as MMGS
                    ARCHITECTS having its own design studio in central Colombo.
                  </p>
                  <br>
                  <p class="about-paragraph" style="text-align: justify;font-weight: 300;">
                    MMGS ARCHITECTS, an award winning architectural practice in
                    Sri Lanka, comprising young and energetic architects,
                    experimenting with creative solutions for their clients.
                    Each project is a celebration of innovation, work of joy,
                    worthy addition to the contemporary Sri Lankan architecture.
                  </p>
                  <br>
                  <p class="about-paragraph" style="text-align: justify;font-weight: 300;">
                    Winning number of design and color awards and a few design
                    competitions makes Godridge Samuel, a leading, award winning
                    architect in Sri Lanka.
                  </p>
                  <br>
                  <p class="about-paragraph" style="text-align: justify;font-weight: 300;">
                    Today, Godridge Samuel has evolved a distinctive style of
                    his own ‘MODERN, MINIMALISTIC, TROPICAL, SUSTAINABLE
                    ARCHITECTURE’.
                  </p>
                </div>
              </div>
            </div>


          <!-- </div> -->
        </div>
    </section>
@endsection