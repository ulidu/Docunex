<!DOCTYPE html>

<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Docunex - Document Management System">
         <meta name="author" content="Docunex">
        <title>Docunex</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="dist/css/app.css" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="main">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img alt="Rubick Tailwind HTML Admin Template" class="w-6" src="dist/images/logo.svg">
                </a>
                <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            <ul class="border-t border-theme-29 py-5 hidden">
                <li>
                    <a href="javascript:;.html" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="home"></i> </div>
                        <div class="menu__title"> Dashboard <i data-feather="chevron-down" class="menu__sub-icon transform rotate-180"></i> </div>
                    </a>
                    <ul class="menu__sub-open">
                        <li>
                            <a href="index.php" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Overview 1 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-dashboard-overview-2.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Overview 2 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-dashboard-overview-3.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Overview 3 </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="box"></i> </div>
                        <div class="menu__title"> Menu Layout <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="index.php" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Side Menu </div>
                            </a>
                        </li>
                        <li>
                            <a href="simple-menu-light-dashboard-overview-1.html" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Simple Menu </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-dashboard-overview-1.html" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Top Menu </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="side-menu-light-inbox.html" class="menu">
                        <div class="menu__icon"> <i data-feather="inbox"></i> </div>
                        <div class="menu__title"> Inbox </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-file-manager.html" class="menu">
                        <div class="menu__icon"> <i data-feather="hard-drive"></i> </div>
                        <div class="menu__title"> File Manager </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-point-of-sale.html" class="menu">
                        <div class="menu__icon"> <i data-feather="credit-card"></i> </div>
                        <div class="menu__title"> Point of Sale </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-chat.html" class="menu">
                        <div class="menu__icon"> <i data-feather="message-square"></i> </div>
                        <div class="menu__title"> Chat </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-post.html" class="menu">
                        <div class="menu__icon"> <i data-feather="file-text"></i> </div>
                        <div class="menu__title"> Post </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-calendar.html" class="menu">
                        <div class="menu__icon"> <i data-feather="calendar"></i> </div>
                        <div class="menu__title"> Calendar </div>
                    </a>
                </li>
                <li class="menu__devider my-6"></li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="edit"></i> </div>
                        <div class="menu__title"> Crud <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-crud-data-list.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Data List </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-crud-form.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Form </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="users"></i> </div>
                        <div class="menu__title"> Users <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-users-layout-1.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Layout 1 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-users-layout-2.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Layout 2 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-users-layout-3.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Layout 3 </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="trello"></i> </div>
                        <div class="menu__title"> Profile <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-profile-overview-1.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Overview 1 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-profile-overview-2.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Overview 2 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-profile-overview-3.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Overview 3 </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="layout"></i> </div>
                        <div class="menu__title"> Pages <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Wizards <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-wizard-layout-1.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-wizard-layout-2.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-wizard-layout-3.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Blog <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-blog-layout-1.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-blog-layout-2.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-blog-layout-3.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Pricing <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-pricing-layout-1.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-pricing-layout-2.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Invoice <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-invoice-layout-1.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-invoice-layout-2.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> FAQ <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-faq-layout-1.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-faq-layout-2.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-faq-layout-3.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="login-light-login.php" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Login </div>
                            </a>
                        </li>
                        <li>
                            <a href="login-light-register.php" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Register </div>
                            </a>
                        </li>
                        <li>
                            <a href="main-light-error-page.php" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Error Page </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-update-profile.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Update profile </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-change-password.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Change Password </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu__devider my-6"></li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="inbox"></i> </div>
                        <div class="menu__title"> Components <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Table <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-regular-table.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Regular Table</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-tabulator.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Tabulator</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Overlay <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-modal.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Modal</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-slide-over.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Slide Over</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-notification.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Notification</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="side-menu-light-accordion.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Accordion </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-button.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Button </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-alert.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Alert </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-progress-bar.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Progress Bar </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-tooltip.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Tooltip </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-dropdown.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Dropdown </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-typography.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Typography </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-icon.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Icon </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-loading-icon.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Loading Icon </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="sidebar"></i> </div>
                        <div class="menu__title"> Forms <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-regular-form.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Regular Form </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-datepicker.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Datepicker </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-tom-select.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Tom Select </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-file-upload.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> File Upload </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wysiwyg-editor.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Wysiwyg Editor </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-validation.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Validation </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="hard-drive"></i> </div>
                        <div class="menu__title"> Widgets <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-chart.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Chart </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-slider.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Slider </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-image-zoom.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Image Zoom </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- END: Mobile Menu -->
        <div class="flex">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav">
                <a href="" class="intro-x flex items-center pl-5 pt-4">
                    <img alt="Rubick Tailwind HTML Admin Template" class="w-6" src="dist/images/logo.svg">
                    <span class="hidden xl:block text-white text-lg ml-3"> Ru<span class="font-medium">bick</span> </span>
                </a>
                <div class="side-nav__devider my-6"></div>
                <ul>
                    <li>
                        <a href="javascript:;.html" class="side-menu side-menu--active">
                            <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                            <div class="side-menu__title">
                                Dashboard 
                                <div class="side-menu__sub-icon transform rotate-180"> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="side-menu__sub-open">
                            <li>
                                <a href="index.php" class="side-menu side-menu--active">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 1 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-dashboard-overview-2.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 2 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-dashboard-overview-3.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 3 </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                            <div class="side-menu__title">
                                Menu Layout 
                                <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="index.php" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Side Menu </div>
                                </a>
                            </li>
                            <li>
                                <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Simple Menu </div>
                                </a>
                            </li>
                            <li>
                                <a href="top-menu-light-dashboard-overview-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Top Menu </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="side-menu-light-inbox.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                            <div class="side-menu__title"> Inbox </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-file-manager.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="hard-drive"></i> </div>
                            <div class="side-menu__title"> File Manager </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-point-of-sale.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="credit-card"></i> </div>
                            <div class="side-menu__title"> Point of Sale </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-chat.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="message-square"></i> </div>
                            <div class="side-menu__title"> Chat </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-post.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                            <div class="side-menu__title"> Post </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-calendar.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="calendar"></i> </div>
                            <div class="side-menu__title"> Calendar </div>
                        </a>
                    </li>
                    <li class="side-nav__devider my-6"></li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                            <div class="side-menu__title">
                                Crud 
                                <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-crud-data-list.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Data List </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-crud-form.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Form </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                            <div class="side-menu__title">
                                Users 
                                <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-users-layout-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Layout 1 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-users-layout-2.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Layout 2 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-users-layout-3.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Layout 3 </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="trello"></i> </div>
                            <div class="side-menu__title">
                                Profile 
                                <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-profile-overview-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 1 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-profile-overview-2.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 2 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-profile-overview-3.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 3 </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="layout"></i> </div>
                            <div class="side-menu__title">
                                Pages 
                                <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title">
                                        Wizards 
                                        <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                                    </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-wizard-layout-1.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-wizard-layout-2.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-wizard-layout-3.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 3</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title">
                                        Blog 
                                        <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                                    </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-blog-layout-1.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-blog-layout-2.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-blog-layout-3.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 3</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title">
                                        Pricing 
                                        <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                                    </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-pricing-layout-1.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-pricing-layout-2.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title">
                                        Invoice 
                                        <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                                    </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-invoice-layout-1.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-invoice-layout-2.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title">
                                        FAQ 
                                        <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                                    </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-faq-layout-1.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-faq-layout-2.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-faq-layout-3.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 3</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="login-light-login.php" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Login </div>
                                </a>
                            </li>
                            <li>
                                <a href="login-light-register.php" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Register </div>
                                </a>
                            </li>
                            <li>
                                <a href="main-light-error-page.php" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Error Page </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-update-profile.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Update profile </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-change-password.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Change Password </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="side-nav__devider my-6"></li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                            <div class="side-menu__title">
                                Components 
                                <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title">
                                        Table 
                                        <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                                    </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-regular-table.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Regular Table</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-tabulator.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Tabulator</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title">
                                        Overlay 
                                        <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                                    </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-modal.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Modal</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-slide-over.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Slide Over</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-notification.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Notification</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="side-menu-light-accordion.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Accordion </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-button.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Button </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-alert.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Alert </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-progress-bar.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Progress Bar </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-tooltip.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Tooltip </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-dropdown.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Dropdown </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-typography.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Typography </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-icon.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Icon </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-loading-icon.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Loading Icon </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="sidebar"></i> </div>
                            <div class="side-menu__title">
                                Forms 
                                <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-regular-form.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Regular Form </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-datepicker.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Datepicker </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-tom-select.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Tom Select </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-file-upload.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> File Upload </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-wysiwyg-editor.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Wysiwyg Editor </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-validation.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Validation </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="hard-drive"></i> </div>
                            <div class="side-menu__title">
                                Widgets 
                                <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-chart.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Chart </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-slider.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Slider </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-image-zoom.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Image Zoom </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
                    <!-- BEGIN: Breadcrumb -->
                    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="">Application</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Dashboard</a> </div>
                    <!-- END: Breadcrumb -->
                    <!-- BEGIN: Search -->
                    <div class="intro-x relative mr-3 sm:mr-6">
                        <div class="search hidden sm:block">
                            <input type="text" class="search__input form-control border-transparent placeholder-theme-13" placeholder="Search...">
                            <i data-feather="search" class="search__icon dark:text-gray-300"></i> 
                        </div>
                        <a class="notification sm:hidden" href=""> <i data-feather="search" class="notification__icon dark:text-gray-300"></i> </a>
                        <div class="search-result">
                            <div class="search-result__content">
                                <div class="search-result__content__title">Pages</div>
                                <div class="mb-5">
                                    <a href="" class="flex items-center">
                                        <div class="w-8 h-8 bg-theme-18 text-theme-9 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="inbox"></i> </div>
                                        <div class="ml-3">Mail Settings</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 bg-theme-17 text-theme-11 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="users"></i> </div>
                                        <div class="ml-3">Users & Permissions</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 bg-theme-14 text-theme-10 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="credit-card"></i> </div>
                                        <div class="ml-3">Transactions Report</div>
                                    </a>
                                </div>
                                <div class="search-result__content__title">Users</div>
                                <div class="mb-5">
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 image-fit">
                                            <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-8.jpg">
                                        </div>
                                        <div class="ml-3">Denzel Washington</div>
                                        <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">denzelwashington@left4code.com</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 image-fit">
                                            <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-3.jpg">
                                        </div>
                                        <div class="ml-3">Leonardo DiCaprio</div>
                                        <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">leonardodicaprio@left4code.com</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 image-fit">
                                            <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-15.jpg">
                                        </div>
                                        <div class="ml-3">Brad Pitt</div>
                                        <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">bradpitt@left4code.com</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 image-fit">
                                            <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-7.jpg">
                                        </div>
                                        <div class="ml-3">Denzel Washington</div>
                                        <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">denzelwashington@left4code.com</div>
                                    </a>
                                </div>
                                <div class="search-result__content__title">Products</div>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-11.jpg">
                                    </div>
                                    <div class="ml-3">Nike Air Max 270</div>
                                    <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Sport &amp; Outdoor</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-12.jpg">
                                    </div>
                                    <div class="ml-3">Sony Master Series A9G</div>
                                    <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Electronic</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-6.jpg">
                                    </div>
                                    <div class="ml-3">Apple MacBook Pro 13</div>
                                    <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">PC &amp; Laptop</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-7.jpg">
                                    </div>
                                    <div class="ml-3">Samsung Galaxy S20 Ultra</div>
                                    <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Smartphone &amp; Tablet</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END: Search -->
                    <!-- BEGIN: Notifications -->
                    <div class="intro-x dropdown mr-auto sm:mr-6">
                        <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false"> <i data-feather="bell" class="notification__icon dark:text-gray-300"></i> </div>
                        <div class="notification-content pt-2 dropdown-menu">
                            <div class="notification-content__box dropdown-menu__content box dark:bg-dark-6">
                                <div class="notification-content__title">Notifications</div>
                                <div class="cursor-pointer relative flex items-center ">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-8.jpg">
                                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Denzel Washington</a> 
                                            <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">01:10 PM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600 mt-0.5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-3.jpg">
                                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Leonardo DiCaprio</a> 
                                            <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">01:10 PM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-15.jpg">
                                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Brad Pitt</a> 
                                            <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">01:10 PM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600 mt-0.5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-7.jpg">
                                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Denzel Washington</a> 
                                            <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">05:09 AM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600 mt-0.5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-11.jpg">
                                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Leonardo DiCaprio</a> 
                                            <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">05:09 AM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Notifications -->
                    <!-- BEGIN: Account Menu -->
                    <div class="intro-x dropdown w-8 h-8">
                        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false">
                            <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-15.jpg">
                        </div>
                        <div class="dropdown-menu w-56">
                            <div class="dropdown-menu__content box bg-theme-26 dark:bg-dark-6 text-white">
                                <div class="p-4 border-b border-theme-27 dark:border-dark-3">
                                    <div class="font-medium">Denzel Washington</div>
                                    <div class="text-xs text-theme-28 mt-0.5 dark:text-gray-600">Software Engineer</div>
                                </div>
                                <div class="p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                                </div>
                                <div class="p-2 border-t border-theme-27 dark:border-dark-3">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Account Menu -->
                </div>
                <!-- END: Top Bar -->
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 xxl:col-span-9">
                        <div class="grid grid-cols-12 gap-6">
                            <!-- BEGIN: General Report -->
                            <div class="col-span-12 mt-8">
                                <div class="intro-y flex items-center h-10">
                                    <h2 class="text-lg font-medium truncate mr-5">
                                        General Report
                                    </h2>
                                    <a href="" class="ml-auto flex items-center text-theme-1 dark:text-theme-10"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                                </div>
                                <div class="grid grid-cols-12 gap-6 mt-5">
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                        <div class="report-box zoom-in">
                                            <div class="box p-5">
                                                <div class="flex">
                                                    <i data-feather="shopping-cart" class="report-box__icon text-theme-10"></i> 
                                                    <div class="ml-auto">
                                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="33% Higher than last month"> 33% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                                    </div>
                                                </div>
                                                <div class="text-3xl font-medium leading-8 mt-6">4.710</div>
                                                <div class="text-base text-gray-600 mt-1">Item Sales</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                        <div class="report-box zoom-in">
                                            <div class="box p-5">
                                                <div class="flex">
                                                    <i data-feather="credit-card" class="report-box__icon text-theme-11"></i> 
                                                    <div class="ml-auto">
                                                        <div class="report-box__indicator bg-theme-6 tooltip cursor-pointer" title="2% Lower than last month"> 2% <i data-feather="chevron-down" class="w-4 h-4 ml-0.5"></i> </div>
                                                    </div>
                                                </div>
                                                <div class="text-3xl font-medium leading-8 mt-6">3.721</div>
                                                <div class="text-base text-gray-600 mt-1">New Orders</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                        <div class="report-box zoom-in">
                                            <div class="box p-5">
                                                <div class="flex">
                                                    <i data-feather="monitor" class="report-box__icon text-theme-12"></i> 
                                                    <div class="ml-auto">
                                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="12% Higher than last month"> 12% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                                    </div>
                                                </div>
                                                <div class="text-3xl font-medium leading-8 mt-6">2.149</div>
                                                <div class="text-base text-gray-600 mt-1">Total Products</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                        <div class="report-box zoom-in">
                                            <div class="box p-5">
                                                <div class="flex">
                                                    <i data-feather="user" class="report-box__icon text-theme-9"></i> 
                                                    <div class="ml-auto">
                                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="22% Higher than last month"> 22% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                                    </div>
                                                </div>
                                                <div class="text-3xl font-medium leading-8 mt-6">152.040</div>
                                                <div class="text-base text-gray-600 mt-1">Unique Visitor</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: General Report -->
                            <!-- BEGIN: Sales Report -->
                            <div class="col-span-12 lg:col-span-6 mt-8">
                                <div class="intro-y block sm:flex items-center h-10">
                                    <h2 class="text-lg font-medium truncate mr-5">
                                        Sales Report
                                    </h2>
                                    <div class="sm:ml-auto mt-3 sm:mt-0 relative text-gray-700 dark:text-gray-300">
                                        <i data-feather="calendar" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i> 
                                        <input type="text" class="datepicker form-control sm:w-56 box pl-10">
                                    </div>
                                </div>
                                <div class="intro-y box p-5 mt-12 sm:mt-5">
                                    <div class="flex flex-col xl:flex-row xl:items-center">
                                        <div class="flex">
                                            <div>
                                                <div class="text-theme-19 dark:text-gray-300 text-lg xl:text-xl font-medium">$15,000</div>
                                                <div class="mt-0.5 text-gray-600 dark:text-gray-600">This Month</div>
                                            </div>
                                            <div class="w-px h-12 border border-r border-dashed border-gray-300 dark:border-dark-5 mx-4 xl:mx-5"></div>
                                            <div>
                                                <div class="text-gray-600 dark:text-gray-600 text-lg xl:text-xl font-medium">$10,000</div>
                                                <div class="mt-0.5 text-gray-600 dark:text-gray-600">Last Month</div>
                                            </div>
                                        </div>
                                        <div class="dropdown xl:ml-auto mt-5 xl:mt-0">
                                            <button class="dropdown-toggle btn btn-outline-secondary font-normal" aria-expanded="false"> Filter by Category <i data-feather="chevron-down" class="w-4 h-4 ml-2"></i> </button>
                                            <div class="dropdown-menu w-40">
                                                <div class="dropdown-menu__content box dark:bg-dark-1 p-2 overflow-y-auto h-32"> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">PC & Laptop</a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">Smartphone</a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">Electronic</a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">Photography</a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">Sport</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="report-chart">
                                        <canvas id="report-line-chart" height="169" class="mt-6"></canvas>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Sales Report -->
                            <!-- BEGIN: Weekly Top Seller -->
                            <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                                <div class="intro-y flex items-center h-10">
                                    <h2 class="text-lg font-medium truncate mr-5">
                                        Weekly Top Seller
                                    </h2>
                                    <a href="" class="ml-auto text-theme-1 dark:text-theme-10 truncate">Show More</a> 
                                </div>
                                <div class="intro-y box p-5 mt-5">
                                    <canvas class="mt-3" id="report-pie-chart" height="300"></canvas>
                                    <div class="mt-8">
                                        <div class="flex items-center">
                                            <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div>
                                            <span class="truncate">17 - 30 Years old</span> 
                                            <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                            <span class="font-medium xl:ml-auto">62%</span> 
                                        </div>
                                        <div class="flex items-center mt-4">
                                            <div class="w-2 h-2 bg-theme-1 rounded-full mr-3"></div>
                                            <span class="truncate">31 - 50 Years old</span> 
                                            <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                            <span class="font-medium xl:ml-auto">33%</span> 
                                        </div>
                                        <div class="flex items-center mt-4">
                                            <div class="w-2 h-2 bg-theme-12 rounded-full mr-3"></div>
                                            <span class="truncate">>= 50 Years old</span> 
                                            <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                            <span class="font-medium xl:ml-auto">10%</span> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Weekly Top Seller -->
                            <!-- BEGIN: Sales Report -->
                            <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                                <div class="intro-y flex items-center h-10">
                                    <h2 class="text-lg font-medium truncate mr-5">
                                        Sales Report
                                    </h2>
                                    <a href="" class="ml-auto text-theme-1 dark:text-theme-10 truncate">Show More</a> 
                                </div>
                                <div class="intro-y box p-5 mt-5">
                                    <canvas class="mt-3" id="report-donut-chart" height="300"></canvas>
                                    <div class="mt-8">
                                        <div class="flex items-center">
                                            <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div>
                                            <span class="truncate">17 - 30 Years old</span> 
                                            <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                            <span class="font-medium xl:ml-auto">62%</span> 
                                        </div>
                                        <div class="flex items-center mt-4">
                                            <div class="w-2 h-2 bg-theme-1 rounded-full mr-3"></div>
                                            <span class="truncate">31 - 50 Years old</span> 
                                            <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                            <span class="font-medium xl:ml-auto">33%</span> 
                                        </div>
                                        <div class="flex items-center mt-4">
                                            <div class="w-2 h-2 bg-theme-12 rounded-full mr-3"></div>
                                            <span class="truncate">>= 50 Years old</span> 
                                            <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                            <span class="font-medium xl:ml-auto">10%</span> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Sales Report -->
                            <!-- BEGIN: Official Store -->
                            <div class="col-span-12 xl:col-span-8 mt-6">
                                <div class="intro-y block sm:flex items-center h-10">
                                    <h2 class="text-lg font-medium truncate mr-5">
                                        Official Store
                                    </h2>
                                    <div class="sm:ml-auto mt-3 sm:mt-0 relative text-gray-700 dark:text-gray-300">
                                        <i data-feather="map-pin" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i> 
                                        <input type="text" class="form-control sm:w-40 box pl-10" placeholder="Filter by city">
                                    </div>
                                </div>
                                <div class="intro-y box p-5 mt-12 sm:mt-5">
                                    <div>250 Official stores in 21 countries, click the marker to see location details.</div>
                                    <div class="report-maps mt-5 bg-gray-200 rounded-md" data-center="-6.2425342, 106.8626478" data-sources="/dist/json/location.json"></div>
                                </div>
                            </div>
                            <!-- END: Official Store -->
                            <!-- BEGIN: Weekly Best Sellers -->
                            <div class="col-span-12 xl:col-span-4 mt-6">
                                <div class="intro-y flex items-center h-10">
                                    <h2 class="text-lg font-medium truncate mr-5">
                                        Weekly Best Sellers
                                    </h2>
                                </div>
                                <div class="mt-5">
                                    <div class="intro-y">
                                        <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                            <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                                <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-7.jpg">
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">Morgan Freeman</div>
                                                <div class="text-gray-600 text-xs mt-0.5">11 June 2022</div>
                                            </div>
                                            <div class="py-1 px-2 rounded-full text-xs bg-theme-9 text-white cursor-pointer font-medium">137 Sales</div>
                                        </div>
                                    </div>
                                    <div class="intro-y">
                                        <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                            <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                                <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-5.jpg">
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">Johnny Depp</div>
                                                <div class="text-gray-600 text-xs mt-0.5">27 March 2021</div>
                                            </div>
                                            <div class="py-1 px-2 rounded-full text-xs bg-theme-9 text-white cursor-pointer font-medium">137 Sales</div>
                                        </div>
                                    </div>
                                    <div class="intro-y">
                                        <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                            <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                                <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-13.jpg">
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">Johnny Depp</div>
                                                <div class="text-gray-600 text-xs mt-0.5">28 August 2020</div>
                                            </div>
                                            <div class="py-1 px-2 rounded-full text-xs bg-theme-9 text-white cursor-pointer font-medium">137 Sales</div>
                                        </div>
                                    </div>
                                    <div class="intro-y">
                                        <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                            <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                                <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-8.jpg">
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">Johnny Depp</div>
                                                <div class="text-gray-600 text-xs mt-0.5">22 December 2022</div>
                                            </div>
                                            <div class="py-1 px-2 rounded-full text-xs bg-theme-9 text-white cursor-pointer font-medium">137 Sales</div>
                                        </div>
                                    </div>
                                    <a href="" class="intro-y w-full block text-center rounded-md py-4 border border-dotted border-theme-15 dark:border-dark-5 text-theme-16 dark:text-gray-600">View More</a> 
                                </div>
                            </div>
                            <!-- END: Weekly Best Sellers -->
                            <!-- BEGIN: General Report -->
                            <div class="col-span-12 grid grid-cols-12 gap-6 mt-8">
                                <div class="col-span-12 sm:col-span-6 xxl:col-span-3 intro-y">
                                    <div class="box p-5 zoom-in">
                                        <div class="flex items-center">
                                            <div class="w-2/4 flex-none">
                                                <div class="text-lg font-medium truncate">Target Sales</div>
                                                <div class="text-gray-600 mt-1">300 Sales</div>
                                            </div>
                                            <div class="flex-none ml-auto relative">
                                                <canvas id="report-donut-chart-1" width="90" height="90"></canvas>
                                                <div class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">20%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 sm:col-span-6 xxl:col-span-3 intro-y">
                                    <div class="box p-5 zoom-in">
                                        <div class="flex">
                                            <div class="text-lg font-medium truncate mr-3">Social Media</div>
                                            <div class="py-1 px-2 flex items-center rounded-full text-xs bg-gray-200 dark:bg-dark-5 text-gray-600 dark:text-gray-300 cursor-pointer ml-auto truncate">320 Followers</div>
                                        </div>
                                        <div class="mt-4">
                                            <canvas class="simple-line-chart-1 -ml-1" height="60"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 sm:col-span-6 xxl:col-span-3 intro-y">
                                    <div class="box p-5 zoom-in">
                                        <div class="flex items-center">
                                            <div class="w-2/4 flex-none">
                                                <div class="text-lg font-medium truncate">New Products</div>
                                                <div class="text-gray-600 mt-1">1450 Products</div>
                                            </div>
                                            <div class="flex-none ml-auto relative">
                                                <canvas id="report-donut-chart-2" width="90" height="90"></canvas>
                                                <div class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">45%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 sm:col-span-6 xxl:col-span-3 intro-y">
                                    <div class="box p-5 zoom-in">
                                        <div class="flex">
                                            <div class="text-lg font-medium truncate mr-3">Posted Ads</div>
                                            <div class="py-1 px-2 flex items-center rounded-full text-xs bg-gray-200 dark:bg-dark-5 text-gray-600 dark:text-gray-300 cursor-pointer ml-auto truncate">180 Campaign</div>
                                        </div>
                                        <div class="mt-4">
                                            <canvas class="simple-line-chart-1 -ml-1" height="60"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: General Report -->
                            <!-- BEGIN: Weekly Top Products -->
                            <div class="col-span-12 mt-6">
                                <div class="intro-y block sm:flex items-center h-10">
                                    <h2 class="text-lg font-medium truncate mr-5">
                                        Weekly Top Products
                                    </h2>
                                    <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                                        <button class="btn box flex items-center text-gray-700 dark:text-gray-300"> <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to Excel </button>
                                        <button class="ml-3 btn box flex items-center text-gray-700 dark:text-gray-300"> <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to PDF </button>
                                    </div>
                                </div>
                                <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                                    <table class="table table-report sm:mt-2">
                                        <thead>
                                            <tr>
                                                <th class="whitespace-nowrap">IMAGES</th>
                                                <th class="whitespace-nowrap">PRODUCT NAME</th>
                                                <th class="text-center whitespace-nowrap">STOCK</th>
                                                <th class="text-center whitespace-nowrap">STATUS</th>
                                                <th class="text-center whitespace-nowrap">ACTIONS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="intro-x">
                                                <td class="w-40">
                                                    <div class="flex">
                                                        <div class="w-10 h-10 image-fit zoom-in">
                                                            <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-3.jpg" title="Uploaded at 11 June 2022">
                                                        </div>
                                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                            <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-8.jpg" title="Uploaded at 11 December 2020">
                                                        </div>
                                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                            <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-11.jpg" title="Uploaded at 14 September 2021">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="" class="font-medium whitespace-nowrap">Nike Air Max 270</a> 
                                                    <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">Sport &amp; Outdoor</div>
                                                </td>
                                                <td class="text-center">50</td>
                                                <td class="w-40">
                                                    <div class="flex items-center justify-center text-theme-6"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>
                                                </td>
                                                <td class="table-report__action w-56">
                                                    <div class="flex justify-center items-center">
                                                        <a class="flex items-center mr-3" href=""> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                                        <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="intro-x">
                                                <td class="w-40">
                                                    <div class="flex">
                                                        <div class="w-10 h-10 image-fit zoom-in">
                                                            <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-13.jpg" title="Uploaded at 27 March 2021">
                                                        </div>
                                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                            <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-3.jpg" title="Uploaded at 3 June 2020">
                                                        </div>
                                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                            <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-2.jpg" title="Uploaded at 11 March 2021">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="" class="font-medium whitespace-nowrap">Samsung Q90 QLED TV</a> 
                                                    <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">Electronic</div>
                                                </td>
                                                <td class="text-center">50</td>
                                                <td class="w-40">
                                                    <div class="flex items-center justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                                                </td>
                                                <td class="table-report__action w-56">
                                                    <div class="flex justify-center items-center">
                                                        <a class="flex items-center mr-3" href=""> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                                        <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="intro-x">
                                                <td class="w-40">
                                                    <div class="flex">
                                                        <div class="w-10 h-10 image-fit zoom-in">
                                                            <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-4.jpg" title="Uploaded at 28 August 2020">
                                                        </div>
                                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                            <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-3.jpg" title="Uploaded at 27 September 2021">
                                                        </div>
                                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                            <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-7.jpg" title="Uploaded at 19 April 2022">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="" class="font-medium whitespace-nowrap">Sony Master Series A9G</a> 
                                                    <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">Electronic</div>
                                                </td>
                                                <td class="text-center">127</td>
                                                <td class="w-40">
                                                    <div class="flex items-center justify-center text-theme-6"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>
                                                </td>
                                                <td class="table-report__action w-56">
                                                    <div class="flex justify-center items-center">
                                                        <a class="flex items-center mr-3" href=""> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                                        <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="intro-x">
                                                <td class="w-40">
                                                    <div class="flex">
                                                        <div class="w-10 h-10 image-fit zoom-in">
                                                            <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-6.jpg" title="Uploaded at 22 December 2022">
                                                        </div>
                                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                            <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-12.jpg" title="Uploaded at 19 December 2022">
                                                        </div>
                                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                            <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-15.jpg" title="Uploaded at 19 August 2022">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="" class="font-medium whitespace-nowrap">Dell XPS 13</a> 
                                                    <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">PC &amp; Laptop</div>
                                                </td>
                                                <td class="text-center">59</td>
                                                <td class="w-40">
                                                    <div class="flex items-center justify-center text-theme-6"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>
                                                </td>
                                                <td class="table-report__action w-56">
                                                    <div class="flex justify-center items-center">
                                                        <a class="flex items-center mr-3" href=""> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                                        <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-3">
                                    <ul class="pagination">
                                        <li>
                                            <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
                                        </li>
                                        <li>
                                            <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
                                        </li>
                                        <li> <a class="pagination__link" href="">...</a> </li>
                                        <li> <a class="pagination__link" href="">1</a> </li>
                                        <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
                                        <li> <a class="pagination__link" href="">3</a> </li>
                                        <li> <a class="pagination__link" href="">...</a> </li>
                                        <li>
                                            <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
                                        </li>
                                        <li>
                                            <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
                                        </li>
                                    </ul>
                                    <select class="w-20 form-select box mt-3 sm:mt-0">
                                        <option>10</option>
                                        <option>25</option>
                                        <option>35</option>
                                        <option>50</option>
                                    </select>
                                </div>
                            </div>
                            <!-- END: Weekly Top Products -->
                        </div>
                    </div>
                    <div class="col-span-12 xxl:col-span-3">
                        <div class="xxl:border-l border-theme-5 -mb-10 pb-10">
                            <div class="xxl:pl-6 grid grid-cols-12 gap-6">
                                <!-- BEGIN: Transactions -->
                                <div class="col-span-12 md:col-span-6 xl:col-span-4 xxl:col-span-12 mt-3 xxl:mt-8">
                                    <div class="intro-x flex items-center h-10">
                                        <h2 class="text-lg font-medium truncate mr-5">
                                            Transactions
                                        </h2>
                                    </div>
                                    <div class="mt-5">
                                        <div class="intro-x">
                                            <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                    <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-7.jpg">
                                                </div>
                                                <div class="ml-4 mr-auto">
                                                    <div class="font-medium">Morgan Freeman</div>
                                                    <div class="text-gray-600 text-xs mt-0.5">11 June 2022</div>
                                                </div>
                                                <div class="text-theme-6">-$65</div>
                                            </div>
                                        </div>
                                        <div class="intro-x">
                                            <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                    <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-5.jpg">
                                                </div>
                                                <div class="ml-4 mr-auto">
                                                    <div class="font-medium">Johnny Depp</div>
                                                    <div class="text-gray-600 text-xs mt-0.5">27 March 2021</div>
                                                </div>
                                                <div class="text-theme-9">+$119</div>
                                            </div>
                                        </div>
                                        <div class="intro-x">
                                            <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                    <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-13.jpg">
                                                </div>
                                                <div class="ml-4 mr-auto">
                                                    <div class="font-medium">Johnny Depp</div>
                                                    <div class="text-gray-600 text-xs mt-0.5">28 August 2020</div>
                                                </div>
                                                <div class="text-theme-6">-$127</div>
                                            </div>
                                        </div>
                                        <div class="intro-x">
                                            <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                    <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-8.jpg">
                                                </div>
                                                <div class="ml-4 mr-auto">
                                                    <div class="font-medium">Johnny Depp</div>
                                                    <div class="text-gray-600 text-xs mt-0.5">22 December 2022</div>
                                                </div>
                                                <div class="text-theme-6">-$115</div>
                                            </div>
                                        </div>
                                        <div class="intro-x">
                                            <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                    <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-6.jpg">
                                                </div>
                                                <div class="ml-4 mr-auto">
                                                    <div class="font-medium">Russell Crowe</div>
                                                    <div class="text-gray-600 text-xs mt-0.5">15 December 2020</div>
                                                </div>
                                                <div class="text-theme-6">-$50</div>
                                            </div>
                                        </div>
                                        <a href="" class="intro-x w-full block text-center rounded-md py-3 border border-dotted border-theme-15 dark:border-dark-5 text-theme-16 dark:text-gray-600">View More</a> 
                                    </div>
                                </div>
                                <!-- END: Transactions -->
                                <!-- BEGIN: Recent Activities -->
                                <div class="col-span-12 md:col-span-6 xl:col-span-4 xxl:col-span-12 mt-3">
                                    <div class="intro-x flex items-center h-10">
                                        <h2 class="text-lg font-medium truncate mr-5">
                                            Recent Activities
                                        </h2>
                                        <a href="" class="ml-auto text-theme-1 dark:text-theme-10 truncate">Show More</a> 
                                    </div>
                                    <div class="report-timeline mt-5 relative">
                                        <div class="intro-x relative flex items-center mb-3">
                                            <div class="report-timeline__image">
                                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                    <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-8.jpg">
                                                </div>
                                            </div>
                                            <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Edward Norton</div>
                                                    <div class="text-xs text-gray-500 ml-auto">07:00 PM</div>
                                                </div>
                                                <div class="text-gray-600 mt-1">Has joined the team</div>
                                            </div>
                                        </div>
                                        <div class="intro-x relative flex items-center mb-3">
                                            <div class="report-timeline__image">
                                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                    <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-2.jpg">
                                                </div>
                                            </div>
                                            <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Brad Pitt</div>
                                                    <div class="text-xs text-gray-500 ml-auto">07:00 PM</div>
                                                </div>
                                                <div class="text-gray-600">
                                                    <div class="mt-1">Added 3 new photos</div>
                                                    <div class="flex mt-2">
                                                        <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="Nike Air Max 270">
                                                            <img alt="Rubick Tailwind HTML Admin Template" class="rounded-md border border-white" src="dist/images/preview-12.jpg">
                                                        </div>
                                                        <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="Samsung Q90 QLED TV">
                                                            <img alt="Rubick Tailwind HTML Admin Template" class="rounded-md border border-white" src="dist/images/preview-10.jpg">
                                                        </div>
                                                        <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="Sony Master Series A9G">
                                                            <img alt="Rubick Tailwind HTML Admin Template" class="rounded-md border border-white" src="dist/images/preview-5.jpg">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="intro-x text-gray-500 text-xs text-center my-4">12 November</div>
                                        <div class="intro-x relative flex items-center mb-3">
                                            <div class="report-timeline__image">
                                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                    <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-2.jpg">
                                                </div>
                                            </div>
                                            <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Keira Knightley</div>
                                                    <div class="text-xs text-gray-500 ml-auto">07:00 PM</div>
                                                </div>
                                                <div class="text-gray-600 mt-1">Has changed <a class="text-theme-1 dark:text-theme-10" href="">Samsung Galaxy S20 Ultra</a> price and description</div>
                                            </div>
                                        </div>
                                        <div class="intro-x relative flex items-center mb-3">
                                            <div class="report-timeline__image">
                                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                    <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-1.jpg">
                                                </div>
                                            </div>
                                            <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Denzel Washington</div>
                                                    <div class="text-xs text-gray-500 ml-auto">07:00 PM</div>
                                                </div>
                                                <div class="text-gray-600 mt-1">Has changed <a class="text-theme-1 dark:text-theme-10" href="">Samsung Q90 QLED TV</a> description</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Recent Activities -->
                                <!-- BEGIN: Important Notes -->
                                <div class="col-span-12 md:col-span-6 xl:col-span-12 xl:col-start-1 xl:row-start-1 xxl:col-start-auto xxl:row-start-auto mt-3">
                                    <div class="intro-x flex items-center h-10">
                                        <h2 class="text-lg font-medium truncate mr-auto">
                                            Important Notes
                                        </h2>
                                        <button data-carousel="important-notes" data-target="prev" class="tiny-slider-navigator btn px-2 border-gray-400 text-gray-700 dark:text-gray-300 mr-2"> <i data-feather="chevron-left" class="w-4 h-4"></i> </button>
                                        <button data-carousel="important-notes" data-target="next" class="tiny-slider-navigator btn px-2 border-gray-400 text-gray-700 dark:text-gray-300 mr-2"> <i data-feather="chevron-right" class="w-4 h-4"></i> </button>
                                    </div>
                                    <div class="mt-5 intro-x">
                                        <div class="box zoom-in">
                                            <div class="tiny-slider" id="important-notes">
                                                <div class="p-5">
                                                    <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                                    <div class="text-gray-500 mt-1">20 Hours ago</div>
                                                    <div class="text-gray-600 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                                    <div class="font-medium flex mt-5">
                                                        <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                                        <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                                    </div>
                                                </div>
                                                <div class="p-5">
                                                    <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                                    <div class="text-gray-500 mt-1">20 Hours ago</div>
                                                    <div class="text-gray-600 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                                    <div class="font-medium flex mt-5">
                                                        <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                                        <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                                    </div>
                                                </div>
                                                <div class="p-5">
                                                    <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                                    <div class="text-gray-500 mt-1">20 Hours ago</div>
                                                    <div class="text-gray-600 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                                    <div class="font-medium flex mt-5">
                                                        <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                                        <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Important Notes -->
                                <!-- BEGIN: Schedules -->
                                <div class="col-span-12 md:col-span-6 xl:col-span-4 xxl:col-span-12 xl:col-start-1 xl:row-start-2 xxl:col-start-auto xxl:row-start-auto mt-3">
                                    <div class="intro-x flex items-center h-10">
                                        <h2 class="text-lg font-medium truncate mr-5">
                                            Schedules
                                        </h2>
                                        <a href="" class="ml-auto text-theme-1 dark:text-theme-10 truncate flex items-center"> <i data-feather="plus" class="w-4 h-4 mr-1"></i> Add New Schedules </a>
                                    </div>
                                    <div class="mt-5">
                                        <div class="intro-x box">
                                            <div class="p-5">
                                                <div class="flex">
                                                    <i data-feather="chevron-left" class="w-5 h-5 text-gray-600"></i> 
                                                    <div class="font-medium text-base mx-auto">April</div>
                                                    <i data-feather="chevron-right" class="w-5 h-5 text-gray-600"></i> 
                                                </div>
                                                <div class="grid grid-cols-7 gap-4 mt-5 text-center">
                                                    <div class="font-medium">Su</div>
                                                    <div class="font-medium">Mo</div>
                                                    <div class="font-medium">Tu</div>
                                                    <div class="font-medium">We</div>
                                                    <div class="font-medium">Th</div>
                                                    <div class="font-medium">Fr</div>
                                                    <div class="font-medium">Sa</div>
                                                    <div class="py-0.5 rounded relative text-gray-600">29</div>
                                                    <div class="py-0.5 rounded relative text-gray-600">30</div>
                                                    <div class="py-0.5 rounded relative text-gray-600">31</div>
                                                    <div class="py-0.5 rounded relative">1</div>
                                                    <div class="py-0.5 rounded relative">2</div>
                                                    <div class="py-0.5 rounded relative">3</div>
                                                    <div class="py-0.5 rounded relative">4</div>
                                                    <div class="py-0.5 rounded relative">5</div>
                                                    <div class="py-0.5 bg-theme-18 dark:bg-theme-9 rounded relative">6</div>
                                                    <div class="py-0.5 rounded relative">7</div>
                                                    <div class="py-0.5 bg-theme-1 dark:bg-theme-1 text-white rounded relative">8</div>
                                                    <div class="py-0.5 rounded relative">9</div>
                                                    <div class="py-0.5 rounded relative">10</div>
                                                    <div class="py-0.5 rounded relative">11</div>
                                                    <div class="py-0.5 rounded relative">12</div>
                                                    <div class="py-0.5 rounded relative">13</div>
                                                    <div class="py-0.5 rounded relative">14</div>
                                                    <div class="py-0.5 rounded relative">15</div>
                                                    <div class="py-0.5 rounded relative">16</div>
                                                    <div class="py-0.5 rounded relative">17</div>
                                                    <div class="py-0.5 rounded relative">18</div>
                                                    <div class="py-0.5 rounded relative">19</div>
                                                    <div class="py-0.5 rounded relative">20</div>
                                                    <div class="py-0.5 rounded relative">21</div>
                                                    <div class="py-0.5 rounded relative">22</div>
                                                    <div class="py-0.5 bg-theme-17 dark:bg-theme-11 rounded relative">23</div>
                                                    <div class="py-0.5 rounded relative">24</div>
                                                    <div class="py-0.5 rounded relative">25</div>
                                                    <div class="py-0.5 rounded relative">26</div>
                                                    <div class="py-0.5 bg-theme-14 dark:bg-theme-12 rounded relative">27</div>
                                                    <div class="py-0.5 rounded relative">28</div>
                                                    <div class="py-0.5 rounded relative">29</div>
                                                    <div class="py-0.5 rounded relative">30</div>
                                                    <div class="py-0.5 rounded relative text-gray-600">1</div>
                                                    <div class="py-0.5 rounded relative text-gray-600">2</div>
                                                    <div class="py-0.5 rounded relative text-gray-600">3</div>
                                                    <div class="py-0.5 rounded relative text-gray-600">4</div>
                                                    <div class="py-0.5 rounded relative text-gray-600">5</div>
                                                    <div class="py-0.5 rounded relative text-gray-600">6</div>
                                                    <div class="py-0.5 rounded relative text-gray-600">7</div>
                                                    <div class="py-0.5 rounded relative text-gray-600">8</div>
                                                    <div class="py-0.5 rounded relative text-gray-600">9</div>
                                                </div>
                                            </div>
                                            <div class="border-t border-gray-200 dark:border-dark-5 p-5">
                                                <div class="flex items-center">
                                                    <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div>
                                                    <span class="truncate">UI/UX Workshop</span> 
                                                    <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                                    <span class="font-medium xl:ml-auto">23th</span> 
                                                </div>
                                                <div class="flex items-center mt-4">
                                                    <div class="w-2 h-2 bg-theme-1 dark:bg-theme-10 rounded-full mr-3"></div>
                                                    <span class="truncate">VueJs Frontend Development</span> 
                                                    <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                                    <span class="font-medium xl:ml-auto">10th</span> 
                                                </div>
                                                <div class="flex items-center mt-4">
                                                    <div class="w-2 h-2 bg-theme-12 rounded-full mr-3"></div>
                                                    <span class="truncate">Laravel Rest API</span> 
                                                    <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                                    <span class="font-medium xl:ml-auto">31th</span> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Schedules -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Content -->
        </div>
        <!-- BEGIN: Dark Mode Switcher-->
        <div data-url="side-menu-dark-dashboard-overview-1.html" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box dark:bg-dark-2 border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
            <div class="mr-4 text-gray-700 dark:text-gray-300">Dark Mode</div>
            <div class="dark-mode-switcher__toggle border"></div>
        </div>
        <!-- END: Dark Mode Switcher-->
        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="dist/js/app.js"></script>
        <!-- END: JS Assets-->
    </body>
</html>