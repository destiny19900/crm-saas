<?php
    use App\Models\Utility;

    $settings = Utility::settings();
  //  $logo=asset(Storage::url('uploads/logo/'));
    $logo=\App\Models\Utility::get_file('uploads/logo');


     $company_logo=Utility::getValByName('company_logo_dark');
    $company_logos=Utility::getValByName('company_logo_light');

    $setting = \App\Models\Utility::colorset();
    $color = (!empty($setting['color'])) ? $setting['color'] : 'theme-3';
    $mode_setting = \App\Models\Utility::mode_layout();
    $SITE_RTL = Utility::getValByName('SITE_RTL');

?>
<!DOCTYPE html>
<html lang="en"  dir="<?php echo e($setting['SITE_RTL'] == 'on'?'rtl':''); ?>">
<head>

    <title><?php echo e(__('Buildera ERP SaaS')); ?></title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Dashboard Template Description" />
    <meta name="keywords" content="Dashboard Template" />
    <meta name="author" content="Buildera Tech" />

    <!-- Favicon icon -->
    <link rel="icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon" />

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/animate.min.css')); ?>" />
    <!-- font css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/fonts/tabler-icons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/fonts/feather.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/fonts/fontawesome.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/fonts/material.css')); ?>">

    <!-- vendor css -->
    <?php if($SITE_RTL == 'on'): ?>
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/style-rtl.css')); ?>">
    <?php endif; ?>
    <?php if($setting['cust_darklayout'] == 'on'): ?>
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/style-dark.css')); ?>">
    <?php else: ?>
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>" id="main-style-link">
    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/customizer.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/landing.css')); ?>" />
</head>

<body class="<?php echo e($color); ?>">
<!-- [ Nav ] start -->
<nav class="navbar navbar-expand-md navbar-dark default top-nav-collapse">
    <div class="container">
        <a class="navbar-brand bg-transparent" href="">

                <img src="<?php echo e($logo .'/logo-light.png'); ?>" alt="logo" width="40%"/>

        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav align-items-center ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#layouts">Layouts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimonial">Testimonial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pricing">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#faq">Faq</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-light ms-2 me-1" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                </li>
                <?php if($settings['enable_signup'] == 'on'): ?>
                    <li class="nav-item">
                        <a class="btn btn-light ms-2 me-1" href="<?php echo e(route('register')); ?>">Register</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<!-- [ Nav ] start -->
<!-- [ Header ] start -->
<header id="home" class="bg-primary">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-sm-5">
                <h1
                    class="text-white mb-sm-4 wow animate__fadeInLeft"
                    data-wow-delay="0.2s"
                >
                    <?php echo e(__('Buildera ERP SaaS')); ?>

                </h1>
                <h2
                    class="text-white mb-sm-4 wow animate__fadeInLeft"
                    data-wow-delay="0.4s"
                >
                    <?php echo e(__('All-In-One Business Management Solution')); ?>

                </h2>
                <p class="mb-sm-4 wow animate__fadeInLeft" data-wow-delay="0.6s">
                    Streamline your business operations with our comprehensive ERP platform. Manage projects, accounts, HR, and CRM all in one place. Boost productivity and make data-driven decisions with real-time insights.
                </p>
                <div class="my-4 wow animate__fadeInLeft" data-wow-delay="0.8s">
                    <a href="<?php echo e(route('login')); ?>" class="btn btn-light me-2"
                    ><i class="far fa-eye me-2"></i>Try Demo</a
                    >
                    <a href="https://codecanyon.net/item/erpgo-saas-all-in-one-business-erp-with-project-account-hrm-crm/33263426" class="btn btn-outline-light" target="_blank"
                    ><i class="fas fa-shopping-cart me-2"></i>Get Started</a
                    >
                </div>
            </div>
            <div class="col-sm-5">
                <img
                    src="<?php echo e(asset('assets/images/front/header-mokeup.svg')); ?>"
                    alt="Datta Able Admin Template"
                    class="img-fluid header-img wow animate__fadeInRight"
                    data-wow-delay="0.2s"
                />
            </div>
        </div>
    </div>
