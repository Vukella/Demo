<!DOCTYPE html>
<html lang="en">

<x-head/>

<body>
    
<x-navbar/>

<!-- breadcrumb area start -->
<x-breadcrumb_area>
    Blog details
</x-breadcrumb_area>
<!-- breadcrumb area end -->

<div class="page-content-area padding-top-120 padding-bottom-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                    <div class="single-post-details-item"><!-- blog single content -->
                        <div class="thumb">
                            <img src="{{$blog->thumbnail}}" alt="blog image">
                        </div>
                        <div class="entry-content">
                            <ul class="post-meta">
                                <li><a href="#"><i class="far fa-calendar-alt"></i> {{$blog->published_at}}</a></li>
                                <li><a href="#"><i class="far fa-user"></i> {{$blog->author->name}}</a></li>
                                <li class="cat"><i class="fas fa-tags"></i>
                                    @foreach ($categories as $category)
                                        <a href="#">{{$category->name}}
                                    @endforeach
                                    
                            </ul>
                            <h4 class="title">{{$blog->title}}</h4>
                            {!! $blog->body_one !!}
                            <blockquote> {{ $blog->blockquote }} </blockquote>
                            {!! $blog->body_two !!}
                        </div>
                        <div class="entry-footer"><!-- entry footer -->
                            <div class="left">
                                <ul class="tags">
                                    <li class="title">Tags: </li>
                                    <li>
                                        @foreach ($tags as $tag)
                                            <a href="#">{{$tag->name}}
                                        @endforeach
                                        
                                </ul>
                            </div>
                            <div class="right">
                                <ul class="social-share">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div><!-- //. entry footer -->
    
                        <x-comment_area/>
    
                        <x-comment_form_wrap/>
                    </div> 
            </div>
            <x-widget_area :categories="$categories" :tags="$tags"/>
        </div>
    </div>
</div>


<!-- footer area start -->
<x-footer/>
<!-- footer area end -->

<!-- preloader area start -->
<x-preloader/>

  <!-- preloader area end -->

  <!-- back to top area start -->
<x-back_to_top_area/>
  <!-- back to top area end -->

<x-scripts/>
</body>

</html>