@extends('kasir.master_kasir')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<!-- <div class="container-fluid" style="height: 575px; overflow-y: auto;"> -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">No Meja</h1>
    </div>
        <div class="container" style="font-family: Arial, sans-serif; margin-bottom: 20px; display: flex; gap: 18px;">
            <span class="number" style="display: inline-block; width: 45px; height: 55px; background-color: #b6895b; color: white; margin: 0 5px; border-radius: 5px; font-size: 25px; padding: 0.5rem; box-shadow: 5px 5px 3px rgba(0, 0, 0, 0.2);" >13</span>
            <span class="number" style="display: inline-block; width: 45px; height: 55px; background-color: #b6895b; color: white; margin: 0 5px; border-radius: 5px; font-size: 25px; padding: 0.5rem; box-shadow: 5px 5px 3px rgba(0, 0, 0, 0.2);" >13</span>
            <span class="number" style="display: inline-block; width: 45px; height: 55px; background-color: #b6895b; color: white; margin: 0 5px; border-radius: 5px; font-size: 25px; padding: 0.5rem; box-shadow: 5px 5px 3px rgba(0, 0, 0, 0.2);" >13</span>
            <span class="number" style="display: inline-block; width: 45px; height: 55px; background-color: #b6895b; color: white; margin: 0 5px; border-radius: 5px; font-size: 25px; padding: 0.5rem; box-shadow: 5px 5px 3px rgba(0, 0, 0, 0.2);" >13</span>
            <span class="number" style="display: inline-block; width: 45px; height: 55px; background-color: #b6895b; color: white; margin: 0 5px; border-radius: 5px; font-size: 25px; padding: 0.5rem; box-shadow: 5px 5px 3px rgba(0, 0, 0, 0.2);" >13</span>
            <span class="number" style="display: inline-block; width: 45px; height: 55px; background-color: #b6895b; color: white; margin: 0 5px; border-radius: 5px; font-size: 25px; padding: 0.5rem; box-shadow: 5px 5px 3px rgba(0, 0, 0, 0.2);" >13</span>
            <span class="number" style="display: inline-block; width: 45px; height: 55px; background-color: #b6895b; color: white; margin: 0 5px; border-radius: 5px; font-size: 25px; padding: 0.5rem; box-shadow: 5px 5px 3px rgba(0, 0, 0, 0.2);" >13</span>
            <span class="number" style="display: inline-block; width: 45px; height: 55px; background-color: #b6895b; color: white; margin: 0 5px; border-radius: 5px; font-size: 25px; padding: 0.5rem; box-shadow: 5px 5px 3px rgba(0, 0, 0, 0.2);" >13</span>
            <span class="number" style="display: inline-block; width: 45px; height: 55px; background-color: #b6895b; color: white; margin: 0 5px; border-radius: 5px; font-size: 25px; padding: 0.5rem; box-shadow: 5px 5px 3px rgba(0, 0, 0, 0.2);" >13</span>
            <span class="number" style="display: inline-block; width: 45px; height: 55px; background-color: #b6895b; color: white; margin: 0 5px; border-radius: 5px; font-size: 25px; padding: 0.5rem; box-shadow: 5px 5px 3px rgba(0, 0, 0, 0.2);" >13</span>
            <span class="number" style="display: inline-block; width: 45px; height: 55px; background-color: #b6895b; color: white; margin: 0 5px; border-radius: 5px; font-size: 25px; padding: 0.5rem; box-shadow: 5px 5px 3px rgba(0, 0, 0, 0.2);" >13</span>
        </div>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pesanan</h1>
    </div>
    <div class="row">
        <div class="col-lg-4">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <span class="m-0 font-weight-bold text-primary">Seffty</span>
                        <div class="vertical-line mx-1"></div> <!-- Garis vertikal di sini -->
                        <span class="m-0 font-weight-bold">01</span> <!-- Ganti 123 dengan nomor meja yang sesuai -->
                    </div>
                        <span id="clock" class="ml-5">08.00 11-01-2024</span> 
                        
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#paymentModal">Detail</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Hapus</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="menu-items" style="display: flex; justify-content: space-between">
                            <div class="left-column" style="width: 48%;">
                                <strong>Makanan:</strong>
                                <ul>
                                    <li>Paket A: 1</li>
                                    <li>Paket B: 2</li>
                                    <li>PaketC: 3</li>
                                    <!-- Tambahkan lebih banyak pesanan makanan jika diperlukan -->
                                </ul>
                            </div>
                            <div class="right-column" style="width: 48%;">
                                <strong>Minuman:</strong>
                                <ul>
                                    <li>Es teh: 2</li>
                                    <li>Jus jeruk: 1</li>
                                    <li>Air mineral: 3</li>
                                    <!-- Tambahkan lebih banyak pesanan minuman jika diperlukan -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <span class="m-0 font-weight-bold text-primary">Seffty</span>
                        <span id="clock" class="ml-5">08.00 11-01-2024</span>
                        
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Pembayaran</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Selesai</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="menu-items" style="display: flex; justify-content: space-between">
                            <div class="left-column" style="width: 48%;">
                                <strong>Makanan:</strong>
                                <ul>
                                    <li>Pecel lele: 1</li>
                                    <li>Ayam bakar: 2</li>
                                    <li>Sate: 3</li>
                                    <!-- Tambahkan lebih banyak pesanan makanan jika diperlukan -->
                                </ul>
                            </div>
                            <div class="right-column" style="width: 48%;">
                                <strong>Minuman:</strong>
                                <ul>
                                    <li>Es teh: 2</li>
                                    <li>Jus jeruk: 1</li>
                                    <li>Air mineral: 3</li>
                                    <!-- Tambahkan lebih banyak pesanan minuman jika diperlukan -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <span class="m-0 font-weight-bold text-primary">Seffty</span>
                        <span id="clock" class="ml-5">08.00 11-01-2024</span>
                        
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Pembayaran</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Selesai</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="menu-items" style="display: flex; justify-content: space-between">
                            <div class="left-column" style="width: 48%;">
                                <strong>Makanan:</strong>
                                <ul>
                                    <li>Pecel lele: 1</li>
                                    <li>Ayam bakar: 2</li>
                                    <li>Sate: 3</li>
                                    <!-- Tambahkan lebih banyak pesanan makanan jika diperlukan -->
                                </ul>
                            </div>
                            <div class="right-column" style="width: 48%;">
                                <strong>Minuman:</strong>
                                <ul>
                                    <li>Es teh: 2</li>
                                    <li>Jus jeruk: 1</li>
                                    <li>Air mineral: 3</li>
                                    <!-- Tambahkan lebih banyak pesanan minuman jika diperlukan -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <span class="m-0 font-weight-bold text-primary">Seffty</span>
                        <span id="clock" class="ml-5">08.00 11-01-2024</span>
                        
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Pembayaran</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Selesai</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="menu-items" style="display: flex; justify-content: space-between">
                            <div class="left-column" style="width: 48%;">
                                <strong>Makanan:</strong>
                                <ul>
                                    <li>Pecel lele: 1</li>
                                    <li>Ayam bakar: 2</li>
                                    <li>Sate: 3</li>
                                    <!-- Tambahkan lebih banyak pesanan makanan jika diperlukan -->
                                </ul>
                            </div>
                            <div class="right-column" style="width: 48%;">
                                <strong>Minuman:</strong>
                                <ul>
                                    <li>Es teh: 2</li>
                                    <li>Jus jeruk: 1</li>
                                    <li>Air mineral: 3</li>
                                    <!-- Tambahkan lebih banyak pesanan minuman jika diperlukan -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <span class="m-0 font-weight-bold text-primary">Seffty</span>
                        <span id="clock" class="ml-5">08.00 11-01-2024</span>
                        
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Pembayaran</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Selesai</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="menu-items" style="display: flex; justify-content: space-between">
                            <div class="left-column" style="width: 48%;">
                                <strong>Makanan:</strong>
                                <ul>
                                    <li>Pecel lele: 1</li>
                                    <li>Ayam bakar: 2</li>
                                    <li>Sate: 3</li>
                                    <!-- Tambahkan lebih banyak pesanan makanan jika diperlukan -->
                                </ul>
                            </div>
                            <div class="right-column" style="width: 48%;">
                                <strong>Minuman:</strong>
                                <ul>
                                    <li>Es teh: 2</li>
                                    <li>Jus jeruk: 1</li>
                                    <li>Air mineral: 3</li>
                                    <!-- Tambahkan lebih banyak pesanan minuman jika diperlukan -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <span class="m-0 font-weight-bold text-primary">Seffty</span>
                        <span id="clock" class="ml-5">08.00 11-01-2024</span>
                        
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Pembayaran</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Selesai</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="menu-items" style="display: flex; justify-content: space-between">
                            <div class="left-column" style="width: 48%;">
                                <strong>Makanan:</strong>
                                <ul>
                                    <li>Pecel lele: 1</li>
                                    <li>Ayam bakar: 2</li>
                                    <li>Sate: 3</li>
                                    <!-- Tambahkan lebih banyak pesanan makanan jika diperlukan -->
                                </ul>
                            </div>
                            <div class="right-column" style="width: 48%;">
                                <strong>Minuman:</strong>
                                <ul>
                                    <li>Es teh: 2</li>
                                    <li>Jus jeruk: 1</li>
                                    <li>Air mineral: 3</li>
                                    <!-- Tambahkan lebih banyak pesanan minuman jika diperlukan -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- /.container-fluid -->

