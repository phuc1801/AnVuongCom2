<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <table class="table">
        <h1>Quản lý bài viết</h1>
        <p>Số lượng bài viết: {{$articles->count()}}</p>
        <a href="{{route('admin.test_add')}}">Thêm</a>
        <thead>
            <tr>
                <th scope="col">Tiêu đề</th>
                <th scope="col">Nội dung</th>
                <th scope="col">Loại</th>
                <th>Hoạt động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                
                <th>{{$article->title}}</th>
                <th>{{$article->content}}</th>
                <th>{{$article->type}}</th>
                <th>
                    <a href="">Sửa</a>
                    <form action="{{ route('article.delete') }}" method="POST">
                        @csrf
                        <input type="hidden" name="article_id" value="{{ $article->id }}">
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>


                </th>
               
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>