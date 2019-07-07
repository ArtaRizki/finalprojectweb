<?php
    require_once("auth.php");
    include("config.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TokoHapedia : Pusat Handphone Bekas & Baru</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
    <script src="main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script
			  src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <!-- Brand -->
        <a class="navbar-brand" href="">TokoHapedia</a>
              
        <!-- Links -->
        <ul class="navbar-nav">
            
        <!-- Dropdown -->
        <div class="dropdown">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbardrop" href="#" data-toggle="dropdown">
                    Kategori<span class="caret">
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="www.google.co.id">Link 1</a>
                    <li><a class="dropdown-item" href="www.google.co.id">Link 2</a>
                    <li><a class="dropdown-item" href="www.google.co.id">Link 3</a>
                </ul>
            </li>
          </div>
            <li class="nav-item">
                <nav class="navbar navbar-expand-sm bg-light navbar-light">
                    <form class="form-inline" action="/action_page.php">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-cari" type="submit">Cari</button>
                    </form>
                </nav>
            </li>
            <li class="nav-keranjang">
                <a href="#">Shopping Cart</a>
            </li>
            <li class="nav-login">
              <a href="logout.php">Logout</a>
            </li>
            <li class="nav-profile">
              <a href="profile.php">Hi! <?php
                
                $sql = 'SELECT username FROM users ';
                $q = $conn->query($sql);
                $q->setFetchMode(PDO::FETCH_ASSOC);
                while($row = $q->fetch())
                echo $row["username"];
                ?></a>
          </li>
        </ul>
    </nav>
    <div class="navbar" style="text-align: center; margin-right: 1em; margin-left: 1em">
      <div class="col-sm">Hape Second</div>
      <div class="col-sm">Hape Terbaru</div>
      <div class="col-sm">Hape Jadul</div>
      <div class="col-sm">Mulai Melapak</div>
      <div class="col-sm">COD Terdekat</div>
      <div class="col-sm">Cek IMEI</div>
    </div>
    <br>
    <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/adult-advertisement-airport-1114376.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/advertisement-advertising-boutique-1051744.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/black-friday-buy-computer-34577.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

      <br>
      <div class="hapebaru">
        <div class="headerlayout">
          <div class="judul">
            <h4>Hape Terbaru</h4>
          </div>
          <div class="judul2">
            <button class="button">Lihat Semua</button>
          </div>
          <br>
          <br>
        </div>
        <div class="produk">
          <div class="card">
            <img class="card-img-top" src="img/Samsung_GalaxyChat_B5330_L_1.jpg" alt="Card image">
            <div class="card-body">
              <h6 class="card-title">Samsung Galaxy Chat B3220</h6>
              <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
        <div class="produk">
          <div class="card">
            <img class="card-img-top" src="img/Nokia-C2-03.jpg" alt="Card image">
            <div class="card-body">
              <h6 class="card-title">Nokia C2-03</h6>
              <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
        <div class="produk">
          <div class="card">
            <img class="card-img-top" src="img/SOny Ericcson.jpg" alt="Card image">
            <div class="card-body">
              <h6 class="card-title">Sony Ericcsson Jadul</h6>
              <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
        <div class="produk">
          <div class="card">
            <img class="card-img-top" src="img/Samsung GTB3310.jpg" alt="Card image">
            <div class="card-body">
              <h6 class="card-title">Samsung GTB3310</h6>
              <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
        <div class="produk">
          <div class="card">
            <img class="card-img-top" src="img/ndbl0j9tfttg57k4j9au.jpg" alt="Card image">
            <div class="card-body">
              <h6 class="card-title">Nokia Gedhang Jadul</h6>
              <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
        <div class="produk">
          <div class="card">
            <img class="card-img-top" src="img/Samsung Galaxy Champ.jpg" alt="Card image">
            <div class="card-body">
              <h6 class="card-title">Samsung Galaxy Champ</h6>
              <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
      </div>

      </br>
      <div class="hapebaru2">
        <div class="headerlayout">
          <div class="judul">
            <h4>Brand Ternama</h4>
          </div>
          <div class="judul2">
              <button class="button">Lihat Semua</button>
          </div>
        </div>
          <div class="merk">
              <div class="responsive">
                  <div class="gallery">
                    <a target="_blank" href="img/xiaomi.png">
                      <img src="img/xiaomi.png" alt="xiaomi" width="300" height="300">
                    </a>
                    <div class="desc">Xiaomi</div>
                  </div>
                </div>

                <div class="responsive">
                  <div class="gallery">
                    <a target="_blank" href="img/nokia.png">
                      <img src="img/nokia.png" alt="Forest" width="300" height="300">
                    </a>
                    <div class="desc">Nokia</div>
                  </div>
                </div>
                
                <div class="responsive">
                  <div class="gallery">
                    <a target="_blank" href="img/oppo.png">
                      <img src="img/oppo.png" alt="Oppo" width="300" height="300">
                    </a>
                    <div class="desc">Oppo</div>
                  </div>
                </div>
                
                <div class="responsive">
                  <div class="gallery">
                    <a target="_blank" href="img/lg.png">
                      <img src="img/lg.png" alt="lg" width="300" height="300">
                    </a>
                    <div class="desc">LG</div>
                  </div>
                </div>
                <div class="responsive">
                  <div class="gallery">
                    <a target="_blank" href="img/huawei.png">
                      <img src="img/huawei.png" alt="huawei" width="300" height="300">
                    </a>
                    <div class="desc">Huawei</div>
                  </div>
                </div>
                <div class="responsive">
                  <div class="gallery">
                    <a target="_blank" href="img/samsung.png">
                      <img src="img/samsung.png" alt="samsung" width="300" height="300">
                    </a>
                    <div class="desc">Samsung</div>
                  </div>
                </div>
          </div>
      </div>
      <br><br>
      <section id="section-footer" class="row">
        <div class="col-xl-3">
            <div>
                <img class="logo" src="img/realme.png" alt="Realme" height="50">            <p>Laku6 pusat jual beli HP bekas / second Samsung, iPhone, LG, Oppo, Asus, Xioami, Lenovo, dll teraman se-Indonesia, Semua perangkat dilengkapi garansi. Barang bisa diantar langsung dengan sistem COD &amp; cicilan 0%. Pesan sekarang.</p>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="fs-title">informasi</div>
            <ul class="fs-info-list">
                <li><a class="fs-info-list-link" href="/cek-harga">Harga HP Bekas</a></li>
                <li><a class="fs-info-list-link" href="/beli-handphone-bekas">Tukar Tambah</a></li>
                <li><a class="fs-info-list-link" href="/bidder-registration">Program Supply Produk</a></li>
                <li><a class="fs-info-list-link" href="/contacts">Hubungi Kami</a></li>
                <li><a class="fs-info-list-link" href="/faqs">FAQs</a></li>
                <li><a class="fs-info-list-link" href="/tentang-kami">Tentang Kami</a></li>
                <li><a class="fs-info-list-link" href="/privacy-policy">Privacy Policy</a></li>
            </ul>
        </div>
        <div class="col-xl-3">
            <div class="fs-title">Lokasi Kami</div>
            <div><p>PT. Laku6 Online Indonesia <br>
                    Jl. Penjernihan II No. 3C<br>
                    Bendungan Hilir, Tanah Abang<br>
                    Jakarta Pusat, 10210 Indonesia<br>
                    Telp. 021-25981147</p></div>
                    <h3><?php echo  $_SESSION["user"]["name"] ?></h3>
                    <p><?php echo $_SESSION["user"]["email"] ?></p>
        </div>
        <div class="col-xl-3">
            <div class="fs-title">social</div>
            <div class="row">
                <div class="col-xl-3">
                    <a href="https://www.facebook.com/laku6/" target="_blank"><i style="font-size:18px;" class="fa fa-facebook social-icons" aria-hidden="true"></i></a>
                </div>
    
                <div class="col-xl-3">
                    <a href="/contact-redirect/whatsapp" target="_blank"><i style="font-size:18px;" class="fa fa-whatsapp social-icons" aria-hidden="true"></i></a>
                </div>
    
                <div class="col-xl-3">
                    <a href="/contact-redirect/line" target="_blank"><img class="fs-social-icon-line" src="/images/5dfefa6.png" alt="Line"></a>
                </div>
                <div class="col-xl-3">
                    <a href="https://www.instagram.com/laku6.original/" target="_blank"><i style="font-size:18px;" class="fa fa-instagram social-icons" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </section>


</body>
</html>