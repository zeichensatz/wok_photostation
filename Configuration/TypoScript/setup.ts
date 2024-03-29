plugin.tx_wokphotostation_albumdisplay {
	settings {
		jsSourceFile={$plugin.tx_wokphotostation_albumdisplay.photostation.jsSourceFile}
		cssFile = {$plugin.tx_wokphotostation_albumdisplay.photostation.cssFile}
		server = {$plugin.tx_wokphotostation_albumdisplay.photostation.server}
		http = {$plugin.tx_wokphotostation_albumdisplay.photostation.http}
		pageString = {$plugin.tx_wokphotostation_albumdisplay.photostation.pageString}
		openps = {$plugin.tx_wokphotostation_albumdisplay.photostation.openps}
		autoplay = {$plugin.tx_wokphotostation_albumdisplay.photostation.autoplay}
		lightbox = {$plugin.tx_wokphotostation_albumdisplay.photostation.lightbox}
		showDescription = {$plugin.tx_wokphotostation_albumdisplay.photostation.showDescription}

		// Fürs Debuggen
		debug = {$plugin.tx_wokphotostation_albumdisplay.photostation.debug}
	}

	view {
		templateRootPaths.0 = EXT:wok_photostation/Resources/Private/Templates/
		templateRootPaths.1 = {$plugin.tx_wokphotostation_albumdisplay.view.templateRootPath}
		partialRootPaths.0 = EXT:wok_photostation/Resources/Private/Partials/
		partialRootPaths.1 = {$plugin.tx_wokphotostation_albumdisplay.view.partialRootPath}
		layoutRootPaths.0 = EXT:wok_photostation/Resources/Private/Layouts/
		layoutRootPaths.1 = {$plugin.tx_wokphotostation_albumdisplay.view.layoutRootPath}
	}

	persistence {
		storagePid = {$plugin.tx_wokphotostation_albumdisplay.persistence.storagePid}
		#recursive = 1
	}

	features {
		#skipDefaultArguments = 1
		# if set to 1, the enable fields are ignored in BE context
		ignoreAllEnableFieldsInBe = 0
		# Should be on by default, but can be disabled if all action in the plugin are uncached
		requireCHashArgumentForActionArguments = 1
	}

	mvc {
		#callDefaultActionIfActionCantBeResolved = 1
	}

}

// Conditions for arguments
[{$plugin.tx_wokphotostation_albumdisplay.photostation.openps} == true]
	plugin.tx_wokphotostation_albumdisplay.settings.openps=&openps=1
[else]
	plugin.tx_wokphotostation_albumdisplay.settings.openps >
[end]
[{$plugin.tx_wokphotostation_albumdisplay.photostation.autoplay} == true]
	plugin.tx_wokphotostation_albumdisplay.settings.autoplay=&autoplay=1
[else]
	plugin.tx_wokphotostation_albumdisplay.settings.autoplay >
[end]
[{$plugin.tx_wokphotostation_albumdisplay.photostation.lightbox} == true]
	plugin.tx_wokphotostation_albumdisplay.settings.lightbox=&lightbox=1
[else]
	plugin.tx_wokphotostation_albumdisplay.settings.lightbox >
[end]

page {
	// Includes the scss/css file
	includeCSS {
		wok_photostation-theme = {$plugin.tx_wokphotostation_albumdisplay.photostation.cssFile}
	}
}


# these classes are only used in auto-generated templates
/*
plugin.tx_wokphotostation._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-wok-photostation table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-wok-photostation table th {
        font-weight:bold;
    }

    .tx-wok-photostation table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
*/