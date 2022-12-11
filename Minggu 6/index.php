<?php
function ConvRomawi($angkaData)
{
    $dummy = "";

    $romawi = array(
        'M' => 1000,
        'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100,
        'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9,
        'V' => 5, 'IV' => 4, 'I' => 1
    );

    foreach ($romawi as $roman => $nilai) {
        $sama = $angkaData / $nilai;
        $dummy .= str_repeat($roman, $sama);
        $angkaData = $angkaData % $nilai;
    }

    return $dummy;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Convert to Romawi</title>
</head>

<body>
    <table border=1>
        <form methhod="GET">
            <th>
                <h2>KONVERSI</h2>
            </th>
            <tr>
                <td>
                    <label for="angkaData">Masukan Angka</label>
                    <input id="angka" name="angkaData" type="number"></input>
                </td>
            </tr>

            <tr>
                <td>
                    <button id="btnSubmit">Ubah</button>
                    <div id="output">
                        <p>HASIL : <?php error_reporting(0);
                                    echo ConvRomawi($_GET["angkaData"]);
                                    ?>
                        </p>
                    </div>
                </td>
            </tr>
        </form>
    </table>
</body>

</html>