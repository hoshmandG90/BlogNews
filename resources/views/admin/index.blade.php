<div>
 <!-- component -->


 <div class="p-2 md:w-40   ">
    <a href="{{ route('home') }}" class="flex items-center p-4 bg-gray-50 dark:bg-gray-900 rounded-lg shadow-xs cursor-pointer ">
        
        <div>
          <p class="text-xs  ml-2 ">
            گەڕانەوە
          </p>
          
        </div>
    </a>
</div>
<section class="relative pt-12  bg-gray-50 dark:bg-gray-900 mb-3">
<div class="items-center flex flex-wrap">
  <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
    <img alt="..." class="max-w-full rounded-lg shadow-lg" height="200px" src="https://images.unsplash.com/photo-1555212697-194d092e3b8f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80">
  </div>
  <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
    <div class="md:pr-12 mt-3">
    
      <h3 class="text-3xl font-semibold">{{ $item->title }}</h3>
      <p class="mt-4 text-lg leading-relaxed text-blueGray-500">
       {!! $item->body !!}
      </p>
      <ul class="list-none mt-6">
     
        <li class="py-2">
          <div class="flex items-center">
            <div>
            </div>
            <div>
              <h4 class="text-blueGray-500 text-xs">Published At {{ $item->created_at->format('M d ,Y') }}</h4>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<footer class="relative  pt-8 pb-6 mt-8">
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap items-center md:justify-between justify-center">
      <div class="w-full md:w-6/12 px-4 mx-auto text-center">
        <div class="text-sm text-blueGray-500 font-semibold py-1">
          Made with <a href="https://www.creative-tim.com/product/notus-js" class="text-blueGray-500 hover:text-gray-800" target="_blank">Notus JS</a> by <a href="https://www.creative-tim.com" class="text-blueGray-500 hover:text-blueGray-800" target="_blank"> Creative Tim</a>.
        </div>
      </div>
    </div>
  </div>
</footer>
</section>
</div>
