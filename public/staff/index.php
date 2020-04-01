<?php require_once("../../private/initialize.php"); ?>
<?php 
    $page_title= "Staff menu";
    $var = "takin";
    echo substr($var, 5, 10);
?>

<?php include(SHARED_PATH ."/staff_header.php"); ?>
    <div class="content">
        <ul>
            <li><a href="index.php">home</a></li>
        </ul>
    </div>
<?php include(SHARED_PATH . "/staff_footer.php"); ?>