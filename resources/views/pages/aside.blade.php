<div class="col-md-4 about-right heading">
    <div class="abt-1">
        <h3>ABOUT US</h3>
        <div class="abt-one">
            <img src="public/images/c-2.jpg" alt="" />
            <p>Quisque non tellus vitae mauris luctus aliquam sit amet id velit. Mauris ut dapibus nulla, a dictum neque.</p>
            <div class="a-btn">
                <a href="single.html">Read More</a>
            </div>
        </div>
    </div>
    <div class="abt-2">
        <h3>BÀI VIẾT MỚI NHẤT</h3>
        @foreach ($news_posts as $news_post)
        <div class="might-grid">
            <div class="grid-might">
                <a href="single.html"><img src="{{asset('public/images/'.$news_post->image)}}" alt="{{Str::slug($news_post->title)}}" class="img-responsive" alt=""> </a>
            </div>
            <div class="might-top">
                <h4><a href="single.html">{{$news_post->title}}</a></h4>
                <p>{!!substr($news_post->short_desc,0,155)!!}...</p>
            </div>
            <div class="clearfix"></div>
        </div>
        @endforeach


    </div>
    <div class="abt-2">
        <h3>BÀI VIẾT XEM NHIỀU</h3>
        <ul>
            @foreach ($post_views as $post_view)
            <li><a href="{{route('bai-viet.show',$post_view->id)}}">{{$post_view->title}}</a></li>
            @endforeach


        </ul>
    </div>
    <div class="abt-2">
        <h3>NEWS LETTER</h3>
        <div class="news">
            <form>
                <input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" />
                <input type="submit" value="Subscribe">
            </form>
        </div>
    </div>
</div>
