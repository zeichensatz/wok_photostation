# customsubcategory=1000=Resources
# customsubcategory=1010=Server Settings
# customsubcategory=1100=General Settings
# customsubcategory=1120=GPXViewer Profile
# customsubcategory=1130=Javascript Settings
# customsubcategory=1300=Templates
# customsubcategory=1400=Storage

plugin.tx_wokphotostation_albumdisplay {
	photostation {
		# cat=PhotoStation/1000/10; type=string; label=PhotoStation JavaScript Source File: Patched JavaScript file for Lightbox. Will only be included when lightbox string is set to &lightbox=1!
		jsSourceFile=EXT:wok_photostation/Resources/Public/PhotoStation/jsSource/syno_photo_external.js
		# cat=PhotoStation/1000/20; type=string; label=PhotoStation CSS File: CSS for PhotoStation
		cssFile=EXT:wok_photostation/Resources/Public/CSS/custom.css

		# cat=PhotoStation/1010/30; type=string; label=PhotoStation Server: Web server address of PhotoStation
		server=fotos.wolfgang-kleinbach.de
		# cat=PhotoStation/1010/40; type=string; label=PhotoStation Server http/https switch: Switch between http/https. Lightbox will only work with https!!
		http=https://
		# cat=PhotoStation/1010/50; type=string; label=PhotoStation Server string: Webpage string for PhotoStation (only change when you know what are you doing!)
		pageString=/photo/embed/embed.html?album=

		# cat=PhotoStation/1100/10; type=string; label=PhotoStation autoplay: Activate autoplay feature. Deactivate with empty string! (Default &autoplay=1)
		autoplay=&autoplay=1
		# cat=PhotoStation/1100/20; type=string; label=PhotoStation link: Set a link to PhotoStation. Deactivate with empty string! (Default &openps=1)
		openps=&openps=1
		# cat=PhotoStation/1100/30; type=string; label=PhotoStation lightbox: Activate lightbox feature. Deactivate with empty string! (Default &lightbox=1)
		lightbox=&lightbox=1

		# cat=PhotoStation/1100/40; type=options[on=true,off=false]; label=PhotoStation album description: Toggle for display of PhotoStation album description
		showDescription=true
		# cat=PhotoStation/1100/50; type=options[on=true,off=false]; label=PhotoStation debug: Toggle for debugging. Displays settings
		debug=false
	}
	view {
		# cat=PhotoStation/1300/templaterootpath; type=string; label=Path to template root (FE)
		templateRootPath = EXT:wok_photostation/Resources/Private/Templates/
		# cat=PhotoStation/1300/partialrootpath; type=string; label=Path to template partials (FE)
		partialRootPath = EXT:wok_photostation/Resources/Private/Partials/
		# cat=PhotoStation/1300/layoutrootpath; type=string; label=Path to template layouts (FE)
		layoutRootPath = EXT:wok_photostation/Resources/Private/Layouts/
	}
	persistence {
		# cat=PhotoStation/1400/storagepid; type=string; label=Default storage PID
		storagePid =
	}
}
