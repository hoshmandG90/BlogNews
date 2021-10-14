<div>

    <div class="flex justify-center mb-3 mt-3">
        <div class="relative w-full max-w-xl sm:w-full  focus-within:text-purple-500">
            <div class="absolute inset-y-0 flex items-center pl-2">
                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd"></path>
                </svg>

            </div>
            <div wire:loading wire:target="search"  style="position: absolute;left:88%"  class="w-5    float-right pl-2 m-2 mr-2 h-5 border-2 border-dashed rounded-full animate-spin dark:border-violet-400"></div>

            <input wire:model="search"
            class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
            type="text" placeholder="گەڕانی زیرەك" aria-label="Search" />


        </div>


    </div>

    @if ($news->isNotEmpty())
        

	<div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 mt-4">
        @foreach ($news as $item)
            
      
        <a href="{{ route('show',$item->id) }}" class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-coolGray-900">
            <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-coolGray-500" src="{{ $item->imagepath }}">
            <div class="p-6 space-y-2">
                <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">{{ $item->title }}</h3>
                <span class="text-xs dark:text-coolGray-400">{{ $item->created_at->format('M  d  Y') }}</span>
                <p>{{ $item->excerpt }}</p>
            </div>
        </a>
        </a>
        @endforeach
    
      
    </div>

    @if ($limit <$news->total())
         

    <div wire:click="LoadMore" class="flex justify-center relative">

        <button class="px-6 py-3 text-sm bg-gray-200 dark:bg-gray-800 rounded-md hover:underline  ">بینینی بەشەکانی تر...</button>
        <div wire:loading   style="position: absolute;top:0%" class="w-7 h-7 mt-2 m-2 border-4 border-dashed rounded-full animate-spin dark:border-violet-400"></div>


    </div>
    @endif
    @else
    <div class="text-center mt-4 mb-4 text-red-400 ">هیچ داتایەک نەدۆزرایەوە</div>
    @endif
</div>

