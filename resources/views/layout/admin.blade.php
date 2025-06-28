<!doctype html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    <!-- META DATA -->
    <base href="/public">
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Tribute - Admin">
    <meta name="author" content="">

    <!-- TITLE -->
    <title>Dashboard</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">

    <!-- BOOTSTRAP CSS -->
    <link href="admin_assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="admin_assets/css/style.css" rel="stylesheet" />
    <link href="admin_assets/css/dark-style.css" rel="stylesheet" />
    <link href="admin_assets/css/skin-modes.css" rel="stylesheet" />

    <!-- SIDE-MENU CSS -->
    <link href="admin_assets/css/sidemenu.css" rel="stylesheet" id="sidemenu-theme">

    <!--C3 CHARTS CSS -->
    <link href="admin_assets/plugins/charts-c3/c3-chart.css" rel="stylesheet" />

    <!-- P-scroll bar css-->
    <link href="admin_assets/plugins/p-scroll/perfect-scrollbar.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="admin_assets/plugins/icons/icons.css" rel="stylesheet" />

    <!-- SIDEBAR CSS -->
    <link href="admin_assets/plugins/sidebar/sidebar.css" rel="stylesheet" />


    <!-- SELECT2 CSS -->
    <link href="admin_assets/plugins/select2/select2.min.css" rel="stylesheet" />

    <!-- INTERNAL Data table css -->
    <link href="admin_assets/plugins/datatable/css/dataTables.bootstrap5.css" rel="stylesheet" />
    <link href="admin_assets/plugins/datatable/responsive.bootstrap5.css" rel="stylesheet" />


    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="admin_assets/colors/color1.css" />

    <!-- INTERNAL Switcher css -->
    <link href="admin_assets/switcher/css/switcher.css" rel="stylesheet" />
    <link href="admin_assets/switcher/demo.css" rel="stylesheet" />
</head>

<body class="app sidebar-mini">


    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="admin_assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!--APP-SIDEBAR-->
            @include('admin.snippets.sidebar')
            <!--/APP-SIDEBAR-->

            <!-- Mobile Header -->
            @include('admin.snippets.topbar')
            <!-- /Mobile Header -->

            <!--app-content open-->
            @yield('content')
            <!-- CONTAINER END -->
        </div>

        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright © 2025 <a href="https://inmemoryofezeudoumuchu.life/">In Memory of Ezeudo Umuchu</a> <span class="fa fa-heart text-danger"></span> All rights reserved
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER CLOSED -->

    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="admin_assets/plugins/jquery/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="admin_assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="admin_assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- INPUT MASK JS-->
    <script src="admin_assets/plugins/input-mask/jquery.mask.min.js"></script>

    <!-- SIDE-MENU JS -->
    <script src="admin_assets/plugins/sidemenu/sidemenu.js"></script>

    <!-- SIDEBAR JS -->
    <script src="admin_assets/plugins/sidebar/sidebar.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="admin_assets/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="admin_assets/plugins/p-scroll/pscroll.js"></script>
    <script src="admin_assets/plugins/p-scroll/pscroll-1.js"></script>


    <!-- CHARTJS CHART JS-->
    <script src="admin_assets/plugins/chart/Chart.bundle.js"></script>
    <script src="admin_assets/plugins/chart/utils.js"></script>

    <!-- PIETY CHART JS-->
    <script src="admin_assets/plugins/peitychart/jquery.peity.min.js"></script>
    <script src="admin_assets/plugins/peitychart/peitychart.init.js"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="admin_assets/plugins/select2/select2.full.min.js"></script>

    <!-- INTERNAL Data tables js-->
    <script src="admin_assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="admin_assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
    <script src="admin_assets/plugins/datatable/dataTables.responsive.min.js"></script>

    <!-- ECHART JS-->
    <script src="admin_assets/plugins/echarts/echarts.js"></script>

    <!-- APEXCHART JS -->
    <script src="admin_assets/js/apexcharts.js"></script>

    <!-- INDEX JS -->
    <script src="admin_assets/js/index1.js"></script>


    <!-- CUSTOM JS-->
    <script src="admin_assets/js/custom.js"></script>

    <!-- Switcher js -->
    <script src="admin_assets/switcher/js/switcher.js"></script>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('success') || session('error') || session('info'))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: @json(session('success') ? 'success' : (session('error') ? 'error' : 'info')),
                title: @json(session('success') ?? session('error') ?? session('info')),
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer);
                    toast.addEventListener('mouseleave', Swal.resumeTimer);
                }
            });
        });
    </script>
    @endif


    <style>
        .swal2-toast {
            font-size: 14px !important;
            padding: 0.75rem 1.25rem !important;
            padding-left: 0.8rem;
            color: #4985d3 !important;
            /* Changed from #000 to #333 */
            background: #fff;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            display: flex !important;
            justify-content: start !important;
            align-items: center !important;
            gap: 10px !important;
        }

        .swal2-container .swal2-title {
            font-size: 15px !important;
            font-weight: 500 !important;
            color: #4985d3 !important;
            /* Changed from #000 to #333 */
            margin: 0 !important;
        }

        /* For dark modals, you might want to add this */
        .swal2-popup {
            color: #4985d3 !important;
        }

        .swal2-icon {
            width: 18px !important;
            height: 18px !important;
            margin: 0 4px 0 0 !important;
            margin-bottom: 4px !important;
        }

        .swal2-icon-content {
            font-size: 16px !important;
        }
    </style>

</body>

</html>