</header>
<!-- [ Header ] End -->
<!-- [ client ] Start -->
<section id="dashboard" class="theme-alt-bg dashboard-block">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-9 title">
                <h2><span>Trusted by Businesses Worldwide</span> </h2>
            </div>
        </div>
        <div class="row align-items-center justify-content-center mobile-screen dashboard_images">
            <div class="col-lg-2">
                <div class="wow animate__fadeInRight mobile-widget" data-wow-delay="0.2s">
                    <div class="business-logo" style="background: #2c3e50; color: white; padding: 15px; text-align: center; border-radius: 8px; font-weight: bold; font-size: 24px;">
                        RAPIDGO
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="wow animate__fadeInRight mobile-widget" data-wow-delay="0.4s">
                    <div class="business-logo" style="background: #e74c3c; color: white; padding: 15px; text-align: center; border-radius: 8px; font-weight: bold; font-size: 24px;">
                        TECHFLOW
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="wow animate__fadeInRight mobile-widget" data-wow-delay="0.6s">
                    <div class="business-logo" style="background: #27ae60; color: white; padding: 15px; text-align: center; border-radius: 8px; font-weight: bold; font-size: 24px;">
                        SMARTBIZ
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="wow animate__fadeInRight mobile-widget" data-wow-delay="0.8s">
                    <div class="business-logo" style="background: #8e44ad; color: white; padding: 15px; text-align: center; border-radius: 8px; font-weight: bold; font-size: 24px;">
                        INNOVATE
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="wow animate__fadeInRight mobile-widget" data-wow-delay="1s">
                    <div class="business-logo" style="background: #f39c12; color: white; padding: 15px; text-align: center; border-radius: 8px; font-weight: bold; font-size: 24px;">
                        GLOBEX
                    </div>
                </div>
            </div>
        </div>
        <img
            src="<?php echo e(asset('landing/images/dashboard.png')); ?>"
            alt=""
            class="img-fluid img-dashboard wow animate__fadeInUp mt-5"  style='border-radius: 15px;'
            data-wow-delay="0.2s"
        />
    </div>
</section>
<!-- [ client ] End -->
<!-- [ dashboard ] start -->
<section id="dashboard" class="theme-alt-bg dashboard-block">
    <div class="container">
        <div class="row align-items-center justify-content-end mb-5">
            <div class="col-sm-4">
                <h1
                    class="mb-sm-4 f-w-600 wow animate__fadeInLeft"
                    data-wow-delay="0.2s"
                >
                    <?php echo e(__('Project Management')); ?>

                </h1>
                <h2 class="mb-sm-4 wow animate__fadeInLeft" data-wow-delay="0.4s">
                    <?php echo e(__('Streamline Your Projects')); ?>

                </h2>
                <p class="mb-sm-4 wow animate__fadeInLeft" data-wow-delay="0.6s">
                    Plan, track, and manage projects efficiently. Set milestones, assign tasks, and monitor progress in real-time. Keep your team aligned and deliver projects on time, every time.
                </p>
                <div class="my-4 wow animate__fadeInLeft" data-wow-delay="0.8s">
                    <a href="#" class="btn btn-primary" target="_blank"
                    ><i class="fas fa-rocket me-2"></i>Learn More</a
                    >
                </div>
            </div>
            <div class="col-sm-6">
                <img
                    src="<?php echo e(asset('landing/images/dashboard.png')); ?>"
                    alt="Datta Able Admin Template"
                    class="img-fluid header-img wow animate__fadeInRight"
                    data-wow-delay="0.2s"
                />
            </div>
        </div>
        <div class="row align-items-center justify-content-start">
            <div class="col-sm-6">
                <img
                    src="<?php echo e(asset('assets/images/front/img-crm-dash-2.svg')); ?>"
                    alt="Datta Able Admin Template"
                    class="img-fluid header-img wow animate__fadeInLeft"
                    data-wow-delay="0.2s"
                />
            </div>
            <div class="col-sm-4">
                <h1
                    class="mb-sm-4 f-w-600 wow animate__fadeInRight"
                    data-wow-delay="0.2s"
                >
                    <?php echo e(__('Financial Management')); ?>

                </h1>
                <h2 class="mb-sm-4 wow animate__fadeInRight" data-wow-delay="0.4s">
                    <?php echo e(__('Complete Financial Control')); ?>

                </h2>
                <p class="mb-sm-4 wow animate__fadeInRight" data-wow-delay="0.6s">
                    Manage your finances with precision. Track expenses, generate invoices, monitor cash flow, and get detailed financial reports. Make informed decisions with comprehensive financial insights.
                </p>
                <div class="my-4 wow animate__fadeInRight" data-wow-delay="0.8s">
                    <a href="#" class="btn btn-primary" target="_blank"
                    ><i class="fas fa-chart-line me-2"></i>Explore Features</a
                    >
                </div>
            </div>
        </div>
    </div>
