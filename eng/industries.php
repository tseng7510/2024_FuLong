<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/industries.css" async>
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages industries">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_industries.jpg" alt=""></div>
        <div class="container">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <div class="pageTitle">Industries</div>
          </div>
        </div>
      </div>

      <div class="mainBox">
        <section>
          <div class="container">
            <div class="listBox1">

              <?php for ($i = 0; $i < 3; $i++) { ?>
                <div class="item wow fadeInUp" data-wow-delay="0s">
                  <a href="industries_detail.php">
                    <div class="pic"><img src="../images/in/industries.jpg" alt=""></div>
                    <div class="info">
                      <h2 class="title">Agriculture</h2>
                    </div>
                  </a>
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
              <span itemprop="name">Industries</span>
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