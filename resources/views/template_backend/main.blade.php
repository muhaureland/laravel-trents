@include('template_backend.header')
        <div id="app">
            <div class="main-wrapper main-wrapper-1">
                <div class="navbar-bg"></div>
                @include('template_backend.navbar')
                @include('template_backend.sidebar')
                    <!-- Main Content -->
                    <div class="main-content">
                        @yield('container')
                    </div>
                <footer class="main-footer">
                    <div class="footer-left">
                    Copyright &copy; 2022 <div class="bullet"></div>By <a href="https://nauval.in/">Muhaureland</a>
                    </div>
                </footer>
            </div>
        </div>
@include('template_backend.footer')