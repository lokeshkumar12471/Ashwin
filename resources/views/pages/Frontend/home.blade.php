<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>Techwind - Tailwind CSS Multipurpose Landing Page Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Tailwind CSS Saas & Software Landing Page Template" name="description" />
    <meta name="author" content="Shreethemes" />
    <meta name="website" content="https://shreethemes.in" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="version" content="1.2.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

    <!-- Css -->
    <link href="assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet" />
    <link href="assets/libs/tobii/css/tobii.min.css" rel="stylesheet" />
    <!-- Main Css -->
    <link href="assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/icons.css" />
    <link rel="stylesheet" href="assets/css/tailwind.css" />
</head>

<body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">
    <!-- Loader Start -->
    <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
    <!-- Loader End -->

    <!-- Start Navbar -->
    <nav id="topnav" class="defaultscroll is-sticky">
        <div class="container">
            <!-- Logo container-->
            <a class="logo" href="index.html">
                <span class="inline-block dark:hidden">
                    <img src="assets/images/logo-dark.png" class="l-dark" height="24" alt="" />
                    <img src="assets/images/logo-light.png" class="l-light" height="24" alt="" />
                </span>
                <img src="assets/images/logo-light.png" height="24" class="hidden dark:inline-block"
                    alt="" />
            </a>

            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <!--Login button Start-->
            <ul class="buy-button list-none mb-0">
                <li class="inline mb-0">
                    <a href="">
                        <span class="login-btn-primary"><span
                                class="btn btn-icon rounded-full bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white"><i
                                    data-feather="settings" class="h-4 w-4"></i></span></span>
                        <span class="login-btn-light"><span
                                class="btn btn-icon rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i
                                    data-feather="settings" class="h-4 w-4"></i></span></span>
                    </a>
                </li>

                <li class="inline pl-1 mb-0">
                    <a href="https://1.envato.market/techwind" target="_blank">
                        <div class="login-btn-primary">
                            <span
                                class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i
                                    data-feather="shopping-cart" class="h-4 w-4"></i></span>
                        </div>
                        <div class="login-btn-light">
                            <span
                                class="btn btn-icon rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i
                                    data-feather="shopping-cart" class="h-4 w-4"></i></span>
                        </div>
                    </a>
                </li>
            </ul>
            <!--Login button End-->

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu nav-light">
                    <li><a href="index.html" class="sub-menu-item">Home</a></li>

                    <li class="has-submenu parent-parent-menu-item">
                        <a href="javascript:void(0)">Landing</a><span class="menu-arrow"></span>

                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li>
                                        <a href="index-saas.html" class="sub-menu-item">Saas
                                            <span
                                                class="bg-emerald-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ml-1">Animation</span></a>
                                    </li>
                                    <li>
                                        <a href="index-apps.html" class="sub-menu-item">Application</a>
                                    </li>
                                    <li>
                                        <a href="index-smartwatch.html" class="sub-menu-item">Smartwatch</a>
                                    </li>
                                    <li>
                                        <a href="index-marketing.html" class="sub-menu-item">Marketing</a>
                                    </li>
                                    <li>
                                        <a href="index-it-solution.html" class="sub-menu-item">IT Solution</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <ul>
                                    <li>
                                        <a href="index-digital-agency.html" class="sub-menu-item">Digital Agency</a>
                                    </li>
                                    <li>
                                        <a href="index-job.html" class="sub-menu-item">Job</a>
                                    </li>
                                    <li>
                                        <a href="index-restaurent.html" class="sub-menu-item">Restaurent</a>
                                    </li>
                                    <li>
                                        <a href="index-hosting.html" class="sub-menu-item">Hosting</a>
                                    </li>
                                    <li>
                                        <a href="index-gym.html" class="sub-menu-item">Gym
                                            <span
                                                class="bg-black dark:bg-slate-50 text-white dark:text-slate-900 text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ml-1">Dark</span></a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <ul>
                                    <li>
                                        <a href="index-startup.html" class="sub-menu-item">Startup</a>
                                    </li>
                                    <li>
                                        <a href="index-hospital.html" class="sub-menu-item">Hospital</a>
                                    </li>
                                    <li>
                                        <a href="index-business.html" class="sub-menu-item">Business</a>
                                    </li>
                                    <li>
                                        <a href="index-corporate.html" class="sub-menu-item">Corporate</a>
                                    </li>
                                    <li>
                                        <a href="index-real-estate.html" class="sub-menu-item">Real Estate
                                            <span
                                                class="bg-amber-500 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ml-1">New</span></a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <ul>
                                    <li>
                                        <a href="index-crypto.html" class="sub-menu-item">Cryptocurrency
                                            <span
                                                class="bg-black dark:bg-slate-50 text-white dark:text-slate-900 text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ml-1">Dark</span></a>
                                    </li>
                                    <li>
                                        <a href="index-personal.html" class="sub-menu-item">Personal</a>
                                    </li>
                                    <li>
                                        <a href="index-portfolio.html" class="sub-menu-item">Portfolio</a>
                                    </li>
                                    <li>
                                        <a href="index-studio.html" class="sub-menu-item">Studio</a>
                                    </li>
                                    <li>
                                        <a href="index-coworking.html" class="sub-menu-item">Co-Woriking
                                            <span
                                                class="bg-amber-500 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ml-1">New</span></a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <ul>
                                    <li>
                                        <a href="index-landing-one.html" class="sub-menu-item">Landing One</a>
                                    </li>
                                    <li>
                                        <a href="index-landing-two.html" class="sub-menu-item">Landing Two</a>
                                    </li>
                                    <li>
                                        <a href="index-landing-three.html" class="sub-menu-item">Landing Three</a>
                                    </li>
                                    <li>
                                        <a href="index-landing-four.html" class="sub-menu-item">Landing Four</a>
                                    </li>
                                    <li>
                                        <a href="index-service.html" class="sub-menu-item">Service
                                            <span
                                                class="bg-amber-500 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ml-1">New</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu parent-parent-menu-item">
                        <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li class="has-submenu parent-menu-item">
                                <a href="javascript:void(0)"> Company </a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <a href="page-aboutus.html" class="sub-menu-item">
                                            About Us</a>
                                    </li>
                                    <li>
                                        <a href="page-services.html" class="sub-menu-item">Services</a>
                                    </li>
                                    <li>
                                        <a href="page-team.html" class="sub-menu-item"> Team</a>
                                    </li>
                                    <li>
                                        <a href="page-pricing.html" class="sub-menu-item">Pricing</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item">
                                <a href="javascript:void(0)">
                                    Accounts
                                    <span
                                        class="bg-amber-500 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ml-1">New</span></a><span
                                    class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <a href="user-profile.html" class="sub-menu-item">User Profile</a>
                                    </li>
                                    <li>
                                        <a href="user-billing.html" class="sub-menu-item">Billing</a>
                                    </li>
                                    <li>
                                        <a href="user-payment.html" class="sub-menu-item">Payment</a>
                                    </li>
                                    <li>
                                        <a href="user-invoice.html" class="sub-menu-item">Invoice</a>
                                    </li>
                                    <li>
                                        <a href="user-social.html" class="sub-menu-item">Social</a>
                                    </li>
                                    <li>
                                        <a href="user-notification.html" class="sub-menu-item">Notification</a>
                                    </li>
                                    <li>
                                        <a href="user-setting.html" class="sub-menu-item">Setting</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item">
                                <a href="javascript:void(0)">
                                    Reat Estate
                                    <span
                                        class="bg-amber-500 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ml-1">New</span></a><span
                                    class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <a href="property-listing.html" class="sub-menu-item">Listing</a>
                                    </li>
                                    <li>
                                        <a href="property-detail.html" class="sub-menu-item">Property Detail</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item">
                                <a href="javascript:void(0)"> Job / Careers </a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <a href="page-job-grid.html" class="sub-menu-item">All Jobs</a>
                                    </li>
                                    <li>
                                        <a href="page-job-detail.html" class="sub-menu-item">Job Detail</a>
                                    </li>
                                    <li>
                                        <a href="page-job-apply.html" class="sub-menu-item">Job Apply</a>
                                    </li>
                                    <li>
                                        <a href="page-job-candidates.html" class="sub-menu-item">Job Candidates</a>
                                    </li>
                                    <li>
                                        <a href="page-job-candidate-detail.html" class="sub-menu-item">Candidate
                                            Detail</a>
                                    </li>
                                    <li>
                                        <a href="page-job-companies.html" class="sub-menu-item">All Companies</a>
                                    </li>
                                    <li>
                                        <a href="page-job-company-detail.html" class="sub-menu-item">Company
                                            Detail</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item">
                                <a href="javascript:void(0)"> Helpcenter </a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <a href="helpcenter.html" class="sub-menu-item">Overview</a>
                                    </li>
                                    <li>
                                        <a href="helpcenter-faqs.html" class="sub-menu-item">FAQs</a>
                                    </li>
                                    <li>
                                        <a href="helpcenter-guides.html" class="sub-menu-item">Guides</a>
                                    </li>
                                    <li>
                                        <a href="helpcenter-support.html" class="sub-menu-item">Support</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item">
                                <a href="javascript:void(0)"> Blog </a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="blog.html" class="sub-menu-item">Blogs</a></li>
                                    <li>
                                        <a href="blog-sidebar.html" class="sub-menu-item">Blogs & Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="blog-detail.html" class="sub-menu-item">Blog Detail</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item">
                                <a href="javascript:void(0)"> Email Template</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <a href="email-confirmation.html" class="sub-menu-item">Confirmation</a>
                                    </li>
                                    <li>
                                        <a href="email-password-reset.html" class="sub-menu-item">Reset Password</a>
                                    </li>
                                    <li>
                                        <a href="email-alert.html" class="sub-menu-item">Alert</a>
                                    </li>
                                    <li>
                                        <a href="email-invoice.html" class="sub-menu-item">Invoice</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item">
                                <a href="javascript:void(0)"> Auth Pages </a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <a href="auth-login.html" class="sub-menu-item">Login</a>
                                    </li>
                                    <li>
                                        <a href="auth-signup.html" class="sub-menu-item">Signup</a>
                                    </li>
                                    <li>
                                        <a href="auth-re-password.html" class="sub-menu-item">Reset Password</a>
                                    </li>
                                    <li>
                                        <a href="auth-lock-screen.html" class="sub-menu-item">Lock Screen
                                            <span
                                                class="bg-amber-500 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ml-1">New</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item">
                                <a href="javascript:void(0)"> Utility </a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <a href="page-terms.html" class="sub-menu-item">Terms of Services</a>
                                    </li>
                                    <li>
                                        <a href="page-privacy.html" class="sub-menu-item">Privacy Policy</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item">
                                <a href="javascript:void(0)"> Special</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <a href="page-comingsoon.html" class="sub-menu-item">Coming Soon</a>
                                    </li>
                                    <li>
                                        <a href="page-maintenance.html" class="sub-menu-item">Maintenance</a>
                                    </li>
                                    <li>
                                        <a href="page-error.html" class="sub-menu-item">Error</a>
                                    </li>
                                    <li>
                                        <a href="page-thankyou.html" class="sub-menu-item">Thank you</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item">
                                <a href="javascript:void(0)"> Contact </a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <a href="contact-detail.html" class="sub-menu-item">Contact Detail</a>
                                    </li>
                                    <li>
                                        <a href="contact-one.html" class="sub-menu-item">Contact One</a>
                                    </li>
                                    <li>
                                        <a href="contact-two.html" class="sub-menu-item">Contact Two</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item">
                                <a href="javascript:void(0)"> Multi Level Menu</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <a href="javascript:void(0)" class="sub-menu-item">Level 1.0</a>
                                    </li>
                                    <li class="has-submenu parent-menu-item">
                                        <a href="javascript:void(0)"> Level 2.0 </a><span
                                            class="submenu-arrow"></span>
                                        <ul class="submenu">
                                            <li>
                                                <a href="javascript:void(0)" class="sub-menu-item">Level 2.1</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="sub-menu-item">Level 2.2</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu parent-parent-menu-item">
                        <a href="javascript:void(0)">Portfolio</a><span class="menu-arrow"></span>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li class="megamenu-head">Modern Portfolio</li>
                                    <li>
                                        <a href="portfolio-modern-two.html" class="sub-menu-item">Two Column</a>
                                    </li>
                                    <li>
                                        <a href="portfolio-modern-three.html" class="sub-menu-item">Three Column</a>
                                    </li>
                                    <li>
                                        <a href="portfolio-modern-four.html" class="sub-menu-item">Four Column</a>
                                    </li>
                                    <li>
                                        <a href="portfolio-modern-five.html" class="sub-menu-item">Five Column</a>
                                    </li>
                                    <li>
                                        <a href="portfolio-modern-six.html" class="sub-menu-item">Six Column</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <ul>
                                    <li class="megamenu-head">Classic Portfolio</li>
                                    <li>
                                        <a href="portfolio-classic-two.html" class="sub-menu-item">Two Column</a>
                                    </li>
                                    <li>
                                        <a href="portfolio-classic-three.html" class="sub-menu-item">Three Column</a>
                                    </li>
                                    <li>
                                        <a href="portfolio-classic-four.html" class="sub-menu-item">Four Column</a>
                                    </li>
                                    <li>
                                        <a href="portfolio-classic-five.html" class="sub-menu-item">Five Column</a>
                                    </li>
                                    <li>
                                        <a href="portfolio-classic-six.html" class="sub-menu-item">Six Column</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <ul>
                                    <li class="megamenu-head">Creative Portfolio</li>
                                    <li>
                                        <a href="portfolio-creative-two.html" class="sub-menu-item">Two Column</a>
                                    </li>
                                    <li>
                                        <a href="portfolio-creative-three.html" class="sub-menu-item">Three Column</a>
                                    </li>
                                    <li>
                                        <a href="portfolio-creative-four.html" class="sub-menu-item">Four Column</a>
                                    </li>
                                    <li>
                                        <a href="portfolio-creative-five.html" class="sub-menu-item">Five Column</a>
                                    </li>
                                    <li>
                                        <a href="portfolio-creative-six.html" class="sub-menu-item">Six Column</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <ul>
                                    <li class="megamenu-head">Masonry Portfolio</li>
                                    <li>
                                        <a href="portfolio-masonry-two.html" class="sub-menu-item">Two Column</a>
                                    </li>
                                    <li>
                                        <a href="portfolio-masonry-three.html" class="sub-menu-item">Three Column</a>
                                    </li>
                                    <li>
                                        <a href="portfolio-masonry-four.html" class="sub-menu-item">Four Column</a>
                                    </li>
                                    <li>
                                        <a href="portfolio-masonry-five.html" class="sub-menu-item">Five Column</a>
                                    </li>
                                    <li>
                                        <a href="portfolio-masonry-six.html" class="sub-menu-item">Six Column</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <ul>
                                    <li class="megamenu-head">Portfolio Detail</li>
                                    <li>
                                        <a href="portfolio-detail-one.html" class="sub-menu-item">Portfolio One</a>
                                    </li>
                                    <li>
                                        <a href="portfolio-detail-two.html" class="sub-menu-item">Portfolio Two</a>
                                    </li>
                                    <li>
                                        <a href="portfolio-detail-three.html" class="sub-menu-item">Portfolio
                                            Three</a>
                                    </li>
                                    <li>
                                        <a href="portfolio-detail-four.html" class="sub-menu-item">Portfolio Four</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu parent-menu-item">
                        <a href="javascript:void(0)">Docs</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li>
                                <a href="documentation.html" class="sub-menu-item">Documentation</a>
                            </li>
                            <li>
                                <a href="changelog.html" class="sub-menu-item">Changelog</a>
                            </li>
                            <li><a href="widget.html" class="sub-menu-item">Widget</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="contact-one.html" target="_blank" class="sub-menu-item">Contact</a>
                    </li>
                </ul>
                <!--end navigation menu-->
            </div>
            <!--end navigation-->
        </div>
        <!--end container-->
    </nav>
    <!--end header-->
    <!-- End Navbar -->

    <!-- Start Hero -->
    <section
        class="relative table w-full py-36 lg:py-64 bg-[url('../../assets/images/hospital/bg.jpg')] bg-no-repeat bg-center">
        <div class="absolute inset-0 bg-black opacity-75"></div>
        <div class="container">
            <div class="grid grid-cols-1 mt-10">
                <img src="assets/images/logo-icon-40.png" alt="" />

                <h1 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-6 mt-3">
                    Meet The <br />
                    Best Doctor
                </h1>
                <p class="text-white/60 text-lg max-w-xl">
                    Great doctor if you need your family member to get effective
                    immediate assistance, emergency treatment or a simple consultation.
                </p>

                <div class="mt-8">
                    <a href=""
                        class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Make
                        Appointment</a>

                    <p class="text-white/60 text-base mt-2">
                        T&C apply. Please read
                        <a href="" class="text-white">Terms and Conditions <i
                                class="uil uil-arrow-right"></i></a>
                    </p>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <div class="relative">
        <div class="shape overflow-hidden z-1 text-white dark:text-slate-900">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- End Hero -->

    <!-- FEATURES START -->
    <section class="relative md:py-24 py-16">
        <div class="container">
            <div class="flex justify-center">
                <div
                    class="features-absolute lg:w-10/12 bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md p-6">
                    <div class="grid md:grid-cols-3 grid-cols-1 gap-[24px]">
                        <div class="">
                            <div
                                class="w-16 h-16 bg-indigo-600/5 text-indigo-600 rounded-lg text-2xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-700">
                                <i class="uil uil-clinic-medical"></i>
                            </div>

                            <div class="content mt-6">
                                <h5 class="text-lg font-medium">Emergency Cases</h5>
                                <p class="text-slate-400 mt-3">
                                    This is required when, for example, the is not yet
                                    available. Dummy text is also known as 'fill text'.
                                </p>

                                <div class="mt-5">
                                    <a href=""
                                        class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read
                                        More <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end feature content-->

                        <div class="">
                            <div
                                class="w-16 h-16 bg-indigo-600/5 text-indigo-600 rounded-lg text-2xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-700">
                                <i class="uil uil-medkit"></i>
                            </div>

                            <div class="content mt-6">
                                <h5 class="text-lg font-medium">Doctors Timetable</h5>
                                <p class="text-slate-400 mt-3">
                                    This is required when, for example, the is not yet
                                    available. Dummy text is also known as 'fill text'.
                                </p>

                                <div class="mt-5">
                                    <a href=""
                                        class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read
                                        More <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end feature content-->

                        <div class="">
                            <div
                                class="w-16 h-16 bg-indigo-600/5 text-indigo-600 rounded-lg text-2xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-700">
                                <i class="uil uil-clock"></i>
                            </div>

                            <div class="content mt-6">
                                <h5 class="text-lg font-medium">Opening Hours</h5>
                                <ul class="list-none mt-3">
                                    <li class="flex justify-between">
                                        <p class="text-slate-400">Monday - Friday</p>
                                        <p class="text-indigo-600">8.00 - 20.00</p>
                                    </li>
                                    <li class="flex justify-between">
                                        <p class="text-slate-400">Saturday</p>
                                        <p class="text-indigo-600">8.00 - 18.00</p>
                                    </li>
                                    <li class="flex justify-between">
                                        <p class="text-slate-400">Sunday</p>
                                        <p class="text-indigo-600">8.00 - 14.00</p>
                                    </li>
                                </ul>

                                <div class="mt-5">
                                    <a href=""
                                        class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read
                                        More <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end feature content-->
                    </div>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="container md:mt-24 mt-16">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="md:col-span-5">
                    <div class="relative">
                        <img src="assets/images/hospital/about-2.png" class="rounded-md" alt="" />
                        <div class="absolute bottom-2/4 translate-y-2/4 right-0 left-0 text-center">
                            <a href="#!" data-type="youtube" data-id="yba7hPeTSjk"
                                class="lightbox h-20 w-20 rounded-full shadow-lg dark:shadow-gray-700 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600">
                                <i class="mdi mdi-play inline-flex items-center justify-center text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="md:col-span-7">
                    <div class="lg:ml-4">
                        <h4 class="mb-6 md:text-3xl text-2xl lg:leading-normal leading-normal font-medium">
                            About Our Treatments
                        </h4>
                        <p class="text-slate-400 max-w-xl">
                            Great doctor if you need your family member to get effective
                            immediate assistance, examination, emergency treatment or a
                            simple consultation. Thank you.
                        </p>
                        <p class="text-slate-400 max-w-xl mt-3">
                            The most well-known dummy text is the 'Lorem Ipsum', which is
                            said to have originated in the 16th century. Lorem Ipsum is
                            composed in a pseudo-Latin language which more or less
                            corresponds to 'proper' Latin. It contains a series of real
                            Latin words.
                        </p>
                        <a href=""
                            class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-3">Read
                            More <i class="mdi mdi-chevron-right align-middle"></i></a>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="container md:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">
                    Our Medical Services
                </h3>

                <p class="text-slate-400 max-w-xl mx-auto">
                    Great doctor if you need your family member to get effective
                    immediate assistance, emergency treatment or a simple consultation.
                </p>
            </div>
            <!--end grid-->

            <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 mt-8 gap-[30px]">
                <div class="text-center md:px-6">
                    <div
                        class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-3xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-700 mx-auto">
                        <i class="uil uil-eye"></i>
                    </div>

                    <div class="content mt-7">
                        <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">Eye
                            Care</a>
                        <p class="text-slate-400 mt-3">
                            The phrasal sequence of the Lorem Ipsum text is now so that many
                        </p>
                    </div>
                </div>

                <div class="text-center md:px-6">
                    <div
                        class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-3xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-700 mx-auto">
                        <i class="uil uil-syringe"></i>
                    </div>

                    <div class="content mt-7">
                        <a href="page-services.html"
                            class="title h5 text-lg font-medium hover:text-indigo-600">Psychotherapy</a>
                        <p class="text-slate-400 mt-3">
                            The phrasal sequence of the Lorem Ipsum text is now so that many
                        </p>
                    </div>
                </div>

                <div class="text-center md:px-6">
                    <div
                        class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-3xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-700 mx-auto">
                        <i class="uil uil-thermometer"></i>
                    </div>

                    <div class="content mt-7">
                        <a href="page-services.html"
                            class="title h5 text-lg font-medium hover:text-indigo-600">Primary Care</a>
                        <p class="text-slate-400 mt-3">
                            The phrasal sequence of the Lorem Ipsum text is now so that many
                        </p>
                    </div>
                </div>

                <div class="text-center md:px-6">
                    <div
                        class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-3xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-700 mx-auto">
                        <i class="uil uil-tablets"></i>
                    </div>

                    <div class="content mt-7">
                        <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">Dental
                            Care</a>
                        <p class="text-slate-400 mt-3">
                            The phrasal sequence of the Lorem Ipsum text is now so that many
                        </p>
                    </div>
                </div>

                <div class="text-center md:px-6">
                    <div
                        class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-3xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-700 mx-auto">
                        <i class="uil uil-microscope"></i>
                    </div>

                    <div class="content mt-7">
                        <a href="page-services.html"
                            class="title h5 text-lg font-medium hover:text-indigo-600">Orthopedic</a>
                        <p class="text-slate-400 mt-3">
                            The phrasal sequence of the Lorem Ipsum text is now so that many
                        </p>
                    </div>
                </div>

                <div class="text-center md:px-6">
                    <div
                        class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-3xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-700 mx-auto">
                        <i class="uil uil-heart-rate"></i>
                    </div>

                    <div class="content mt-7">
                        <a href="page-services.html"
                            class="title h5 text-lg font-medium hover:text-indigo-600">Cardiology</a>
                        <p class="text-slate-400 mt-3">
                            The phrasal sequence of the Lorem Ipsum text is now so that many
                        </p>
                    </div>
                </div>

                <div class="text-center md:px-6">
                    <div
                        class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-3xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-700 mx-auto">
                        <i class="uil uil-hospital"></i>
                    </div>

                    <div class="content mt-7">
                        <a href="page-services.html"
                            class="title h5 text-lg font-medium hover:text-indigo-600">Gynecology</a>
                        <p class="text-slate-400 mt-3">
                            The phrasal sequence of the Lorem Ipsum text is now so that many
                        </p>
                    </div>
                </div>

                <div class="text-center md:px-6">
                    <div
                        class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-3xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-700 mx-auto">
                        <i class="uil uil-band-aid"></i>
                    </div>

                    <div class="content mt-7">
                        <a href="page-services.html"
                            class="title h5 text-lg font-medium hover:text-indigo-600">Neurology</a>
                        <p class="text-slate-400 mt-3">
                            The phrasal sequence of the Lorem Ipsum text is now so that many
                        </p>
                    </div>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End -->

    <!-- Start Section-->
    <section class="relative md:py-24 py-16 md:pb-0 pb-0 bg-gray-50 dark:bg-slate-800">
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">
                    Doctors Time Table
                </h3>

                <p class="text-slate-400 max-w-xl mx-auto">
                    Great doctor if you need your family member to get effective
                    immediate assistance, emergency treatment or a simple consultation.
                </p>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="container-fluid relative">
            <div class="grid grid-cols-1 mt-8">
                <div class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900">
                    <table class="w-full text-sm text-left">
                        <thead class="text-lg">
                            <tr>
                                <th class="text-center border dark:border-gray-700 py-6 min-w-[120px]">
                                    Time Table
                                </th>
                                <th class="text-center border dark:border-gray-700 py-6 min-w-[200px]">
                                    Monday
                                </th>
                                <th class="text-center border dark:border-gray-700 py-6 min-w-[200px]">
                                    Tuesday
                                </th>
                                <th class="text-center border dark:border-gray-700 py-6 min-w-[200px]">
                                    Wednesday
                                </th>
                                <th class="text-center border dark:border-gray-700 py-6 min-w-[200px]">
                                    Thursday
                                </th>
                                <th class="text-center border dark:border-gray-700 py-6 min-w-[200px]">
                                    Friday
                                </th>
                                <th class="text-center border dark:border-gray-700 py-6 min-w-[200px]">
                                    Saturday
                                </th>
                                <th class="text-center border dark:border-gray-700 py-6 min-w-[200px]">
                                    Sunday
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-center border dark:border-gray-700 py-5">
                                    09:00AM
                                </th>
                                <td class="p-3 border dark:border-gray-700">
                                    <div class="flex items-center mb-3">
                                        <img src="assets/images/client/01.jpg" class="h-12 w-12 rounded-full shadow"
                                            alt="" />
                                        <div class="ml-3">
                                            <h6 class="block font-medium text-lg">Calvin Carlo</h6>
                                            <span class="text-slate-400">Eye Care</span>
                                        </div>
                                    </div>
                                    <span
                                        class="py-2 px-4 bg-indigo-600/5 text-indigo-600 rounded-md block text-center">09:00AM
                                        - 10:00AM</span>
                                </td>
                                <td class="border dark:border-gray-700"></td>
                                <td class="border dark:border-gray-700"></td>
                                <td class="border dark:border-gray-700"></td>
                                <td class="p-3 border dark:border-gray-700">
                                    <div class="flex items-center mb-3">
                                        <img src="assets/images/client/03.jpg" class="h-12 w-12 rounded-full shadow"
                                            alt="" />
                                        <div class="ml-3">
                                            <h6 class="block font-medium text-lg">Alia Reddy</h6>
                                            <span class="text-slate-400">Psychotherapy</span>
                                        </div>
                                    </div>
                                    <span
                                        class="py-2 px-4 bg-indigo-600/5 text-indigo-600 rounded-md block text-center">09:00AM
                                        - 01:00PM</span>
                                </td>
                                <td class="border dark:border-gray-700"></td>
                                <td class="border dark:border-gray-700"></td>
                            </tr>

                            <tr>
                                <th class="text-center border dark:border-gray-700 py-5">
                                    11:00AM
                                </th>
                                <td class="border dark:border-gray-700"></td>
                                <td class="p-3 border dark:border-gray-700">
                                    <div class="flex items-center mb-3">
                                        <img src="assets/images/client/02.jpg" class="h-12 w-12 rounded-full shadow"
                                            alt="" />
                                        <div class="ml-3">
                                            <h6 class="block font-medium text-lg">
                                                Cristino Murphy
                                            </h6>
                                            <span class="text-slate-400">Gynecology</span>
                                        </div>
                                    </div>
                                    <span
                                        class="py-2 px-4 bg-indigo-600/5 text-indigo-600 rounded-md block text-center">11:00AM
                                        - 04:00PM</span>
                                </td>
                                <td class="border dark:border-gray-700"></td>
                                <td class="p-3 border dark:border-gray-700">
                                    <div class="flex items-center mb-3">
                                        <img src="assets/images/client/05.jpg" class="h-12 w-12 rounded-full shadow"
                                            alt="" />
                                        <div class="ml-3">
                                            <h6 class="block font-medium text-lg">
                                                Jennifer Ballance
                                            </h6>
                                            <span class="text-slate-400">Cardiology</span>
                                        </div>
                                    </div>
                                    <span
                                        class="py-2 px-4 bg-indigo-600/5 text-indigo-600 rounded-md block text-center">11:00AM
                                        - 12:00PM</span>
                                </td>
                                <td class="border dark:border-gray-700"></td>
                                <td class="p-3 border dark:border-gray-700">
                                    <div class="flex items-center mb-3">
                                        <img src="assets/images/client/04.jpg" class="h-12 w-12 rounded-full shadow"
                                            alt="" />
                                        <div class="ml-3">
                                            <h6 class="block font-medium text-lg">Toni Kovar</h6>
                                            <span class="text-slate-400">Orthopedic</span>
                                        </div>
                                    </div>
                                    <span
                                        class="py-2 px-4 bg-indigo-600/5 text-indigo-600 rounded-md block text-center">09:00AM
                                        - 10:00AM</span>
                                </td>
                                <td class="border dark:border-gray-700"></td>
                            </tr>

                            <tr>
                                <th class="text-center border dark:border-gray-700 py-5">
                                    02:00PM
                                </th>
                                <td class="border dark:border-gray-700"></td>
                                <td class="border dark:border-gray-700"></td>
                                <td class="p-3 border dark:border-gray-700">
                                    <div class="flex items-center mb-3">
                                        <img src="assets/images/client/06.jpg" class="h-12 w-12 rounded-full shadow"
                                            alt="" />
                                        <div class="ml-3">
                                            <h6 class="block font-medium text-lg">
                                                Tara Arrington
                                            </h6>
                                            <span class="text-slate-400">Neurology</span>
                                        </div>
                                    </div>
                                    <span
                                        class="py-2 px-4 bg-indigo-600/5 text-indigo-600 rounded-md block text-center">02:00PM
                                        - 04:00PM</span>
                                </td>
                                <td class="border dark:border-gray-700"></td>
                                <td class="p-3 border dark:border-gray-700">
                                    <div class="flex items-center mb-3">
                                        <img src="assets/images/client/05.jpg" class="h-12 w-12 rounded-full shadow"
                                            alt="" />
                                        <div class="ml-3">
                                            <h6 class="block font-medium text-lg">
                                                Jennifer Ballance
                                            </h6>
                                            <span class="text-slate-400">Cardiology</span>
                                        </div>
                                    </div>
                                    <span
                                        class="py-2 px-4 bg-indigo-600/5 text-indigo-600 rounded-md block text-center">11:00AM
                                        - 12:00PM</span>
                                </td>
                                <td class="border dark:border-gray-700"></td>
                                <td class="border dark:border-gray-700"></td>
                            </tr>

                            <tr>
                                <th class="text-center border dark:border-gray-700 py-5">
                                    04:00PM
                                </th>
                                <td class="border dark:border-gray-700"></td>
                                <td class="border dark:border-gray-700"></td>
                                <td class="border dark:border-gray-700"></td>
                                <td class="p-3 border dark:border-gray-700">
                                    <div class="flex items-center mb-3">
                                        <img src="assets/images/client/06.jpg" class="h-12 w-12 rounded-full shadow"
                                            alt="" />
                                        <div class="ml-3">
                                            <h6 class="block font-medium text-lg">
                                                Tara Arrington
                                            </h6>
                                            <span class="text-slate-400">Neurology</span>
                                        </div>
                                    </div>
                                    <span
                                        class="py-2 px-4 bg-indigo-600/5 text-indigo-600 rounded-md block text-center">04:00PM
                                        - 05:00PM</span>
                                </td>
                                <td class="border dark:border-gray-700"></td>
                                <td class="border dark:border-gray-700"></td>
                                <td class="p-3 border dark:border-gray-700">
                                    <div class="flex items-center mb-3">
                                        <img src="assets/images/client/06.jpg" class="h-12 w-12 rounded-full shadow"
                                            alt="" />
                                        <div class="ml-3">
                                            <h6 class="block font-medium text-lg">
                                                Tara Arrington
                                            </h6>
                                            <span class="text-slate-400">Neurology</span>
                                        </div>
                                    </div>
                                    <span
                                        class="py-2 px-4 bg-indigo-600/5 text-indigo-600 rounded-md block text-center">04:30PM
                                        - 06:00PM</span>
                                </td>
                            </tr>

                            <tr>
                                <th class="text-center border dark:border-gray-700 py-5">
                                    06:00PM
                                </th>
                                <td class="p-3 border dark:border-gray-700">
                                    <div class="flex items-center mb-3">
                                        <img src="assets/images/client/03.jpg" class="h-12 w-12 rounded-full shadow"
                                            alt="" />
                                        <div class="ml-3">
                                            <h6 class="block font-medium text-lg">Alia Reddy</h6>
                                            <span class="text-slate-400">Psychotherapy</span>
                                        </div>
                                    </div>
                                    <span
                                        class="py-2 px-4 bg-indigo-600/5 text-indigo-600 rounded-md block text-center">06:00PM
                                        - 09:00PM</span>
                                </td>
                                <td class="border dark:border-gray-700"></td>
                                <td class="p-3 border dark:border-gray-700">
                                    <div class="flex items-center mb-3">
                                        <img src="assets/images/client/04.jpg" class="h-12 w-12 rounded-full shadow"
                                            alt="" />
                                        <div class="ml-3">
                                            <h6 class="block font-medium text-lg">Toni Kovar</h6>
                                            <span class="text-slate-400">Orthopedic</span>
                                        </div>
                                    </div>
                                    <span
                                        class="py-2 px-4 bg-indigo-600/5 text-indigo-600 rounded-md block text-center">07:00PM
                                        - 08:00PM</span>
                                </td>
                                <td class="border dark:border-gray-700"></td>
                                <td class="p-3 border dark:border-gray-700">
                                    <div class="flex items-center mb-3">
                                        <img src="assets/images/client/05.jpg" class="h-12 w-12 rounded-full shadow"
                                            alt="" />
                                        <div class="ml-3">
                                            <h6 class="block font-medium text-lg">
                                                Jennifer Ballance
                                            </h6>
                                            <span class="text-slate-400">Cardiology</span>
                                        </div>
                                    </div>
                                    <span
                                        class="py-2 px-4 bg-indigo-600/5 text-indigo-600 rounded-md block text-center">06:00PM
                                        - 07:00PM</span>
                                </td>
                                <td class="border dark:border-gray-700"></td>
                                <td class="p-3 border dark:border-gray-700">
                                    <div class="flex items-center mb-3">
                                        <img src="assets/images/client/03.jpg" class="h-12 w-12 rounded-full shadow"
                                            alt="" />
                                        <div class="ml-3">
                                            <h6 class="block font-medium text-lg">Alia Reddy</h6>
                                            <span class="text-slate-400">Psychotherapy</span>
                                        </div>
                                    </div>
                                    <span
                                        class="py-2 px-4 bg-indigo-600/5 text-indigo-600 rounded-md block text-center">06:00PM
                                        - 07:00PM</span>
                                </td>
                            </tr>

                            <tr>
                                <th class="text-center border dark:border-gray-700 py-5">
                                    09:00PM
                                </th>
                                <td class="border dark:border-gray-700"></td>
                                <td class="p-3 border dark:border-gray-700">
                                    <div class="flex items-center mb-3">
                                        <img src="assets/images/client/04.jpg" class="h-12 w-12 rounded-full shadow"
                                            alt="" />
                                        <div class="ml-3">
                                            <h6 class="block font-medium text-lg">Toni Kovar</h6>
                                            <span class="text-slate-400">Orthopedic</span>
                                        </div>
                                    </div>
                                    <span
                                        class="py-2 px-4 bg-indigo-600/5 text-indigo-600 rounded-md block text-center">09:00PM
                                        - 10:00PM</span>
                                </td>
                                <td class="p-3 border dark:border-gray-700">
                                    <div class="flex items-center mb-3">
                                        <img src="assets/images/client/05.jpg" class="h-12 w-12 rounded-full shadow"
                                            alt="" />
                                        <div class="ml-3">
                                            <h6 class="block font-medium text-lg">
                                                Jennifer Ballance
                                            </h6>
                                            <span class="text-slate-400">Cardiology</span>
                                        </div>
                                    </div>
                                    <span
                                        class="py-2 px-4 bg-indigo-600/5 text-indigo-600 rounded-md block text-center">09:00PM
                                        - 10:00PM</span>
                                </td>
                                <td class="border dark:border-gray-700"></td>
                                <td class="p-3 border dark:border-gray-700">
                                    <div class="flex items-center mb-3">
                                        <img src="assets/images/client/04.jpg" class="h-12 w-12 rounded-full shadow"
                                            alt="" />
                                        <div class="ml-3">
                                            <h6 class="block font-medium text-lg">Toni Kovar</h6>
                                            <span class="text-slate-400">Orthopedic</span>
                                        </div>
                                    </div>
                                    <span
                                        class="py-2 px-4 bg-indigo-600/5 text-indigo-600 rounded-md block text-center">09:00PM
                                        - 10:00PM</span>
                                </td>
                                <td class="border dark:border-gray-700"></td>
                                <td class="border dark:border-gray-700"></td>
                            </tr>
                            <!-- End -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->
    <!-- End Section-->

    <!-- Start -->
    <section class="relative md:py-24 py-16">
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">
                    Our Doctors Team
                </h3>

                <p class="text-slate-400 max-w-xl mx-auto">
                    Great doctor if you need your family member to get effective
                    immediate assistance, emergency treatment or a simple consultation.
                </p>
            </div>
            <!--end grid-->

            <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">
                <div class="lg:col-span-3 md:col-span-6">
                    <div class="team p-6 rounded-md border dark:border-gray-700 group bg-white dark:bg-slate-900">
                        <img src="assets/images/client/01.jpg"
                            class="h-24 w-24 rounded-full shadow-md dark:shadow-gray-700" alt="" />

                        <div class="content mt-4">
                            <a href="" class="text-lg font-medium hover:text-indigo-600 block">Ronny Jofra</a>
                            <span class="text-slate-400 block">Eye Care Specialist</span>

                            <p class="text-slate-400 mt-4">
                                If the distribution of letters and 'words' is random
                            </p>

                            <ul class="list-none mt-4">
                                <li class="inline">
                                    <a href=""
                                        class="btn btn-icon btn-sm border dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
                                            data-feather="facebook" class="h-4 w-4"></i></a>
                                </li>
                                <li class="inline">
                                    <a href=""
                                        class="btn btn-icon btn-sm border dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
                                            data-feather="instagram" class="h-4 w-4"></i></a>
                                </li>
                                <li class="inline">
                                    <a href=""
                                        class="btn btn-icon btn-sm border dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
                                            data-feather="twitter" class="h-4 w-4"></i></a>
                                </li>
                                <li class="inline">
                                    <a href=""
                                        class="btn btn-icon btn-sm border dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
                                            data-feather="linkedin" class="h-4 w-4"></i></a>
                                </li>
                            </ul>
                            <!--end icon-->
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-3 md:col-span-6">
                    <div class="team p-6 rounded-md border dark:border-gray-700 group bg-white dark:bg-slate-900">
                        <img src="assets/images/client/02.jpg"
                            class="h-24 w-24 rounded-full shadow-md dark:shadow-gray-700" alt="" />

                        <div class="content mt-4">
                            <a href="" class="text-lg font-medium hover:text-indigo-600 block">Aliana Rosy</a>
                            <span class="text-slate-400 block">Gynecologist</span>

                            <p class="text-slate-400 mt-4">
                                If the distribution of letters and 'words' is random
                            </p>

                            <ul class="list-none mt-4">
                                <li class="inline">
                                    <a href=""
                                        class="btn btn-icon btn-sm border dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
                                            data-feather="facebook" class="h-4 w-4"></i></a>
                                </li>
                                <li class="inline">
                                    <a href=""
                                        class="btn btn-icon btn-sm border dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
                                            data-feather="instagram" class="h-4 w-4"></i></a>
                                </li>
                                <li class="inline">
                                    <a href=""
                                        class="btn btn-icon btn-sm border dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
                                            data-feather="twitter" class="h-4 w-4"></i></a>
                                </li>
                                <li class="inline">
                                    <a href=""
                                        class="btn btn-icon btn-sm border dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
                                            data-feather="linkedin" class="h-4 w-4"></i></a>
                                </li>
                            </ul>
                            <!--end icon-->
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-3 md:col-span-6">
                    <div class="team p-6 rounded-md border dark:border-gray-700 group bg-white dark:bg-slate-900">
                        <img src="assets/images/client/03.jpg"
                            class="h-24 w-24 rounded-full shadow-md dark:shadow-gray-700" alt="" />

                        <div class="content mt-4">
                            <a href="" class="text-lg font-medium hover:text-indigo-600 block">Sofia Razaq</a>
                            <span class="text-slate-400 block">Psychologist</span>

                            <p class="text-slate-400 mt-4">
                                If the distribution of letters and 'words' is random
                            </p>

                            <ul class="list-none mt-4">
                                <li class="inline">
                                    <a href=""
                                        class="btn btn-icon btn-sm border dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
                                            data-feather="facebook" class="h-4 w-4"></i></a>
                                </li>
                                <li class="inline">
                                    <a href=""
                                        class="btn btn-icon btn-sm border dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
                                            data-feather="instagram" class="h-4 w-4"></i></a>
                                </li>
                                <li class="inline">
                                    <a href=""
                                        class="btn btn-icon btn-sm border dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
                                            data-feather="twitter" class="h-4 w-4"></i></a>
                                </li>
                                <li class="inline">
                                    <a href=""
                                        class="btn btn-icon btn-sm border dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
                                            data-feather="linkedin" class="h-4 w-4"></i></a>
                                </li>
                            </ul>
                            <!--end icon-->
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-3 md:col-span-6">
                    <div class="team p-6 rounded-md border dark:border-gray-700 group bg-white dark:bg-slate-900">
                        <img src="assets/images/client/04.jpg"
                            class="h-24 w-24 rounded-full shadow-md dark:shadow-gray-700" alt="" />

                        <div class="content mt-4">
                            <a href="" class="text-lg font-medium hover:text-indigo-600 block">Micheal
                                Carlo</a>
                            <span class="text-slate-400 block">Orthopedic</span>

                            <p class="text-slate-400 mt-4">
                                If the distribution of letters and 'words' is random
                            </p>

                            <ul class="list-none mt-4">
                                <li class="inline">
                                    <a href=""
                                        class="btn btn-icon btn-sm border dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
                                            data-feather="facebook" class="h-4 w-4"></i></a>
                                </li>
                                <li class="inline">
                                    <a href=""
                                        class="btn btn-icon btn-sm border dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
                                            data-feather="instagram" class="h-4 w-4"></i></a>
                                </li>
                                <li class="inline">
                                    <a href=""
                                        class="btn btn-icon btn-sm border dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
                                            data-feather="twitter" class="h-4 w-4"></i></a>
                                </li>
                                <li class="inline">
                                    <a href=""
                                        class="btn btn-icon btn-sm border dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
                                            data-feather="linkedin" class="h-4 w-4"></i></a>
                                </li>
                            </ul>
                            <!--end icon-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End -->

    <!-- Start -->
    <section class="relative md:py-24 py-16 md:pt-0 pt-0">
        <div class="container">
            <div class="grid grid-cols-1 justify-center">
                <div class="relative z-1">
                    <div class="grid lg:grid-cols-12 grid-cols-1 md:text-left text-center justify-center">
                        <div class="lg:col-start-2 lg:col-span-10">
                            <div class="relative">
                                <img src="assets/images/hospital/bg.jpg" class="rounded-md shadow-lg"
                                    alt="" />
                                <div class="absolute bottom-2/4 translate-y-2/4 right-0 left-0 text-center">
                                    <a href="#!" data-type="youtube" data-id="yba7hPeTSjk"
                                        class="lightbox h-20 w-20 rounded-full shadow-lg dark:shadow-gray-700 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600">
                                        <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content md:mt-8">
                        <div class="grid lg:grid-cols-12 grid-cols-1 md:text-left text-center justify-center">
                            <div class="lg:col-start-2 lg:col-span-10">
                                <div class="grid md:grid-cols-3 grid-cols-1 items-center">
                                    <div class="counter-box text-center">
                                        <h1 class="text-white text-4xl font-semibold mb-2">
                                            <span class="counter-value" data-target="99">10</span>%
                                        </h1>
                                        <h5 class="counter-head text-white text-lg font-semibold mb-2">
                                            Positive feedback
                                        </h5>
                                        <p class="text-white/50">From Doctors</p>
                                    </div>
                                    <!--end counter box-->

                                    <div class="counter-box text-center">
                                        <h1 class="text-white text-4xl font-semibold mb-2">
                                            <span class="counter-value" data-target="25">2</span>+
                                        </h1>
                                        <h5 class="counter-head text-white text-lg font-semibold mb-2">
                                            Experienced Clinics
                                        </h5>
                                        <p class="text-white/50">High Qualified</p>
                                    </div>
                                    <!--end counter box-->

                                    <div class="counter-box text-center">
                                        <h1 class="text-white text-4xl font-semibold mb-2">
                                            <span class="counter-value" data-target="1251">95</span>+
                                        </h1>
                                        <h5 class="counter-head text-white text-lg font-semibold mb-2">
                                            Questions & Answers
                                        </h5>
                                        <p class="text-white/50">Your Questions</p>
                                    </div>
                                    <!--end counter box-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row -->
        </div>
        <!--end container-->

        <div class="feature-posts-placeholder bg-gradient-to-b from-indigo-500 to-indigo-600"></div>
    </section>
    <!--end section-->
    <!-- End -->

    <!-- Start -->
    <section class="relative md:py-24 py-16">
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">
                    Patients Says
                </h3>

                <p class="text-slate-400 max-w-xl mx-auto">
                    Great doctor if you need your family member to get effective
                    immediate assistance, emergency treatment or a simple consultation.
                </p>
            </div>
            <!--end grid-->

            <div class="grid grid-cols-1 mt-8">
                <div class="tiny-three-item">
                    <div class="tiny-slide text-center">
                        <div class="customer-testi">
                            <div
                                class="content relative rounded shadow dark:shadow-gray-700 m-2 p-6 bg-white dark:bg-slate-900">
                                <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                                <p class="text-slate-400">
                                    " It seems that only fragments of the original text remain
                                    in the Lorem Ipsum texts used today. "
                                </p>
                                <ul class="list-none mb-0 text-amber-400 mt-3">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>

                            <div class="text-center mt-5">
                                <img src="assets/images/client/01.jpg"
                                    class="h-14 w-14 rounded-full shadow-md mx-auto" alt="" />
                                <h6 class="mt-2 font-semibold">Calvin Carlo</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide text-center">
                        <div class="customer-testi">
                            <div
                                class="content relative rounded shadow dark:shadow-gray-700 m-2 p-6 bg-white dark:bg-slate-900">
                                <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                                <p class="text-slate-400">
                                    " The most well-known dummy text is the 'Lorem Ipsum', which
                                    is said to have originated in the 16th century. "
                                </p>
                                <ul class="list-none mb-0 text-amber-400 mt-3">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>

                            <div class="text-center mt-5">
                                <img src="assets/images/client/02.jpg"
                                    class="h-14 w-14 rounded-full shadow-md mx-auto" alt="" />
                                <h6 class="mt-2 font-semibold">Christa Smith</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide text-center">
                        <div class="customer-testi">
                            <div
                                class="content relative rounded shadow dark:shadow-gray-700 m-2 p-6 bg-white dark:bg-slate-900">
                                <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                                <p class="text-slate-400">
                                    " One disadvantage of Lorum Ipsum is that in Latin certain
                                    letters appear more frequently than others. "
                                </p>
                                <ul class="list-none mb-0 text-amber-400 mt-3">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>

                            <div class="text-center mt-5">
                                <img src="assets/images/client/03.jpg"
                                    class="h-14 w-14 rounded-full shadow-md mx-auto" alt="" />
                                <h6 class="mt-2 font-semibold">Jemina CLone</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide text-center">
                        <div class="customer-testi">
                            <div
                                class="content relative rounded shadow dark:shadow-gray-700 m-2 p-6 bg-white dark:bg-slate-900">
                                <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                                <p class="text-slate-400">
                                    " Thus, Lorem Ipsum has only limited suitability as a visual
                                    filler for German texts. "
                                </p>
                                <ul class="list-none mb-0 text-amber-400 mt-3">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>

                            <div class="text-center mt-5">
                                <img src="assets/images/client/04.jpg"
                                    class="h-14 w-14 rounded-full shadow-md mx-auto" alt="" />
                                <h6 class="mt-2 font-semibold">Smith Vodka</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide text-center">
                        <div class="customer-testi">
                            <div
                                class="content relative rounded shadow dark:shadow-gray-700 m-2 p-6 bg-white dark:bg-slate-900">
                                <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                                <p class="text-slate-400">
                                    " There is now an abundance of readable dummy texts. These
                                    are usually used when a text is required. "
                                </p>
                                <ul class="list-none mb-0 text-amber-400 mt-3">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>

                            <div class="text-center mt-5">
                                <img src="assets/images/client/05.jpg"
                                    class="h-14 w-14 rounded-full shadow-md mx-auto" alt="" />
                                <h6 class="mt-2 font-semibold">Cristino Murfi</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide text-center">
                        <div class="customer-testi">
                            <div
                                class="content relative rounded shadow dark:shadow-gray-700 m-2 p-6 bg-white dark:bg-slate-900">
                                <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                                <p class="text-slate-400">
                                    " According to most sources, Lorum Ipsum can be traced back
                                    to a text composed by Cicero. "
                                </p>
                                <ul class="list-none mb-0 text-amber-400 mt-3">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>

                            <div class="text-center mt-5">
                                <img src="assets/images/client/06.jpg"
                                    class="h-14 w-14 rounded-full shadow-md mx-auto" alt="" />
                                <h6 class="mt-2 font-semibold">Cristino Murfi</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="container md:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">
                    Latest News & Blogs
                </h3>

                <p class="text-slate-400 max-w-xl mx-auto"></p>
            </div>
            <!--end grid-->

            <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
                <div class="blog relative rounded-md shadow dark:shadow-gray-700 overflow-hidden">
                    <img src="assets/images/blog/01.jpg" alt="" />

                    <div class="content p-6">
                        <a href="blog-detail.html"
                            class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">You
                            can easily connect to doctor and make a treatment</a>
                        <p class="text-slate-400 mt-3">
                            The phrasal sequence of the is now so that many campaign and
                            benefit
                        </p>

                        <div class="mt-4">
                            <a href="blog-detail.html"
                                class="btn btn-link font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read
                                More <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="blog relative rounded-md shadow dark:shadow-gray-700 overflow-hidden">
                    <img src="assets/images/blog/02.jpg" alt="" />

                    <div class="content p-6">
                        <a href="blog-detail.html"
                            class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Lockdowns
                            lead to fewer people seeking medical care</a>
                        <p class="text-slate-400 mt-3">
                            The phrasal sequence of the is now so that many campaign and
                            benefit
                        </p>

                        <div class="mt-4">
                            <a href="blog-detail.html"
                                class="btn btn-link font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read
                                More <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="blog relative rounded-md shadow dark:shadow-gray-700 overflow-hidden">
                    <img src="assets/images/blog/03.jpg" alt="" />

                    <div class="content p-6">
                        <a href="blog-detail.html"
                            class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Emergency
                            medicine research course for the doctors</a>
                        <p class="text-slate-400 mt-3">
                            The phrasal sequence of the is now so that many campaign and
                            benefit
                        </p>

                        <div class="mt-4">
                            <a href="blog-detail.html"
                                class="btn btn-link font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read
                                More <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End -->

    <!-- Business Partner -->
    <section class="py-6 bg-gray-50 dark:bg-slate-800">
        <div class="container">
            <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
                <div class="mx-auto py-4">
                    <img src="assets/images/client/amazon.svg" class="h-6" alt="" />
                </div>

                <div class="mx-auto py-4">
                    <img src="assets/images/client/google.svg" class="h-6" alt="" />
                </div>

                <div class="mx-auto py-4">
                    <img src="assets/images/client/lenovo.svg" class="h-6" alt="" />
                </div>

                <div class="mx-auto py-4">
                    <img src="assets/images/client/paypal.svg" class="h-6" alt="" />
                </div>

                <div class="mx-auto py-4">
                    <img src="assets/images/client/shopify.svg" class="h-6" alt="" />
                </div>

                <div class="mx-auto py-4">
                    <img src="assets/images/client/spotify.svg" class="h-6" alt="" />
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Business Partner -->

    <!-- Footer Start -->
    <footer class="footer bg-dark-footer relative text-gray-200 dark:text-gray-200">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="py-[60px] px-0">
                        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                            <div class="lg:col-span-4 md:col-span-12">
                                <a href="#" class="text-[22px] focus:outline-none">
                                    <img src="assets/images/logo-light.png" alt="" />
                                </a>
                                <p class="mt-6 text-gray-300">
                                    Start working with Tailwind CSS that can provide everything
                                    you need to generate awareness, drive traffic, connect.
                                </p>
                                <ul class="list-none mt-6">
                                    <li class="inline">
                                        <a href=""
                                            class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i
                                                data-feather="facebook" class="h-4 w-4"></i></a>
                                    </li>
                                    <li class="inline">
                                        <a href=""
                                            class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i
                                                data-feather="instagram" class="h-4 w-4"></i></a>
                                    </li>
                                    <li class="inline">
                                        <a href=""
                                            class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i
                                                data-feather="twitter" class="h-4 w-4"></i></a>
                                    </li>
                                    <li class="inline">
                                        <a href=""
                                            class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i
                                                data-feather="linkedin" class="h-4 w-4"></i></a>
                                    </li>
                                </ul>
                                <!--end icon-->
                            </div>
                            <!--end col-->

                            <div class="lg:col-span-2 md:col-span-4">
                                <h5 class="tracking-[1px] text-gray-100 font-semibold">
                                    Company
                                </h5>
                                <ul class="list-none footer-list mt-6">
                                    <li>
                                        <a href="page-aboutus.html"
                                            class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                class="uil uil-angle-right-b me-1"></i> About us</a>
                                    </li>
                                    <li class="mt-[10px]">
                                        <a href="page-services.html"
                                            class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                class="uil uil-angle-right-b me-1"></i> Services</a>
                                    </li>
                                    <li class="mt-[10px]">
                                        <a href="page-team.html"
                                            class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                class="uil uil-angle-right-b me-1"></i> Team</a>
                                    </li>
                                    <li class="mt-[10px]">
                                        <a href="page-pricing.html"
                                            class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                class="uil uil-angle-right-b me-1"></i> Pricing</a>
                                    </li>
                                    <li class="mt-[10px]">
                                        <a href="portfolio-creative-four.html"
                                            class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                class="uil uil-angle-right-b me-1"></i> Project</a>
                                    </li>
                                    <li class="mt-[10px]">
                                        <a href="blog.html"
                                            class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                class="uil uil-angle-right-b me-1"></i> Blog</a>
                                    </li>
                                    <li class="mt-[10px]">
                                        <a href="auth-login.html"
                                            class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                class="uil uil-angle-right-b me-1"></i> Login</a>
                                    </li>
                                </ul>
                            </div>
                            <!--end col-->

                            <div class="lg:col-span-3 md:col-span-4">
                                <h5 class="tracking-[1px] text-gray-100 font-semibold">
                                    Usefull Links
                                </h5>
                                <ul class="list-none footer-list mt-6">
                                    <li>
                                        <a href="page-terms.html"
                                            class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                class="uil uil-angle-right-b me-1"></i> Terms of
                                            Services</a>
                                    </li>
                                    <li class="mt-[10px]">
                                        <a href="page-privacy.html"
                                            class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                class="uil uil-angle-right-b me-1"></i> Privacy
                                            Policy</a>
                                    </li>
                                    <li class="mt-[10px]">
                                        <a href="documentation.html"
                                            class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                class="uil uil-angle-right-b me-1"></i>
                                            Documentation</a>
                                    </li>
                                    <li class="mt-[10px]">
                                        <a href="changelog.html"
                                            class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                class="uil uil-angle-right-b me-1"></i> Changelog</a>
                                    </li>
                                    <li class="mt-[10px]">
                                        <a href="widget.html"
                                            class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                class="uil uil-angle-right-b me-1"></i> Widget</a>
                                    </li>
                                </ul>
                            </div>
                            <!--end col-->

                            <div class="lg:col-span-3 md:col-span-4">
                                <h5 class="tracking-[1px] text-gray-100 font-semibold">
                                    Newsletter
                                </h5>
                                <p class="mt-6">
                                    Sign up and receive the latest tips via email.
                                </p>
                                <form>
                                    <div class="grid grid-cols-1">
                                        <div class="foot-subscribe my-3">
                                            <label class="form-label">Write your email
                                                <span class="text-red-600">*</span></label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="mail" class="w-4 h-4 absolute top-3 left-4"></i>
                                                <input type="email"
                                                    class="form-input bg-gray-800 border border-gray-800 text-gray-100 pl-12 focus:shadow-none"
                                                    placeholder="Email" name="email" required="" />
                                            </div>
                                        </div>

                                        <button type="submit" id="submitsubscribe" name="send"
                                            class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">
                                            Subscribe
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end grid-->
                    </div>
                    <!--end col-->
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="py-[30px] px-0 border-t border-slate-800">
            <div class="container text-center">
                <div class="grid md:grid-cols-2 items-center">
                    <div class="md:text-left text-center">
                        <p class="mb-0">
                            ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            Techwind. Design with
                            <i class="mdi mdi-heart text-red-600"></i> by
                            <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.
                        </p>
                    </div>

                    <ul class="list-none md:text-right text-center mt-6 md:mt-0">
                        <li class="inline">
                            <a href=""><img src="assets/images/payments/american-ex.png"
                                    class="max-h-6 inline" title="American Express" alt="" /></a>
                        </li>
                        <li class="inline">
                            <a href=""><img src="assets/images/payments/discover.png"
                                    class="max-h-6 inline" title="Discover" alt="" /></a>
                        </li>
                        <li class="inline">
                            <a href=""><img src="assets/images/payments/master-card.png"
                                    class="max-h-6 inline" title="Master Card" alt="" /></a>
                        </li>
                        <li class="inline">
                            <a href=""><img src="assets/images/payments/paypal.png" class="max-h-6 inline"
                                    title="Paypal" alt="" /></a>
                        </li>
                        <li class="inline">
                            <a href=""><img src="assets/images/payments/visa.png" class="max-h-6 inline"
                                    title="Visa" alt="" /></a>
                        </li>
                    </ul>
                </div>
                <!--end grid-->
            </div>
            <!--end container-->
        </div>
    </footer>
    <!--end footer-->
    <!-- Footer End -->

    <!-- Start Cookie Popup -->
    <div
        class="cookie-popup fixed max-w-lg bottom-3 right-3 left-3 sm:left-0 sm:right-0 mx-auto bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md py-5 px-6 z-10">
        <p class="text-slate-400">
            This website uses cookies to provide you with a great user experience.
            By using it, you accept our
            <a href="https://shreethemes.in" target="_blank"
                class="text-emerald-600 dark:text-emerald-500 font-semibold">use of cookies</a>
        </p>
        <div class="cookie-popup-actions text-right">
            <button class="absolute border-none bg-none p-0 cursor-pointer font-semibold top-2 right-2">
                <i class="uil uil-times text-dark dark:text-slate-200 text-2xl"></i>
            </button>
        </div>
    </div>
    <!--Note: Cookies Js including in plugins.init.js (path like; assets/js/plugins.init.js) and Cookies css including in _helper.scss (path like; scss/_helper.scss)-->
    <!-- End Cookie Popup -->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top"
        class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 right-5 h-9 w-9 text-center bg-indigo-600 text-white leading-9"><i
            class="uil uil-arrow-up"></i></a>
    <!-- Back to top -->

    <!-- Switcher -->
    <div class="fixed top-1/4 -right-1 z-3">
        <span class="relative inline-block rotate-90">
            <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
            <label
                class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-700 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8"
                for="chk">
                <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                <span
                    class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
            </label>
        </span>
    </div>
    <!-- Switcher -->

    <!-- JAVASCRIPTS -->
    <script src="assets/libs/tiny-slider/min/tiny-slider.js"></script>
    <script src="assets/libs/tobii/js/tobii.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/plugins.init.js"></script>
    <script src="assets/js/app.js"></script>
    <!-- JAVASCRIPTS -->
</body>

</html>
