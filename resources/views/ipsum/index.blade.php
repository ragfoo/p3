<!DOCTYPE html>
<html>
<head>
    <title>Ipsum</title>
    <meta charset='utf-8'>
    <link href="/css/ipsum.css" type='text/css' rel='stylesheet'>
</head>
<body>

    <header>
        <h1> Lorem Ipsum Generator </h1>
    </header>

    <section>
        <p>How many paragraphs do you want?</p>

        <form method='POST' action='/ipsum'>
          {{ csrf_field() }}
          <label for="paragraphs">Paragraphs</label>
          <input maxlength="2" name="paragraphs" type="text" value="5" id="paragraphs"> (Max: 99)
          <br><br>
          <input type='submit' value='Generate!'>
        </form>

    </section>

    <footer>
      @foreach ($ipsumText as $paragraph)
        <p>{{ $paragraph }}</p>
      @endforeach

    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</body>
</html>
