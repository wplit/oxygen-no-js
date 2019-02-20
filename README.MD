# Oxygen No JS #
**Contributors:** David Browne  
**Tags:** oxygen  
**Requires at least:** Oxygen 2.0
**License:** GPLv2 or later  
**License URI:** http://www.gnu.org/licenses/gpl-2.0.html

Made specifically for [Oxygen builder](http://oxygenbuilder.com/).

If you view your Oxygen site without JS enabled (which is how a small % of site visitors will see it) you'll probably notice some of your site doesn't look right. The slider elements will be all piled on top of each other, any elements that you have fade-in type scroll animations on will be completely invisible and any other JS dependant elements you've added are likely to be messed up.

This plugin allows you to target the elements of your site using a `no-js` body class, allowing you to create much more accessible websites. Useful for adding/removing elements that don't make sense without JS enabled (sliders..) and providing alternative options that can be hidden from users that do have JS enabled.

[How to Disable JS in Chrome Dev Tools](https://stackoverflow.com/questions/13405383/how-to-disable-javascript-in-chrome-developer-tools)


## Out of the box, the plugin does three things. ##

1. Ensures content with AOS animations enabled is still visible without JS needed (otherwise the opacity is stuck on 0.)
2. Makes the responsive menu accessible without JS (menu-toggle hidden and menu items visible)
3. Provides fall back styles for Oxygen components that are JS dependent - eg slider.
4. Adds `no-js` body class that is instantly replaced with `js` for JS enabled browsers.

Use the `no-js` body class to add your own styles inside Oxygen to give fall backs for anything you add using JS, making your site more accessible. 

You can also use the `js` body class if you want to only target elements whn you are sure JS is enabled.

### Simple example.. (if you wanted to remove slider completely for no-JS users) ###

`.no-js .ct-slider {
    display: none;
}`
 

## Installation ##

1. [Download the plugin here.](https://github.com/wplit/oxygen-no-js/archive/master.zip)
2. Go to Plugins > Add New in your WordPress admin. Click on `Upload Plugin` and browse for the zip file.
3. Activate the plugin. There are no settings.

## Changelog ##

### 1.0.0 - Feb 20, 2019 ###
* Initial Release


## Credit ##
Inspired by Gary Jones' [similar plugin](https://github.com/GaryJones/genesis-js-no-js) that was built for Genesis themes only.
