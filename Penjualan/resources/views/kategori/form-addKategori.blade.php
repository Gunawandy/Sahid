@extends("SahidTemplate::one-column")
@section("content")

        @yield("content")

<div class="container">
    <div class="col-md-23"> 
<br>
<h2>Form Tambah Kategori</h2>
@if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>SORRY!</strong> There is some problem with your input , Please Check Again! <br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
<hr>
<form action="{{ $url }}" method="post" class="form-horizontal">

    <!-- data user -->
     <div class="form-group">
        <label for="username" class="control-label col-xs-2">Kategori</label>
        <div class="col-xs-3">
        <input type="text" class="form-control" name="kategori" placeholder="Kategori">
        </div>
    </div>
    
    <hr>
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label for="alamat" class="control-label col-xs-2"></label>
        <div class="col-xs-3">
        <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"> Simpan</span></button>
        <a href="/petugas"><button type="submit" class="btn btn-warning btn-sm" onclick="self.history.back()">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"> Batal</span></button></div>
        </div>
    </div>
</form>
@stop