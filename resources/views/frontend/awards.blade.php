@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
<section id="awards-section">
  <div class="container">
    @include('frontend.layouts.menu')

    <div class="awards-section">
      <h1 style="margin-top: 20px;margin-bottom: 40px;">awards</h1>

      <p>
      <ul>
        @foreach($awardsDetails as $awards)
        <li>
          {{$awards->description}}
        </li>
        @endforeach
        <li>
                SLIA Design Award 1999 Personalized Housing 	- House for Dr.Gamini Wijesinghe at Siebel Avenue, Colombo 06.
              </li>
              <li>
                SLIA Design Award 2003 Personalized Housing 	- Ranjitha & Pradeepa Jayasekara at Polhengoda, Colombo 05.
              </li>
              <li>
                SLIA Design Award 2005 Personalized Housing 	- Twin House at Alwis Place, Colombo 03.
              </li>
              <li>
                SLIA Colour Award 2005 Creative Use of Colour - Twin House at Alwis Place, Colombo 03.
              </li>
              <li>
                Joint Winner SLIA Houses of the year Award 2008 - Excellence Award - Twin House at Alwis Place, Colombo 03.
              </li>
              <li>
                SLIA Design Award 2009 Building, Education & Research - Resource Centre Diocese of Colombo, Cathedral Complex, Colombo 07.
              </li>
              <li>
                SLIA Colour Award 2009 Creative Use of Colour - Al Jalal Vidyalayam Sainthamaruthu (Tsunami Project)
              </li>
              <li>
                SLIA Design Award 2011 Personalized Housing 	- ‘The Envelope’ for Mr. Ishan De Silva at Pannipitiya
              </li>
              <li>
                SLIA Design Award 2013 Personalized Housing 	- House for Mr. Sri Sanjiev at Greenlands Avenue, Colombo 05.
              </li>
              <li>
                SLIA Design Award 2014 Personalized Housing 	- ‘Urban Envelope’ for Godridge & Beulah Samuel at Alwis Place, Colombo 03.
              </li>
              <li>
                Short Listed Candidate for the Inaugural Geoffrey Bawa Design Award 2008 - ‘The Thicket’, Mandawala, Gampaha.
              </li>
              <li>
                SLIA Design Award 2016 Commercial Building - ‘Beverly Street’ shopping complex, Rajagiriya.
              </li>
              <li>
                Short Listed Candidate for the 4th Cycle Geoffrey Bawa Design Award 2016 - "Beverly Street" shopping complex, Rajagiriya.
              </li>
              <li>
                SLIA Design Award 2018 Renovations - "Lavan’s Studio" Apartment , Colombo 03.
              </li>
              <li>
                Short Listed Candidate for the 5th Cycle Geoffrey Bawa Design Award 2020 - "Lavan’s Studio" Apartment , Colombo 03.
              </li>
              <li>
                Winner of Overhead Pedestrian Bridge Kollupitiya - Design Competition conducted by the SLIA in association with Ministry of Defence & Urban Development and Colombo Municipal Council – 2013. 
              </li>
              <li>
                Winner of Overhead Pedestrian Bridge Bambalapitiya - Design Competition conducted by the SLIA in association with Ministry of Defence & Urban Development and Colombo Municipal Council – 2013.
              </li>
              <li>
                3rd Place for Proposed Building for City School of Architecture - Design Competition conducted by the SLIA on behalf of the City School of Architecture - 2019.
              </li>
      </ul>



      </p>
    </div>
  </div>
</section>
@endsection