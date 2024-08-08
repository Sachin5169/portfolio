<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>CV - Sachin</title>
  <meta name="description" content="simple CV example created with HTML and CSS">
  <meta name="author" content="Fly Nerd">
  <link rel="icon" href="./img/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
  <header>
    <div>
      <img src="./img/avatar.jpg" />
    </div>
    <h1>Sachin Atwal</h1>
    <section>
      <p>Hello! I am Sachin Atwal. I am a student of computer science in chandigarh university.  I have interst in developing web applications using HTML, CSS  and Javascript </p>
      <a href="https://www.facebook.com/sachin.atwal.520/" target="_blank">
        <i class="fab fa-facebook-f"></i>
      </a>
      
      
      <a href="https://www.instagram.com/sachin.atwal /" target="_blank">
        <i class="fab fa-instagram"></i>
      </a>
      
    </section>
  </header>
  <main>
    <section>
      <h3>Education Details</h3>
      <article class='course'>
        <div class='title'>
          <h4>10th: Dav Public school,Sec 8C Chandigarh</h4>
        </div>
        <div class="descrition">
          <p>passed with 90% marks.</p>
        </div>
      </article>
      <article class='course'>
        <div class='title'>
          <h4>12th: dav Public school, Sec 8C, Chandigarh</h4>
        </div>
        <div class="descrition">
          <p>Passed with 90% marks.
          </p>
        </div>
      </article>
      <article class='course'>
        <div class='title'>
          <h4>Currently doing B.tech from CU</h4>
        </div>
        <div class="descrition">
          <p></p>
        </div>
      </article>
    </section>
    <section>
      <h3>Skills</h3>
      <div class='skills'>
        <div class='column'>
          <h4>Good knowledge</h4>
          <ul>
            <li>HTML5</li>
            <li>CSS</li>
            <li>JavaScript ES5/6</li>
            <li>PHP</li>
          </ul>
        </div>
        <div class='column'>
          <h4>Basic knowledge</h4>
          <ul>
          <li>HTML5</li>
            <li>CSS</li>
            <li>JavaScript ES5/6</li>
            <li>PHP</li>
          </ul>
        </div>
        <div>
          <h4>Languages</h4>
          <p>HN Hindi - Native speaker</p>
          <p>GB English - Proficient C1</p>
          <p>PB Punjabi - Advanced - C1</p>
        </div>
      </div>
    </section>

    
    

    <!-- Contact us form -->
    <section>
    <h3>Contact me:-</h3>

    <?php
    // pre_r($_POST);
    $servername = "localhost";
    $username = "root";
    $password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,"mysql");
$email = ($_POST['email']);
$name = ($_POST['name']);
// Check connection
if($_POST['submit']){
$sql = "INSERT INTO contactus (name, email)
  VALUES ('$name','$email')";
if ($conn->query($sql) === TRUE) {
    echo '<p class="successText">Email and Name submitted successfully</p>';
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}


$conn->close();


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    ?>




    <form action="" method = "POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name:</label>
    <input name="name" type="text" class="form-control" id="exampleInputText1" required aria-describedby="textHelp">
    <div id="textHelp" class="form-text">Please enter your full name</div>
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Please enter your Emmail Address here</div>
  </div>
  <input type="submit" name="submit" class="btn btn-primary"></input>
</form>
    </section>
  </main>







  <footer>
    <p>Created by: <a href="https://www.flynerd.pl/">@sachin</a> </p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

<?php
