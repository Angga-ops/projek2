<div class="left_sidebar_area">
    <aside class="left_widgets p_filter_widgets sidebar_box_shadow">
        <?php
            $kategori=DB::table('kategori')->get();
        ?>
        <div class="l_w_title">
            <h3>Cari Kategori</h3>
        </div>
        <div class="widgets_inner">
            <ul class="list">
            @foreach($kategori as $category)
            @if($category->id_kategori<'6')
                <li>
                    <a href="{{route('kategori',$category->id_kategori)}}">{{$category->nama_kategori}}</a>
                </li>
            @endif
            @endforeach
            <?php
                $sub_kategori=DB::table('kategori')->select('id_kategori','nama_kategori')->where('sub_kat',2)->get();
            ?>
                <li class="sub-menu">
                    <a href="#" class=" d-flex justify-content-between">
                    Aksesoris
                        <div class="right ti-plus"></div>
                    </a>
                    <ul>
                    @foreach($sub_kategori as $sk)
                        <li>
                            <a href="{{route('kategori',$sk->id_kategori)}}">{{$sk->nama_kategori}}</a>
                        </li>
                    @endforeach
                    </ul>
                </li>
            </ul>
        </div>
    </aside>
</div>