<!DOCTYPE html>
<html>
<head>
    <title>Simple </title>
</head>
<body>
 
<h1>Simple </h1>
<form method="post">
        <input type="number" name="num1" required>
        <select name="operation" id="">
        <option value="" selected disabled>Please choose an operation</option>
               <option value="add">Addition</option>
               <option value="sub">Subtraction</option>
               <option value="mul">Multiplications</option>
               <option value="div">Division</option>
        </select>
        <input type="number" name="num2" required>
      <input type="submit" value="Calculate"><br>
</form>


    <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
       $num1=$_POST['num1'];
       $num2=$_POST['num2'];
    //    echo("num1={$num1} num2={$num2}<br>");
       $operation=$_POST['operation'];
       $result=0;
       
    //    echo "$operation";
    switch($operation){

        case "add":
            $result=$num1+$num2;
            break;
            
        case "sub":
            $result=$num1-$num2;
            break;
    
            case "mul":
                $result=$num1*$num2;
                break;

                case "div":
                    if($num2 !=0){
                    $result=$num1/$num2;
                    }else{
                        die( "division by zero is not allowed");
                    }     
                    break; 
             default:
                 echo"invalid operations";

        }

        echo "Results={$result}";
    }
  
    

?>
</body>
</html>
