<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/about.css" async>
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages about2">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_about2.jpg" alt=""></div>
        <div class="container">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <h1 class="pageTitle">Why Us</h1>
          </div>
          <div class="pic"><img src="../images/in/a16.png" alt=""></div>
        </div>
      </div>

      <div class="mainBox">
        <section>
          <div class="container">
            <h2 class="blockTitle wow fadeInUp" data-wow-delay="0s">Competitive Equipment combines Professional Team</h2>
            <div class="description wow fadeInUp" data-wow-delay="0.2s">Fu-Long now owns nearly 33,000 square meters of manufacturing base. It sets up with hundreds of automatic equipment for lathing, milling, grinding, boring, heat treatment, polishing and electro-plating; precision instruments for inspection, and approximately 300 professional technicians, so that we can make the products precisely by customers’ drawings and requirements. Fu-Long can not only invest equipment, but also encourage employees to study further continuously. Because we believe that professional team work results in excellent performance.</div>
            <div class="picBox">
              <div class="pic"><img src="../images/in/a14.jpg" alt=""></div>
              <div class="pic"><img src="../images/in/a15.jpg" alt=""></div>
            </div>
          </div>

          <div class="bottom wow fadeInUp" data-wow-delay="0.4s">
            <div class="bottomTitleBox wow fadeInUp" data-wow-delay="0.6s">
              <div class="title">PROFESSIONAL TEAM</div>
              <div class="slogan">work results in excellent performance.</div>
            </div>
            <div class="listBox">
              <div class="pic"><img src="../images/in/about4.jpg" alt=""></div>
              <div class="pic"><img src="../images/in/about5.jpg" alt=""></div>
              <div class="pic"><img src="../images/in/about6.jpg" alt=""></div>
            </div>
          </div>
        </section>

      </div>

      <div class="breadcrumbBox">
        <div class="container">
          <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <a href="index.php" title="index" itemprop="item">
                <span itemprop="name">Home</span>
              </a>
              <meta itemprop="position" content="1">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Company</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Why Us</span>
              <meta itemprop="position" content="3">
            </li>
          </ul>
        </div>
      </div>
    </main>


    <?php include('include_footer.php'); ?>

  </div>
  <?php include('include_body_bottom.php'); ?>


  <script>
    $(function() {
      $('.bottom .listBox').slick({
        speed: 5000,
        autoplay: true,
        autoplaySpeed: 0,
        centerMode: true,
        cssEase: 'linear',
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: true,
        infinite: true,
        initialSlide: 1,
        arrows: false,
        buttons: false
      });
    })
  </script>
</body>

</html>