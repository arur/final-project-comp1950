<?php 

function checkSubmission($data) {
	
	foreach ($data as $answers) {
		if(trim($answers) == "") {
			return true;
		}
	}

	return false;
}


$message = '';
$submitButton = '';
$editButton = '';

session_start();


if(count($_POST) > 0) {


	foreach ($_POST as $key => $value) {
	   if ($value != "") {  

	   	$_SESSION[$key] = $value;
	   }
	   else if ($value == '' && isset($_SESSION[$key])) {
	      unset($_SESSION[$key]);
	   }
	}


	$blankAnswers = checkSubmission($_POST);

	if($blankAnswers === true) {
		$message = 'You did not fill out an answer for one or more questions. Would you still like to submit the quiz?'; 

		 
    $editButton = '<a href="quiz2.php" class="btn btn-outline-primary ps-button-spacing" role="button">Edit Answers</a>';
		$submitButton = '<a href="submission.php" class="btn btn-outline-primary" role="button">Submit Now</a>';
	}
	else {
		$message = 'The quiz was submitted successfully.';

    $_SESSION = array();

    session_destroy();
	}

}
else {

	// if(count($_SESSION) == 0) {
	// 	header('Location: ../quizzes.html');
	// 	exit;
	// }

	$message = 'The quiz was submitted successfully.';

	$_SESSION = array();
	session_destroy();
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="The website for BCIT students of the 12 week version of COMP 1950.">

    <title>BCIT : comp1950 : Quizzes</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/proto-site.css">

    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"
      integrity="sha256-sqQlcOZwgKkBRRn5WvShSsuopOdq9c3U+StqgPiFhHQ="
      crossorigin="anonymous"></script>
    <![endif]-->

  </head>
  <body>
    <div class="ps-login">
      <div class="container">
        <ul class="nav justify-content-end">
          <li class="nav-item ">
            <a class="nav-link  text-white" href="">Forum</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-white" href="">Log in</a>
          </li>
        </ul>
      </div>
    </div>
    <nav class="bg-faded ps-mainnav">
      <div class="container">
        <div class="navbar navbar-toggleable-md navbar-light">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
          </button>
          <h1 class="navbar-brand mb-0">Comp1950</h1>
          <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Lectures</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Resources</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">Quizzes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search">
              <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </div>
      </div>
    </nav>
    <div class="ps-content">
      <div class="container">
        <div class="row">
          <div class="col-md-3 ps-sidebar">
            <div id="toc">
              <div class="ps-toc-item">
                <a class="ps-toc-title collapsed" data-toggle="collapse" href="#secondaryNav">quizzes</a>
              </div>
              <div id="secondaryNav" class="ps-links">
                <div class="ps-toc-item">
                  <a class="ps-toc-link" href="#">Quiz 1</a>
                </div>
                <div class="ps-toc-item active">
                  <a class="ps-toc-link" href="quiz2.php">Quiz 2</a>
                </div>
                <div class="ps-toc-item">
                  <a class="ps-toc-link" href="#">Quiz 3</a>
                </div>
                <div class="ps-toc-item">
                  <a class="ps-toc-link" href="#">Quiz 4</a>
                </div>
                <div class="ps-toc-item">
                  <a class="ps-toc-link" href="#">Quiz 5</a>
                </div>
                <div class="ps-toc-item">
                  <a class="ps-toc-link" href="#">Quiz 6</a>
                </div>
                <div class="ps-toc-item">
                  <a class="ps-toc-link" href="#">Quiz 7</a>
                </div>
                <div class="ps-toc-item">
                  <a class="ps-toc-link" href="#">Quiz 8</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-9 ps-content">
            <article>
              <h2>Quizzes</h2>
              <section id="s1">
                <h3>Quiz 2</h3>
                <div class="contblock">

                	<?php echo $message;
        						echo $editButton;
                        echo $submitButton;
        					?>

                </div>
            </article>
          </div>
        </div>
      </div>
      <footer class="ps-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-4 ps-info">
              <h4>About</h4>
              <div class="intro">
                <p>This website is for BCIT students of the 12 week version of COMP 1950.</p>
                <p>Check the <a href="http://www.bcit.ca/study/courses/comp1950">course catalogue at BCIT</a> to see when this course is running next.</p>
              </div>
            </div>
            <div class="col-md-3 offset-md-1 ps-associated">
              <h4>Associated</h4>
              <div class="nav flex-column">
                <a href="http://bcitcomp.ca/students/">students on bcitcomp.ca</a>
                <a href="http://my.bcit.ca/">my.bcit</a>
                <a href="http://www.bcit.ca/">bcit</a>
                <a href="http://www.bcit.ca/cas/computing/">bcit: computing</a>
              </div>
              <p></p>
            </div>
            <div class="col-md-3 offset-md-1 ps-contact">
              <h4>Contacts</h4>
              <div class="">Email: <a href="#" class="">jeff parker</a></div>
            </div>
          </div>
        </div>
      </footer>

      <!-- jQuery, Tether, Bootstrap JS. -->
      <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
      <script src="../src/main.js"></script>
  </body>
</html>
