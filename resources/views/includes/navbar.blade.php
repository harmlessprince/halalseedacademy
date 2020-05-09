<nav id="nav-menu-container">
    <ul class="nav-menu">
        <li><a href="{{route('index')}}">Home</a></li>
        <li><a href="{{route('about')}}">About</a>

        </li>
        <li class="menu-has-children"><a href="#">Admissions</a>
            <ul>
                <li><a href="{{route('choose')}}">Why choose Halal?</a></li>
                <li><a href="{{route('admission')}}">Admission procedure</a></li>
                <li><a href="{{route('tuition')}}">Tuition & payment</a></li>

                <li><a href="{{route('appform')}}">Application Form Admission</a></li>
            </ul>
        </li>
        <li><a href="{{route('career')}}">Career</a></li>
        <li><a href="{{route('news')}}">News</a></li>
        <li><a href="{{route('gallery')}}">Gallery</a></li>
        <li><a href="{{route('contact')}}">Contact</a></li>

        @if (Auth::check())
            <li><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li>
                <a  href="{{ route('logout') }}"onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
             </a>
    
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>
            </li>
        @else

        <li> <a href="{{ route('register') }}">{{ __('Register') }}</a></li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @endif
    </ul>
</nav><!-- #nav-menu-container -->