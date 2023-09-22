<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Tên khóa học</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $arrs = ['PHP', 'HTML', 'CSS', 'JS'];
            foreach ($arrs as $course) {
                echo '<tr><td>' . $course . '</td></tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>
