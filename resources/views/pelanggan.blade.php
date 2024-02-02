<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Sushi Time Pandaan</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
    rel="stylesheet">

  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- AOS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- My Style -->
  <link href="{{ asset('assets/pelanggan.css') }}" rel="stylesheet"/>

  <!-- cdnjs -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

  <!-- Navbar start -->
  <nav class="navbar"  data-aos="fade-down" data-aos-duration="1000">
    <a href="#" class="navbar-logo">sushi<span>time</span>.</a>

    <div class="navbar-nav">
      <a href="#home">Home</a>
      <a href="#about">Tentang</a>
      <a href="#products">Menu</a>
      <a href="#contact">Kontak</a>
      <!-- <a href="/logout">Logout</a> -->
    </div>

    <div class="navbar-extra" style="margin-right: -5rem;">
      <a href="#" id="search-button"><i data-feather="search"></i></a>
      <a href="#" id="shopping-cart-button">
        <i data-feather="shopping-cart">
        <span class="cart-counter" style="font-size: 20rem;">0</span></i></a>
      <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      <a href="/logout" id="log-out"><i data-feather="log-out"></i></a>
    </div>

    <!-- Search Form start -->
    <div class="search-form">
      <input type="search" id="search-box" placeholder="search here...">
      <label for="search-box"><i data-feather="search"></i></label>
      
    </div>
    <!-- Search Form end -->

    <!-- Shopping Cart start -->
    <div class="shopping-cart">
      <h2 class="yahayuik">Your Cart</h2>
      <!-- <div class="cart-item">
        <img src="images/paketa.jpeg" alt="Product 1">
        <div class="item-detail">
          <h3>Paket A</h3>
          <div class="item-price">
            <span>Rp 10.000</span> &times;
            <button id="remove" style="display: inline-block; padding: 2px 5px; cursor: pointer; margin: 0 8px; background-color: white; color: black; font-weight: bold; font-size: 1.1rem;">&minus;</button>
            <span>3</span>
            <button id="add" style="display: inline-block; padding: 2px 5px; cursor: pointer; margin: 0 8px; background-color: white; color: black; font-weight: bold; font-size: 1.1rem;">&plus;</button> &equals;
            <span>Rp 30.000</span>
          </div>
        </div>
        <i data-feather="trash-2" class="remove-item"></i>
      </div> -->
      <div class="container" id="shopping_cart"></div>

      <div class="container" style="border-top: 2px dashed #b6895b; border-bottom: 2px dashed #b6895b;">
        <div style="display: flex; gap: 5px; font-size: 1.5rem; font-weight: bold; tezt-align: center; justify-content: center; padding-top: 10px; padding-bottom: 10px;">
          <div class="">Total</div>
          <div class="">:</div>
          <div class="">Rp</div>
          <div class="total_semua">0</div>
        </div>
      </div>
      <form action="/submit_form" method="post" style="width: 370px; margin: 10px auto;">
          <label for="message" style="display: inline-block; margin-bottom: 5px; font-size: 15px;">Catatan :</label>
          <textarea id="message" name="message" style="width: calc(100% - 0px); padding: 10px; margin-top: 5px; display: inline-block;"></textarea>
      </form>
      
      <div class="container" style="text-align: right;">
      <button button class="checkout-button">Checkout</button>
      </div>

    <!-- Shopping Cart end -->
