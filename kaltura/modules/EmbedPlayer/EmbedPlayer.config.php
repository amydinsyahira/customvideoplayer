<?php
	/**
	 * Do not edit this file instead use LocalSettings.php and
	 * $wgMwEmbedModuleConfig[ {configuration name} ] = value; format
	 */
	return array (

			// If the player controls should be overlaid on top of the video ( if supported by playback method)
			// can be set to false per embed player via overlayControls attribute
			'EmbedPlayer.OverlayControls' => true,

			// The preferred media codec preference
			// Note user selected format order
			'EmbedPlayer.CodecPreference' => array( 'h264', 'webm', 'ogg' ),

			// If video tag support should be disabled all-together, used to test
			// fallback decoding methods and direct file links
			'EmbedPlayer.DisableVideoTagSupport' => false,
			
			// If detected browser flash support should be ignored, and flash support,
			// set to false. This will eliminate support for flash based playback.
			'EmbedPlayer.DisableHTML5FlashFallback'=> false,

			// Can be used to set player sources via configuration, useful in cases,
			// where metadata is loaded from an api, but actual sources need to be pointed
			// to another location at runtime via config
			'EmbedPlayer.ReplaceSources' => null,
	
			// If the flavor selector menu option should be displayed 
			'EmbedPlayer.EnableFlavorSelector' => true,
	
			// If the iPad should use html controls
			// With html controls you can't access native fullscreen
			// With html controls you can support html themed controls, overlays, ads etc. )
			'EmbedPlayer.EnableIpadHTMLControls' => true,
		
			// If we should use the native device fullscreen call,
			// this gives you hybrid player, where controls are in HTML for in browser playback,
			// and native controls when the fullscreen button is pressed.
			// its not the default since often users want playback control if using html controls,
			// ( i.e no add skip etc )
			'EmbedPlayer.EnableIpadNativeFullscreen' => false,
	
			// By default we display an html play screen, image thumb and play button.
			// even though this is still a 'native' player.
			// If you are not using ad plugins you may want to set this to false
 			// and display the native play button:
			'EmbedPlayer.iPhoneShowHTMLPlayScreen' => true,
			
			// If the large play button should be disabled on replay:
			'EmbedPlayer.ForceLargeReplayButton' => false,
	
			// The attribution library page
			'EmbedPlayer.LibraryPage' => 'http://www.kaltura.org/project/HTML5_Video_Media_JavaScript_Library',
	
			// What tags will be re-written to video player by default
			// Set to empty string or null to avoid automatic video tag rewrites to embedPlayer
			"EmbedPlayer.RewriteSelector" => "video,audio,playlist",
	
			// Default video size ( if no size provided )
			"EmbedPlayer.DefaultSize" => "400x300",
			
			// Default player controls size:
			'EmbedPlayer.ControlsHeight' => 31,
	
			// Default time display size:
			'EmbedPlayer.TimeDisplayWidth' => 75,
	
			// If the video player should attribute kaltura
			"EmbedPlayer.KalturaAttribution" => true,
	
			// The attribution button
			'EmbedPlayer.AttributionButton' => array(
				'title' => 'Kaltura html5 video library',
			 	'href' => 'http://www.kaltura.com',
				// Style icon to be applied
				'class' => 'kaltura-icon',
				// Style to be applied to the outer attribution button container div
				'style' => array(),
				// An icon image url 16x16 image url or data url )
				'iconurl' => false
			),
	
			// If users can right click on the player
			'EmbedPlayer.EnableRightClick' => true,

			// If the player should wait for metadata like video size and duration, before trying to draw
			// the player interface.
			'EmbedPlayer.WaitForMeta' => true,
			
			// Set the browser player warning flag displays warning for non optimal playback
			"EmbedPlayer.ShowNativeWarning" => false,
			
			// If player errors / alerts should be displayed:
			"EmbedPlayer.ShowPlayerAlerts" => true,
			
			// If fullscreen is global enabled.
			"EmbedPlayer.EnableFullscreen" => true,
			
			// If the embed player time display should be shown
			'EmbedPlayer.EnableTimeDisplay' => true,
		
			// If the embed player volume control should be displayed
			'EmbedPlayer.EnableVolumeControl' => true,
			
			// If fullscreen should pop-open a new window
			//( instead of trying to expand the video player to browser fullscreen )
			"EmbedPlayer.NewWindowFullscreen" => false,
			
			// If a fullscreen tip to press f11 should be displayed when entering fullscreen
			"EmbedPlayer.FullscreenTip" => true,
			
			// if the browser should display a warning for direct file links:
			"EmbedPlayer.DirectFileLinkWarning" => false,
			
			"EmbedPlayer.FirefoxLink" => 'http://www.mozilla.com/en-US/firefox/upgrade.html?from=mwEmbed',
			
			// If mwEmbed should use the Native player controls
			// this will prevent video tag rewriting and skinning
			// useful for devices such as iPad / iPod that
			// don't fully support DOM overlays or don't expose full-screen
			// functionality to javascript
			"EmbedPlayer.NativeControls" => false,
	
			// If mwEmbed should use native controls on mobile safari
			"EmbedPlayer.NativeControlsMobileSafari" => true,
	
			// The z-index given to the player interface during full screen ( high z-index )
			"EmbedPlayer.FullScreenZIndex" => 999998,
	
			// The default share embed mode ( can be "iframe" or "xssVideo" )
			//
			// "iframe" will provide a <iframe tag pointing to mwEmbedFrame.php
			// 		Object embedding should be much more compatible with sites that
			//		let users embed flash applets
			// "xssVideo" will include the source javascript and video tag to
			//	 	rewrite the player on the remote page DOM
			//		Video tag embedding is much more mash-up friendly but exposes
			//		the remote site to the mwEmbed javascript and can be a xss issue.
			"EmbedPlayer.ShareEmbedMode" => 'iframe',
			
			// Default player skin name
			"EmbedPlayer.DefaultSkin" => "mvpcf",

			// Number of milliseconds between interface updates
			'EmbedPlayer.MonitorRate' => 250,
			
			// If on Android should use html5 ( even if flash is installed on the machine )
			'EmbedPlayer.UseFlashOnAndroid' => false,
			
			// If embedPlayer should support server side temporal urls for seeking options are
			'EmbedPlayer.EnableURLTimeEncoding' => false,
			
			// The domains which can read and send events to the video player
			'EmbedPLayer.IFramePlayer.DomainWhiteList' => '*',
			
			// If set to true will output the iframe as inline contents on the same domain as page contents
			'EmbedPlayer.PageDomainIframe' => true,
	
			// When there is no in-browser playback mechanism provide a download link for the play button
			'EmbedPlayer.NotPlayableDownloadLink' => true,
	
			// A black pixel for source switching
			'EmbedPlayer.BlackPixel' => "data:image/png,%89PNG%0D%0A%1A%0A%00%00%00%0DIHDR%00%00%00%01%00%00%00%01%08%02%00%00%00%90wS%DE%00%00%00%01sRGB%00%AE%CE%1C%E9%00%00%00%09pHYs%00%00%0B%13%00%00%0B%13%01%00%9A%9C%18%00%00%00%07tIME%07%DB%0B%0A%17%041%80%9B%E7%F2%00%00%00%19tEXtComment%00Created%20with%20GIMPW%81%0E%17%00%00%00%0CIDAT%08%D7c%60%60%60%00%00%00%04%00%01'4'%0A%00%00%00%00IEND%AEB%60%82",
			
			// Default duration for playing "images" 
			"EmbedPlayer.DefaultImageDuration" => 2,

			// Default Timeout for Player controls hover out
			"EmbedPlayer.HoverOutTimeout" => 300,

			// Default Timeout for Mouse Move check
			"EmbedPlayer.MouseMoveTimeout" => 4000,
	);
?>