</section>
<!-- [ dashboard ] End -->
<!-- [ feature ] start -->
<section id="feature" class="feature">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-9 title">
                <h2>
                    <span class="d-block mb-3">Features</span> Powerful Tools for Modern Business
                </h2>
                <p class="m-0">
                    Discover how Buildera ERP SaaS can transform your business operations with our comprehensive suite of features
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div
                    class="card wow animate__fadeInUp"
                    data-wow-delay="0.2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"
                >
                    <div class="card-body">
                        <div class="theme-avtar bg-primary">
                            <i class="ti ti-chart-bar"></i>
                        </div>
                        <h6 class="text-muted mt-4">ANALYTICS</h6>
                        <h4 class="my-3 f-w-600">Business Intelligence</h4>
                        <p class="mb-0">
                            Get real-time insights with advanced analytics and customizable dashboards. Track KPIs, generate reports, and make data-driven decisions to grow your business.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div
                    class="card wow animate__fadeInUp"
                    data-wow-delay="0.4s"
                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"
                >
                    <div class="card-body">
                        <div class="theme-avtar bg-success">
                            <i class="ti ti-users"></i>
                        </div>
                        <h6 class="text-muted mt-4">TEAM MANAGEMENT</h6>
                        <h4 class="my-3 f-w-600">HR & CRM</h4>
                        <p class="mb-0">
                            Streamline your workforce management and customer relationships. Handle recruitment, performance tracking, and customer engagement all in one place.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div
                    class="card wow animate__fadeInUp"
                    data-wow-delay="0.6s"
                    style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;"
                >
                    <div class="card-body">
                        <div class="theme-avtar bg-warning">
                            <i class="ti ti-file-invoice"></i>
                        </div>
                        <h6 class="text-muted mt-4">FINANCE</h6>
                        <h4 class="my-3 f-w-600">Accounting Suite</h4>
                        <p class="mb-0">
                            Manage your finances efficiently with our comprehensive accounting tools. Track expenses, generate invoices, and maintain accurate financial records.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div
                    class="card wow animate__fadeInUp"
                    data-wow-delay="0.8s"
                    style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;"
                >
                    <div class="card-body">
                        <div class="theme-avtar bg-danger">
                            <i class="ti ti-checklist"></i>
                        </div>
                        <h6 class="text-muted mt-4">PROJECTS</h6>
                        <h4 class="my-3 f-w-600">Project Management</h4>
                        <p class="mb-0">
                            Plan, track, and manage projects with ease. Set milestones, assign tasks, and monitor progress in real-time to ensure successful project delivery.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center pt-sm-5 feature-mobile-screen">
            <a href="<?php echo e(route('login')); ?>" class="btn px-sm-5 btn-primary me-sm-3">Try Demo</a>
            <a href="https://codecanyon.net/item/erpgo-saas-all-in-one-business-erp-with-project-account-hrm-crm/33263426" class="btn px-sm-5 btn-outline-primary" target="_blank">
                Get Started
            </a>
        </div>
    </div>
