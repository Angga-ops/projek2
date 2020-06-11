<div class="left_sidebar_area">
    <aside class="left_widgets p_filter_widgets sidebar_box_shadow">
        <?php
            $kategori=DB::table('kategori')->where([['status',1],['sub_kat',1]])->get();
        ?>
        <div class="l_w_title">
            <h3>Cari Kategori</h3>
        </div>
        <div class="widgets_inner">
            <ul class="list">
                @foreach($kategori as $kat)
                <?php
                $sub_kategori=DB::table('kategori')->select('id_kategori','nama_kategori')->where([['sub_kat',$kat->id_kategori],['status',1]])->get();
                ?>
                <li class="sub-menu">
                    <a href="#sportswear{{$kat->id_kategori}}" class=" d-flex justify-content-between">
                        @if(count($sub_kategori)>0)
                            <div class="right ti-plus"></div>
                        @endif
                    </a>
                    <a href="{{route('kategori',$kat->id_kategori)}}">{{$kat->nama_kategori}}</a>
                    <ul>
                    @if(count($sub_kategori)>0)
                        @foreach($sub_kategori as $sub_kat)
                        <li>
                            <a href="{{route('kategori',$sub_kat->id_kategori)}}">{{$sub_kat->nama_kategori}}</a>
                        </li>
                        @endforeach
                    @endif
                    </ul>
                </li>
                @endforeach
            </ul>
        </div>
    </aside>
</div>