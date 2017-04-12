<?php
session_start();
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
    <link rel="alternate stylesheet" title="projector" href="../css/projector.css">

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
                <a class="nav-link" href="../index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../lecture/two.html">Lectures</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../resources/resources.html">Resources</a>
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
                  <form method="post" action="submission.php">
                    <ol>
                        <li>  
                          HTML is meant to be “well formed”, which carries a series of strict rules for how to write code. Briefly state three of these rules: <span class="ps-marks">(3 marks)</span>
                          <br />
                          <textarea name="q1" id="q1" class="ps-answer-box"><?php 
                            if(isset($_SESSION['q1'])) {
                              echo $_SESSION['q1'];
                            }
                          ?></textarea>
                        </li>
                        <li>                        
                          Write out the complete HTML5 DOCTYPE. <span class="ps-marks">(2 marks)</span>
                          <br />
                          <textarea name="q2" id="q2" class="ps-answer-box"><?php 
                            if(isset($_SESSION['q2'])) {
                              echo $_SESSION['q2'];
                            }
                          ?></textarea>
                        </li>
                        <li>                        
                          HTML5 introduces a series of new semantic tags like &lt;header&gt; and &lt;footer>&gt;. Name three other new semantic tags in HTML5. <span class="ps-marks">(3 marks)</span>
                          <br />
                          <textarea name="q3" id="q3" class="ps-answer-box"><?php 
                            if(isset($_SESSION['q3'])) {
                              echo $_SESSION['q3'];
                            }
                          ?></textarea>
                        </li>
                        <li>                        
                          Which of the various Markup Languages is the current W3C recommendation? <span class="ps-marks">(1 mark)</span>
                          <br />
                          <textarea name="q4" id="q4" class="ps-answer-box"><?php 
                            if(isset($_SESSION['q4'])) {
                              echo $_SESSION['q4'];
                            }
                          ?></textarea>
                        </li>
                        <li>                        
                          HTML5 includes rules for how browsers handle errors in the code. <span class="ps-marks">(1 mark)</span>
                          <br />
                          <textarea name="q5" id="q5" class="ps-answer-box"><?php 
                            if(isset($_SESSION['q5'])) {
                              echo $_SESSION['q5'];
                            }
                          ?></textarea>
                        </li>
                    </ol>
                    <input type="submit" id="ps-submit" class="btn btn-outline-primary" value="Submit">
                  </form>
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