</div>
  </nav>
  <!-- Navbar end -->

  <!-- Hero Section start -->
  <section class="hero" id="home">
    <main class="content">
      <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Mari Nikmati Sushi Setiap Hari</h1>
      <a href="https://www.instagram.com/sushiii.time/" class="cta" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">Kunjungi</a>
    </main>
  </section>
  <!-- Hero Section end -->

  <!-- About Section start -->
  
  <section id="about" class="about">
    <h2><span>Tentang</span> Kami</h2>

    <div class="row">
      <div class="about-img">
        <img src="images/baground2.jpeg"  alt="Tentang Kami">
      </div>
      <div class="content">
        <h3>Kenapa memilih sushi kami?</h3>
        <p>Karena sushi di toko kami kualitas produknya bagus dan tidak kalah sama produk sushi diluaran sana. Harga sushi di toko kami juga terjangkau banget, dengan harga 10 ribu anda bisa merasakan sushi yang sangat lezat dan pastinya bikin anda ketagihan untuk membelinya lagi.</p>
        <p>Ditoko kami menyediakan banyak varian sushi yang pastinya bikin anda pingin mencobanya. Kami ready stock setiap sore hari mulai pukul 15.30-21.00 ( sampai habis ). Dan kalau anda pingin membeli sushi tanpa harus keluar rumah, sushiii.time menyediakan DO di shopee food, grab food dan gofood.</p>
      </div>
    </div>
  </section>
  <!-- About Section end -->
  
  <!-- Products Section start -->
  <section class="products" id="products" x-data="products">
    <h2><span>Menu</span> Kami</h2>
    <p>Disini kami menyidiakan beberapa<br>menu yang bisa anda order</p>

    <div class="row">
      <div class="product-card">
        <div class="product-icons" >
          <a href="javascript:void(0)" onclick="addToCart('Paket A',10000)"><i data-feather="shopping-cart"></i></a>
          <a href="#" onclick="openModal('Paket A', 'Rp 10K')">
          <i data-feather="eye"></i></a>
        </div>
        <div class="" id="p-1">
          <div class="product-image">
            <img src="images/paket a.jpeg" alt="Product 1" data-name="p-1">
          </div>
          <div class="product-content">
            <h3>Paket A</h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
            </div>
            <div class="product-price">Rp 10.000</div>
          </div>
        </div>
      </div>
    
      <div class="product-card">
        <div class="product-icons" >
          <a href="javascript:void(0)" onclick="addToCart('Paket B',16000)"><i data-feather="shopping-cart"></i></a>
          <a href="#" onclick="openModal('Paket B', 'Rp 16K')">
          <i data-feather="eye"></i></a>
        </div>
        <div class="" id="p-2">
          <div class="product-image">
            <img src="images/paket b.jpeg" alt="Product 1" data-name="p-2">
          </div>
          <div class="product-content">
            <h3>Paket B</h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
            </div>
            <div class="product-price">Rp 16.000</div>
          </div>
        </div>
      </div>
      <div class="product-card">
        <div class="product-icons" >
          <a href="javascript:void(0)" onclick="addToCart('Paket C',40000)"><i data-feather="shopping-cart"></i></a>
          <a href="#" onclick="openModal('Paket C', 'Rp 40K')">
          <i data-feather="eye"></i></a>
        </div>
        <div class="" id="p-3">
          <div class="product-image">
            <img src="images/paket c.jpeg" alt="Product 1" data-name="p-3">
          </div>
          <div class="product-content">
            <h3>Paket C</h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
            </div>
            <div class="product-price">Rp 40.000</div>
          </div>
        </div>
      </div>
      <div class="product-card">
        <div class="product-icons" >
          <a href="javascript:void(0)" onclick="addToCart('Ayam Geprek',10000)"><i data-feather="shopping-cart"></i></a>
          <a href="#" onclick="openModal('Ayam Geprek', 'Rp 10K')">
          <i data-feather="eye"></i></a>
        </div>
        <div class="" id="p-4">
          <div class="product-image">
            <img src="images/ayam geprek.jpeg" alt="Product 1" data-name="p-4">
          </div>
          <div class="product-content">
            <h3>Ayam Geprek</h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
            </div>
            <div class="product-price">Rp 10.000</div>
          </div>
        </div>
      </div>
      <div class="product-card">
        <div class="product-icons" >
          <a href="javascript:void(0)" onclick="addToCart('Nugget Geprek',10000)"><i data-feather="shopping-cart"></i></a>
          <a href="#" onclick="openModal('Nugget Geprek', 'Rp 10K')">
          <i data-feather="eye"></i></a>
        </div>
        <div class="" id="p-5">
          <div class="product-image">
            <img src="images/nugget geprek.jpeg" alt="Product 1" data-name="p-5">
          </div>
          <div class="product-content">
            <h3>Nugget Geprek</h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
            </div>
            <div class="product-price">Rp 10.000</div>
          </div>
        </div>
      </div>
      <div class="product-card">
        <div class="product-icons" >
          <a href="javascript:void(0)" onclick="addToCart('Sushi Nasgor',10000)"><i data-feather="shopping-cart"></i></a>
          <a href="#" onclick="openModal('Sushi Nasgor', 'Rp 10K')">
          <i data-feather="eye"></i></a>
        </div>
        <div class="" id="p-6">
          <div class="product-image">
            <img src="images/sushi nasgor.jpeg" alt="Product 1" data-name="p-6">
          </div>
          <div class="product-content">
            <h3>Sushi Nasgor</h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
            </div>
            <div class="product-price">Rp 10.000</div>
          </div>
        </div>
      </div>
      <div class="product-card">
        <div class="product-icons" >
          <a href="javascript:void(0)" onclick="addToCart('Kimbab Roll',10000)"><i data-feather="shopping-cart"></i></a>
          <a href="#" onclick="openModal('Kimbab Roll', 'Rp 10K')">
          <i data-feather="eye"></i></a>
        </div>
        <div class="" id="p-7">
          <div class="product-image">
            <img src="images/kimbab roll.jpeg" alt="Product 1" data-name="p-7">
          </div>
          <div class="product-content">
            <h3>Kimbab Roll</h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
            </div>
            <div class="product-price">Rp 10.000</div>
          </div>
        </div>
      </div>
      <div class="product-card">
        <div class="product-icons" >
          <a href="javascript:void(0)" onclick="addToCart('Crispy Roll',10000)"><i data-feather="shopping-cart"></i></a>
          <a href="#" onclick="openModal('Crispy Roll', 'Rp 10K')">
          <i data-feather="eye"></i></a>
        </div>
        <div class="" id="p-8">
          <div class="product-image">
            <img src="images/crispy roll.jpeg" alt="Product 1" data-name="p-8">
          </div>
          <div class="product-content">
            <h3>Crispy Roll</h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
            </div>
            <div class="product-price">Rp 10.000</div>
          </div>
        </div>
      </div>
      <div class="product-card">
        <div class="product-icons" >
          <a href="javascript:void(0)" onclick="addToCart('Mix Ori',10000)"><i data-feather="shopping-cart"></i></a>
          <a href="#" onclick="openModal('Mix Ori', 'Rp 10K')">
          <i data-feather="eye"></i></a>
        </div>
        <div class="" id="p-9">
          <div class="product-image">
            <img src="images/mix ori.jpeg" alt="Product 1" data-name="p-9">
          </div>
          <div class="product-content">
            <h3>Mix Ori</h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
            </div>
            <div class="product-price">Rp 10.000</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Products Section end -->

  <!-- Contact Section start -->
  <section id="contact" class="contact">
    <h2><span>Kontak</span> Kami</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, provident.</p>

    <div class="row">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.2825668281444!2d112.697299!3d-7.6527355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7d96d70230d35%3A0xe24f2a52a9d4262d!2sduta%20vespa!5e0!3m2!1sid!2sid!4v1686709703313!5m2!1sid!2sid" width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      <form action="">
        <div class="input-group">
          <i data-feather="user"></i>
          <input type="text" placeholder="nama">
        </div>
        <div class="input-group">
          <i data-feather="mail"></i>
          <input type="text" placeholder="email">
        </div>
        <div class="input-group">
          <i data-feather="send"></i>
          <input type="text" placeholder="pesan">
        </div>
        <button type="submit" class="btn" >kirim pesan</button>

      </form>

    </div>
  </section>
  <!-- Contact Section end -->

  <!-- Footer start -->
  <div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>Endorse</h4>
                <ul>
                    <li><a href="https://www.instagram.com/pandaan.id/">pandaan.id</a></li>
                    <li><a href="https://www.instagram.com/jakulpandaan/">jakulpandaan</a></li>
                    <li><a href="https://www.instagram.com/hunting1menit/">hunting1menit</a></li>
                    <li><a href="https://www.instagram.com/infokulinerpandaan/">infokulinerpandaan</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Kategori Tulisan</h4>
                <ul>
                    <li><a href="#">Sushi</a></li>
                    <li><a href="#">Kuliner</a></li>
                    <li><a href="#">Siap Saji</a></li>
                    <li><a href="#">Gaya Hidup</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Tautan</h4>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#products">Menu</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Follow Us</h4>
                <div class="social-link">
                    <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="https://www.instagram.com/sushiii.time/"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                </div>
                <div class="credit">
                  <p>Created by <a href="https://www.instagram.com/sushiii.time/">sushiii.time</a>. | &copy; 2023.</p>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- Footer end -->

 <!-- Modal start -->
  <div class="products-preview">
   <div class="preview" data-target="#p-1">
      <i class="fas fa-times close-modal"></i>
      <img src="images/paket a.jpeg" alt="">

      <div class="" style="padding-top: 1.3rem;">
        <h3>Paket A</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
        <div class="price">Rp 10,000</div>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <!-- <i class="fas fa-star-half-alt"></i> -->
          <span>( 250 )</span>
        </div>
        <div class="buttons"> 
          <a href="javascript:void(0)" onclick="addToCart('Paket A',10000)" style="color: #ffffff; background: #b6895b; border: 0.1rem solid #b6895b;">add to cart</a>
        </div>
      </div>        
   </div>

   <div class="products-preview">
    <div class="preview" data-target="#p-2">
      <i class="fas fa-times close-modal"></i>
      <img src="images/paket b.jpeg" alt="">

      <div class="" style="padding-top: 1.3rem;">
        <h3>Paket B</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
        <div class="price">Rp 16,000</div>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <!-- <i class="fas fa-star-half-alt"></i> -->
          <span>( 250 )</span>
        </div>
        <div class="buttons"> 
          <a href="#" class="cart" >add to cart</a>
        </div>
      </div>        
   </div>

   <div class="products-preview">
    <div class="preview" data-target="#p-3">
      <i class="fas fa-times close-modal"></i>
      <img src="images/paket C.jpeg" alt="">

      <div class="" style="padding-top: 1.3rem;">
        <h3>Paket C</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
        <div class="price">Rp 40,000</div>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <!-- <i class="fas fa-star-half-alt"></i> -->
          <span>( 250 )</span>
        </div>
        <div class="buttons"> 
          <a href="#" class="cart">add to cart</a>
        </div>
      </div>        
   </div>

   <div class="products-preview">
    <div class="preview" data-target="#p-4">
      <i class="fas fa-times close-modal"></i>
      <img src="images/paketa.jpeg" alt="">

      <div class="" style="padding-top: 1.3rem;">
        <h3>Ayam Geprek</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
        <div class="price">Rp 10,000</div>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <!-- <i class="fas fa-star-half-alt"></i> -->
          <span>( 250 )</span>
        </div>
        <div class="buttons"> 
          <a href="#" class="cart">add to cart</a>
        </div>
      </div>        
   </div>

   <div class="products-preview">
    <div class="preview" data-target="#p-5">
      <i class="fas fa-times close-modal"></i>
      <img src="images/paketa.jpeg" alt="">

      <div class="" style="padding-top: 1.3rem;">
        <h3>Nugget Geprek</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
        <div class="price">Rp 10,000</div>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <!-- <i class="fas fa-star-half-alt"></i> -->
          <span>( 250 )</span>
        </div>
        <div class="buttons"> 
          <a href="#" class="cart">add to cart</a>
        </div>
      </div>        
   </div>

   <div class="products-preview">
    <div class="preview" data-target="#p-6">
      <i class="fas fa-times close-modal"></i>
      <img src="images/paketa.jpeg" alt="">

      <div class="" style="padding-top: 1.3rem;">
        <h3>Sushi Nasgor</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
        <div class="price">Rp 10,000</div>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <!-- <i class="fas fa-star-half-alt"></i> -->
          <span>( 250 )</span>
        </div>
        <div class="buttons"> 
          <a href="#" class="cart">add to cart</a>
        </div>
      </div>        
   </div>

   <div class="products-preview">
    <div class="preview" data-target="#p-7">
      <i class="fas fa-times close-modal"></i>
      <img src="images/paketa.jpeg" alt="">

      <div class="" style="padding-top: 1.3rem;">
        <h3>Kimbab Roll</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
        <div class="price">Rp 10,000</div>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <!-- <i class="fas fa-star-half-alt"></i> -->
          <span>( 250 )</span>
        </div>
        <div class="buttons"> 
          <a href="#" class="cart">add to cart</a>
        </div>
      </div>        
   </div>

   <div class="products-preview">
    <div class="preview" data-target="#p-8">
      <i class="fas fa-times close-modal"></i>
      <img src="images/paketa.jpeg" alt="">

      <div class="" style="padding-top: 1.3rem;">
        <h3>Crispy Roll</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
        <div class="price">Rp 10,000</div>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <!-- <i class="fas fa-star-half-alt"></i> -->
          <span>( 250 )</span>
        </div>
        <div class="buttons"> 
          <a href="#" class="cart">add to cart</a>
        </div>
      </div>  
      
  <div class="products-preview">
    <div class="preview" data-target="p#-9">
      <i class="fas fa-times close-modal"></i>
      <img src="images/paketa.jpeg" alt="">

      <div class="" style="padding-top: 1.3rem;">
        <h3>Mix Ori</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
        <div class="price">Rp 10,000</div>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <!-- <i class="fas fa-star-half-alt"></i> -->
          <span>( 250 )</span>
        </div>
        <div class="buttons"> 
          <a href="#" class="cart">add to cart</a>
        </div>
      </div>        
    </div>
  </div>
