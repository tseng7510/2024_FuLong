<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css" async>
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages newsList">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_news.jpg" alt=""></div>
        <div class="container">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <h1 class="pageTitle">News</h1>
          </div>
        </div>
      </div>

      <div class="mainBox">
        <section>
          <div class="container hasSide">
            <?php include('include_news.php'); ?>

            <div class="contentBox">
              <div class="listBox">

                <?php for ($i = 0; $i < 6; $i++) { ?>
                  <div class="item wow fadeInUp" data-wow-delay="0s">
                    <a href="news_detail.php">
                      <div class="pic"><img src="../images/in/news.jpg" alt=""></div>
                      <time>2024.02.26</time>
                      <div class="info">
                        <h2 class="title">2023 A REFRESHING NEW YEAR OF THE RABBIT</h2>
                        <div class="more">VIEW MORE</div>
                      </div>
                    </a>
                  </div>
                <?php } ?>

              </div>
              <div class="pageBox wow fadeInUp" data-wow-delay="0.2s">
                <ul class="pagination">
                  <li class="controls"><a class="prev" href="#" title="Previous"></a></li>
                  <li><a href="#">01</a></li>
                  <li><a href="#">02</a></li>
                  <li class="active"><a href="#">03</a></li>
                  <li><a href="#">04</a></li>
                  <li><a href="#">05</a></li>
                  <li class="controls"><a class="next" href="#" title="Next"></a></li>
                </ul>
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
              <span itemprop="name">Media</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">News</span>
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