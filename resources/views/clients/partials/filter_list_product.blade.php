    <div class="row">
        @forelse($products as $product)
            <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                <div class="product card mb-3">
                    <a class="card-product-link-a"
                        href="{{ route('products.single', ['slug' => $product->slug, 'id' => $product->id]) }}">
                        <img src="{{ $product->image_url }}" class="card-img-top" alt="{{ $product->name }}"
                            style="max-height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">
                                @if ($product->real_price)
                                    <s> {{ number_format($product->real_price) }} VNĐ</s>
                                    <br>
                                @endif
                                <span class="text-danger">
                                    {{ number_format($product->price ?? $product->price) }}
                                    VNĐ</span>
                            </p>
                            <div class="rating-section">
                                <div class="stars">
                                    @php
                                        $rating = $product->rating_avg;
                                        $fullStars = floor($rating);
                                        $decimal = $rating - $fullStars;
                                        $fractionalStar = null;
                                        if ($decimal < 0.4 && $decimal >= 0.25) {
                                            $fractionalStar = 'quarter-star';
                                        } elseif ($decimal >= 0.4 && $decimal <= 0.6) {
                                            $fractionalStar = 'half-star';
                                        } elseif ($decimal > 0.6 && $decimal <= 0.75) {
                                            $fractionalStar = 'three-quarter-star';
                                        }
                                    @endphp
                                    @for ($i = 0; $i < 5; $i++)
                                        <span
                                            class="@if ($i < $fullStars) filled @elseif($i == $fullStars && $fractionalStar) {{ $fractionalStar }} @else empty @endif">
                                            <!-- SVG nền (sao rỗng) -->
                                            <svg class="star-background" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                            </svg>
                                            <!-- SVG phủ (sao đầy hoặc sao phân số) -->
                                            @if ($i < $fullStars || ($i == $fullStars && $fractionalStar))
                                                <svg class="star-fill" viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                                </svg>
                                            @endif
                                        </span>
                                    @endfor
                                </div>
                                <span class="review-count">{{ $product->rating_count }} đã mua</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @empty
            <p>Không có sản phẩm nào.</p>
        @endforelse
    </div>
    <!-- Phân trang -->
    <div class="mt-3">
        {!! $products->withQueryString()->links() !!}
    </div>
