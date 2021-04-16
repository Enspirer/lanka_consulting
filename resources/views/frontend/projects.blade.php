@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')


<section id="projects-page">
  <div class="container">
    @include('frontend.layouts.menu')

    <div class="projects-content">
      <h1 style="margin-top: 20px;margin-bottom: 40px;">projects</h1>

      <main class="main">
        <div class="swiper-container swiper-container1 swiper-web">
          <div class="swiper-wrapper">
            @foreach($projects as $proj)
            <div class="swiper-slide">
              <div class="card-image">
                <img src="{{url('files/'.$proj->feature_images)}}" data-toggle="modal" data-target="#exampleModalCenter{{$proj->id}}" alt="">
                <!-- <div class="" style="background-image: url('{{url('files/'.$proj->feature_images)}}');height: 500px;background-position:center;background-size: cover;" data-toggle="modal" data-target="#exampleModalCenter{{$proj->id}}"></div> -->
              </div>
            </div>
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>

        <div class="swiper-container swiper-container3 swiper-mobile d-none">
          <div class="top-btn" style="padding: 0 0 20px 0;margin: auto;display: flex;justify-content: center;">
            <i class="fa fa-angle-up swiper-button-prev3" aria-hidden="true" style="font-size: 40px; text-align: center"></i>
          </div>
          <div class="swiper-wrapper">
            @foreach($projects as $proj)
              <div class="swiper-slide">
              <a href="project_item/{{$proj->id}}"><img src="{{url('files/'.$proj->feature_images)}}" alt="Image Slider" style="width: 100%"></a>  
              </div>
            @endforeach

          </div>
          <div class="top-btn" style="padding: 20px 0 0 0;margin: auto; display: flex; justify-content: center;">
            <i class="fa fa-angle-down swiper-button-next3" aria-hidden="true" style="font-size: 40px; text-align: center"></i>
          </div>
        </div>
      </main>

      <div class="project-bottum-text">
        <h6>“simplicity is the ultimate sophistication”</h6>
        <p>LEONARDO DA VINCI</p>
      </div>
      <br><br><br><br>
    </div>
  </div>



  @foreach($projects as $projt)

  <div class="modal-project-center modal fade bd-example-modal-lg" id="exampleModalCenter{{$projt->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="wrap-modal-slider">
          <div class="your-class">
            @if($projt->images == 'null')

            @else
              @foreach(json_decode($projt->images) as $prject_img)
                <div>
                  <img src="{{file_manager_get_url($prject_img)}}" class="modal-image-project"  alt="">
                </div>
              @endforeach
            @endif

          </div>
          <div class="dark-layer" >
            <div class="b-text">
              <div class="row b-text-row">
                <div class="col-md-11">
                  <p>
                    <span class="title-project">{{$projt->project_name}}</span><br />
                    <br>
                    <!-- {{$projt->description}} -->
                    @if(strlen($projt->description) > 200)
                    <span id="short-text"> {{ substr($projt->description, 0, 200)}}</span>
                    <span id="dots">... </span><span onclick="myFunction()" id="myBtn" class="btn-read-more"> &nbsp; Read More</span>
                    <span id="long-text" class="d-none"> {{$projt->description}}</span>
                    <span onclick="myFunction()" id="myBtnLess" class="btn-read-more d-none"> &nbsp; Read Less</span>


                    <!-- <span onclick="myFunction()" id="myBtn" class="btn-read-more"> &nbsp; Read Less</span></span> -->
                    @else

                    @endif

                  </p>
                </div>
                <div class="col-md-1">
                  <i class="fa fa-times" aria-hidden="true" data-dismiss="modal"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach


</section>





@endsection