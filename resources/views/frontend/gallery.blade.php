@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
<section id="gallery-page">
  <div class="container">
    @include('frontend.layouts.menu')

    <div class="gallery-content">
      <div class="container">

        <div class="row gallery-web">
          <div class="col-md-3"></div>
          <div class="col-md-9">
            <div class="swiper-container swiper-container4" style="width: 100%;height: 500px;">
              <div class="swiper-wrapper" style="width: 100%;height: 500px;">
                @foreach($galleryItems as $items)
                <div class="swiper-slide" style="width: 100%;height: 500px;">
                  <div class="row">
                    @foreach($items as $itemS)


                    <div class="col-md-4" style="height: 150px;overflow: hidden;padding: 8px 5px;" data-toggle="modal" data-target="#exampleModal{{$itemS['image_id']}}">
                      @if($itemS['effect'] == 'black_and_white')
                      <img src="{{url('files/'.$itemS['image_name'])}}" class="gray" style="object-fit: cover;" alt="">
                      <!-- <div class="" style="background-image: url('{{url('files/'.$itemS['image_name'])}}');height: 150px;background-position: center;background-size: contain;filter: grayscale(1)"></div> -->
                      @else
                      <img src="{{url('files/'.$itemS['image_name'])}}" style="height: 150px; object-fit: cover;" alt="">
                      <!-- <div class="" style="background-image: url('{{url('files/'.$itemS['image_name'])}}');height: 150px;background-position: center;background-size: contain"></div> -->
                      @endif
                    </div>




                    @endforeach
                  </div>
                </div>
                @endforeach
              </div>

              <!-- Add Pagination -->
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>


        @foreach($galleryItems as $items)
        @foreach($items as $itemS)
        <!-- Modal -->
        <div class="modal fade" id="exampleModal{{$itemS['image_id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document" style="width: 950px;max-width: none;">
            <div class="modal-content">
              <img src="{{url('files/'.$itemS['image_name'])}}" alt="" style="height: 600px;object-fit: cover;">
              <!-- <div class="" style="background-image: url('{{url('files/'.$itemS['image_name'])}}');height: 600px;background-size: contain;background-position: center;"> -->
            </div>

          </div>
        </div>
      </div>
      @endforeach
      @endforeach




      <div class="row gallery-mobile d-none">

        <div class="swiper-container swiper-container5">
          <div class="top-btn" style="
                  padding: 0 0 20px 0;
                  margin: auto;
                  display: flex;
                  justify-content: center;
                ">
            <i class="fa fa-angle-up swiper-button-prev3" aria-hidden="true" style="font-size: 40px; text-align: center"></i>
          </div>
          <div class="swiper-wrapper">
            @foreach($galleryItems as $items)
            <div class="swiper-slide">
              <div class="row" style="padding: 0 40px;">
                @foreach($items as $itemS)
                @if($itemS['effect'] == 'black_and_white')
                <img src="{{url('files/'.$itemS['image_name'])}}" class="gray" style="width: 50%;padding: 5px;" alt="">
                <!-- <div class="" style="background-image: url('{{url('files/'.$itemS['image_name'])}}');height: 150px;background-position: center;background-size: contain;filter: grayscale(1)"></div> -->
                @else
                <img src="{{url('files/'.$itemS['image_name'])}}" style="width: 50%;padding: 5px;" alt="">
                <!-- <div class="" style="background-image: url('{{url('files/'.$itemS['image_name'])}}');height: 150px;background-position: center;background-size: contain"></div> -->
                @endif
                @endforeach
                <!-- @foreach($items as $itemS)
                                  <img src="{{url('files/'.$itemS['image_name'])}}" style="width: 50%;padding: 5px;" alt="">
                              @endforeach -->
              </div>
            </div>
            @endforeach
          </div>

          <div class="top-btn" style="
                  padding: 20px 0 0 0;
                  margin: auto;
                  display: flex;
                  justify-content: center;
                ">
            <i class="fa fa-angle-down swiper-button-next3" aria-hidden="true" style="font-size: 40px; text-align: center"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
@endsection