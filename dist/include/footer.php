</div>

<!-- BEGIN: JS Assets-->

<script src="dist/js/jquery-3.5.1.min.js"></script>
<script src="dist/js/jquery-ui.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="dist/js/bootstrap/bootstrap.js"></script>

<script src="dist/js/app.js"></script>

<script src="dist/js/ui-preloader.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- END: JS Assets-->

<script>

    $('.globalSearchResultNoFoundFeedback').hide()
    $(".globalInputSearch").keyup(function() {

        // Retrieve the input field text and reset the count to zero
        var filter = $(this).val(),
            count = 0;

        if (count == 0) {
            $('.globalSearchResultNoFoundFeedback').hide()
            $('.no-small-mute').hide()
            $('.hide-title').hide()
        }


        // Loop through the comment list
        $('.globalTargetList li').each(function() {
            // If the list item does not contain the text phrase fade it out

            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).hide(); // MY CHANGE
                if (count == 0) {
                    $('.globalSearchResultNoFoundFeedback').show()
                } else {
                    $('.globalSearchResultNoFoundFeedback').hide()
                }
                // Show the list item if the phrase matches and increase the count by 1
            } else {
                $(this).show(); // MY CHANGE
                count++;

            }

        });


    });

</script>


<script>

    $(document).ready(function () {

        const uiPreloader = UiPreloader.init();

        $('#submitclose').click(function (e) {

            e.preventDefault();

            var forumid = '<?php echo $f_id_get; ?>';

            toastr.options = {
                "newestOnTop": false,
            };

            $.ajax({

                url: "forum-close-app.php",
                method: "POST",
                data: {
                    forumid: forumid
                },
                success: function (data) {

                    if (data.toString() == 1) {

                        uiPreloader.destroy();

                        Swal.fire({
                            title: "Are you sure ?",
                            html: "No one can reply to the forum topic after it's closed.",
                            icon: 'warning',

                            confirmButtonText: "Yes, Close forum !",
                            confirmButtonColor: '#d33',
                            showCancelButton: true,
                            cancelButtonColor: '#1c3faa',

                        }).then((result) => {

                            if (result.isConfirmed) {
                                Swal.fire(
                                    'Closed !',
                                    'The forum has been closed.',
                                    'success'
                                )

                                window.location = "forum.php";

                            }

                        });
                    }

                    if (data.toString() == 0) {

                        uiPreloader.destroy();
                        swal.fire("Something went wrong !", "Failed closing the topic", "error");

                    }

                }

            });

        });

    });

</script>

<script>

    $(document).ready(function () {

        const uiPreloader = UiPreloader.init();

        $('#submitTopic').click(function (e) {

            e.preventDefault();

            var title = $('#title').val();
            var content = $('#content').val();
            var author = $('#author').val();
            var created_date = '<?php if (!empty($date)) {
                echo $date;
            } ?>';
            var main_category = $('#post-form-3').val();
            var sub_category = $('#post-form-4').val();

            const isEmpty = str => !str.trim().length;

            toastr.options = {
                "newestOnTop": false,
            };

            if (isEmpty(title)) {
                uiPreloader.destroy();
                toastr.error('Please enter a title.');
                $('#title').focus();

                return false;
            }

            if (isEmpty(content)) {
                uiPreloader.destroy();
                toastr.error('Please provide the contents.');
                $('#content').focus();

                return false;
            }

            if (isEmpty(main_category)) {
                uiPreloader.destroy();
                toastr.error('Please select a main category.');
                $('#main_category').focus();

                return false;
            }

            if (isEmpty(sub_category)) {
                uiPreloader.destroy();
                toastr.error('Please select a sub category.');
                $('#sub_category').focus();

                return false;
            }

            $.ajax({

                url: "new-forum-app.php",
                method: "POST",
                data: {
                    title: title,
                    content: content,
                    author: author,
                    created_date: created_date,
                    main_category: main_category,
                    sub_category: sub_category
                },

                success: function (data) {

                    if (data.toString() == 1) {

                        uiPreloader.destroy();

                        Swal.fire({
                            title: "Published",
                            html: "Your Forum Topic has been Published Successfully.",
                            icon: 'success',
                            showCancelButton: false,
                            confirmButtonText: "OK",
                            confirmButtonColor: '#1c3faa',
                            timer: 5000
                        }).then(function () {
                            window.location = "forum.php";
                        });
                    }

                    if (data.toString() == 0) {

                        uiPreloader.destroy();
                        swal.fire("Something went wrong !", "Failed creating the topic", "error");

                    }

                }

            });

        });

    });

