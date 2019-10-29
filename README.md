# ACF - Bootstrap Carousel: WordPress Plugin

<span style="color:red">Important!</span>
**This is work in progress. It is not meant for production yet.**

A plugin that uses [Advanced Custom Fields](https://www.advancedcustomfields.com) to add a bootstrap carousel on any pages of your website.

The carousel can be added as a hero section or as a Gutenberg Block.

## Before you install ACF - Bootstrap Carousel

This plugin to work you need to first enqueue the bootstrap css and js files and the Advanced Custom Fields PRO plugin.

### Bootstrap

To enqueue the bootstrap files add the following snippet to your *functions.php* file. If you know what you are doing you can add the files to your theme directory and enqueue them from there (better performance):

```php
<?php 
/**
 * Enqueue bootstrap scripts and styles
 */
function your_theme_enqueue_bootstrap_scripts() {
    // all styles
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
    // all scripts
    wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array( 'jquery' ),'',true );
}
add_action( 'wp_enqueue_scripts', 'your_theme_enqueue_bootstrap_scripts' );
```

In a future version of the plugin I will be adding the option to enqueue bootstrap from the plugin settings.

### Advanced Custom Fields

You will need the [PRO plugin](https://www.advancedcustomfields.com/pro/) as ACF - Bootstrap Carousel uses the repeater field.

You can find instructions on how to install the plugin [here](https://www.advancedcustomfields.com/resources/installation/).


## Installation

Unless you know what you are doing do not install this plugin yet as it is not ready.

If you know what you are doing you can import the acf-bc.json file to ACF tools > import. This will add the repeater field 'Repeater Carousel'.

You can also copy the code from the *acf-bc.php* file and add it to your *functions.php* for better performance.

## How it works

Once the plugin is installed it will add an ACF group field called Repeater Carousel. The field is not visible in the ACF option as it is added as a php file. If you want it to show in the ACF options you can import the json file that I have included in the plugin folder.

You can change the options to render the repeater field in any locations of your website.

The includes folder includes two files for now:

1. Bootstrap Carousel Block Template.
2. Bootstrap Carousel - Hero section


This readme file is going to be updated as changes take place.
