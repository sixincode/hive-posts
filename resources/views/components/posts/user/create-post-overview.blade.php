
<div id="post-overview" class="overview grid gap-4">
   <x-hive-display-card component="forms.hiiPanel" >
    <div class="grid gap-4">
     <div class="">
       <x-hive-form-input
         name="post_title"
         placeholder="{{__('Title')}}"
         is_required="true"
         wire:model.lazy="post_title"
         label="{{__('Title')}}"
         value="{{ old('post_title', '') }}"
         id="post_title" />
       </div>
       <hr class="text-slate-100">
       <div class="">
         <x-hive-form-text
         name="post_content"
         wire:model.lazy="post_content"
         label="{{__('Content')}}"
         placeholder="{{__('Content')}}"
         is_required="true"
         class=""
         id="post_content" />
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
                @click="show_image = !show_image; scrollToElement('show_image')"
                >
                <svg class="h-5 w-5 flex-shrink-0" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                </svg>
            </x-hive-form-button>
            <x-hive-form-button
                id="show_links"
                name="show_links"
                component="iconic"
                tag="button"
                @click="show_links = !show_links; scrollToElement('show_links')"
                >
                <svg class="h-5 w-5 flex-shrink-0" viewBox="0 0 21 21" stroke-width="1.5" fill="none" stroke="currentColor" aria-hidden="true">
                  <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" transform="translate(4 5)"><path d="m5.5 2.5 1-1c1.1045695-1.1045695 2.8954305-1.1045695 4 0s1.1045695 2.8954305 0 4l-1 1m-3 3-1 1c-1.1045695 1.1045695-2.8954305 1.1045695-4 0s-1.1045695-2.8954305 0-4l1-1"></path><path d="m3.5 8.5 5-5"></path></g>
                </svg>
            </x-hive-form-button>
            <x-hive-form-button
                id="show_poll"
                name="show_poll"
                tag="button"
                component="iconic"
                @click="show_poll = !show_poll; scrollToElement('show_poll')"
                >
                <svg class="h-5 w-5 flex-shrink-0" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                 </svg>
            </x-hive-form-button>
         </div>
         <div class="flex space-x-3">
           <x-hive-form-button
               id="show_date"
               name="show_date"
               tag="button"
               component="iconic"
               @click="show_date = !show_date; scrollToElement('show_date')"
               >
               <svg class="h-5 w-5 flex-shrink-0" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke="currentColor" aria-hidden="true">
                  <path d="M11.795 21h-6.795a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4"></path>
                  <circle cx="18" cy="18" r="4"></circle>
                  <path d="M15 3v4"></path>
                  <path d="M7 3v4"></path>
                  <path d="M3 11h16"></path>
                  <path d="M18 16.496v1.504l1 1"></path>
                </svg>
           </x-hive-form-button>
           <x-hive-form-button
               id="show_author"
               name="show_author"
               component="iconic"
               tag="button"
               @click="show_author = !show_author; scrollToElement('show_author')"
               >
               <svg class="h-5 w-5 flex-shrink-0" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke="none" aria-hidden="true">
                <path d="M14.7499 16.5003C16.0584 16.5003 16.568 17.0828 16.9552 18.3746L17.023 18.6118C17.2055 19.2691 17.3146 19.466 17.5356 19.5571C17.7947 19.6639 17.9675 19.6487 18.2391 19.5091L18.386 19.4268C18.4388 19.395 18.4965 19.3584 18.5616 19.3154L19.2248 18.864C19.8407 18.4589 20.3941 18.1911 21.0679 18.0227C21.4698 17.9222 21.877 18.1666 21.9775 18.5684C22.0779 18.9702 21.8336 19.3774 21.4318 19.4779C21.0247 19.5797 20.6736 19.7337 20.2864 19.9673L19.9878 20.1581L19.5088 20.4861C19.279 20.6424 19.1056 20.7502 18.9249 20.8431C18.282 21.1736 17.655 21.2287 16.9641 20.9439C16.2193 20.637 15.9189 20.164 15.6378 19.2223L15.4819 18.6805C15.3006 18.0911 15.177 18.0003 14.7499 18.0003C14.4405 18.0003 14.1203 18.1551 13.6815 18.5233L13.4967 18.6842L12.5759 19.5595C11.1677 20.8831 9.96725 21.5258 8.24849 21.5258C6.56221 21.5258 5.10381 21.2718 3.87955 20.757L6.82714 19.9527C7.27441 20.0014 7.74811 20.0258 8.24849 20.0258C9.43124 20.0258 10.2802 19.6109 11.3347 18.6632L11.5929 18.4245L12.1248 17.9134C12.3614 17.6866 12.5387 17.5241 12.7173 17.3742C13.4009 16.8006 14.0222 16.5003 14.7499 16.5003ZM19.0302 2.96997C20.4276 4.36743 20.4276 6.63317 19.0302 8.03063L18.742 8.31934C19.8935 9.72069 19.8519 11.2058 18.781 12.2799L16.7797 14.2811C16.4866 14.5737 16.0117 14.5733 15.7191 14.2802C15.4264 13.987 15.4268 13.5121 15.72 13.2195L17.7187 11.2207C18.2038 10.7343 18.2598 10.1304 17.6789 9.38239L9.06186 17.999C8.78498 18.2758 8.44064 18.4757 8.06288 18.5787L2.94719 19.9739C2.38732 20.1266 1.87359 19.6128 2.02628 19.053L3.42147 13.9373C3.52449 13.5595 3.72432 13.2152 4.0012 12.9383L13.9695 2.96997C15.367 1.57251 17.6327 1.57251 19.0302 2.96997ZM15.0302 4.03063L5.06186 13.999C4.96956 14.0913 4.90296 14.206 4.86861 14.332L3.81877 18.1814L7.6682 17.1315C7.79412 17.0972 7.9089 17.0306 8.0012 16.9383L17.9695 6.96997C18.7812 6.1583 18.7812 4.84231 17.9695 4.03063C17.1578 3.21896 15.8419 3.21896 15.0302 4.03063Z" fill="currentColor"/>
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
    <div x-cloak x-show="show_poll" id="box_poll">
     <x-hive-form-poll name='poll'/>
    </div>
   <div x-cloak x-show="show_links" id="box_links">
     <x-hive-form-url name='links'/>
   </div>
   <div x-cloak x-show="show_date" id="box_date">
     <x-hive-display-card component="forms.hiiPanel">
       <div class="grid gap-4">
         <x-hive-form-date name="publishing_date" label="{{__('Publishing date')}}"/>
       </div>
     </x-hive-display-card>
   </div>
   <div x-cloak x-show="show_author" id="box_author">
     <x-hive-display-card component="forms.hiiPanel">
       <div class="grid gap-4">
         <x-hive-form-owner name='owner'/>
       </div>
     </x-hive-display-card>
   </div>
</div>
