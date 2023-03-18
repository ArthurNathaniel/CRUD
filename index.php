<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Boakye Website</title>
<link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="padding: 0 5%; padding-block: 10px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <h1>Boakye</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<header class=" text-dark text-center">
        <div class="container">
            <h2>Becoming a SRC President at Kumasi Technical University</h2>
        </div>
    </header>
    <div class="alert alert-success text-center message" role="alert">

    </div>
    <?php
    include_once 'form.php';
    include_once 'profile.php';
    ?>
    

    <section class="container my-5">
      <p>Becoming a SRC (Student Representative Council) President at Kumasi Technical University requires a lot of hard
        work, dedication, and strategic planning. Here are some steps that you can take to increase your chances of
        becoming a SRC president:</p>
      <ul>
        <li>Get involved in student organizations and activities on campus</li>
        <li>Develop a strong platform that addresses the needs and concerns of students</li>
        <li>Build relationships with faculty members, staff, and other influential people on campus</li>
        <li>Create a campaign plan that outlines your goals, strategies, and tactics</li>
        <li>Seek endorsements from student groups, faculty, staff, and other influential people on campus</li>
        <li>Participate in debates and forums to showcase your knowledge, leadership skills, and ability to address
          student concerns</li>
        <li>Encourage students to vote and mobilize your supporters to get out and vote on election day</li>
      </ul>
    </section>
  </div>




  <div class="container">
    <div class="row mb-3">
      <div class="col-3">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#userModal" id="addnewbtn">Add a Comment <i class="fa fa-user-circle-o"></i></button>
      </div>
      <!-- <div class="col-9">
        <div class="input-group input-group-lg">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-lg" placeholder="Search..." id="searchinput">

        </div> -->
      </div>
    </div>
  </div>
  <?php
  include_once 'playerstable.php';
  ?>
  <footer class="bg-light text-center py-3" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <div class="container">
            <p class="mb-0">Name: Boakye Collins | Index Number: 052141360024 | Level: 200</p>
        </div>
    </footer>
  <nav id="pagination">
  </nav>
  <input type="hidden" name="currentpage" id="currentpage" value="1">
  </div>

  <div>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </div>
  <div id="overlay" style="display:none;">
    <div class="spinner-border text-danger" style="width: 3rem; height: 3rem;"></div>
    <br />
    Loading...
  </div>
</body>

</html>