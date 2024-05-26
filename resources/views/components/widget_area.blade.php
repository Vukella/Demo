<div class="col-lg-4">
    <div class="sidebar widget-area"><!-- widget area -->

        <div class="widget widget_search"><!-- widget  -->
            <h4 class="widget-title">Search</h4>
            <form action="blog.html" class="search-form">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button class="submit-btn" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div><!-- //. widget -->

        <div class="widget widget_categories"><!-- widget  -->
            <h4 class="widget-title">Categories</h4>
            <ul>
                @foreach ($categories as $category)
                    <li class="cat-item"><a href="{{ url('blogs/category/' . $category->name) }}">{{$category->name}}</a></li>    
                @endforeach
            
            </ul>
        </div>
        <div class="widget widget_popular_posts"><!-- widget  -->
            <h4 class="widget-title">Popular Posts</h4>
            <ul>
                <li class="single-popular-post-item"><!-- single popular post item -->
                    <div class="thumb">
                        <img src="{{ asset('assets/img/how-it-works-image.png') }}" alt="popular post image">
                    </div>
                    <div class="content">
                        <span class="time">June 20, 18</span>
                        <h4 class="title"><a href="#">Aliquam eu mauris euismod lacus vel.</a></h4>
                    </div>
                </li><!-- //. single popular post item -->
                <li class="single-popular-post-item"><!-- single popular post item -->
                    <div class="thumb">
                        <img src="{{ asset('assets/img/how-it-works-image.png') }}" alt="popular post image">
                    </div>
                    <div class="content">
                        <span class="time">June 20, 18</span>
                        <h4 class="title"><a href="#">Aliquam eu mauris euismod lacus vel.</a></h4>
                    </div>
                </li><!-- //. single popular post item -->
                <li class="single-popular-post-item"><!-- single popular post item -->
                    <div class="thumb">
                        <img src="{{ asset('assets/img/how-it-works-image.png') }}" alt="popular post image">
                    </div>
                    <div class="content">
                        <span class="time">June 20, 18</span>
                        <h4 class="title"><a href="#">Aliquam eu mauris euismod lacus vel.</a></h4>
                    </div>
                </li><!-- //. single popular post item -->
            </ul>
        </div>
        <div class="widget widget_tag_cloud"><!-- widget -->
            <h4 class="widget-title">Tags</h4>
            <div class="tagcloud">
                @foreach ($tags as $tag)
                    <a href="{{ url('blogs/tag/' . $tag->name) }}">{{$tag->name}}</a>    
                @endforeach
            </div>
        </div>

    </div>
</div>
</div>