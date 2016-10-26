<!DOCTYPE html>
<html lang="en">

<head>
    <title>HomerJIpsum</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ipsum.css" type='text/css' rel='stylesheet'>
    <!-- Custom CSS -->
    <link href="css/full-width-pics.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<body>
    <!-- Full Width Image Header with Logo -->
    <!-- Image backgrounds are set within the full-width-pics.css file. -->
    <header class="image-bg-fixed-height">
        <h1 class="section-heading">Homer J Ipsum</h1>
        <!-- <img class="img-responsive img-center" src="/img/homer.jpg" alt="">-->
        <!-- Content Section -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <p>How many paragraphs do you want?</p>

                        <form method='POST' action='/ipsum'>
                          {{ csrf_field() }}
                          <label for="paragraphs">Paragraphs</label>
                          <input maxlength="2" name="paragraphs" type="text" value="5" id="paragraphs"> (Max: 99)
                          <br><br>
                          <input type='submit' value='Generate!'>
                        </form>
                    </div>
                    @foreach ($ipsumText as $paragraph)
                      <p>{{ $paragraph }}</p>
                    @endforeach
                </div>
            </div>
        </section>
    </header>

    <!-- Footer -->
    <footer>
              <!-- /.container -->
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
