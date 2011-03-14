# SilverStripe ClickTale Module

The ClickTale modules adds the ability to do deep web analysis and screen recording on any page on your website.
YOu can toggle tracking on and off each page in the ClickTale tab.

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
Make sure that the folder "Cache" which is generated inside "/clicktale/lib/ is writable.