<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>
<body>
    <form action='action.php' method='post'>
        <input type='text' name="firstName" /><span>Ім'я</span><br />
        <input type='text' name="lastName"  /><span>Фамілія</span><br />
        <input type='text' name="address"  /><span>Адреса</span><br />
        <input type='text' name="email"  /><span>Електронна пошта</span><br />
        <input type='submit'>
    </form>
    <?php 
        // Функція що виводить список унікальних рядків у вхідному масиві
        function printUnice($array){   
            print implode(" ", array_unique($array));
        }

        printUnice(["asd", "asd", "ad"]);
    ?>
</body>
</html>