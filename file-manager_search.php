<?php include 'dist/include/header.php' ?>

<?php

if ($_GET['filename'] != null) {
    $filename_get = $_GET['filename'];
}

?>
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        <div class="top-bar">
            <!-- BEGIN: Breadcrumb -->
            <div class="-intro-x breadcrumb mr-auto hidden sm:flex"><a href="">Application</a> <i
                        data-feather="chevron-right" class="breadcrumb__icon"></i> <a href=""
                                                                                      class="breadcrumb--active">Documents</a>
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
        <div class="grid grid-cols-12 gap-6 mt-8">
            <div class="col-span-12 lg:col-span-3 xxl:col-span-2">
                <h2 id="bl" class="intro-y text-xl font-medium mr-auto mt-2">
                    File Manager
                </h2>
                <!-- BEGIN: File Manager Menu -->
                <div class="intro-y box p-5 mt-6">
                    <div class="mt-1">
                        <a href="" class="flex items-center px-3 py-2 rounded-md bg-theme-1 text-white font-medium"> <i
                                    class="w-4 h-4 mr-2" data-feather="image"></i> Images </a>
                        <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md"> <i class="w-4 h-4 mr-2"
                                                                                           data-feather="video"></i>
                            Videos </a>
                        <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md"> <i class="w-4 h-4 mr-2"
                                                                                           data-feather="file"></i>
                            Documents </a>

                        <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md"> <i class="w-4 h-4 mr-2"
                                                                                           data-feather="trash"></i>
                            Trash </a>
                    </div>
                    <div class="border-t border-gray-200 dark:border-dark-5 mt-4 pt-4">
                        <a href="" class="flex items-center px-3 py-2 rounded-md">
                            <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div>
                            Custom Work
                        </a>
                        <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                            <div class="w-2 h-2 bg-theme-9 rounded-full mr-3"></div>
                            Important Meetings
                        </a>
                        <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                            <div class="w-2 h-2 bg-theme-12 rounded-full mr-3"></div>
                            Work
                        </a>
                        <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                            <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div>
                            Design
                        </a>
                        <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                            <div class="w-2 h-2 bg-theme-6 rounded-full mr-3"></div>
                            Next Week
                        </a>
                        <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md"> <i class="w-4 h-4 mr-2"
                                                                                           data-feather="plus"></i> Add
                            New Label </a>
                    </div>
                </div>
                <!-- END: File Manager Menu -->
            </div>
            <div class="col-span-12 lg:col-span-9 xxl:col-span-10">
                <!-- BEGIN: File Manager Filter -->
                <div class="intro-y flex flex-col-reverse sm:flex-row items-center">
                    <div class="w-full sm:w-auto relative mr-auto mt-3 sm:mt-0">
                        <i class="w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0 z-10 text-gray-700 dark:text-gray-300" data-feather="search"></i>
                        <input type="text" class="form-control w-full sm:w-64 box px-10 text-gray-700 dark:text-gray-300 placeholder-theme-13" placeholder="Search files">
                        <div class="inbox-filter dropdown absolute inset-y-0 mr-3 right-0 flex items-center" data-placement="bottom-start">
                            <i class="dropdown-toggle w-4 h-4 cursor-pointer text-gray-700 dark:text-gray-300" role="button" aria-expanded="false" data-feather="chevron-down"></i>
                            <div class="inbox-filter__dropdown-menu dropdown-menu pt-2">
                                <div class="dropdown-menu__content box p-5">


                                    <form class="grid grid-cols-12 gap-4 gap-y-3" action="file-manager_search.php" method="get">
                                        <div class="col-span-6">
                                            <label for="input-filter-1" class="form-label text-xs">File Name</label>
                                            <input id="filename" name="filename" type="text" class="form-control flex-1" placeholder="Type the file name">
                                        </div>
                                        <div class="col-span-6">
                                            <label for="input-filter-2" class="form-label text-xs">Category</label>
                                            <select id="input-filter-4" class="form-select flex-1">
                                                <option>Videos</option>
                                                <option>Documents</option>
                                                <option>Images</option>
                                            </select>
                                        </div>
                                        <div class="col-span-6">
                                            <label for="input-filter-3" class="form-label text-xs">Created By</label>
                                            <input id="input-filter-3" type="text" class="form-control flex-1" placeholder="Username">
                                        </div>
                                        <div class="col-span-6">
                                            <label for="input-filter-4" class="form-label text-xs">Tags</label>
                                            <select id="input-filter-4" class="form-select flex-1">
                                                <option>Demo</option>
                                                <option>Clickup</option>
                                                <option>Slack</option>
                                                <option>User Guide</option>
                                            </select>
                                        </div>



                                        <div class="col-span-12 flex items-center mt-3">
                                            <button class="btn btn-secondary w-32 ml-auto">Create Filter</button>
                                            <button type="submit" class="btn btn-primary w-32 ml-2">Search</button>
                                        </div>


                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:w-auto flex">
                        <a href="new-doc.php" class="btn btn-primary shadow-md mr-2">Upload New Files</a>
                        <div class="dropdown">
                            <button class="dropdown-toggle btn px-2 box text-gray-700 dark:text-gray-300" aria-expanded="false">
                                <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i> </span>
                            </button>
                            <div class="dropdown-menu w-40">
                                <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Share Files </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="settings" class="w-4 h-4 mr-2"></i> Settings </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: File Manager Filter -->

                <div class="mt-10" id="no_results"></div>

                <!-- BEGIN: Directory & Files -->
                <div class="intro-y grid grid-cols-12 gap-3 sm:gap-6 mt-5">



                    <div id="2" class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                        <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                            <div class="absolute left-0 top-0 mt-3 ml-3">
                                <input class="form-check-input border border-gray-500" type="checkbox">
                            </div>
                            <a href="" class="w-3/5 file__icon file__icon--directory mx-auto"></a> <a href=""
                                                                                                      class="block font-medium mt-4 text-center truncate">Dota
                                2</a>
                            <div class="text-gray-600 text-xs text-center mt-0.5">112 GB</div>
                            <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i
                                            data-feather="more-vertical" class="w-5 h-5 text-gray-600"></i> </a>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href=""
                                           class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                            <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                        <a id="b"
                                           class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                            <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="3" class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                        <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                            <div class="absolute left-0 top-0 mt-3 ml-3">
                                <input class="form-check-input border border-gray-500" type="checkbox">
                            </div>
                            <a href="" class="w-3/5 file__icon file__icon--file mx-auto">
                                <div class="file__icon__file-name">TXT</div>
                            </a>
                            <a href="" class="block font-medium mt-4 text-center truncate">Resources.txt</a>
                            <div class="text-gray-600 text-xs text-center mt-0.5">2.2 MB</div>
                            <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i
                                            data-feather="more-vertical" class="w-5 h-5 text-gray-600"></i> </a>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href=""
                                           class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                            <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                        <a id="c"
                                           class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                            <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="4" class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                        <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                            <div class="absolute left-0 top-0 mt-3 ml-3">
                                <input class="form-check-input border border-gray-500" type="checkbox">
                            </div>
                            <a href="" class="w-3/5 file__icon file__icon--image mx-auto">
                                <div class="file__icon--image__preview image-fit">
                                    <img alt="" src="dist/images/preview-11.jpg">
                                </div>
                            </a>
                            <a href="" class="block font-medium mt-4 text-center truncate">preview-11.jpg</a>
                            <div class="text-gray-600 text-xs text-center mt-0.5">1.2 MB</div>
                            <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i
                                            data-feather="more-vertical" class="w-5 h-5 text-gray-600"></i> </a>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href=""
                                           class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                            <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                        <a id="d"
                                           class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                            <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="5" class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                        <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                            <div class="absolute left-0 top-0 mt-3 ml-3">
                                <input class="form-check-input border border-gray-500" type="checkbox">
                            </div>
                            <a href="" class="w-3/5 file__icon file__icon--image mx-auto">
                                <div class="file__icon--image__preview image-fit">
                                    <img alt="" src="dist/images/preview-9.jpg">
                                </div>
                            </a>
                            <a href="" class="block font-medium mt-4 text-center truncate">preview-9.jpg</a>
                            <div class="text-gray-600 text-xs text-center mt-0.5">1.4 MB</div>
                            <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i
                                            data-feather="more-vertical" class="w-5 h-5 text-gray-600"></i> </a>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href=""
                                           class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                            <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                        <a id="e"
                                           class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                            <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="6" class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                        <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                            <div class="absolute left-0 top-0 mt-3 ml-3">
                                <input class="form-check-input border border-gray-500" type="checkbox">
                            </div>
                            <a href="" class="w-3/5 file__icon file__icon--directory mx-auto"></a> <a href=""
                                                                                                      class="block font-medium mt-4 text-center truncate">Repository</a>
                            <div class="text-gray-600 text-xs text-center mt-0.5">20 KB</div>
                            <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i
                                            data-feather="more-vertical" class="w-5 h-5 text-gray-600"></i> </a>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href=""
                                           class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                            <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                        <a id="f"
                                           class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                            <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="7" class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                        <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                            <div class="absolute left-0 top-0 mt-3 ml-3">
                                <input class="form-check-input border border-gray-500" type="checkbox">
                            </div>
                            <a href="" class="w-3/5 file__icon file__icon--file mx-auto">
                                <div class="file__icon__file-name">MP4</div>
                            </a>
                            <a href="" class="block font-medium mt-4 text-center truncate">Celine Dion - Ashes.mp4</a>
                            <div class="text-gray-600 text-xs text-center mt-0.5">20 MB</div>
                            <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i
                                            data-feather="more-vertical" class="w-5 h-5 text-gray-600"></i> </a>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href=""
                                           class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                            <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                        <a id="g"
                                           class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                            <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="8" class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                        <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                            <div class="absolute left-0 top-0 mt-3 ml-3">
                                <input class="form-check-input border border-gray-500" type="checkbox">
                            </div>
                            <a href="" class="w-3/5 file__icon file__icon--empty-directory mx-auto"></a> <a href=""
                                                                                                            class="block font-medium mt-4 text-center truncate">Documentation</a>
                            <div class="text-gray-600 text-xs text-center mt-0.5">4 MB</div>
                            <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i
                                            data-feather="more-vertical" class="w-5 h-5 text-gray-600"></i> </a>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href=""
                                           class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                            <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                        <a id="h"
                                           class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                            <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="9" class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                        <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                            <div class="absolute left-0 top-0 mt-3 ml-3">
                                <input class="form-check-input border border-gray-500" type="checkbox">
                            </div>
                            <a href="" class="w-3/5 file__icon file__icon--file mx-auto">
                                <div class="file__icon__file-name">MP4</div>
                            </a>
                            <a href="" class="block font-medium mt-4 text-center truncate">Celine Dion - Ashes.mp4</a>
                            <div class="text-gray-600 text-xs text-center mt-0.5">20 MB</div>
                            <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i
                                            data-feather="more-vertical" class="w-5 h-5 text-gray-600"></i> </a>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href=""
                                           class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                            <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                        <a id="i"
                                           class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                            <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="10" class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                        <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                            <div class="absolute left-0 top-0 mt-3 ml-3">
                                <input class="form-check-input border border-gray-500" type="checkbox">
                            </div>
                            <a href="" class="w-3/5 file__icon file__icon--image mx-auto">
                                <div class="file__icon--image__preview image-fit">
                                    <img alt="" src="dist/images/preview-10.jpg">
                                </div>
                            </a>
                            <a href="" class="block font-medium mt-4 text-center truncate">preview-10.jpg</a>
                            <div class="text-gray-600 text-xs text-center mt-0.5">1 MB</div>
                            <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i
                                            data-feather="more-vertical" class="w-5 h-5 text-gray-600"></i> </a>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href=""
                                           class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                            <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                        <a id="j"
                                           class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                            <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="11" class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                        <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                            <div class="absolute left-0 top-0 mt-3 ml-3">
                                <input class="form-check-input border border-gray-500" type="checkbox">
                            </div>
                            <a href="" class="w-3/5 file__icon file__icon--directory mx-auto"></a> <a href=""
                                                                                                      class="block font-medium mt-4 text-center truncate">Dota
                                2</a>
                            <div class="text-gray-600 text-xs text-center mt-0.5">112 GB</div>
                            <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i
                                            data-feather="more-vertical" class="w-5 h-5 text-gray-600"></i> </a>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href=""
                                           class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                            <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                        <a id="k"
                                           class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                            <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END: Directory & Files -->
                <!-- BEGIN: Pagination -->
                <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-6">
                    <ul class="pagination">
                        <li>
                            <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-left"></i>
                            </a>
                        </li>
                        <li>
                            <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-left"></i>
                            </a>
                        </li>
                        <li><a class="pagination__link" href="">...</a></li>
                        <li><a class="pagination__link" href="">1</a></li>
                        <li><a class="pagination__link pagination__link--active" href="">2</a></li>
                        <li><a class="pagination__link" href="">3</a></li>
                        <li><a class="pagination__link" href="">...</a></li>
                        <li>
                            <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-right"></i>
                            </a>
                        </li>
                        <li>
                            <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-right"></i>
                            </a>
                        </li>
                    </ul>
                    <select class="w-20 form-select box mt-3 sm:mt-0">
                        <option>10</option>
                        <option>25</option>
                        <option>35</option>
                        <option>50</option>
                    </select>
                </div>
                <!-- END: Pagination -->
            </div>
        </div>
    </div>
    <!-- END: Content -->

<?php include 'dist/include/footer.php' ?>