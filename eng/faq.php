<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/faq.css" async>
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages faq">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_faq.jpg" alt=""></div>
        <div class="container">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <h1 class="pageTitle">FAQ</h1>
          </div>
        </div>
      </div>

      <div class="mainBox">
        <section>
          <div class="container">
            <div class="info">If your question can’t be answered with the questions below, please reach out to us using our <a href="contact.php
">contact us page.</a></div>

            <div class="listBox">
              <div class="box">
                <?php for ($i = 0; $i < 12; $i++) { ?>
                  <div class="item wow fadeInUp" data-wow-delay="0s">
                    <button type="button" class="qBox">What standards do need to meet?</button>
                    <div class="aBox">If your question can’t be answered with the questions below, please reach out to us using ourIf your question can’t be answered with the questions below, please reach out to us using our</div>
                  </div>
                <?php } ?>
              </div>

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
              <span itemprop="name">Contact</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">FAQ</span>
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
      $('.sideBox li').eq(0).addClass('active');
    })
  </script>
</body>

</html>