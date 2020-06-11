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
	@if(!empty($detail_pesanan))
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
			@if($detail_pesanan->status=="Belum Bayar")
			<div class="row">
				<div class="col-xs-4"></div>
				<div class="col-xs-4 text-center">
    				<address>
    				<strong>Transfer Ke</strong>
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-3">
    				<address>
    					<strong>Bank Mandiri</strong><br>
                        Atas Nama <strong>Denisya</strong><br>
                        No. Rek <strong>7012345678</strong><br>
                        Code Bank <strong>008</strong>
    				</address>
    			</div>
				<div class="col-xs-3">
    				<address>
    					<strong>Bank Central Asia</strong><br>
                        Atas Nama <strong>Rizky Angga Haristia</strong><br>
                        No. Rek <strong>7012345678</strong><br>
                        Code Bank <strong>014</strong>
    				</address>
    			</div>
				<div class="col-xs-3 text-right">
    				<address>
    					<strong>Bank Rakyat Indonesia</strong><br>
                        Atas Nama <strong>Nurlaela Khasannah</strong><br>
                        No. Rek <strong>7012345678</strong><br>
                        Code Bank <strong>002</strong>
    				</address>
    			</div>
				<div class="col-xs-3 text-right">
    				<address>
    					<strong>Bank Negara Indonesia</strong><br>
                        Atas Nama <strong>Nada Qonita Amalia</strong><br>
                        No. Rek <strong>7012345678</strong><br>
                        Code Bank <strong>009</strong>
    				</address>
    			</div>
    		</div>
			<div class="row">
    			<div class="col-xs-3">
    				<address>
    					<strong>Bank Syariah Mandiri</strong><br>
                        Atas Nama <strong>Denisya</strong><br>
                        No. Rek <strong>7012345678</strong><br>
                        Code Bank <strong>451</strong>
    				</address>
    			</div>
				<div class="col-xs-3">
    				<address>
    					<strong>Bank Central Asia Syariah</strong><br>
                        Atas Nama <strong>Rizky Angga Haristia</strong><br>
                        No. Rek <strong>7012345678</strong><br>
                        Code Bank <strong>536</strong>
    				</address>
    			</div>
				<div class="col-xs-3 text-right">
    				<address>
    					<strong>Bank Rakyat Indonesia Syariah</strong><br>
                        Atas Nama <strong>Nurlaela Khasannah</strong><br>
                        No. Rek <strong>7012345678</strong><br>
                        Code Bank <strong>422</strong>
    				</address>
    			</div>
				<div class="col-xs-3 text-right">
    				<address>
    					<strong>Bank Negara Indonesia Syariah</strong><br>
                        Atas Nama <strong>Nada Qonita Amalia</strong><br>
                        No. Rek <strong>7012345678</strong><br>
                        Code Bank <strong>427</strong>
    				</address>
    			</div>
    		</div>
			@endif
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
						@if($detail_pesanan->status=="Belum Bayar")
                        <div class="row">
                            <div class="col-xs-6 text-right">
							</div>
                            <div class="col-xs-6 text-right">
								<button type="button" class="btn btn-light">
								<a href="{{route('batalkan_pesanan')}} " style="color: black;">Batalkan Pesanan</a>
								</button>
								
								<button type="button" class="btn btn-primary float-right"> 
								<a href="{{route('konfirmasi_bayar')}} " style="color: white;">Konfirmasi Pesanan</a>
								</button>
                            </div>
                        </div>
						@elseif($detail_pesanan->status=="Pesanan Dikirim")
						<div class="row">
                            <div class="col-xs-6 text-right">
							</div>
                            <div class="col-xs-6 text-right">
								<button type="button" class="btn btn-primary float-right">
								<a href="{{route('pesanan_diterima')}} " style="color: white;">Pesanan Diterima</a>
								</button>
                            </div>
                        </div>
						@else
						<div class="row">
						</div>
						@endif
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
	@else
	<div class="row">
		<div class="col-xs-12">
			<div class="section-top-border">
				<div class="row">
					<div class="col-lg-12">
						<blockquote class="generic-blockquote" style="text-align: center; font-size: 15px;">
							<b style="color: black;">“Anda tidak memiliki Pesanan.</b><br><br>
							<b style="color: black;">Beli produk sekarang?”</b><br><br><br>
							<button type="button" class="btn btn-primary"> 
								<a href="{{route('produk')}}" style="color: white;">Beli Produk</a>
							</button><br><br>
						</blockquote>
					</div>
				</div>
			</div>
		</div>
	</div><br><br>
	@endif
</div>
@endsection