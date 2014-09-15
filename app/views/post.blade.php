<article>
        <h3 class="title"><a href="{{ URL::route('post', $post->id) }}">{{{ $post->title }}}</a></h3>
        <h6>Written by <a class="author" href="{{ URL::route('user', $author->id) }}">{{{ $author->name }}}</a> on {{ $post->created_at }}.</h6>
	<div class="row pictures">
		<div class="large-12 columns">
			<div class="row no-padding">
				<div class="large-3 columns">
					<img src="http://placehold.it/400x240&text=[img]" />
				</div>
				<div class="large-3 columns">
                                        <img src="http://placehold.it/400x240&text=[img]" />
                                </div>
				<div class="large-3 columns">
                                        <img src="http://placehold.it/400x240&text=[img]" />
                                </div>
				<div class="large-3 columns">
                                        <img src="http://placehold.it/400x240&text=[img]" />
                                </div>
			</div>
			<div class="row no-padding">
				<div class="large-3 columns">
                                        <img src="http://placehold.it/400x240&text=[img]" />
                                </div>
                                <div class="large-3 columns">
                                        <img src="http://placehold.it/400x240&text=[img]" />
                                </div>
                                <div class="large-3 columns">
                                        <img src="http://placehold.it/400x240&text=[img]" />
                                </div>
                                <div class="large-3 columns">
                                        <img src="http://placehold.it/400x240&text=[img]" />
                                </div>
			</div>
		</div>
	</div>
	<div class="row content">
        	<div class="large-12 columns">
        		{{ $post->content }}
        	</div>
        </div>
	<div class="row tags">
		@foreach($tags as $tag)
			<span><a href="{{ URL::route('tag', $tag->id) }}">#{{ $tag->name }}</a></span>
		@endforeach
	</div>
</article>
