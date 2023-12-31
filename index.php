<?php
include 'db.php';

$sql = "SELECT * FROM books";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <linkrel="stylesheet" href="stf.css">
  </linkrel>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заголовок страницы</title>
    <link rel="stylesheet" href="./styles/style.css">
  </head>
  <body>
    <header>
      <h1>Книжный магазин Читай-город</h1>
      <nav>
        <ul>
          <li><a href="корзина.html">Корзина</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <article>
        <section>
          <h2>«Читай-город» — российская федеральная сеть книжных магазинов. Самая крупная книготорговая сеть в России.</h2>
          <p>А ещё это – крупный интернет-магазин книг. В нём вы можете заказывать книги в любое время 24 часа в сутки.</p>
        </section>
      </article>
    </main>
  </body>
  <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    header {
        background: #333;
        color: #fff;
        padding: 10px;
        text-align: center;
    }

    section {
        padding: 20px;
    }

    article {
        margin-bottom: 20px;
    }

    footer {
        background: #333;
        color: #fff;
        padding: 10px;
        text-align: center;
        position: fixed;
        bottom: 0;
        width: 100%;
    }
</style>
<section>
  <article>
      <h2>Берсерк. Том 6</h2>
      <p>Под покровом ночи Гатс и Каска, сопровождаемые лучшими воинами Отряда Соколов, проникают в темницу Уиндема, чтобы освободить томящегося там Гриффита. Узнав о случившемся, король Мидленда повелевает отправить в погоню за беглецами рыцарский орден Черных Псов, возглавляемый беспринципным психопатом Уайльдом. В развернувшейся ожесточенной схватке Гатс едва не лишается жизни, чудом сумев уцелеть. Но давшаяся таким тяжким трудом победа, как оказалось, в конечном счете лишена всякого смысла, ведь изможденных и павших духом людей ждет новое испытание, в ходе которого некогда амбициозный лидер Отряда Соколов будет вынужден принять судьбоносное решение и принести в жертву тех, кто прежде с фанатичной преданностью следовал за его мечтой.... </p>
      <p>Цена: 1539 рублей</p>
      <img src="2990601.jpg" alt="Р." width="350" height="350">
        <button>Добавить в корзину</button>
  </article>

  <article>
      <h2>Книга 2</h2>
      <p>Описание книги 2. Цена: </p>
      <button>Добавить в корзину</button>
  </article>

  <!-- Добавьте другие книги по аналогии -->
</section>

<footer>
  <p>&copy; 2023 Читай-город</p>
</footer>
</html>

<?php
$conn->close();
?>
