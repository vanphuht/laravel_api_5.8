@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm danh mục bài viết</div>
                <a href="{{url('admin')}}">Trở về trang admin</a>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title"> tiêu đề</label>
                            <input type="text" class="form-control" name="title" placeholder="Tiêu đề ...">
                            <label for="title"> Lượt view</label>
                            <input type="text" class="form-control" name="views" placeholder="Thêm lượt view...">
                            <label for="title"> hình ảnh</label>
                            <input type="file" name="image" class="form-control">
                            <label for="title"> Mô tả ngắn</label>
                            <textarea id="short_desc" type="text" class="form-control" name="short_desc" rows="5" class="form-control" placeholder="Mô tả ngắn ..."></textarea>

                            <label for="title"> Nội dung </label>
                            <textarea id="desc" type="text" class="form-control" name="desc" rows="5" class="form-control" placeholder="Mô tả ..."></textarea>

                            <label for="title"> Danh mục bài viết </label>
                            <select name="post_category_id" class="form-control" id="">
                                @foreach ($categorys as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>

                            <input type="submit" name="themdanhmuc" class="btn btn-primary mt-2" value="Thêm danh mục">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
