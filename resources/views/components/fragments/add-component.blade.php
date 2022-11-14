<div>
  <x-hive-display-card component='pollen'>
    <x-hive-form-accordion name='componentOptions' options='["form","link"]' active='link' class="divide-y">
      <x-hive-form-accordion-item name='{{_("Link")}}' headerClass="rounded-t-lg" id='link'>
        <x-slot name="header">
          <x-hive-form-icon
           path='link'
           width='4'
           height='4'
           iconWidth='1'
           />  {{_("Link")}}
        </x-slot>
        <x-slot name="body">
          <div class="grid space-y-2 pb-4">

          <div class="flex items-center justify-between space-x-2">
            <div class="flex-1 min-w-0">
              <div class="relative border border-gray-100 rounded-full focus:shadow-sm">
                <div class="text-gray-400 absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none" aria-hidden="true">
                     <x-hive-form-icon
                      path='search'
                      width='4'
                      height='4'
                      iconWidth='1'
                      class='mx-0'
                      fill='currentColor'
                      />
                  </svg>
                </div>
                <x-hive-form-input
                name='searchLink' id='searchLink'
                class='pl-9'
                type='slatt'
                placeholder="My links"/>
               </div>
             </div>
            <div class="flex space-x-2 md:mt-0 md:ml-2">
              <div>
            <button class="sm:text-sm  shadow-sm inline-flex items-center px-2 py-2 rounded-lg font-medidum overflow-hidden text-green-600 hover:text-green-700 bg-green-100 hover:bg-green-700  hover:text-white focus:text-white group focus:bg-green-700 focus:outline-none focus:ring-green-300 focus:ring" wire:click.prevent="">
              <span class="">
                <x-hive-form-icon
                  path='plus'
                  width='4'
                  height='4'
                  iconWidth='2'
                  class='mx-0'
                  />
              </span>

            </button>

          </div>
            </div>
          </div>


             <x-hive-form-input
             name='title'
             type='default'
             id='title'
             placeholder="Title, name"/>
             <div>
               <div class="relative mt-1 rounded-md shadow-sm">
                 <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                   <span class="text-gray-500">https://</span>
                 </div>
                 <x-hive-form-input
                 name='url' id='url'
                 class='pl-16'
                 type='default'
                 placeholder=" www.example.com"/>
               </div>
             </div>


                       <div class="grid space-y-2 lg:grid-cols-2">
                       <a href="#" class="group block flex-shrink-0 rounded-lg border bg-white p-2">
                       <div class="flex items-center">
                         <div>
                           <img class="inline-block h-9 w-9 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                         </div>
                         <div class="ml-3">
                           <p class="text-sm font-medium text-gray-700 group-hover:text-gray-900">My facebook</p>
                           <p class="text-xs font-medium text-gray-500 group-hover:text-gray-700">www.facebook.com/dgdfg</p>
                         </div>
                       </div>
                     </a>
                   </div>
           </div>
         </x-slot>

       </x-hive-form-accordion-item>

       <x-hive-form-accordion-item name='{{_("Media")}}' headerClass="" id='media'>
         <x-slot name="header">
           <x-hive-form-icon
            path='media'
            width='4'
            height='4'
            iconWidth='1'
            />
            {{_("Media")}}
         </x-slot>
         <x-slot name="body">

            <div class="grid space-y-2">
              <livewire:hive-posts-add-media />
            </div>
          </x-slot>

        </x-hive-form-accordion-item>
        <x-hive-form-accordion-item name='{{_("Form")}}'  id='form'>
          <x-slot name="header">
            <x-hive-form-icon
             path='form'
             width='4'
             height='4'
             iconWidth='1'
             />
             {{_("Form")}}
          </x-slot>
          <x-slot name="body">

             <div class="grid space-y-2">
               form
             </div>
           </x-slot>

         </x-hive-form-accordion-item>
         <x-hive-form-accordion-item name='{{_("Poll")}}'  id='poll'>
           <x-slot name="header">
             <x-hive-form-icon
              path='poll'
              width='4'
              height='4'
              iconWidth='1'
              />
              {{_("Poll")}}
           </x-slot>
           <x-slot name="body">

              <div class="grid space-y-2">
                poll
              </div>
            </x-slot>

          </x-hive-form-accordion-item>
     </x-hive-form-accordion>
  </x-hive-display-card >
</div>
