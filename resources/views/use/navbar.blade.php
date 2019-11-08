<nav class="nav @isset($invert) bg--primary @else bg--white @endisset">
  <div class="nav--inner">
    <a class="nav--logo" href="{{ url('/') }}">
      <h1 class='text--thin @isset($invert) color--white @else color--primary @endisset'>Studia</h1>
    </a>
    <div class="nav--items">
      <div class="nav--items-inner ml-auto">
        @guest
        <a href="{{ route('login') }}"
          class="btn @isset($invert) bg--white color--primary @else btn--primary @endisset nav--item">Login</a>
        <a href="{{ route('register') }}"
          class="btn @isset($invert) bg--white color--primary @else btn--primary @endisset nav--item">Register</a>
        @endguest

        @auth
        <button type="submit"
          class="btn @isset($invert) bg--white color--primary @else btn--primary @endisset nav--item" form="logout">
          Log out
        </button>
        @endauth

        <form id="logout" aria-hidden="true" hidden='hidden' action="{{ route('logout') }}" method='post'>@csrf</form>
      </div>
    </div>
  </div>
</nav>