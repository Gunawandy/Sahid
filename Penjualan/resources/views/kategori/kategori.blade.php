@extends("SahidTemplate::one-column")
@section("content")
<br>
<div class="text-center">
<h2>Daftar Kategori</h2>
</div>

<div class="container">
<div class="col-md-12">
<br>
<table class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<th>No</th>
		<th>Kategori</th>
	</thead>
	@foreach($game as $index=>$game)
	<tr>
		<th>{{ $index+1 }}</th>
		<th>{{ $kategori->kategori }}</th>
	</tr>
	@endforeach
</table>
</div>
</div>
</form>
@stop