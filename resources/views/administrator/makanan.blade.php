@extends('administrator.master_administrator')

@section('content')
<div class="container-fluid">
    <button class="btn btn-sm mb-3" data-toggle="modal" data-target="#tambahmeja" style="margin-left: 10px; padding: 0.6rem; background: #b6895b; color: #ffffff;">
        <i class="fas fa-user-plus fa-solid"></i> Tambah Makanan
    </button>

    <div class="container-fluid" style="height: 575px; overflow-y: auto;">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th><center>NO</center></th>
                    <th><center>TEMPAT</center></th>
                    <th><center>STATUS</center></th>
                    <th colspan="2"><center>AKSI</center></th>
                </tr>
            </thead>

            
                    <tr>
                        <td><center></center></td>
                        <td><center></center></td>
                        <td><center>
                            
                        </center></td>
                        <td>
                            <center>
                                <button class="btn btn-sm btn-sm" style="background: #e5e516; color: #ffffff;" data-toggle="modal" data-target="#editmeja">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </center>
                        </td>
                        <td>
                            <center>
                                <button type="button" class="btn btn-danger btn-sm" onclick="delete_confirm('')">
                                    <i class="fas fa-trash fa-sm"></i>
                                </button>
                            </center>
                        </td>
                    </tr>
                
        </table>
    </div>
</div>

    <!-- Modal Edit -->
    <div class="modal fade" id="editmeja" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Edit Makanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama Makanan</label>
                            <input type="hidden"  name="id_tempat" class="form-control" value="">
                            <input type="text" pattern="[a-zA-Z0-9]+" name="meja" class="form-control" value="" required>
                            
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status_meja">
                                <option >terisi</option>
                                <option >kosong</option>
                                <option >kotor</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer" style="background: #f1f1f1ba;">
                    <button type="button" class="btn" style="background: lightblue; color: #000000; border: 1px solid black;"  data-dismiss="modal">Tutup</button>
                    <a href="{{route('struk_belanja')}}"><button type="button" class="btn" style="background: #b6895b; border: 1px solid black">Simpan</button></a>
                </div>
            </div>
        </div>
    </div>
<!-- Modal Tambah Meja -->
<!-- Modal Tambah Meja -->
<div class="modal fade" id="tambahmeja" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Makanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Tambah Makanan</label>
                        <input type="text" pattern="[a-zA-Z0-9]+" name="meja" class="form-control" required>
                    </div>

                </form>
            </div>
            <div class="modal-footer" style="background: #f1f1f1ba;">
                <button type="button" class="btn" style="background: lightblue; color: #000000; border: 1px solid black;"  data-dismiss="modal">Tutup</button>
                <a href="{{route('struk_belanja')}}"><button type="button" class="btn" style="background: #b6895b; border: 1px solid black">Simpan</button></a>
            </div>
        </div>
    </div>
</div>
@endsection