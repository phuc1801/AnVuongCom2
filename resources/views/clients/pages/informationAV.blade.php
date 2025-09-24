<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Tin tức an vượng</title>
    <link rel="stylesheet" href="{{ asset('bs5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home/header_footer_responsive.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/article/blog.css') }}">
</head>

<body>
    @include('clients.partials.header_client')

    <main>
        <div class="container">
            @foreach ($articles as $article)
                <div class="post">
                    <a href="{{ route('blog.detail') }}">
                        <img src="{{ $article->image_url }}" alt="minh hoa">
                        <div class="post-content">
                            <h2>{{ $article->title }}</h2>
                            <p class="meta">🕒 {{ $article->created_at->format('d/m/Y H:i:s') }} •
                                <a href="#" class="author">{{ $article->user->name }}</a>
                            </p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </main>

    @include('clients.partials.footer_client')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/clients/js/swiper_product.js') }}"></script>
    <script src="{{ asset('assets/clients/js/home/header_footer.js') }}"></script>
    <script src="{{ asset('assets/clients/js/list_product/filter_list_product.js') }}"></script>
    <script>
        window.addEventListener("pageshow", function() {
            fetch('/update-cart-item')
                // Số lượng giỏ hàng
                .then(response => response.json())
                .then(data => {
                    document.getElementById('cart-count').innerText = data.cart_sum;
                });
        });
    </script>
</body>

</html>
