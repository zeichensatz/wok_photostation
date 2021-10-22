# customsubcategory=1000=Resources
# customsubcategory=1010=Server Settings
# customsubcategory=1100=General Settings
# customsubcategory=1120=GPXViewer Profile
# customsubcategory=1130=Javascript Settings
# customsubcategory=1200=SCSS Layout Variables
# customsubcategory=1300=Templates
# customsubcategory=1400=Storage

// Extends bootstrap_package settings to use the ScssPHP parser, which is included in bootstrap_package
plugin.bootstrap_package {
	settings {
		scss {
			# cat=PhotoStation/1200/3200; type=string; label=LLL:EXT:wok_photostation/Resources/Private/Language/locallang.xlf:constants.scss.PS_height.label
			PS_height = 400px
			# cat=PhotoStation/1200/3201; type=string; label=LLL:EXT:wok_photostation/Resources/Private/Language/locallang.xlf:constants.scss.PS_width.label
			PS_width = 600px
			# cat=PhotoStation/1200/3202; type=string; label=LLL:EXT:wok_photostation/Resources/Private/Language/locallang.xlf:constants.scss.PS_bg_color.label
			PS_bg_color = #333
			# cat=PhotoStation/1200/3203; type=string; label=LLL:EXT:wok_photostation/Resources/Private/Language/locallang.xlf:constants.scss.PS_padding.label
			PS_padding = 3px
		}
	}
}

plugin.tx_wokphotostation_albumdisplay {
	photostation {
		# cat=PhotoStation/1000/10; type=string; label=LLL:EXT:wok_photostation/Resources/Private/Language/locallang.xlf:constants.resources.jsSourceFile.label
		jsSourceFile=EXT:wok_photostation/Resources/Public/PhotoStation/jsSource/syno_photo_external.js
		# cat=PhotoStation/1000/20; type=string; label=LLL:EXT:wok_photostation/Resources/Private/Language/locallang.xlf:constants.resources.cssFile.label
		cssFile=EXT:wok_photostation/Resources/Public/Scss/Theme/theme.scss

		# cat=PhotoStation/1010/30; type=string; label=LLL:EXT:wok_photostation/Resources/Private/Language/locallang.xlf:constants.generalSettings.server.label
		server=your.synology.com
		# cat=PhotoStation/1010/40; type=options[https://=https://,http://=http://]; label=LLL:EXT:wok_photostation/Resources/Private/Language/locallang.xlf:constants.generalSettings.http.label
		http=https://
		# cat=PhotoStation/1010/50; type=string; label=LLL:EXT:wok_photostation/Resources/Private/Language/locallang.xlf:constants.generalSettings.pageString.label
		pageString=/photo/embed/embed.html?album=
		# cat=PhotoStation/1100/10; type=options[LLL:EXT:wok_photostation/Resources/Private/Language/locallang.xlf:constants.on.label=true,LLL:EXT:wok_photostation/Resources/Private/Language/locallang.xlf:constants.off.label=false]; label=LLL:EXT:wok_photostation/Resources/Private/Language/locallang.xlf:constants.generalSettings.autoplay.label
		autoplay=true
		# cat=PhotoStation/1100/20; type=options[LLL:EXT:wok_photostation/Resources/Private/Language/locallang.xlf:constants.on.label=true,LLL:EXT:wok_photostation/Resources/Private/Language/locallang.xlf:constants.off.label=false]; label=LLL:EXT:wok_photostation/Resources/Private/Language/locallang.xlf:constants.generalSettings.openps.label
		openps=true
		# cat=PhotoStation/1100/30; type=options[LLL:EXT:wok_photostation/Resources/Private/Language/locallang.xlf:constants.on.label=true,LLL:EXT:wok_photostation/Resources/Private/Language/locallang.xlf:constants.off.label=false]; label=LLL:EXT:wok_photostation/Resources/Private/Language/locallang.xlf:constants.generalSettings.lightbox.label
		lightbox=true
		# cat=PhotoStation/1100/40; type=options[LLL:EXT:wok_photostation/Resources/Private/Language/locallang.xlf:constants.on.label=true,LLL:EXT:wok_photostation/Resources/Private/Language/locallang.xlf:constants.off.label=false]; label=LLL:EXT:wok_photostation/Resources/Private/Language/locallang.xlf:constants.generalSettings.showDescription.label
		showDescription=true
		# cat=PhotoStation/1100/50; type=options[LLL:EXT:wok_photostation/Resources/Private/Language/locallang.xlf:constants.on.label=true,LLL:EXT:wok_photostation/Resources/Private/Language/locallang.xlf:constants.off.label=false]; label=LLL:EXT:wok_photostation/Resources/Private/Language/locallang.xlf:constants.generalSettings.debug.label
		debug=false
	}
	view {
		# cat=PhotoStation/1300/templaterootpath; type=string; label=LLL:EXT:wok_photostation/Resources/Private/Language/locallang.xlf:constants.templates.templateRootPath.label
		templateRootPath = EXT:wok_photostation/Resources/Private/Templates/
		# cat=PhotoStation/1300/partialrootpath; type=string; label=LLL:EXT:wok_photostation/Resources/Private/Language/locallang.xlf:constants.templates.partialRootPath.label
		partialRootPath = EXT:wok_photostation/Resources/Private/Partials/
		# cat=PhotoStation/1300/layoutrootpath; type=string; label=LLL:EXT:wok_photostation/Resources/Private/Language/locallang.xlf:constants.templates.layoutRootPath.label
		layoutRootPath = EXT:wok_photostation/Resources/Private/Layouts/
	}
/*
	persistence {
		# cat=PhotoStation/1400/storagepid; type=string; label=LLL:EXT:wok_photostation/Resources/Private/Language/locallang.xlf:constants.storage.storagePid.label
		storagePid =
	}
*/
}
