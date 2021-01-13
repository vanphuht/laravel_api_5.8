@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Danh mục bài viết</div>
                <a href="{{url('admin')}}">Trở về trang admin</a>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Stt</th>
                            <th scope="col">ID</th>
                            <th scope="col">Tiêu đề</th>
                            <th scope="col">views</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Mô tả ngắn</th>
                            <th scope="col">Danh mục</th>
                            <th scope="col">Quản lý</th>

                          </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=0;
                            @endphp
                            @foreach ($posts as $post)
                            @php
                                $i++;
                            @endphp
                            <tr>
                                <th scope="row">{{$i}}</th>
                                <th scope="row">{{$post->id}}</th>
                                <td>{{$post->title}}</td>
                                <th scope="col">{{$post->views}}</th>
                                <td><img class="w-50" src="{{asset('public/images/'.$post->image)}}" alt=""></td>
                                <td>{!!$post->short_desc!!}</td>
                                <th scope="col">{{$post->post_category_id}}</th>
                                <td>
                                    <form action="{{route('post.destroy',$post->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Xóa</button>
                                    </form>
                                        <a class="btn btn-success mt-2" href="{{route('post.show',$post->id)}}">Edit</a>


                                </td>

                              </tr>
                            @endforeach


                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
