<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form>
        <input type="text" name="num1" placeholder="Numar 1">
        
        <select name="operator">
            <option>+</option>
            <option>-</option>
            <option>**</option>
            <option>/</option> 
            <option>%</option>     
        </select>
        <input type="text" name="num2" placeholder="Numar 2">
        <br>
        <button type="submit" name="submit" value="submit">Calculeaza</button>
    </form>


<?php

if(isset($_GET['submit'])) {
    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    $operator = $_GET['operator'];
    switch ($operator) {
        case "+":
            echo "Rezultatul calculului dintre " . $result1 . " utilizând operatorul " . $operator . " " . $result2 . " este " . ($result1 + $result2);
        break;
        case "-":
            echo "Rezultatul calculului dintre " . $result1 . " utilizând operatorul " . $operator . " " . $result2 . " este " . ($result1 - $result2);
        break;
        case "**":
            echo "Rezultatul calculului dintre " . $result1 . " utilizând operatorul " . $operator . " " . $result2 . " este " . ($result1 ** $result2);
        break;
        case "/":
            if ($result2 == 0) {
				echo 'Eroare: împărțirea la zero nu se poate efectua în aritmetica elementară.';
			}
			else {
                echo "Rezultatul calculului dintre " . $result1 . " utilizând operatorul " . $operator . " " . $result2 . " este " . ($result1 / $result2);
			}
        break;
        case "%":
			if ($result2 == 0) {
				echo 'Eroare: împărțirea la zero nu se poate efectua în aritmetica elementară.';
			}
			else {
                echo "Rezultatul calculului dintre " . $result1 . " utilizând operatorul " . $operator . " " . $result2 . " este " . ($result1 % $result2);
			}	
    }

}
?>
</body>
</html>