</section>
<!-- [ feature ] End -->
<!-- [ dashboard ] start -->
<section class="">
    <div class="container">
        <div class="row align-items-center justify-content-end mb-5">
            <div class="col-sm-4">
                <h1
                    class="mb-sm-4 f-w-600 wow animate__fadeInLeft"
                    data-wow-delay="0.2s"
                >
                    <?php echo e(__('HR & CRM')); ?>

                </h1>
                <h2 class="mb-sm-4 wow animate__fadeInLeft" data-wow-delay="0.4s">
                    <?php echo e(__('Manage Your Team & Customers')); ?>

                </h2>
                <p class="mb-sm-4 wow animate__fadeInLeft" data-wow-delay="0.6s">
                    Handle employee management, recruitment, and performance tracking. Build stronger customer relationships with our powerful CRM tools. Everything you need to grow your business.
                </p>
                <div class="my-4 wow animate__fadeInLeft" data-wow-delay="0.8s">
                    <a href="#" class="btn btn-primary" target="_blank"
                    ><i class="fas fa-users me-2"></i>Discover More</a
                    >
                </div>
            </div>
            <div class="col-sm-6">
                <img
                    src="<?php echo e(asset('landing/images/dash-2.svg')); ?>"
                    alt="Datta Able Admin Template"
                    class="img-fluid header-img wow animate__fadeInRight"
                    data-wow-delay="0.2s"
                />
            </div>
        </div>
        <div class="row align-items-center justify-content-start">
            <div class="col-sm-6">
                <img
                    src="<?php echo e(asset('assets/images/front/img-crm-dash-4.svg')); ?>"
                    alt="Datta Able Admin Template"
                    class="img-fluid header-img wow animate__fadeInLeft"
                    data-wow-delay="0.2s"
                />
            </div>
            <div class="col-sm-4">
                <h1
                    class="mb-sm-4 f-w-600 wow animate__fadeInRight"
                    data-wow-delay="0.2s"
                >
                    <?php echo e(__('Business Intelligence')); ?>

                </h1>
                <h2 class="mb-sm-4 wow animate__fadeInRight" data-wow-delay="0.4s">
                    <?php echo e(__('Data-Driven Insights')); ?>

                </h2>
                <p class="mb-sm-4 wow animate__fadeInRight" data-wow-delay="0.6s">
                    Transform your business data into actionable insights. Get real-time analytics, custom reports, and performance metrics. Make smarter decisions with our powerful business intelligence tools.
                </p>
                <div class="my-4 wow animate__fadeInRight" data-wow-delay="0.8s">
                    <a href="#" class="btn btn-primary" target="_blank"
                    ><i class="fas fa-chart-bar me-2"></i>View Analytics</a
                    >
                </div>
            </div>
        </div>
    </div>
