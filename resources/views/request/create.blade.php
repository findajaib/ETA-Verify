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
                                                    <span>3.</span>Educational Information</h3>
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
                                                    <div class="card-header">
                                                        <div class="card-title">
                                                            <h4 class="mb-10 font-weight-bold text-dark card-label">Application Criteria
                                                            </h4>
                                                        </div>
                                                        <div class="card-toolbar">
                                                            <ul class="nav nav-tabs nav-bold nav-tabs-line">
                                                                <li class="nav-item dropdown">
                                                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                                                        role="button" aria-haspopup="true"
                                                                        aria-expanded="false">Language</a>
                                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                                        {{-- @foreach ($appTexts as $key => $appText)
                                                                            <a class="dropdown-item" data-toggle="tab"
                                                                                href="#lang_app_{{ $appText->id }}">
                                                                                {{ $appText->language->name }}
                                                                            </a>
                                                                        @endforeach --}}
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div data-scroll="true" class="scroll scroll-pull"
                                                            style="max-height:350px !important; overflow:auto;">
                                                            <div class="tab-content mt-5" id="myTabContent">
                                                                {{-- @foreach ($appTexts as $key => $appText)
                                                                    <div class="tab-pane fade {{ $key == 0 ? ' show active' : '' }}"
                                                                        id="lang_app_{{ $appText->id }}" role="tabpanel"
                                                                        aria-labelledby="lang_app_{{ $appText->id }}">
                                                                        {!! $appText->content !!}
                                                                    </div>
                                                                @endforeach --}}
                                                            </div>
                                                        </div>
                                                    </div>
            
                                                    <div class=" card-footer p-0 pt-4 pl-4 pb-0">
                                                        <div class="form-group mb-0">
                                                            <label class="checkbox" id="agree_check_label">
                                                                <input type="checkbox"
                                                                    {{-- {{ old('agree_check') == 'on' ? 'checked' : '' }} --}}
                                                                    name="agree_check" id="agree_check"> I Accepted </a>
                                                                <a href="#" target="_blank">
                                                                    terms and conditions
                                                                </a>
                                                                <span>
                                                                </span>
                                                            </label>
                                                            @error('agree_check')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end: Wizard Step 1-->
                                                <!--begin: Wizard Step 2-->
                                                <div class="pb-5" data-wizard-type="step-content">
                                                    <h4 class="mb-10 font-weight-bold text-dark">Basic Information</h4>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label text-right">Photo</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <div class="image-input image-input-outline image-input-circle" id="kt_image_3">
                                                                <div class="image-input-wrapper" style="background-image: url(defaultuser.png)"></div>
                                                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                                    <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                                                                    <input type="hidden" name="profile_avatar_remove" />
                                                                </label>
                                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                                </span>
                                                            </div>
                                                            <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>First Name</label>
                                                                <input type="text" class="form-control" name="first_name" placeholder="Enter your first name"s />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Middle Name</label>
                                                                <input type="text" class="form-control" name="middle_name" placeholder="Enter your middle name" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Last Name</label>
                                                                <input type="text" class="form-control" name="last_name" placeholder="Enter your last name" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Gender</label>
                                                                <select name="gender" class="form-control">
                                                                    <option value="">Select Gender</option>
                                                                    <option value="M">Male</option>
                                                                    <option value="F">Female</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Date of birth</label>
                                                                <input class="form-control" type="date" name="dob" id="example-date-input" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Phone Number</label>
                                                                <input type="text" class="form-control" name="phone" placeholder="Enter your last name" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <input type="email" class="form-control" name="email" placeholder="Enter your last name" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="card-header">
                                                            <div class="card-title">
                                                                <h4 class="mb-1 font-weight-bold text-dark card-label">Residential Address
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Region</label>
                                                                        <select name="region" class="form-control">
                                                                            <option value="">Select region</option>
                                                                            
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Zone</label>
                                                                        <select name="zone" class="form-control">
                                                                            <option value="">Select zone</option>
                                                                            
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Woreda</label>
                                                                        <select name="woreda" class="form-control">
                                                                            <option value="">Select woreda</option>
                                                                            
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end: Wizard Step 2-->
                                                <!--begin: Wizard Step 3-->
                                                <div class="pb-5" data-wizard-type="step-content">
                                                    <h4 class="mb-10 font-weight-bold text-dark">Educational Information</h4>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <p>Document to be verified?</p>
                                                            <select name="document_ver" id="document_ver" onchange="getDocument(this)"class="form-control">
                                                                <option value="">Select document to be verified</option>
                                                                <option value="bsc">BSc Document</option>
                                                                <option value="msc">MSc Document</option>
                                                                <option value="msc">Phd Document</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-5" id="bsc_select" style="display: none;">
                                                            <p>Are you from 12 or diploma/COC?</p>
                                                            <div class="radio-inline">
                                                                <label class="radio">
                                                                <input type="radio" onchange="bsccheck1(this)" name="bsc_check" value="prep_12"/>Preparatory/12 
                                                                <span></span></label>
                                                                <label class="radio">
                                                                <input type="radio" onchange="bsccheck2(this)" name="bsc_check" value="dip_coc"/>diploma/COC
                                                                <span></span></label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-5" id="msc_select" style="display: none;">
                                                            <p>Are your Bsc. verified?</p>
                                                            <div class="radio-inline">
                                                                <label class="radio">
                                                                <input type="radio" onchange="msccheck1(this)" name="msc_check" value="yes"/>yes 
                                                                <span></span></label>
                                                                <label class="radio">
                                                                <input type="radio" onchange="msccheck2(this)" name="msc_check" value="no"/>no
                                                                <span></span></label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row" id="12_comp" style="display: none;">
                                                        <div class="card-header">
                                                            <div class="card-toolbar">
                                                                <h4 class="font-weight-bold text-dark card-label">Prepartory education info
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Completion Date</label>
                                                                        <input type="date" id="example-date-input" class="form-control" name="completion_date" placeholder="completion year" />
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Entrance Exam Score</label>
                                                                        <input type="number" class="form-control" name="exam_score" placeholder="exam score" />
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>School Attended</label>
                                                                        <input type="text" class="form-control" name="school" placeholder="school attended" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row" id="diploma_comp" style="display: none;">
                                                        <div class="card-header">
                                                            <div class="card-toolbar">
                                                                <h4 class="font-weight-bold text-dark card-label">Diploma education info
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Start Date</label>
                                                                        <input type="date" id="example-date-input" class="form-control" name="start_date" placeholder="start date" />
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Graduated Date</label>
                                                                        <input type="date" id="example-date-input" class="form-control" name="completed_date" placeholder="completion date" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>College</label>
                                                                        <input type="text" class="form-control" name="college" placeholder="college" />
                                                                    </div>
                                                                </div>
        
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row" id="bsc_doc_selected" style="display: none;">
                                                        <div class="card-header">
                                                            <div class="card-title">
                                                                <h4 class="font-weight-bold text-dark card-label">Bsc. education info
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row" id="bsc_info">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>BSc. Start Date</label>
                                                                        <input type="date" id="example-date-input" class="form-control" name="bsc_start_date" placeholder="start date" />
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>BSc. Graduated Date</label>
                                                                        <input type="date" id="example-date-input" class="form-control" name="bsc_completed_date" placeholder="completion date" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>BSc. College</label>
                                                                        <input type="text" class="form-control" name="bsc_college" placeholder="BSc. college" />
                                                                    </div>
                                                                </div>
        
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row" id="msc_doc_selected" style="display: none;">
                                                        <div class="card-header">
                                                            <div class="card-title">
                                                                <h4 class="font-weight-bold text-dark card-label">Msc. education info
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row" id="bsc_info">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Msc. Start Date</label>
                                                                        <input type="date" id="example-date-input" class="form-control" name="msc_start_date" placeholder="start date" />
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Msc. Graduated Date</label>
                                                                        <input type="date" id="example-date-input" class="form-control" name="msc_completed_date" placeholder="completion date" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Msc. College</label>
                                                                        <input type="text" class="form-control" name="msc_college" placeholder="Msc. college" />
                                                                    </div>
                                                                </div>
        
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--end: Wizard Step 3-->
                                                <!--begin: Wizard Step 4-->
                                                <div class="pb-5" data-wizard-type="step-content">
                                                    <h4 class="mb-10 font-weight-bold text-dark">Upload Documents</h4>
                                                    <div class="row">
                                                        <div class="col-md-6" id="12_doc" style="display: none">
                                                            <label class="my-3">12 Document</label>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="12_doc" id="customFile" />
                                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6" id="diploma_doc" style="display: none">
                                                            <label class="my-3">Diploma Document</label>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="diploma_doc" id="customFile" />
                                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6" id="coc_doc" style="display: none">
                                                            <label class="my-3">COC Document</label>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="customFile" name="coc_doc"/>
                                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6" id="bsc_doc" style="display: none">
                                                            <label class="my-3">BSc. Document</label>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="customFile" name="bsc_doc"/>
                                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6" id="msc_doc" style="display: none">
                                                            <label class="my-3">MSc. Document</label>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="customFile" name="msc_doc"/>
                                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6" id="phd_doc" style="display: none">
                                                            <label class="my-3">Phd. Document</label>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="customFile" name="phd_doc"/>
                                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end: Wizard Step 4-->
                                                <!--begin: Wizard Step 5-->
                                                <div class="pb-5" data-wizard-type="step-content">
                                                    <!--begin::Section-->
                                                    <h4 class="mb-10 font-weight-bold text-dark">Review your Details and Submit</h4>
                                                    <h6 class="font-weight-bolder mb-3">Basic Information:</h6>
                                                    <div class="text-dark-50 line-height-lg">
                                                        <div>Full name: </div>
                                                        <div>Gender: </div>
                                                        <div>Date of birth: </div>
                                                        <div>Phone number: </div>
                                                        <div>E-mail: </div>
                                                        <div>Address: </div>
                                                    </div>
                                                    <div class="separator separator-dashed my-5"></div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <h6 class="font-weight-bolder mb-3">Educational Information:</h6>
                                                    <div class="text-dark-50 line-height-lg">
                                                        <div>Document checked: </div>
                                                        <div>Start Date: </div>
                                                        <div>Graduated Date:</div>
                                                    </div>
                                                    <div class="separator separator-dashed my-5"></div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <h6 class="font-weight-bolder mb-3">Document Upload:</h6>
                                                    <div class="text-dark-50 line-height-lg">
                                                        <div>BSc. Document upload</div>
                                                        <div>12 Document upload</div>
                                                    </div>
                                                    <div class="separator separator-dashed my-5"></div>
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
        <script src="metronic/js/pages/crud/file-upload/image-input.js"></script>

        <script>
            function getDocument(value) {
                if (value.value == 'bsc') {
                    document.getElementById('bsc_select').style.display = 'block';
                    document.getElementById('bsc_doc_selected').style.display = 'block';
                    document.getElementById('bsc_doc').style.display = 'block';
                    document.getElementById('msc_doc').style.display = 'none';
                    document.getElementById('msc_select').style.display = 'none';
                    document.getElementById('msc_doc_selected').style.display = 'none';
                }else if(value.value == 'msc'){
                    document.getElementById('bsc_select').style.display = 'none';
                    document.getElementById('bsc_doc_selected').style.display = 'none';
                    document.getElementById('msc_select').style.display = 'block';
                    document.getElementById('msc_doc').style.display = 'block';
                    document.getElementById('bsc_doc').style.display = 'none';
                    document.getElementById('diploma_doc').style.display = 'none';
                    document.getElementById('coc_doc').style.display = 'none';
                    document.getElementById('12_doc').style.display = 'none';
                }
            }

            function bsccheck1(rad) {
                document.getElementById('12_comp').style.display = 'block';
                document.getElementById('diploma_comp').style.display = 'none';
                document.getElementById('12_doc').style.display = 'block';
                document.getElementById('diploma_doc').style.display = 'none';
                document.getElementById('coc_doc').style.display = 'none';
            }

            function bsccheck2(rad) {
                document.getElementById('diploma_comp').style.display = 'block';
                document.getElementById('12_comp').style.display = 'none';
                document.getElementById('diploma_doc').style.display = 'block';
                document.getElementById('coc_doc').style.display = 'block';
                document.getElementById('12_doc').style.display = 'none';
            }

            function msccheck1(rad) {
                document.getElementById('msc_doc_selected').style.display = 'block';
                document.getElementById('bsc_select').style.display = 'none';
                document.getElementById('bsc_doc_selected').style.display = 'none';
                document.getElementById('diploma_comp').style.display = 'none';
                document.getElementById('12_comp').style.display = 'none';
                document.getElementById('msc_doc').style.display = 'block';
                document.getElementById('bsc_doc').style.display = 'none';
                document.getElementById('diploma_doc').style.display = 'none';
                document.getElementById('coc_doc').style.display = 'none';
                document.getElementById('12_doc').style.display = 'none';
            }

            function msccheck2(rad) {
                document.getElementById('msc_doc_selected').style.display = 'block';
                document.getElementById('bsc_doc_selected').style.display = 'block';
                document.getElementById('bsc_select').style.display = 'block';
                document.getElementById('bsc_doc').style.display = 'block';
            }
        </script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>