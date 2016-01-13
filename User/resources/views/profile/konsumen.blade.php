@extends("SahidTemplate::one-column")
@section("content")
<br>

<div class="container">
<div class="col-md-12">
<h2>Daftar Petugas</h2>
<br>
<table class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<th>No</th>
		<th>Nama</th>
		<th>NIM</th>
		<th>Alamat</th>
		<th>Email</th>
		<th>Telp</th>

	</thead>
	@foreach($profile as $index=>$profile)
	<tr>
		<th>{{ $index+1 }}</th>
		<th>{{ $profile->nama }}</th>
		<th>{{ $profile->nim }}</th>
		<th>{{ $profile->alamat }}</th>
		<th>{{ $profile->email }}</th>
		<th>{{ $profile->telp }}</th>
		
	</tr>
	@endforeach
</table>
</form>
@stop