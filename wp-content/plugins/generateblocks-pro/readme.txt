=== GenerateBlocks Pro ===
Contributors: edge22
Donate link: https://generateblocks.com
Tags: blocks, gutenberg, container, headline, grid, columns, page builder, wysiwyg, block editor
Requires at least: 5.9
Tested up to: 6.2
Requires PHP: 7.2
Stable tag: 1.5.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Take GenerateBlocks to the next level.

== Description ==

GenerateBlocks Pro adds more great features to GenerateBlocks without sacrificing usability or performance.

= Documentation =

Check out our [documentation](https://docs.generateblocks.com) for more information on the individual blocks and how to use them.

== Installation ==

To learn how to install GenerateBlocks Pro, check out our documentation [here](https://docs.generateblocks.com/article/installing-generateblocks-pro).

== Changelog ==

= 1.6.0 =
* Feature: Add FAQ schema option to accordions
* Fix: Block label should not be synced with styles changes (GB 1.8.0)
* Fix: Dynamic accordion button undefined index
* Fix: Dynamic tab button undefined index
* Fix: PHP Warning: Undefined array key "type"
* Fix: Fix: Container Link display setting
* Tweak: Require at least PHP 7.2
* Tweak: Add current Container border color support (GB 1.8.0)
* Tweak: Add Global Style block version to attributes
* Tweak: Don't show incompatible Global Styles in dropdown
* Languages: Add es_ES translation
* Languages: Add cs_CZ translation
* Languages: Add fi translation

= 1.5.2 =
* Tweak: Improve tab templates on mobile
* Fix: Missing global style sizing attributes in editor
* Fix: Dynamic tab/accordion buttons

= 1.5.1 =
* Fix: Filter editor.blockEdit breaking blocks
* Fix: Tab buttons breaking when non-button siblings exist

= 1.5.0 =
* Feature: New Tabs block variation
* Feature: New Accordion block variation
* Feature: Integrate Effects with new inner container (GB 1.7)
* Feature: Integrate with position and overflow options (GB 1.7)
* Feature: Require certain versions in Pattern Library
* Tweak: Update pattern library icon
* Tweak: Add Effects panel using BlockEdit filter
* Tweak: Add Global Styles using BlockEdit filter
* Tweak: Improve Effects/Advanced BGs UI
* Tweak: Update generateblocks-pro.pot
* Tweak: Move Pattern Library to end of block list
* Tweak: Add pointer-events: none to pseudo backgrounds
* Fix: Dynamic image backwards compatibility with ACF integration
* Fix: Editor styles not loading in tablet/mobile previews in Firefox
* Fix: Check the useEffect attributes when showing global styles
* Fix: Check objects in Global Styles
* Fix: Pattern Library loading icon position
* Fix: Syntax when using multiple transition on one element

= 1.4.0 =
* Feature: Integrate ACF with dynamic content options
* Feature: Support ACF basic fields
* Feature: Support ACF content fields
* Feature: Support ACF choice (single value) fields
* Feature: Support ACF relational (single value) fields
* Feature: Support ACF jQuery fields
* Fix: Query loop not working in widget area
* Fix: Exclude current sticky post not working
* Fix: Removal of isQueryLoop item attribute in global styles
* Fix: Add missing device visibility to Image block
* Fix: Popover component overflow in WP 6.1
* Tweak: Change normal selectControl to SimpleSelect
* Tweak: Make link source use same meta components
* Tweak: Fix pattern library labels in settings area
* Tweak: Remove drafted local patterns from library
* Tweak: Improve Color picker input field state

= 1.3.0 =
* Feature: Add necessary features to build related posts
* Feature: Display query loop posts related to the current post terms
* Feature: Display query loop posts that are children of current post
* Feature: Display query loop posts that belong to current post author
* Feature: Remove current post from query loop
* Feature: Add random option to query loop order by parameter
* Tweak: Use proper block assets when enqueuing scripts
* Fix: Add custom attributes to dynamic button/headline blocks

= 1.2.0 =

* Important: This update adds compatibility with GB 1.5.0
* New: Apply paste styles feature to multiple selected blocks at once
* New: Global Style labels
* New: Add clear local styles button to global styles
* New: Add clear styles to Styles toolbar item
* Fix: PHP notices when not using old opacity slider in box/text shadows
* Tweak: Change Template Library name to Pattern Library
* Tweak: Add Effects to GB Image Block (GB 1.5.0)
* Tweak: Add Global Styles to GB Image Block
* Tweak: Add Custom Attributes to GB Image Block
* Tweak: Add Custom Attributes to Grid block
* Tweak: Add Custom Attributes to Button Container block
* Tweak: Reduce container link z-index
* Tweak: Close effects panel and toggle off when all deleted
* Tweak: Add support for new color component
* Tweak: Remove old colorOpacity from Effects
* Tweak: Add Container link support for dynamic links (GB 1.5.0)

= 1.1.2 =

* Fix: Color picker UI in WP 5.9
* Fix: Undefined gradient color opacities

= 1.1.1 =
* Fix: Advanced background fallback inner z-index missing

= 1.1.0 =
* New: Add options to disable local/remote templates
* New: Allow support download, role, itemtype, itemprop and itemscope custom attributes
* Tweak: Stop auto-adding inner z-index to containers with pseudo gradients
* Tweak: Check for any kind of SVG support in Asset Library instead of Safe SVG
* Tweak: Add global style class to the grid wrapper
* Tweak: Use rgba colors for advanced gradients
* Tweak: Make Local Template editing for admins only
* Tweak: Make Global Style editing for admins only
* Tweak: Replace delete (X) icon with trash icon
* Tweak: Apply device visibility to grid item
* Tweak: Fix headline color when using container hover
* Tweak: Don't add custom attribute if no property is added
* Tweak: Disable attribute value field if no value needed
* Tweak: Add lock with confirm dialog to Global Style IDs
* Fix: Responsive border-radius when using pseudo background
* Fix: Effect selector preview when using different devices
* Fix: undefined index when custom attribute has no value
* Fix: Keep current IDs for imported library items
* Fix: Prevent special characters in Global Style IDs

= 1.0.4 =
* Tweak: Remove wp-editor dependency from new widget editor

= 1.0.3 =
* New: Translation support
* Fix: Hidden Container link preventing toolbar access
* Fix: Asset Library error when empty group is saved
* Fix: Asset Library IDs changing when re-saved before refresh
* Tweak: Clear horizontal grid default when choosing global style
* Tweak: Adjust icon button spacing in WP 5.7

= 1.0.2 =
* Fix: Improve how global styles handle block defaults
* Fix: Allow advanced backgrounds in global styles
* Fix: Allow effects in global styles
* Fix: Prevent PHP notices in local templates

= 1.0.1 =
* Fix: Global style attributes not saving correctly
* Fix: Global styles not overwriting default container padding

= 1.0.0 =
* Initial release
