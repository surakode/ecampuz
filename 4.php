<!DOCTYPE html>
<html>

<body>
    <?php
    for ($i = 1; $i <= 50; $i++) {

        if (fmod($i, 3)  == 0 && fmod($i, 5) == 0) {
            echo "FooBar" . "<br>"; 
        }
        else if(fmod($i, 3)  == 0) {
            echo "Foo" . "<br>"; 
        }
        else if(fmod($i, 5)  == 0) {
            echo "Bar" . "<br>"; 
        }
        
    }
    ?>

</body>

</html>