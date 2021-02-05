    <?php
        $title = "date and time manipulation";
        //Include whats in the header.php file in just 1 line 
        include 'includes/header.php';
    ?>
<body>
    <h1><?php echo $title ?></h1>
    <?php 
        $datenow = getdate();
        echo "Today's date: <br/>";
        echo $datenow['mday'] . '<br/>';
        echo $datenow['mon'] . '<br/>';
        echo $datenow['year'] . '<br/>';

        echo "Today's date: " . $datenow['mday'] . '/' . $datenow['mon'] . '/' . $datenow['year'] . '<br/>';

        echo time() . '<br/>';

        print date("m/d/y G.i:s<br/>", time()) . '<br/>';
        print "today is: ";
        print date ("j of F Y, /a//t g.i a", time());

    ?>
    
</body>
</html>