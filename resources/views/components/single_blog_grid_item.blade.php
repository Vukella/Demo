<div class="col-lg-6 col-md-6">
    <div class="single-blog-grid-item"><!-- single blog grid item -->
        <div class="thumb">
            <img src="{{$blog->thumbnail}}" alt="blog images">
        </div>
        <div class="content">
            <ul class="post-meta">
                <li><a href="#">{{$blog->published_at}}</a></li>
                <li><a href="#">{{$blog->author->name}}</a></li>
            </ul>
            <h4 class="title"><a href="/blog/{{$blog->slug}}">{{$blog->title}}</a></h4>
            <a href="#" class="readmore">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
    </div><!-- //. single blog grid item -->
</div>
