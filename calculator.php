<!doctype html>
<html>
<head>
    <title>
        Control Structures
    </title>
</head>
<body>

<h1 align="center" border="1"> Easy Table Calculator</h1>
<table align="center" border="5" cellpadding="7" cellspacing="7">
    <?php
    for($tablenum=1; $tablenum<=12; $tablenum++)
    {
        echo "<tr>";
        for ($value=1; $value<=12; $value++)
        {
            echo "<td>$tablenum * $value = ".$tablenum * $value."</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>

