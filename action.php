<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>
<body>
    <?php 
        if(strpos($_POST["email"], '@') == false) { 
            print 'wrong email input';
        } else {
            $link = mysqli_connect("localhost", "root", "", "database999");

            if($link === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }

            $sql = "INSERT INTO users (firstName, lastName, address, email) VALUES ('" . $_POST["firstName"] .  "','" . $_POST["lastName"] . "','" . $_POST["address"] . "','" . $_POST["email"] . "')";
            
            if(mysqli_query($link, $sql)) {
                print "Records added successfully.";
            } else{
                print "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
            
            mysqli_close($link);
        }
    
    ?>
</body>
</html>