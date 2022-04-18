@if ($paginator->hasPages())
    <div role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex  pagination">
        <div class="flex justify-between flex-1 sm:hidden">



        </div>

        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            {{-- <div>
                <p class="text-sm text-gray-700 leading-5">
                    {!! __('Showing') !!}
                    <span class="font-medium">{{ $paginator->firstItem() }}</span>
                    {!! __('to') !!}
                    <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    {!! __('of') !!}
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div> --}}

            <div class="flex page_box">
                <form  method="get" action="#" class="pagination_nim">
                    <label for="wood-choice">Pages displaied :</label>
                    <select id="wood" onchange="this.form.submit()" name="messagesByPage">
                        <option value="5"
                        @if ($messagesByPage === 5)
                            selected
                        @endif
                        >5</option>
                        <option value="10"
                        @if ($messagesByPage === 10)
                        selected
                    @endif
                    >10</option>
                        <option value="15"
                        @if ($messagesByPage === 15)
                        selected
                    @endif
                    >15</option>
                        <option value="20"
                        @if ($messagesByPage === 20)
                        selected
                    @endif
                        >20</option>
                        <option value="25"
                        @if ($messagesByPage === 25)
                        selected
                    @endif
                        >25</option>
                        <option value="50"
                        @if ($messagesByPage === 50)
                        selected
                    @endif
                        >50</option>
                    </select>
                </form>


                @if ($paginator->onFirstPage())
                <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                    <img src="{{ asset('img/pagin/back_l.svg') }}" alt="" class="pagin_arrow">
                </span>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                        <img src="{{ asset('img/pagin/back.svg') }}" alt="back" class="pagin_arrow">
                    </a>
                @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span class="">{{ $element }}</span>
                            </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span aria-current="page" class="pagin">
    
                                        <span class="current_page_pagination">{{ $page }}</span>
                                    </span>
                                @else
                                <span class="pagin">
                                    <a href="{{ $url }}" class="" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                        {{ $page }}
                                    </a>
                                </span>
                                    
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                        <img src="{{ asset('img/pagin/next.svg') }}" alt="" class="pagin_arrow">
                    </a>
                @else
                    <span class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                        <img src="{{ asset('img/pagin/next_l.svg') }}" alt="Next" class="pagin_arrow">
                    </span>
                @endif

                </span>
            </div>
        </div>
    </div>
@endif
