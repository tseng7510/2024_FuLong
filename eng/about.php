<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/about.css" async>
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages about">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_about.jpg" alt=""></div>
        <div class="container">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <h1 class="pageTitle">About Us</h1>
          </div>
        </div>
      </div>

      <div class="mainBox">
        <section>
          <div class="container">
            <div class="listBox">

              <div class="item wow fadeInUp" data-wow-delay="0s">
                <h2 class="blockTitle">Industry-leading Technology earns Reputation</h2>
                <div class="infoBox">
                  <div class="pic">
                    <div class="video-container"><iframe src="https://www.youtube.com/embed/TZ9TgAzAWOA?rel=0&autoplay=1&mute=1&loop=1&playlist=TZ9TgAzAWOA&controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                  </div>
                  <div class="info">
                    <div class="description">The master of hard chrome plated steel bar – Established in A.D. 1979, Fu-Long Metal Industrial Co., Ltd. locates its headquarter in Taoyuan City, Taiwan, and become the first manufacturer who focuses on the production of piston rod and hard chrome plated steel bar in Taiwan. Over last four decades, Fu-Long devotes to the production of piston rod for hydraulic/pneumatic cylinder, the innovation and development of machinery accessories, and now has successfully sold products in over dozens of countries worldwide.</div>
                  </div>
                </div>
              </div>

              <div class="item wow fadeInUp" data-wow-delay="0s">
                <h2 class="blockTitle">ISO Authentication guarantees Full-Power Performance</h2>
                <div class="infoBox">
                  <div class="pic"><img src="../images/in/about.jpg" alt=""></div>
                  <div class="info">
                    <div class="description">In A.D.1998, Fu-Long was the first professional manufacturer who obtained ISO9001 certification in the industry, and has continuously passed the 2000 and 2008 version. All the processes of quality control and production have standard procedures in order to make qualified products. Other than that, we have also achieved ISO14001 and OHSAS 18001 certificate in A.D.2015. We wish to create the future with customers by perfect and professional service.</div>
                  </div>
                </div>
              </div>

              <div class="item wow fadeInUp" data-wow-delay="0s">
                <h2 class="blockTitle">Environment Policy</h2>
                <div class="infoBox">
                  <div class="pic"><img src="../images/in/about2.jpg" alt=""></div>
                  <div class="info">
                    <div class="description">
                      <ul>
                        <li>Observe Environmental Laws</li>
                        <li>Dedicated to Pollution Prevention</li>
                        <li>Continuously Improve Environment</li>
                        <li>Promote Waste Recycling</li>
                        <li>Respond Environmental Protection</li>
                        <li>Encourage All Staffs to Involve</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="item wow fadeInUp" data-wow-delay="0s">
                <h2 class="blockTitle">Safety and Health Policy</h2>
                <div class="infoBox">
                  <div class="pic"><img src="../images/in/about3.jpg" alt=""></div>
                  <div class="info">
                    <div class="description">
                      <ul>
                        <li>Observe Safety and Health Laws</li>
                        <li>Maintain Safety of Working Environment</li>
                        <li>Continuously Improve Hazard Prevention</li>
                        <li>Implement Involvement by All Staffs</li>
                      </ul>
                    </div>
                  </div>
                </div>
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
              <span itemprop="name">Company</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">About Us</span>
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