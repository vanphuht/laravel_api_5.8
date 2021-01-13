@extends('layout')
@section('content')
@include('pages.banner')
<div class="about">
    <div class="container">
        <div class="about-main">
            <div class="col-md-8 about-left">
                <div class="about-one">
                    <p>Find The Most</p>
                    <h3>Coffee of the month</h3>
                </div>
                <div class="about-two">
                    <a href="single.html"><img src="public/images/c-1.jpg" alt="" /></a>
                    <p>Posted by <a href="#">Johnson</a> on 10 feb, 2015 <a href="#">comments(2)</a></p>
                    <p>Phasellus fringilla enim nibh, ac pharetra nulla vestibulum ac. Donec tempor fermentum felis, non placerat sem ultrices ut. Nam molestie nunc nec felis hendrerit, in pulvinar arcu mollis. Quisque eget purus nec velit venenatis tincidunt vitae ac massa. Proin vel ornare tellus. Duis consectetur gravida tellus ut varius. Aenean tellus massa, laoreet ut euismod et, pretium id ex. Mauris hendrerit suscipit hendrerit.</p>
                    <p>Quisque ultrices ligula a nisl porttitor, vitae porta tortor eleifend. Nulla nec imperdiet ipsum, ut cursus mauris. Proin ut sodales sem, quis vestibulum libero. Proin tempor venenatis congue. Phasellus mollis massa sit amet pharetra consequat. Aliquam quis lacus at sapien tempor semper. Sed ultrices et metus et elementum. Nunc sed justo at erat consequat mollis et eu lectus.</p>
                    <div class="about-btn">
                        <a href="{{url('/bai-viet/1')}}">Read More</a>
                    </div>
                    <ul>
                        <li><p>Share : </p></li>
                        <li><a href="#"><span class="fb"> </span></a></li>
                        <li><a href="#"><span class="twit"> </span></a></li>
                        <li><a href="#"><span class="pin"> </span></a></li>
                        <li><a href="#"><span class="rss"> </span></a></li>
                        <li><a href="#"><span class="drbl"> </span></a></li>
                    </ul>
                </div>
                <div class="about-tre">
                    <div class="a-1">
                        @foreach ($posts as $post)
                        <div class="row" style="margin-top: 15px" >
                            <div class="col-md-6 abt-left">
                                <a href="{{route('bai-viet.show',$post->id)}}"><img src="{{asset('public/images/'.$post->image)}}" alt="{{Str::slug($post->title)}}" /></a>
                            </div>
                            <div class="col-md-6 abt-left">
                                <h6>{{$post->category->title}}</h6>
                                <h3><a href="{{route('bai-viet.show',$post->id)}}">{{$post->title}}</a></h3>
                                <p>{!!$post->short_desc!!}</p>
                                <label>{{date_format($post->created_at,"Y/m/d")}}</label>

                                <div class="banner-btn">
                                    <a href="single.html">Read More</a>
                                </div>
                            </div>

                        </div>
                        @endforeach
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            @include('pages.aside')
            <div class="clearfix"></div>
        </div>
    </div>
</div>

@endsection
