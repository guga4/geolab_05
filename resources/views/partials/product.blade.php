<div class="col-sm-4 col-lg-4 col-md-4">
    <div class="thumbnail">
        <img src="{{ $product->image_url }}" alt="">
        <div class="caption">
            <h4 class="pull-right">${{ $product->price }}</h4>
            <h4><a href="#">{{ $product->name }}</a>
            </h4>
            <p>{{ $product->description }}</p>
        </div>
        <div class="ratings">
            <p class="pull-right">{{ $product->reviews }} reviews</p>
            <p>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </p>
        </div>
    </div>
</div>