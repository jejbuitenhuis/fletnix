<?php
function getMovieHtml($movie) {
	$id = $movie["id"];
	$title = $movie["title"];
	if(strlen($title) > 15) $title = substr($title, 0, 15) . "…";
	
	$imageUrl = "/resources/images/posters/$id.png";
	$runtime = $movie["runtime"];
	
	return <<<HTML
	<a href="/movie?id={$id}" class="film">
		<div class="poster">
			<img
				src="{$imageUrl}"
				alt="${title} poster"
			>
		</div>

		<div class="hover">
			<div class="title">{$title}</div>

			<div class="play-btn">
				<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="play-circle" class="svg-inline--fa fa-play-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z"></path></svg>
			</div>

			<div class="playtime">{$runtime}</div>
		</div>
	</a>
	HTML;
}
