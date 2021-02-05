<<?php
$title = "functions";
        //Include whats in the header.php file in just 1 line 
        include 'includes/header.php';
    ?>
<body>
    <h1><?php echo $title ?></h1>
    <?php 
        //Defining a function
        function writeMessage(){
            echo "You are really a nice person <br/>";
        }

        //calling a function
        writeMessage();

        echo"<hr/>";

        writeMessage();

        //Define a function with parameters

        function addFunction($num1, $num2){
            $sum = $num1 + $num2;
            $num2 = $num2 + 1;
            echo "The sum of $num1 and $num2 is: $sum <br/>";
        }
        //Pass a Reference - Use ampersand in parameter
        function changeNum(&$num){ //& to modify the original value 
            $num= $num + 10;
            //$num+= 10;
        }
        function returnProduct($num1, $num2){
            $prod = $num1 * $num2;
            return $prod;
        }
        
        $num = 500;
        addFunction(2, 3);
        addFunction(10, $num);
        addFunction('10', '50');
        changeNum($num);
        echo $num . '<br/>';
        
        $return_value = returnProduct (10, 200);
        echo $return_value . '<br/>';
        
    ?>

</body>
</html>