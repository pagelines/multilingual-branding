<?php
/*
	Section: Multilingual Branding
	Author: Aleksander Hansson
	Author URI: http://ahansson.com
	Demo: http://mlbranding.ahansson.com
	Version: 1.4
	Description: Do you have a multilingual site or do you just want to welcome your foreign visitors with a logo in their language. Then this is the section you need. Multilingual Branding automtically detects the users browser language and if you have specified a logo in thier language, the logo will show just as the normal logo would. Multilingual Branding supports up to 5 languages and works well with WPML.
	Class Name: MultilingualBranding
	Workswith: header
	V3: true
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

    	if ($clang == $this->opt('language_1_code')) {

    		if ($this->opt('language_1_logo')) {

    			printf('<a class="mainlogo-link" href="%s" title="%s"><img data-sync="language_1_logo" class="mainlogo-img" src="%s" alt="Logo" /></a>',
    				esc_url(home_url()),
    				get_bloginfo('name'),
    				$this->opt('language_1_logo')
    			);

    		} else {

    			printf( '<h1 class="title-container"><a data-sync="language_1_heading" class="home site-title" href="%s" title="%s">%s</a><h5 data-sync="language_1_subheading" class="site-description">%s</h5></h1>',
    				esc_url(home_url()),
    				__('Home','multilingual-branding'),
    				$this->opt('language_1_heading'),
    				$this->opt('language_1_subheading')
    			);

    		}

    	} elseif ($clang == $this->opt('language_2_code')) {

    		if ($this->opt('language_2_logo')) {

    			printf('<a class="mainlogo-link" href="%s" title="%s"><img data-sync="language_2_logo" class="mainlogo-img" src="%s" alt="Logo" /></a>',
    				esc_url(home_url()),
    				get_bloginfo('name'),
    				$this->opt('language_2_logo')
    			);

    		} else {

    			printf( '<h1 class="title-container"><a data-sync="language_2_heading" class="home site-title" href="%s" title="%s">%s</a><h5 data-sync="language_2_subheading" class="site-description">%s</h5></h1>',
    				esc_url(home_url()),
    				__('Home','multilingual-branding'),
    				$this->opt('language_2_heading'),
    				$this->opt('language_2_subheading')
    			);

    		}

    	} elseif ($clang == $this->opt('language_3_code')) {

    		if ($this->opt('language_3_logo')) {

    			printf('<a class="mainlogo-link" href="%s" title="%s"><img data-sync="language_3_logo" class="mainlogo-img" src="%s" alt="Logo" /></a>',
    				esc_url(home_url()),
    				get_bloginfo('name'),
    				$this->opt('language_3_logo')
    			);

    		} else {

    			printf( '<h1 class="title-container"><a data-sync="language_3_heading" class="home site-title" href="%s" title="%s">%s</a><h5 data-sync="language_3_subheading" class="site-description">%s</h5></h1>',
    				esc_url(home_url()),
    				__('Home','multilingual-branding'),
    				$this->opt('language_3_heading'),
    				$this->opt('language_3_subheading')
    			);

    		}

    	} elseif ($clang == $this->opt('language_4_code')) {

    		if ($this->opt('language_4_logo')) {

    			printf('<a class="mainlogo-link" href="%s" title="%s"><img data-sync="language_4_logo" class="mainlogo-img" src="%s" alt="Logo" /></a>',
    				esc_url(home_url()),
    				get_bloginfo('name'),
    				$this->opt('language_4_logo')
    			);

    		} else {

    			printf( '<h1 class="title-container"><a data-sync="language_4_heading" class="home site-title" href="%s" title="%s">%s</a><h5 data-sync="language_4_subheading" class="site-description">%s</h5></h1>',
    				esc_url(home_url()),
    				__('Home','multilingual-branding'),
    				$this->opt('language_4_heading'),
    				$this->opt('language_4_subheading')
    			);

    		}
    	} elseif ($clang == $this->opt('language_5_code')) {

    		if ($this->opt('language_5_logo')) {

    			printf('<a class="mainlogo-link" href="%s" title="%s"><img data-sync="language_5_logo" class="mainlogo-img" src="%s" alt="Logo" /></a>',
    				esc_url(home_url()),
    				get_bloginfo('name'),
    				$this->opt('language_5_logo')
    			);

    		} else {

    			printf( '<h1 class="title-container"><a data-sync="language_5_heading" class="home site-title" href="%s" title="%s">%s</a><h5 data-sync="language_5_subheading" class="site-description">%s</h5></h1>',
    				esc_url(home_url()),
    				__('Home','multilingual-branding'),
    				$this->opt('language_5_heading'),
    				$this->opt('language_5_subheading')
    			);

    		}

    	} else {

    		if ($this->opt('language_1_logo')) {

    			printf('<a class="mainlogo-link" href="%s" title="%s"><img data-sync="language_1_logo" class="mainlogo-img" src="%s" alt="Logo" /></a>',
    				esc_url(home_url()),
    				get_bloginfo('name'),
    				$this->opt('language_1_logo')
    			);

    		} else {

    			printf( '<h1 class="title-container"><a data-sync="language_1_heading" class="home site-title" href="%s" title="%s">%s</a><h5 data-sync="language_1_subheading" class="site-description">%s</h5></h1>',
    				esc_url(home_url()),
    				__('Home','multilingual-branding'),
    				$this->opt('language_1_heading'),
    				$this->opt('language_1_subheading')
    			);

    		}
    	}
		/**
		 * The below is taken directly from PageLines Branding section.
		 * All credits goes to PageLines for that part.
		 */

		printf('<div class="icons" style="bottom: %spx; right: %spx;">', intval(pagelines_option('icon_pos_bottom')), pagelines_option('icon_pos_right'));

			pagelines_register_hook( 'pagelines_branding_icons_start', 'branding' ); // Hook

			if($this->opt('ml_branding_rss'))
				printf('<a target="_blank" href="%s" class="rsslink"><img src="%s" alt="RSS"/></a>', apply_filters( 'pagelines_branding_rssurl', get_bloginfo('rss2_url') ), $this->base_url.'/rss.png' );
			if($this->opt('ml_branding_twitter'))
				printf('<a target="_blank" href="%s" class="twitterlink"><img src="%s" alt="Twitter"/></a>', $this->opt('ml_branding_twitter'), $this->base_url.'/twitter.png');
			if($this->opt('ml_branding_facebook'))
				printf('<a target="_blank" href="%s" class="facebooklink"><img src="%s" alt="Facebook"/></a>', $this->opt('ml_branding_facebook'), $this->base_url.'/facebook.png');
			if($this->opt('ml_branding_linkedin'))
				printf('<a target="_blank" href="%s" class="linkedinlink"><img src="%s" alt="LinkedIn"/></a>', $this->opt('ml_branding_linkedin'), $this->base_url.'/linkedin.png');
			if($this->opt('ml_branding_youtube'))
				printf('<a target="_blank" href="%s" class="youtubelink"><img src="%s" alt="Youtube"/></a>', $this->opt('ml_branding_youtube'), $this->base_url.'/youtube.png');
			if($this->opt('ml_branding_google'))
				printf('<a target="_blank" href="%s" class="gpluslink"><img src="%s" alt="Google+"/></a>', $this->opt('ml_branding_google'), $this->base_url.'/google.png');

			pagelines_register_hook( 'pagelines_branding_icons_end', 'branding' ); // Hook

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

		$metatab_array = array(

			//language 1 settings
			'ml_branding_icons'   => array(
				'type'     => 'multi_option',
				'title'     =>  __('Icons', 'multilingual-branding'),
				'selectvalues'   => array(
					'ml_branding_rss' =>  array(
						'type'    =>  'check',
						'inputlabel'  =>  __('RSS', 'multilingual-branding'),
					),
					'ml_branding_facebook' => array(
						'type'              => 'text',
						'inputlabel'      => __( 'Facebook link', 'multilingual-branding' ),
					),
					'ml_branding_twitter' =>  array(
						'type'    =>  'text',
						'inputlabel'  =>  __('Twitter link', 'multilingual-branding'),
					),
					'ml_branding_linkedin' =>  array(
						'type'    =>  'text',
						'inputlabel'  =>  __('LinkedIn link', 'multilingual-branding')
					),
					'ml_branding_youtube' =>  array(
						'type'    =>  'text',
						'inputlabel'  =>  __('YouTube link', 'multilingual-branding')
					),
					'ml_branding_google' =>  array(
						'type'    =>  'text',
						'inputlabel'  =>  __('Google+ link', 'multilingual-branding')
					)
				)
			),

			//language 1 settings
			'language_1'   => array(
				'type'     => 'multi_option',
				'title'     =>  __('1st language options', 'multilingual-branding'),
				'selectvalues'   => array(
					'language_1_code' =>  array(
						'type'    =>  'text',
						'inputlabel'  =>  __('Type your 1st language code: "en" for English. This is also DEFAULT language if no languages matches users browser language!', 'multilingual-branding'),
					),
					'language_1_logo' => array(
						'type'              => 'image_upload',
						'inputlabel'      => __( 'Upload 1st language logo.', 'multilingual-branding' ),
					),
					'language_1_heading' =>  array(
						'type'    =>  'text',
						'inputlabel'  =>  __('OR you can use a custom Site Title.', 'multilingual-branding'),
					),
					'language_1_subheading' =>  array(
						'type'    =>  'text',
						'inputlabel'  =>  __('If you are using a custom Site Title. You might want to add a subheading.', 'multilingual-branding')
					)
				)
			),
			//language 2 settings
			'language_2'   => array(
				'type'     => 'multi_option',
				'title'     =>  __('2nd language options', 'multilingual-branding'),
				'selectvalues'   => array(
					'language_2_code' =>  array(
						'type'    =>  'text',
						'inputlabel'  =>  __('Type your 2nd language code: "fr" for French.', 'multilingual-branding'),
					),
					'language_2_logo' => array(
						'type'              => 'image_upload',
						'inputlabel'      => __( 'Upload 2nd language logo.', 'multilingual-branding' ),
					),
					'language_2_heading' =>  array(
						'type'    =>  'text',
						'inputlabel'  =>  __('OR you can use a custom Site Title.', 'multilingual-branding'),
					),
					'language_2_subheading' =>  array(
						'type'    =>  'text',
						'inputlabel'  =>  __('If you are using a custom Site Title. You might want to add a subheading.', 'multilingual-branding')
					)
				)
			),
			//language 3 settings
			'language_3'   => array(
				'type'     => 'multi_option',
				'title'     =>  __('3rd language options', 'multilingual-branding'),
				'selectvalues'   => array(
					'language_3_code' =>  array(
						'type'    =>  'text',
						'inputlabel'  =>  __('Type your 3rd language code: "da" for Danish.', 'multilingual-branding'),
					),
					'language_3_logo' => array(
						'type'              => 'image_upload',
						'inputlabel'      => __( 'Upload 3rd language logo.', 'multilingual-branding' ),
					),
					'language_3_heading' =>  array(
						'type'    =>  'text',
						'inputlabel'  =>  __('OR you can use a custom Site Title.', 'multilingual-branding'),
					),
					'language_3_subheading' =>  array(
						'type'    =>  'text',
						'inputlabel'  =>  __('If you are using a custom Site Title. You might want to add a subheading.', 'multilingual-branding')
					)
				)
			),
			//language 4 settings
			'language_4'   => array(
				'type'     => 'multi_option',
				'title'     =>  __('4th language options', 'multilingual-branding'),
				'selectvalues'   => array(
					'language_4_code' =>  array(
						'type'    =>  'text',
						'inputlabel'  =>  __('Type your 4th language code: "es" for Spanish.', 'multilingual-branding'),
					),
					'language_4_logo' => array(
						'type'              => 'image_upload',
						'inputlabel'      => __( 'Upload 4th language logo.', 'multilingual-branding' ),
					),
					'language_4_heading' =>  array(
						'type'    =>  'text',
						'inputlabel'  =>  __('OR you can use a custom Site Title.', 'multilingual-branding'),
					),
					'language_4_subheading' =>  array(
						'type'    =>  'text',
						'inputlabel'  =>  __('If you are using a custom Site Title. You might want to add a subheading.', 'multilingual-branding')
					)
				)
			),
			//language 5 settings
			'language_5'   => array(
				'type'     => 'multi_option',
				'title'     =>  __('5th language options', 'multilingual-branding'),
				'selectvalues'   => array(
					'language_5_code' =>  array(
						'type'    =>  'text',
						'inputlabel'  =>  __('Type your 5th language code: "no" for Norwegian.', 'multilingual-branding'),
					),
					'language_5_logo' => array(
						'type'              => 'image_upload',
						'inputlabel'      => __( 'Upload 5th language logo.', 'multilingual-branding' ),
					),
					'language_5_heading' =>  array(
						'type'    =>  'text',
						'inputlabel'  =>  __('OR you can use a custom Site Title.', 'multilingual-branding'),
					),
					'language_5_subheading' =>  array(
						'type'    =>  'text',
						'inputlabel'  =>  __('If you are using a custom Site Title. You might want to add a subheading.', 'multilingual-branding')
					)
				)
			)
		);

		$metatab_settings = array(

			'id'		=> 'multilingual_branding_options',
			'name'		=> 'Multilingual Branding',
			'icon'		=> $this->icon,
			'clone_id'	=> $settings['clone_id'],
			'active'	=> $settings['active']
		);

		register_metatab($metatab_settings, $metatab_array);

	}

}
