<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width">
  <title>Story Title</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class="main-wrapper" style="text-decoration: none;">
    <div class="header" style="text-decoration: none;">
      <?php
      include('nav.php');
      ?>

    </div>
    <div class="story-container">
      <!--Replace story1.jpg with your own image-->
      <img src="./images/story1.jpg" alt="image alt here" style="height: 15vw;">
      <p style="font-size: 1.5vw;"><strong>Story Title</strong></p>
      <!--Add content to the story here-->
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
        laborum.</p>
      <div class="story-information">
        <!--Add story info here-->
        <p><strong>Author(s): </strong><br>Name(s) here</p>
        <p class="item"><strong>Published: </strong><br>00/00/0000</p>
        <p class="item"><strong>Editor(s): </strong><br>Name(s) here</p>
      </div>
    </div>


    <div class="story-bottom-header">
      <h1 class="about-title">About the Author!</h1>
      <strong>
        <p>Example: As a publisher for The Saintly Bark Out Board, John Doe is responsible for overseeing and managing
          the content that is posted on the site. In his free time, John Doe enjoys exploring new hiking trails in the
          nearby mountains, practicing his photography skills, and playing guitar. He finds that these hobbies help him
          unwind and stay inspired when it comes to creating content for the Bark Out Board.</p>
      </strong>
    </div>
  </div>

  <script src="script.js"></script>
</body>

</html>