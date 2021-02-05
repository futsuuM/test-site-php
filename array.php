    <?php
        $title = "arrays";
        //Include whats in the header.php file in just 1 line 
        include 'includes/header.php';
    ?>
    <h1><?php echo $title ?></h1>
    <?php 
        //Variable 
        $num = 3;

        //an array
        //only one datatype 
        $numbers = array(1, 2, 3 , 4, 5, 6, 7898, 8, 9, 10);
        //You can access the value in the array position
        echo $numbers[5];

        echo "<p>$numbers[9]</p>";
        $size = count($numbers);
        echo "<p>Array numbers is size: $size</p>";

        //print everything in the array
        for($count = 0; $count < $size; $count++){
            echo "<p>the number is $numbers[$count] </p>";
        }
    ?>
    
</body>
</html>