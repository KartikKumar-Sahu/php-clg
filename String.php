<?php
    // Array of programs with names and corresponding PHP file paths
    $programs = [
        '1. String Interpolation with Curly Braces in PHP' => './Program_Folder/Program16.php',
        '2. Explaining Characters and String Indexes in PHP' => './Program_Folder/Program17.php',
        '3. Explaining String Operators in PHP' => './Program_Folder/Program18.php',
        '4. Explaining Heredoc String in PHP' => './Program_Folder/Program19.php',
        '5. String functions in PHP' => './Program_Folder/Program20.php',
        '6. String formatting in PHP' => './Program_Folder/Program21.php',
        '7. Comparing and Searching Strings and Substrings in PHP' => './Program_Folder/Program22.php',
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>String Programs</title>
    <style>
        .List {
            font-size: 20px;
            color: black;
            text-decoration: none;
            margin-top: 15px;
        }
        .List:hover {
            color: blue;
        }
    </style>
</head>
<body>
    <?php foreach ($programs as $name => $link): ?>
        <a class="List" href="javascript:void(0)" onclick="loadProgramAndOutput('<?php echo $link; ?>')">
            <?php echo $name; ?>
        </a><br />
    <?php endforeach; ?>

    <script>
        function loadProgramAndOutput(programSrc) {
            // Load the selected program into the "Program" iframe
            parent.frames["Program"].location.href = programSrc;
        }
    </script>
</body>
</html>
