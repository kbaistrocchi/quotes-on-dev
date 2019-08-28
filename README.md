# Quotes on Dev

Quotes on Dev is a responsive but simply styled WordPress site. It uses the WP REST API to display random quotes on the home page. It uses the same API to accept new quotes from the user and add them as pending posts.

## Technologies Used
The theme is built in php and uses jQuery's AJAX method to GET posts and display them on the home page when a button is clicked. The AJAX POST method is also used upon form submission in order to create new posts.

Most of the theme files were supplied at https://github.com/redacademy/quotesondev-starter

All content was supplied in an .xml from Red Academy.

Gulp was used to automate tasks and Query Monitor Plugin was used to help debug WP issues.

I used MAMP as a local server for the WordPress Site.

## Installation

1. Download folders into the wp-content/themes folder of a new WP installation.
2. Within WP site, navigate to Appearance > Themes and activate the Quote on Dev Theme.
3. Install **WordPress Importer** Plugin. Then, in Tools > Import, use the plugin to import the xml file.

### Personal Learnings and Notes to Self

I found it somewhat challenging to work with code that was already laid out, in particularly, the SASS/CSS. I found there was a lot of unnecessary code. When I came across code that seemed useless, I deleted it.

For this project, I tried to have all pages functioning before I dove into the styling, as opposed to my last project where I styled as I built the pages. I feel like my style code was much more efficient for Quotes on Dev than it was in my previous project.

### Future Developments

- Build a custom API endpoint.
