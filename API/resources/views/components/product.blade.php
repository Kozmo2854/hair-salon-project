<div class="col-xs-12 col-sm-6 col-md-4 product-item">
    <div class="product--img">
        <img src="{{$product->image}}"/>
        <div class="product--hover">
            <div class="product--action">
                <a href="#">Add To Cart</a>
            </div>
        </div>
        <!-- .product-overlay end -->
    </div>
    <!-- .product-img end -->
    <div class="product--content">
        <div class="product--title">
            <h3><a href="#">{{$product->title}}</a></h3>
        </div>
        <!-- .product-title end -->
        <div class="product--price">
            <span>${{$product->originalPrice}}</span>
        </div>
        <!-- .product-price end -->
    </div>
    <!-- .product-bio end -->
</div>
