<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">

    <!-- css files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>ECAS | HOME</title>
  </head>
  <body>

    <div class="all_container">

  			<header>
          <div class="top_header"> 
            <!-- site logo -->
            <div class="logo">
              <a href="index.php">ecas</a>
            </div>

            <!-- toggle -->
            <div class="toggle-btn">
              <i class="fa fa-bars toggle-bars" aria-hidden="true"></i>
            </div>

            <!-- nav links -->
            <nav class="menus">
              <ul>

                <li>
                  
                  <a href="">
                    <i class="fa fa-home"></i>
                      home
                  </a>
                  
                </li>

                <li> 
                  <a href="">about us</a>
                </li>

                <li>
                  <a href="#contact">contact us</a>
                </li>

                <li>
                  <a href="user/login.php">
                    <i class="fa fa-users"></i>
                    login
                  </a>
                </li>

              </ul>
            </nav>
          </div>
        </header>

        <!-- slider -->
        <div class="slider">
          <div class="details">
            <div class="details-top">
              <h5>exams cell automation system</h5>
            </div>
            <div class="details-body">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Odio vitae sed molestias adipisci officiis eveniet natus 
                cupiditate saepe, in corporis, impedit sapiente ratione ab. 
                Repellat officiis totam eos omnis alias.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              </p>
            </div>
            
            <a href="">read more...</a>
          
          </div>
        </div>

        <section id="home" class="home"></section>
        <section id="about" class="about"></section>
        <section id="contact" class="contact">
          <h1>contact us</h1>
          <form action="">
            <div>
              <p>full name</p>
              <input type="text" placeholder="Enter Your Name">
            </div>
            <div>
              <p>title</p>
              <input type="text" placeholder="Enter The Title">
            
              <p>your message</p>
              <textarea rows="4"></textarea>
            </div>
            <input type="submit" value="send message">
          </form>
          <div class="other-contact">

            <div>
              <h5>email us</h5>
                <p>infoecas@gmail.com</p>
                <p>infoecas@facebook.com</p>
            </div>

            <div>
              <h5>call us</h5>
                <p>+23324748759</p>
                <p>+233201063783</p>
            </div>
              
            
          </div>
        </section>



























    </div>
    <?php include_once 'footer.php' ?>

    <!-- js files -->
    <script src="js/jquery-3.4.1.slim.min.js" charset="utf-8"></script>
    <script src="js/popper.min.js" charset="utf-8"></script>
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
    <script src="js/jquery-3.4.1.min.js" charset="utf-8"></script>
    <script src="js/main.js" charset="utf-8"></script>
  </body>
</html>
