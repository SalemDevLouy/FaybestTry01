<?php
session_start();
?>


    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>FYBAST Shop</title>
        <link rel="stylesheet" href="CSS/Style.css" />
        <link
          href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet"
        />
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />
      </head>
      <body>
        <div class="header">
          <div class="container">
            <div class="navBar">
              <div class="logo">
                <img src="images/logo.png" width="125px" />
              </div>
              <nav>
                <ul id="MenuItems">
                  <li><a href="addpro.php">ADD PRODUCTS</a></li>
                  <li><a href="sap.php">SHOW ALL PRODUCTS</a></li>
                  <li><a href="edit.php">EDIT </a></li>
                  <li><a href="logout.php">LOGOUT</a></li>
                </ul>
              </nav>
            </div>
            <div class="row">
              <div class="col-2">
                <h1>
                  Hi ADMIN  <br />
                  Hello in Your Store!
                </h1>
              </div>
              <div class="col-2">
                <img src="images/image1.png" />
              </div>
            </div>
          </div>
        </div>
    <!-------------------- footer ------------------->

    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col-1">
            <h3>Download Our App</h3>
            <p>Download App for Androd and ios mobile phone.</p>
            <div class="app-logo">
              <img src="images/play-store.png" />
              <img src="images/app-store.png" />
            </div>
          </div>
          <div class="footer-col-2">
            <img src="images/logo.png" />
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam in
              eos error? Suscipit officia aliquid
            </p>
          </div>
          <div class="footer-col-3">
            <h3>Useful Links</h3>
            <ul>
              <li>Compus</li>
              <li>Blog Post</li>
              <li>Return Policy</li>
              <li>Join Affiliate</li>
            </ul
          </div>
          <div class="footer-col-4">
            <h3>Follow Us</h3>
            <ul>
              <li>Facebook</li>
              <li>Twitter</li>
              <li>Instagram</li>
              <li>Youtube</li>
            </ul>
          </div>
        </div>
        <hr />
        <p class="copy-right">Louafi Salem Abdeldjouad&Amrani Farouk Hossam-Eddine</p>'.
      </div>
    </div>
  </body>
</html>

