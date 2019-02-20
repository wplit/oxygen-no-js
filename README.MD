# Oxygen No JS #
**Contributors:** David Browne  
**Tags:** oxygen  
**Requires at least:** Oxygen 2.0
**License:** GPLv2 or later  
**License URI:** http://www.gnu.org/licenses/gpl-2.0.html

Made specifically for [Oxygen builder](http://oxygenbuilder.com/). Adds a `no-js` body class to your Oxygen site, and an inline script that changes it back to `js` if JavaScript is enabled in the browser. Useful for making more accessible websites with Oxygen by allowing non-JS users to still access the content of your site and for adding/removing elements that don't make sense without JS enabled (sliders..)

## Out of the box, the plugin does three things. ##

1. Ensures content with AOS animations enabled is still visible without JS needed (otherwise the opacity is stuck on 0.)
2. Makes the responsive menu accessible without JS (menu items are styled similar to non-responsive menu)
3. Provides fall back styles for Oxygen components that are JS dependent - eg slider.

Use the 'no-js' body class to add your own styles inside Oxygen to give fall backs for anything you add using JS, making your site more accessible. 

You can also use the 'js' body class if you want to only target elements whn you are sure JS is enabled.
 

## Installation ##

1. [Download the plugin here.](https://github.com/wplit/oxygen-no-js/archive/master.zip)
2. Go to Plugins > Add New in your WordPress admin. Click on `Upload Plugin` and browse for the zip file.
3. Activate the plugin. There are no settings.

## Changelog ##

### 1.0.0 - Feb 20, 2019 ###
* Initial Release


## Credit ##
Inspired by Gary Jones' [similar plugin](https://github.com/GaryJones/genesis-js-no-js) that was built for Genesis themes only.
