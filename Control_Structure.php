<?php
    // Array of programs with names and corresponding PHP file paths
    $programs = [
        '1. If-else in PHP' => './Program_Folder/Program4.php',
        '2. Ternary Operator in PHP' => './Program_Folder/Program5.php',
        '3. Switch Statement in PHP' => './Program_Folder/Program6.php',
        '4. While Loop in PHP' => './Program_Folder/Program7.php',
        '5. Do-While Loop in PHP' => './Program_Folder/Program8.php',
        '6. For Loop in PHP' => './Program_Folder/Program9.php',
        '7. File Inclusion Statements in PHP' => './Program_Folder/Program10.php',
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Control_Structure Programs</title>
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
