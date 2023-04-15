
<div id="post-seo" class="overview">
  <x-hive-posts-user-create-post-add-seo>
   <x-slot name="title">
    <span x-text="post_title"></span>
   </x-slot>
   <x-slot name="content">
    <span x-text="post_content"></span>
   </x-slot>
   <x-slot name="url">
    <span x-text="'https://google.com/' + post_title"></span>
   </x-slot>
 </x-hive-posts-user-create-post-add-seo >
</div>
