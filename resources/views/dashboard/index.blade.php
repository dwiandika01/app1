<!DOCTYPE html>
<html lang="en">

@include('template._header')

<body>
    <div class="container-scroller">
        @include('template._navbar')
        <div class="container-fluid page-body-wrapper">
            @include('template._sidebar')
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('konten')
                    
                </div>
                @include('template._footer')
            </div>
        </div>
    </div>
</body>
@include('template._script')
@yield('chart')

</html>