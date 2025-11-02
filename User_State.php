<?php
    // Array of programs with names and corresponding PHP file paths
    $programs = [
        '1. Introduction to Cookies and Sessions in PHP' => './Program_Folder/Program28.php',
        '2. Introduction to Sessions & Starting a Session in PHP' => './Program_Folder/Program29.php',
        '3. Registering Session variables, working with session variables, Destroying session in PHP' => './Program_Folder/Program30.php',
        '4. Passing session Ids , encoding and decoding session variables, increase session expire time, working
of session without cookie in PHP' => './Program_Folder/Program31.php',
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User State Programs</title>
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
