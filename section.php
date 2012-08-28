<?php
/*
	Section: Multilingual Branding
	Author: Aleksander Hansson
	Author URI: http://apple-blog.dk
	Version: 1.1
	Description: Do you have a multilingual site or do you just want to welcome your foreign visitors with a logo in their language. Then this is the section you need. Multilingual  Branding automtically detects the users browserlanguage and if you have uploaded a logo in thier language the logo will show just as the normal logo would. Multilingual Branding supports up to 5 languages and works well with WPML.
	Class Name: MultilingualBranding
	Workswith: header
*/

/**
 * Multilingual Branding Section
 *
 * @package PageLines Framework
 * @author Aleksander Hansson
 */

class MultilingualBranding extends PageLinesSection {

	/**
	 * Section template.
	 */
	function section_template() {
		include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

		printf('<div class="branding_wrap">');

		if (is_plugin_active('sitepress-multilingual-cms/sitepress.php')) {

			$clang = ICL_LANGUAGE_CODE;


			if ($clang == ploption('language_1_code')) {
				printf('<a class="mainlogo-link" href="%s" title="%s"><img class="mainlogo-img" src="%s" alt="Logo" /></a>',

					get_bloginfo('siteurl'),
					get_bloginfo('name'),
					ploption('language_1_logo')
				);
			} elseif ($clang == ploption('language_2_code')) {
				printf('<a class="mainlogo-link" href="%s" title="%s"><img class="mainlogo-img" src="%s" alt="Logo" /></a>',

					get_bloginfo('siteurl'),
					get_bloginfo('name'),
					ploption('language_2_logo')
				);
			} elseif ($clang == ploption('language_3_code')) {
				printf('<a class="mainlogo-link" href="%s" title="%s"><img class="mainlogo-img" src="%s" alt="Logo" /></a>',

					get_bloginfo('siteurl'),
					get_bloginfo('name'),
					ploption('language_3_logo')
				);
			} elseif ($clang == ploption('language_4_code')) {
				printf('<a class="mainlogo-link" href="%s" title="%s"><img class="mainlogo-img" src="%s" alt="Logo" /></a>',

					get_bloginfo('siteurl'),
					get_bloginfo('name'),
					ploption('language_4_logo')
				);
			} elseif ($clang == ploption('language_5_code')) {
				printf('<a class="mainlogo-link" href="%s" title="%s"><img class="mainlogo-img" src="%s" alt="Logo" /></a>',

					get_bloginfo('siteurl'),
					get_bloginfo('name'),
					ploption('language_5_logo')
				);
			} else {
				printf('<a class="mainlogo-link" href="%s" title="%s"><img class="mainlogo-img" src="%s" alt="Logo" /></a>',

					get_bloginfo('siteurl'),
					get_bloginfo('name'),
					ploption('language_1_logo')
				);
			}
		} else {

			$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

			if ($lang == ploption('language_1_code')) {
				printf('<a class="mainlogo-link" href="%s" title="%s"><img class="mainlogo-img" src="%s" alt="Logo" /></a>',

					get_bloginfo('siteurl'),
					get_bloginfo('name'),
					ploption('language_1_logo')
				);
			} elseif ($lang == ploption('language_2_code')) {
				printf('<a class="mainlogo-link" href="%s" title="%s"><img class="mainlogo-img" src="%s" alt="Logo" /></a>',

					get_bloginfo('siteurl'),
					get_bloginfo('name'),
					ploption('language_2_logo')
				);
			} elseif ($lang == ploption('language_3_code')) {
				printf('<a class="mainlogo-link" href="%s" title="%s"><img class="mainlogo-img" src="%s" alt="Logo" /></a>',

					get_bloginfo('siteurl'),
					get_bloginfo('name'),
					ploption('language_3_logo')
				);
			} elseif ($lang == ploption('language_4_code')) {
				printf('<a class="mainlogo-link" href="%s" title="%s"><img class="mainlogo-img" src="%s" alt="Logo" /></a>',

					get_bloginfo('siteurl'),
					get_bloginfo('name'),
					ploption('language_4_logo')
				);
			} elseif ($lang == ploption('language_5_code')) {
				printf('<a class="mainlogo-link" href="%s" title="%s"><img class="mainlogo-img" src="%s" alt="Logo" /></a>',

					get_bloginfo('siteurl'),
					get_bloginfo('name'),
					ploption('language_5_logo')
				);
			} else {
				printf('<a class="mainlogo-link" href="%s" title="%s"><img class="mainlogo-img" src="%s" alt="Logo" /></a>',

					get_bloginfo('siteurl'),
					get_bloginfo('name'),
					ploption('language_1_logo')
				);
			}
		}
		/**
		 * The below is taken directly from PageLines Branding section.
		 * All credits goes to PageLines for that part.
		 */

		printf('<div class="icons" style="bottom: %spx; right: %spx;">', intval(pagelines_option('icon_pos_bottom')), pagelines_option('icon_pos_right'));

		pagelines_register_hook( 'pagelines_branding_icons_start', 'branding' ); // Hook

		if(ploption('rsslink'))

			if(ploption('rsslink'))
				printf('<a target="_blank" href="%s" class="rsslink"><img src="%s" alt="RSS"/></a>', apply_filters( 'pagelines_branding_rssurl', get_bloginfo('rss2_url') ), $this->base_url.'/rss.png' );

			if(VPRO) {
				if(ploption('twitterlink'))
					printf('<a target="_blank" href="%s" class="twitterlink"><img src="%s" alt="Twitter"/></a>', ploption('twitterlink'), $this->base_url.'/twitter.png');

				if(ploption('facebooklink'))
					printf('<a target="_blank" href="%s" class="facebooklink"><img src="%s" alt="Facebook"/></a>', ploption('facebooklink'), $this->base_url.'/facebook.png');

				if(ploption('linkedinlink'))
					printf('<a target="_blank" href="%s" class="linkedinlink"><img src="%s" alt="LinkedIn"/></a>', ploption('linkedinlink'), $this->base_url.'/linkedin.png');

				if(ploption('youtubelink'))
					printf('<a target="_blank" href="%s" class="youtubelink"><img src="%s" alt="Youtube"/></a>', ploption('youtubelink'), $this->base_url.'/youtube.png');

				if(ploption('gpluslink'))
					printf('<a target="_blank" href="%s" class="gpluslink"><img src="%s" alt="Google+"/></a>', ploption('gpluslink'), $this->base_url.'/google.png');

				pagelines_register_hook( 'pagelines_branding_icons_end', 'branding' ); // Hook

			}

		echo '</div></div>';

		pagelines_register_hook( 'pagelines_after_branding_wrap', 'branding' ); // Hook

?>
			<script type="text/javascript">
				jQuery('.icons a').hover(function(){ jQuery(this).fadeTo('fast', 1); },function(){ jQuery(this).fadeTo('fast', 0.5);});
			</script>
<?php

	}
	
