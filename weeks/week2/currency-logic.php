<?php
// understanding the logic
// 1 ruble = 0.013 dollars
// 1 pound sterling = 1.28 dollars
// 1 canadain dollar = 0.79 dollars
// 1 euro = 1.18 dollars
// 1 yen = 0.0094 dollars

// rubles = 10007
// sterling = 500
// canada = 5000
// euros = 1200
// yen = 2000

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Currency logic</title>

<style> 
    table {
        width:400px;
        margin: 20px auto;
        border:1px solid green;
        border-collapse:collapse;
    }
    td, th {
        border:1px solid green;
        padding:5px;
        text-align:left;
    }

</style>

</head>

<body>
    <table>
        <tr>
            <th>Rubles</th>
            <td>$130.09</td>
        </tr>

        <tr>
            <th>Pounds</th>
            <td>$640.00</td>
        </tr>

        <tr>
            <th>Canadian</th>
            <td>$3950.00</td>
        </tr>

        <tr>
            <th>Euros</th>
            <td>$1416.00</td>
        </tr>

        <tr>
            <th>Yen</th>
            <td>$18.80</td>
        </tr>

        <tr>
            <th>Total</th>
            <td><strong>$6154.89</strong></td>
        </tr>

    </table>
</body>
</html>