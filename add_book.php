<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $author = $_POST["author"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];

    $sql = "INSERT INTO books (title, author, price, quantity) VALUES ('$title', '$author', $price, $quantity)";

    if ($conn->query($sql) === TRUE) {
        echo "Книга успешно добавлена";
    } else {
        echo "Ошибка: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление новой книги</title>
</head>
<body>

    <h2>Добавить новую книгу</h2>

    <form action="add_book.php" method="post">
        <label for="title">Название:</label>
        <input type="text" name="title" required><br>

        <label for="author">Автор:</label>
        <input type="text" name="author" required><br>

        <label for="price">Цена:</label>
        <input type="number" name="price" step="0.01" required><br>

        <label for="quantity">Количество:</label>
        <input type="number" name="quantity" required><br>

        <input type="submit" value="Добавить книгу">
    </form>

</body>
</html>

<?php
$conn->close();
?>
