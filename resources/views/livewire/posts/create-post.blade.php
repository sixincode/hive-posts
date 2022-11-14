<div>
  <x-hive-form-tab name='postAspects' naming='postAspects' options='["overview","component","seo","related"]' active='overview' class="">
  <x-hive-display-section source='sections' class='bg-slate-300/20'>
    <x-hive-display-section component='boxedSection' class="py-2">
    <div class="flex gap-4 justify-between xl:gap-6">

      <div class="justify-end flex space-x-2">
        <x-hive-form-dropdown width='w-48'>
          <x-slot name="trigger">
            <button type="button" class="inline-flex items-center p-2 h-10 w-10 font-semibold rounded-full text-gray-500 bg-white hover:bg-gray-100 focus:outline-none focus:ring-4 focus:bg-gray-200 focus:ring-blue-300">
              <svg xmlns="http://www.w3.org/2000/svg" stroke-width="2" class="h-6 w-6 m-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"></path>
              </svg>
           </button>
         </x-slot>
         <x-slot name="content">
           <ul class="grid space-y-2 px-2">
             <!-- foreach start -->
              <li >
               <a href="#" class="group block flex-shrink-0">
                <div class="flex items-center space-x-4 text-gray-500 py-2">
                  <span>
                    <x-hive-form-icon
                    path='seo'
                    class='m-0'
                    width='6'
                    height='6'
                    iconWidth='0.2'
                    />
                  </span>
                  <span class="font-semibold">
                   {{__("SEO")}}
                  </span>
                </div>
               </a>
              </li>
            </ul>
          </x-slot>
          </x-hive-form-dropdown>

          <div class="relative inline-flex divide-x divide-slate-100 border border-transparent rounded-full">
            <button wire:click.prevent="previewContent" class="relative inline-flex items-center bg-white py-2 pl-3 pr-4 rounded-l-full text-gray-500 hover:bg-slate-50 focus:outline-none focus:ring-4 focus:bg-slate-100 focus:ring-blue-300">
              <p class="ml-2.5 font-semibold">{{__("Preview")}}</p>
            </button>
            <x-hive-form-dropdown width='full' triggerClasses="h-full">
              <x-slot name="trigger">
            <button type="button" class="relative inline-flex items-center bg-white text-gray-500 hover:bg-slate-50 p-2 rounded-l-none rounded-r-full text-sm font-medium focus:outline-none focus:ring-4 focus:bg-slate-100 focus:ring-blue-300" x-ref="button" >
              <span class="sr-only">Preview options</span>
              <svg class="h-5 w-5" x-description="Heroicon name: solid/chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </x-slot>
          <x-slot name="content">
            fvdfdf
          </x-slot>

          </x-hive-form-dropdown>
          </div>
          <div x-data="{ saveOptions: false }"   class="sm:ml-3">
             <div class="relative">
                 <div class="inline-flex divide-x divide-blue-600 rounded-full">
                  <button wire:click.prevent="savePost"
                          class="relative inline-flex items-center bg-blue-500 py-2 pl-3 pr-4 rounded-l-full text-white hover:bg-blue-600 focus:outline-none focus:ring-4 focus:bg-blue-700 focus:ring-blue-300">
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
                    <p class="ml-2.5 font-semibold">{{__("Publish")}}</p>
                  </button>
                  <button type="button"
                  class="inline-flex items-center rounded-l-none rounded-r-full bg-blue-500 p-2 text-sm font-medium text-white hover:bg-blue-600 focus:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 focus:ring-offset-none"
                  x-ref="button" @keydown.arrow-up.stop.prevent="onButtonClick()"
                  @keydown.arrow-down.stop.prevent="onButtonClick()"
                  @click="saveOptions = !saveOptions" >

                    <span class="sr-only">Save options</span>
                    <x-hive-form-icon
                    path='datetime'
                    width='5'
                    height='5'
                    iconWidth='2'
                    />
                  </button>
                </div>


                <div x-show="saveOptions" @click.outside="saveOptions = false" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute left-0 z-10 mt-2 -mr-1 w-72 origin-top-right overflow-hidden rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:left-auto sm:right-0" x-max="1" x-description="Select popover, show/hide based on select state." @keydown.enter.stop.prevent="onOptionSelect()" @keydown.space.stop.prevent="onOptionSelect()" @keydown.escape="onEscape()" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()" x-ref="listbox" tabindex="-1"
                role="listbox">
                  <ul class="divide-y divide-gray-200">
                    <li x-state:on="Highlighted" x-state:off="Not Highlighted" class="cursor-default select-none p-4 text-sm text-gray-900" x-description="Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation." id="listbox-option-0" role="option" @click="choose(0)">
                      <div class="flex flex-col">
                        <div class="flex justify-between">
                          <p x-state:on="Selected" x-state:off="Not Selected" class="font-semibold">Published</p>
                          <span x-description="Checkmark, only display for selected option." x-state:on="Highlighted" x-state:off="Not Highlighted" class="text-purple-500">
                            <svg class="h-5 w-5" x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
                            </svg>
                          </span>
                        </div>
                       </div>
                    </li>

                    <li x-state:on="Highlighted" x-state:off="Not Highlighted" class="text-gray-900 cursor-default select-none p-4 text-sm" x-description="Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation." id="listbox-option-1" role="option">
                      <div class="flex flex-col">
                        <div class="flex justify-between">
                          <p x-state:on="Selected" x-state:off="Not Selected" class="font-normal">Draft</p>
                          <span x-description="Checkmark, only display for selected option." x-state:on="Highlighted" x-state:off="Not Highlighted" class="text-purple-500"  style="display: none;">
                            <svg class="h-5 w-5" x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
