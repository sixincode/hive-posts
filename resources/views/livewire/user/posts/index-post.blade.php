<div>
  <x-hive-display-section source='sections' component='boxedSection'>
   <x-hive-display-card
    :texts='[__("Posts"),]'
    :details='[
                "create" => ["url" => route("user.posts.create"), "text" => __("Write Post")],
              ]
             '
    source='elements'
    component='headers.pageIndexInfoMain'
    />

  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
    @foreach($posts as $post)
      <x-hive-display-card
          :buttons='["url" => route("user.posts.show",$post->slug) ]'
          component='posts.postDefault'
          :details='[
                      "create" => ["url" => route("user.posts.create"), "text" => __("Publish new")],
                      "show"   => ["url" => route("user.posts.show",$post->slug), "text" => __("Show")],
                      "edit"   => ["url" => route("user.posts.show",$post->slug), "text" => __("Show")],
                     ]
                    +$post->getDetailsArray()
                    +$post->getAuthorArray()
                    '
        />
    @endforeach
  </div>
  </x-hive-display-section>
</div>