</div>
<!-- Modal end -->

<script>
    function updateQuantity(change, buttonElement) {
      // Get the closest parent with the class 'cart-item'
      const cartItem = buttonElement.closest('.cart-item');

      // Find the quantity input inside the cart-item
      const quantityInput = cartItem.querySelector('.quantity-input input');

      // Ensure that both the cart item and quantity input are found
      if (!cartItem || !quantityInput) {
        console.error('Error: Unable to find necessary elements.');
        return;
      }

      // Get the current quantity value
      let quantity = parseInt(quantityInput.value);

      // Ensure the quantity is not less than 1 when decreasing
      if (change === -1 && quantity === 1) {
        return;
      }

      // Update the quantity
      quantity += change;

      // Set the new quantity value
      quantityInput.value = quantity;

      // Update subtotal
      const itemPriceElement = cartItem.querySelector('.item-price span');
      const subtotalElement = cartItem.querySelector('.subtotal');

      // Ensure that both the item price and subtotal elements are found
      if (!itemPriceElement || !subtotalElement) {
        console.error('Error: Unable to find necessary elements for subtotal update.');
        return;
      }

      // Extract the numeric part of the item price text using a regular expression
      const itemPriceText = itemPriceElement.textContent.trim();
      const itemPriceMatch = itemPriceText.match(/\d+(\.\d+)?/);

      // Check if itemPriceMatch is a valid array with at least one element
      if (!itemPriceMatch || itemPriceMatch.length < 1) {
        console.error('Error: Invalid item price format. Text content:', itemPriceText);
        return;
      }

      // Convert the matched value to a number
      const itemPrice = parseFloat(itemPriceMatch[0]);

      // Check if itemPrice is a valid number
      if (isNaN(itemPrice)) {
        console.error('Error: Invalid item price. Text content:', itemPriceText);
        return;
      }

      const subtotal = quantity * itemPrice;

      // Check if subtotal is a valid number
      if (isNaN(subtotal)) {
        console.error('Error: Subtotal calculation resulted in NaN.');
        return;
      }

      // Format subtotal as currency (Rp)
      const formattedSubtotal = formatCurrency(subtotal);

      subtotalElement.textContent = formattedSubtotal;

      // Optional: Update other styles or perform additional actions
      const removeItemIcon = cartItem.querySelector('.remove-item');
      if (removeItemIcon) {
        removeItemIcon.style.color = 'red'; // Example: Change color to red
      }

      // Update the total 
      updateTotal(); 
    }

    // Function to format number as currency (Rp)
    function formatCurrency(number) {
      const formatter = new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 3
      });

      return formatter.format(number).replace(/(\.000)$/, ''); // Remove decimal places if .000
    }

    function updateTotal() {
      // Get all cart items
      const cartItems = document.querySelectorAll('.cart-item');

      // Initialize total
      let total = 0;

      // Iterate through each cart item
      cartItems.forEach(cartItem => {
        // Find the subtotal element inside the cart item
        const subtotalElement = cartItem.querySelector('.subtotal');

        // Ensure subtotal element is found
        if (subtotalElement) {
          // Extract the numeric part of the subtotal text using a regular expression
          const subtotalText = subtotalElement.textContent.trim();
          const subtotalMatch = subtotalText.match(/\d+(\.\d+)?/);

          // Check if subtotalMatch is a valid array with at least one element
          if (subtotalMatch && subtotalMatch.length >= 1) {
            // Convert the matched value to a number and add to the total
            total += parseFloat(subtotalMatch[0]);
          }
        }
      });

      // Format total as currency (Rp) with three decimal places
      const formattedTotal = formatCurrency(total);

      // Update the content of the "Total" section
      const totalSemuaElement = document.querySelector('.total_semua');
      if (totalSemuaElement) {
        totalSemuaElement.textContent = ` ${formattedTotal}`;
      }
    }
