<div>
    <label for="single-upload-635e1f7808c54" :class="{ 'border-blue-200 bg-blue-50 dark:bg-slate-800': focused }" class="group flex justify-center border-2 border-slate-300 dark:border-slate-600 border-dashed hover:border-blue-200 dark:hover:border-slate-600 hover:bg-blue-50 dark:hover:bg-slate-700 rounded-lg cursor-pointer overflow-hidden">
            <div class="w-full px-6 pt-5 pb-6 text-center">
                <svg class="mx-auto h-12 w-12 text-slate-400 group-hover:text-slate-500" :class="{ 'text-slate-500': focused }" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <p class="mt-1 text-sm text-slate-500 group-hover:text-slate-400 dark:text-slate-400 dark:group-hover:text-slate-300">
                    <span :class="{ 'text-blue-500': focused }" class="font-medium text-blue-600 group-hover:text-blue-500 focus:outline-none focus:underline transition duration-150 ease-in-out">
                        Upload a file
                    </span>
                </p>
                <p :class="{ 'text-slate-400': focused }" class="mt-1 text-xs text-slate-500 group-hover:text-slate-400 dark:text-slate-400 dark:group-hover:text-slate-300">
                    PNG, JPG, GIF up to 5 MB
                </p>
                <input @focus="focused = true" @blur="focused = false" class="sr-only" type="file" wire:model="file" id="single-upload-635e1f7808c54">
            </div>
            <div class="w-full h-32 bg-slate-50 dark:bg-slate-700 p-6 hidden flex items-center justify-center" wire:loading.class.remove="hidden" wire:target="file">
                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-blue-600" wire:loading="wire:loading" wire:target="file" fill="none" viewBox="0 0 24 24">
    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
</svg>
            </div>
        </label>
 <!-- <x-hive-display-card component='pollen'>

  </x-hive-display-card> -->
</div>
