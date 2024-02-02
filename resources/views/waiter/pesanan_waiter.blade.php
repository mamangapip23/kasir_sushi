@extends('waiter.master_waiter')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pesanan</h1>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="notification" style="background-color: #ffffff; border: 1px solid #b6895b; border-radius: 100px; padding: 15px; padding-left: 30px; padding-bottom: 0px; margin-bottom: 15px; display: flex; justify-content: space-between; align-items: center;">
                <div>
                    <p style="display: inline-flex; gap: 10px;">Apip <strong>02</strong></p>
                    <p style="display: inline-flex; gap: 40px; padding-left: 30px;">- ada pesanan baru - <strong>20.30</strong></p>
                </div>
                <div class="icon-container" style="margin-top: -15px; padding: 0.5rem 0.8rem; border-radius: 50%;" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-send-check" viewBox="0 0 16 16" style="color: #28b2ad; ">
                    <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855a.75.75 0 0 0-.124 1.329l4.995 3.178 1.531 2.406a.5.5 0 0 0 .844-.536L6.637 10.07l7.494-7.494-1.895 4.738a.5.5 0 1 0 .928.372zm-2.54 1.183L5.93 9.363 1.591 6.602z"/>
                    <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686"/>
                    </svg>
                </div>
                <div class="icon-container btn-modal" style="margin-top: -15px; padding: 0.5rem 0.8rem; border-radius: 50%;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16" style="color: yellowgreen; stroke: #9acd3291;" data-toggle="modal">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                    </svg>
                </div>
                <div class="icon-container" style="margin-top: -15px;   margin-right: 8px; padding: 0.5rem 0.8rem; border-radius: 50%;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16" style="color: red;">
                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                    </svg>
                </div>
            </div>
        </div>        
    </div>
</div>

<!-- Modal untuk Detail Pembayaran -->
<div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="padding-left: 30px;">
                <div class="d-flex align-items-center">
                    <span class="m-0">Apip</span>
                    <div class="vertical-line mx-1"></div> <!-- Garis vertikal di sini -->
                    <span class="m-0 font-weight-bold">01</span> <!-- Ganti 123 dengan nomor meja yang sesuai -->
                </div>
                    <span id="clock" class="ml-5 font-weight-bold">20.30</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body" style="margin-left: 65px;">
                <div class="menu-items" style="display: flex; justify-content: space-between">
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
                <a href="{{route('struk_belanja')}}"><button type="button" class="btn" style="background: #b6895b; border: 1px solid black">Proses</button></a>
            </div>
        </div>
    </div>
</div>

<script>
  $(document).ready(function() {
    $('.btn-modal').click(function() { 
      $('#paymentModal').modal('show');
    });
  });
</script>

@endsection