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
      <a href="#" id="shopping-cart-button"><i data-feather="shopping-cart"></i></a>
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
      <h2>Your Cart</h2>
      <div class="cart-item">
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
      </div>
      <div class="container" style="border-top: 2px dashed #b6895b; border-bottom: 2px dashed #b6895b;">
        <div style="display: flex; gap: 5px; font-size: 1.5rem; font-weight: bold; tezt-align: center; justify-content: center; padding-top: 10px; padding-bottom: 10px;">
          <div class="">Total</div>
          <div class="">:</div>
          <div class="">Rp</div>
          <div class="">30. 000</div>
        </div>
      </div>
      
      <div class="container" style="text-align: right;">
      <button button class="checkout-button">Checkout</button>
      </div>

    <!-- Shopping Cart end -->

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
  <section class="products" id="products">
    <h2><span>Menu</span> Kami</h2>
    <p>Disini kami menyidiakan beberapa<br>menu yang bisa anda order</p>

    <div class="row">
      <div class="product-card" data-name="p-1">
        <div class="product-icons">
          <a href="#"><i data-feather="shopping-cart"></i></a>
          <a href="#" onclick="openModal('Paket A', 'Rp 10K')"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="images/paketa.jpeg" alt="Product 1" data-name="p-1">
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
          <div class="product-price">Rp 10K</div>
        </div>
      </div>
    
      <div class="product-card">
        <div class="product-icons">
          <a href="#"><i data-feather="shopping-cart"></i></a>
          <a href="#" data-name="p-2" onclick="openModal('Paket B', 'Rp 16K')"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="images/paketb.jpeg" alt="Product 1">
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
          <div class="product-price">Rp 16K</div>
        </div>
      </div>
      <div class="product-card" data-name="p-3">
        <div class="product-icons">
          <a href="#"><i data-feather="shopping-cart"></i></a>
          <a href="#" onclick="openModal('Paket C', 'Rp 40K')"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="images/paketc.jpeg" alt="Product 1">
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
          <div class="product-price">Rp 40K</div>
        </div>
      </div>
      <div class="product-card" data-name="p-4">
        <div class="product-icons">
          <a href="#"><i data-feather="shopping-cart"></i></a>
          <a href="#" onclick="openModal('Ayam Geprek', 'Rp 10K')"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="images/ayamgeprek1.jpeg" alt="Product 1">
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
          <div class="product-price">Rp 10K</div>
        </div>
      </div>
      <div class="product-card" data-name="p-5">
        <div class="product-icons">
          <a href="#"><i data-feather="shopping-cart"></i></a>
          <a href="#" onclick="openModal('Nugget Geprek', 'Rp 10K')"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="images/nuggetgeprek.jpeg" alt="Product 1">
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
          <div class="product-price">Rp 10K</div>
        </div>
      </div>
      <div class="product-card" data-name="p-6">
        <div class="product-icons">
          <a href="#"><i data-feather="shopping-cart"></i></a>
          <a href="#" onclick="openModal('Sushi Nasgor', 'Rp 10K')"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="images/nasgor.jpeg" alt="Product 1">
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
          <div class="product-price">Rp 10K</div>
        </div>
      </div>
      <div class="product-card" data-name="p-7">
        <div class="product-icons">
          <a href="#"><i data-feather="shopping-cart"></i></a>
          <a href="#" onclick="openModal('Kimbab Roll', 'Rp 10K')"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="images/ori.jpeg" alt="Product 1">
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
          <div class="product-price">Rp 10K</div>
        </div>
      </div>
      <div class="product-card" data-name="p-8">
        <div class="product-icons">
          <a href="#"><i data-feather="shopping-cart"></i></a>
          <a href="#" onclick="openModal('Crispy Roll', 'Rp 10K')"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="images/crispy1.jpeg" alt="Product 1">
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
          <div class="product-price">Rp 10K</div>
        </div>
      </div>
      <div class="product-card" data-name="p-9">
        <div class="product-icons">
          <a href="#"><i data-feather="shopping-cart"></i></a>
          <a href="#" onclick="openModal('Mix Ori', 'Rp 10K')"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="images/mixori.jpeg" alt="Product 1">
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
          <div class="product-price">Rp 10K</div>
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
   <div class="preview" data-target="p-1">
      <i class="fas fa-times close-modal"></i>
      <img src="images/paketa.jpeg" alt="">

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
          <a href="#" class="cart">add to cart</a>
        </div>
      </div>        
   </div>

   <div class="products-preview">
    <div class="preview" data-target="p-2">
      <i class="fas fa-times close-modal"></i>
      <img src="images/paketa.jpeg" alt="">

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
          <a href="#" class="cart">add to cart</a>
        </div>
      </div>        
   </div>

   <div class="products-preview">
    <div class="preview" data-target="p-3">
      <i class="fas fa-times close-modal"></i>
      <img src="images/paketa.jpeg" alt="">

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
    <div class="preview" data-target="p-4">
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
    <div class="preview" data-target="p-5">
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
    <div class="preview" data-target="p-6">
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
    <div class="preview" data-target="p-7">
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
    <div class="preview" data-target="p-8">
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
      <div class="preview" data-target="p-9">
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
// previewBox.forEach(close =>{
//   close.querySelector('.fa-times').onclick = () =>{
//     close.classList.remove('active');
//     previewContainer.style.display = 'none';
//   };
// });

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