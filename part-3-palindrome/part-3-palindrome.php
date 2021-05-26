<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // echo $_GET["name"] . "Hello";
    function palindrome($str)
    { 
        if(is_string($str)){   
            if(strlen($str) == 1 || $str == " " || $str == ""){
                echo " \"$str \" ". " is a Palindrome";
            } else{
                $str2 = "";
                for($i = strlen($str) - 1 ; $i >= 0 ; $i--){
                    $str2 .= $str[$i];

                } // echo $str2 ." ".$str;
                 if($str2 === $str){
                echo " \"$str \" ". " is a Palindrome";
                } else {
                    echo " \"$str\" " . " is not a Palindrome";
                }
            }
         } else{
             echo "Please change the URL. Type after the \".php\" ?name=anything";
         }
    }

    palindrome($_GET["name"]); // call the function
    ?>



</body>

</html>