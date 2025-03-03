<div class="container-fluid">
            <div class="nav-menu">
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li class="logo">
                        <a href="{{ route('homepage') }}"><img src="img/logo.png" alt=""></a></li>
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="about-me.html">About Me</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="recipe.html">Recipes</a></li>
                        <li><a href="categories.html">Categories</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        @if (Route::has('login'))
                        @auth
                        <li><x-app-layout>

                        </x-app-layout></li>
                        @else
                        <li><a href="{{ route('register') }}">Register</a></li>
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li>
                            @endauth
                        @endif
                            <div class="nav-right search-switch"> &nbsp;   <i class="fa fa-search"></i></div></li>
                    </ul>
                </nav>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>