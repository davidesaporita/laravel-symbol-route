@include('templates.head')
@include('templates.navigation')
    
    @yield('content');

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>