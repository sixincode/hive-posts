
<div id="post-seo" class="overview">
  <x-hive-posts-user-create-post-add-seo>
   <x-slot name="title">
    <span x-text="category_name"></span>
   </x-slot>
   <x-slot name="content">
    <span x-text="category_description"></span>
   </x-slot>
   <x-slot name="url">
    <span x-text="'https://google.com/' + category_name"></span>
   </x-slot>
 </x-hive-posts-user-create-post-add-seo >
</div>
