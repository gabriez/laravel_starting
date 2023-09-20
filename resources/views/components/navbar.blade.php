<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="btn float-end d-md-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" role="button">
            <i class="navbar-toggler-icon" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"></i>
        </button>


        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

		 	<ul class="nav nav-pills my-2">
				<li  class="nav-item">
					<a class="nav-link {{activateRoutes('home') ? 'active' : ''}}" href="{{route('home')}}">{{__('Home')}}</a>
				</li>
				<li  class="nav-item" >
					<a class="nav-link {{activateRoutes('projects.*') ? 'active' : ''}}" href="{{route('projects.index')}}">{{__('Portfolio')}}</a>
				</li>
				<li  class="nav-item" >
					<a class="nav-link {{activateRoutes('about') ? 'active' : ''}}" href="{{route('about')}}">{{__('About')}}</a>
				</li>
				<li  class="nav-item" >
					<a class="nav-link {{activateRoutes('contact') ? 'active' : ''}}" href="{{route('contact')}}">{{__('Contact')}}</a>
				</li>


		        <!-- Authentication Links -->
		        @guest
		            @if (Route::has('login'))
		                <li class="nav-item">
		                    <a class="nav-link {{activateRoutes('login') ? 'active' : ''}}" href="{{ route('login') }}">{{ __('Login') }}</a>
		                </li>
		            @endif


		        @else
		            <li class="nav-item dropdown">
		                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
		                    {{ Auth::user()->name }}
		                </a>

		                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
		                    <a class="dropdown-item  {{activateRoutes('logout') ? 'active' : ''}}" href="{{ route('logout') }}"
		                       onclick="event.preventDefault();
		                                     document.getElementById('logout-form').submit();">
		                        {{ __('Logout') }}
		                    </a>

		                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
		                        @csrf
		                    </form>
		                </div>
		            </li>
		        @endguest
			</ul>
        </div>
    </div>
</nav>
	<div class="offcanvas offcanvas-start w-50" tabindex="-1" id="offcanvas" data-bs-keyboard="false" data-bs-backdrop="false">
	    <div class="offcanvas-header">
	        <h6 class="offcanvas-title d-none d-sm-block" id="offcanvas">Menu</h6>
	        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	    </div>
	    <div class="offcanvas-body px-0">
	        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-start" id="menu">
	           @auth
	          		 <li class="nav-item dropdown">
		                <span class="nav-link" href="#">
		                  Bienvenido, {{ Auth::user()->name }}
		                </span>


		            </li>
	           @endauth

	            <li class="nav-item {{activateRoutes('home') ? 'ms-2' : ''}}">
	                <a class="nav-link {{activateRoutes('home') ? 'active' : ''}}" href="{{route('home')}}">{{__('Home')}}</a>
	            </li>
	            <li class="nav-item {{activateRoutes('projects.*') ? 'ms-2' : ''}}">
					<a class="nav-link {{activateRoutes('projects.*') ? 'active' : ''}}" href="{{route('projects.index')}}">{{__('Portfolio')}}</a>
	            </li>
	            <li class="nav-item {{activateRoutes('about') ? 'ms-2' : ''}}">
	                <a class="nav-link {{activateRoutes('about') ? 'active' : ''}}" href="{{route('about')}}">{{__('About')}}</a>
	            </li>
	            <li class="nav-item {{activateRoutes('contact') ? 'ms-2' : ''}}">
	                <a class="nav-link {{activateRoutes('contact') ? 'active' : ''}}" href="{{route('contact')}}">{{__('Contact')}}</a>
	            </li>

	            @guest
	            	@if (Route::has('login'))
		                <li class="nav-item {{activateRoutes('login') ? 'ms-2' : ''}}">
		                    <a class="nav-link {{activateRoutes('login') ? 'active' : ''}}" href="{{ route('login') }}">{{ __('Login') }}</a>
		                </li>
		        	@endif
		        @else
		        <li class="nav-item {{activateRoutes('logout') ? 'ms-2' : ''}}">
			        <a class="nav-link {{activateRoutes('logout') ? 'active' : ''}}" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    		{{ __('Logout') }}
			        </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
		        @endguest
	        </ul>
	    </div>
	</div>
