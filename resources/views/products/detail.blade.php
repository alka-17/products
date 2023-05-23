<x-app-layout>
    <x-slot name="title">{{ $product->name }}</x-slot>

    <main role="main">
        <div class="container my-5">
            <div class="row">
                <div class="col-md-5">
                    <div class="main-img">
                        <img class="img-fluid" src="{{ url($product->image) }}" alt="ProductS">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="main-description px-2">
                        <div class="category text-bold">
                            Category: 
                            @foreach ($product->categories ?? [] as $category)
                                <span>{{ $category->name }}</span>@if(! $loop->last){{','}}@endif
                            @endforeach
                        </div>
                        <div class="product-title text-bold my-3">
                            {{ $product->name }}
                        </div>

                        <div class="price-area my-4">
                            <p class="new-price text-bold mb-1">₹ {{ $product->price }}</p>
                        </div>

                        <div class="buttons d-flex my-5">
                            <div class="block cart-btn">
                                @if ($product->cart_count > 0)
                                    <a href="{{ route('cart') }}" class="shadow btn custom-btn">Goto cart</a>
                                @else
                                    <button type="button" class="shadow btn custom-btn" add-to-cart data-product-id="{{ $product->id }}">Add to cart</button>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="product-details my-4">
                        <p class="details-title text-color mb-1">Product Details</p>
                        <p class="description">{{ $product->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <x-slot name="script">
        <script>
            $(document).ready(function(){
                $(document).on('click', '[add-to-cart]', function(e){
                    let product_id = $(this).data('product-id');
                    let _token = "{{ csrf_token() }}"

                    $.ajax({
                        url:"{{ route('add.to.cart') }}",
                        type:'post',
                        data: {
                            _token,
                            product_id
                        },
                        success: function(response){
                            location.reload();
                            alert('added to cart');
                        }
                    })
                })
            })
        </script>
    </x-slot>
</x-app-layout> 