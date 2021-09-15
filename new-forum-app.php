<?php

include 'dist/include/db.php';

if (isset($_POST["staff1"])) {

    date_default_timezone_set('Asia/Colombo');

    $string = date("Y-m-d");
    $date = DateTime::createFromFormat("Y-m-d", $string);

    $date = date_format($date, 'Y-m-d H:i:s');

    $user_ID_selected = $_POST['staff1'];
    $ticket_id = $_POST['ticket_id'];
    $logged_user_id = $_POST['logged_user_id'];

    $query_ticket_notify_staff = "INSERT INTO notify_staff(task_id, user_id_selected) VALUES('$ticket_id', '$user_ID_selected')";
    if (!empty($con)) {
        $create_query_ticket_notify = mysqli_query($con, $query_ticket_notify_staff);
    }

    $query_select = "SELECT task_id FROM assign WHERE task_id = '$ticket_id'";

    if (!empty($con)) {
        $run_query_select = mysqli_query($con, $query_select);
    }

    $row1 = mysqli_fetch_array($run_query_select, MYSQLI_ASSOC);

    $count = mysqli_num_rows($run_query_select);

    if ($count == 1) {

        $query = "UPDATE assign SET userID='$user_ID_selected', assigned_to_user_date='$date', assigned_by='$logged_user_id' where task_id='$ticket_id'";
        $query_log_assign = "INSERT INTO log(log_userID, log_date_time, log_action) VALUES('$logged_user_id', '$date', 'User ID: $logged_user_id re-assigned the previously assigned ticket with ID: $ticket_id for User ID: $user_ID_selected as person No. 1')";

        if ($user_ID_selected != '') {

            $query_status = "UPDATE task SET status='Assigned' where task_id='$ticket_id'";

        } else {

            $query_status = "UPDATE task SET status='Approved' where task_id='$ticket_id'";

        }

    } else {

        $query = "INSERT INTO assign(userID,task_id,assigned_to_user_date, assigned_by) VALUES('$user_ID_selected', '$ticket_id','$date', '$logged_user_id')";
        $query_log_assign = "INSERT INTO log(log_userID, log_date_time, log_action) VALUES('$logged_user_id', '$date', 'User ID: $logged_user_id assigned the ticket ID: $ticket_id for User ID : $user_ID_selected as person No. 1')";

        if ($user_ID_selected != '') {

            $query_status = "UPDATE task SET status='Assigned' where task_id='$ticket_id'";

        } else {

            $query_status = "UPDATE task SET status='Approved' where task_id='$ticket_id'";

        }

    }

    $create_query = mysqli_query($con, $query);
    $create_query_status = mysqli_query($con, $query_status);

    $create_query_log_assign = mysqli_query($con, $query_log_assign);

}

?>