</script>
<script>

    $(document).ready(function () {

        const uiPreloader = UiPreloader.init();

        $('#submitDocument').click(function (e) {

            e.preventDefault();

            var title = $('#title').val();
            var content = $('#content').val();
            var caption = $('#post-form-7').val();
            var fileupload = $('#fileupload').val();
            var author = $('#author').val();
            var created_date = '<?php if (!empty($date)) { echo $date; } ?>';
            var category = $('#post-form-3').val();
            var tags = $('#post-form-4').val();

            const isEmpty = str => !str.trim().length;

            toastr.options = {
                "newestOnTop": false,
            };

            if (isEmpty(title)) {
                uiPreloader.destroy();
                toastr.error('Please enter a title.');
                $('#title').focus();

                return false;
            }

            if (isEmpty(content)) {
                uiPreloader.destroy();
                toastr.error('Please provide the content.');
                $('#content').focus();

                return false;
            }

            if (isEmpty(caption)) {
                uiPreloader.destroy();
                toastr.error('Please provide a caption.');
                $('#caption').focus();

                return false;
            }
            if (isEmpty(category)) {
                uiPreloader.destroy();
                toastr.error('Please upload a file.');
                $('#fileupload').focus();

                return false;
            }

            if (isEmpty(category)) {
                uiPreloader.destroy();
                toastr.error('Please select a category.');
                $('#post-form-3').focus();

                return false;
            }


            $.ajax({

                url: "new-document-app.php",
                method: "POST",
                data: {
                    title : title,
                    content: content,
                    caption: caption,
                    author: author,
                    created_date: created_date,
                    category: category,
                    tags: tags
                },

                success: function (data) {

                    if (data.toString() == 1) {

                        uiPreloader.destroy();

                        Swal.fire({
                            title: "Published",
                            html: "Your Document has been uploaded Successfully.",
                            icon: 'success',
                            showCancelButton: false,
                            confirmButtonText: "OK",
                            confirmButtonColor: '#1c3faa',
                            timer: 5000
                        }).then(function() {
                            window.location = "file-manager.php";
                        });
                    }

                    if (data.toString() == 0) {

                        uiPreloader.destroy();
                        swal.fire("Something went wrong !", "Failed uploading the document", "error");

                    }

                }

            });

        });

    });

</script>

<script>

    $("#a").click(function(event){
        jQuery.fx.off = true;
        if (confirm('Are you sure you want to delete this file ?')) {
            $("#1").css("display", "none");
            document.getElementById("bl").click();
        }
    });

    $("#b").click(function(event){
        jQuery.fx.off = true;
        if (confirm('Are you sure you want to delete this file ?')) {
            $("#2").css("display", "none");
            document.getElementById("bl").click();
        }
    });

    $("#c").click(function(event){
        jQuery.fx.off = true;
        if (confirm('Are you sure you want to delete this file ?')) {
            $("#3").css("display", "none");
            document.getElementById("bl").click();
        }
    });

    $("#d").click(function(event){
        jQuery.fx.off = true;
        if (confirm('Are you sure you want to delete this file ?')) {
            $("#4").css("display", "none");
            document.getElementById("bl").click();
        }
    });

    $("#e").click(function(event){
        jQuery.fx.off = true;
        if (confirm('Are you sure you want to delete this file ?')) {
            $("#5").css("display", "none");
            document.getElementById("bl").click();
        }
    });

    $("#f").click(function(event){
        jQuery.fx.off = true;
        if (confirm('Are you sure you want to delete this file ?')) {
            $("#6").css("display", "none");
            document.getElementById("bl").click();
        }
    });

    $("#g").click(function(event){
        jQuery.fx.off = true;
        if (confirm('Are you sure you want to delete this file ?')) {
            $("#7").css("display", "none");
            document.getElementById("bl").click();
        }
    });

    $("#h").click(function(event){
        jQuery.fx.off = true;
        if (confirm('Are you sure you want to delete this file ?')) {
            $("#8").css("display", "none");
            document.getElementById("bl").click();
        }
    });

    $("#i").click(function(event){
        jQuery.fx.off = true;
        if (confirm('Are you sure you want to delete this file ?')) {
            $("#9").css("display", "none");
            document.getElementById("bl").click();
        }
    });

    $("#j").click(function(event){
        jQuery.fx.off = true;
        if (confirm('Are you sure you want to delete this file ?')) {
            $("#10").css("display", "none");
            document.getElementById("bl").click();
        }
    });

    $("#k").click(function(event){
        jQuery.fx.off = true;
        if (confirm('Are you sure you want to delete this file ?')) {
            $("#11").css("display", "none");
            document.getElementById("bl").click();
        }
    });

</script>

</body>
</html>