</svg>
                          </span>
                        </div>
                       </div>
                    </li>
                </ul>
              </div>
            </div>
          </div>



      </div>
      <div class="order-first grid">
        <div class="grid items-center">
          <div class="sm:hidden">
            <label for="tabs" class="sr-only">Select a tab</label>
            <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
            <select id="tabs" name="tabs" class="block w-full rounded-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 p-2.5">
              <option selected>{{__("Overview")}}</option>
              <option>{{__("Components")}}</option>
              <option>{{__("SEO")}}</option>
              <option>{{__("Related")}}</option>
            </select>
          </div>
        <div class="hidden sm:block">
          <nav class="flex justify-start gap-x-2 text-center text-gray-500" aria-label="Tabs">
            <x-hive-form-tab-button naming='postAspects' title='{{__("Overview")}}' icon='overview' iconWidth='1.5' url='overview'/>
            <div class="col-span-2">
              <x-hive-form-dropdown width='full'>
                <x-slot name="trigger">
               <div class="relative rounded-full">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-2 text-slate-400">
                  <x-hive-form-icon
                   path='component'
                   width='5'
                   height='5'
                   iconWidth='1.5'
                   class='mx-0'
                   />

                  </div>
                <x-hive-form-input
                name='addComponent' id='addComponent'
                type='transparent'
                width='full'
                class='pl-10 py-3 px-4 rounded-full text-sm bg-slate-200/30 border-transparent'
                placeholder="Component"/>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3 text-slate-400">
                  <svg class="h-5 w-5" x-description="Heroicon name: mini/magnifying-glass" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                   <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd"></path>
                 </svg>
                  </div>
              </div>

            </button>
          </x-slot>
          <x-slot name="content">
            fvdfdf
          </x-slot>

          </x-hive-form-dropdown>

            </div>
           </nav>
        </div>
      </div>
    </div>
    </div>
  </x-hive-display-section>
</x-hive-display-section>

    <x-hive-display-section component='dividedSection' class='py-2'>
     <x-slot name="mainSec">
          <x-hive-form-tab-item naming='postAspects' name='overview'>
            <x-hive-posts-create-post-overview />
            </x-hive-form-tab-item>
            <x-hive-form-tab-item naming='postAspects' name='component'>
            </x-hive-form-tab-item>
            <x-hive-form-tab-item naming='postAspects' name='seo'>
            <x-hive-posts-add-seo />
            </x-hive-form-tab-item>
            <x-hive-form-tab-item naming='postAspects' name='related'>
            </x-hive-form-tab-item>
     </x-slot>
     <x-slot name="secondSec">
       <div class="space-y-5 pb-4">
          <x-hive-posts-create-post-sticky-panel />
          <x-hive-posts-create-post-add-taxonomy :categories='$categories' :listsForFields='$listsForFields'/>
       </div>
     </x-slot>
   </x-hive-display-section>
   </x-hive-form-tab>
</div>
