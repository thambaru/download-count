=== Plugin Name ===
Contributors: thambaru
Tags: posts, downloads, link, count, post list
Requires at least: 2.0
Tested up to: 3.4
Stable tag: 1.0
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Counts downloads by shortcode and shows it on a column of posts list.

== Description ==

This plugin will record clicks of shortcode `[downloadCount]` and shows it on posts list. Comes convenient if you're a setting up
a site to use download pages of products/publications as posts. Multiple shortcodes won't work since it's on the convention of
one product per post.

Things make it nice:

*   Easily add this literally short shortcode [downloadCount] and get your link appeared.
*   Numerous HTML attributes are available so you can customize as you wish.
*   View download count right from the WP post list.
*   No dashboard menu entry (yet) to help you keep the backend clean.
*   Optimized speed with minimal resource usage.
*   It's not just for downloads but any link you prefer to be tracked.

Shortcode attributes:

*   link= Your link to the download. Protocol (http/https) must be mentioned.
*   title= Text to be appeard as the link. Default: "Download".
*   style= For CSS inline styles.
*   class= For CSS classes.

Tip: You can use even icons (or HTML codes) on `title` attribute.

Example shortcode:
`[downloadCount link="http://thambaru.com" title="My website" style="text-decoration:none;" class="btn btn-success"]`

== Installation ==

Here's how to install the plugin and get it working.

e.g.

1. Upload the plugin files to the `/wp-content/plugins/download-count` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the Settings->Plugin Name screen to configure the plugin
4. Ba-Dum-Tss
