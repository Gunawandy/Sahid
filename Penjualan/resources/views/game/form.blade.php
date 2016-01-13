@extends("SahidTemplate::one-column")
@section("content")
<br>
<div class="text-center">
<h2>Form Pesan Game{{Auth::user()->id}}</h2>
</div>
<br>
<div class="container">
<div class="col-md-12">

<br>
<a href="/members/{{Auth::user()->id}}/jual/"><button class="btn btn-primary btn-sm">
			<span class="glyphicon glyphicon-book" aria-hidden="true">Beli Game</span></button></a>	
<br>
<br>
<table class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<th>ID</th>
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