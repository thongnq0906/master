<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-xs-1 col-sm-1 col-md-2 col-lg-2">
                <p>
                    tổng:<a href="#">{{ $total }}</a>
                </p>
                <p>
                    số lượng :<a href="#">{{ $count }}</a>
                </p>
                <a href="{{ route('cart.index') }}">gio hang</a>
            </div>
            <div class="col-xs-11 col-sm-11 col-md-10">
                <div class="search">
                    <form action="{{ route('postSearch') }}" method="get">
                        {{ csrf_field() }}
                        <input type="text" placeholder="Nhập từ khóa tìm kiếm" name="search">
                        <input type="submit">
                    </form>
                </div>
                <div class="menu">
                    <nav id='flexmenu'>
                        <div id="mobile-toggle" class="button"></div>
                        <ul id="main-menu">
                            <li class='active'><a href="{{ route('index') }}">Trang chủ</a></li>
                            <li><a href="{{ route('intro') }}">Về chúng tôi</a></li>
                            <li><a href='{{ route('allProduct') }}'>Sản phẩm</a>
                                <?php
                                $level_1 = DB::table('cate_products')->where('status', 1)->where('parent_id', 0)
                                ->orderBy('position', 'ASC')->get();
                                ?>
                                <ul class="sub-menu">
                                    @foreach($level_1 as $l)
                                    <li><a href="{{ route('productByCate', $l->slug) }}">{{ $l->name }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            <?php
                            $lv1 = DB::table('cate_posts')->where([['status', 1], ['parent_id', 0]])->orderBy('position', 'ASC')->get();
                            ?>
                            @foreach($lv1 as $l)
                            <li><a href="{{ url('/post/'.$l->slug)}}">{{ $l->name }}</a>
                                <?php
                                $level_1 = DB::table('cate_products')->where([['status', 1], ['parent_id', 0]])
                                ->orderBy('position', 'ASC')->get();
                                ?>
                                <ul class="sub-menu">
                                    <?php
                                    $lv2 = DB::table('cate_posts')->where('status', 1)->where('parent_id', $l->id)->orderBy('position', 'ASC')->get();
                                    ?>
                                    @foreach ($lv2 as $v)
                                    <li><a href="{{ url('/post/'.$v->slug)}}">{{ $v->name }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach
                            <li><a href="{{ route('contact') }}">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>