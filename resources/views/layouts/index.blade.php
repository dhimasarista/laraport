
<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-width="fullwidth" data-menu-styles="light" data-toggled="close">

<head>

    {{-- <!-- Meta Data --> --}}
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> ZYNIX - Bootstrap 5 Premium Admin & Dashboard Template </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Wcsrm Software Private Limited">
	<meta name="keywords" content="bootstrap template, admin panel bootstrap, bootstrap dashboard, admin, admin dashboard template, dashboard template, html css templates, dashboard, template dashboard,  bootstrap dashboard template, dashboard html css, bootstrap admin dashboard,  bootstrap admin, dashboard template, bootstrap5 admin template">
    
    {{-- <!-- Favicon --> --}}
    <link rel="icon" href="{{ asset('assets/images/brand-logos/favicon.ico" type="ima') }}ge/x-icon">
    
    {{-- <!-- Choices JS --> --}}
    <script src="{{ asset('assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

    {{-- <!-- Main Theme Js --> --}}
    <script src="{{ asset('assets/js/main.js') }}"></script>
    
    {{-- <!-- Bootstrap Css --> --}}
    <link id="style" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css" rel="st') }}ylesheet" >

    {{-- <!-- Style Css --> --}}
    <link href="{{ asset('assets/css/styles.css" rel="st') }}ylesheet" >

    {{-- <!-- Icons Css --> --}}
    <link href="{{ asset('assets/css/icons.css" rel="st') }}ylesheet" >

    {{-- <!-- Node Waves Css --> --}}
    <link href="{{ asset('assets/libs/node-waves/waves.min.css" rel="sty') }}lesheet" > 

    {{-- <!-- Simplebar Css --> --}}
    <link href="{{ asset('assets/libs/simplebar/simplebar.min.css" rel="st') }}ylesheet" >
    
    {{-- <!-- Color Picker Css --> --}}
    <link rel="stylesheet" href="{{ asset('assets/libs/flatpickr/flatpick') }}r.min.css">
    <link rel="stylesheet" href="{{ asset('assets/libs/@simonwep/pickr/themes/nan') }}o.min.css">

    {{-- <!-- Choices Css --> --}}
    <link rel="stylesheet" href="{{ asset('assets/libs/choices.js/public/assets/styles/choice') }}s.min.css">

    {{-- <!-- FlatPickr CSS --> --}}
    <link rel="stylesheet" href="{{ asset('assets/libs/flatpickr/flatpick') }}r.min.css">

    {{-- <!-- Auto Complete CSS --> --}}
    <link rel="stylesheet" href="{{ asset('assets/libs/@tarekraafat/autocomplete.js/css/autoCom') }}plete.css">


</head>

<body>

    {{-- <!-- Start Switcher --> --}}
<div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header border-bottom d-block p-0">
        <div class="d-flex align-items-center justify-content-between p-3">
            <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <nav class="border-top border-block-start-dashed">
            <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist">
                <button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab" data-bs-target="#switcher-home"
                    type="button" role="tab" aria-controls="switcher-home" aria-selected="true">Theme Styles</button>
                <button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab" data-bs-target="#switcher-profile"
                    type="button" role="tab" aria-controls="switcher-profile" aria-selected="false">Theme Colors</button>
            </div>
        </nav>
    </div>
    <div class="offcanvas-body">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel" aria-labelledby="switcher-home-tab"
                tabindex="0">
                <div class="">
                    <p class="switcher-style-head">Theme Color Mode:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-light-theme">
                                    Light
                                </label>
                                <input class="form-check-input" type="radio" name="theme-style" id="switcher-light-theme"
                                    checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-dark-theme">
                                    Dark
                                </label>
                                <input class="form-check-input" type="radio" name="theme-style" id="switcher-dark-theme">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Directions:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-ltr">
                                    LTR
                                </label>
                                <input class="form-check-input" type="radio" name="direction" id="switcher-ltr" checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-rtl">
                                    RTL
                                </label>
                                <input class="form-check-input" type="radio" name="direction" id="switcher-rtl">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Navigation Styles:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-vertical">
                                    Vertical
                                </label>
                                <input class="form-check-input" type="radio" name="navigation-style" id="switcher-vertical"
                                    checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-horizontal">
                                    Horizontal
                                </label>
                                <input class="form-check-input" type="radio" name="navigation-style"
                                    id="switcher-horizontal">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navigation-menu-styles">
                    <p class="switcher-style-head">Vertical & Horizontal Menu Styles:</p>
                    <div class="row switcher-style gx-0 pb-2 gy-2">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-menu-click">
                                    Menu Click
                                </label>
                                <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                    id="switcher-menu-click">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-menu-hover">
                                    Menu Hover
                                </label>
                                <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                    id="switcher-menu-hover">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-icon-click">
                                    Icon Click
                                </label>
                                <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                    id="switcher-icon-click">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-icon-hover">
                                    Icon Hover
                                </label>
                                <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                    id="switcher-icon-hover">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidemenu-layout-styles">
                    <p class="switcher-style-head">Sidemenu Layout Styles:</p>
                    <div class="row switcher-style gx-0 pb-2 gy-2">
                        <div class="col-sm-6">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-default-menu">
                                    Default Menu
                                </label>
                                <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                    id="switcher-default-menu" checked>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-closed-menu">
                                    Closed Menu
                                </label>
                                <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                    id="switcher-closed-menu">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-icontext-menu">
                                    Icon Text
                                </label>
                                <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                    id="switcher-icontext-menu">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-icon-overlay">
                                    Icon Overlay
                                </label>
                                <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                    id="switcher-icon-overlay">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-detached">
                                    Detached
                                </label>
                                <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                    id="switcher-detached">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-double-menu">
                                    Double Menu
                                </label>
                                <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                    id="switcher-double-menu">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Page Styles:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-regular">
                                    Regular
                                </label>
                                <input class="form-check-input" type="radio" name="page-styles" id="switcher-regular"
                                checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-classic">
                                    Classic
                                </label>
                                <input class="form-check-input" type="radio" name="page-styles" id="switcher-classic">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-modern">
                                    Modern
                                </label>
                                <input class="form-check-input" type="radio" name="page-styles" id="switcher-modern">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Layout Width Styles:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-default-width">
                                    compact
                                </label>
                                <input class="form-check-input" type="radio" name="layout-width" id="switcher-default-width"
                                   >
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-full-width">
                                    Full Width
                                </label>
                                <input class="form-check-input" type="radio" name="layout-width" id="switcher-full-width"  checked>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-boxed">
                                    Boxed
                                </label>
                                <input class="form-check-input" type="radio" name="layout-width" id="switcher-boxed">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Menu Positions:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-menu-fixed">
                                    Fixed
                                </label>
                                <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-fixed"
                                    checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-menu-scroll">
                                    Scrollable
                                </label>
                                <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-scroll">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Header Positions:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-header-fixed">
                                    Fixed
                                </label>
                                <input class="form-check-input" type="radio" name="header-positions"
                                    id="switcher-header-fixed" checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-header-scroll">
                                    Scrollable
                                </label>
                                <input class="form-check-input" type="radio" name="header-positions"
                                    id="switcher-header-scroll">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Loader:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-loader-enable">
                                    Enable
                                </label>
                                <input class="form-check-input" type="radio" name="page-loader"
                                    id="switcher-loader-enable">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-loader-disable">
                                    Disable
                                </label>
                                <input class="form-check-input" type="radio" name="page-loader"
                                    id="switcher-loader-disable" checked>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel" aria-labelledby="switcher-profile-tab" tabindex="0">
                <div>
                    <div class="theme-colors">
                        <p class="switcher-style-head">Menu Colors:</p>
                        <div class="d-flex switcher-style pb-2">
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors"
                                    id="switcher-menu-light" checked>
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors"
                                    id="switcher-menu-dark">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors"
                                    id="switcher-menu-primary">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Gradient Menu" type="radio" name="menu-colors"
                                    id="switcher-menu-gradient">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-transparent"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu"
                                    type="radio" name="menu-colors" id="switcher-menu-transparent">
                            </div>
                        </div>
                        <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically change from below Theme Primary color picker</div>
                    </div>
                    <div class="theme-colors">
                        <p class="switcher-style-head">Header Colors:</p>
                        <div class="d-flex switcher-style pb-2">
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Light Header" type="radio" name="header-colors"
                                    id="switcher-header-light" checked>
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Dark Header" type="radio" name="header-colors"
                                    id="switcher-header-dark">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Color Header" type="radio" name="header-colors"
                                    id="switcher-header-primary">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Gradient Header" type="radio" name="header-colors"
                                    id="switcher-header-gradient">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Transparent Header" type="radio" name="header-colors"
                                    id="switcher-header-transparent">
                            </div>
                        </div>
                        <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically change from below Theme Primary color picker</div>
                    </div>
                    <div class="theme-colors">
                        <p class="switcher-style-head">Theme Primary:</p>
                        <div class="d-flex flex-wrap align-items-center switcher-style">
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary-1" type="radio"
                                    name="theme-primary" id="switcher-primary">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary-2" type="radio"
                                    name="theme-primary" id="switcher-primary1">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary-3" type="radio" name="theme-primary"
                                    id="switcher-primary2">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary-4" type="radio" name="theme-primary"
                                    id="switcher-primary3">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary-5" type="radio" name="theme-primary"
                                    id="switcher-primary4">
                            </div>
                            <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                                <div class="theme-container-primary"></div>
                                <div class="pickr-container-primary"  onchange="updateChartColor(this.value)"></div>
                            </div>
                        </div>
                    </div>
                    <div class="theme-colors">
                        <p class="switcher-style-head">Theme Background:</p>
                        <div class="d-flex flex-wrap align-items-center switcher-style">
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-bg-1" type="radio"
                                    name="theme-background" id="switcher-background">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-bg-2" type="radio"
                                    name="theme-background" id="switcher-background1">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-bg-3" type="radio" name="theme-background"
                                    id="switcher-background2">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-bg-4" type="radio"
                                    name="theme-background" id="switcher-background3">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-bg-5" type="radio"
                                    name="theme-background" id="switcher-background4">
                            </div>
                            <div class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                                <div class="theme-container-background"></div>
                                <div class="pickr-container-background"></div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-image mb-3">
                        <p class="switcher-style-head">Menu With Background Image:</p>
                        <div class="d-flex flex-wrap align-items-center switcher-style">
                            <div class="form-check switch-select m-2">
                                <input class="form-check-input bgimage-input bg-img1" type="radio"
                                    name="menu-background" id="switcher-bg-img">
                            </div>
                            <div class="form-check switch-select m-2">
                                <input class="form-check-input bgimage-input bg-img2" type="radio"
                                    name="menu-background" id="switcher-bg-img1">
                            </div>
                            <div class="form-check switch-select m-2">
                                <input class="form-check-input bgimage-input bg-img3" type="radio" name="menu-background"
                                    id="switcher-bg-img2">
                            </div>
                            <div class="form-check switch-select m-2">
                                <input class="form-check-input bgimage-input bg-img4" type="radio"
                                    name="menu-background" id="switcher-bg-img3">
                            </div>
                            <div class="form-check switch-select m-2">
                                <input class="form-check-input bgimage-input bg-img5" type="radio"
                                    name="menu-background" id="switcher-bg-img4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-block canvas-footer flex-wrap">
                <a href="javascript:void(0);" id="reset-all" class="btn btn-danger m-1 w-100">Reset</a> 
            </div>
        </div>
    </div>
