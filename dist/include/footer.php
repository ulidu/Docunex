
</div>

<!-- BEGIN: JS Assets-->

<script src="dist/js/jquery-3.5.1.min.js"></script>
<script src="dist/js/jquery-ui.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="dist/js/bootstrap/bootstrap.js"></script>

<script src="dist/js/app.js"></script>

<script src="dist/js/ui-preloader.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- END: JS Assets-->

<script>

    $(document).ready(function () {

        const uiPreloader = UiPreloader.init();

        $('#submitTopic').click(function (e) {

            e.preventDefault();

            uiPreloader.render();

            var title = $('#title').val();
            var content = $('#content').val();
            var author = $('#author').val();
            var created_date = '<?php if (!empty($date)) { echo $date; } ?>';
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
                    title : title,
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
                        }).then(function() {
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

</body>
</html>