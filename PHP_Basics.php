<?php
    // Array of programs with names and corresponding PHP file paths
    $programs = [
        '1. Variables in PHP' => './Program_Folder/Program1.php',
        '2. Data Types in PHP' => './Program_Folder/Program2.php',
        '3. Operators in PHP' => './Program_Folder/Program3.php',
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Basics Programs</title>
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
