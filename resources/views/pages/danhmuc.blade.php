@extends('layout')
@section('content')
<!--start-single-->
<div class="about">
    <div class="container">
        <div class="about-main">
            <div class="col-md-8 about-left">
                <div class="about-one">

                    <h3>{{$cate->title}}</h3>
                </div>
                <div class="about-two">
                    <a href="single.html"><img src="images/c-1.jpg" alt="" /></a>
                    <p>Posted by <a href="#">Johnson</a> on 10 feb, 2015 <a href="#">comments(2)</a></p>
                    <p>Phasellus fringilla enim nibh, ac pharetra nulla vestibulum ac. Donec tempor fermentum felis, non placerat sem ultrices ut. Nam molestie nunc nec felis hendrerit, in pulvinar arcu mollis. Quisque eget purus nec velit venenatis tincidunt vitae ac massa. Proin vel ornare tellus. Duis consectetur gravida tellus ut varius. Aenean tellus massa, laoreet ut euismod et, pretium id ex. Mauris hendrerit suscipit hendrerit.</p>

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
                                <label>May 29, 2015</label>
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

