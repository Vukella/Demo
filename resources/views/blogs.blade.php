<!DOCTYPE html>
<html lang="en">

<x-head></x-head>

<body>

<x-navbar></x-navbar>

<!-- breadcrumb area start -->
<x-breadcrumb_area>
    Blogs
</x-breadcrumb_area>
<!-- breadcrumb area end -->

<div class="page-content-area padding-top-120 padding-bottom-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @foreach ($blogs as $blog)
                        <x-single_blog_grid_item :blog="$blog" />
                    @endforeach

                    <x-blog_pagination/>
                </div>
            </div>
        <x-widget_area :categories="$categories" :tags="$tags"/>
            
        
    </div>
</div>


<!-- footer area start -->
<x-footer></x-footer>
<!-- footer area end -->

<!-- preloader area start -->
<x-preloader></x-preloader>

  <!-- preloader area end -->

  <!-- back to top area start -->
<x-back_to_top_area></x-back_to_top_area>
  <!-- back to top area end -->

<x-scripts></x-scripts>
</body>

</html>