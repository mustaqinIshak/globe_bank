<?php
    if(!isset($page_title)) { 
        $page_title = "Staff Area";
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GBI - <?php echo $page_title;?></title>
</head>
<body>
    <header>
        <h1>Global Bank International</h1>
    </header>
    <navigation>
        <ul>
            <li><a href="<?php echo url_for('/staff/index.php'); ?>">Menu</a></li>
        </ul>
    </navigation>