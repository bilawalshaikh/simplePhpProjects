<!DOCTYPE html>
<html>
<head>
    <title>Button Value Example</title>
</head>
<body>
    <center>
        <br><br>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $buttonValues = isset($_POST['buttonValue']) ? $_POST['buttonValue'] : '';
            echo ($buttonValues);

            if (!empty($buttonValues)) {
                $textareaValue = "You clicked the button with value: " . htmlspecialchars($buttonValues);
            } else {
                $textareaValue = "No button was clicked.";
            }
            echo '<textarea rows="4" cols="50" readonly>' . $textareaValue . '</textarea>';
        }
        ?>
    </center>
</body>
</html>