</script>

<script>
  let previewContainer = document.querySelector('.products-preview');
  let previewBox = previewContainer.querySelector('.products-preview .preview');
  let btnCloseModal = document.querySelector('.products-preview .preview .close-modal');

// document.querySelectorAll('.products-container .product').forEach(product =>{
//   product.onclick = () =>{
//     preveiwContainer.style.display = 'flex';
//     previewBox.style.display = 'flex';
//     let name = product.getAttribute('data-name');
//     previewBox.forEach(preview =>{
//       let target = preview.getAttribute('data-target');
//       if(name == target){
//         preview.classList.add('active');
//       }
//     });
//   };
// });

  // Membuat elemen untuk item di keranjang belanja
//   function createCartItem(productName, productPrice) {
//     const cartItem = document.createElement('div');
//     cartItem.classList.add('cart-item');
//     cartItem.innerHTML = `
//       <img src="images/${productName}.jpeg" alt="${productName}">
//       <div class="item-detail">
//         <h3>${productName}</h3>
//         <div class="item-price">
//           <span>${productPrice}</span> &times;
//           <button class="quantity-btn" onclick="updateQuantity(-1, this)" >-</button>
//           <div class="input-group quantity-input">
//             <input type="number" class="form-control" placeholder="Qty" value="1" onchange="updateQuantity(0, this)">
//             <div class="input-group-append">
//               <button class="quantity-btn" onclick="updateQuantity(1, this)">+</button>
//             </div>
//           </div>
//           &equals;
//           <span class="subtotal">${productPrice}</span>
//         </div>
//       </div>
//       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16" class="remove-item" onclick="removeCartItem(this)">
//         <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
//         <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
//       </svg>
//     `;
    
