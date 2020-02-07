@extends('layouts.main')

@section('content')
<script type="text/javascript">
	document.title="Tambah Kasir";
	document.getElementById('kasir').classList.add('active');
</script>
<script src="{{asset('assets/main.js')}}"></script>
<div class="content">
	<div class="padding">
		<div class="bgwhite">
			<div class="padding">
			<div class="contenttop">
				<div class="left">
				<a href="{{url('tambah_kasir')}}" class="btnblue">Tambah Kasir</a>&nbsp;&nbsp;
				<form style="float: right;"><input type="search" class="light-table-filter" data-table="order-table"><button>Search Data</button></form>
				</div>
				<div class="both"></div>
			</div>
			<span class="label">Jumlah Kasir : {{ \DB::table('kasir')->count()}}</span>
			<table class="datatable order-table" id="datatable">
				<thead>
				<tr>
					<th width="10px">#</th>
					<th width="300px"><center>Nama Kasir</center></th>
					<th width="200px"><center>Jenis Kelamin</center></th>
					<th width="100px"><center>Foto</center></th>
					<th ><center>Tanggal Ditambahkan</center></th>
					<th width="60px" align="center"><center>Aksi</center></th>
				</tr>
			</thead>
			<tbody>
					<?php $no = 1; ?>
					@foreach($cs as $kasir)
					<tr>
						<td align="center"><?php echo $no++; ?></td>
						<td>{{ $kasir->nama_kasir }}</td>
						<td align="center">{{ $kasir->jenis_kelamin }}</td>
						<td align="center"><img src="{{url('assets/images/'.$kasir->foto)}}" width="100px" height="100px" alt="{{$kasir->foto}}"></td>
						<td align="center">{{ $kasir->date_added }}</td>
						<td>
							<a href="{{url('kasir/'.$kasir->id_kasir. '/editKasir')}}" class="btn bluetbl m-r-10" onclick="noAv()"><span class="btn-edit-tooltip">Edit</span><i class="fa fa-pencil"></i></a>
							<a href="{{url('kasir/'.$kasir->id_kasir. '/deleteKasir')}}" class="btn redtbl"><span class="btn-hapus-tooltip">Hapus</span><i class="fa fa-trash"></i></a>
						</td>
					</tr>
					@endforeach
			</tbody>

			</table>
			</div>
		</div>
	</div>
</div>
@stop
