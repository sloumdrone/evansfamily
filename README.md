# Stanwood - The Dashing FormulaFolios WP Base Theme

## Installation
To set up a new local multisite installation of WordPress, please follow the instructions posted in the [department wiki](https://wiki.formulafolios.com/view/WordPress_Multisite).

To build a new theme using the FormulaFolios Base site, to an existing multisite install that followed the set up instructions on the [department wiki](https://wiki.formulafolios.com/view/WordPress_Multisite), please use the following steps:

### Add base site data
      cd ~/ff-wp-core
      wp site create --slug=new-theme-slug --title="New Theme Name"
      cd ~/ff-sites
      git clone https://github.com/formulafolios/stanwood.git new-theme-name
      cd ~/ff-wp-core/wp-content/themes
      ln -s ~/ff-sites/new-theme-name new-theme-name
      cd ~/ff-wp-core

### Activate Plugins
The base install should have set you up with all of the plugins you need for this theme. So you will just activate them for RWA.

      wp plugin activate --url=localhost/new-theme-slug advanced-custom-fields-pro gravityforms gravity-forms-custom-post-types infusionsoft wordpress-importer wordpress-seo


### Enable and Activate Theme
      wp theme enable new-theme-name --network
      wp theme activate new-theme-name --url=localhost/new-theme-slug

### Enable pretty permalinks
      wp rewrite structure '/%postname%/' --url=localhost/new-theme-slug

### Installing Dependencies
- `$ cd ~/ff-sites/new-theme-name`
- `$ npm install --global gulp-cli` to install gulp then
- `$ npm install` to install everything else

### Running
- Be sure to update the theme name in style.css
- `$ gulp styles` to process the css 
- `$ gulp scripts` to process the scripts
- `$ gulp watch` to watch js and sass changes and reload them in the browser

For more information check the [wiki](https://github.com/formulafolios/ff-wordpress-base-theme/wiki)

