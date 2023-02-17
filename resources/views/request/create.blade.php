<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../">
		<meta charset="utf-8" />
		<title>ETA-VERIFY | Request Verification</title>
		<meta name="description" content="Wizard examples" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="metronic/css/pages/wizard/wizard-3.css" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="metronic/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="metronic/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="metronic/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="metronic/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="metronic/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="metronic/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
		<link href="metronic/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="{{ public_path('ETHVerfinal.png') }}" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled">
        <div class=" d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" class="header header-fixed">
                <!--begin::Container-->
                <div class="container-fluid d-flex align-items-stretch justify-content-between">
                    <!--begin::Header Menu Wrapper-->
                    <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                        <!--begin::Header Menu-->
                        <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                            <!--begin::Header Nav-->
                            <ul class="menu-nav">
                                <li class="menu-item menu-item-submenu menu-item-rel menu-item-active" data-menu-toggle="click" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">Home</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                                        <ul class="menu-subnav">
                                            <li class="menu-item" aria-haspopup="true">
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <!--end::Header Nav-->
                        </div>
                        <!--end::Header Menu-->
                    </div>
                    <!--end::Header Menu Wrapper-->
                    <!--begin::Topbar-->
                    <div class="topbar">
                        <!--begin::Search-->
                        <div class="dropdown" id="kt_quick_search_toggle">
                            
                        </div>
                        <!--begin::Cart-->
                        <div class="topbar-item">

                        </div>
                    </div>
                    <!--end::Topbar-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <!--begin::Entry-->
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    <div class="container">
                        <div class="card card-custom">
                            <div class="card-body p-0">
                                <!--begin: Wizard-->
                                <div class="wizard wizard-3" id="kt_wizard_v3" data-wizard-state="first" data-wizard-clickable="true">
                                    <!--begin: Wizard Nav-->
                                    <div class="wizard-nav">
                                        <div class="wizard-steps px-8 py-8 px-lg-15 py-lg-3">
                                            <!--begin::Wizard Step 1 Nav-->
                                            <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                                <div class="wizard-label">
                                                    <h3 class="wizard-title">
                                                    <span>1.</span>Request Requirements</h3>
                                                    <div class="wizard-bar"></div>
                                                </div>
                                            </div>
                                            <!--end::Wizard Step 1 Nav-->
                                            <!--begin::Wizard Step 2 Nav-->
                                            <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                                                <div class="wizard-label">
                                                    <h3 class="wizard-title">
                                                    <span>2.</span>Basic Information</h3>
                                                    <div class="wizard-bar"></div>
                                                </div>
                                            </div>
                                            <!--end::Wizard Step 2 Nav-->
                                            <!--begin::Wizard Step 3 Nav-->
                                            <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                                                <div class="wizard-label">
                                                    <h3 class="wizard-title">
                                                    <span>3.</span>Setup Locations</h3>
                                                    <div class="wizard-bar"></div>
                                                </div>
                                            </div>
                                            <!--end::Wizard Step 3 Nav-->
                                            <!--begin::Wizard Step 4 Nav-->
                                            <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                                                <div class="wizard-label">
                                                    <h3 class="wizard-title">
                                                    <span>4.</span>Upload Documents</h3>
                                                    <div class="wizard-bar"></div>
                                                </div>
                                            </div>
                                            <!--end::Wizard Step 4 Nav-->
                                            <!--begin::Wizard Step 5 Nav-->
                                            <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                                                <div class="wizard-label">
                                                    <h3 class="wizard-title">
                                                    <span>5</span>Review and Submit</h3>
                                                    <div class="wizard-bar"></div>
                                                </div>
                                            </div>
                                            <!--end::Wizard Step 5 Nav-->
                                        </div>
                                    </div>
                                    <!--end: Wizard Nav-->
                                    <!--begin: Wizard Body-->
                                    <div class="row justify-content-center py-10 px-8 py-lg-12 px-lg-10">
                                        <div class="col-xl-12 col-xxl-7">
                                            <!--begin: Wizard Form-->
                                            <form class="form fv-plugins-bootstrap fv-plugins-framework" id="kt_form">
                                                <!--begin: Wizard Step 1-->
                                                <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                                    <h4 class="mb-10 font-weight-bold text-dark">Request Requirements</h4>
                                                    <!--end::Input-->
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            {{-- <div class="form-group fv-plugins-icon-container">
                                                                <label>Postcode</label>
                                                                <input type="text" class="form-control" name="postcode" placeholder="Postcode" value="3000">
                                                                <span class="form-text text-muted">Please enter your Postcode.</span>
                                                            <div class="fv-plugins-message-container"></div></div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end: Wizard Step 1-->
                                                <!--begin: Wizard Step 2-->
                                                <div class="pb-5" data-wizard-type="step-content">
                                                    <h4 class="mb-10 font-weight-bold text-dark">Enter the Details of your Delivery</h4>
                                                    <div class="col-xl-6">

                                                    </div>
                                                </div>
                                                <!--end: Wizard Step 2-->
                                                <!--begin: Wizard Step 3-->
                                                <div class="pb-5" data-wizard-type="step-content">
                                                    <h4 class="mb-10 font-weight-bold text-dark">Select your Services</h4>
                                                    <div class="col-xl-6">
                                                        
                                                    </div>
                                                </div>
                                                <!--end: Wizard Step 3-->
                                                <!--begin: Wizard Step 4-->
                                                <div class="pb-5" data-wizard-type="step-content">
                                                    <h4 class="mb-10 font-weight-bold text-dark">Setup Your Delivery Location</h4>
                                                    <div class="col-xl-6">
                                                        
                                                    </div>
                                                </div>
                                                <!--end: Wizard Step 4-->
                                                <!--begin: Wizard Step 5-->
                                                <div class="pb-5" data-wizard-type="step-content">
                                                    <!--begin::Section-->
                                                    <h4 class="mb-10 font-weight-bold text-dark">Review your Details and Submit</h4>
                                                    <h6 class="font-weight-bolder mb-3">Current Address:</h6>
                                                    <div class="text-dark-50 line-height-lg">
                                                        <div>Address Line 1</div>
                                                        <div>Address Line 2</div>
                                                        <div>Melbourne 3000, VIC, Australia</div>
                                                    </div>
                                                    <div class="separator separator-dashed my-5"></div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <h6 class="font-weight-bolder mb-3">Delivery Details:</h6>
                                                    <div class="text-dark-50 line-height-lg">
                                                        <div>Package: Complete Workstation (Monitor, Computer, Keyboard &amp; Mouse)</div>
                                                        <div>Weight: 25kg</div>
                                                        <div>Dimensions: 110cm (w) x 90cm (h) x 150cm (L)</div>
                                                    </div>
                                                    <div class="separator separator-dashed my-5"></div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <h6 class="font-weight-bolder mb-3">Delivery Service Type:</h6>
                                                    <div class="text-dark-50 line-height-lg">
                                                        <div>Overnight Delivery with Regular Packaging</div>
                                                        <div>Preferred Morning (8:00AM - 11:00AM) Delivery</div>
                                                    </div>
                                                    <div class="separator separator-dashed my-5"></div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <h6 class="font-weight-bolder mb-3">Delivery Address:</h6>
                                                    <div class="text-dark-50 line-height-lg">
                                                        <div>Address Line 1</div>
                                                        <div>Address Line 2</div>
                                                        <div>Preston 3072, VIC, Australia</div>
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end: Wizard Step 5-->
                                                <!--begin: Wizard Actions-->
                                                <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                                    <div class="mr-2">
                                                        <button class="btn btn-light-primary font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-success font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-submit">Submit</button>
                                                        <button class="btn btn-primary font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-next">Next Step</button>
                                                    </div>
                                                </div>
                                                <!--end: Wizard Actions-->
                                            <div></div><div></div><div></div><div></div></form>
                                            <!--end: Wizard Form-->
                                        </div>
                                    </div>
                                    <!--end: Wizard Body-->
                                </div>
                                <!--end: Wizard-->
                            </div>
                        </div>
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Entry-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
                <!--begin::Container-->
                <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <!--begin::Copyright-->
                    <div class="text-dark order-2 order-md-1">
                        <span class="text-muted font-weight-bold mr-2">2020©</span>
                        <a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">Keenthemes</a>
                    </div>
                    <!--end::Copyright-->
                    <!--begin::Nav-->
                    <div class="nav nav-dark">
                        <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">About</a>
                        <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">Team</a>
                        <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-0">Contact</a>
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Footer-->
        </div>
       
		<script>var HOST_URL = "https://keenthemes.com/metronic/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="metronic/plugins/global/plugins.bundle.js"></script>
		<script src="metronic/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="metronic/js/scripts.bundle.js"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="metronic/js/pages/custom/wizard/wizard-3.js"></script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>