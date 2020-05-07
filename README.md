# wok_photostation
Plugin for display of PhotoStation 6.0 albums (stored on a Synology DiskStation) in TYPO3 frontend

## What does it do?
With the plugin PhotoStation album display, you are able to create content elements, which integrate PhotoStation Albums as content elements.
The PhotoStation albums have to be public!

## What prerequisites are needed?
* Synology DiskStation with PhotoStation 6.0 installed (accessible from network)
* Public Albums within PhotoStation 6.0 which you want to integrate as content element(s) in your TYPO3 site

## How to set up?
* Download and install the extension wok_photostation
* Create a new page or use an existing one
* Create an extension template for that page or edit an existing template and "Include static (from extensions)" for PhotoStation (wok_photostation)
* Change to Constant Editor and edit the settings for PHOTOSTATION
** At least you have to edit the constant `plugin.tx_wokphotostation_albumdisplay.photostation.server` to your own DiskStation server
* Now you can create a content element of type plugin and then selecte "PhotoStation album display"
* In the tab Plug-in you have to edit the PhotoStation album hash, which should be in the format `album_57425f32303131303330305f54616977616e5f5075626c6963`. You can get from your public album's context menu "Embed album" in the field HTML-Code. You also can easily copy it from the browser href since it's the last part of the PhotoStation page name.
