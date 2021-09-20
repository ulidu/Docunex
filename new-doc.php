<?php include 'dist/include/header.php' ?>

            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
                    <!-- BEGIN: Breadcrumb -->
                    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="">Application</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">New Document</a> </div>
                    <!-- END: Breadcrumb -->
                    <!-- BEGIN: Account Menu -->
                    <div class="intro-x dropdown w-8 h-8">
                        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in"
                             role="button" aria-expanded="false">
                            <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/2.png">
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
                <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto">
                        Add New Document
                    </h2>
                    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                        <div class="dropdown mr-2">
                            <button class="dropdown-toggle btn box text-gray-700 dark:text-gray-300 flex items-center" aria-expanded="false"> English <i class="w-4 h-4 ml-2" data-feather="chevron-down"></i> </button>
                            <div class="dropdown-menu w-40">
                                <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="activity" class="w-4 h-4 mr-2"></i> <span class="truncate">English</span> </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="activity" class="w-4 h-4 mr-2"></i> <span class="truncate">Indonesian</span> </a>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn box text-gray-700 dark:text-gray-300 mr-2 flex items-center ml-auto sm:ml-0"> <i class="w-4 h-4 mr-2" data-feather="eye"></i> Preview </button>
                        <div class="dropdown">
                            <button class="dropdown-toggle btn btn-primary shadow-md flex items-center" aria-expanded="false" type="submit"> Save <i class="w-4 h-4 ml-2" data-feather="chevron-down"></i> </button>
                            <div class="dropdown-menu w-40">
                                <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> As New Post </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> As Draft </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to PDF </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to Word </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
                    <!-- BEGIN: Post Content -->
                    <div class="intro-y col-span-12 lg:col-span-8">
                        <input type="text" class="intro-y form-control py-3 px-4 box pr-10 placeholder-theme-13" placeholder="Title">
                        <div class="post intro-y overflow-hidden box mt-5">
                            <div class="post__tabs nav nav-tabs flex-col sm:flex-row bg-gray-300 dark:bg-dark-2 text-gray-600" role="tablist">
                                <a title="Fill in the article content" data-toggle="tab" data-target="#content" href="javascript:;" class="tooltip w-full sm:w-40 py-4 text-center flex justify-center items-center active" id="content-tab" role="tab" aria-controls="content" aria-selected="true"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Content </a>
                                <a title="Adjust the meta title" data-toggle="tab" data-target="#meta-title" href="javascript:;" class="tooltip w-full sm:w-40 py-4 text-center flex justify-center items-center" id="meta-title-tab" role="tab" aria-selected="false"> <i data-feather="code" class="w-4 h-4 mr-2"></i> Meta Title </a>
                                <a title="Use search keywords" data-toggle="tab" data-target="#keywords" href="javascript:;" class="tooltip w-full sm:w-40 py-4 text-center flex justify-center items-center" id="keywords-tab" role="tab" aria-selected="false"> <i data-feather="align-left" class="w-4 h-4 mr-2"></i> Keywords </a>
                            </div>
                            <div class="post__content tab-content">
                                <div id="content" class="tab-pane p-5 active" role="tabpanel" aria-labelledby="content-tab">
                                    <div class="border border-gray-200 dark:border-dark-5 rounded-md p-5">
                                        <div class="font-medium flex items-center border-b border-gray-200 dark:border-dark-5 pb-5"> <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Text Content </div>
                                        <div class="mt-5">
                                            <div class="editor">
                                                <p>Content</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border border-gray-200 dark:border-dark-5 rounded-md p-5 mt-5">
                                        <div class="font-medium flex items-center border-b border-gray-200 dark:border-dark-5 pb-5"> <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Caption & Documents </div>
                                        <div class="mt-5">
                                            <div>
                                                <label for="post-form-7" class="form-label">Caption</label>
                                                <input id="post-form-7" type="text" class="form-control" placeholder="Write caption">
                                            </div>
                                            <div class="mt-3">

                                                <form method="post" enctype="multipart/form-data">

                                                <label class="form-label">Upload file</label>
                                                <div class="border-2 border-dashed dark:border-dark-5 rounded-md pt-4">
                                                    <div class="flex flex-wrap px-4">
                                                        <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                                            <img class="rounded-md" alt="Rubick Tailwind HTML Admin Template" src="dist/images/preview-8.jpg">
                                                            <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 right-0 top-0 -mr-2 -mt-2"> <i data-feather="x" class="w-4 h-4"></i> </div>
                                                        </div>
                                                        <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                                            <img class="rounded-md" alt="Rubick Tailwind HTML Admin Template" src="dist/images/preview-9.jpg">
                                                            <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 right-0 top-0 -mr-2 -mt-2"> <i data-feather="x" class="w-4 h-4"></i> </div>
                                                        </div>
                                                        <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                                            <img class="rounded-md" alt="Rubick Tailwind HTML Admin Template" src="dist/images/preview-4.jpg">
                                                            <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 right-0 top-0 -mr-2 -mt-2"> <i data-feather="x" class="w-4 h-4"></i> </div>
                                                        </div>
                                                        <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                                            <img class="rounded-md" alt="Rubick Tailwind HTML Admin Template" src="dist/images/preview-9.jpg">
                                                            <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 right-0 top-0 -mr-2 -mt-2"> <i data-feather="x" class="w-4 h-4"></i> </div>
                                                        </div>
                                                    </div>
                                                    <div class="px-4 pb-4 flex items-center cursor-pointer relative">
                                                        <i data-feather="image" class="w-4 h-4 mr-2"></i> <span class="text-theme-1 dark:text-theme-10 mr-1">Upload a file</span> or drag and drop
                                                        <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                                                    </div>
                                                </div>
                                                </form>
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
                                <label class="form-label">Uploaded by</label>
                                <div class="dropdown">
                                    <div class="dropdown-toggle btn w-full btn-outline-secondary dark:bg-dark-2 dark:border-dark-2 flex items-center justify-start" role="button" aria-expanded="false">
                                        <div class="w-6 h-6 image-fit mr-3">
                                            <img class="rounded" alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-5.jpg">
                                        </div>
                                        <div class="truncate">Robert De Niro</div>
                                        <i class="w-4 h-4 ml-auto" data-feather="chevron-down"></i> 
                                    </div>
                                    <div class="dropdown-menu w-full">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="javascript:;" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                                <div class="w-6 h-6 absolute image-fit mr-3">
                                                    <img class="rounded" alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-5.jpg">
                                                </div>
                                                <div class="ml-8 pl-1">Robert De Niro</div>
                                            </a>
                                            <a href="javascript:;" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                                <div class="w-6 h-6 absolute image-fit mr-3">
                                                    <img class="rounded" alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-1.jpg">
                                                </div>
                                                <div class="ml-8 pl-1">Johnny Depp</div>
                                            </a>
                                            <a href="javascript:;" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                                <div class="w-6 h-6 absolute image-fit mr-3">
                                                    <img class="rounded" alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-15.jpg">
                                                </div>
                                                <div class="ml-8 pl-1">Tom Cruise</div>
                                            </a>
                                            <a href="javascript:;" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                                <div class="w-6 h-6 absolute image-fit mr-3">
                                                    <img class="rounded" alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-7.jpg">
                                                </div>
                                                <div class="ml-8 pl-1">John Travolta</div>
                                            </a>
                                            <a href="javascript:;" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                                <div class="w-6 h-6 absolute image-fit mr-3">
                                                    <img class="rounded" alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-10.jpg">
                                                </div>
                                                <div class="ml-8 pl-1">Edward Norton</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label for="post-form-2" class="form-label">Post Date</label>
                                <input class="datepicker form-control" id="post-form-2" data-single-mode="true">
                            </div>
                            <div class="mt-3">
                                <label for="post-form-3" class="form-label">Categories</label>
                                <select data-placeholder="Select categories" class="tom-select w-full" id="post-form-3" multiple>
                                    <option value="1" selected>Images</option>
                                    <option value="2" selected>Documents</option>
                                    <option value="3" selected>Video</option>
                                </select>
                            </div>
                            <div class="mt-3">
                                <label for="post-form-4" class="form-label">Tags</label>
                                <select data-placeholder="Select a tag" class="tom-select w-full" id="post-form-4" multiple>
                                    <option value="1" selected>User-Guide</option>
                                    <option value="2">Process-flow</option>
                                    <option value="3" selected>Demo</option>
                                    <option value="4">click-up</option>
                                    <option value="5">slack</option>
                                </select>
                            </div>
                            <div class="form-check flex-col items-start mt-3">
                                <label for="post-form-5" class="form-check-label ml-0 mb-2">Published</label>
                                <input id="post-form-5" class="form-check-switch" type="checkbox">
                            </div>
                            <div class="form-check flex-col items-start mt-3">
                                <label for="post-form-6" class="form-check-label ml-0 mb-2">Show Author Name</label>
                                <input id="post-form-6" class="form-check-switch" type="checkbox">
                            </div>
                        </div>
                    </div>
                    <!-- END: Post Info -->
                </div>
            </div>

<?php include 'dist/include/footer.php' ?>