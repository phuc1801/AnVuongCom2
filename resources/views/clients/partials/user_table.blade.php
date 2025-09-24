@if ($orders->count() > 0)
    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-light">
                <tr>
                    <th>Mã đơn</th>
                    @if ($status === 'all')
                        <th>Ngày tạo</th>
                    @endif
                    <th>Ngày cập nhật</th>
                    <th>Trạng thái</th>
                    <th>Tổng tiền</th>
                    <th>Chi tiết</th>
                    @if ($status === 'pending' || $status === 'processing' || $status === 'all')
                        <th>Thao tác</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        @if ($status === 'all')
                            <td>{{ $order->created_at->format('d/m/Y H:i') }}</td>
                        @endif
                        <td>{{ $order->updated_at->format('d/m/Y H:i') }}</td>
                        <td>
                            @switch($order->status)
                                @case('pending')
                                    <span class="badge bg-primary">Đang chờ duyệt</span>
                                @break

                                @case('processing')
                                    <span class="badge bg-warning text-dark">Đang xử lý</span>
                                @break

                                @case('shipping')
                                    <span class="badge bg-info text-dark">Đang vận chuyển</span>
                                @break

                                @case('completed')
                                    <span class="badge bg-success">Hoàn thành</span>
                                @break

                                @case('cancelled')
                                    <span class="badge bg-danger">Đã hủy</span>
                                @break

                                @default
                                    <span class="badge bg-secondary">Lỗi</span>
                            @endswitch
                        </td>
                        <td>{{ number_format($order->total_price, 0, ',', '.') }}₫</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-primary viewOrder"
                                data-items='@json($order->orderItems)' data-coupon='@json($order->coupon?->value)'>
                                Xem
                            </a>
                        </td>
                        @if (!$order->requestDestroy && ($order->status === 'pending' || $order->status === 'processing'))
                            <td style="text-align: center">
                                <a href="#" class="btn btn-sm btn-outline-danger requestToDestroy"
                                    data-order-id="{{ $order->id }}">Yêu cầu
                                    hủy</a>
                            </td>
                        @elseif($order->requestDestroy && ($order->status !== 'pending' || $order->status !== 'processing'))
                            <td style="text-align: center">
                                <span style="color: red">Đã yêu cầu hủy</span>
                            </td>
                        @else
                            <td></td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@else
    <div class="text-center py-4">
        <p class="text-muted mb-0">Không có đơn hàng nào trong mục này.</p>
    </div>
@endif
