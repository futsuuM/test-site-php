<?php
    $title = "For loop";
        //Include whats in the header.php file in just 1 line 
        include 'includes/header.php';
    ?>
<body>
    <h1><?php echo $title ?></h1>

    <?php 
        //for loops
        for($count=1; $count<10; $count++){
            echo $count;
            echo '<p>hello world<p>';
        }
    ?>
    
</body>
</html>