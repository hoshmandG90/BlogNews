<div>


    <!-- component -->
    <!-- component -->

    <div class="mt-2 mb-3 rounded-lg">
        خوێندنەوەی رەسەمەکە:
        <img src="{{ asset("upload/photos/$user->photos") }}" class="rounded-lg shadow-sm object-cover" width="200"
            height="200">
    </div>
    <form wire:submit.prevent="Edit('{{ $user->id }}')" class="w-full">
        @csrf
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide  text-xs font-bold mb-2" for="grid-password">
                    سەردێری هەواڵەکە
                </label>
                <input wire:model.defer="title"
                    class="w-full py-2 pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                    type="text">

            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide  text-xs font-bold mb-2" for="grid-password">
                    کورتەیەك هەواڵەکە
                </label>
                <input wire:model.defer="excerpt"
                    class="w-full py-2 pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                    type="text">
            </div>
        </div>
        <div wire:ignore class="rounded-md shadow-sm" x-data="{
        isFocused() { return document.activeElement !== this.$refs.trix },
        setValue() { this.$refs.trix.editor.loadHTML(this.value) },
    }" x-init="setValue(); $watch('value', () => isFocused() && setValue())"
            x-on:trix-change="value = $event.target.value" class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block   text-xs font-bold mb-2">
                    درێزەی بابەت
                </label>
                <input id="x" type="hidden">
                <trix-editor wire:model.defer="body" input="x"
                    class="w-full py-2 pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input">
                </trix-editor>

            </div>

        </div>
        <div class="grid grid-cols-1 mt-5 mx-7 mb-3 mt-2">
            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Upload Photo</label>
            <div class='flex items-center justify-center w-full'>
                <label
                    class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                    <div class='flex flex-col items-center justify-center pt-7'>
                        <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg>
                        <p class='lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>
                            وێنەیک دیاری بکە</p>
                    </div>
                    <input wire:model.defer="NewPhotos" type='file' class="hidden" />
                </label>
            </div>
        </div>

        <div class="flex space-x-2">
            @if ($NewPhotos)
            <div class="mt-2 mb-3 rounded-lg">
                Image Preview:
                <img src="{{ $NewPhotos->temporaryUrl() }}" class="rounded-lg shadow-sm object-cover" width="200"
                    height="200">
            </div>
            @endif

        </div>
        <div>
            <button
                class="px-10 py-2 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                گۆرانکاری
            </button>
        </div>
    </form>


</div>
