<div class="col-md-8 cart">
    <div class="title">
        <div class="row">
            <div class="col"><h4><b>Shopping Cart</b></h4></div>
            <div class="col align-self-center text-right text-muted">{{ $lists->count() }} items</div>
        </div>
    </div> 
    @php $total_price = 0; @endphp
    @forelse ($lists as $list)
        @php $total_price = $total_price + ($list->product->price * $list->quantity); @endphp
        <div class="row border-top border-bottom">
            <div class="row main align-items-center">
                <!-- <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/1GrakTl.jpg"></div> -->
                <div class="col">
                    <div class="row text-muted">{{ $list->product->name }}</div>
                </div>
                <div class="col">
                    <a href="javascript:void(0);" add-to-cart="minus" data-product-id="{{ $list->product->id }}">-</a>
                    <a href="javascript:void(0);" class="border product-quantity">{{ $list->quantity }}</a>
                    <a href="javascript:void(0);" add-to-cart="plus" data-product-id="{{ $list->product->id }}">+</a>
                </div>
                <div class="col">₹ {{ $list->product->price * $list->quantity }}</div>
            </div>
        </div>
    @empty
        <div class="row border-top border-bottom">
            <div class="row main align-items-center">
                No Item's Added
            </div>
        </div>
    @endforelse

    <div class="back-to-shop"><a href="{{ route('product') }}">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
</div>
<div class="col-md-4 summary">
    <div><h5><b>Summary</b></h5></div>
    <hr>
    
    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
        <div class="col">TOTAL PRICE</div>
        <div class="col text-right">₹ {{ $total_price }}</div>
    </div>
</div>