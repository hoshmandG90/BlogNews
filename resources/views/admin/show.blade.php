<div>
	<div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($news as $item)
            
      
        <a href="{{ route('show',$item->id) }}" class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-coolGray-900">
            <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-coolGray-500" src="https://images.pexels.com/photos/736843/pexels-photo-736843.jpeg?cs=srgb&dl=pexels-kat-smith-736843.jpg&fm=jpg">
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
</div>

