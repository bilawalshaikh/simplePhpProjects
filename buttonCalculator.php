<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $buttonValues = isset($_POST['buttonValues']) ? $_POST['buttonValues'] : "";

    if (isset($_POST['buttonValue'])) {
        $buttonValue = $_POST['buttonValue'];

        // Check if the clicked button is an operator (+, -, *, /)
        if (in_array($buttonValue, ['+', '-', '*', '/'])) {
            $buttonValues .= " $buttonValue "; // Add a space around operators
        } elseif ($buttonValue === 'Clear') {
            $buttonValues = ""; // Clear the textarea
        } elseif ($buttonValue === '=') {
            // Calculate the result when equals (=) is clicked
            // You can use eval(), but be cautious with user input
            $expression = str_replace(' ', '', $buttonValues); // Remove spaces
            $expression = preg_replace('#[^0-9+\-*/.]#', '', $expression);// Filter allowed characters

            $result = eval("return $expression;"); // Perform the calculation

            if ($result === false) {
                $buttonValues = "Error";
            } else {
                $buttonValues = $result;
            }
        } else {
            $buttonValues .= $buttonValue; // Add the clicked button value to the expression
        }
    }

    date_default_timezone_set("Asia/Karachi");

    // Get the current time with hours, seconds, and minutes
    $currentTime = date("h:i:s");
    
    // Echo the current time
    echo "The current time in Karachi is: $currentTime";
    
}
?>

<center>
    <br><br>
    <form method="post" class="main">
        <textarea name="buttonValues" rows="4" cols="50"><?php echo $buttonValues; ?></textarea><br><br>
        <input type="submit" name="buttonValue" value="1">
        <input type="submit" name="buttonValue" value="2">
        <input type="submit" name="buttonValue" value="3">
        <input type="submit" name="buttonValue" value="+"><br><br>
        <input type="submit" name="buttonValue" value="4">
        <input type="submit" name="buttonValue" value="5">
        <input type="submit" name="buttonValue" value="6">
        <input type="submit" name="buttonValue" value="-"><br><br>
        <input type="submit" name="buttonValue" value="7">
        <input type="submit" name="buttonValue" value="8">
        <input type="submit" name="buttonValue" value="9">
        <input type="submit" name="buttonValue" value="/"><br><br>
        <input type="submit" name="buttonValue" value="0">
        <input type="submit" name="buttonValue" value="Clear">
        <input type="submit" name="buttonValue" value="*">
        <br><br>
        <input style="width:100px;" type="submit" name="buttonValue" value="=">
    </form>
</center>
