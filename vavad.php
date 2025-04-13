<!doctype html>
<html lang="en">

<head><title> string file</title></head>
</head>
<body>
    <?php
        
        $sentence = "the main body of a book";
         echo strtolower($sentence);
        echo strtoupper($sentence);
        $sentence[5]="b";

        $sentence = str_replace("book", "college", $sentence);
        $length = strlen($sentence);
        echo "Student Code Output: " . $sentence . "\n";
        echo "Length: " . $length;
        ?>
        </html>
</body>