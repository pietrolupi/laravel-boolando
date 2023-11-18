<header>

    <div class="container">
      <div class="menu">
        <ul>
          <li ><a class="{{Route::currentRouteName() === 'women' ? 'active' : '' }}" href="{{route('women')}}">Donna</a></li>

          <li ><a class="{{Route::currentRouteName() === 'men' ? 'active' : ''}}" href="{{route('men')}}">Uomo</a></li>

          <li ><a class="{{Route::currentRouteName() === 'children' ? 'active' : ''}}" href="{{route('children')}}">Bambini</a></li>

        </ul>
      </div>

      <div class="logo">
        <a href="{{route('home')}}">
            <img src="{{ asset('img/boolean-logo.png') }}" alt="logo">

        </a>
      </div>

      <div class="icons">
          <a href="#"><i class="fa-regular fa-user"></i></a>
          <a href="#"><i class="fa-regular fa-heart"></i></a>
          <a href="#"><i class="fa-solid fa-bag-shopping"></i></a>
      </div>

    </div>
  </header>
