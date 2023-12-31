<?php
/**
 * An underscore.js template.
 *
 * @package fusion-builder
 */

?>
<script type="text/template" id="fusion-builder-blank-page-template">
	<div class="fusion-builder-blank-page-content fusion-builder-data-cid" data-cid="{{ cid }}">
		<h3 class="title">
			<?php
			$post_terms = wp_get_post_terms( get_the_ID(), 'fusion_tb_category' );
			if ( 'fusion_element' === get_post_type() ) {
				$post_terms = wp_get_post_terms( get_the_ID(), 'element_category' );
			}

			if ( 'fusion_tb_section' === get_post_type() && ! is_wp_error( $post_terms ) && is_array( $post_terms ) && isset( $post_terms[0] ) ) :
				?>
				<?php if ( 'page_title_bar' === $post_terms[0]->slug ) : ?>
				{{ fusionBuilderText.to_get_started_ptb }}
			<?php elseif ( 'footer' === $post_terms[0]->slug ) : ?>
				{{ fusionBuilderText.to_get_started_footer }}
			<?php elseif ( 'header' === $post_terms[0]->slug ) : ?>
				{{ fusionBuilderText.to_get_started_header }}
				<?php elseif ( 'content' === $post_terms[0]->slug ) : ?>
				{{ fusionBuilderText.to_get_started_content }}
			<?php endif; ?>
			<?php elseif ( 'awb_off_canvas' === get_post_type() ) : ?>
				{{ fusionBuilderText.to_get_started_off_canvas }}
			<?php elseif ( 'fusion_element' === get_post_type() && 'mega_menus' === $post_terms[0]->slug ) : ?>
				{{ fusionBuilderText.to_get_started_mega_menus }}
			<?php else : ?>
				{{ fusionBuilderText.to_get_started }}
			<?php endif; ?>
		</h3>
		<h4 class="subtitle">{{ fusionBuilderText.to_get_started_sub }}</h4>
		<a href="#" class="fusion-builder-new-section-add fusion-builder-submit-button"><span class="fusiona-plus"></span> {{ fusionBuilderText.full_width_section }}</a>
		<a href="#" id="fusion-load-studio-dialog" data-target="#fusion-builder-fusion_template-studio" class="fusion-builder-module-control fusion-builder-submit-button" data-target="#fusion-builder-fusion_template-studio"><i class="fusiona-avada-logo"></i>{{ fusionBuilderText.avada_studio }}</a>
	</div>

	<div class="fusion-builder-blank-page-info fusion-builder-blank-page-icons">
		<h3>{{{ fusionBuilderText.icon_control_description }}}</h3>
		<ul>
			<li><span class="fusiona fusiona-pen"></span><span class="page-icon-description">{{ fusionBuilderText.edit_settings }}</span></li>
			<li><span class="dashicons-before dashicons-arrow-up"></span><span class="page-icon-description">{{ fusionBuilderText.collapse_sections }}</span></li>
			<li><span class="fusiona fusiona-file-add"></span><span class="page-icon-description">{{ fusionBuilderText.duplicate_content }}</span></li>
			<li><span class="fusiona fusiona-code"></span><span class="page-icon-description">{{ fusionBuilderText.custom_css }}</span></li>
			<li><span class="fusiona fusiona-drive"></span><span class="page-icon-description">{{ fusionBuilderText.save_custom_content }}</span></li>
			<li><span class="dashicons-before dashicons-backup"></span><span class="page-icon-description">{{ fusionBuilderText.history_states }}</span></li>
			<li><span class="fusiona fusiona-trash-o"></span><span class="page-icon-description">{{ fusionBuilderText.delete_content }}</span></li>
			<li><span class="fusiona fusiona-plus"></span><span class="page-icon-description">{{ fusionBuilderText.add_content }}</span></li>
		</ul>
	</div>

	<div class="fusion-builder-blank-page-info fusion-builder-blank-page-video">
		<h3>{{{ fusionBuilderText.getting_started_video }}}</h3>
		<a href="#" class="fusion-builder-submit-button fusion-builder-video-button"><span class="fusiona-plus"></span> {{ fusionBuilderText.watch_the_video }}</a>
		<p class="fusion-support-link"><a href="https://avada.com/help-center/" target="_blank"><span class="dashicons dashicons-editor-help"></span></a>{{ fusionBuilderText.additional_docs }}</p>
	</div>

	<div id="video-dialog" title="{{{ fusionBuilderText.getting_started_video }}}">
		<p><iframe width="560" height="315" src="https://www.youtube.com/embed/CbOQqvQDrVQ?rel=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe></p>
	</div>
</div>

</script>
