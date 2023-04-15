<div>
  <x-hive-display-card class="rounded-lg">
    <x-hive-display-accordion naming='postTaxonomy' :tabs='["categories","tags"]' active='tags' class='divide-y'>
      <x-hive-display-accordion-item name='postTaxonomy' identification='{{_("categories")}}' headerClass="rounded-t-lg" id='categories'>
        <x-slot name="header">
          <div class="flex justify-between">
            <span>
              {{_("Categories")}}
            </span>
           </div>
        </x-slot>
        <x-slot name="body">
         <x-hive-posts-user-create-post-add-category :categories='$categories' :listsForFields='$listsForFields'/>
       </x-slot>
      </x-hive-display-accordion-item >
      <x-hive-display-accordion-item name='postTaxonomy' identification='{{_("tags")}}'>
       <x-slot name="header">
         {{_("Tags")}}

       </x-slot>
       <x-slot name="body">
         <x-hive-posts-user-create-post-add-tag />
       </x-slot>
      </x-hive-display-accordion-item >
    </x-hive-display-accordion >
  </x-hive-display-card >
</div>
