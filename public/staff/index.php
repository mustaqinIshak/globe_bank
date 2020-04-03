<?php require_once("../../private/initialize.php"); ?>
<?php 
    $page_title= "Staff menu";
    $var = "takin";
    echo substr($var, 5, 10);
?>

<?php include(SHARED_PATH ."/staff_header.php"); ?>
    <div class="content">
        <div class="main_content">
            <ul>
                <li><a href="subjects/index.php">Subjects</a></li>
            </ul>
        </div>
    </div>
<?php include(SHARED_PATH . "/staff_footer.php"); ?>