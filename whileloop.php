<?php
    $title = "While loop";
        //Include whats in the header.php file in just 1 line 
        include 'includes/header.php';
    ?>
<body>
    <h1><?php echo $title ?></h1>
    <?php
        $grade = 1;
        while($grade <= 10){
            echo '<p>i am less than 10 with while</p>';
            echo $grade;
            $grade++;
        }
        echo '<p>Exit loop</p>';
        //modification of the variable (not recommendable to do)
        $grade = 1;
        do{
            echo '<p>i am less than 10 with do while</p>';
            echo $grade;
            $grade++;
        }while($grade <= 10);
        echo '<p>Exit the loop</p>';
        
    ?>
    
</body>
</html>