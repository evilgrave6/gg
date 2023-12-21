<?php
include 'db.php';

$sql = "SELECT * FROM books";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Книжный магазин</title>
</head>
<body>

    <h1>Добро пожаловать в книжный магазин</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Автор</th>
            <th>Цена</th>
            <th>Количество</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["id"]."</td>
                        <td>".$row["title"]."</td>
                        <td>".$row["author"]."</td>
                        <td>".$row["price"]."</td>
                        <td>".$row["quantity"]."</td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Нет доступных книг</td></tr>";
        }
        ?>
    </table>

</body>
</html>

<?php
$conn->close();
?>
