<?php
include 'admin/dbcon.php';
if (isset($_POST['delete_event'])) {

    $get_id = $_POST['get_id'];
    $id = $_POST['id'];
    mysqli_query($conn, "delete from event where event_id = '$id'") or
        die(mysqli_error());
    ?>
<?php
}
?>
