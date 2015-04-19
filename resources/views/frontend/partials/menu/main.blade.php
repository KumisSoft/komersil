<div style="background: #333;">

  <div class="row">
    <div class="columns">
      <nav class="top-bar" data-topbar role="navigation">

        {{--<ul class="title-area">--}}
          {{--<li class="name">--}}
            {{--<h1><a href="{{ route('home') }}">Komersil</a></h1>--}}
          {{--</li>--}}
          {{--<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>--}}
        {{--</ul>--}}

        <section class="top-bar-section">
          <!-- Right Nav Section -->
          <ul class="right">

            @if (auth()->guest())
              <li><a href="{{ route('login') }}">Login</a></li>
              <li><a href="{{ route('register') }}">Register</a></li>
            @endif

            @if (auth()->check())
              <li class="has-dropdown">
                <a href="javascript:;">
                  <span class="fa fa-user"></span> {{ auth()->user()->name }}
                </a>
                <ul class="dropdown">
                  <li><a href="{{ route('logout') }}">Logout</a></li>
                </ul>
              </li>
            @endif

          </ul>

          <!-- Left Nav Section -->
          <ul class="left">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('item.index') }}">Products</a></li>
          </ul>
        </section>
      </nav>
    </div>
  </div>
</div>
