<?php require_once("../../../private/initialize.php"); ?>
<?php 
    $page_title= "Subject";
    $subjects = [
        ['id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'About globe bank'],
        ['id' => '2', 'position' => '2', 'visible' => '1', 'menu_name' => 'Consumer'],
        ['id' => '3', 'position' => '3', 'visible' => '1', 'menu_name' => 'Small business'],
        ['id' => '4', 'position' => '4', 'visible' => '1', 'menu_name' => 'Commercial']
    ]
?>

<?php include(SHARED_PATH . "/staff_header.php"); ?>
    <div class="content">
        <div class="subjects listing">
            <div class="actions">
                <a href="<?php echo url_for("staff/subjects/new.php") ?>">create new subject</a>
            </div>
            <div class="list">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope='col'>ID</th>
                            <th scope='col'>POSITION</th>
                            <th scope='col'>VISIBLE</th>
                            <th scope='col'>NAME</th>
                            <th scope='col'>&nbsp;</th>
                            <th scope='col'>&nbsp;</th>
                            <th scope='col'>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($subjects as $subject) { ?>
                            <tr>
                                <td><?php echo $subject['id']; ?></td>
                                <td><?php echo $subject['position']; ?></td>
                                <td><?php echo $subject['visible'] == 1 ? 'true' : 'false' ?></td>
                                <td><?php echo $subject['menu_name']; ?></td>
                                <td><a class="action" href="<?php echo url_for("staff/subjects/show.php?id=" . $subject['id']);?>">View</a></td>
                                <td><a class="action" href="">Edit</a></td>
                                <td><a class="action" href="">Delete</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php include(SHARED_PATH . "/staff_footer.php"); ?>