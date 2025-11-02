<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP switch Statement Explained</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 40px;
        }
        h1, h2 {
            color: #333;
        }
        .example {
            background-color: #f4f4f4;
            padding: 10px;
            border: 1px solid #ddd;
            font-family: Consolas, monospace;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <h1>PHP switch Statement Example</h1>

    <h2>1. Basic switch Statement</h2>
    <p>The <strong>switch</strong> statement is used to execute one out of many code blocks based on the value of a variable. It's a cleaner alternative to using multiple `if-else` statements when checking for specific values.</p>
    
    <?php
        $day = 3;

        // switch statement
        switch ($day) {
            case 1:
                $dayName = "Monday";
                break;
            case 2:
                $dayName = "Tuesday";
                break;
            case 3:
                $dayName = "Wednesday";
                break;
            case 4:
                $dayName = "Thursday";
                break;
            case 5:
                $dayName = "Friday";
                break;
            case 6:
                $dayName = "Saturday";
                break;
            case 7:
                $dayName = "Sunday";
                break;
            default:
                $dayName = "Invalid day";
        }

        echo "<div class='example'>\$day = $day;</div>";
        echo "<div class='example'>The day is: $dayName</div>";
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>The <code>switch</code> statement evaluates the variable <code>\$day</code> and matches it with each <code>case</code>.</li>
        <li>If a match is found (e.g., <code>3</code>), it executes that case and breaks out of the switch statement.</li>
        <li>If no match is found, the <code>default</code> block is executed.</li>
    </ul>

    <h2>2. switch Statement with Multiple Cases</h2>
    <p>Multiple cases can be grouped together if they should execute the same block of code.</p>
    
    <?php
        $grade = 'A';

        // switch statement with multiple cases
        switch ($grade) {
            case 'A':
            case 'B':
                $result = "Excellent";
                break;
            case 'C':
            case 'D':
                $result = "Good";
                break;
            case 'E':
                $result = "Needs Improvement";
                break;
            default:
                $result = "Invalid grade";
        }

        echo "<div class='example'>\$grade = $grade;</div>";
        echo "<div class='example'>Result: $result</div>";
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>If the grade is either 'A' or 'B', the result is "Excellent".</li>
        <li>If the grade is 'C' or 'D', the result is "Good".</li>
        <li>If the grade is 'E', the result is "Needs Improvement".</li>
    </ul>

    <h2>3. switch Statement with No Break</h2>
    <p>If there is no <code>break</code> statement, the switch will "fall through" and execute all the following cases until a break is encountered or the switch ends.</p>
    
    <?php
        $month = 8;

        // switch without break (fall-through)
        switch ($month) {
            case 1:
                echo "<div class='example'>January</div>";
            case 2:
                echo "<div class='example'>February</div>";
            case 3:
                echo "<div class='example'>March</div>";
            default:
                echo "<div class='example'>End of cases</div>";
        }
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>In this example, because there is no <code>break</code>, once a match is found (for example, for case 1), it continues to execute all the subsequent cases.</li>
        <li>To prevent this, always include a <code>break</code> statement at the end of each case block to avoid falling through to other cases.</li>
    </ul>

    <h2>Conclusion</h2>
    <p>The <strong>switch</strong> statement is a useful control structure for checking multiple conditions. It's a cleaner and more readable alternative to using multiple `if-else` statements, especially when you have many possible values to check. Be cautious of "fall-through" behavior when omitting <code>break</code> statements.</p>

</body>
</html>
