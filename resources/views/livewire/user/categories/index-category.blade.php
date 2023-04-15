<div>
  <x-hive-display-section source='sections' component='boxedSection'>
   <x-hive-display-card
    :texts='[__("Categories"),]'
    :details='[
                "create" => ["url" => route("user.categories.create"), "text" => __("New Category")],
              ]
             '
    source='elements'
    component='headers.pageIndexInfoMain'
    />

  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
    @foreach($categories as $category)
      <x-hive-display-card
          :buttons='["url" => route("user.categories.show",$category->slug) ]'
          component='posts.postDefault '
          :details='[
                      "create" => ["url" => route("user.categories.create"), "text" => __("Publish new")],
                      "show"   => ["url" => route("user.categories.show",$category->slug), "text" => __("Show")],
                      "edit"   => ["url" => route("user.categories.show",$category->slug), "text" => __("Edit")]
                    ]
                    +$category->getDetailsArray()
                    +$category->getAuthorArray()
                    '
        />
    @endforeach
  </div>
  </x-hive-display-section>
</div>
