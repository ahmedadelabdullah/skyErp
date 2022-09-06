@include('admin.layouts.parts.head')







    <!-- partial:partials/_navbar.html -->
    @include('admin.layouts.parts.navBar')


    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        @include('admin.layouts.parts.theme_settings')

        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        @include('admin.layouts.parts.sidebar')

        <div class="w-100">
            @yield('breadcrumb')
        <!-- partial -->
       @yield('content')
        </div>

        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
@include('admin.layouts.parts.scripts')