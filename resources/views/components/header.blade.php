<header id="header" class="header header-fullwidth header-transparent-bg">
  <div class="container">
    <div class="header-desk header-desk_type_1">
      <div class="logo">
        <a href="{{ route('home') }}">
          <img src="{{ asset('images/logo.png') }}" alt="Uomo" class="logo__image d-block" style="width: 100px; height: auto;" />
        </a>
      </div>

      <nav class="navigation">
        <ul class="navigation__list list-unstyled d-flex">
          <li class="navigation__item">
            <a href="{{ route('home') }}" class="navigation__link">Home</a>
          </li>
          <li class="navigation__item">
            <a href="{{ route('shop') }}" class="navigation__link">Shop</a>
          </li>
          <li class="navigation__item">
            <a href="{{ route('cart') }}" class="navigation__link">Cart</a>
          </li>
          <li class="navigation__item">
            <a href="{{ route('about') }}" class="navigation__link">About</a>
          </li>
          <li class="navigation__item">
            <a href="{{ route('contact') }}" class="navigation__link">Contact</a>
          </li>
        </ul>
      </nav>

      <div class="header-tools d-flex align-items-center">
        <div class="header-tools__item hover-container">
          <div class="js-hover__open position-relative">
            <a class="js-search-popup search-field__actor" href="#">
              <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <use href="#icon_search" />
              </svg>
              <i class="btn-icon btn-close-lg"></i>
            </a>
          </div>

          <div class="search-popup js-hidden-content">
            <form action="#" method="GET" class="search-field container">
              <p class="text-uppercase text-secondary fw-medium mb-4">What are you looking for?</p>
              <div class="position-relative">
                <input class="search-field__input search-popup__input w-100 fw-medium" type="text" name="search-keyword"
                  placeholder="Search products" />
                <button class="btn-icon search-popup__submit" type="submit">
                  <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_search" />
                  </svg>
                </button>
                <button class="btn-icon btn-close-lg search-popup__reset" type="reset"></button>
              </div>

              <div class="search-popup__results">
                <div class="sub-menu search-suggestion">
                  <h6 class="sub-menu__title fs-base">Quicklinks</h6>
                  <ul class="sub-menu__list list-unstyled">
                    <li class="sub-menu__item"><a href="shop2.html" class="menu-link menu-link_us-s">New Arrivals</a>
                    </li>
                    <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Dresses</a></li>
                    <li class="sub-menu__item"><a href="shop3.html" class="menu-link menu-link_us-s">Accessories</a>
                    </li>
                    <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Footwear</a></li>
                    <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Sweatshirt</a></li>
                  </ul>
                </div>

                <div class="search-result row row-cols-5"></div>
              </div>
            </form>
          </div>
        </div>

        <div class="header-tools__item hover-container">
          @if (auth()->check())
            @if (auth()->user()->role == 'admin')
              <a href="{{ route('admin.dashboard') }}" class="header-tools__item">
                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" id="dashboard">
                  <path d="M10.5,13h-7C3.2,13,3,13.2,3,13.5v7C3,20.8,3.2,21,3.5,21h7c0.3,0,0.5-0.2,0.5-0.5v-7C11,13.2,10.8,13,10.5,13z M10,20H4v-6h6V20z M10.5,3h-7C3.2,3,3,3.2,3,3.5v7C3,10.8,3.2,11,3.5,11h7c0.3,0,0.5-0.2,0.5-0.5v-7C11,3.2,10.8,3,10.5,3z M10,10H4V4h6V10z M20.5,3h-7C13.2,3,13,3.2,13,3.5v7c0,0.3,0.2,0.5,0.5,0.5h7c0.3,0,0.5-0.2,0.5-0.5v-7C21,3.2,20.8,3,20.5,3z M20,10h-6V4h6V10z M20.5,16.5h-3v-3c0-0.3-0.2-0.5-0.5-0.5s-0.5,0.2-0.5,0.5v3h-3c-0.3,0-0.5,0.2-0.5,0.5s0.2,0.5,0.5,0.5h3v3c0,0.3,0.2,0.5,0.5,0.5h0c0.3,0,0.5-0.2,0.5-0.5v-3h3c0.3,0,0.5-0.2,0.5-0.5S20.8,16.5,20.5,16.5z"></path>
                </svg>
              </a>
            @else
              <a href="{{ route('account') }}" class="header-tools__item">
                <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_user" />
                </svg>
              </a>
            @endif
          @else
            <a href="{{ route('login') }}" class="header-tools__item">
              <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <use href="#icon_user" />
              </svg>
            </a>
          @endif
        </div>

        <a href="{{ route('wishlist') }}" class="header-tools__item">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <use href="#icon_heart" />
          </svg>
        </a>

        <a href="{{ route('cart') }}" class="header-tools__item header-tools__cart">
          <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <use href="#icon_cart" />
          </svg>
          <span class="cart-amount d-block position-absolute js-cart-items-count">3</span>
        </a>

        @if (auth()->check())
          <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" style="background: transparent; border: none; cursor: pointer;">
              <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                <g>
                  <path d="M0 0h24v24H0z" fill="none" />
                  <path d="M5 22a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v3h-2V4H6v16h12v-2h2v3a1 1 0 0 1-1 1H5zm13-6v-3h-7v-2h7V8l5 4-5 4z"
                    fill="red" />
                </g>
              </svg>
            </button>
          </form>
        @endif
      </div>
    </div>
  </div>
</header>
