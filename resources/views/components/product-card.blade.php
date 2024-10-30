<div class="col-lg-3 col-md-6">
    <div class="team-member-item wow fadeInUp" data-wow-delay="0.3s">
        <div class="team-image">
            <figure class="image-anime">
                <img src="{{ asset('images/' . $product->image_filename) }}" alt="{{ $product->item_name }}" class="img-fluid" style="width: 100%; height: auto;">
            </figure>
        </div>
        <h3 class="mt-2 mx-3 mb-1">{{ $product->item_name }}</h3>
        <p class="mx-3 mb-1 text-muted">{{ \Illuminate\Support\Str::limit($product->description, 50) }}</p>
        <p class="mx-3 mb-1 font-weight-bold">RS {{ number_format($product->price, 2) }}</p>
        @if ($product->availability == 'Available')
            <p class="mx-3" style="color: rgb(77, 238, 88); margin-top: 5px;">Available</p>
        @else
            <p class="mx-3" style="color: rgb(93, 25, 25); margin-top: 5px;">Out of Stock</p>
        @endif
    </div>
</div>
