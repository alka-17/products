<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Products</title>
</head>
<body>
    <main role="main">
        <section class="jumbotron text-center">
            <div class="container">
            <h1 class="jumbotron-heading">Welcome!</h1>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    @forelse ($lists as $list)
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="{{ url($list->image) }}" alt="img">
                            <div class="card-body">
                                <p class="card-text">
                                    <span><b>{{ $list->name }}</b></span><br>
                                    <span>Price:  ₹ {{ $list->price }}</span><br>
                                    <span>Quantity: {{ $list->quantity }}</span><br>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('product.detail', ['id' => $list->id]) }}" class="btn btn-sm btn-outline-secondary">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty  
                    @endforelse
                </div>
            </div>
        </div>
    </main>
</body>
</html>

