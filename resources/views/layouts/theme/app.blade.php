<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Melvin POS sistema de ventas" content="Sistema de ventas">
    <meta name="keywords" content="ventas, compras, inventarios, reportes">
<<<<<<< HEAD
    <meta name="author" content="ksiri.georg@gmail.com">
=======
    <meta name="author" content="luisfaxacademy.com">
>>>>>>> 1a93987bd2038f22c8904f8d4d8814e95adf64ee
    <link rel="icon" href="{{asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <title>Agenda Hoy</title>

    @include('layouts.theme.styles')

    @stack('my-styles')

</head>

<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="false" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">

    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">

            <!-- Page Header Start-->
            @include('layouts.theme.header')
            <!-- Page Header Ends -->



            <!-- Page Body Start-->
            <div class="app-wrapper d-flex" id="kt_app_wrapper">
                <!-- Page Sidebar Start-->
                @include('layouts.theme.sidebar')
                <!-- Page Sidebar Ends-->

                <div class="app-main flex-column flex-row-fluid" id="kt_app_main" >
                    <!--begin::Content-->
                    <div class="d-flex flex-column flex-column-fluid" >
                        <!--begin::Content container-->
                        
                                    {{$slot}}
                            
                        <!--end::Content container-->
                    </div>
                    <!--end::Content-->

                    <!-- footer start-->
                    @include('layouts.theme.footer')
                </div>
            </div>
        </div>
    </div>

    <!-- scripts -->
    @include('layouts.theme.scripts')

    {{-- Custom scripts --}}
    @stack('my-scripts')
<<<<<<< HEAD

        <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
		<script src="{{ asset('assets/js/custom/utilities/modals/create-campaign.js') }}"></script>
		<script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
=======
		<script src="./assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="./assets/js/custom/utilities/modals/create-campaign.js"></script>
		<script src="./assets/js/custom/utilities/modals/users-search.js"></script>
>>>>>>> 1a93987bd2038f22c8904f8d4d8814e95adf64ee
</body>

</html>
