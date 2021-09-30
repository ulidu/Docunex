<?php include 'dist/include/header.php' ?>

    <!-- BEGIN: Content -->
    <div class="content">

        <!-- BEGIN: Top Bar -->
        <div class="top-bar">
            <!-- BEGIN: Breadcrumb -->
            <div class="-intro-x breadcrumb mr-auto hidden sm:flex"><a href="">Application</a> <i
                        data-feather="chevron-right" class="breadcrumb__icon"></i> <a href=""
                                                                                      class="breadcrumb--active">Dashboard</a>
            </div>
            <!-- END: Breadcrumb -->

            <!-- BEGIN: Account Menu -->
            <div class="intro-x dropdown w-8 h-8">
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in"
                     role="button" aria-expanded="false">
                    <img alt="" src="dist/images/2.png">
                </div>
                <div class="dropdown-menu w-56">
                    <div class="dropdown-menu__content box bg-theme-26 dark:bg-dark-6 text-white">
                        <div class="p-4 border-b border-theme-27 dark:border-dark-3">
                            <div class="font-medium">Denzel Washington</div>
                            <div class="text-xs text-theme-28 mt-0.5 dark:text-gray-600">Software Engineer</div>
                        </div>

                        <div class="p-2 border-t border-theme-27 dark:border-dark-3">
                            <a href="login.php"
                               class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                                <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
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
                                General Reports
                            </h2>
                            <a href="" class="ml-auto flex items-center text-theme-1 dark:text-theme-10"> <i
                                        data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                        </div>
                        <div class="grid grid-cols-12 gap-6 mt-5">
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-feather="file-text" class="report-box__icon text-theme-10"></i>
                                            <div class="ml-auto">
                                                <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer"
                                                     title="33% Higher than last month"> 33% <i
                                                            data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i></div>
                                            </div>
                                        </div>
                                        <div class="text-3xl font-medium leading-8 mt-6">


                                            <?php

                                            $query_doc = "select * from documents";

                                            if (!empty($con)) {

                                                $run_query_doc = mysqli_query($con, $query_doc);

                                            }

                                            $count_doc = mysqli_num_rows($run_query_doc);

                                            echo $count_doc;

                                            ?>


                                        </div>
                                        <div class="text-base text-gray-600 mt-1">Total Documents</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-feather="message-square" class="report-box__icon text-theme-11"></i>
                                            <div class="ml-auto">
                                                <div class="report-box__indicator bg-theme-6 tooltip cursor-pointer"
                                                     title="2% Lower than last month"> 2% <i data-feather="chevron-down"
                                                                                             class="w-4 h-4 ml-0.5"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-3xl font-medium leading-8 mt-6">

                                            <?php

                                            $query_doc = "select * from forum";

                                            if (!empty($con)) {

                                                $run_query_doc = mysqli_query($con, $query_doc);

                                            }

                                            $count_doc = mysqli_num_rows($run_query_doc);

                                            echo $count_doc;

                                            ?>

                                        </div>
                                        <div class="text-base text-gray-600 mt-1">Forum Topics</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-feather="home" class="report-box__icon text-theme-12"></i>
                                            <div class="ml-auto">
                                                <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer"
                                                     title="12% Higher than last month"> 12% <i
                                                            data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i></div>
                                            </div>
                                        </div>
                                        <div class="text-3xl font-medium leading-8 mt-6">10</div>
                                        <div class="text-base text-gray-600 mt-1">Departments</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-feather="user" class="report-box__icon text-theme-9"></i>
                                            <div class="ml-auto">
                                                <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer"
                                                     title="22% Higher than last month"> 22% <i
                                                            data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i></div>
                                            </div>
                                        </div>
                                        <div class="text-3xl font-medium leading-8 mt-6">26</div>
                                        <div class="text-base text-gray-600 mt-1">Team Members</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 lg:col-span-6 mt-8">
                        <div class="intro-y block sm:flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">
                                Document Report
                            </h2>
                            <div class="sm:ml-auto mt-3 sm:mt-0 relative text-gray-700 dark:text-gray-300">
                                <i data-feather="calendar"
                                   class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i>
                                <input type="text" class="datepicker form-control sm:w-56 box pl-10">
                            </div>
                        </div>
                        <div class="intro-y box p-5 mt-12 sm:mt-5">
                            <div class="flex flex-col xl:flex-row xl:items-center">
                                <div class="flex">
                                    <div>
                                        <div class="text-theme-19 dark:text-gray-300 text-lg xl:text-xl font-medium">
                                            <?php

                                            $query_doc = "select * from documents";

                                            if (!empty($con)) {

                                                $run_query_doc = mysqli_query($con, $query_doc);

                                            }

                                            $count_doc = mysqli_num_rows($run_query_doc);

                                            echo $count_doc;

                                            ?> Documents
                                        </div>
                                        <div class="mt-0.5 text-gray-600 dark:text-gray-600">This Month</div>
                                    </div>

                                </div>
                                <div class="dropdown xl:ml-auto mt-5 xl:mt-0">
                                    <button class="dropdown-toggle btn btn-outline-secondary font-normal"
                                            aria-expanded="false"> Filter by Category <i data-feather="chevron-down"
                                                                                         class="w-4 h-4 ml-2"></i>
                                    </button>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2 overflow-y-auto h-32">
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">HR</a>
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">Finance</a>
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">Marketing</a>
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">Pickbox Project</a>
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">Development</a>
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">Quality Assurance</a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="report-chart">
                                <canvas id="report-line-chart" height="169" class="mt-6"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                        <div class="intro-y flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">
                                Top Documents
                            </h2>
                           </div>
                        <div class="intro-y box p-5 mt-5">
                            <canvas class="mt-3" id="report-pie-chart" height="300"></canvas>
                            <div class="mt-8">
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-theme-1 rounded-full mr-3"></div>
                                    <span class="truncate">Development</span>
                                    <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                    <span class="font-medium xl:ml-auto">62%</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div>
                                    <span class="truncate">General</span>
                                    <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                    <span class="font-medium xl:ml-auto">33%</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-theme-12 rounded-full mr-3"></div>
                                    <span class="truncate">HR</span>
                                    <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                    <span class="font-medium xl:ml-auto">10%</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                        <div class="intro-y flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">
                                Top Forums
                            </h2>
                             </div>
                        <div class="intro-y box p-5 mt-5">
                            <canvas class="mt-3" id="report-donut-chart" height="300"></canvas>
                            <div class="mt-8">
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-theme-1 rounded-full mr-3"></div>
                                    <span class="truncate">HR</span>
                                    <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                    <span class="font-medium xl:ml-auto">62%</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-theme-1 rounded-full mr-3"></div>
                                    <span class="truncate">Finance</span>
                                    <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                    <span class="font-medium xl:ml-auto">33%</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-theme-12 rounded-full mr-3"></div>
                                    <span class="truncate">Marketing</span>
                                    <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                    <span class="font-medium xl:ml-auto">10%</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- END: Content -->

<?php include 'dist/include/footer.php' ?>