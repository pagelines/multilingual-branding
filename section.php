<?php
/*
	Section: Multilingual Branding
	Author: Aleksander Hansson
	Author URI: http://ahansson.com
	Demo: http://mlbranding.ahansson.com
	Version: 1.2
	Description: Do you have a multilingual site or do you just want to welcome your foreign visitors with a logo in their language. Then this is the section you need. Multilingual Branding automtically detects the users browser language and if you have specified a logo in thier language, the logo will show just as the normal logo would. Multilingual Branding supports up to 5 languages and works well with WPML.
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

		} else {
			
			$clang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
			
		}

    	if ($clang == ploption('language_1_code')) {
    		
    		if (ploption('language_1_logo')) {
    		
    			printf('<a class="mainlogo-link" href="%s" title="%s"><img class="mainlogo-img" src="%s" alt="Logo" /></a>',
    				esc_url(home_url()),
    				get_bloginfo('name'),
    				ploption('language_1_logo')
    			);
    		
    		} else {
    			
    			printf( '<div class="title-container"><a class="home site-title" href="%s" title="%s">%s</a><h6 class="site-description subhead">%s</h6></div>', 
    				esc_url(home_url()), 
    				__('Home','pagelines'), 
    				ploption('language_1_heading'), 
    				ploption('language_1_subheading')
    			);
    		
    		}	
    		
    	} elseif ($clang == ploption('language_2_code')) {
    		
    		if (ploption('language_2_logo')) {
    		
    			printf('<a class="mainlogo-link" href="%s" title="%s"><img class="mainlogo-img" src="%s" alt="Logo" /></a>',
    				esc_url(home_url()),
    				get_bloginfo('name'),
    				ploption('language_2_logo')
    			);
    		
    		} else {
    			
    			printf( '<div class="title-container"><a class="home site-title" href="%s" title="%s">%s</a><h6 class="site-description subhead">%s</h6></div>', 
    				esc_url(home_url()), 
    				__('Home','pagelines'), 
    				ploption('language_2_heading'), 
    				ploption('language_2_subheading')
    			);
    		
    		}
    	
    	} elseif ($clang == ploption('language_3_code')) {		
    			
    		if (ploption('language_3_logo')) {
    		
    			printf('<a class="mainlogo-link" href="%s" title="%s"><img class="mainlogo-img" src="%s" alt="Logo" /></a>',
    				esc_url(home_url()),
    				get_bloginfo('name'),
    				ploption('language_3_logo')
    			);
    		
    		} else {
    			
    			printf( '<div class="title-container"><a class="home site-title" href="%s" title="%s">%s</a><h6 class="site-description subhead">%s</h6></div>', 
    				esc_url(home_url()), 
    				__('Home','pagelines'), 
    				ploption('language_3_heading'), 
    				ploption('language_3_subheading')
    			);
    		
    		}	
    	
    	} elseif ($clang == ploption('language_4_code')) {
    		
    		if (ploption('language_4_logo')) {
    		
    			printf('<a class="mainlogo-link" href="%s" title="%s"><img class="mainlogo-img" src="%s" alt="Logo" /></a>',
    				esc_url(home_url()),
    				get_bloginfo('name'),
    				ploption('language_4_logo')
    			);
    		
    		} else {
    			
    			printf( '<div class="title-container"><a class="home site-title" href="%s" title="%s">%s</a><h6 class="site-description subhead">%s</h6></div>', 
    				esc_url(home_url()), 
    				__('Home','pagelines'), 
    				ploption('language_4_heading'), 
    				ploption('language_4_subheading')
    			);
    		
    		}	
    	} elseif ($clang == ploption('language_5_code')) {
    	
    		if (ploption('language_5_logo')) {
    		
    			printf('<a class="mainlogo-link" href="%s" title="%s"><img class="mainlogo-img" src="%s" alt="Logo" /></a>',
    				esc_url(home_url()),
    				get_bloginfo('name'),
    				ploption('language_5_logo')
    			);
    		
    		} else {
    			
    			printf( '<div class="title-container"><a class="home site-title" href="%s" title="%s">%s</a><h6 class="site-description subhead">%s</h6></div>', 
    				esc_url(home_url()), 
    				__('Home','pagelines'), 
    				ploption('language_5_heading'), 
    				ploption('language_5_subheading')
    			);
    		
    		}
				
    	} else {
    		
    		if (ploption('language_1_logo')) {
    		
    			printf('<a class="mainlogo-link" href="%s" title="%s"><img class="mainlogo-img" src="%s" alt="Logo" /></a>',
    				esc_url(home_url()),
    				get_bloginfo('name'),
    				ploption('language_1_logo')
    			);
    		
    		} else {
    			
    			printf( '<div class="title-container"><a class="home site-title" href="%s" title="%s">%s</a><h6 class="site-description subhead">%s</h6></div>', 
    				esc_url(home_url()), 
    				__('Home','pagelines'), 
    				ploption('language_1_heading'), 
    				ploption('language_1_subheading')
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
					),
					'language_1_heading' =>  array(
						'default'   =>  '',
						'type'    =>  'text',
						'inputlabel'  =>  __('OR you can use a custom Site Title.', 'pagelines'),
					),
					'language_1_subheading' =>  array(
						'default'   =>  '',
						'type'    =>  'text',
						'inputlabel'  =>  __('If you are using a custom Site Title. You might want to add a subheading.', 'pagelines')
					)
				)
			),
			//language 2 settings
			'language_2'   => array(
				'default'    => '',
				'type'     => 'multi_option',
				'title'     =>  __('2nd language options', 'pagelines'),
				'selectvalues'   => array(
					'language_2_code' =>  array(
						'default'   =>  '',
						'type'    =>  'text',
						'inputlabel'  =>  __('Type your 2nd language code: "fr" for French.', 'pagelines'),
					),
					'language_2_logo' => array(
						'default'          => '',
						'type'              => 'image_upload',
						'imagepreview'      => '270',
						'inputlabel'      => __( 'Upload 2nd language logo.', 'pagelines' ),
					),
					'language_2_heading' =>  array(
						'default'   =>  '',
						'type'    =>  'text',
						'inputlabel'  =>  __('OR you can use a custom Site Title.', 'pagelines'),
					),
					'language_2_subheading' =>  array(
						'default'   =>  '',
						'type'    =>  'text',
						'inputlabel'  =>  __('If you are using a custom Site Title. You might want to add a subheading.', 'pagelines')
					)
				)
			),
			//language 3 settings
			'language_3'   => array(
				'default'    => '',
				'type'     => 'multi_option',
				'title'     =>  __('3rd language options', 'pagelines'),
				'selectvalues'   => array(
					'language_3_code' =>  array(
						'default'   =>  '',
						'type'    =>  'text',
						'inputlabel'  =>  __('Type your 3rd language code: "da" for Danish.', 'pagelines'),
					),
					'language_3_logo' => array(
						'default'          => '',
						'type'              => 'image_upload',
						'imagepreview'      => '270',
						'inputlabel'      => __( 'Upload 3rd language logo.', 'pagelines' ),
					),
					'language_3_heading' =>  array(
						'default'   =>  '',
						'type'    =>  'text',
						'inputlabel'  =>  __('OR you can use a custom Site Title.', 'pagelines'),
					),
					'language_3_subheading' =>  array(
						'default'   =>  '',
						'type'    =>  'text',
						'inputlabel'  =>  __('If you are using a custom Site Title. You might want to add a subheading.', 'pagelines')
					)
				)
			),
			//language 4 settings
			'language_4'   => array(
				'default'    => '',
				'type'     => 'multi_option',
				'title'     =>  __('4th language options', 'pagelines'),
				'selectvalues'   => array(
					'language_4_code' =>  array(
						'default'   =>  '',
						'type'    =>  'text',
						'inputlabel'  =>  __('Type your 4th language code: "es" for Spanish.', 'pagelines'),
					),
					'language_4_logo' => array(
						'default'          => '',
						'type'              => 'image_upload',
						'imagepreview'      => '270',
						'inputlabel'      => __( 'Upload 4th language logo.', 'pagelines' ),
					),
					'language_4_heading' =>  array(
						'default'   =>  '',
						'type'    =>  'text',
						'inputlabel'  =>  __('OR you can use a custom Site Title.', 'pagelines'),
					),
					'language_4_subheading' =>  array(
						'default'   =>  '',
						'type'    =>  'text',
						'inputlabel'  =>  __('If you are using a custom Site Title. You might want to add a subheading.', 'pagelines')
					)
				)
			),
			//language 5 settings
			'language_5'   => array(
				'default'    => '',
				'type'     => 'multi_option',
				'title'     =>  __('5th language options', 'pagelines'),
				'selectvalues'   => array(
					'language_5_code' =>  array(
						'default'   =>  '',
						'type'    =>  'text',
						'inputlabel'  =>  __('Type your 5th language code: "no" for Norwegian.', 'pagelines'),
					),
					'language_5_logo' => array(
						'default'          => '',
						'type'              => 'image_upload',
						'imagepreview'      => '270',
						'inputlabel'      => __( 'Upload 5th language logo.', 'pagelines' ),
					),
					'language_5_heading' =>  array(
						'default'   =>  '',
						'type'    =>  'text',
						'inputlabel'  =>  __('OR you can use a custom Site Title.', 'pagelines'),
					),
					'language_5_subheading' =>  array(
						'default'   =>  '',
						'type'    =>  'text',
						'inputlabel'  =>  __('If you are using a custom Site Title. You might want to add a subheading.', 'pagelines')
					)
				)
			)
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