//   // Mengambil referensi ke elemen shopping cart
//   const shoppingCart = document.getElementById('shopping_cart');

//   // Menambahkan item keranjang ke keranjang belanja
//   shoppingCart.appendChild(cartItem);

      
//   previewContainer.style.display = 'none';
//   previewBox.style.display = 'none';
// }


 
  function updateCartItemTotal(element) {
    const cartItem = element.closest('.cart-item');
    const itemPriceElement = cartItem.querySelector('.item-price span');
    const quantityElement = cartItem.querySelector('.item-price span:nth-child(3)');
    const totalPriceElement = cartItem.querySelector('.item-price span:last-child');

    const productPrice = parseFloat(itemPriceElement.innerText.replace('Rp', '').replace('K', ''));
    const quantity = parseInt(quantityElement.innerText, 10);
    const totalPrice = productPrice * quantity;

    // Menetapkan kembali total harga item di keranjang belanja
    totalPriceElement.innerText = `Rp ${totalPrice.toFixed(3)}K`;
  }
  function addToCart(productName, productPrice) {
  const shoppingCart = document.getElementById('shopping_cart');

  if (isItemInCart(productName)) {
    alert('Item is already in the cart!');
  } else {
    // If not in the cart, add it
    const cartItem = createCartItem(productName, productPrice);
    shoppingCart.appendChild(cartItem);

    // Update cart counter
    updateCartCounter();
  }
}