</section>
<!-- [ dashboard ] End -->
<!-- [ price ] start -->
<section id="price" class="price-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-9 title">
                <h2>
                    <span class="d-block mb-3">Pricing Plans</span> Choose the Perfect Plan for Your Business
                </h2>
                <p class="m-0">
                    Flexible pricing options designed to scale with your business needs
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div
                    class="card price-card price-1 wow animate__fadeInUp"
                    data-wow-delay="0.2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"
                >
                    <div class="card-body">
                        <span class="price-badge bg-primary">STARTER</span>
                        <span class="mb-4 f-w-600 p-price">$29<small class="text-sm">/month</small></span>
                        <p class="mb-0">
                            Perfect for small businesses and startups looking to streamline their operations
                        </p>
                        <ul class="list-unstyled my-5">
                            <li>
                                <span class="theme-avtar">
                                    <i class="text-primary ti ti-circle-check"></i>
                                </span>
                                Up to 5 team members
                            </li>
                            <li>
                                <span class="theme-avtar">
                                    <i class="text-primary ti ti-circle-check"></i>
                                </span>
                                Basic CRM features
                            </li>
                            <li>
                                <span class="theme-avtar">
                                    <i class="text-primary ti ti-circle-check"></i>
                                </span>
                                Project management
                            </li>
                            <li>
                                <span class="theme-avtar">
                                    <i class="text-primary ti ti-circle-check"></i>
                                </span>
                                Basic reporting
                            </li>
                            <li>
                                <span class="theme-avtar">
                                    <i class="text-primary ti ti-circle-check"></i>
                                </span>
                                Email support
                            </li>
                        </ul>
                        <div class="d-grid text-center">
                            <a href="<?php echo e(route('register')); ?>" class="btn mb-3 btn-primary d-flex justify-content-center align-items-center mx-sm-5">
                                Start Free Trial
                                <i class="ti ti-chevron-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div
                    class="card price-card price-2 bg-primary wow animate__fadeInUp"
                    data-wow-delay="0.4s"
                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"
                >
                    <div class="card-body">
                        <span class="price-badge">PROFESSIONAL</span>
                        <span class="mb-4 f-w-600 p-price">$79<small class="text-sm">/month</small></span>
                        <p class="mb-0">
                            Ideal for growing businesses that need advanced features and more users
                        </p>
                        <ul class="list-unstyled my-5">
                            <li>
                                <span class="theme-avtar">
                                    <i class="text-white ti ti-circle-check"></i>
                                </span>
                                Up to 20 team members
                            </li>
                            <li>
                                <span class="theme-avtar">
                                    <i class="text-white ti ti-circle-check"></i>
                                </span>
                                Advanced CRM features
                            </li>
                            <li>
                                <span class="theme-avtar">
                                    <i class="text-white ti ti-circle-check"></i>
                                </span>
                                Full project management
                            </li>
                            <li>
                                <span class="theme-avtar">
                                    <i class="text-white ti ti-circle-check"></i>
                                </span>
                                Advanced analytics
                            </li>
                            <li>
                                <span class="theme-avtar">
                                    <i class="text-white ti ti-circle-check"></i>
                                </span>
                                Priority support
                            </li>
                            <li>
                                <span class="theme-avtar">
                                    <i class="text-white ti ti-circle-check"></i>
                                </span>
                                Custom integrations
                            </li>
                        </ul>
                        <div class="d-grid text-center">
                            <a href="<?php echo e(route('register')); ?>" class="btn mb-3 btn-light d-flex justify-content-center align-items-center mx-sm-5">
                                Start Free Trial
                                <i class="ti ti-chevron-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div
                    class="card price-card price-3 wow animate__fadeInUp"
                    data-wow-delay="0.6s"
                    style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;"
                >
                    <div class="card-body">
                        <span class="price-badge bg-primary">ENTERPRISE</span>
                        <span class="mb-4 f-w-600 p-price">Custom<small class="text-sm">/month</small></span>
                        <p class="mb-0">
                            Tailored solutions for large organizations with specific requirements
                        </p>
                        <ul class="list-unstyled my-5">
                            <li>
                                <span class="theme-avtar">
                                    <i class="text-primary ti ti-circle-check"></i>
                                </span>
                                Unlimited team members
                            </li>
                            <li>
                                <span class="theme-avtar">
                                    <i class="text-primary ti ti-circle-check"></i>
                                </span>
                                Enterprise-grade security
                            </li>
                            <li>
                                <span class="theme-avtar">
                                    <i class="text-primary ti ti-circle-check"></i>
                                </span>
                                Custom development
                            </li>
                            <li>
                                <span class="theme-avtar">
                                    <i class="text-primary ti ti-circle-check"></i>
                                </span>
                                Dedicated support team
                            </li>
                            <li>
                                <span class="theme-avtar">
                                    <i class="text-primary ti ti-circle-check"></i>
                                </span>
                                SLA guarantee
                            </li>
                            <li>
                                <span class="theme-avtar">
                                    <i class="text-primary ti ti-circle-check"></i>
                                </span>
                                On-premise option
                            </li>
                        </ul>
                        <div class="d-grid text-center">
                            <a href="#" class="btn mb-3 btn-primary d-flex justify-content-center align-items-center mx-sm-5" onclick="contactSales()">
                                Contact Sales
                                <i class="ti ti-chevron-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- [ price ] End -->
