<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/index.css" async>
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="mainBox">

        <div class="banner">
          <div class="listBox">
            <div class="item">
                <a href="products.php">
              <div class="pic"><img src="../images/index/banner.jpg" alt=""></div>
              </a>
            </div>
            <div class="item">
                <a href="products.php">
              <div class="pic"><img src="../images/index/banner.jpg" alt=""></div>
              </a>
            </div>
          </div>
        </div>

        <section class="productBox">
          <div class="container">
            <div class="infoBox wow fadeInUp" data-wow-delay="0s">
              <div class="listBox">
                <div class="item">
                  <div class="nm">01</div>
                  <div class="info">
                    <div class="title">Piston Rod</div>
                    <div class="description">The piston rod has high processing requirements and strict requirements on coaxiality and wear resistance. The piston rods and hard chromium plated steel rods produced by Fulong are of high quality and stable, worthy of your trust!</div>
                    <a href="products_2.php" class="more">VIEW MORE</a>
                  </div>
                </div>
                <div class="item">
                  <div class="nm">02</div>
                  <div class="info">
                    <div class="title">Piston Rod</div>
                    <div class="description">The piston rod has high processing requirements and strict requirements on coaxiality and wear resistance. The piston rods and hard chromium plated steel rods produced by Fulong are of high quality and stable, worthy of your trust!</div>
                    <a href="products_2.php" class="more">VIEW MORE</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="picBox wow fadeInUp" data-wow-delay="0.2s">
              <h1 class="unitTitle">PRODUCTS</h1>
              <div class="listBox">
                <div class="pic"><a href="products.php"><img src="../images/index/product.jpg" alt=""></a></div>
                <div class="pic"><a href="products.php"><img src="../images/index/product.jpg" alt=""></a></div>
              </div>
            </div>
          </div>
        </section>

        <section class="videoBox wow fadeInUp" data-wow-delay="0s"><video src="../images/index/video.mp4" loop autoplay muted playsinline></video></section>

        <section class="whyBox">
          <div class="container">
            <h2 class="unitTitle wow fadeInUp" data-wow-delay="0s">Why choose us</h2>
            <div class="listBox">
              <div class="item wow fadeInUp" data-wow-delay="0.2s">
                <div class="titleBox">
                  <div class="icon"><img src="../images/index/icon_1.svg" alt=""></div>
                  <h3 class="title">Professional hard chrome plating manufacturer</h3>
                </div>
                <div class="description">As the first manufacturer specializing in the production of hard chromium plated steel rods in Taiwan, we have rich experience and expertise to provide customers with high-quality hard chrome products.</div>
              </div>
              <div class="item wow fadeInUp" data-wow-delay="0.4s">
                <div class="titleBox">
                  <div class="icon"><img src="../images/index/icon_2.svg" alt=""></div>
                  <h3 class="title">Leading technology</h3>
                </div>
                <div class="description">Our company has always been committed to technological innovation and uses the most advanced production technology and equipment to ensure that our products are at the forefront of the industry in terms of quality and performance.</div>
              </div>
              <div class="item wow fadeInUp" data-wow-delay="0.6s">
                <div class="titleBox">
                  <div class="icon"><img src="../images/index/icon_3.svg" alt=""></div>
                  <h3 class="title">Quality control</h3>
                </div>
                <div class="description">We implement strict quality control standards to ensure that our products are consistently of high quality and meet international standards and specifications.</div>
              </div>
              <div class="item wow fadeInUp" data-wow-delay="0.8s">
                <div class="titleBox">
                  <div class="icon"><img src="../images/index/icon_4.svg" alt=""></div>
                  <h3 class="title">Environmental commitment</h3>
                </div>
                <div class="description">We care about environmental protection, our production processes comply with environmental regulations, and we adopt sustainable practices to reduce our impact on the environment.</div>
              </div>

            </div>
          </div>
        </section>

        <section class="aboutBox">
          <div class="container">
            <div class="infoBox">
              <div class="slogan wow fadeInUp" data-wow-delay="0s">If you are looking for engineering solution services</div>
              <div class="description">Please feel free to contact us and we will introduce you to the most suitable workforce and services to meet your requirements.</div>
            </div>
            <a href="about.php" class="more wow fadeInUp" data-wow-delay="0.2s">CONTACT US</a>
          </div>
          <svg class="svg">
            <clipPath id="my-clip-path" clipPathUnits="objectBoundingBox">
              <path d="M0,1 h1 v-0.817 h-0.002 C0.904,0.075,0.715,0.001,0.498,0.001 c-0.216,0,-0.403,0.073,-0.498,0.181 V1"></path>
            </clipPath>
          </svg>

        </section>

      </div>
    </main>


    <?php include('include_footer.php'); ?>

  </div>
  <?php include('include_body_bottom.php'); ?>


  <script>
    $(function() {
      $('.banner .listBox').slick({
        arrows: false,
        dots: true,
        fade: true,
        speed: 900,
        autoplay: true,
        infinite: true,
      });
      $('.productBox .infoBox .listBox').slick({
        arrows: false,
        fade: true,
        dots: true,
        speed: 900,
        infinite: true,
        autoplay: true,
        asNavFor: '.productBox .picBox .listBox',
        appendDots: $('.productBox'),
      })
      $('.productBox .picBox .listBox').slick({
        arrows: false,
        dots: false,
        speed: 900,
        infinite: true,
        asNavFor: '.productBox .infoBox .listBox',
      })
    })
  </script>
</body>

</html>