<x-app-layout>
    <x-slot name="title">Cart</x-slot>
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ url('css/cart.css') }}">
    </x-slot>
    
    <div class="card">
        <div class="row" id="cart-section">
            @include('cart.ajax')
        </div>
    </div>

    <x-slot name="script">
        <script>
            $(document).ready(function(){
                $(document).on('click', '[add-to-cart]', function(e){
                    let elm = $(this);
                    let product_id = elm.data('product-id');
                    let type = elm.attr('add-to-cart');
                    let _token = "{{ csrf_token() }}"

                    $.ajax({
                        url:"{{ route('add.to.cart') }}",
                        type:'post',
                        data: {
                            _token,
                            product_id,
                            type
                        },
                        success: function(response){
                            $('#cart-section').html(response);
                        }
                    })
                })
            })
        </script>
    </x-slot>
</x-app-layout>
