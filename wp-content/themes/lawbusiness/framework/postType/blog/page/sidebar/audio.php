<?php
/**
 * @package WordPress
 * @subpackage Law Business
 * @since Law Business 1.0
 * 
 * Blog Page with Sidebar Audio Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsms_post_featured_image_show = get_post_meta(get_the_ID(), 'cmsms_post_featured_image_show', true);

$cmsms_post_audio_links = get_post_meta(get_the_ID(), 'cmsms_post_audio_links', true);

?>

<!--_________________________ Start Audio Article _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post_content
	<?php
		if (has_post_thumbnail() && $cmsms_post_featured_image_show == 'true') {
			echo ' with_img';
		}
	?>
	">
			<?php 
				if (!post_password_required()) {
					if (has_post_thumbnail() && $cmsms_post_featured_image_show == 'true') {
						cmsms_thumb(get_the_ID(), 'post-thumbnail', true, false, true, false, true, true, false);
					}
				}
			?>
		</div>
	<div class="cmsms_info">
		<span class="cmsms_post_format_img cmsms_post_animation"></span>
		<?php cmsms_post_date('post', 'page');?>
		<?php  
			echo '<div class="comment_wrap">';
			if (!post_password_required()) {
				cmsms_comments();
			}
			echo '</div>';
			cmsmsLike();
		?>
	</div>
	<header class="entry-header
	<?php
		if (has_post_thumbnail() && $cmsms_post_featured_image_show == 'true') {
			echo ' with_img';
		}
	?>">
		<?php 
			cmsms_heading(get_the_ID());

			
			if (!post_password_required()) {
				if (sizeof($cmsms_post_audio_links) > 0) {
					foreach ($cmsms_post_audio_links as $cmsms_post_audio_link_url) {
						$audio_link[$cmsms_post_audio_link_url[0]] = $cmsms_post_audio_link_url[1];
					}
					
					echo '<div class="cmsms_blog_media">' . "\n" . 
						cmsmastersSingleAudioPlayer($audio_link) . "\r\t\t" . 
					'</div>' . "\r\t\t";
				}
			}
			cmsms_meta('post', 'page'); 
			
			cmsms_exc_cont();
		?>
			<?php  ?>
		
	</header>
	<footer class="entry-meta">
		<?php
			cmsms_more(get_the_ID()); 
		?>
	</footer>
</article>
<!--_________________________ Finish Audio Article _________________________ -->

