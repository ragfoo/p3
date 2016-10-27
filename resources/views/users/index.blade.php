<!DOCTYPE html>
<!-- Template by Quackit.com -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Random User Generator</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <div class="jumbotron feature">
		<div class="container">
			<h1> Random User Generator</h1>
			<p>Create Random Users for Your Development Testing Needs</p>
      <form method="POST" action='/users' accept-charset="UTF-8">
        {{ csrf_field() }}
        <label for="users">How many users?</label>		<input maxlength="2" name="users" type="text" value="5" id="users"> (Max: 99)
    		<br>

    		Include...
    		<br>
    		<input name="birthdate" type="checkbox" checked>		<label for="birthdate">Birthdate</label>		<br>

    		<input name="location" type="checkbox" checked>		<label for="location">Location</label>		<br>

    		<input type="submit" value="Generate!">
      </form>
		</div>
	</div>

    <!-- Content -->
    <div class="container">
        <!-- Feature Row -->
        <div class="row">
          @foreach ($userList as $user)
            <article class="col-md-4 article-intro">
                <a href="#">
                    <img class="img-responsive img-rounded" src="https://api.adorable.io/avatars/285/{{$user['name']}}.png" alt="">
                </a>
                <h3>
                    <p> {{$user['name']}} </p>
                </h3>
                <p> {{$user['birthdate']}} </p>
                <p> {{$user['location']}} </p>
            </article>
          @endforeach
        </div>
        <!-- /.row -->

    </div>
    @if(count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <!-- /.container -->

	<footer>

	</footer>


    <!-- jQuery -->
    <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

	<!-- IE10 viewport bug workaround -->
	<script src="js/ie10-viewport-bug-workaround.js"></script>

	<!-- Placeholder Images -->
	<script src="js/holder.min.js"></script>

</body>

</html>
