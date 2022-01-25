<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Portfolio</title>
    <link rel="stylesheet" href="/ASSET/CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  </head>
  <body>
    <header>
      <a href="#" class="brand">Cakra</a>
      <div class="menu-btn"></div>
      <div class="navigation">
        <div class="navigation-items">
          <a href="home">Home</a>
          <a href="contact">Contact</a>
          <a href="about">Skills</a>
          <a href="#project">Project</a>
        </div>
      </div>
    </header>

    <section class="home" id="home">
      <img class="active"src="/ASSET/IMG/2.jpg">
      <br> <br> <br> <br> <br>
            <div class="content active">
                <h1>Halo, Selamat Datang<br><span>{{$name}}!</span></h1>
            </div>
    </section>

    <script type="text/javascript">
    const menuBtn = document.querySelector(".menu-btn");
    const navigation = document.querySelector(".navigation");

    menuBtn.addEventListener("click", () => {
      menuBtn.classList.toggle("active");
      navigation.classList.toggle("active");
    });
    </script>
<!------------<script src="ASSET/JS/app.js"></script>--------->
  </body>
</html>
