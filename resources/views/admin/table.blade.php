<div>
    <div class="relative w-full max-w-xl sm:w-full  focus-within:text-purple-500 mb-3">
        <div class="absolute inset-y-0 flex items-center pl-2">
            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                    clip-rule="evenodd"></path>
            </svg>

        </div>
        <div wire:loading wire:target="search"  style="position: absolute;left:94%"  class="w-5    float-right pl-2 m-2 mr-2 h-5 border-2 border-dashed rounded-full animate-spin dark:border-violet-400"></div>

        <input wire:model="search"
        class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
        type="text" placeholder="گەڕانی زیرەك" aria-label="Search" />


    </div>

    @if ($Latest->isNotEmpty())
        

    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
          <table class="w-full whitespace-no-wrap">
            <thead>
              <tr class="text-xs text font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                <th class="px-4 py-3">Auther</th>
                <th class="px-4 py-3">title</th>
                <th class="px-4 py-3">excerpt</th>
                <th class="px-4 py-3">Date</th>
                <th class="px-4 py-3 text-center">Actions</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                @foreach ($Latest as $item)
                    
              <tr class="text-gray-700 dark:text-gray-400 items-center">
                <td class="px-4 py-3">
                  <div class="flex items-center text-sm">
                    <!-- Avatar with inset shadow -->
                    <div class="relative  w-8 h-8 mr-3 rounded-full ">
                      <img class="object-cover w-full h-full rounded-full" src="{{ asset('assets/img/woman.jpg') }}" alt="" loading="lazy">
                      <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                    </div>
                    <div>
                      <p class="font-semibold">{{ $item->name }}</p>
                      <p class="text-xs text-gray-600 dark:text-gray-400">
                        Publisher
                      </p>
                    </div>
                  </div>
                </td>
                <td class="px-4 py-3 text-sm">
                  {{ $item->title }}
                </td>
                <td class="px-4 py-3 text-xs">
                  <span class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-green-100 rounded-full dark:bg-gray-700 dark:text-gray-100">
                    {{ $item->created_at->format('m-d-Y') }}
                  </span>
                </td>
                <td class="px-4 py-3 text-sm">
                  {{ $item->created_at->format('H:s A') }}
                </td>
                <td class="px-4 py-3 flex justify-center">
                  <div class="flex items-center space-x-4 text-sm">
                    <a href="{{ route('Edit',$item->id)}}"class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                      <svg class="w-5 h-5 text-purple-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                      </svg>
                    </a>
                    <button wire:click.prevent="delete('{{ $item->id }}')" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                      <svg class="w-5 h-5 text-red-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                      </svg>
                    </button>
                    <a href="{{ route('show',$item->id) }}"  class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 text-indigo-400 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                          </svg>
                      </a>

                   
                  </div>
                </td>
              </tr>
              @endforeach


              
            </tbody>
          </table>
        </div>
        <hr>
        <div class="bg-gray-200 text-gray-600  dark:bg-gray-800 px-2 py-2 uppercase text-sm leading-normal">
            <span >{{$Latest->links('vendor.livewire.tailwind')}}</span>
        </div>
      </div>
      @else
      <div class="text-center items-center py-2 text-red-400">هیچ داتایەک نەدۆزرایەوە</div>
      @endif
    </div>