</div>
{{-- <!-- End Switcher --> --}}


     {{-- <!-- Loader --> --}}
<div id="loader" >
    <img src="{{ asset('assets/images/media/loader.s') }}vg" alt="">
</div>
{{-- <!-- Loader --> --}}

    <div class="page">
         {{-- <!-- app-header --> --}}
<header class="app-header sticky" id="header">

    {{-- <!-- Start::main-header-container --> --}}
    <div class="main-header-container container-fluid">

        {{-- <!-- Start::header-content-left --> --}}
        <div class="header-content-left">

            {{-- <!-- Start::header-element --> --}}
            <div class="header-element">
                <div class="horizontal-logo">
                    <a href="index.html" class="header-logo">
                        <img src="{{ asset('assets/images/brand-logos/desktop-logo.png" alt="logo" class="des') }}ktop-logo">
                        <img src="{{ asset('assets/images/brand-logos/toggle-logo.png" alt="logo" class="to') }}ggle-logo">
                        <img src="{{ asset('assets/images/brand-logos/desktop-dark.png" alt="logo" class="des') }}ktop-dark">
                        <img src="{{ asset('assets/images/brand-logos/toggle-dark.png" alt="logo" class="to') }}ggle-dark">
                    </a>
                </div>
            </div>
            {{-- <!-- End::header-element --> --}}

            {{-- <!-- Start::header-element --> --}}
            <div class="header-element">
                {{-- <!-- Start::header-link --> --}}
                <a aria-label="Hide Sidebar" class="sidemenu-toggle header-link" data-bs-toggle="sidebar"
                    href="javascript:void(0);">
                    <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon menu-btn" width="32" height="32"
                        fill="#000000" viewBox="0 0 256 256">
                        <path
                            d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z">
                        </path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon menu-btn-close" width="32"
                        height="32" fill="#000000" viewBox="0 0 256 256">
                        <path
                            d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z">
                        </path>
                    </svg>
                </a>
                {{-- <!-- End::header-link --> --}}
            </div>
            {{-- <!-- End::header-element --> --}}


        </div>
        {{-- <!-- End::header-content-left --> --}}

        {{-- <!-- Start::header-content-right --> --}}
        <ul class="header-content-right">

            {{-- <!-- Start::header-element --> --}}
            <li class="header-element d-md-none d-block">
                <a href="javascript:void(0);" class="header-link" data-bs-toggle="modal"
                    data-bs-target="#header-responsive-search">
                    {{-- <!-- Start::header-link-icon --> --}}
                    <i class="bi bi-search header-link-icon"></i>
                    {{-- <!-- End::header-link-icon --> --}}
                </a>
            </li>
            {{-- <!-- End::header-element --> --}}

            {{-- <!-- Start::header-element --> --}}
            <li class="header-element search-dropdown dropdown d-md-block d-none">
                {{-- <!-- Start::header-link|dropdown-toggle --> --}}
                <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside"
                    data-bs-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" width="32" height="32"
                        fill="#000000" viewBox="0 0 256 256">
                        <path
                            d="M228.24,219.76l-51.38-51.38a86.15,86.15,0,1,0-8.48,8.48l51.38,51.38a6,6,0,0,0,8.48-8.48ZM38,112a74,74,0,1,1,74,74A74.09,74.09,0,0,1,38,112Z">
                        </path>
                    </svg>
                </a>
                <ul class="main-header-dropdown dropdown-menu dropdown-menu-end overflow-visible"
                    data-popper-placement="none">
                    <li class="px-3 py-2">
                        <div class="header-element header-search d-md-block d-none my-auto">
                            {{-- <!-- Start::header-link --> --}}
                            <input type="text" class="header-search-bar form-control" id="header-search"
                                placeholder="Search for Results..." spellcheck=false autocomplete="off"
                                autocapitalize="off">
                            <a href="javascript:void(0);" class="header-search-icon border-0">
                                <i class="bi bi-search"></i>
                            </a>
                            {{-- <!-- End::header-link --> --}}
                        </div>
                    </li>
                </ul>
            </li>
            {{-- <!-- End::header-element --> --}}

            {{-- <!-- Start::header-element --> --}}
            <li class="header-element country-selector dropdown">
                {{-- <!-- Start::header-link|dropdown-toggle --> --}}
                <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside"
                    data-bs-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" viewBox="0 0 256 256">
                        <rect width="256" height="256" fill="none" />
                        <polyline points="240 216 184 104 128 216" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                        <line x1="144" y1="184" x2="224" y2="184" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                        <line x1="96" y1="32" x2="96" y2="56" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="16" />
                        <line x1="32" y1="56" x2="160" y2="56" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="16" />
                        <path d="M128,56a96,96,0,0,1-96,96" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="16" />
                        <path d="M69.47,88A96,96,0,0,0,160,152" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="16" />
                    </svg>
                </a>
                {{-- <!-- End::header-link|dropdown-toggle --> --}}
                <ul class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                    <li>
                        <div class="py-2 px-3">
                            <input class="form-control form-control-sm" type="text" placeholder="Search Here"
                                aria-label=".form-control-sm example">
                        </div>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="javascript:void(0);">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-rounded avatar-xs lh-1 me-2">
                                    <img src="{{ asset('assets/images/flags/us_flag.jpg"') }} alt="img">
                                </span>
                                English
                            </div>
                            <span class="text-muted fs-12">(US)</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="javascript:void(0);">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-rounded avatar-xs lh-1 me-2">
                                    <img src="{{ asset('assets/images/flags/spain_flag.jpg"') }} alt="img">
                                </span>
                                español
                            </div>
                            <span class="text-muted fs-12">(ES)</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="javascript:void(0);">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-rounded avatar-xs lh-1 me-2">
                                    <img src="{{ asset('assets/images/flags/french_flag.jpg"') }} alt="img">
                                </span>
                                français
                            </div>
                            <span class="text-muted fs-12">(FR)</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="javascript:void(0);">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-rounded avatar-xs lh-1 me-2">
                                    <img src="{{ asset('assets/images/flags/uae_flag.jpg"') }} alt="img">
                                </span>
                                عربي
                            </div>
                            <span class="text-muted fs-12">(AE)</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="javascript:void(0);">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-rounded avatar-xs lh-1 me-2">
                                    <img src="{{ asset('assets/images/flags/germany_flag.jpg"') }} alt="img">
                                </span>
                                DE
                            </div>
                            <span class="text-muted fs-12">(US)</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="javascript:void(0);">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-rounded avatar-xs lh-1 me-2">
                                    <img src="{{ asset('assets/images/flags/china_flag.jpg"') }} alt="img">
                                </span>
                                中国人
                            </div>
                            <span class="text-muted fs-12">(CN)</span>
                        </a>
                    </li>
                </ul>
            </li>
            {{-- <!-- End::header-element --> --}}

            {{-- <!-- Start::header-element --> --}}
            <li class="header-element header-theme-mode">
                {{-- <!-- Start::header-link|layout-setting --> --}}
                <a href="javascript:void(0);" class="header-link layout-setting">
                    <span class="light-layout">
                        {{-- <!-- Start::header-link-icon --> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" viewBox="0 0 256 256">
                            <rect width="256" height="256" fill="none" />
                            <path d="M108.11,28.11A96.09,96.09,0,0,0,227.89,147.89,96,96,0,1,1,108.11,28.11Z"
                                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="16" />
                        </svg>
                        {{-- <!-- End::header-link-icon --> --}}
                    </span>
                    <span class="dark-layout">
                        {{-- <!-- Start::header-link-icon --> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" viewBox="0 0 256 256">
                            <rect width="256" height="256" fill="none" />
                            <line x1="128" y1="40" x2="128" y2="32" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                            <circle cx="128" cy="128" r="56" fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="16" />
                            <line x1="64" y1="64" x2="56" y2="56" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                            <line x1="64" y1="192" x2="56" y2="200" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                            <line x1="192" y1="64" x2="200" y2="56" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                            <line x1="192" y1="192" x2="200" y2="200" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                            <line x1="40" y1="128" x2="32" y2="128" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                            <line x1="128" y1="216" x2="128" y2="224" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                            <line x1="216" y1="128" x2="224" y2="128" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                        </svg>
                        {{-- <!-- End::header-link-icon --> --}}
                    </span>
                </a>
                {{-- <!-- End::header-link|layout-setting --> --}}
            </li>
            {{-- <!-- End::header-element --> --}}

            {{-- <!-- Start::header-element --> --}}
            <li class="header-element cart-dropdown dropdown">
                {{-- <!-- Start::header-link|dropdown-toggle --> --}}
                <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside"
                    data-bs-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" viewBox="0 0 256 256">
                        <rect width="256" height="256" fill="none" />
                        <rect x="32" y="48" width="192" height="160" rx="8" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                        <path d="M168,88a40,40,0,0,1-80,0" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="16" />
                    </svg>
                    <span class="badge bg-primary rounded-pill header-icon-badge" id="cart-icon-badge">5</span>
                </a>
                {{-- <!-- End::header-link|dropdown-toggle --> --}}
                {{-- <!-- Start::main-header-dropdown --> --}}
                <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                    <div class="p-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 fs-16">Cart Items</p>
                            <span class="badge bg-success-transparent ms-1 fs-12" id="cart-data">5 Items</span>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <ul class="list-unstyled mb-0" id="header-cart-items-scroll">
                        <li class="dropdown-item">
                            <div class="cart-dropdown-item">
                                <div class="d-flex align-items-center  gap-3 mb-2">
                                    <div class="lh-1">
                                        <span class="avatar avatar-xl p-1 bg-primary-transparent">
                                            <img src="{{ asset('assets/images/ecommerce/png/1.png"') }} alt="img">
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p class="fs-11 fw-medium mb-0 text-muted">Puma</p>
                                            <h6 class="fw-semibold mb-0 mt-1">$75<span
                                                    class="text-decoration-line-through text-muted fw-normal ms-1 fs-13 d-inline-block">$99</span>
                                            </h6>
                                        </div>
                                        <a href="cart.html" class="fw-semibold">Classic tufted leather sofa</a>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span class="text-muted">Quantity : <span
                                                    class="text-default fs-14 fw-medium">4
                                                    x
                                                    $32</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex rounded flex-nowrap order-qnt me-1"> 
                                     <a
                                            href="javascript:void(0);"
                                            class="badge bg-white p-1 border text-muted fs-13 me-2 product-quantity-minus"><i
                                                class="ri-subtract-line"></i> </a> <input type="text"
                                            class="form-control form-control-cart border-0 text-center w-100"
                                            aria-label="quantity" id="product-qty1" value="3"> <a
                                            href="javascript:void(0);"
                                            class="badge bg-white p-1 border text-muted fs-13 me-2 product-quantity-plus"><i
                                                class="ri-add-line"></i> </a> </div>
                                    <div class="d-flex gap-2">
                                        <a href="wishlist.html"
                                            class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light border" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Wishlist"><i class="ri-heart-line"></i></a>
                                        <a href="javascript:void(0);"
                                            class="header-cart-remove dropdown-item-close btn btn-sm btn-icon btn-danger-light"><i
                                                class="ri-close-line fs-15"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="cart-dropdown-item">
                                <div class="d-flex align-items-center  gap-3 mb-2">
                                    <div class="lh-1">
                                        <span class="avatar avatar-xl p-1 bg-secondary-transparent">
                                            <img src="{{ asset('assets/images/ecommerce/png/14.png"') }} alt="img">
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p class="fs-11 fw-medium mb-0 text-muted">Puma</p>
                                            <h6 class="fw-semibold mb-0 mt-1">$120<span
                                                    class="text-decoration-line-through text-muted fw-normal ms-1 fs-13 d-inline-block">$149</span>
                                            </h6>
                                        </div>
                                        <a href="cart.html" class="fw-semibold">Polaroid Medium Camera</a>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span class="text-muted">Quantity : <span
                                                    class="text-default fs-13 fw-medium">12 x
                                                    $112</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex rounded flex-nowrap order-qnt me-1"> <a
                                            href="javascript:void(0);"
                                            class="badge bg-white p-1 border text-muted fs-13 me-2 product-quantity-minus"><i
                                                class="ri-subtract-line"></i> </a> <input type="text"
                                            class="form-control form-control-cart border-0 text-center w-100"
                                            aria-label="quantity" id="product-qty2" value="2"> <a
                                            href="javascript:void(0);"
                                            class="badge bg-white p-1 border text-muted fs-13 me-2 product-quantity-plus"><i
                                                class="ri-add-line"></i> </a> </div>
                                    <div class="d-flex gap-2">
                                        <a href="wishlist.html"
                                            class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light border" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Wishlist"><i class="ri-heart-line"></i></a>
                                        <a href="javascript:void(0);"
                                            class="header-cart-remove dropdown-item-close btn btn-sm btn-icon btn-danger-light"><i
                                                class="ri-close-line fs-15"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="cart-dropdown-item">
                                <div class="d-flex align-items-center  gap-3 mb-2">
                                    <div class="lh-1">
                                        <span class="avatar avatar-xl p-1 bg-success-transparent">
                                            <img src="{{ asset('assets/images/ecommerce/png/33.png"') }} alt="img">
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p class="fs-11 fw-medium mb-0 text-muted">Puma</p>
                                            <h6 class="fw-semibold mb-0 mt-1">$30<span
                                                    class="text-decoration-line-through text-muted fw-normal ms-1 fs-13 d-inline-block">$49</span>
                                            </h6>
                                        </div>
                                        <a href="cart.html" class="fw-semibold">Creed Aventus Luxury Perfume</a>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span class="text-muted">Quantity : <span
                                                    class="text-default fs-13 fw-medium">9 x
                                                    $64</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex rounded flex-nowrap order-qnt me-1"> <a
                                            href="javascript:void(0);"
                                            class="badge bg-white p-1 border text-muted fs-13 me-2 product-quantity-minus"><i
                                                class="ri-subtract-line"></i> </a> <input type="text"
                                            class="form-control form-control-cart border-0 text-center w-100"
                                            aria-label="quantity" id="product-qty3" value="4"> <a
                                            href="javascript:void(0);"
                                            class="badge bg-white p-1 border text-muted fs-13 me-2 product-quantity-plus"><i
                                                class="ri-add-line"></i> </a> </div>
                                    <div class="d-flex gap-2">
                                        <a href="wishlist.html"
                                        class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light border" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Wishlist"><i class="ri-heart-line"></i></a>
                                        <a href="javascript:void(0);"
                                            class="header-cart-remove dropdown-item-close btn btn-sm btn-icon btn-danger-light"><i
                                                class="ri-close-line fs-15"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="cart-dropdown-item">
                                <div class="d-flex align-items-center  gap-3 mb-2">
                                    <div class="lh-1">
                                        <span class="avatar avatar-xl p-1 bg-warning-transparent">
                                            <img src="{{ asset('assets/images/ecommerce/png/34.png"') }} alt="img">
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p class="fs-11 fw-medium mb-0 text-muted">Puma</p>
                                            <h6 class="fw-semibold mb-0 mt-1">$70<span
                                                    class="text-decoration-line-through text-muted fw-normal ms-1 fs-13 d-inline-block">$129</span>
                                            </h6>
                                        </div>
                                        <a href="cart.html" class="fw-semibold">Ethan Allen Wall Clock</a>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span class="text-muted">Quantity : <span
                                                    class="text-default fs-13 fw-medium">7 x
                                                    $230</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex rounded flex-nowrap order-qnt me-1"> <a
                                            href="javascript:void(0);"
                                            class="badge bg-white p-1 border text-muted fs-13 me-2 product-quantity-minus"><i
                                                class="ri-subtract-line"></i> </a> <input type="text"
                                            class="form-control form-control-cart border-0 text-center w-100"
                                            aria-label="quantity" id="product-qty4" value="1"> <a
                                            href="javascript:void(0);"
                                            class="badge bg-white p-1 border text-muted fs-13 me-2 product-quantity-plus"><i
                                                class="ri-add-line"></i> </a> </div>
                                    <div class="d-flex gap-2">
                                        <a href="wishlist.html"
                                        class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light border" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Wishlist"><i class="ri-heart-line"></i></a>
                                        <a href="javascript:void(0);"
                                            class="header-cart-remove dropdown-item-close btn btn-sm btn-icon btn-danger-light"><i
                                                class="ri-close-line fs-15"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="cart-dropdown-item">
                                <div class="d-flex align-items-center  gap-3 mb-2">
                                    <div class="lh-1">
                                        <span class="avatar avatar-xl p-1 bg-pink-transparent">
                                            <img src="{{ asset('assets/images/ecommerce/png/31.png"') }} alt="img">
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p class="fs-11 fw-medium mb-0 text-muted">Puma</p>
                                            <h6 class="fw-semibold mb-0 mt-1">$200<span
                                                    class="text-decoration-line-through text-muted fw-normal ms-1 fs-13 d-inline-block">$249</span>
                                            </h6>
                                        </div>
                                        <a href="cart.html" class="fw-semibold">Louis Vuitton Handbag</a>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span class="text-muted">Quantity : <span
                                                    class="text-default fs-13 fw-medium">5 x
                                                    $52</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex rounded flex-nowrap order-qnt me-1"> <a
                                            href="javascript:void(0);"
                                            class="badge bg-white p-1 border text-muted fs-13 me-2 product-quantity-minus"><i
                                                class="ri-subtract-line"></i> </a> <input type="text"
                                            class="form-control form-control-cart border-0 text-center w-100"
                                            aria-label="quantity" id="product-qty5" value="3"> <a
                                            href="javascript:void(0);"
                                            class="badge bg-white p-1 border text-muted fs-13 me-2 product-quantity-plus"><i
                                                class="ri-add-line"></i> </a> </div>
                                    <div class="d-flex gap-2">
                                        <a href="wishlist.html"
                                        class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light border" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Wishlist"><i class="ri-heart-line"></i></a>
                                        <a href="javascript:void(0);"
                                            class="header-cart-remove dropdown-item-close btn btn-sm btn-icon btn-danger-light"><i
                                                class="ri-close-line fs-15"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="p-3 empty-header-item border-top">
                        <div class="text-center d-grid">
                            <a href="checkout.html" class="text-primary text-decoration-underline">Proceed to checkout
                                <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                    <div class="p-5 empty-item d-none">
                        <div class="text-center">
                            <span class="avatar avatar-xl avatar-rounded bg-primary-transparent">
                                <span class="avatar avatar-lg avatar-rounded bg-primary">
                                    <i class="ri-shopping-cart-2-line fs-2"></i>
                                </span>
                            </span>
                            <h6 class="fw-semibold mb-1 mt-3">Your Cart is Empty</h6>
                            <span class="mb-3 fw-normal fs-13 d-block">Add some items to make it happy :)</span>
                        </div>
                    </div>
                </div>
                {{-- <!-- End::main-header-dropdown --> --}}
            </li>
            {{-- <!-- End::header-element --> --}}

            {{-- <!-- Start::header-element --> --}}
            <li class="header-element notifications-dropdown d-xl-block d-none dropdown">
                {{-- <!-- Start::header-link|dropdown-toggle --> --}}
                <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" id="messageDropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon animate-bell" viewBox="0 0 256 256">
                        <rect width="256" height="256" fill="none" />
                        <path d="M96,192a32,32,0,0,0,64,0" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="16" />
                        <path d="M184,24a102.71,102.71,0,0,1,36.29,40" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                        <path d="M35.71,64A102.71,102.71,0,0,1,72,24" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                        <path
                            d="M56,112a72,72,0,0,1,144,0c0,35.82,8.3,56.6,14.9,68A8,8,0,0,1,208,192H48a8,8,0,0,1-6.88-12C47.71,168.6,56,147.81,56,112Z"
                            fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="16" />
                    </svg>
                    <span class="header-icon-pulse bg-secondary rounded pulse pulse-secondary"></span>
                </a>
                {{-- <!-- End::header-link|dropdown-toggle --> --}}
                {{-- <!-- Start::main-header-dropdown --> --}}
                <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                    <div class="p-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 fs-16">Notifications</p>
                            <a href="javascript:void(0);" class="badge bg-secondary-transparent"
                                id="notifiation-data">15 Unread</a>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="pb-0 px-3">
                        <ul class="nav nav-tabs mb-0 tab-style-8 scaleX" role="tablist">
                            <li class="nav-item" role="presentation"> <button class="nav-link active" id="activity-tab"
                                    data-bs-toggle="tab" data-bs-target="#activity-tab-pane" type="button" role="tab"
                                    aria-controls="activity-tab-pane" aria-selected="true">Activity</button> </li>
                            <li class="nav-item" role="presentation"> <button class="nav-link" id="notes-tab"
                                    data-bs-toggle="tab" data-bs-target="#notes-tab-pane" type="button" role="tab"
                                    aria-controls="notes-tab-pane" aria-selected="false" tabindex="-1">Notes</button>
                            </li>
                            <li class="nav-item" role="presentation"> <button class="nav-link" id="alert-tab"
                                    data-bs-toggle="tab" data-bs-target="#alert-tab-pane" type="button" role="tab"
                                    aria-controls="alert-tab-pane" aria-selected="false" tabindex="-1">Alerts</button>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="tab-content">
                        <div class="tab-pane show active p-0 border-0" id="activity-tab-pane" role="tabpanel"
                            aria-labelledby="activity-tab" tabindex="0">
                            <ul class="list-unstyled mb-0" id="header-notification-scroll1">
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2 lh-1"> <span
                                                class="avatar avatar-md avatar-rounded svg-white">
                                                <img src="{{ asset('assets/images/faces/2.jpg" alt="im') }}g"> </span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-start justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold">Way to go Jack Miller ! &#127881;</p>
                                                <div class="fw-normal fs-13 header-notification-text text-truncate">
                                                    Congratulations on snagging the Monthly Best Seller Gold Badge !</div>
                                                <span class="text-muted fs-12">2 Min
                                                        Ago</span>
                                            </div>
                                            <div> <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted dropdown-item-close1"><i
                                                        class="ri-close-line fs-5"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2 lh-1"> <span
                                                class="avatar avatar-md bg-primary-transparent avatar-rounded svg-white">
                                               SM </span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-start justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold">You’ve Got Mail!</p>
                                                <div class="fw-normal fs-13 header-notification-text text-truncate">
                                                    Natalie has sent you a new message. Click here to view it.</div>
                                                    <span class="text-muted fs-12">5 Min
                                                        Ago</span>
                                            </div>
                                            <div> <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted dropdown-item-close1"><i
                                                        class="ri-close-line fs-5"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2 lh-1"> <span
                                                class="avatar avatar-md avatar-rounded svg-white">
                                                <img src="{{ asset('assets/images/faces/6.jpg" alt="im') }}g"> </span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-start justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"> Application Approved By Team &#128640;.</p>
                                                <div class="fw-normal fs-13 header-notification-text text-truncate">
                                                    Congratulations! Your project application has been approved.</div>
                                                    <span class="text-muted fs-12">Yesterday</span>
                                            </div>
                                            <div> <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted dropdown-item-close1"><i
                                                        class="ri-close-line fs-5"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2 lh-1"> <span
                                                class="avatar avatar-md bg-secondary-transparent avatar-rounded svg-white">
                                                TR </span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-start justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold">New Connection Request</p>
                                                <div class="fw-normal fs-13 header-notification-text text-truncate">
                                                    Peter has sent you a connection request, please check your connection requests.</div>
                                                    <span class="text-muted fs-12">2 Days Ago</span>
                                            </div>
                                            <div> <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted dropdown-item-close1"><i
                                                        class="ri-close-line fs-5"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2 lh-1"> <span
                                                class="avatar avatar-md avatar-rounded svg-white">
                                                <img src="{{ asset('assets/images/faces/14.jpg" alt="im') }}g"> </span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-start justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold">Whoo! Your Order Is On the Way &#128666;.</p>
                                                <div class="fw-normal fs-13 header-notification-text text-truncate">
                                                    Great news! Your order is now on its way to you.</div>
                                                    <span class="text-muted fs-12">1 Hr Ago</span>
                                            </div>
                                            <div> <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted dropdown-item-close1"><i
                                                        class="ri-close-line fs-5"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane p-0 border-0" id="notes-tab-pane" role="tabpanel"
                            aria-labelledby="notes-tab" tabindex="0">
                            <ul class="list-unstyled mb-0" id="header-notification-scroll2">
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2 lh-1"> <span
                                                class="avatar avatar-md avatar-rounded bg-primary">
                                                <i class="ri-file-text-line fs-16"></i> </span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-start justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="javascript:void(0);">This Month Notes
                                                        Prepared</a></p>
                                                <div class="fw-normal fs-13 header-notification-text text-truncate">
                                                    Your notes for this month are ready and available. Please review them at your convenience.</div>
                                                <span class="fs-13 text-muted">2 min ago</span>
                                            </div>
                                            <div>
                                            <a href="javascript:void(0);"
                                                class="min-w-fit-content text-muted dropdown-item-close1"><i
                                                    class="ri-close-line fs-5"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2 lh-1"> <span
                                                class="avatar avatar-md avatar-rounded bg-secondary">
                                                <i class="ri-box-3-line fs-16"></i></span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-start justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="javascript:void(0);">Order <span
                                                            class="text-success">#54321</span> has been shipped.</a></p>
                                                <div class="fw-normal fs-13 header-notification-text text-truncate">
                                                    Order is on its way. You can track your shipment using the tracking number provided.</div>
                                                <span class="fs-13 text-muted">2 min ago</span>
                                            </div>
                                            <div> <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted dropdown-item-close1"><i
                                                        class="ri-close-line fs-5"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2 lh-1"> <span
                                                class="avatar avatar-md avatar-rounded bg-success">
                                                <i class="ri-mail-open-line fs-16"></i> </span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-start justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="javascript:void(0);">A Email Will be
                                                        sent to customer.</a></p>
                                                <div class="fw-normal fs-13 header-notification-text text-truncate">
                                                    An email regarding your recent order will be sent to the customer shortly.</div>
                                                <span class="fs-13 text-muted">10 Days ago</span>
                                            </div>
                                            <div> <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted dropdown-item-close1"><i
                                                        class="ri-close-line fs-5"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2 lh-1"> <span class="avatar avatar-md avatar-rounded bg-info">
                                                <i class="ri-bank-card-line fs-16"></i> </span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-start justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="javascript:void(0);">Payment Form
                                                        Will be Activated.</a></p>
                                                <div class="fw-normal fs-13 header-notification-text text-truncate">
                                                            The payment form will be activated shortly. Please ensure that all necessary details are correctly filled out to proceed with the payment process.</div>
                                                <span class="fs-13 text-muted">Yesterday</span>
                                            </div>
                                            <div> <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted dropdown-item-close1"><i
                                                        class="ri-close-line fs-5"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2 lh-1"> <span
                                                class="avatar avatar-md avatar-rounded bg-warning">
                                                <i class="ri-group-line fs-16"></i> </span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-start justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="javascript:void(0);">Meeting will be
                                                        held tomorrow</a></p>
                                                <div class="fw-normal fs-13 header-notification-text text-truncate">
                                                    This is a reminder that a meeting will be held tomorrow. </div>
                                                <span class="fs-13 text-muted">2 days ago</span>
                                            </div>
                                            <div> <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted dropdown-item-close1"><i
                                                        class="ri-close-line fs-5"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane p-0 border-0" id="alert-tab-pane" role="tabpanel"
                            aria-labelledby="alert-tab" tabindex="0">
                            <ul class="list-unstyled mb-0" id="header-notification-scroll3">
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2 lh-1"> <span
                                                class="avatar avatar-md avatar-rounded bg-primary-transparent">
                                                <i class="ri-mail-line fs-16"></i> </span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-start justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="javascript:void(0);">Mail Login with
                                                        Different Device</a></p>
                                                <div class="fw-normal fs-13 header-notification-text text-truncate">
                                                    Your email account has been accessed from a new device. If this was you, no action is needed. </div>
                                                <span class="fs-13 text-muted">2 min ago</span>
                                            </div>
                                            <div> <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted dropdown-item-close1"><i
                                                        class="ri-close-line fs-5"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2 lh-1"> <span
                                                class="avatar avatar-md avatar-rounded bg-secondary-transparent">
                                                <i class="ri-folder-warning-line fs-16"></i></span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-start justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="javascript:void(0);">Your
                                                        Subscription was expaired.</a></p>
                                                <div class="fw-normal fs-13 header-notification-text text-truncate">
                                                    Your subscription has expired. Please renew your subscription to continue enjoying uninterrupted access to our services. </div>
                                                <span class="fs-13 text-muted">15 min ago</span>
                                            </div>
                                            <div> <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted dropdown-item-close1"><i
                                                        class="ri-close-line fs-5"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2 lh-1"> <span
                                                class="avatar avatar-md avatar-rounded bg-success-transparent">
                                                <i class="ri-database-2-line fs-16"></i> </span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-start justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="javascript:void(0);">Your storage
                                                        space is running low.</a></p>
                                                <div class="fw-normal fs-13 header-notification-text text-truncate">
                                                    Your storage space is running low. Please free up some space or upgrade your storage plan to avoid any interruptions. </div>
                                                <span class="fs-13 text-muted">23 min ago</span>
                                            </div>
                                            <div> <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted dropdown-item-close1"><i
                                                        class="ri-close-line fs-5"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2 lh-1"> <span
                                                class="avatar avatar-md avatar-rounded bg-info-transparent">
                                                <i class="ri-bank-card-line fs-16"></i> </span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-start justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="javascript:void(0);">Your changes
                                                        have been saved.</a></p>
                                               <div class="fw-normal fs-13 header-notification-text text-truncate">
                                                Your changes have been saved. If you need to make any more adjustments, feel free to do so. </div>
                                                <span class="fs-13 text-muted">Yesterday</span>
                                            </div>
                                            <div> <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted dropdown-item-close1"><i
                                                        class="ri-close-line fs-5"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2 lh-1"> <span
                                                class="avatar avatar-md avatar-rounded bg-warning-transparent">
                                                <i class="ri-stack-line fs-16"></i> </span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-start justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="javascript:void(0);">New updates are
                                                        available soon.</a></p>
                                                <div class="fw-normal fs-13 header-notification-text text-truncate">
                                                    Exciting new updates are on the way! Stay tuned for enhancements and new features that will be available soon. </div>
                                                <span class="fs-13 text-muted">2 days ago</span>
                                            </div>
                                            <div> <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted dropdown-item-close1"><i
                                                        class="ri-close-line fs-5"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-3 empty-header-item1 border-top">
                        <div class="d-grid text-center">
                            <a href="checkout.html" class="text-primary text-decoration-underline">View All<i
                                    class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                    <div class="p-5 empty-item1 d-none">
                        <div class="text-center">
                            <span class="avatar avatar-xl avatar-rounded bg-secondary-transparent">
                                <i class="ri-notification-off-line fs-2"></i>
                            </span>
                            <h6 class="fw-medium mt-3">No New Notifications</h6>
                        </div>
                    </div>
                </div>
                {{-- <!-- End::main-header-dropdown --> --}}
            </li>
            {{-- <!-- End::header-element --> --}}

            {{-- <!-- Start::header-element --> --}}
            <li class="header-element header-fullscreen">
                {{-- <!-- Start::header-link --> --}}
                <a onclick="openFullscreen();" href="javascript:void(0);" class="header-link">
                    <svg xmlns="http://www.w3.org/2000/svg" class="full-screen-open header-link-icon"
                        viewBox="0 0 256 256">
                        <rect width="256" height="256" fill="none" />
                        <polyline points="168 48 208 48 208 88" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="16" />
                        <polyline points="88 208 48 208 48 168" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="16" />
                        <polyline points="208 168 208 208 168 208" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                        <polyline points="48 88 48 48 88 48" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="16" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="full-screen-close header-link-icon d-none"
                        viewBox="0 0 256 256">
                        <rect width="256" height="256" fill="none" />
                        <polyline points="160 48 208 48 208 96" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="16" />
                        <line x1="144" y1="112" x2="208" y2="48" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                        <polyline points="96 208 48 208 48 160" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="16" />
                        <line x1="112" y1="144" x2="48" y2="208" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                    </svg>
                </a>
                {{-- <!-- End::header-link --> --}}
            </li>
            {{-- <!-- End::header-element --> --}}

            {{-- <!-- Start::header-element --> --}}
            <li class="header-element dropdown">
                {{-- <!-- Start::header-link|dropdown-toggle --> --}}
                <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <div class="me-xl-2 me-0">
                            <img src="{{ asset('assets/images/faces/2.jpg" alt="img" class="avatar avatar-sm avata') }}r-rounded">
                        </div>
                        <div class="d-xl-block d-none lh-1">
                            <span class="fw-medium lh-1">Mr. Jack</span>
                        </div>
                    </div>
                </a>
                {{-- <!-- End::header-link|dropdown-toggle --> --}}
                <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end"
                    aria-labelledby="mainHeaderProfile">
                    <li>
                        <div class="py-2 px-3 text-center"> <span class="fw-semibold"> Mr.Jack Miller </span> <span
                                class="d-block fs-12 text-muted">UI/UX Designer</span> </div>
                    </li>
                    <li><a class="dropdown-item d-flex align-items-center" href="profile.html"><i
                                class="ti ti-user text-primary me-2 fs-16"></i>Profile</a>
                    </li>
                    <li><a class="dropdown-item d-flex align-items-center" href="mail.html"> <i
                                class="ti ti-mail text-secondary me-2 fs-16"></i>Inbox</a>
                    </li>
                    <li><a class="dropdown-item d-flex align-items-center" href="to-do-list.html"><i
                                class="ti ti-checklist text-success me-2 fs-16"></i>Task
                            Manager</a></li>
                    <li><a class="dropdown-item d-flex align-items-center" href="mail-settings.html"><i
                                class="ti ti-settings text-info me-2 fs-16"></i>Settings</a>
                    </li>
                    <li><a class="dropdown-item d-flex align-items-center" href="chat.html"><i
                                class="ti ti-headset text-warning me-2 fs-16"></i>Support</a>
                    </li>
                    <li class="py-2 px-3"><a class="btn btn-primary btn-sm w-100" href="sign-up-basic.html">Log Out</a>
                    </li>
                </ul>
            </li>
            {{-- <!-- End::header-element --> --}}

            {{-- <!-- Start::header-element --> --}}
            <li class="header-element">
                {{-- <!-- Start::header-link|switcher-icon --> --}}
                <a href="javascript:void(0);" class="header-link switcher-icon" data-bs-toggle="offcanvas"
                    data-bs-target="#switcher-canvas">
                    <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" viewBox="0 0 256 256">
                        <rect width="256" height="256" fill="none" />
                        <circle cx="128" cy="128" r="40" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="16" />
                        <path
                            d="M41.43,178.09A99.14,99.14,0,0,1,31.36,153.8l16.78-21a81.59,81.59,0,0,1,0-9.64l-16.77-21a99.43,99.43,0,0,1,10.05-24.3l26.71-3a81,81,0,0,1,6.81-6.81l3-26.7A99.14,99.14,0,0,1,102.2,31.36l21,16.78a81.59,81.59,0,0,1,9.64,0l21-16.77a99.43,99.43,0,0,1,24.3,10.05l3,26.71a81,81,0,0,1,6.81,6.81l26.7,3a99.14,99.14,0,0,1,10.07,24.29l-16.78,21a81.59,81.59,0,0,1,0,9.64l16.77,21a99.43,99.43,0,0,1-10,24.3l-26.71,3a81,81,0,0,1-6.81,6.81l-3,26.7a99.14,99.14,0,0,1-24.29,10.07l-21-16.78a81.59,81.59,0,0,1-9.64,0l-21,16.77a99.43,99.43,0,0,1-24.3-10l-3-26.71a81,81,0,0,1-6.81-6.81Z"
                            fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="16" />
                    </svg>
                </a>
                {{-- <!-- End::header-link|switcher-icon --> --}}
            </li>
            {{-- <!-- End::header-element --> --}}

        </ul>
        {{-- <!-- End::header-content-right --> --}}

    </div>
    {{-- <!-- End::main-header-container --> --}}

</header>
{{-- <!-- /app-header --> --}}
         {{-- <!-- Start::app-sidebar --> --}}
<aside class="app-sidebar sticky" id="sidebar">

    {{-- <!-- Start::main-sidebar-header --> --}}
    <div class="main-sidebar-header">
        <a href="index.html" class="header-logo">
            <img src="{{ asset('assets/images/brand-logos/desktop-logo.png" alt="logo" class="des') }}ktop-logo">
            <img src="{{ asset('assets/images/brand-logos/toggle-dark.png" alt="logo" class="to') }}ggle-dark">
            <img src="{{ asset('assets/images/brand-logos/desktop-dark.png" alt="logo" class="des') }}ktop-dark">
            <img src="{{ asset('assets/images/brand-logos/toggle-logo.png" alt="logo" class="to') }}ggle-logo">
        </a>
    </div>
    {{-- <!-- End::main-sidebar-header --> --}}

    {{-- <!-- Start::main-sidebar --> --}}
    <div class="main-sidebar" id="sidebar-scroll">

        {{-- <!-- Start::nav --> --}}
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
            </div>
            <ul class="main-menu">
                {{-- <!-- Start::slide__category --> --}}
                <li class="slide__category"><span class="category-name">Dashboards</span></li>
                {{-- <!-- End::slide__category --> --}}

                {{-- <!-- Start::slide --> --}}
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M104,216V152h48v64h64V120a8,8,0,0,0-2.34-5.66l-80-80a8,8,0,0,0-11.32,0l-80,80A8,8,0,0,0,40,120v96Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                        <span class="side-menu__label">Dashboards</span>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Dashboards</a>
                        </li>
                        <li class="slide">
                            <a href="index.html" class="side-menu__item">Sales</a>
                        </li>
                        <li class="slide">
                            <a href="index-1.html" class="side-menu__item">Analytics</a>
                        </li>
                        <li class="slide">
                            <a href="index-2.html" class="side-menu__item">Ecommerce</a>
                        </li>
                        <li class="slide">
                            <a href="index-3.html" class="side-menu__item">CRM</a>
                        </li>
                        <li class="slide">
                            <a href="index-4.html" class="side-menu__item">Crypto</a>
                        </li>
                        <li class="slide">
                            <a href="index-5.html" class="side-menu__item">NFT</a>
                        </li>
                        <li class="slide">
                            <a href="index-6.html" class="side-menu__item">Projects</a>
                        </li>
                        <li class="slide">
                            <a href="index-7.html" class="side-menu__item">Jobs</a>
                        </li>
                        <li class="slide">
                            <a href="index-8.html" class="side-menu__item">HRM</a>
                        </li>
                        <li class="slide">
                            <a href="index-9.html" class="side-menu__item">Courses</a>
                        </li>
                        <li class="slide">
                            <a href="index-10.html" class="side-menu__item">Stocks</a>
                        </li>
                        <li class="slide">
                            <a href="index-11.html" class="side-menu__item">Medical</a>
                        </li>
                        <li class="slide">
                            <a href="index-12.html" class="side-menu__item">POS System</a>
                        </li>
                        <li class="slide">
                            <a href="index-13.html" class="side-menu__item">Podcast</a>
                        </li>
                        <li class="slide">
                            <a href="index-14.html" class="side-menu__item">School</a>
                        </li>
                        <li class="slide">
                            <a href="index-15.html" class="side-menu__item">Social Media</a>
                        </li>
                    </ul>
                </li>
                {{-- <!-- End::slide --> --}}

                {{-- <!-- Start::slide__category --> --}}
                <li class="slide__category"><span class="category-name">Web Apps</span></li>
                {{-- <!-- End::slide__category --> --}}

                {{-- <!-- Start::slide --> --}}
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><rect x="48" y="48" width="64" height="64" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><rect x="144" y="48" width="64" height="64" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><rect x="48" y="144" width="64" height="64" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><rect x="144" y="144" width="64" height="64" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                        <span class="side-menu__label">Apps</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Apps</a>
                        </li>
                        <li class="slide">
                            <a href="full-calendar.html" class="side-menu__item">Full Calendar</a>
                        </li>
                        <li class="slide">
                            <a href="gallery.html" class="side-menu__item">Gallery</a>
                        </li>
                        <li class="slide">
                            <a href="sweet_alerts.html" class="side-menu__item">Sweet Alerts</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Ecommerce
                                <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="add-product.html" class="side-menu__item">Add Product</a>
                                </li>
                                <li class="slide">
                                    <a href="cart.html" class="side-menu__item">Cart</a>
                                </li>
                                <li class="slide">
                                    <a href="checkout.html" class="side-menu__item">Checkout</a>
                                </li>
                                <li class="slide">
                                    <a href="edit-product.html" class="side-menu__item">Edit Product</a>
                                </li>
                                <li class="slide">
                                    <a href="order-details.html" class="side-menu__item">Order Details</a>
                                </li>
                                <li class="slide">
                                    <a href="orders.html" class="side-menu__item">Orders</a>
                                </li>
                                <li class="slide">
                                    <a href="products.html" class="side-menu__item">Products</a>
                                </li>
                                <li class="slide">
                                    <a href="product-details.html" class="side-menu__item">Products Details</a>
                                </li>
                                <li class="slide">
                                    <a href="products-list.html" class="side-menu__item">Products List</a>
                                </li>
                                <li class="slide">
                                    <a href="wishlist.html" class="side-menu__item">WishList</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Projects
                                <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="projects-list.html" class="side-menu__item">Projects List</a>
                                </li>
                                <li class="slide">
                                    <a href="projects-overview.html" class="side-menu__item">Project Overview</a>
                                </li>
                                <li class="slide">
                                    <a href="projects-create.html" class="side-menu__item">Create Project</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Task
                                <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="task-kanban-board.html" class="side-menu__item">Kanban Board</a>
                                </li>
                                <li class="slide">
                                    <a href="task-list-view.html" class="side-menu__item">List View</a>
                                </li>
                                <li class="slide">
                                    <a href="task-details.html" class="side-menu__item">Task Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Jobs
                                <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="job-details.html" class="side-menu__item">Job Details</a>
                                </li>
                                <li class="slide">
                                    <a href="job-company-search.html" class="side-menu__item">Search Company</a>
                                </li>
                                <li class="slide">
                                    <a href="job-search.html" class="side-menu__item">Search Jobs</a>
                                </li>
                                <li class="slide">
                                    <a href="job-post.html" class="side-menu__item">Job Post</a>
                                </li>
                                <li class="slide">
                                    <a href="jobs-list.html" class="side-menu__item">Jobs List</a>
                                </li>
                                <li class="slide">
                                    <a href="job-candidate-search.html" class="side-menu__item">Search Candidate</a>
                                </li>
                                <li class="slide">
                                    <a href="job-candidate-details.html" class="side-menu__item">Candidate Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">NFT
                                <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="nft-marketplace.html" class="side-menu__item">Market Place</a>
                                </li>
                                <li class="slide">
                                    <a href="nft-details.html" class="side-menu__item">NFT Details</a>
                                </li>
                                <li class="slide">
                                    <a href="nft-create.html" class="side-menu__item">Create NFT</a>
                                </li>
                                <li class="slide">
                                    <a href="nft-wallet-integration.html" class="side-menu__item">Wallet Integration</a>
                                </li>
                                <li class="slide">
                                    <a href="nft-live-auction.html" class="side-menu__item">Live Auction</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">CRM
                                <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="crm-contacts.html" class="side-menu__item">Contacts</a>
                                </li>
                                <li class="slide">
                                    <a href="crm-companies.html" class="side-menu__item">Companies</a>
                                </li>
                                <li class="slide">
                                    <a href="crm-deals.html" class="side-menu__item">Deals</a>
                                </li>
                                <li class="slide">
                                    <a href="crm-leads.html" class="side-menu__item">Leads</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Crypto
                                <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="crypto-transactions.html" class="side-menu__item">Transactions</a>
                                </li>
                                <li class="slide">
                                    <a href="crypto-currency-exchange.html" class="side-menu__item">Currency Exchange</a>
                                </li>
                                <li class="slide">
                                    <a href="crypto-buy_sell.html" class="side-menu__item">Buy & Sell</a>
                                </li>
                                <li class="slide">
                                    <a href="crypto-marketcap.html" class="side-menu__item">Marketcap</a>
                                </li>
                                <li class="slide">
                                    <a href="crypto-wallet.html" class="side-menu__item">Wallet</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                {{-- <!-- End::slide --> --}}

                {{-- <!-- Start::slide --> --}}
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><polyline points="32 176 128 232 224 176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="32 128 128 184 224 128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polygon points="32 80 128 136 224 80 128 24 32 80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                        <span class="side-menu__label">Nested Menu</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Nested Menu</a>
                        </li>
                        <li class="slide">
                            <a href="javascript:void(0);" class="side-menu__item">Nested-1</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Nested-2
                                <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="javascript:void(0);" class="side-menu__item">Nested-2.1</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Nested-2.2
                                        <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child3">
                                        <li class="slide">
                                            <a href="javascript:void(0);" class="side-menu__item">Nested-2.2.1</a>
                                        </li>
                                        <li class="slide">
                                            <a href="javascript:void(0);" class="side-menu__item">Nested-2.2.2</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                {{-- <!-- End::slide --> --}}

                {{-- <!-- Start::slide__category --> --}}
                <li class="slide__category"><span class="category-name">Crafted</span></li>
                {{-- <!-- End::slide__category --> --}}

                {{-- <!-- Start::slide --> --}}
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><rect x="40" y="88" width="176" height="128" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="128" cy="152" r="12"/><path d="M88,88V56a40,40,0,0,1,80,0V88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                        <span class="side-menu__label">Authentication</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Authentication</a>
                        </li>
                        <li class="slide">
                            <a href="coming-soon.html" class="side-menu__item">Coming Soon</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Create Password
                                <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="create-password-basic.html" class="side-menu__item">Basic</a>
                                </li>
                                <li class="slide">
                                    <a href="create-password-cover.html" class="side-menu__item">Cover</a>
                                </li>
                            </ul>
                        </li>      
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Lock Screen
                                <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="lockscreen-basic.html" class="side-menu__item">Basic</a>
                                </li>
                                <li class="slide">
                                    <a href="lockscreen-cover.html" class="side-menu__item">Cover</a>
                                </li>
                            </ul>
                        </li>     
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Reset Password
                                <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="reset-password-basic.html" class="side-menu__item">Basic</a>
                                </li>
                                <li class="slide">
                                    <a href="reset-password-cover.html" class="side-menu__item">Cover</a>
                                </li>
                            </ul>
                        </li>     
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Sign Up
                                <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="sign-up-basic.html" class="side-menu__item">Basic</a>
                                </li>
                                <li class="slide">
                                    <a href="sign-up-cover.html" class="side-menu__item">Cover</a>
                                </li>
                            </ul>
                        </li>  
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Sign In
                                <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="sign-in-basic.html" class="side-menu__item">Basic</a>
                                </li>
                                <li class="slide">
                                    <a href="sign-in-cover.html" class="side-menu__item">Cover</a>
                                </li>
                            </ul>
                        </li> 
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Two Step Verification
                                <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="two-step-verification-basic.html" class="side-menu__item">Basic</a>
                                </li>
                                <li class="slide">
                                    <a href="two-step-verification-cover.html" class="side-menu__item">Cover</a>
                                </li>
                            </ul>
                        </li> 
                        <li class="slide">
                            <a href="under-maintenance.html" class="side-menu__item">Under Maintenance</a>
                        </li>
                    </ul>
                </li>
                {{-- <!-- End::slide --> --}}

                {{-- <!-- Start::slide --> --}}
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="128" cy="128" r="96" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="16"/><line x1="128" y1="136" x2="128" y2="80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="128" cy="172" r="12"/></svg>
                        <span class="side-menu__label">Error</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Error</a>
                        </li>
                        <li class="slide">
                            <a href="401-error.html" class="side-menu__item">401 - Error</a>
                        </li>
                        <li class="slide">
                            <a href="404-error.html" class="side-menu__item">404 - Error</a>
                        </li>
                        <li class="slide">
                            <a href="500-error.html" class="side-menu__item">500 - Error</a>
                        </li>
                    </ul>
                </li>
                {{-- <!-- End::slide --> --}}

                {{-- <!-- Start::slide --> --}}
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><rect x="32" y="48" width="192" height="160" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="80" y1="96" x2="176" y2="96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="80" y1="128" x2="176" y2="128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="80" y1="160" x2="176" y2="160" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                        <span class="side-menu__label">Pages</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1 pages-ul">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Pages</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Blog
                                <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="blog.html" class="side-menu__item">Blog</a>
                                </li>
                                <li class="slide">
                                    <a href="blog-details.html" class="side-menu__item">Blog Details</a>
                                </li>
                                <li class="slide">
                                    <a href="blog-create.html" class="side-menu__item">Create Blog</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="chat.html" class="side-menu__item">Chat</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Email
                                <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="mail.html" class="side-menu__item">Mail App</a>
                                </li>
                                <li class="slide">
                                    <a href="mail-settings.html" class="side-menu__item">Mail Settings</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="empty.html" class="side-menu__item">Empty</a>
                        </li>
                        <li class="slide">
                            <a href="faq's.html" class="side-menu__item">FAQ's</a>
                        </li>
                        <li class="slide">
                            <a href="file-manager.html" class="side-menu__item">File Manager</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Invoice
                                <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="invoice-create.html" class="side-menu__item">Create Invoice</a>
                                </li>
                                <li class="slide">
                                    <a href="invoice-details.html" class="side-menu__item">Invoice Details</a>
                                </li>
                                <li class="slide">
                                    <a href="invoice-list.html" class="side-menu__item">Invoice List</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="pricing.html" class="side-menu__item">Pricing</a>
                        </li>
                        <li class="slide">
                            <a href="profile.html" class="side-menu__item">Profile</a>
                        </li>
                        <li class="slide">
                            <a href="profile-settings.html" class="side-menu__item">Profile Settings</a>
                        </li>
                        <li class="slide">
                            <a href="landing.html" class="side-menu__item">Landing Page</a>
                        </li>
                        <li class="slide">
                            <a href="reviews.html" class="side-menu__item">Reviews</a>
                        </li>
                        <li class="slide">
                            <a href="search-results.html" class="side-menu__item">Search</a>
                        </li>
                        <li class="slide">
                            <a href="team.html" class="side-menu__item">Team</a>
                        </li>
                        <li class="slide">
                            <a href="terms_conditions.html" class="side-menu__item">Terms & Conditions</a>
                        </li>
                        <li class="slide">
                            <a href="timeline.html" class="side-menu__item">Timeline</a>
                        </li>
                        <li class="slide">
                            <a href="to-do-list.html" class="side-menu__item">To Do List</a>
                        </li>
                    </ul>
                </li>
                {{-- <!-- End::slide --> --}}

                {{-- <!-- Start::slide__category --> --}}
                <li class="slide__category"><span class="category-name">Modules</span></li>
                {{-- <!-- End::slide__category --> --}}

                {{-- <!-- Start::slide --> --}}
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M32,216V56a8,8,0,0,1,8-8H216a8,8,0,0,1,8,8V216l-32-16-32,16-32-16L96,216,64,200Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="144" y1="112" x2="192" y2="112" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="144" y1="144" x2="192" y2="144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><rect x="64" y="96" width="48" height="64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                        <span class="side-menu__label">Forms</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Forms</a>
                        </li>
                        <li class="slide">
                            <a href="form_advanced.html" class="side-menu__item">Form Advanced</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Form Elements
                                <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="form_inputs.html" class="side-menu__item">Inputs</a>
                                </li>
                                <li class="slide">
                                    <a href="form_check_radios.html" class="side-menu__item">Checks & Radios</a>
                                </li>
                                <li class="slide">
                                    <a href="form_input_group.html" class="side-menu__item">Input Group</a>
                                </li>
                                <li class="slide">
                                    <a href="form_select.html" class="side-menu__item">Form Select</a>
                                </li>
                                <li class="slide">
                                    <a href="form_range.html" class="side-menu__item">Range Slider</a>
                                </li>
                                <li class="slide">
                                    <a href="form_input_masks.html" class="side-menu__item">Input Masks</a>
                                </li>
                                <li class="slide">
                                    <a href="form_file_uploads.html" class="side-menu__item">File Uploads</a>
                                </li>
                                <li class="slide">
                                    <a href="form_dateTime_pickers.html" class="side-menu__item">Date,Time Picker</a>
                                </li>
                                <li class="slide">
                                    <a href="form_color_pickers.html" class="side-menu__item">Color Pickers</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="floating_labels.html" class="side-menu__item">Floating Labels</a>
                        </li>
                        <li class="slide">
                            <a href="form_layout.html" class="side-menu__item">Form Layouts</a>
                        </li>
                        <li class="slide">
                            <a href="form_wizards.html" class="side-menu__item">Form Wizards</a>
                        </li>
                        <li class="slide">
                            <a href="quill_editor.html" class="side-menu__item">Quill Editor</a>
                        </li>
                        <li class="slide">
                            <a href="form_validation.html" class="side-menu__item">Validation</a>
                        </li>
                        <li class="slide">
                            <a href="form_select2.html" class="side-menu__item">Select2</a>
                        </li>
                    </ul>
                </li>
                {{-- <!-- End::slide --> --}}

                {{-- <!-- Start::slide --> --}}
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><rect x="24" y="56" width="208" height="40" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M216,96v96a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="104" y1="136" x2="152" y2="136" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                        <span class="side-menu__label">Ui Elements</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1 mega-menu">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Ui Elements</a>
                        </li>
                        <li class="slide">
                            <a href="alerts.html" class="side-menu__item">Alerts</a>
                        </li>
                        <li class="slide">
                            <a href="badge.html" class="side-menu__item">Badge</a>
                        </li>
                        <li class="slide">
                            <a href="breadcrumb.html" class="side-menu__item">Breadcrumb</a>
                        </li>
                        <li class="slide">
                            <a href="buttons.html" class="side-menu__item">Buttons</a>
                        </li>
                        <li class="slide">
                            <a href="buttongroup.html" class="side-menu__item">Button Group</a>
                        </li>
                        <li class="slide">
                            <a href="cards.html" class="side-menu__item">Cards</a>
                        </li>
                        <li class="slide">
                            <a href="dropdowns.html" class="side-menu__item">Dropdowns</a>
                        </li>
                        <li class="slide">
                            <a href="images_figures.html" class="side-menu__item">Images & Figures</a>
                        </li>
                        <li class="slide">
                            <a href="links_interactions.html" class="side-menu__item">Links & Interactions</a>
                        </li>
                        <li class="slide">
                            <a href="listgroup.html" class="side-menu__item">List Group</a>
                        </li>
                        <li class="slide">
                            <a href="navs_tabs.html" class="side-menu__item">Navs & Tabs</a>
                        </li>
                        <li class="slide">
                            <a href="object-fit.html" class="side-menu__item">Object Fit</a>
                        </li>
                        <li class="slide">
                            <a href="pagination.html" class="side-menu__item">Pagination</a>
                        </li>
                        <li class="slide">
                            <a href="popovers.html" class="side-menu__item">Popovers</a>
                        </li>
                        <li class="slide">
                            <a href="progress.html" class="side-menu__item">Progress</a>
                        </li>
                        <li class="slide">
                            <a href="spinners.html" class="side-menu__item">Spinners</a>
                        </li>
                        <li class="slide">
                            <a href="toasts.html" class="side-menu__item">Toasts</a>
                        </li>
                        <li class="slide">
                            <a href="tooltips.html" class="side-menu__item">Tooltips</a>
                        </li>
                        <li class="slide">
                            <a href="typography.html" class="side-menu__item">Typography</a>
                        </li>
                    </ul>
                </li>
                {{-- <!-- End::slide --> --}}

                {{-- <!-- Start::slide --> --}}
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M40.49,205.52,93,61.14a7.79,7.79,0,0,1,12.84-2.85l91.88,91.88A7.79,7.79,0,0,1,194.86,163L50.48,215.51A7.79,7.79,0,0,1,40.49,205.52Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M168,72s0-24,24-24,24-24,24-24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="144" y1="16" x2="144" y2="40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="216" y1="112" x2="232" y2="128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="216" y1="80" x2="240" y2="72" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="78.09" y1="102.09" x2="153.91" y2="177.91" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="101.11" y1="197.11" x2="58.89" y2="154.89" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                        <span class="side-menu__label">Advanced UI</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Advanced Ui</a>
                        </li>
                        <li class="slide">
                            <a href="accordions_collpase.html" class="side-menu__item">Accordions & Collapse</a>
                        </li>
                        <li class="slide">
                            <a href="carousel.html" class="side-menu__item">Carousel</a>
                        </li>
                        <li class="slide">
                            <a href="draggable-cards.html" class="side-menu__item">Draggable Cards</a>
                        </li>
                        <li class="slide">
                            <a href="media-player.html" class="side-menu__item">Media Player</a>
                        </li>
                        <li class="slide">
                            <a href="modals_closes.html" class="side-menu__item">Modals & Closes</a>
                        </li>
                        <li class="slide">
                            <a href="navbar.html" class="side-menu__item">Navbar</a>
                        </li>
                        <li class="slide">
                            <a href="offcanvas.html" class="side-menu__item">Offcanvas</a>
                        </li>
                        <li class="slide">
                            <a href="placeholders.html" class="side-menu__item">Placeholders</a>
                        </li>
                        <li class="slide">
                            <a href="ratings.html" class="side-menu__item">Ratings</a>
                        </li>
                        <li class="slide">
                            <a href="ribbons.html" class="side-menu__item">Ribbons</a>
                        </li>
                        <li class="slide">
                            <a href="scrollspy.html" class="side-menu__item">Scrollspy</a>
                        </li>
                        <li class="slide">
                            <a href="sortable-list.html" class="side-menu__item">Sortable JS</a>
                        </li>
                        <li class="slide">
                            <a href="swiperjs.html" class="side-menu__item">Swiper JS</a>
                        </li>
                        <li class="slide">
                            <a href="tour.html" class="side-menu__item">Tour</a>
                        </li>
                        <li class="slide">
                            <a href="treeview.html" class="side-menu__item">Tree View</a>
                        </li>
                    </ul>
                </li>
                {{-- <!-- End::slide --> --}}

                {{-- <!-- Start::slide --> --}}
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="128" cy="96" r="80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="128" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="176 160 176 240 127.99 216 80 240 80 160.01" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                        <span class="side-menu__label">Utilities</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Utilities</a>
                        </li>
                        <li class="slide">
                            <a href="avatars.html" class="side-menu__item">Avatars</a>
                        </li>
                        <li class="slide">
                            <a href="borders.html" class="side-menu__item">Borders</a>
                        </li>
                        <li class="slide">
                            <a href="breakpoints.html" class="side-menu__item">Breakpoints</a>
                        </li>
                        <li class="slide">
                            <a href="colors.html" class="side-menu__item">Colors</a>
                        </li>
                        <li class="slide">
                            <a href="columns.html" class="side-menu__item">Columns</a>
                        </li>
                        <li class="slide">
                            <a href="css_grid.html" class="side-menu__item">Css Grid</a>
                        </li>
                        <li class="slide">
                            <a href="flex.html" class="side-menu__item">Flex</a>
                        </li>
                        <li class="slide">
                            <a href="gutters.html" class="side-menu__item">Gutters</a>
                        </li>
                        <li class="slide">
                            <a href="helpers.html" class="side-menu__item">Helpers</a>
                        </li>
                        <li class="slide">
                            <a href="position.html" class="side-menu__item">Position</a>
                        </li>
                        <li class="slide">
                            <a href="more.html" class="side-menu__item">Additional Content</a>
                        </li>
                    </ul>
                </li>
                {{-- <!-- End::slide --> --}}

                {{-- <!-- Start::slide --> --}}
                <li class="slide">
                    <a href="widgets.html" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><rect x="32" y="80" width="192" height="48" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M208,128v72a8,8,0,0,1-8,8H56a8,8,0,0,1-8-8V128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="128" y1="80" x2="128" y2="208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M176.79,31.21c9.34,9.34,9.89,25.06,0,33.82C159.88,80,128,80,128,80s0-31.88,15-48.79C151.73,21.32,167.45,21.87,176.79,31.21Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M79.21,31.21c-9.34,9.34-9.89,25.06,0,33.82C96.12,80,128,80,128,80s0-31.88-15-48.79C104.27,21.32,88.55,21.87,79.21,31.21Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                        <span class="side-menu__label">Widgets</span>
                    </a>
                </li>
                {{-- <!-- End::slide --> --}}
                
                {{-- <!-- Start::slide__category --> --}}
                <li class="slide__category"><span class="category-name">Tools & Components</span></li>
                {{-- <!-- End::slide__category --> --}}

                {{-- <!-- Start::slide --> --}}
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="128" cy="128" r="96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polygon points="176 80 112 112 80 176 144 144 176 80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                        <span class="side-menu__label">Maps</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Maps</a>
                        </li>
                        <li class="slide">
                            <a href="vector-maps.html" class="side-menu__item">Vector Maps</a>
                        </li>
                        <li class="slide">
                            <a href="leaflet-maps.html" class="side-menu__item">Leaflet Maps</a>
                        </li>
                        <li class="slide">
                            <a href="google-maps.html" class="side-menu__item">Google Maps</a>
                        </li>
                    </ul>
                </li>
                {{-- <!-- End::slide --> --}}

                {{-- <!-- Start::slide --> --}}
                <li class="slide">
                    <a href="icons.html" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><polyline points="48 139.59 48 216 208 216 208 139.59" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M54,40H202a8,8,0,0,1,7.69,5.8L224,96H32L46.34,45.8A8,8,0,0,1,54,40Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M96,96v16a32,32,0,0,1-64,0V96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M160,96v16a32,32,0,0,1-64,0V96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M224,96v16a32,32,0,0,1-64,0V96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                        <span class="side-menu__label">Icons</span>
                    </a>
                </li>
                {{-- <!-- End::slide --> --}}

                 {{-- <!-- Start::slide --> --}}
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><polyline points="224 208 32 208 32 48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="200 72 128 144 96 112 32 176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="200 112 200 72 160 72" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                        <span class="side-menu__label">Charts</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Charts</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Apex Charts
                                <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="apex-line-charts.html" class="side-menu__item">Line Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-area-charts.html" class="side-menu__item">Area Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-column-charts.html" class="side-menu__item">Column Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-bar-charts.html" class="side-menu__item">Bar Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-mixed-charts.html" class="side-menu__item">Mixed Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-rangearea-charts.html" class="side-menu__item">Range Area Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-timeline-charts.html" class="side-menu__item">Timeline Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-funnel-charts.html" class="side-menu__item">Funnel Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-candlestick-charts.html" class="side-menu__item">CandleStick
                                        Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-boxplot-charts.html" class="side-menu__item">Boxplot Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-bubble-charts.html" class="side-menu__item">Bubble Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-scatter-charts.html" class="side-menu__item">Scatter Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-heatmap-charts.html" class="side-menu__item">Heatmap Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-treemap-charts.html" class="side-menu__item">Treemap Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-pie-charts.html" class="side-menu__item">Pie Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-radialbar-charts.html" class="side-menu__item">Radialbar Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-radar-charts.html" class="side-menu__item">Radar Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-polararea-charts.html" class="side-menu__item">Polararea Charts</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="chartjs-charts.html" class="side-menu__item">Chartjs Charts</a>
                        </li>
                        <li class="slide">
                            <a href="echarts.html" class="side-menu__item">Echart Charts</a>
                        </li>
                    </ul>
                </li>
                {{-- <!-- End::slide --> --}}

                {{-- <!-- Start::slide --> --}}
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M32,56H224a0,0,0,0,1,0,0V192a8,8,0,0,1-8,8H40a8,8,0,0,1-8-8V56A0,0,0,0,1,32,56Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="32" y1="104" x2="224" y2="104" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="32" y1="152" x2="224" y2="152" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="88" y1="104" x2="88" y2="200" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                        <span class="side-menu__label">Tables</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Tables</a>
                        </li>
                        <li class="slide">
                            <a href="tables.html" class="side-menu__item">Tables</a>
                        </li>
                        <li class="slide">
                            <a href="grid-tables.html" class="side-menu__item">Grid JS Tables</a>
                        </li>
                        <li class="slide">
                            <a href="data-tables.html" class="side-menu__item">Data Tables</a>
                        </li>
                    </ul>
                </li>
                {{-- <!-- End::slide --> --}}

            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
        </nav>
        {{-- <!-- End::nav --> --}}

    </div>
    {{-- <!-- End::main-sidebar --> --}}

</aside>
{{-- <!-- End::app-sidebar --> --}}

        {{-- <!-- Start::app-content --> --}}
        <div class="main-content app-content">
            <div class="container-fluid">

                @yield('body')

            </div>
        </div>
        {{-- <!-- End::app-content --> --}}

        
        {{-- <!-- Footer Start --> --}}
<footer class="footer mt-auto py-3 bg-white text-center">
    <div class="container">
        <span class="text-muted"> Copyright © <span id="year"></span> <a
                href="javascript:void(0);" class="text-dark fw-medium">Zynix</a>.
            Designed with <span class="bi bi-heart-fill text-danger"></span> by <a href="https://wcsrm.com/" target="_blank">
                <span class="fw-medium text-primary">Spruko</span>
            </a> All
            rights
            reserved
        </span>
    </div>
</footer>
{{-- <!-- Footer End --> --}}
         <div class="modal fade" id="header-responsive-search" tabindex="-1" aria-labelledby="header-responsive-search" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="input-group">
                    <input type="text" class="form-control border-end-0" placeholder="Search Anything ..."
                        aria-label="Search Anything ..." aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="button"
                        id="button-addon2"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>

   
{{-- <!-- Scroll To Top --> --}}
<div class="scrollToTop">
    <span class="arrow lh-1"><i class="ti ti-arrow-big-up fs-16"></i></span>
</div>
<div id="responsive-overlay"></div>
{{-- <!-- Scroll To Top --> --}}

{{-- <!-- Popper JS --> --}}
<script src="{{ asset('assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>

{{-- <!-- Bootstrap JS --> --}}
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

{{-- <!-- Defaultmenu JS --> --}}
<script src="{{ asset('assets/js/defaultmenu.min.js') }}"></script>

{{-- <!-- Node Waves JS--> --}}
<script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

{{-- <!-- Sticky JS --> --}}
<script src="{{ asset('assets/js/sticky.js') }}"></script>

{{-- <!-- Simplebar JS --> --}}
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/js/simplebar.js') }}"></script>

{{-- <!-- Auto Complete JS --> --}}
<script src="{{ asset('assets/libs/@tarekraafat/autocomplete.js/autoComplete.min.js') }}"></script>

{{-- <!-- Color Picker JS --> --}}
<script src="{{ asset('assets/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>

{{-- <!-- Date & Time Picker JS --> --}}
<script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>


   
{{-- <!-- Custom-Switcher JS --> --}}
<script src="{{ asset('assets/js/custom-switcher.min.js') }}"></script>

    {{-- <!-- Custom JS --> --}}
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>