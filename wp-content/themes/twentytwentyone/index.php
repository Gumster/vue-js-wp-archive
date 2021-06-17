<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

if (have_posts() && !is_home()) {

	// Load posts loop.
	while (have_posts()) {
		the_post();

		get_template_part('template-parts/content/content', get_theme_mod('display_excerpt_or_full_post', 'excerpt'));
	}

	// Previous/next page navigation.
	twenty_twenty_one_the_posts_navigation();

} elseif (is_home()) { // Vue.js article display ?>

	<div id="app">
		<p style="text-align:center;" v-if="total_posts">		
		<small>Found {{ total_posts }} posts</small>
		</p>
		<article v-for="article in posts" class="post type-post status-publish format-standard has-post-thumbnail hentry entry" :id="article.id">
			<header class="entry-header">
				<h2 class="entry-title default-max-width">
					<a :href="article.link" v-html="article.title.rendered">

					</a>
				</h2>

				<figure class="post-thumbnail">
					<a :href="article.link" class="post-thumbnail-inner alignwide" aria-hidden="true" tabindex="-1">
						<img 
						:src="article.featured_image_url"
						width="386" height="308" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" 
						style="width:100%;height:79.79%;max-width:386px;"> </a>
				</figure>

			</header><!-- .entry-header -->

			<div class="entry-content" v-html="article.excerpt.rendered">

			</div><!-- .entry-content -->

			<footer class="entry-footer default-max-width">
				<span class="posted-on">Published <time class="entry-date published updated">{{ article.date_gmt }}</time></span><br>
			</footer><!-- .entry-footer -->
		</article>
		<p style="text-align:center;" v-if="total_pages > 1">
			<small v-if="total_pages > 0">{{ paged }} of {{ total_pages }} pages</small><br>
			<button v-if="paged > 1" v-on:click="paginate(0)">First</button>
			<button v-if="paged > 1" v-on:click="paginate(-1)"><< Prev</button>			
			<button v-if="paged < total_pages" v-on:click="paginate(1)">Next >></button>
			<button v-if="total_pages > 5 && paged < total_pages" v-on:click="paginate(total_pages)">Last</button>
		</p>
	</div>

<?php } else {

	// If no content, include the "No posts found" template.
	get_template_part('template-parts/content/content-none');
}

get_footer();