function createCartItem(productName, productPrice) {
  const cartItem = document.createElement('div');
  cartItem.classList.add('cart-item');
  cartItem.innerHTML = `
    <img src="images/${productName}.jpeg" alt="${productName}">
    <div class="item-detail">
      <h3>${productName}</h3>
      <div class="item-price" style="display: flex; gap: 5px;">
        <span>${productPrice}</span> &times;
        
        <div class="input-group quantity-input">
          <input type="number" class="form-control" placeholder="Qty" value="1" onchange="updateQuantity(0, this)">
          
        </div>
        &equals;
        <span class="subtotal"id="subtotal">${productPrice}</span>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16" class="remove-item" onclick="removeCartItem(this)">
      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
      <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
    </svg>
  `;

  // Mengambil referensi ke elemen shopping cart
  const shoppingCart = document.getElementById('shopping_cart');

  // Menambahkan item keranjang ke keranjang belanja
  shoppingCart.appendChild(cartItem);

  previewContainer.style.display = 'none';
   previewBox.style.display = 'none';

  // If you have logic for hiding preview elements, add it here
}
const subtotalElement = document.getElementById('subtotal');

function updateQuantity(change, buttonElement, productPrice, subtotalElement) {
  const cartItem = buttonElement.closest('.cart-item');
  const quantityInput = cartItem.querySelector('.quantity-input input');

  // Ensure that both the cart item and quantity input are found
  if (!cartItem || !quantityInput || !subtotalElement) {
    console.error('Error: Unable to find necessary elements.');
    return;
  }

  // Get the current quantity value
  let quantity = parseInt(quantityInput.value);

  // Ensure the quantity is not less than 1 when decreasing
  if (change === -1 && quantity === 1) {
    return;
  }

  // Update the quantity
  quantity += change;

  // Set the new quantity value
  quantityInput.value = quantity;

  // Update subtotal
  const subtotal = productPrice * quantity;

  // Format subtotal sebagai mata uang (Rp)
  const formattedSubtotal = formatCurrency(subtotal);

  // Set nilai subtotal dalam format yang diinginkan
  subtotalElement.textContent = formattedSubtotal;

  // Opsional: Perbarui gaya atau lakukan tindakan tambahan lainnya
  const removeItemIcon = cartItem.querySelector('.remove-item');
  if (removeItemIcon) {
    removeItemIcon.style.color = 'red'; // Contoh: Mengubah warna menjadi merah
  }

  // Perbarui total
  updateTotal();

  console.log(formattedSubtotal);
}


  function removeCartItem(element) {
    const cartItem = element.closest('.cart-item');
    cartItem.remove();

    // Update cart counter
    updateCartCounter();
  }

  function updateCartCounter() {
    const cartCounter = document.querySelector('.cart-counter');
    const cartItems = document.querySelectorAll('.cart-item');
    cartCounter.innerText = cartItems.length;
  }


  function isItemInCart(productName) {
    const cartItems = document.querySelectorAll('.cart-item h3');
    for (const item of cartItems) {
      if (item.innerText === productName) {
          return true; // Item is in the cart
      }
    }



    return false; // Item is not in the cart
  }
 