<!-- Modal untuk Detail Pembayaran -->
<div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="padding-left: 30px;">
                <div class="d-flex align-items-center">
                    <span class="m-0 font-weight-bold text-primary">Seffty</span>
                    <div class="vertical-line mx-1"></div> <!-- Garis vertikal di sini -->
                    <span class="m-0 font-weight-bold">01</span> <!-- Ganti 123 dengan nomor meja yang sesuai -->
                </div>
                    <span id="clock" class="ml-5">08.00 11-01-2024</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body" style="margin-left: 65px;">
                <div class="menu-items" style="display: flex; justify-content: space-between; gap: 20px;">
                    <div class="left-column" style="width: 48%;">
                        <strong>Makanan:</strong>
                        <ul>
                            <li>Paket A: 1</li>
                            <li>Paket B: 2</li>
                            <li>Paket C: 3</li>
                            <!-- Tambahkan lebih banyak pesanan makanan jika diperlukan -->
                        </ul>
                    </div>
                    <div class="right-column" style="width: 48%;">
                        <strong>Minuman:</strong>
                        <ul>
                            <li>Es teh: 2</li>
                            <li>Jus jeruk: 1</li>
                            <li>Air mineral: 3</li>
                            <!-- Tambahkan lebih banyak pesanan minuman jika diperlukan -->
                        </ul>
                    </div>
                </div>
                <div>
                    <p style="display: inline-flex; gap: 5px; margin-top: 10px; margin-left: -45px ">Note :<strong>sambel ayam gepreknya dikit aja</strong></p>
                </div>
            </div>
            <div class="modal-footer" style="background: #f1f1f1ba;">
                <button type="button" class="btn" style="background: lightblue; color: #000000; border: 1px solid black;"  data-dismiss="modal">Tutup</button>
                <a href="{{route('struk_belanja')}}"><button type="button" class="btn" style="background: #b6895b; border: 1px solid black">Pembayaran</button></a>
            </div>
        </div>
    </div>
</div>

@endsection