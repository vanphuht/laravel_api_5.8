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
                    <form action="{{route('category.update',$category->id)}}" method="post" >
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="title"> tiêu đề</label>
                            <input type="text" class="form-control" name="title" placeholder="Tiêu đề ..." value="{{$category->title}}">
                            <input type="submit" name="themdanhmuc" class="btn btn-primary mt-2" value="sửa danh mục">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
