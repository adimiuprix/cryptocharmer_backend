<html>
    <head>
        <title>Login | Gradient Able Dashboard Template</title>
        <!-- [Meta] -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Gradient Able is trending dashboard template made using Bootstrap 5 design framework. Gradient Able is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies.">
        <meta name="keywords" content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard">
        <meta name="author" content="codedthemes">
        <!-- [Favicon] icon -->
        <link rel="icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon">
        <!-- [Google Font : Poppins] icon -->
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
        <link href="https://fomo.codedthemes.com/themes/altum/assets/css/pixel.min.css" type="text/css" rel="stylesheet" media="screen,print">
    </head>
    <body data-pc-header="header-1" data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">

        <div class="auth-main v1 bg-grd-primary">
            <div class="auth-wrapper">
                <div class="auth-form">
                    <div class="card my-5">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ asset('assets/images/logo-dark.svg') }}" alt="images" class="img-fluid mb-4">
                                <h4 class="f-w-500 mb-1">Login admin</h4>
                            </div>
                            <form action="{{ route('admin.login') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                                </div>
                                <div class="mb-3">
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="d-grid mt-4">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
        <!-- Required Js -->
        <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/fonts/custom-font.js') }}"></script>
        <script src="{{ asset('assets/js/script.js') }}"></script>
        <script src="{{ asset('assets/js/theme.js') }}"></script>
        <script src="{{ asset('assets/js/multi-lang.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>
        <script defer="defer" src="https://fomo.codedthemes.com/pixel/yRevReYmxkh1j4z7Hc4tgbOKeXSu5Bm1"></script>
        <script>layout_change('light');</script>
        <script>layout_sidebar_change('light');</script>
        <script>change_box_container('false');</script>
        <script>layout_caption_change('true');</script>
        <script>layout_rtl_change('false');</script>
        <script>preset_change('preset-1');</script>
        <script>header_change('header-1');</script>
    </body>
    <!-- [Body] end -->
</html>
