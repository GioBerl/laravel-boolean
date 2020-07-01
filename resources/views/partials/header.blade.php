<header>
    <div class="header-left">
        <img src="{{ asset('img/logo.png')}}" alt="logo image">
    </div>
    <div class="header-right">
        <ul class="menu">
            <li class="{{ Request::route()->getName() == 'homepage' ? 'active' : '' }}">
                <a href="{{ route('homepage') }}">Home</a>
            </li>
            <li class="{{ Request::route()->getName() == 'corso' ? 'active' : '' }}">
                <a href="{{ route('corso') }}">Corso</a>
            </li>
            <li><a href="">Dopo il corso</a></li>
            <li><a href="">lezione gratuita</a></li>
            <li><a href="">assumi i nostri studenti</a></li>
            <li><a href="">candidati ora</a></li>
        </ul>
    </div>
</header>