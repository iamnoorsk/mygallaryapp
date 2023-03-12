<div>
    @if ($paginator->hasPages())
        <nav role="navigation" class="pagination-nav">
            <span>
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <span>
                        {!! __('pagination.previous') !!}
                    </span>
                @else
                    <button wire:click="previousPage" wire:loading.attr="disabled" rel="prev" class="btn-previous">
                        {!! __('pagination.previous') !!}
                    </button>
                @endif
            </span>
 
            <div class="links">
                <div>
                    {{-- pages number --}}
                    @foreach($elements[0] as $page => $url)
                    <button {{ $page == $paginator->currentPage() ? 'disabled' : '' }}
                        wire:click="gotoPage({{$page}})"    
                        class="link-btn"    
                    >
                            {{ $page }}
                    </button>
                    @endforeach
                    {{-- pages number --}}
                </div>
                <p>Showing {{ $paginator->firstItem() }} to {{ $paginator->lastItem() }} of {{ $paginator->total() }} results</p>
            </div>

            <span>
                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <button class="btn-next" wire:click="nextPage" wire:loading.attr="disabled" rel="next">
                        {!! __('pagination.next') !!}
                    </button>
                @else
                    <span>
                        {!! __('pagination.next') !!}
                    </span>
                @endif
            </span>
        </nav>
    @endif
    
</div>