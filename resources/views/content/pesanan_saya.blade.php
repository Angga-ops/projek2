@if(!empty($detail_pesanan))
	@if($detail_pesanan->status=="Belum Bayar")
		@include('content.status_bb')
	@elseif($detail_pesanan->status=="Menunggu Konfirmasi")
		@include('content.status_mk')
	@elseif($detail_pesanan->status=="Pesanan Dibatalkan")
		@include('content.status_bp')
	@elseif($detail_pesanan->status=="Pesanan Dikemas")
		@include('content.status_kms')
	@elseif($detail_pesanan->status=="Pesanan Dikirim")
		@include('content.status_krm')
	@elseif($detail_pesanan->status=="Pesanan Diterima")
		@include('content.status_trm')
	@endif
@else
	@include('content.ps')
@endif