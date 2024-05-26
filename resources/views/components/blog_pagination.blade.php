@php
    $currentPage = request()->get('page',1);   
    $currentPath = request()->path(); 
@endphp

@unless ($totalPages == 1)
    <div class="col-lg-12">
        <div class="blog-pagination margin-top-10"><!-- blog pagination -->
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <!-- arrow for previous -->
                    @unless ($currentPage == 1)
                        <li class="page-item">
                            <a class="page-link" href="{{ url($currentPath . '?page=' . $currentPage-1) }}" aria-label="Previous">
                                    <i class="fas fa-chevron-left"></i>
                            </a>
                        </li>
                    @endunless
                    <!-- numbers -->
                    @for($i=1; $i < $totalPages+1; $i++)
                        <li class="page-item {{$currentPage == $i ? 'active' : ''}}">
                            <a class="page-link" href="{{ url($currentPath . '?page=' . $i) }}">{{ $i }}</a></li>
                    @endfor
                    <!-- arrow for next -->
                    @unless ($currentPage == $totalPages)
                        <li class="page-item">
                            <a class="page-link" href="{{ url($currentPath . '?page=' . $currentPage+1) }}" aria-label="Next">
                                    <i class="fas fa-chevron-right"></i>
                            </a>
                        </li>
                    @endunless
                </ul>
            </nav>
        </div><!-- //. blog pagination -->
    </div>
@endunless