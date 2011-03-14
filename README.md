# SilverStripe ClickTale Module

The ClickTale modules adds the ability to do deep web analysis and screen recording on any page on your website.
You can toggle tracking on and off each page in the ClickTale tab.

For more information about the ClickTale Integration Module see (http://wiki.clicktale.com/Article/PHP_integration_module)

## Maintainer Contacts
*  Cam Findlay (<cam@camfindlay.com>)

## Requirements
*  SilverStripe 2.4+.
*  A ClickTale Account (http://clicktale.com)
* The latest ClickTale Integration Module put inside the ./lib/ folder (http://www.clicktale.com/integration/ClickTalePHPIntegrationModule_latest.zip)

## Project Links
*  [GitHub Project Page](https://github.com/cam-findlay/silverstripe-clicktale)
*  [Issue Tracker](https://github.com/cam-findlay/silverstripe-clicktale/issues)

##Usage

Make sure to name your module folder "clicktale" (all lowercase).

###Add to your templates
Add the following to the very top of your *.ss template:

<% if ClickTaleTrack %>
$ClickTaleTop
<% end_if %>


And to the very bottom:

<% if ClickTaleTrack %>
$ClickTaleBottom
<% end_if %>

###Make folders writable
Make sure that the folders "Cache" and "Logs" inside "/clicktale/lib/ are writable (chmod 777).

##Testing and debugging you installation

Test your installation is set up correctly by going to the URL http://youdomain.com/clicktale/lib/Install/index.php

Correct any items that show up with red boxes.

##Debug Mode
add ?ct=debug to bring up a debugging window.

##Enable/Disable ClickTale for your IP address
If you would rather your hits on pages are not logged by ClickTale:

* Add ?ct=disable to any url where ClickTale is present.
* To enable again add ?ct=enable
* YOu can conbine actions with debugging e.g. ?ct=disable,debug etc