<!-- [ faq ] start -->
<section class="faq">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-9 title">
                <h2><span>Frequently Asked Questions</span></h2>
                <p class="m-0">
                    Find answers to common questions about our Buildera ERP SaaS platform
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-10 col-xxl-8">
                <div class="accordion accordion-flush" id="accordionExample">
                    <div class="accordion-item card">
                        <h2 class="accordion-header" id="headingOne">
                            <button
                                class="accordion-button"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseOne"
                                aria-expanded="true"
                                aria-controls="collapseOne"
                            >
                                <span class="d-flex align-items-center">
                                    <i class="ti ti-info-circle text-primary"></i> What is Buildera ERP SaaS?
                                </span>
                            </button>
                        </h2>
                        <div
                            id="collapseOne"
                            class="accordion-collapse collapse show"
                            aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                Buildera ERP SaaS is a comprehensive business management solution that combines Project Management, Accounting, HR, and CRM functionalities in one platform. It helps businesses streamline operations, improve productivity, and make data-driven decisions through real-time insights and analytics.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item card">
                        <h2 class="accordion-header" id="headingTwo">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo"
                                aria-expanded="false"
                                aria-controls="collapseTwo"
                            >
                                <span class="d-flex align-items-center">
                                    <i class="ti ti-info-circle text-primary"></i> How secure is my data?
                                </span>
                            </button>
                        </h2>
                        <div
                            id="collapseTwo"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                Your data security is our top priority. We implement industry-standard security measures including:
                                <ul>
                                    <li>End-to-end encryption for data transmission</li>
                                    <li>Regular security audits and updates</li>
                                    <li>Automated backup systems</li>
                                    <li>Role-based access control</li>
                                    <li>Compliance with data protection regulations</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item card">
                        <h2 class="accordion-header" id="headingThree">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseThree"
                                aria-expanded="false"
                                aria-controls="collapseThree"
                            >
                                <span class="d-flex align-items-center">
                                    <i class="ti ti-info-circle text-primary"></i> Can I customize the platform for my business needs?
                                </span>
                            </button>
                        </h2>
                        <div
                            id="collapseThree"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                Yes, Buildera ERP SaaS is highly customizable to meet your specific business requirements. You can:
                                <ul>
                                    <li>Customize workflows and processes</li>
                                    <li>Create custom fields and forms</li>
                                    <li>Configure user roles and permissions</li>
                                    <li>Integrate with other business tools</li>
                                    <li>Personalize dashboards and reports</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item card">
                        <h2 class="accordion-header" id="headingFour">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseFour"
                                aria-expanded="false"
                                aria-controls="collapseFour"
                            >
                                <span class="d-flex align-items-center">
                                    <i class="ti ti-info-circle text-primary"></i> What kind of support do you offer?
                                </span>
                            </button>
                        </h2>
                        <div
                            id="collapseFour"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                We provide comprehensive support to ensure your success:
                                <ul>
                                    <li>24/7 technical support via email and chat</li>
                                    <li>Regular training sessions and webinars</li>
                                    <li>Detailed documentation and knowledge base</li>
                                    <li>Dedicated account manager for enterprise clients</li>
                                    <li>Regular updates and feature enhancements</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item card">
                        <h2 class="accordion-header" id="headingFive">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseFive"
                                aria-expanded="false"
                                aria-controls="collapseFive"
                            >
                                <span class="d-flex align-items-center">
                                    <i class="ti ti-info-circle text-primary"></i> How does the pricing work?
                                </span>
                            </button>
                        </h2>
                        <div
                            id="collapseFive"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                We offer flexible pricing plans to suit businesses of all sizes:
                                <ul>
                                    <li>Pay-as-you-grow subscription model</li>
                                    <li>No hidden fees or setup costs</li>
                                    <li>Volume discounts for larger teams</li>
                                    <li>Free trial period to test the platform</li>
                                    <li>Custom enterprise pricing for large organizations</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- [ faq ] End -->
