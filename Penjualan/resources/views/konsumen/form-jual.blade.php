@extends("SahidTemplate::one-column")

@section("content")

@yield("content")

<div class="container">
    <div class="col-md-12"> 
        <br>
        <h2>Form Penjualan Game</h2>

        <br>
        <form action="{{ $url }}" method="post" class="form-horizontal">

          <div class="form-group">
            <label for="nama" class="control-label col-xs-2">Nama</label>
            <div class="col-xs-3">
             <p class="form-control-static">{{ $konsumen->nama }}</p>

         </div>
     </div>

       <div class="form-group">
        <label for="alamat" class="control-label col-xs-2">Alamat</label>
        <div class="col-xs-3">
            <p class="form-control-static">{{ $konsumen->alamat }}</p>
        </div>
    </div>

    <div class="form-group">
        <label for="tgl_lahir" class="control-label col-xs-2">Tanggal Lahir</label>
        <div class="col-xs-3">
            <p class="form-control-static">{{ $konsumen->tgl_lahir }}</p>
        </div>
    </div>
    <div class="form-group">
    <label for="email" class="control-label col-xs-2">Email</label>
    <div class="col-xs-3">
        <p class="form-control-static">{{ $konsumen->email }}</p>
    </div>
</div>
<div class="form-group">
    <label for="telp" class="control-label col-xs-2">Telp</label>
    <div class="col-xs-3">
        <p class="form-control-static">{{ $konsumen->telp }}</p>
    </div>
</div>
<div class="form-group">
    <label for="waktubeli" class="control-label col-xs-2">Waktu Beli</label>
    <div class="col-xs-3">

        <p class="form-control-static">{{ $konsumen->waktu_beli }}</p>
    </div>
</div>
<div class="form-group">
    <label for="game" class="control-label col-xs-2">Pilih Game</label>
    <div class="col-lg-20">

        <select>
           <?php
           foreach ($list_game as $key) {?>
           <option value="{{$key->id}}" >{{$key->nama}}</option>
           <?php }
           ?>

       </select>

   </div>
</div>

</div>

<input type="hidden" name="_token" value="{{ csrf_token() }}">
<hr>
<div class="form-group">
    <div class="col-xs-offset-2 col-xs-20">
        <button type="submit" class="btn btn-primary btn-sm">
            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"> Simpan</span></button>
            <a href="/petugas"><button type="submit" class="btn btn-warning btn-sm" onclick="self.history.back()">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"> Batal</span></button></div>
            </div>
        </div>
    </form>

    @stop