<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm bài viết</title>
</head>
<body>
    <h1>Trang thêm</h1>

    <form action="{{ route('admin.test_add_new') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="title">Tiêu đề</label>
            <div>
                <input type="text" name="title" id="title" required>
            </div>
        </div>

        <div>
            <label for="content">Nội dung</label>
            <div>
                <input type="text" name="content" id="content" required>
            </div>
        </div>

        <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Thể loại</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <div id="show-true" class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-primary" data-toggle-class="btn-primary">
                                                <input type="radio" name="type" value="false" required>
                                                Bài viết
                                            </label>
                                            <label class="btn btn-secondary" data-toggle-class="btn-primary"
                                                data-toggle-passive-class="btn-default">
                                                <input type="radio" name="type" value="true">
                                                Mã giảm giá
                                            </label>
                                        </div>
                                    </div>
                                </div>


        <div class="item form-group">
            <label for="article-images" class="col-form-label">Hình ảnh <span class="required">*</span></label>
            <div>
                <label class="custom-file-upload" for="article-images">Chọn ảnh</label>
                <input id="article-images" type="file" accept="image/*" name="images[]" multiple required>
                <div id="image-preview-container">
                    <img src="" alt="Ảnh minh họa">
                </div>
            </div>
        </div>

        <div class="item form-group">
            <button type="reset" class="btn btn-primary">Reset</button>
            <button type="submit" class="btn btn-success">Thêm mới</button>
        </div>
    </form>
</body>
</html>