<!-- [ dashboard ] start -->
<section class="side-feature">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-3">
                <h1
                    class="mb-sm-4 f-w-600 wow animate__fadeInLeft"
                    data-wow-delay="0.2s"
                >
                    <?php echo e(__('Cloud-Based Solution')); ?>

                </h1>
                <h2 class="mb-sm-4 wow animate__fadeInLeft" data-wow-delay="0.4s">
                    <?php echo e(__('Access Anywhere, Anytime')); ?>

                </h2>
                <p class="mb-sm-4 wow animate__fadeInLeft" data-wow-delay="0.6s">
                    Work seamlessly across devices with our cloud-based platform. Secure data storage, automatic backups, and regular updates. Focus on growing your business while we handle the technology.
                </p>
                <div class="my-4 wow animate__fadeInLeft" data-wow-delay="0.8s">
                    <a href="#" class="btn btn-primary" target="_blank"
                    ><i class="fas fa-cloud me-2"></i>Learn More</a
                    >
                </div>
            </div>
            <div class="col-sm-9">
                <div class="row feature-img-row">
                    <div class="col-3">
                        <img
                            src="<?php echo e(asset('landing/images/dashboard.png')); ?>"
                            class="img-fluid header-img wow animate__fadeInRight"
                            data-wow-delay="0.2s"
                            alt="Admin"
                        />
                    </div>
                    <div class="col-3">
                        <img
                            src="<?php echo e(asset('landing/images/dash-3.png')); ?>"
                            class="img-fluid header-img wow animate__fadeInRight"
                            data-wow-delay="0.4s"
                            alt="Admin"
                        />
                    </div>
                    <div class="col-3">
                        <img
                            src="<?php echo e(asset('landing/images/dash-4.png')); ?>"
                            class="img-fluid header-img wow animate__fadeInRight"
                            data-wow-delay="0.6s"
                            alt="Admin"
                        />
                    </div>
                    <div class="col-3">
                        <img
                            src="<?php echo e(asset('landing/images/dash-5.png')); ?>"
                            class="img-fluid header-img wow animate__fadeInRight"
                            data-wow-delay="0.8s"
                            alt="Admin"
                        />
                    </div>
                    <div class="col-3 mt-5">
                        <img
                            src="<?php echo e(asset('landing/images/dash-6.png')); ?>"
                            class="img-fluid header-img wow animate__fadeInRight"
                            data-wow-delay="0.3s"
                            alt="Admin"
                        />
                    </div>
                    <div class="col-3 mt-5">
                        <img
                            src="<?php echo e(asset('landing/images/dash-7.png')); ?>"
                            class="img-fluid header-img wow animate__fadeInRight"
                            data-wow-delay="0.5s"
                            alt="Admin"
                        />
                    </div>
                    <div class="col-3 mt-5">
                        <img
                            src="<?php echo e(asset('landing/images/dash-8.png')); ?>"
                            class="img-fluid header-img wow animate__fadeInRight"
                            data-wow-delay="0.7s"
                            alt="Admin"
                        />
                    </div>
                    <div class="col-3 mt-5">
                        <img
                            src="<?php echo e(asset('landing/images/dash-9.png')); ?>"
                            class="img-fluid header-img wow animate__fadeInRight"
                            data-wow-delay="0.9s"
                            alt="Admin"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- [ dashboard ] End -->
<!-- [ dashboard ] start -->
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <?php if($settings['cust_darklayout'] && $settings['cust_darklayout'] == 'on' ): ?>

                    <img src="<?php echo e($logo . '/' . (isset($company_logos) && !empty($company_logos) ? $company_logos : 'logo-dark.png')); ?>"
                         alt="logo" style="width: 150px;" >
                <?php else: ?>

                    <img src="<?php echo e($logo . '/' . (isset($company_logo) && !empty($company_logo) ? $company_logo : 'logo-dark.png')); ?>"
                         alt="logo" style="width: 150px;" >
                <?php endif; ?>
            </div>
            <div class="col-lg-6 col-sm-12 text-end">
                <p class="text-body">Copyright © <?php echo e(date('Y')); ?> Buildera ERP SaaS | All Rights Reserved</p>
            </div>
        </div>
    </div>
</section>
<!-- [ dashboard ] End -->
<!-- Required Js -->
<script src="<?php echo e(asset('assets/js/plugins/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/pages/wow.min.js')); ?>"></script>
<script>
    // Start [ Menu hide/show on scroll ]
    let ost = 0;
    document.addEventListener("scroll", function () {
        let cOst = document.documentElement.scrollTop;
        if (cOst == 0) {
            document.querySelector(".navbar").classList.add("top-nav-collapse");
        } else if (cOst > ost) {
            document.querySelector(".navbar").classList.add("top-nav-collapse");
            document.querySelector(".navbar").classList.remove("default");
        } else {
            document.querySelector(".navbar").classList.add("default");
            document
                .querySelector(".navbar")
                .classList.remove("top-nav-collapse");
        }
        ost = cOst;
    });
    // End [ Menu hide/show on scroll ]
    var wow = new WOW({
        animateClass: "animate__animated", // animation css class (default is animated)
    });
    wow.init();
    var scrollSpy = new bootstrap.ScrollSpy(document.body, {
        target: "#navbar-example",
    });
    function contactSales() {
        // Add your contact sales logic here
        alert('Please contact our sales team at sales@builderasaas.com for enterprise pricing.');
    }
</script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\crm-saas\resources\views/layouts/landing.blade.php ENDPATH**/ ?>