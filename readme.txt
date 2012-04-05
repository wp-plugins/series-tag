=== Series Tag ===
Contributors: RyanNutt
Donate link: http://www.nutt.net/donate/
Tags: tag, tags, links, related, series
Requires at least: 2.5
Tested up to: 3.3.1
Stable tag: 0.1

Adds a shortcode so you can easily create a list of all posts with a specific tag. 
Written to make it easy to link between a series of posts.

== Description ==
Adds a shortcode, series-tag, that you can use to create a list of all posts 
that are tagged with whatever tag you pass in. 

Series Tag was written to allow you to tag a series of posts with the same tag, 
and then easily link between them without having to manually create links at the 
bottom of each post. 

Links are created in date published order starting at the earliest date. All post 
titles are links to the permalink of the post except for the current post which
just has its title displayed. 

For help or more info, visit [Nutt.net](http://www.nutt.net/tag/series-tag/)

== Installation ==

1. Upload the `series-tag` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Insert the short code [series-tag tag=tag-slug] into your post where you want the list to appear.

= Usage &amp; Options =
There are 3 arguments that you can pass to the shortcode.

* tag - *Required* - Which tag you want to build the list from. Be sure to use the tag slug.
* max - *Optional* - Max number of posts to pull. Defaults to 0 so that all posts with that tag are pulled.
* divider - *Optional* - The HTML tag to separate the posts. Defaults to ol, but ul and p also work well. Any tag should work though, as whatever you put in this argument will open before the link and close after it.

= CSS, Styling, and Customization =
Two CSS classes are used on the tag that wraps the link.

`st_current` is the current page in the list of pages. 

`st_other` is all of the other pages. There is an anchor tag inside this wrapper
that can also be styled if needed.

The plugin itself does not load any CSS files so if you want to use these CSS
classes you'll need to add them to your main CSS file. It just didn't make sense
to load an entirely new stylesheet just for two classes that you may not even
want to use. 

== Frequently Asked Questions ==

Nothing yet. For help you can visit [Nutt.net](http://www.nutt.net/tag/series-tag/).

== Screenshots ==

1. A list of posts that share the same tag at the bottom of a post. 

== Changelog ==

= 0.1 =
* First release

== Upgrade Notice ==

= 0.1 = 
* First release, nothing to upgrade

