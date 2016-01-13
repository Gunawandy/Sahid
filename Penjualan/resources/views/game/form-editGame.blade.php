@extends("SahidTemplate::one-column")
@section("content")

        @yield("content")

<div class="container">
    <div class="col-md-12"> 
<br>
<h2>Form Edit Game</h2>
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
<br>
<form action="{{ $url }}" method="post" class="form-horizontal">
	
	 <div class="form-group">
        <label for="nama" class="control-label col-xs-1">Nama Game</label>
        <div class="col-xs-3">
    <input type="text" class="form-control" name="nama" value="{{ $game->nama }}">
        </div>
    </div>
	
    <div class="form-group">
        <label for="developer" class="control-label col-xs-1">Developer</label>
        <div class="col-xs-3">
    <input type="text" class="form-control" name="developer" value="{{ $game->developer }}">
        </div>
    </div>

    <div class="form-group">
        <label for="publisher" class="control-label col-xs-1">Publisher</label>
        <div class="col-xs-3">
    <input type="text" class="form-control" name="publisher" value="{{ $game->publisher }}">
        </div>
    </div>

    <div class="form-group">
        <label for="harga" class="control-label col-xs-1">Harga</label>
        <div class="col-xs-3">
    <input type="text" class="form-control" name="harga" value="{{ $game->harga }}">
        </div>
    </div>

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
	<hr>
	<div class="form-group">
        <div class="col-xs-offset-1 col-xs-10">
            <button type="submit" class="btn btn-primary btn-sm">
            <span class="glyphicon glyphicon-refresh" aria-hidden="true"> Ubah</span></button>
        </div>
    </div>
</form>
@endsection