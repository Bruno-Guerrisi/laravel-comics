<header>
    <div class="container main-header">

        <a href="{{ route('home')}}">
            <img src="{{ asset('images/dc-logo.png') }}" alt="">
        </a>
    
        <nav>
            <ul>
                <li>
                    <a href="{{ route('home')}}"
                        @if (Request::route()->getName() == 'home') 
                        class="active" @endif>
                        Comics
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('news')}}" 
                        @if (Request::route()->getName() == 'news') 
                        class="active" @endif>
                        News
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>