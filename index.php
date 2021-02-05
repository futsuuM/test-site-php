    
    <?php
        $title = "index";
        //Include whats in the header.php file in just 1 line 
        include 'includes/header.php';
    ?>
    <!-- Basic HTML -->
    <h1>
        <?php echo $title ?>
    </h1>
    <br/>
    <?php
        //Printing to HMTL using Echo 
        echo "Hello PHP";
        echo "<br/>";
        echo "Second line <br/>";
    ?>
    <?php
        // Declare variable 
        $name = 'Johnny Bohoquez';
        $age = '21';
        // echo printing variable
        echo $name;
        //Using html in echo for printing name
        echo '<h1> My name is: '.$name.'</h1>';
        echo '<h1> My age is: '.$age.'</h1>';
        // double col
        echo "<h1>My name is: $name </h1>";
    ?>
    <button type="button" class="btn btn-dark">CLICK ME</button>
    <?php 
        //require footer of the page
        require 'includes/footer.php';
    ?>

    <!-- Include will render regardless the file is found or not
    Require will crash the page if the file is not found -->