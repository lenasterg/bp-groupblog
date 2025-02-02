=== BuddyPress Groupblog ===
Contributors: MariusOoms, reblevins, boonebgorges
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7374704
Tags: buddypress, groups, blogs, content
Requires at least: 3.6
Tested up to: 6.1.1
Stable tag: 1.9.3

BuddyPress Groupblog extends the group functionality by enabling the group to have a single blog associated with it.

== Description ==

Requires BuddyPress 1.7+ and PHP 5.3+.

The BuddyPress Groupblog plugin extends the group functionality by enabling each group to have a single blog associated with it. Group members are automatically added to the blog and will have blog roles as set by the groupblog admin settings.

**Features:**

* P2 integration and frontend posting.
* Admin can set Template specific groupblogs.
* Allow group admins choose the desired template page themselves.
* Full blog theme integration. The included bp-groupblog theme mimics the group pages.
* Automated blog registration at group creation stage.
* Bypass default blog validation to allow dashes, underscores, numeral only and minimum character count.
* Blog privacy settings are initially inherited from group privacy settings.
* Group members are automatically added to the blog.
* Blog roles match group roles as set by the group admin.
* Solid error checking that the blog follows validation.
* Group admin tab to access the group-blog settings.
* Blog themes will have the ability to pull in group info and create a theme that could resemble the group exactly.
* Leaving the group will downgrade the member role to 'subscriber'.
* Allow the group admin to select one of his/her existing blogs.
* A new ajax backend.

== Installation ==

1) unzip the bp-groupblog.zip file into `/wp-contents/plugins/bp-groupblog`

2) move all the themes in `bp-groupblog/themes/` to your WP themes folder

3) activate the plugin

4) run through the admin setup options

5) You are done!

== Screenshots ==

1. Screenshot of the group blog creation stage.
2. Screenshot of the group blog page.

== Changelog ==

= 1.9.3 =
* Test with WordPress 6.1.1, BuddyPress 10.6 and PHP 8.1
* Change arguments order of function groupblog_edit_base_settings()
* Change arguments order of function bp_groupblog_get_user_role()
* Remove some unnecessary globals
* Some coding standards issues


= 1.9.2 =
* Use group avatar on Site Directory for groupblogs, rather than creator user avatar.
* Allow query args for page butons on blog tab to be filtered.

= 1.9.1 =
* Fixed activity stream behavior for comments from non-logged-in comments.
* Fixed redirectblog behavior for hidden groups.
* Improved values passed to filters.
* PHP compatibility fixes.

= 1.9.0 =
* Bumped PHP requirement to 5.3 and BuddyPress requirement to 1.7.
* Added support for comment activity recording.
* Fixed activity pagination on BP groupblog templates.

= 1.8.13 =
* Bumped BuddyPress version requirement to 1.5
* Fix bugs related to groupblog role sync when joining/leaving a group
* Improved compatibility with BP 2.6+

= 1.8.12 =
* Improved accessibility for radio buttons
* Update group last_activity when groupblog post is created

= 1.8.11 =
* Removed duplicate CSS selector in nav item
* Improved compatibility with BuddyPress 2.2.0

= 1.8.9 =
* Allow some simple HTML in groupblog post titles in activity stream
* Add 'new_groupblog_post' type to activity filter dropdown

= 1.8.8 =
* Better wording for activity filter dropdown

= 1.8.7 =
* Prevent fatal error when blogs or activity component is disabled

= 1.8.6 =
* Don't suggest blog domains longer than 63 characters, for better standards compliance

= 1.8.5 =
* Delete groupblog activity item when the groupblog post is deleted
* Improved compatibility with PHP 5.4+

= 1.8.4 =
* Fixes duplicate activity items on some setups
* Allows activity commenting based on global bp-disable-blogforum-comments setting
* Corrects activity link URL for groupblog activity items

= 1.8.3 =
* Improved CSS for theme previews
* Improves performance when setting up group with JS disabled

= 1.8.2 =
* Fixes problems with groupblog redirects
* Ensures that blog roles are repaired when users are banned or removed from a group

= 1.8.1 =
* Security improvements
* Fixes some markup, deprecated function calls, and PHP variable reference bugs
* Fixes a number of bugs related to group member syncing and groupblog URLs on certain setups

= 1.8 =
* Fixes bug with blog autojoin
* l18n improvements
* Fixes switch_to_blog() bug
* Impovements to consistency of menu display

