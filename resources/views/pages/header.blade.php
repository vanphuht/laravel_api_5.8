<div class="header">
    <div class="container">
        <div class="head">
        <div class="navigation">
             <span class="menu"></span>
                <ul class="navig">
                    <li><a href="{{url('/')}}"  class="active">Home</a></li>
                    @foreach ($categorys as $category)
                    <li><a href="{{route('danh-muc.show',['id'=>$category->id, 'slug'=>Str::slug($category->title) ] )}}">{{$category->title}}</a></li>
                    @endforeach
                </ul>
        </div>
        <div class="header-right">
            <div class="search-bar">
                <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                <input type="submit" value="">
            </div>
            <ul>
                <li><a href="#"><span class="fb"> </span></a></li>
                <li><a href="#"><span class="twit"> </span></a></li>
                <li><a href="#"><span class="pin"> </span></a></li>
                <li><a href="#"><span class="rss"> </span></a></li>
                <li><a href="#"><span class="drbl"> </span></a></li>
            </ul>
        </div>
            <div class="clearfix"></div>
        </div>
        </div>
    </div>
