<?php 
    require_once("../../private/initialize.php");
?>


<?php include(SHARED_PATH ."/staff_header.php"); ?>
    <div class="content">
        <div class="main_content">
            <ul>
                <li><a href="<?php echo url_for('staff/subjects/index.php') ?>">Subjects</a></li>
            </ul>
        </div>
    </div>
<?php include(SHARED_PATH . "/staff_footer.php"); ?>