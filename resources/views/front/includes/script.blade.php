   <script src="{{ asset('/front') }}/assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="{{ asset('/front') }}/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('/front') }}/assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="{{ asset('/front') }}/assets/js/vendor/popper.min.js"></script>
    <script src="{{ asset('/front') }}/assets/js/vendor/bootstrap.min.js"></script>
    <script src="{{ asset('/front') }}/assets/js/plugins/wow.js"></script>
    <script src="{{ asset('/front') }}/assets/js/plugins/scrollup.js"></script>
    <script src="{{ asset('/front') }}/assets/js/plugins/aos.js"></script>
    <script src="{{ asset('/front') }}/assets/js/plugins/magnific-popup.js"></script>
    <script src="{{ asset('/front') }}/assets/js/plugins/jquery.syotimer.min.js"></script>
    <script src="{{ asset('/front') }}/assets/js/plugins/swiper.min.js"></script>
    <script src="{{ asset('/front') }}/assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('/front') }}/assets/js/plugins/isotope.pkgd.min.js"></script>
    <script src="{{ asset('/front') }}/assets/js/plugins/jquery-ui.js"></script>
    <script src="{{ asset('/front') }}/assets/js/plugins/jquery-ui-touch-punch.js"></script>
    <script src="{{ asset('/front') }}/assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="{{ asset('/front') }}/assets/js/plugins/waypoints.min.js"></script>
    <script src="{{ asset('/front') }}/assets/js/plugins/counterup.min.js"></script>
    <script src="{{ asset('/front') }}/assets/js/plugins/select2.min.js"></script>
    <script src="{{ asset('/front') }}/assets/js/plugins/easyzoom.js"></script>
    <script src="{{ asset('/front') }}/assets/js/plugins/slinky.min.js"></script>
    <script src="{{ asset('/front') }}/assets/js/plugins/ajax-mail.js"></script>
    <!-- Main JS -->
    <script src="{{ asset('/front') }}/assets/js/main.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });
    </script>
    @stack('front_script')
