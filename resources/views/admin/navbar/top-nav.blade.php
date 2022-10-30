
<nav class="navbar navbar-expand-lg navbar-white ftco_navbar ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{asset('/')}}assets/img/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Category</a></li>
                <li class="nav-item"><a href="{{ route('admin.view.table') }}" class="nav-link">Table</a></li>
                <li class="nav-item"><a href="{{ route('admin.view.reservations') }}" class="nav-link">Reservation</a></li>
                <li class="nav-item cta"><a href="#" class="nav-link">Book</a></li>
                @if(!Auth::check())
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                @else
                    <li class="nav-item"><a onclick="event.preventDefault(); document.getElementById('logoutForm').submit();" href="#" class="nav-link">[-LogOut-]</a></li>
                    <form action="{{ route('logout') }}" method="post" id="logoutForm">
                        @csrf
                    </form>
                @endif
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
