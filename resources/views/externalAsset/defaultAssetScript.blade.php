<script src="{{ asset('external/default/js/scripts.min.js') }}"></script>
<script src="{{ asset('external/default/js/main.min.js') }}"></script>
<script src="{{ asset('external/default/js/custom.js') }}"></script>

@if (Request::is('register'))  
    <script src="{{ asset('js/stepper.js') }}" type="text/javascript"></script>
    {{-- <script src="{{ asset('js/uploadImage.js') }}" type="text/javascript"></script> --}}
    {{-- <script src="{{ asset('stepper/js/jquery-3.3.1.min.js') }}"></script> --}}
    {{--  <script src="{{ asset('stepper/js/jquery.steps.js') }}"></script>
    <script src="{{ asset('stepper/js/main.js') }}"></script>  --}}
@endif

