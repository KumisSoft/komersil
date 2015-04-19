<?php $cat = App\Category::whereNull('parent_id')->orderBy('weight')->get() ?>
<ul class="button-group even-{{ $cat->count()  }}">

  @foreach($cat as $c)
    <li>
      <button data-dropdown="megamenu-{{ $c->id }}">{{ $c->name }}</button>
      <div id="megamenu-{{ $c->id }}" data-dropdown-content class="f-dropdown content mega row">

        @foreach($c->sub_category as $cc)
          <div class="columns small-1">
            {{ $cc->name }}
          </div>
        @endforeach

      </div>
    </li>
  @endforeach

</ul>
