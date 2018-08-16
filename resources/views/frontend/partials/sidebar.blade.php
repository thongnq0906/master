<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
    <div class="bar-right">
        <div class="cate-bar">
            <h3><i class="fas fa-align-justify"></i>Tin tức</h3>
            <div class="list-bar">
                <ul>
                    @foreach($cate as $c)
                    <li><a href="{{ route('list_post', $c->slug) }}">{{ $c->name }}</a></li>
                    <hr>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="cate-bar">
            <h3><i class="fas fa-align-justify"></i>Video</h3>
            <iframe width="100%" height="160" src="{{ $setting->link_video }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="cate-bar">
            @foreach($ads as $a)
            <a href="{{ asset($a->link) }}"><img src="{{ asset($a->image) }}" alt="{{ $a->name }}"></a>
            @endforeach
        </div>
        {{-- <div id="myCarousel" class="carousel slide custom-slide" data-ride="carousel">
            <h3>Sản phẩm</h3>
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="frontend/images/product1.jpg" alt="Los Angeles">
                </div>

                <div class="item">
                    <img src="frontend/images/product2.jpg" alt="Chicago">
                </div>

                <div class="item">
                    <img src="frontend/images/product3.jpg" alt="New York">
                </div>
            </div>
        </div> --}}
        {{-- <div class="video-bar">
            <h3>Video</h3>
            <iframe src="https://youtube.com/embed/Lt-U_t2pUHI" frameborder="0" width="100%" height="160px"></iframe>
        </div> --}}
    </div>
</div>