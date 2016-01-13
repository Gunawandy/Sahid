@extends("SahidTemplate::one-column")
@section("content")
<br>
<div class="text-center">
<h2>Daftar Game</h2>
</div>
<br>
<div class="container">
<div class="col-md-12">

<br>
<a href="/games/create">
<button class="btn btn-primary btn-sm">
<span class="glyphicon glyphicon-plus" aria-hidden="true"> Tambah</span></button></a>
<br>
<br>
<table class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<th>ID</th>
		<th>Nama Game</th>
		<th>Developer</th>
		<th>Publisher</th>
		<th>Harga</th>
		<th>Action</th>

	</thead>
	@foreach($game as $index=>$game)
	<tr>
		<th>{{ $index+1 }}</th>
		<th>{{ $game->nama }}</th>
		<th>{{ $game->developer }}</th>
		<th>{{ $game->publisher }}</th>
		<th>{{ $game->harga }}</th>
		<th>
			
			<a href="{{ url("/games/$game->id/edit")}}"><button class="btn btn-success btn-sm">
			<span class="glyphicon glyphicon-cog" aria-hidden="true"> Ubah</span></button></a>	
			<a href="{{ url("/games/$game->id/delete")}}"><button class="btn btn-danger btn-sm">
			<span class="glyphicon glyphicon-trash" aria-hidden="true"> Hapus</span></button></a>
		</th>T
	</tr>
	@endforeach
</table>
</div>
</div>
</form>
@stop