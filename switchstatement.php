<?php
    $title = "Switch statement";
        //Include whats in the header.php file in just 1 line 
        include 'includes/header.php';
    ?>
<body>
    <h1> <?php echo $title ?></h1>
    <?php 
        $grade = 'A';
        switch($grade){
            case 'A':
                echo '<h2 style="color: purple">You are a superstar</h2>';
                break;
            case 'B':
                echo '<h2 style="color: blue">you did good</h2>';
                break;
            default:
                echo '<h2 style="color: red">You have failed</h2?>';
                break;
        }
    ?>
    
</body>
</html>