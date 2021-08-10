@include('partials.header')
    <body>
        <div class='loader'>
            <div class='spinner-grow text-primary' role='status'>
                <span class='sr-only'>Loading...</span>
            </div>
        </div>
            @auth
        <div class="connect-container align-content-stretch d-flex flex-wrap">
            <div class="page-sidebar">
                @include('partials.sidebar')
            </div>
            <div class="page-container">
                <div class="page-header">
                    @include('partials.navbar')
                </div>
                @endauth
                <div class="page-content">

                    @yield('content')
                </div>
                @auth
                @include('partials.footer')
                @endauth
            </div>
        </div>
        
        <!-- Javascripts -->
        @include('partials.script')
    </body>
</html>