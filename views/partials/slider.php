<div class="row">
    <div class="small-12 columns">

		<ul id="slides">	
	    	{{ galleries:gallery gallery_id="1" }}
			<li>
				<a href="{{ url }}" target="{{ target }}">
					<img src="{{ image }}" alt="{{ alt }}" />
					<div class="slider-caption">
						<div class="title">{{ text_1 }}</div>
						<div class="slogan">{{ text_2 }}</div>
					</div>
				</a>
			</li>
			{{ /galleries:gallery }}
		</ul>

	</div>
</div>