<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Example DataTables Search</title>
    <!-- CSS DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JS DataTables -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
</head>
<body>

<h2>Danh sách ảnh</h2>
<table id="example-table" class="display" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên ảnh</th>
            <th>Loại</th>
        </tr>
    </thead>
    <tbody>
        <tr><td>1</td><td>Banner 1</td><td>slide</td></tr>
        <tr><td>2</td><td>Banner 2</td><td>banner</td></tr>
        <tr><td>3</td><td>Logo</td><td>logo</td></tr>
        <tr><td>4</td><td>Slide 1</td><td>slide</td></tr>
    </tbody>
</table>

<script>
$(document).ready(function() {
    // Khởi tạo DataTables
    $('#example-table').DataTable();
});
</script>

</body>
</html>
