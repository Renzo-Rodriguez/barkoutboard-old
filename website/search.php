<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width">
  <title>Bark Out Board | Search</title>
  <link href="search.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class="container">
    <a href="/" class="close-icon">×</a>
    <h1 style="color: white; font-size: 5em; font-family: 'Poppins', sans-serif; padding-bottom: 25px;">Search stories
    </h1>
    <p style="color: white; font-size: 2em; font-family: 'Poppins', sans-serif; padding-bottom: 50px;">This service is
      being worked on...</p>
    <form input="" class="search-bar" method="get">
      <input type="search" placeholder="Search for stories..." id="search" data-search>
    </form>
    <div class="user-cards" data-user-cards-container></div>
    <template data-user-template>
      <div class="card">
        <div class="header"><a href="" data-link></a></div>
        <div class="body" data-body></div>
      </div>
    </template>
  </div>

  <script src="search.js"></script>
</body>

</html>