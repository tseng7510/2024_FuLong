<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/products.css" async>
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages productsList">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_products.jpg" alt=""></div>
        <div class="container">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <h1 class="pageTitle">Our Products</h1>
          </div>
        </div>
      </div>

      <div class="mainBox">
        <section>
          <div class="container">

            <div class="listBox">

              <?php for ($i = 0; $i < 6; $i++) { ?>
                <div class="item wow fadeInUp" data-wow-delay="0s">
                  <div class="info">
                    <h2 class="title">Piston Rod</h2>
                    <div class="description">The piston rod has high processing requirements and strict requirements on coaxiality and wear resistance. The piston rods and hard chromium plated steel rods produced by Fulong are of high quality and stable, worthy of your trust!</div>
                    <a href="products_2.php" class="more">VIEW MORE
                  </div>
                  <div class="pic"><a href="products_2.php"><img src="../images/index/product.jpg" alt=""></a></div>
                </div>
              <?php } ?>

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
              <span itemprop="name">Products</span>
              <meta itemprop="position" content="2">
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
      $('.sideBox li').eq(0).addClass('active');
    })
  </script>
</body>

</html>