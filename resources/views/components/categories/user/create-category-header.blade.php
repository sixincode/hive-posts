<div id="category-header" class="header">
  <x-hive-display-section component='boxedSection' class='p-6 py-4 bg-slate-100 dark:border-slate-700'>
  <div class="space-y-3 sm:flex sm:items-center sm:justify-between sm:space-x-4 sm:space-y-0">
    <div class="flex">
      <x-hive-form-icon
      path='category'
      width='6'
      height='6'
      class=' '
      />
    <h2 class="text-md font-semibold leading-6 text-slate-700 dark:text-white sm:text-lg sm:leading-9 sm:truncate">
      {{__('New category')}}
    </h2>
  </div>
    <button wire:click.prevent="saveCategory"
            class="relative inline-flex items-center bg-blue-500 px-6 py-2 rounded-md text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:bg-blue-700 focus:ring-blue-300">
      <svg
      class="h-5 w-5"
      x-description="Heroicon name: solid/check"
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 20 20"
      fill="currentColor"
      aria-hidden="true">
       <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
             clip-rule="evenodd"/>
      </svg>
      <p class="ml-2.5">{{__("Publish")}}</p>
    </button>
    </div>
  </x-hive-display-section>
</div>
