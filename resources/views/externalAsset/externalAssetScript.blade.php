 <!-- JavaScript files-->
    <script src="{{ asset('external/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('external/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ asset('external/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('external/js/grasp_mobile_progress_circle-1.0.0.min.js') }}"></script>
    <script src="{{ asset('external/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>

    @if (\Request::is('home'))  
        <script src="{{ asset('external/vendor/chart.js/Chart.min.js') }}"></script>
        <script src="{{ asset('external/js/charts-home.js') }}"></script>
    @endif
    
    <script src="{{ asset('external/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('external/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    
    <!-- Main File-->
    <script src="{{ asset('external/js/front.js') }}"></script>
    @if((Request::is('NewProperty')) || (Request::is('preview*')) || (Request::is('updateproperty*'))) 
        <script src="{{ asset('js/custom.js') }}"></script>
        <script src="{{ asset('js/year-select.js') }}"></script>
    @endif
    
    @if (Request::is('PropertyList'))
        <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('js/responsive.bootstrap4.min.js') }}"></script>
    @endif
    