		function section_optionator( $settings ){
		
		$settings = wp_parse_args($settings, $this->optionator_default);
					
		$options = array(

			//language 1 settings
			'language_1'   => array(
				'default'    => '',
				'type'     => 'multi_option',
				'title'     =>  __('1st language options', 'pagelines'),
				'selectvalues'   => array(
					'language_1_code' =>  array(
						'default'   =>  '',
						'type'    =>  'text',
						'inputlabel'  =>  __('Type your 1st language code: "en" for English. This is also DEFAULT language if no languages matches users browser language!', 'pagelines'),
					),
					'language_1_logo' => array(
						'default'          => '',
						'type'              => 'image_upload',
						'imagepreview'      => '270',
						'inputlabel'      => __( 'Upload 1st language logo. This is also DEFAULT logo if no languages matches users browser language!', 'pagelines' ),
						'shortexp'          => __( 'Input Full URL to your 1st language logo.', 'pagelines' ),
					))),
			//language 2 settings
			'language_2'   => array(
				'default'    => '',
				'type'     => 'multi_option',
				'title'     =>  __('2nd language options', 'pagelines'),
				'selectvalues'   => array(
					'language_2_code' =>  array(
						'default'   =>  '',
						'type'    =>  'text',
						'inputlabel'  =>  __('Type your 2nd language code: "fr" for French', 'pagelines'),
					),
					'language_2_logo' => array(
						'default'          => '',
						'type'              => 'image_upload',
						'imagepreview'      => '270',
						'inputlabel'      => __( 'Upload 2nd language logo', 'pagelines' ),
						'shortexp'          => __( 'Input Full URL to your 2nd language logo.', 'pagelines' ),
					))),
			//language 3 settings
			'language_3'   => array(
				'default'    => '',
				'type'     => 'multi_option',
				'title'     =>  __('3rd language options', 'pagelines'),
				'selectvalues'   => array(
					'language_3_code' =>  array(
						'default'   =>  '',
						'type'    =>  'text',
						'inputlabel'  =>  __('Type your 3rd language code: "es" for Spanish', 'pagelines'),
					),
					'language_3_logo' => array(
						'default'          => '',
						'type'              => 'image_upload',
						'imagepreview'      => '270',
						'inputlabel'      => __( 'Upload 3rd language logo', 'pagelines' ),
						'shortexp'          => __( 'Input Full URL to your 3rd language logo.', 'pagelines' ),
					))),
			//language 4 settings
			'language_4'   => array(
				'default'    => '',
				'type'     => 'multi_option',
				'title'     =>  __('4th language options', 'pagelines'),
				'selectvalues'   => array(
					'language_4_code' =>  array(
						'default'   =>  '',
						'type'    =>  'text',
						'inputlabel'  =>  __('Type your 4th language code: "de" for Deutsch', 'pagelines'),
					),
					'language_4_logo' => array(
						'default'          => '',
						'type'              => 'image_upload',
						'imagepreview'      => '270',
						'inputlabel'      => __( 'Upload 4th language logo', 'pagelines' ),
						'shortexp'          => __( 'Input Full URL to your 4th language logo.', 'pagelines' ),
					))),
			//language 5 settings
			'language_5'   => array(
				'default'    => '',
				'type'     => 'multi_option',
				'title'     =>  __('5th language options', 'pagelines'),
				'selectvalues'   => array(
					'language_5_code' =>  array(
						'default'   =>  '',
						'type'    =>  'text',
						'inputlabel'  =>  __('Type your 5th language code: "da" for Danish', 'pagelines'),
					),
					'language_5_logo' => array(
						'default'          => '',
						'type'              => 'image_upload',
						'imagepreview'      => '270',
						'inputlabel'      => __( 'Upload 5th language logo', 'pagelines' ),
						'shortexp'          => __( 'Input Full URL to your 5th language logo.', 'pagelines' ),
					))),
		);

			$tab_settings = array(
			
			'id'		=> 'multilingual_branding_options', 
			'name'		=> 'Multilingual Branding', 
			'icon'		=> $this->icon, 
			'clone_id'	=> $settings['clone_id'], 
			'active'	=> $settings['active']
		);
		
		register_metatab($tab_settings, $options, $this->class_name);
		
		
	}
	
}
