CSM Minimal WordPress Theme
====

A minimal WordPress theme with some basic customization options. I used Jared Erikson's [Less](https://github.com/alliswell/Less) as a framework and stripped out stuff that I didn't want. Then I added Font Awesome, an options page, lightweight social sharing (no js!) and a few other things to make it pretty!

The options page allows you to choose a base color (blue, pink or grey), add social profiles, header and favicon images and a footer copyright. I also added the ability to insert js or html directly from the options page, without digging into theme files. I use this for inserting Google Tag Manager, MixPanel and Heap Analytics tracking javascript tags. It does not support php.

I would love feedback and feature requests! [Tweet me up!](https://twitter.com/ciaransm)

##Features:
- Responsive
- Minimal design to show off your content.
- An options page that allows easy setting of the header profile image, favicon, base color, copyright and social icon links.
- Social icons in the header (currently supports Twitter, Instagram, Behance, Facebook and Github).
- Three color options – blue, pink and grey.
- Copyright option for footer
- [Lightweight social sharing without javascript](http://ciaranmahoney.me/lightweight-social-sharing-buttons-for-wordpress-without-javascript/6503). (Currently supports sharing to twitter, Facebook and Google Plus).
- [Font awesome icons](http://fortawesome.github.io/Font-Awesome/).
- 5 most recent posts listed after each post.
- Simple, CSS only dropdown menu that supports up 3 levels.
- Ability to insert custom html or js in to three areas: wp_head (just before closing head tag), wp_footer (just after opening footer tag) and csm_after_body (a custom hook just after the opening body tag). 

##Screenshots
**Pink**
![Pink screenshot](https://github.com/ciaranmahoney/csm-theme-wordpress/blob/master/screenshots/pink-screenshot.jpg)

**Blue**
![Blue screenshot](https://github.com/ciaranmahoney/csm-theme-wordpress/blob/master/screenshots/blue-screenshot.jpg)

**Grey**
![Grey screenshot](https://github.com/ciaranmahoney/csm-theme-wordpress/blob/master/screenshots/grey-screenshot.jpg)

**Theme Options**
![Options page](https://github.com/ciaranmahoney/csm-theme-wordpress/blob/master/screenshots/options-screenshot.jpg)

**Dropdown Menu**

![Options page](https://github.com/ciaranmahoney/csm-theme-wordpress/blob/master/screenshots/dropdown-3levels.png)

![Options page](https://github.com/ciaranmahoney/csm-theme-wordpress/blob/master/screenshots/dropdown.png)

## Changelog

**v0.3**
- Added action hook fields in the options page to allow insertion of js or html.
- Added custom action hook - csm_after_body - which hooks just after the opening body tag.

**v0.2**
- Added dropdown menu functionality to support up to three levels.
- Added Facebook, Behance and LinkedIn social links in the menu.
- Added default favicon and header image.
- Some general bug fixes and clean up.

**v0.1** 
- First release