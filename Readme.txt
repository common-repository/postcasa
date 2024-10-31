=== Postcasa Shortcode ===
Contributors: miloandrew
Donate link: http://blog.miloco.com/postcasa/donate
Tags: Picasa, slideshow, shortcode, embed slideshow 
Requires at least: 2.5.1
Tested up to: 2.7
Stable tag: 1.0

A simple [Shortcode] to add flash based Picasa slideshows directly inline in your posts. [postcasa]http://MyAlbumRSSurl[/postcasa]

== Description ==

There are a lot of great plugins for using Picasa based photos on your blog. So, why write another one?

Most don't allow you to actually add a simple, inline slideshow - rather, they add all the images to the post and have whizbang slimbox integration, etc.

This humble plugin does nothing of the sort.  All it does is add the standard Picasa EMBED slideshow, without needing any of the fancy code. It is designed for simple, but flexible use.

All you need to do is use the [postcasa] shortcode around the RSS feed URL for your Picasa album, and the plugin does the rest.

*Example:* [postcasa]http://picasaweb.google.com/data/feed/base/user/miloandrew/albumid/5273127970894080577?alt=rss&kind=photo&authkey=VWY2bThuIvM&hl=en_US[/postcasa]

It supports all of the standard Picasa embed options.

== Installation ==

1. Unzip and copy the `postcasa` folder to your wordpress `/wp-content/plugins/` directory.
2. Using the Wordpress Administration Plugin panel, activate the Postcasa Shortcode plugin.
3. You can now use the shortcode in your posts, e.g. [postcasa]http://picasaweb.google.com/data/feed/base/user/miloandrew/albumid/5273127970894080577?alt=rss&kind=photo&authkey=VWY2bThuIvM&hl=en_US[/postcasa]

###Usage###

**In a nutshell:** Defaults are in **BOLD** and do not need to be specified

[postcasa width= height= size=(small,**medium**,large,xl,xll) bgcolor=(hexvalue,**000000**) align=(**left**,center,right) showcaptions=(yes,**no**)] RSS Link [/postcasa]

**Example:**

[postcasa]http://picasaweb.google.com/data/feed/base/user/miloandrew/albumid/5273127970894080577?alt=rss&kind=photo&authkey=VWY2bThuIvM&hl=en_US[/postcasa]

**Tutorial:**

 1. Copy the RSS link for your Picasa album directly from the Picasa website *(Screenshot 1)*
 2. Edit your post.
 3. Open the shortcode by typing: [postcasa] *(Screenshot 2)*
 4. Paste your Picasa RSS URL *(Screenshot 3)*
 5. Finish out the tag by typing: [/postcasa] *(Screenshot 4)*
 6. Publish your post.
 7. View the post to see the results. *(Screenshot 5)*

**Shortcode Options**

The plugin supports a number of optional settings, which are listed below:

####*size*####

The Plugin has a number of preset sizes that correspond to the Picasa presets.

*Settings:*

  - small (144x96 pixels)
  - medium (288x192 pixels) (This is the default if no size/height/width is used)
  - large (400x267 pixels)
  - xl (600x400 pixels)
  - xxl (800x533 pixels)

*Usage Example:* 

- [postcasa size=large]http://MyRSSurl[/postcasa]

Any value in the size parameter overrides explicit height and width settings.

####*width and height*####

You can directly specify both width and height parameters if you prefer.  Values in these parameters are ignored if you have specified a size preset with the *size* parameter listed above.

*Usage Example:*

  - [postcasa width=200 height=100]http://MyRSSurl[/postcasa]
  - [postcasa width=200]http://MyRSSurl[/postcasa]
  - [postcasa height=100]http://MyRSSurl[/postcasa]

####*align*####

You can explicitly specify an alignment of where you want the slideshow to be placed. If you do not specify an alignment, it will default to align=left.

*Settings:*

  - left (This is the default.)
  - right
  - center

*Usage Example:*

  - [postcasa align=center]http://MyRSSurl[/postcasa]

####*bgcolor*####

You can explicitly specify a hex background color for the slideshow player.  Usually this is seen when you have portrait oriented pictures.  If you do not specify a bacground color, it will default to black.

*Settings:*

  - any hex value, e.g. 000000, ffffff, f0b1c2, etc.

*Usage Example:*

  - [postcasa bgcolor=ffffff]http://MyRSSurl[/postcasa]

####*showcaptions*####

This option overlays each picture's caption on top of the slideshow.  By default, captions are off.  You only need to specify this parameter to turn it on.

*Settings:*

  - yes

*Usage Example:*

  - [postcasa showcaptions=yes]http://MyRSSurl[/postcasa]

== Frequently Asked Questions ==

= Does the plugin support any options? =

Yup.  You can find them listed in the Installation section above.

= Can't you just use an embed code directly?  It's almost as easy! =

Sure can, but lots of folks forget to swith to HTML mode first or the WYSIWYG editor messes up the code after the fact, etc.  Postcasa allows for adding the shortcode directly to the WYSIWYG editor with no problems.  Its a simple plugin designed for easy access, nothing more.

= Does the plugin allow CSS styling for the slideshow? =

Yes, to a degree.  The [postcasa] tag options govern the actual flash slideshow, but you can style the surrounding HTML paragraph tags by using the included 'postcasa' class.

Example:

    p.postcasa {
    margin: 10px;
    padding: 10px;
    border: 1px #000000 solid;
    }

== Screenshots ==

1. Copy the Link location by right clicking on the RSS logo. Right click and select Copy Shortcut if you use Internet Explorer
2. Open the shortcode by typing [postcasa]
3. Paste the RSS URL that you copied in step 1.
4. Close the shortcode by typing [/postcasa]
5. The default results... Easy!

== Other Notes... ==

If you need help with this plugin, browse over to the plugin home page (http://blog.miloco.com/postcasa) and leave a comment there.  I'll do my best to answer any questions that you have.

If you like the plugin, consider dropping a buck or two at the above URL to say thanks and help with future versions.

Thanks very much to planetOzh for the excellent shortcode tutorial (http://planetozh.com/blog/2008/03/wordpress-25-shortcodes-api-overview/). Without that article, my plugin would have taken a lot longer to make.
