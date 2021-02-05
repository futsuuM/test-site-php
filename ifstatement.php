<?php
  $title = "If statement";
        //Include whats in the header.php file in just 1 line 
        include 'includes/header.php';
    ?>
<body>
    <h1> <?php echo $title ?> </h1>
    <h3 style:"Color: red"></h3>
    <?php 
      // if statment that will carry out an action based on the value of the variable.
      
      echo '<h2>If statement</h2>';

      $grade = 50;
      // ==, >=, <=, <, >, !=, ===
      if( $grade >= 50 ){
          echo '<h3 style="Color: green">You have passed the test</h3>';
      }else{
          echo '<h3 style="Color: red">You have failed the test</h3>';
      }

      $grade = "A";
      if( $grade == "A"){
        echo '<h2 style="color: purple">You are a super star</h2>';
      }else if($grade == "B"){
        echo '<h2 style="color: blue">You did well</h2>';
      }else{
        echo '<h2 style="color: red">You have failed</h2>';
      }
      //If-else IF-else-then

      
    ?>
</body>
</html>