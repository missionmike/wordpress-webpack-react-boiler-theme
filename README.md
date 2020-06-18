# WordPress-Webpack-React-Boiler
WordPress theme utilizing Webpack development workflows and React support.

## WordPress Installation
*Important:* this theme is not production-ready. It is a bare-bones WordPress theme boilerplate for development. Consider it a jump-start to save time with Webpack configuration.

1. Clone or download repo
1. Rename folder 'WordPress-Webpack-React-Boiler' to a theme name of your choice
1. Rename theme in style.css
1. Activate theme via wp-admin for development

## Development Preparation

1. ssh and cd to theme folder
1. Run ```npm install```
1. **Optional:** change function prefix ```'wpwpbp'``` in .php files to follow your own desired naming convention

## Start Coding!

1. ssh and cd to theme folder
1. Run ```npm run watch --domain='https://your.staging.domain.com/'```
1. If all goes well, you should see 'Access URLs' available for Local and External. Visit these addresses to view the site. From here, editing any theme files (including .php) should prompt Webpack to refresh. See [browsersync options](https://www.browsersync.io/docs/options) for reference.
