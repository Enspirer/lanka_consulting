<nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('img/assets/mmgs sm.png')}}" alt="" /></a>
            <div class="navbar-toggler" type="button">
            <input type="checkbox" id="overlay-input" />
            <label for="overlay-input" id="overlay-button"><span></span></label>
            <!-- <span class="navbar-toggler-icon"></span> -->
            <div id="overlay">
              <ul>
                <li><a href="{{url('/')}}" class="{{ Request::segment(1) === null ? 'activetab' : null }}">HOME</a></li>
                <li><a href="{{route('frontend.about')}}" class="{{ Request::segment(1) === 'about' ? 'activetab' : null }}">ABOUT</a></li>
                <li><a href="{{route('frontend.projects')}}" class="{{ Request::segment(1) === 'projects' ? 'activetab' : null }}">PROJECTS</a></li>
                <li><a href="{{route('frontend.gallery')}}" class="{{ Request::segment(1) === 'gallery' ? 'activetab' : null }}">GALLERY</a></li>
                <li><a href="{{route('frontend.awards')}}" class="{{ Request::segment(1) === 'awards' ? 'activetab' : null }}">AWARDS</a></li>
                <li><a href="{{route('frontend.contact')}}" class="{{ Request::segment(1) === 'contact' ? 'activetab' : null }}">CONTACT</a></li>
              </ul>
            </div>
          </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item {{ Request::segment(1) === null ? 'active' : null }}">
                        <a class="nav-link " href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item {{ Request::segment(1) === 'about' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('frontend.about')}}">About</a>
                    </li>
                    <li class="nav-item {{ Request::segment(1) === 'projects' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('frontend.projects')}}">Projects</a>
                    </li>
                    <li class="nav-item {{ Request::segment(1) === 'gallery' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('frontend.gallery')}}">Gallery</a>
                    </li>
                    <li class="nav-item {{ Request::segment(1) === 'awards' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('frontend.awards')}}">Awards</a>
                    </li>
                    <li class="nav-item {{ Request::segment(1) === 'contact' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('frontend.contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div
          class="hrline"
          style="position: relative; margin: -15px -15px 0 -15px"
        >
          <hr style="    border-top: 2px solid rgba(0,0,0,.1);" >
        </div>