{{--  <script src="{{asset('js/app.js')}}" type="text/javascript"></script>  --}}
<script src="{{ asset('assets/public/js/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/public/js/jquery/jquery-migrate.min.js') }}"></script>
<script src="{{ asset('assets/public/js/jquery/popper.min.js') }}"></script>
<script src="{{ asset('assets/public/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/public/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('assets/public/js/particles.min.js') }}"></script>
<script src="{{ asset('assets/public/js/facnybox.min.js') }}"></script>
<script src="{{ asset('assets/public/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/public/js/masonry.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/public/js/circle-progress.min.js') }}"></script>
<script src="{{ asset('assets/public/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/public/js/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/public/js/slicknav.min.js') }}"></script>
<script src="{{ asset('assets/public/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/public/js/easing.min.js') }}"></script>
<script src="{{ asset('assets/public/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/public/js/jquery.scrollUp.min.js') }}"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyC0RqLa90WDfoJedoE3Z_Gy7a7o8PCL2jw"></script>
<script src="{{ asset('assets/public/js/gmaps.min.js') }}"></script>
<script src="{{ asset('assets/public/js/map-script.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{ asset('assets/public/js/jquery/jquery-ui-1.9.1.custom.min.js') }}"></script>
<script src="{{ asset('assets/public/js/jquery/jquery.autocomplete.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i" crossorigin="anonymous"></script>
<script src="{{ asset('assets/public/js/main.js') }}"></script>
<script src="{{ asset('assets/public/js/pages/ajax-form.js') }}"></script>
<script src="{{ asset('assets/public/js/autocomplete.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
{{--<script src="{{ asset('assets/public/js/all.js') }}"></script>--}}
<script src="//js.pusher.com/4.1/pusher.min.js"></script>
<script>
</script>
<script>
    window.Laravel = {!! json_encode([
            'csrfToken'=> csrf_token(),
            'user' => current_user()
        ])
    !!};
</script>

<!--Start of Tawk.to Script-->
@if(config('myapp.tawk_plugin') != '')
    {!! config('myapp.tawk_plugin') !!}
@endif

@if(config('myapp.google_analytics') != '')
    {!! config('myapp.google_analytics') !!}
@endif
<!--End of Tawk.to Script-->

@yield('js')
