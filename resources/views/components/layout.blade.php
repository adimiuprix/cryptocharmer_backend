<!doctype html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <title>Site | Gradient Able Dashboard Template</title>
        <!-- [Meta] -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Gradient Able is trending dashboard template made using Bootstrap 5 design framework. Gradient Able is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies.">
        <meta name="keywords" content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard">
        <meta name="author" content="codedthemes">
        <!-- [Favicon] icon -->
        <link rel="icon" href="https://codedthemes.com/demos/admin-templates/gradient-able/bootstrap/default/assets/images/favicon.svg" type="image/x-icon">
        <!-- [Page specific CSS] start -->
        <!-- fileupload-custom css -->
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/dropzone.min.css') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/monokai-sublime.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/quill.core.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/quill.snow.css') }}">
        <!-- [Page specific CSS] end --><!-- [Google Font : Poppins] icon -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&amp;display=swap" rel="stylesheet">
        <!-- [phosphor Icons] https://phosphoricons.com/ -->
        <link rel="stylesheet" href="{{ asset('assets/fonts/phosphor/duotone/style.css') }}">
        <!-- [Tabler Icons] https://tablericons.com -->
        <link rel="stylesheet" href="{{ asset('assets/fonts/tabler-icons.min.css') }}">
        <!-- [Feather Icons] https://feathericons.com -->
        <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}">
        <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
        <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}">
        <!-- [Material Icons] https://fonts.google.com/icons -->
        <link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}">
        <!-- [Template CSS Files] -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main-style-link">
        <link rel="stylesheet" href="{{ asset('assets/css/style-preset.css') }}">
    </head>
    <!-- [Head] end -->
     <!-- [Body] Start -->
    <body data-pc-header="header-1" data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
        <!-- [ Sidebar Menu ] start -->
        <nav class="pc-sidebar">
            <div class="navbar-wrapper">
                <div class="m-header">
                    <a href="{{ route('admin.dashboard') }}" class="b-brand text-primary">
                        <img src="{{ asset('assets/images/logo-white.svg') }}" alt="logo image" class="logo-lg">
                    </a>
                </div>
                <div class="navbar-content">
                    <ul class="pc-navbar">
                        <li class="pc-item pc-caption">
                            <label>Menu</label>
                        </li>
                        <li class="pc-item pc-hasmenu">
                            <a href="{{ route('admin.dashboard') }}" class="pc-link">
                                <span class="pc-micon">
                                    <i class="ph ph-gauge"></i>
                                </span>
                                <span class="pc-mtext">Dashboard</span>
                            </a>
                        </li>
                        <li class="pc-item">
                            <a href="{{ route('admin.content') }}" class="pc-link">
                                <span class="pc-micon">
                                    <i class="ph ph-identification-card"></i>
                                </span>
                                <span class="pc-mtext">Konten</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- [ Sidebar Menu ] end -->
         <!-- [ Header Topbar ] start -->
        <header class="pc-header">
            <div class="m-header">
                <a href="{{ route('admin.dashboard') }}" class="b-brand text-primary">
                    <!-- ========    Change your logo from here    ============ -->
                    <img src="{{ asset('assets/images/logo-white.svg') }}" alt="logo image" class="logo-lg">
                </a>
            </div>
            <div class="header-wrapper">
                <!-- [Mobile Media Block] start -->
                <div class="me-auto pc-mob-drp">
                    <ul class="list-unstyled">
                        <!-- ======= Menu collapse Icon ===== -->
                        <li class="pc-h-item pc-sidebar-collapse"><a href="#" class="pc-head-link ms-0" id="sidebar-hide"><i class="ph ph-list"></i></a></li>
                        <li class="pc-h-item pc-sidebar-popup"><a href="#" class="pc-head-link ms-0" id="mobile-collapse"><i class="ph ph-list"></i></a></li>
                    </ul>
                </div>
                <!-- [Mobile Media Block end] -->
                <div class="ms-auto">
                    <ul class="list-unstyled">
                        <li class="dropdown pc-h-item">
                            <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i class="ph ph-sun-dim"></i></a>
                            <div class="dropdown-menu dropdown-menu-end pc-h-dropdown"><a href="#!" class="dropdown-item" onclick="layout_change('dark')"><i class="ph ph-moon"></i> <span>Dark</span> </a><a href="#!" class="dropdown-item" onclick="layout_change('light')"><i class="ph ph-sun-dim"></i> <span>Light</span> </a><a href="#!" class="dropdown-item" onclick="layout_change_default()"><i class="ph ph-cpu"></i> <span>Default</span></a></div>
                        </li>
                        <li class="dropdown pc-h-item header-user-profile">
                            <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false"><img src="assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar"></a>
                            <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                                <div class="dropdown-header d-flex align-items-center justify-content-between">
                                    <h4 class="m-0">Profile</h4>
                                </div>
                                <div class="dropdown-body">
                                    <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
                                        <ul class="list-group list-group-flush w-100">
                                            <li class="list-group-item">
                                                <a href="#" class="dropdown-item">
                                                    <span class="d-flex align-items-center">
                                                        <i class="ph ph-plus-circle"></i>
                                                        <span>Add account</span>
                                                    </span>
                                                </a>
                                                <a href="{{ route('admin.logout') }}" class="dropdown-item">
                                                    <span class="d-flex align-items-center">
                                                        <i class="ph ph-power"></i>
                                                        <span>Logout</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- [ Header ] end -->

        <!-- [ Main Content ] start -->
        <div class="pc-container">
            <div class="pc-content">

                {{ $slot }}

            </div>
        </div>

        <!-- [ Main Content ] end -->
        <footer class="pc-footer">
            <div class="footer-wrapper text-center text-sm-start">
                <p class="m-0">Di buat oleh Adi miuprix</p>
            </div>
        </footer>
        <!-- Required Js -->
        <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/fonts/custom-font.js') }}"></script>
        <script src="{{ asset('assets/js/script.js') }}"></script>
        <script src="{{ asset('assets/js/theme.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>
        <script defer="defer" src="https://fomo.codedthemes.com/pixel/yRevReYmxkh1j4z7Hc4tgbOKeXSu5Bm1"></script>
        <script>
            layout_change('light');
        </script>
        <script>layout_sidebar_change('light');</script>
        <script>change_box_container('false');</script>
        <script>layout_caption_change('true');</script>
        <script>layout_rtl_change('false');</script>
        <script>preset_change('preset-1');</script>
        <script>header_change('header-1');</script>
        <!-- [Page Specific JS] start -->
        <!-- file-upload Js -->
        <script src="{{ asset('assets/js/plugins/dropzone-amd-module.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/wizard.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/quill.min.js') }}"></script>
    </body>
</html>
