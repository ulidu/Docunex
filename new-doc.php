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

                <form class="validate-form" name="new_document" id="new_document" method="post"  action="">
                <!-- END: Top Bar -->
                <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                    <h2 class="text-xl font-medium mr-auto">
                        Add New Document
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
                                    <a href="file-manager.php"
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
                                    <button type="submit" id="submitDocument" name="submitDocument"
                                            class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                        <i data-feather="save" class="w-4 h-4 mr-2"></i> Publish Document
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
                    <!-- BEGIN: Post Content -->
                    <div class="intro-y col-span-12 lg:col-span-8">
                        <input type="text" id="title" name="title" class="intro-y form-control py-3 px-4 box pr-10 placeholder-theme-13"
                               placeholder="Enter a Title">
                        <div class="post intro-y overflow-hidden box mt-5">
                            <div class="post__tabs nav nav-tabs flex-col sm:flex-row bg-gray-300 dark:bg-dark-2 text-gray-600" role="tablist">
                                <a title="Fill in the article content" data-toggle="tab" data-target="#content" href="javascript:;" class="tooltip w-full sm:w-40 py-4 text-center flex justify-center items-center active" id="content-tab" role="tab" aria-controls="content" aria-selected="true">
                                    <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Content </a>
                           <!--     <a title="Adjust the meta title" data-toggle="tab" data-target="#meta-title" href="javascript:;" class="tooltip w-full sm:w-40 py-4 text-center flex justify-center items-center" id="meta-title-tab" role="tab" aria-selected="false"> <i data-feather="code" class="w-4 h-4 mr-2"></i> Meta Title </a>
                                <a title="Use search keywords" data-toggle="tab" data-target="#keywords" href="javascript:;" class="tooltip w-full sm:w-40 py-4 text-center flex justify-center items-center" id="keywords-tab" role="tab" aria-selected="false"> <i data-feather="align-left" class="w-4 h-4 mr-2"></i> Keywords </a> -->
                            </div>
                            <div class="post__content tab-content">
                                <div id="" class="tab-pane p-5 active" role="tabpanel" aria-labelledby="content-tab">
                                    <div class="border border-gray-200 dark:border-dark-5 rounded-md p-5">
                                        <div class="font-medium flex items-center border-b border-gray-200 dark:border-dark-5 pb-5">
                                            <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Text Content </div>
                                        <div class="mt-5">

                                            <textarea type="text" id="content" name="content" rows="6" cols="50" class="form-control" placeholder="Enter the Content"></textarea>

                                        </div>
                                    </div>
                                    <div class="border border-gray-200 dark:border-dark-5 rounded-md p-5 mt-5">
                                        <div class="font-medium flex items-center border-b border-gray-200 dark:border-dark-5 pb-5"> <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Caption & Documents </div>
                                        <div class="mt-5">
                                            <div>
                                                <label for="post-form-7" class="form-label">Caption</label>
                                                <input id="post-form-7" name="post-form-7" type="text" class="form-control" placeholder="Write caption">
                                            </div>
                                            <div class="mt-3">

                                               <!-- <form method="post" enctype="multipart/form-data">   -->

                                                <label class="form-label">Upload file</label>
                                                <div class="border-2 border-dashed dark:border-dark-5 rounded-md pt-4">
                                                    <div class="flex flex-wrap px-4">


                                                        <input id="fileupload" type="file" name="fileupload"/>
                                                        <button id="upload-button" onclick="saveFile()">Upload</button>


                                                        <script>
                                                            async function saveFile() {
                                                                let formData = new FormData();
                                                                formData.append("file", fileupload.files[0]);
                                                                await fetch('upload.php', {method: "POST", body: formData});
                                                                //alert('The file has been uploaded successfully');
                                                            }
                                                        </script>
                                                        <!-- <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                                              <img class="rounded-md" alt="" src="dist/images/preview-8.jpg">
                                                              <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 right-0 top-0 -mr-2 -mt-2"> <i data-feather="x" class="w-4 h-4"></i> </div>
                                                              </div>
                                                              <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                                                 <img class="rounded-md" alt="" src="dist/images/preview-9.jpg">
                                                                 <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 right-0 top-0 -mr-2 -mt-2"> <i data-feather="x" class="w-4 h-4"></i> </div>
                                                             </div>
                                                             <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                                                 <img class="rounded-md" alt="" src="dist/images/preview-4.jpg">
                                                                 <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 right-0 top-0 -mr-2 -mt-2"> <i data-feather="x" class="w-4 h-4"></i> </div>
                                                             </div>
                                                             <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                                                 <img class="rounded-md" alt="" src="dist/images/preview-9.jpg">
                                                                 <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 right-0 top-0 -mr-2 -mt-2"> <i data-feather="x" class="w-4 h-4"></i> </div>
                                                             </div> -->
                                                    </div>


                                                <!--    <div class="px-4 pb-4 flex items-center cursor-pointer relative">
                                                        <i data-feather="image" class="w-4 h-4 mr-2"></i>
                                                        <span class="text-theme-1 dark:text-theme-10 mr-1">Upload a file</span> or drag and drop
                                                        <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                                                    </div> -->





                                                </div>
                                        <!--        </form> -->
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
                                <label class="form-label">Uploaded By</label>
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
                                <label for="post-form-2" class="form-label">Post Date</label>
                                <input class="datepicker form-control" id="post-form-2" disabled data-single-mode="true">
                            </div>
                            <div class="mt-3">
                                <label for="post-form-3" class="form-label">Category</label>
                                <select data-placeholder="Select Category" class="tom-select w-full" name="post-form-3" id="post-form-3">
                                    <option value="Documents">Documents </option>
                                    <option value="Images">Images</option>
                                    <option value="Videos">Videos</option>
                                </select>
                            </div>
                            <div class="mt-3">
                                <label for="post-form-4" class="form-label">Tags</label>
                                <select data-placeholder="Select a tag" class="tom-select w-full" id="post-form-4" name="post-form-4" multiple>
                                    <option value="User-Guide" >User-Guide</option>
                                    <option value="Process-flow">Process-flow</option>
                                    <option value="Demo" >Demo</option>
                                    <option value="Click-up">Click-up</option>
                                    <option value="Slack">Slack</option>
                                </select>
                            </div>
                       <!--     <div class="form-check flex-col items-start mt-3">
                                <label for="post-form-5" class="form-check-label ml-0 mb-2">Published</label>
                                <input id="post-form-5" class="form-check-switch" type="checkbox">
                            </div>
                            <div class="form-check flex-col items-start mt-3">
                                <label for="post-form-6" class="form-check-label ml-0 mb-2">Show Author Name</label>
                                <input id="post-form-6" class="form-check-switch" type="checkbox">
                            </div>  -->
                        </div>
                    </div>
                    <!-- END: Post Info -->
                </div>

                </form>
            </div>

<?php include 'dist/include/footer.php' ?>