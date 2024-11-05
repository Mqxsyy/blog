@if ($paginator->hasPages())
    <nav>
        <div class="mx-auto join grid grid-cols-2 w-1/6">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <button class="btn-disabled join-item btn btn-outline"
                    aria-disabled="true"><span>@lang('pagination.previous')</span></button>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                    class="join-item btn btn-outline">@lang('pagination.previous')</a>
            @endif
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                    class="join-item btn btn-outline">@lang('pagination.next')</a>
            @else
                <button class="btn-disabled join-item btn btn-outline"
                    aria-disabled="true"><span>@lang('pagination.next')</span></button>
            @endif
        </div>
    </nav>
@endif
