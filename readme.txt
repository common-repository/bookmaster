=== BookMaster ===
Contributors: Doc4
Tags: blogroll, blogroll titles, blogroll categories, blogroll category, blogroll category names, links, link titles, link categories, link category, link category names, bookmarks, bookmark titles, bookmark categories, bookmark category names
Requires at least: 2.7
Tested up to: 6.4.3
Stable tag: 1.4
License: GPL-2.0+
License URL: http://www.gnu.org/licenses/gpl-2.0.txt


== Description ==
BookMaster is our answer to what we feel is an odd issue with the WordPress 'wp_list_bookmarks' tag. For those that have used 'wp_list_bookmarks', you are well aware that it is not possible to use the Bookmark Category title alone without calling on all of the Bookmarks themselves. This is, of course, with the exception of excluding all Bookmark Categories which can be annoying if there are a lot of them.

Please note that as of WordPress 3.5 the 'Links' manager has been deprecated and removed from the Dashboard. If you currently have links this option will still be available. If not we recommend the 'Link Manager' plugin from WordPress which is required to run BookMaster. Download here: https://wordpress.org/plugins/link-manager/

With the introduction of BookMaster, we have resolved this issue. The plugin allows you to place the Bookmark Category title anywhere on the site without showing the associated Bookmark links. This allows the Admin the option of changing the Bookmarks title using the Bookmarks (aka: Links) link in the Dashboard which will automatically update the Bookmark title in the code. Using this plugin will prevent need to alter template files.

In the example below (see the Installation tab) we are displaying only the title of the Bookmark 'Category 3' within an h1 style tag. We can now alter this title directly from the Bookmarks (aka: Links) in the Dashboard simply by changing the Bookmark Category name. Displaying directly below the title, the Bookmarks from 'Category 7' will print in an unordered list.

While not the most effective use of this plugin the example utilized below is for educational purposes.

= Plugin URL =
[BookMaster](https://doc4design.com/bookmaster/)

= Screenshots =
[View Screenshots](https://doc4design.com/bookmaster/)



== Installation ==
To install the plugin just follow these simple steps:

1. Download the plugin and expand it.
2. Copy the bookmaster folder into your plugins folder ( wp-content/plugins ).
3. Log-in to the WordPress administration panel and visit the Plugins page.
4. Locate the BookMaster plugin and click on the activate link.
5. Insert "wp_list_bookmaster('category=3');" wherever you would like to show a bookmark category title. Be sure to change the category number to the category you would like to display.
6. Lastly install and activate the 'Link Manager' plugin by Wordpress (https://wordpress.org/plugins/link-manager/)

Ex: See [BookMaster](https://doc4design.com/bookmaster/)

<code><h1><?php wp_list_bookmaster('category=3'); ?></h1>
<div id="links-container">
<ul><?php wp_list_bookmarks('categorize=0&category=7'); ?></ul>
</div></code>


== Changelog ==

= 1.4 =
* Updated code to ensure functionality with WordPress 6.4.3+
* Updated Required Headers for readme.txt
* Updated Required Headers for bookmaster.php

= 1.3 =
* Updated code to ensure functionality with WordPress 6.1.1+
* Additional instructions included for usage

= 1.2 =
* Updated code to ensure functionality with WordPress 5.7.1+
