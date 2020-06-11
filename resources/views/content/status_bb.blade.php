@extends('master')
@section('content')
<script src="{{asset('admin/js1/jquery.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <p>Home/ Pesanan Saya</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<div class="container">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
                <h2>Invoice</h2><h3 class="pull-right">Order #{{$detail_pesanan->invoice}}</h3>
                <button type="button" class="btn btn-warning">{{$detail_pesanan->status}}</button>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6"></div>
				<div class="col-xs-6 text-right">
    				<address>
    				<strong>Order Date:</strong> {{$detail_pesanan->date_time}}
    				</address>
    			</div>
    		</div>
			<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Kirim Ke</strong><br>
    					<strong>{{$detail_shipping->nama}}</strong><br>
    					{{$detail_shipping->alamat}}<br>
    					{{$detail_shipping->kabkot}}, {{$detail_shipping->provinsi}}<br>
    				</address>
    			</div>
    		</div><br><br>
			<div class="row">
    			<div class="col-xs-6">
    				<address>
					<strong>Transfer Ke</strong><br>
    					<strong>Bank Syariah Mandiri</strong><br>
                        Atas Nama <strong>Uus Uswati</strong><br>
                        No. Rek <strong>7012345678</strong><br>
                        Code Bank <strong>451</strong>
    				</address>
    			</div>
    		</div>
    	</div>
    </div><br><br>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Pesanan Saya</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Nama Produk</strong></td>
        							<td class="text-center"><strong>Harga</strong></td>
        							<td class="text-center"><strong>Jumlah Barang</strong></td>
        							<td class="text-right"><strong>Total Harga</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
								<?php $jumlah_total=0; ?>
								@foreach($userCart as $list)
    							<tr>
    								<td>{{$list->nama_produk}}</td>
    								<td class="text-center">Rp{{$list->harga}}</td>
    								<td class="text-center">{{$list->qty}}</td>
    								<td class="text-right">Rp{{$list->harga*$list->qty}}</td>
									<?php $jumlah_total = $jumlah_total + ($list->harga*$list->qty); ?>
    							</tr>
								@endforeach
    							<tr>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line text-center"><strong>Subtotal</strong></td>
    								<td class="thick-line text-right">Rp<?php echo $jumlah_total; ?></td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Ongkir</strong></td>
    								<td class="no-line text-right">$15</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Total Bayar</strong></td>
    								<td class="no-line text-right">Rp<?php echo $jumlah_total; ?></td>
    							</tr> 
    						</tbody>
                        </table>
                        <div class="row">
                            <div class="col-xs-6 text-right">
							</div>
                            <div class="col-xs-6 text-right">
								<button type="button" class="btn btn-light batal">
								<a href="#" style="color: black;">Batalkan Pesanan</a>
								</button>
								
								<button type="button" class="btn btn-primary float-right"> 
								<a href="{{route('konfirmasi_bayar')}} " style="color: white;">Konfirmasi Pesanan</a>
								</button>
                            </div>
                        </div>
    				</div>
					<script>
						$('.batal').click(function(){
							alert(1);
						});
					</script>
    			</div>
    		</div>
    	</div>
    </div>
</div>
@endsection