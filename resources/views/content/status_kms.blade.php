@extends('master')
@section('content')

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
                <button type="button" class="btn btn-warning">Pesanan Diterima</button>
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
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>
@endsection