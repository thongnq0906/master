<div class="foot">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0';
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
                <div class="fb-page" data-href="https://www.facebook.com/codobye/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/codobye/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/codobye/">Codobye - Tạm biệt mụn</a></blockquote></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <h4>{{ $setting->name }}</h4>
                <p>Địa chỉ: {{ $setting->address }}</p>
                <p>SĐT: {{ $setting->title }}</p>
                <p>Hotline: {{ $setting->hotline }}</p>
                <p>Email: {{ $setting->email }}</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="s">
                    <div class="tel">
                        <a href="tel:{{ $setting->hotline }}"><i class="fas fa-phone"></i> {{ $setting->hotline }}</a>
                    </div>
                    <div class="solial">
                       <a href="{{ $setting->facebook }}" target="_blank">
                           <img src="{{ asset('frontend/images/fb.png') }}" alt="facebook"></a>
                       <a href="{{ $setting->youtube }}">
                           <img src="{{ asset('frontend/images/yt.png') }}" alt="youtube" target="_blank"></a>
                       <a href="{{ $setting->tw }}">
                           <img src="{{ asset('frontend/images/zl.png') }}" alt="zalo" target="_blank"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="copyright">
    <div class="container"><i class="far fa-copyright"></i>Copyright 2018 Codobye.vn All rights reserved</div>
</div>