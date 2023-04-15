<div>
  <x-hive-display-card component="slatt" class="rounded-lg">
    <x-hive-display-accordion name='postOptions' options='["categories","tags"]' active='tags' class="divide-y">
     <x-hive-display-accordion-item name='{{_("Categories")}}' headerClass="rounded-t-lg" id='categories'>
       <x-slot name="header">
           {{_("Categories")}}
       </x-slot>
       <x-slot name="body">
        <x-hive-posts-user-create-post-add-category :categories='$categories' :listsForFields='$listsForFields'/>
      </x-slot>
     </x-hive-display-accordion-item >
     <x-hive-display-accordion-item >
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
