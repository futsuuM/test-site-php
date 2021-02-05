<?php
    $title = "String manipulation";
        //Include whats in the header.php file in just 1 line 
        include 'includes/header.php';
    ?>
<body>
    <h1><?php echo $title ?></h1>
    <?php
    //concatenation of strings
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with rock";
        $name = "trevoir williams";
        echo $phrase1 . ", named johnnyfgh, " . $phrase2;
        echo '<br/>';
        echo '<hr/>';

    //String transformation
        echo 'Uppercase first letter: ' . ucfirst($name) . '<br/>';
        echo 'Uppercase first letter of everyword: ' . ucwords($name) . '<br/>';
        echo 'Upper case everrything: ' . strtoupper($name) . '<br/>';
        echo 'Lower case: '. strtolower("THIS IS DIO"). '<br/>';
        echo '<hr/>';
        echo 'Repeat string: '. str_repeat('a', 4). '<br/>';
        echo 'Repeat string: '. strtoupper(str_repeat('a', 4)). '<br/>';
        echo 'Get a substring: ' . substr($name, 5, 10). '<br/>';
        echo 'Get a position in string: ' . strpos($name,'a'). '<br/>';

        //Returns NULL
        // echo 'Get a position in string: ' . strpos($combine,'z'). '<br/>';
        echo 'find a character: ' . strchr($name, 'w'). '<br/>';
        echo 'find a character: ' . strchr($name, 'r'). '<br/>';
        echo 'find a character: ' . strchr($name, 'a'). '<br/>';

        echo 'Find lenght of string: ' . strlen($name). '<br/>';

        echo 'without trim: ' . "A" . " B C D " . "E" . '<br/>';
        echo 'Trim spaces in both sides: ' . "A" . trim(" B C D ") . "E" . '<br/>';
        echo 'trim spaces to the left: ' . "A" . ltrim(" B C D ") . "E" . '<br/>';
        echo 'trim spaces to the right: ' . "A" . rtrim(" B C D ") . "E" . '<br/>';

        echo 'Replaces string with another: ' . str_replace("stand", "sit", $phrase2) . '<br/>';
        
         ?>
</body>
</html>