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
</div>
@endsection