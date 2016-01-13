@extends("SahidTemplate::one-column")
@section("content")
<br>
<div class="text-center">
<h2>Daftar Game</h2>
</div>

<div class="container">
<div class="col-md-12">
<br>
<table class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<th>No</th>
		<th>Nama Game</th>
		<th>Developer</th>
		<th>Publisher</th>
		<th>Harga</th>
	</thead>
	@foreach($game as $index=>$game)
	<tr>
		<th>{{ $index+1 }}</th>
		<th>{{ $game->nama }}</th>
		<th>{{ $game->developer }}</th>
		<th>{{ $game->publisher }}</th>
		<th>{{ $game->harga }}</th>
	</tr>
	@endforeach
</table>
</div>
</div>
</form>
@stop