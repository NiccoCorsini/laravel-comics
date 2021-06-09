<header>
    <div class="container">

        <a href="{{ route('home') }}"><img src="{{ asset('img/dc-logo.png') }}" alt="logo"></a>

        <nav>
            <ul>
                <li><a class="link  
                    @if (Request::route()->getName() === 'home')
                    {{ 'active' }}
                    @endif" href="{{ route('home') }}">Home</a></li>
                <li><a class="link 
                    @if (Request::route()->getName() === 'news')
                    {{ 'active' }}
                    @endif" href="{{ route('news') }}">News</a></li>
            </ul>
        </nav>

    </div>
</header> 