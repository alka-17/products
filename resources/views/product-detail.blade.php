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
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">
                        @foreach ($product->categories ?? [] as $category)
                            <span>{{ $category->name }}</span>&nbsp;
                        @endforeach
                    </strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="javascript:void(0);">{{ $product->name }}</a>
                    </h3>
                    <div class="mb-1 text-muted"> ₹ {{ $product->price }}</div>
                    <p class="card-text mb-auto">{{ $product->description }}</p>
                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" src="{{ url($product->image) }}" alt="img" style="width: 300px;" >
                </div>
            </div>
        </div>
    </main>
</body>
</html>

