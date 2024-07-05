<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/products.css" async>
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages productsList2">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_products.jpg" alt=""></div>
        <div class="container">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <div class="pageTitle">Our Products</div>
          </div>
        </div>
      </div>

      <div class="mainBox">
        <section>
          <div class="container">
            <h1 class="unitTitle">Piston Rod</h1>
            <div class="listBox">

              <?php for ($i = 0; $i < 2; $i++) { ?>
                <div class="item wow fadeInUp" data-wow-delay="0s">
                  <a href="products_3.php">
                    <div class="pic"><img src="../images/in/product01.jpg" alt=""></div>
                    <div class="info">
                      <h2 class="title">Hard Chrome Plated Steel Bar</h2>
                    </div>
                  </a>
                </div>
              <?php } ?>

            </div>
          </div>

          <div class="editor">
            <div class="container">Introducing our Induction Harden Hard Chrome Plated Steel Bar – the epitome of durability and precision in engineering. Crafted with meticulous attention to detail, this product is designed to meet the most demanding industrial requirements, making it an indispensable component in various applications.<br /><br />
              At its core, our steel bar boasts a high-grade composition that undergoes a specialized induction hardening process. This ensures exceptional strength and wear resistance, making it ideal for applications where toughness and longevity are paramount. The induction hardening not only fortifies the surface but also enhances the overall performance of the steel bar, making it stand out in terms of reliability and efficiency.<br /><br />
              To further elevate its performance, our steel bar is meticulously coated with hard chrome, providing an extra layer of protection against corrosion and abrasion. The hard chrome plating not only enhances the aesthetic appeal but also reinforces the steel’s resistance to harsh environmental conditions, ensuring a prolonged service life.
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
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Piston Rod</span>
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