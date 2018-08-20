<div class="foot">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="copyright">
    <div class="container"><i class="far fa-copyright"></i>Copyright 2018 thognnq0906@gmail.com All rights reserved</div>
</div>