= 1.7.1 =
* Refactors the process that adds members to group blog, to improve performance with large groups
* Fixes bug that caused blog post activity to be posted to the incorrect group on some setups

= 1.7 =
* Allows group admins to specify blog address and title at the time of creation
* Ensures that 'Enable group blog' checkbox is checked when returning from a failed blog creation
* Enables admins to 'uncouple' groups from blogs

= 1.6 =
* Compatibility with BuddyPress 1.5
* Cosmetic changes to the P2 BuddyPress to match the default BuddyPress
* Bug fixes related to blog autojoining

= 1.5 =
* Added support for subdomains, big thanks to Lemmy
* Added the ability to select layout for group admins
* Added check to make sure Layout options are only available to P2 BuddyPress theme
* Generated a new pot file

= 1.4.9 =
* Generated a new pot file

= 1.4.8 =
* Fixed readme
* Fixed template page creation on existent blogs with missing template pages or matching page titles.

= 1.4.7 =
* Fixed Blog tab visibility based on redirect
* Added code to set front page under 'reading' admin setting when template layout is used.
* Changed the descriptions a bit under the settings menu.

= 1.4.6 =
* Fixed users being added properly to the group blog.
* Fixed user rights applied to correct blog. The main blog is no longer affected.
* Fixed hidden and private groups to allow member joining.

= 1.4.5 =
* Overhaul of the admin section
* Inclusion for P2 support
* Variety of new options, including template control
* Made compatible with 3.0 asaik

= 1.4.4 =
* Sorry I neglected this plugin for a while and did not transcribe the changes.

= 1.4.3 =
* Restructed templating. To control the sidebar of your group, you will need to move the bp-groupblog/groupblog folder to buddypress/bp-themes/bp-default/.

= 1.4.2 =
* Changed group template behavior and structure
* Added admin option to redirect to Blog Home within the Group

= 1.4.1 =
* Groupblog were not created for existing groups, now fixed
* Fixing the issue above also solved main blog posts within groups

= 1.4 =
* Made it compatible with WPMU 2.9 / BP 1.2
* Moved the moment when the blog is actually created to the group save step
* Updated the included theme to reflect the new BP Default theme
* Added new admin option, such validation overrides and redirect option

= 1.3.1 =
* Prevented group creator from demoting him/herself to anything lower than administrator.

= 1.3 =
* Reworked all the code regarding adding users to the groupblog
* Users are now immediately added on group join (No more visiting the blog first!)
* Promoting, Demoting, Banning and Unbanning directly adjusts the member permissions
* **Big thanks goes out to Boone for developing much of the needed code!**

= 1.2.4 =
* Added missing registration hook, to ensure default settings are set.

= 1.2.3 =
* Removed unnecessary code, fixing mysql errors.
* Added Blog links menu.
* Changed the local to use 'groupblog' in group template files.

= 1.2.2 =
* Added a function to check BuddyPress is loaded first

= 1.2.1 =
Updated language files

= 1.2 =
* Added admin settings screen. You can now set the default groupblog theme, plus some bonus options.
* Changed some code here and there.
* Including a groupblog theme based on the bp-sn-parent theme. You can use this theme to make wpmu blogs resemble the BuddyPress group and display group related content inside the groupblog theme.

= 1.1.6 =
* Added a message to inform the user that a groupblog is only chosen once.

= 1.1.5 =
* Fixed a bug where the member roles were not being updated upon group creation.

= 1.1.4 =
* Added file_exists to various files, so templates can be overridden in the theme. This also means we had to move the resource folders back into the theme folder.

= 1.1.3 =
* Now using plugin-template.php, so there is no longer a need to move the groupblog folder to the active theme folder. Also updating the plugin through the wordpress plugin interface now works without problems.

= 1.1.2 =
* Updated language files.

= 1.1.1 =
* Improved jquery handeling on check boxes and radio buttons.

= 1.1 =
* If a member leaves the group they will now be downgraded to 'subscriber'.
* Added template tags: groupblog_blog_id($group_id), get_groupblog_blog_id($group_id), groupblog_group_id($blog_id), get_groupblog_group_id($blog_id)
* Group admin now has the option of either creating a new blog or associating one of his blogs with the new group.
* Moved css, images and js folders to the theme folder.
* Added Jquery to give feedback to user input.
* Fixed a bug which would cause the group creator to be demoted to subscriber of his own blog if member blogging.

= 1.0 =
* Initial release.

= The changelog can also be found here: =
http://plugins.trac.wordpress.org/log/bp-groupblog?verbose=on
