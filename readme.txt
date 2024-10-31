=== Pastebin ===
Contributors: ramiy
Tags: pastebin, embed, shortcode, snippets, paste, bin, code
Requires at least: 3.5
Tested up to: 4.9
Stable tag: 1.5
Requires PHP: 5.2.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Embed pastes from pastebin.com into your WordPress site.

== Description ==

Store your text online on [Pastebin.com](http://www.pastebin.com) and embed it to your WordPress site.

= About Pastebin =

[Pastebin](http://www.pastebin.com) is a an online web service where you can store text for a certain period of time. The website is mainly used by programmers to store pieces of sources code or configuration information, but anyone is more than welcome to paste any type of text. The idea behind the site is to make it more convenient for people to share large amounts of text online.

= Pastebin WordPress Plugin =

With the Pastebin WordPress plugin, you can easily embed pastes to your WordPress posts using the paste URL or paste ID.

Choose any item from [pastebin](http://pastebin.com/trends), or create your own! Copy the item URL and paste it to your post text editor. Then simply click over to the visual editor to confirm that it loads properly.

Alternatively, you can embed pastes to your content using the `[pastebin id=""]` shortcode and the paste ID.

= More Information =

For any questions or more information, please [contact us](http://pastebin.com/contact).

== Installation ==

= Installation =
1. In your WordPress Dashboard go to "Plugins" -> "Add Plugin".
2. Search for "Pastebin".
3. Install the plugin by pressing the "Install" button.
4. Activate the plugin by pressing the "Activate" button.

= Minimum Requirements =
* WordPress version 3.5 or greater.
* PHP version 5.2.4 or greater.
* MySQL version 5.0 or greater.

= Recommended Requirements =
* The latest WordPress version.
* PHP version 7.0 or greater.
* MySQL version 5.6 or greater.

== Frequently Asked Questions ==

= How do I embed pastes from Pastebin? =

With this plugin you can use the URL to embed pastes. Just paste the item URL into your post editor:
`http://pastebin.com/hcv2WRnX`

= How do I set custom dimensions to my pastes? =

Since WordPress 4.2, you can double click the embedded item to set max width and max height. It will add the WordPress `[embed]` shortcode:
`[embed width="600" height="400"]http://pastebin.com/hcv2WRnX[/embed]`

**Note:** Doing it the WordPress way, using the `[embed]` shortcode, is backwards and forward compatible, and it works with all the themes.

= How do I embed pastes with auto width & height? =

You can use the Pastebin shortcode to embed pastes that shows full code, full height depending on amount of lines in paste.

`[pastebin id="hcv2WRnX"]`

== Screenshots ==
1. Pasting the URL to the text editor.
2. Pasting the URL to the visual editor.

== Changelog ==

= 1.5 (2016-04-04) =
* Add shortcode.
* Move plugin files to 'includes' directory.

= 1.4 (2015-11-30) =
* Remove po/mo files from the plugin.
* Use [translate.wordpress.org](https://translate.wordpress.org/) to translate the plugin.

= 1.3 (2015-08-08) =
* Update embed handler.
* Update readme file.
* Update translation.

= 1.2 (2015-03-26) =
* Check for SSL (http/https), suggested by James Collins
* Prevent direct access to directories
* Prevent direct access to php file

= 1.1 (2015-03-08) =
* Add i18n support.
* Add Hebrew (he_IL) translation.
* Add screenshots.

= 1.0 (2015-03-06) =
* Initial release.
* Register embed handler.