function openModal(productName, productPrice) {
  previewContainer.style.display = 'flex';
  previewBox.style.display = 'flex';
  // let name = product.getAttribute('data-name');
  //   previewBox.forEach(preview =>{
  //     let target = preview.getAttribute('data-target');
  //     if(name == target){
  //       preview.classList.add('active');
  //     }
  //   });
}

btnCloseModal.addEventListener("click", function(){
  previewContainer.style.display = 'none';
}) 



</script>

<script>
 
  // Get all product cards
 // const productCards = document.querySelectorAll('.product-card');

  // Get the modal container
  const modalContainer = document.querySelector('.products-preview');

  // Iterate through each product card and add a click event listener
  productCards.forEach(productCard => {
    productCard.addEventListener('click', () => {
      // Clone the product card and append it to the modal container
      const modalContent = cloneProductCard(productCard);
      modalContainer.innerHTML = ''; // Clear previous content
      modalContainer.appendChild(modalContent);

      // Show the modal
      modalContainer.style.display = 'flex';
    });
  });

  // Close modal when clicking the close button or outside the modal content
  modalContainer.addEventListener('click', (event) => {
    if (event.target.classList.contains('close-modal') || event.target === modalContainer) {
      modalContainer.style.display = 'none';
    }
  });

  // Function to clone a product card
  function cloneProductCard(originalCard) {
    const clonedCard = document.createElement('div');
    clonedCard.className = originalCard.className; // Copy classes
    clonedCard.innerHTML = originalCard.innerHTML; // Copy HTML content
    return clonedCard;
  }
