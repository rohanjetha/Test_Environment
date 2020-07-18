THEME_Fordson
===========

# Fordson

Fordson is focused on students going from login to learning, with features that help teachers build better courses and students engage with content. Your school is unique and Fordson provides impressive customizations for a professional and modern learning platform. 

# Install from Github
Click on the button to "Clone or Download" https://github.com/dbnschools/moodle-theme_fordson . When downloaded to your computer, unzip it. It should create a folder named "moodle-theme_fordson-master". Rename the folder so that it is "fordson" (without quotes). You can FTP that folder to your moodle site in /moodle/theme/ directory. Or you can create a new ZIP file of the "fordson" folder and upload and install it via the Plugin Administration in Site Administration.


# Versions and Updates

## Moodle 3.7 Fordson v3.7 release 1.2.2
* Further enhancements to styling for the Collapsible Topics Course Format https://moodle.org/plugins/format_collapsibletopics to be better integrated with Fordson Section/Topic styling.
* New full width slideshow on custom login page.  Appears behind the login box.  Can also toggle display pages to appear on just the login page, just sitehome/dashboard, or everywhere.
* Fullwidth slideshow only works on custom login page.  Standard Moodle login doesn't get the fullwidth slideshow.
* Changed slideshow transition from a slide to a fade.
* FIX Breadcrumb dimmed if activity is hidden. https://moodle.org/mod/forum/discuss.php?d=380976#p1575721  Instead of dimming text we dim the background of the breadcrumb.

## Moodle 3.7 Fordson v3.7 release 1.2.1
* Quick fix for new customfield support in Fordson.  This fixes an error that appears if you do not utilize custom fields.

## Moodle 3.7 Fordson v3.7 release 1.2
* Introducing "Integrated Plugins" concept for preferred plugins to be used with Fordson.  You can now activate enhanced features for the Collapsible Topics Course Format https://moodle.org/plugins/format_collapsibletopics designed to provide a seamless and powerful integration of theme and course format.  Fordson provides an enhanced user experience based on this course format.  Install the course format and then turn on the integration in Fordson Admin to get a tightly integrated and seamless user experience that builds upon the base plugin.
* Added new Custom Field support to be displayed in course directories.

## Moodle 3.7 Fordson v3.7 release 1.1
* Fixed missing quote https://github.com/dbnschools/moodle-theme_fordson/issues/74
* Fixed course completion bar showing when not logged in https://github.com/dbnschools/moodle-theme_fordson/issues/73
* Modified and enhanced activity completion bar on topic and weekly course format.  Set the course format to show one topic/week per page and enable activity completion to see the progress bar for each topic on the course homepage.  The new look is clean, slim, and modern looking.
* Changed permission to get Site Admin button to "has_capability('moodle/site:configview', $context)".  Previously we used "is_siteadmin()" to check for permission to show the button.  This will allow more flexibility in allowing quick access to site admin area without having to make a user a site admin.  you might only want to allow a user to manage badges.  By giving them this permission they will get a link to site admin which will show them what they have access to.

## Moodle 3.7 Fordson v3.7 release 1
* Initial release for Moodle 3.7