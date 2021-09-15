<?php include 'dist/include/header.php' ?>

    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        <div class="top-bar">
            <!-- BEGIN: Breadcrumb -->
            <div class="-intro-x breadcrumb mr-auto hidden sm:flex"><a href="">Application</a> <i
                        data-feather="chevron-right" class="breadcrumb__icon"></i> <a href=""
                                                                                      class="breadcrumb--active">New
                    Topic</a></div>
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

        <form class="validate-form" name="new_forum" id="new_forum" method="post" action="">

            <!-- END: Top Bar -->

            <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                <h2 class="text-xl font-medium mr-auto">
                    Create New Forum Topic
                </h2>
                <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                    <div class="dropdown mr-2" style="position: relative;">
                        <a class="dropdown-toggle btn box text-gray-700 dark:text-gray-300 flex items-center"
                           aria-expanded="false"> Cancel
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-chevron-down w-4 h-4 ml-2">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </a>
                        <div class="dropdown-menu w-40" id="_az8lq0288" data-popper-placement="bottom-end"
                             style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(-64px, 38px);">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                <a href="forum.php"
                                   class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="x" class="w-4 h-4 mr-2"></i>
                                    <span class="truncate">Cancel</span> </a>

                            </div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle btn btn-primary shadow-md flex items-center" aria-expanded="false">
                            Save <i class="w-4 h-4 ml-2" data-feather="chevron-down"></i></a>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                <button type="submit" id="submitTopic" name="submitTopic"
                                        class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="save" class="w-4 h-4 mr-2"></i> Publish Topic
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
                <!-- BEGIN: Post Content -->
                <div class="intro-y col-span-12 lg:col-span-8">
                    <h2 class="text-lg font-medium mr-auto">
                        Title
                    </h2>
                    <small>Be specific and imagine you’re asking a question to another person.</small>

                    <input type="text" id="title" name="title"
                           class="mt-3 intro-y form-control py-3 px-4 box pr-10 placeholder-theme-13"
                           placeholder="Enter a title">
                    <div class="post intro-y overflow-hidden box mt-5">
                        <div class="post__tabs nav nav-tabs flex-col sm:flex-row bg-gray-300 dark:bg-dark-2 text-gray-600"
                             role="tablist">
                            <a title="Fill in the article content"
                               class="tooltip w-full sm:w-40 py-4 text-center flex justify-center items-center active"
                               id="content-tab" role="tab" aria-controls="content" aria-selected="true"> <i
                                        data-feather="file-text" class="w-4 h-4 mr-2"></i> Content </a>
                        </div>
                        <div class="post__content tab-content">
                            <div id="content" class="tab-pane p-5 active" role="tabpanel" aria-labelledby="content-tab">
                                <div class="border border-gray-200 dark:border-dark-5 rounded-md p-5">
                                    <div class="font-medium flex items-center border-b border-gray-200 dark:border-dark-5 pb-5">
                                        <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Ask Question &nbsp; |
                                        &nbsp;&nbsp;

                                        <small>Include all the information someone would need to answer your
                                            question.</small>

                                    </div>

                                    <div class="mt-5">
                                        <div class="editor">

                                            <input type="text" id="content" name="content"
                                                   class="intro-y form-control py-3 px-4 box pr-10 placeholder-theme-13">


                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Post Content -->
                <!-- BEGIN: Post Info -->
                <div class="col-span-12 lg:col-span-4">
                    <div class="intro-y box p-5">
                        <div>
                            <label class="form-label">Written By</label>
                            <div class="">
                                <div class="dropdown-toggle btn w-full btn-outline-secondary dark:bg-dark-2 dark:border-dark-2 flex items-center justify-start"
                                     role="button" aria-expanded="false">
                                    <div class="w-6 h-6 image-fit mr-3">
                                        <img class="rounded" alt=""
                                             src="dist/images/profile-5.jpg">
                                    </div>
                                    <div class="truncate">Robert De Niro</div>
                                    <input hidden value="Robert De Niro" name="author" id="author">
                                </div>

                            </div>
                        </div>

                        <div class="mt-3">
                            <label for="post-form-2" class="form-label">Topic Created Date</label>
                            <input class="datepicker form-control" id="post-form-2" disabled data-single-mode="true">
                        </div>
                        <div class="mt-3">
                            <label for="post-form-3" class="form-label">Main Category</label>
                            <select data-placeholder="Select Category" class="tom-select w-full" name="post-form-3" id="post-form-3">
                                <option value="General">General</option>
                                <option value="Dev">Dev</option>
                                <option value="Training">Training</option>
                            </select>
                        </div>
                        <div class="mt-3">
                            <label for="post-form-4" class="form-label">Sub Category</label>
                            <select data-placeholder="Topic Sub Category" class="tom-select w-full" name="post-form-4" id="post-form-4">
                                <option value="HR">HR</option>
                                <option value="Finance">Finance</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Technical">Technical</option>
                                <option value="Pickbox Project">Pickbox Project</option>
                                <option value="Aurea Project">Aurea Project</option>
                                <option value="Nishtshade Project">Nishtshade Project</option>
                                <option value="Development">Development</option>
                                <option value="Quality Assurance">Quality Assurance</option>
                            </select>
                        </div>

                    </div>
                </div>
                <!-- END: Post Info -->
            </div>

        </form>

    </div>

<?php include 'dist/include/footer.php' ?>