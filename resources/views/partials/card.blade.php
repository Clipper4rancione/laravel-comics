@foreach ($comics as $comic)
    <div class="card-cont">
        <div class="img-area">
            <i class="bi bi-cart-plus"></i>

            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['thumb'] }}" />
        </div>

        <div class="text-area">
            <span>{{ $comic['title'] }}</span>
            <p>{{ $comic['price'] }}</p>
        </div>
    </div>
@endforeach
