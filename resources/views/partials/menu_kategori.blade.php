<div class="left_sidebar_area">
    <aside class="left_widgets p_filter_widgets sidebar_box_shadow">
        
        <div class="l_w_title">
            <h3>Cari Kategori</h3>
        </div>
        <div class="widgets_inner">
            <ul class="list">
            @foreach($kategori as $kat)
                <li>
                    <a href="{{url('/produk/'.$kat->url)}}">{{$kat->nama_kategori}}</a>
                </li>
            @endforeach
                <li class="sub-menu">
                    
                    <a href="#" class=" d-flex justify-content-between">
                        Aksesoris
                        <div class="right ti-plus"></div>
                    </a>
                    <ul>
                        @foreach($subkategori as $sub)
                        <li>
                            <a href="{{url('/produk/'.$sub->url)}}">{{$sub->nama_kategori}}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
    </aside>
</div>
