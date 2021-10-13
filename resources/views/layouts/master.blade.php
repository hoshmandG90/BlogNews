<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ZingSoft</title>
 

    
    {{--Tailwind-CSS --}}
    <link rel="stylesheet" href="{{asset('assets/css/tailwind.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/tailwind.output.css')}}" />


    {{-- End Tailwind-CSS   --}}

    <link rel="icon" href="{{asset('assets/img/broadcast.png')}}">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"defer></script>
    <script src="{{asset('assets/js/init-alpine.js')}}"></script>

    <link rel="stylesheet" href="{{ asset('assets/css/trix.css') }}">
   
    @livewireScripts
    @livewireStyles


    
    <style>
        ::-webkit-scrollbar {
        width: 3px;
        height: 3px;
      }
      ::-webkit-scrollbar-button {
        width: 0px;
        height: 0px;
      }
      ::-webkit-scrollbar-thumb {
        background: #2d3748;
        border: 0px none #ffffff;
        border-radius: 50px;
      }
      ::-webkit-scrollbar-thumb:hover {
        background: #2b6cb0;
      }
      ::-webkit-scrollbar-thumb:active {
        background: #000000;
      }
      ::-webkit-scrollbar-track {
        background: #1a202c;
        border: 0px none #ffffff;
        border-radius: 50px;
      }
      ::-webkit-scrollbar-track:hover {
        background: #666666;
      }
      ::-webkit-scrollbar-track:active {
        background: #333333;
      }
      ::-webkit-scrollbar-corner {
        background: transparent;
      }
      
    </style>


    

</head>
<body>
        

    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <!-- Desktop sidebar -->
        <aside class="z-20 hidden w-64    md:block flex-shrink-0">
            @include('components.#DesktopSidebar')
        </aside>
        <!-- END Desktop sidebar -->


        <!-- Mobile sidebar -->
        <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
        <aside
            class="fixed inset-y-0 z-20 rounded-lg flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
            x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
            x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
            @keydown.escape="closeSideMenu">
            @include('components.#MobileSidebar')
        </aside>
        <!-- End Mobile sidebar -->

        <div class="flex flex-col flex-1 w-full">
            @include('components.#Header')
            <main class="h-full overflow-y-auto dark:text-gray-200">
                <div class="flex justify-center px-6 my-2 mx-auto mb-4 ">
                  


                    <div class="container ">
                        
                        @yield('content')
                 
 <div class=" pt-2 ">
    <div class="flex pb-5 px-3 m-auto pt-5 border-t  text-sm flex-col
       md:flex-row max-w-6xl">
       <div class="mt-2">     
            <span>  بۆ دروستکردنی هەموو جۆرە داتابەسێک و سیستەمی ژمێریاری بەخواستی خۆتان </span> (ZingSoft)
            <br>
           <span>Hoshmand Kamal Co. 0751 131 95 37</span></div>
       <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex">
          <a href="https://github.com/hoshmandG90" class="w-6 mx-1 mt-2">
             
             <img src="{{ asset('assets/img/github.png') }}" title="Hoshmand Kamal" class=" cursor-pointer text-gray-500 hover:text-gray-400" alt="">
          </a>
          <a href="https://www.facebook.com/hoshman12" class="w-6 mx-1 mt-2">
             <img src="{{ asset('assets/img/facebook.png') }}" title="Hoshmand Kamal" class=" cursor-pointer text-gray-500 hover:text-gray-400" alt="">
          </a>
          <a href="https://www.instagram.com/_hos6mand_/" class="w-6 mx-1 mt-2">
           <img src="{{ asset('assets/img/instagram.png') }}" title="Hoshmand Kamal" class=" cursor-pointer text-gray-500 hover:text-gray-400" alt="">
          </a>
          <a href="https://www.viber.com/en//07511319537" class="w-6 mx-1 mt-2">
            <img src="{{ asset('assets/img/viber.png') }}" class="cursor-pointer text-gray-500 hover:text-gray-400" title="0751 131 95 37" alt="">
          </a>
       
       </div>
    </div>
 </div>

        
                       </div>
                    <!-- CTA Containers AND Main section To The Master Layout -->
                    {{-- <div class="items-center" >
                        <h1 class="font-bold  text-center">Following</h1>
                         @foreach (range(1,8) as $item)
                         <div class=" p-2  ">
                            <div class="flex justify-between items-center p-3  rounded-lg relative">
                                <div class="w-16 h-16 relative flex flex-shrink-0">
                                    <img class="shadow-md rounded-full w-full h-full "
                                         src="https://randomuser.me/api/portraits/women/61.jpg"
                                         alt=""
                                    />
                                </div>
                                <div class="flex-auto truncate  ml-4 mr-6  group-hover:block">
                                    <p>Angelina Jolie</p>
                                  
                                </div>
                            </div>
                       
                       
                         
                        
                        </div>
                         @endforeach
                    </div> --}}
                   
                </div>

              
            </main>
        </div>
        
    </div>
    


    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/trix.js') }}"></script>


   
</body>

</html>
