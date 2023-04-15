
<div id="post-overview" class="overview grid gap-4">
   <x-hive-display-card component="forms.hiiPanel" >
    <div class="grid gap-4">
     <div class="">
       <x-hive-form-input
         name="category_name"
         placeholder="{{__('Name')}}"
         is_required="true"
         wire:model.lazy="category_name"
         label="{{__('Title')}}"
         value="{{ old('category_name', '') }}"
         id="category_name" />
       </div>
       <hr class="text-slate-100">
       <div class="">
         <x-hive-form-text
         name="category_description"
         wire:model.lazy="category_description"
         label="{{__('Description')}}"
         placeholder="{{__('Description')}}"
         is_required="true"
         class=""
         id="category_description" />
       </div>
     </div>
     <x-slot name="footer">
       <div>
         <div class="flex sm:mt-0 flex-wrap gap-3 justify-between">
          <div class="flex space-x-3">
              <x-hive-form-button
                 id="show_image"
                 name="show_image"
                 component="iconic"
                 tag="button"
                 @click="show_image = !show_image"
                 >
                 <svg class="h-5 w-5 flex-shrink-0" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke="currentColor" aria-hidden="true">
                   <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                 </svg>
             </x-hive-form-button>

          </div>

         </div>
       </div>
     </x-slot>
   </x-hive-display-card>
   <div x-cloak x-show="show_image" id="box_image">
     <x-hive-display-card component="forms.hiiPanel" >
       <div class="grid gap-4">
         <x-hive-form-image name='image'/>
       </div>
     </x-hive-display-card>
    </div>

</div>
