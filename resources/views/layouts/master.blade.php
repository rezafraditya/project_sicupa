@include('layouts.header')
@include('layouts.navbar')

<div class="h-screen flex flex-row flex-wrap">
@include('layouts.sidebar')
@yield('content')
</div>


@include('layouts.footer')
@include('layouts.script')

