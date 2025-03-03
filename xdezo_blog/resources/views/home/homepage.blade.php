<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('home.homecss')
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        @include('home.header')
    </header>
    <!-- Header End -->

    <!-- Page Top Recipe Section Begin -->
    <section class="page-top-recipe">
        @include('home.page_top_recipe')
    </section>
    <!-- Page Top Recipe Section End -->

    <!-- Top Recipe Section Begin -->
    <section class="top-recipe spad">
        @include('home.top_recipe')
    </section>
    <!-- Top Recipe Section End -->

    <!-- Categories Filter Section Begin -->
    <div class="categories-filter-section spad">
        @include('home.categories_filter')
    </div>
    <!-- Categories Filter Section End -->

    <!-- Feature Recipe Section Begin -->
    <section class="feature-recipe">
        @include('home.featured_recipes')
    </section>
    <!-- Feature Recipe Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        @include('home.footer')
    </footer>
    <!-- Footer Section End -->

    <!-- Search model -->
	<div class="search-model">
		@include('home.search')
	</div>
	<!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>