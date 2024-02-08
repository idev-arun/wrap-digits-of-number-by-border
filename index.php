<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wrap digits of a number by border</title>
    <style>
        .container {
            margin: auto;
            width: 30%;
            height: auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .tl_id{
            margin: auto;
            width: 100%;
            height: auto;
            border-collapse: collapse;
        }
        .tl_id tr td{
            text-align: center;
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <table class="tl_id">
            <tr>
                <td>TL ID</td>
                <?php
                    $number = 687634213987293;
                    $digits = str_split($number);
                    foreach ($digits as $digit):
                ?>
                    <td><?=$digit?></td>
                <?php endforeach; ?>
            </tr>
        </table>
    </div>
</body>
</html>