</script>

<script>
// Menunggu DOM selesai dimuat
document.addEventListener("DOMContentLoaded", function () {
  
  // Mendapatkan semua kartu produk
  // const productCards = document.querySelectorAll('.product-card');
  
  // Mendapatkan elemen keranjang belanja
  const shoppingCart = document.getElementById('shopping_cart');

  // Iterasi melalui setiap kartu produk dan menambahkan penanganan acara klik
  productCards.forEach(productCard => {
    // Mendapatkan nama dan harga produk dari setiap kartu
    const productName = productCard.querySelector('.product-content h3').innerText;
    const productPrice = productCard.querySelector('.product-price').innerText;

    // Menambahkan penanganan acara klik
    productCard.addEventListener('click', (event) => {
      event.preventDefault();
      // Menambahkan produk ke keranjang belanja
      addToCart(productName, productPrice);
    });
  });
  // Fungsi untuk menambahkan produk ke keranjang belanja
 

  // Fungsi untuk menghapus item dari keranjang belanja
  window.removeCartItem = function (element) {
    const cartItem = element.closest('.cart-item');
    cartItem.remove();
  };

  // Fungsi untuk menambah jumlah item di keranjang belanja
  window.addCartItem = function (element) {
    const quantityElement = element.parentElement.querySelector('span');
    const quantity = parseInt(quantityElement.innerText, 10);
    quantityElement.innerText = quantity + 1;

    // Memperbarui total harga item di keranjang belanja
    updateCartItemTotal(element);
  };

  // Fungsi untuk mengurangi jumlah item di keranjang belanja
  window.removeCartItem = function (element) {
    const quantityElement = element.parentElement.querySelector('span');
    const quantity = parseInt(quantityElement.innerText, 10);

    if (quantity > 1) {
      quantityElement.innerText = quantity - 1;
      // Memperbarui total harga item di keranjang belanja
      updateCartItemTotal(element);
    } else {
      // Jika jumlahnya 1, hapus item keranjang
      const cartItem = element.closest('.cart-item');
      cartItem.remove();
    }
  };

  // Fungsi untuk memperbarui total harga item di keranjang belanja
  
});
</script>

  <!-- Feather Icons -->
  <script>
    feather.replace()
  </script>

  <!-- AOS -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <!-- My Javascript -->
  <script src="{{ asset('assets/js/pelanggan.js') }}"></script>
</body>

</html>