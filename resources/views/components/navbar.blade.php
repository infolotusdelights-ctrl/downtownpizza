<nav class="navbar" id="navbar">

    <div class="container navbar-container">

        <!-- Logo -->

        <a href="{{ url('/') }}" class="logo">

            <img
                src="{{ asset('assets/images/logo.png') }}"
                alt="Downtown Pizza">

            <span>Downtown Pizza Studio</span>

        </a>

        <!-- Desktop Menu -->

        <ul class="nav-menu">

            <li>
                <a href="{{ url('/') }}" class="active">
                    Home
                </a>
            </li>

            <li>
                <a href="{{ route('builder') }}">
                    Build Pizza
                </a>
            </li>

            <li>
                <a href="#">
                    Offers
                </a>
            </li>

            <li>
                <a href="#">
                    Contact
                </a>
            </li>

        </ul>

        <!-- Right Side -->

        <div class="nav-right">

            <a href="#" class="cart-btn">

                <i class="ri-shopping-cart-2-line"></i>

                <span class="cart-count">
                    0
                </span>

            </a>

            <button class="menu-toggle" id="menuToggle">

                <i class="ri-menu-3-line"></i>

            </button>

        </div>

    </div>

</nav>
