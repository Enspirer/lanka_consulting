@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
<section id="projects-page">
    <div class="container">
    @include('frontend.layouts.menu')

        <div class="projects-content">
            @foreach($project as $projt)
            <main class="main">
                <div class="single-item-title d-none">
                    <h2 style="font-size: 2rem;">{{$projt->project_name}}</h2>
                    <p>{{$projt->location}}</p>
                </div>



                <div class="swiper-container swiper-container3 swiper-mobile d-none">
                    <div class="top-btn" style="
                  padding: 0 0 20px 0;
                  margin: auto;
                  display: flex;
                  justify-content: center;
                ">
                        <i class="fa fa-angle-up swiper-button-prev3" aria-hidden="true" style="font-size: 40px; text-align: center"></i>
                    </div>
                    <div class="swiper-wrapper">
                        @if($projt->images == 'null')

                        @else
                            @foreach(json_decode($projt->images) as $prject_img)
                                <div class="swiper-slide">
                                    <img src="{{file_manager_get_url($prject_img)}}" alt="Image Slider" style="width: 100%;height: 250px;object-fit: cover;" />
                                </div>
                            @endforeach
                        @endif




                    </div>
                    <br>
                    <p class="slider-text">
                    {{$projt->description}}
                    </p>
                    <div class="top-btn" style="
                  padding: 20px 0 0 0;
                  margin: auto;
                  display: flex;
                  justify-content: center;
                ">
                        <i class="fa fa-angle-down swiper-button-next3" aria-hidden="true" style="font-size: 40px; text-align: center"></i>
                    </div>
                </div>
            </main>
            @endforeach
        </div>
    </div>
</section>






@endsection