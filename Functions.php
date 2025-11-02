<?php
    // Array of programs with names and corresponding PHP file paths
    $programs = [
        '1.  Creating and invoking user-defined functions in PHP' => './Program_Folder/Program11.php',
        '2. Formal parameters versus actual parameters in PHP' => './Program_Folder/Program12.php',
        '3. Function and variable scope in PHP' => './Program_Folder/Program13.php',
        '4. Recursion Function in PHP' => './Program_Folder/Program14.php',
        '5. Library functions in PHP' => './Program_Folder/Program15.php',
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Function Programs</title>
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
