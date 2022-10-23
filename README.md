<p align="center">
  <img alt="Theme for the WordPress / Medusa / Gatsby Frontend" src="https://user-images.githubusercontent.com/38568655/197411385-a3597261-1db5-4cd0-8bcd-d973c9d75772.png" />
</p>
<h1 align="center">
  Theme for the WordPress / Medusa / Gatsby Frontend
</h1>
<p align="center">
  This theme is built to provide an interface for the CMS portion of the application.
</p>
<p align="center">
  <a href="https://github.com/WordPress/WordPress/blob/master/license.txt">
    <img src="https://img.shields.io/badge/license-GPL-blue.svg" alt="WordPress is released under the GNU General Public License." />
  </a>
  <a href="https://twitter.com/intent/follow?screen_name=websupergirl">
    <img src="https://img.shields.io/twitter/follow/websupergirl.svg?label=Follow%20@websupergirl" alt="Follow @websupergirl" />
  </a>
  <a href="https://twitter.com/intent/follow?screen_name=wordpress">
    <img src="https://img.shields.io/twitter/follow/wordpress.svg?label=Follow%20@wordpress" alt="Follow @wordpress" />
  </a>
  <a href="https://twitter.com/intent/follow?screen_name=gatsbyjs">
    <img src="https://img.shields.io/twitter/follow/gatsbyjs.svg?label=Follow%20@gatsbyjs" alt="Follow @gatsbyjs" />
  </a>
</p>

> **Prerequisites**: You will need to create a WordPress installation with the [WPGraphQL](https://wordpress.org/plugins/wp-graphql/) plugin, the [WPGatsby](https://wordpress.org/plugins/wp-gatsby/) plugin, and this theme. I would also suggest to update the permalinks to "post name".

### Installation

Download a zip of this repo and upload it via SFTP or via the wp-admin by going to Appearance > Themes > Add New.

See the [WordPress / Medusa / Gatsby Frontend repo](https://github.com/websupergirl/hacktoberfest2022-frontend) to continue installation after you have set up WordPress and put some blog posts into it.

### Demo

This project is live at [https://wp2022.thathacktober.com](https://wp2022.thathacktober.com/)

### Screenshots

<figure>
<figcaption><b>MedusaJS Admin Login</b></figcaption>
<img src="https://user-images.githubusercontent.com/38568655/197392768-b8e570dc-b24c-4d48-b0d2-9747e7b2fd48.png" alt="MedusaJS Admin Login" />
</figure>


<figure>
<figcaption><b>Configure your admin + frontend URLs in the MedusaJS Store Settings</b></figcaption>
<img src="https://user-images.githubusercontent.com/38568655/197416215-41a8e030-ca6f-4874-9cbd-c4081802ecb4.png" alt="MedusaJS Store Settings" />
</figure>

### Credits

* [Gatsby](https://www.gatsbyjs.com)
* [Medusa](https://www.medusa-commerce.com)
* [WordPress](https://wordpress.org)
* [That Super Girl](https://supernikole.com)

---

---

### Development Update log
(for my mental sanity)

> add permalink suggestion
>
> add error checking, sanitize callbacks, and new settings screenshot
>
> update readme with more screenshots and information
>
> add screenshot and login
>
> add index page which dumps rest api data when you access posts, pages, categories, and tags while logged in (helpful for troubleshooting)
>
> add functions.php (style enqueue and menu), style.css (theme info), index.php (rest/redirect)
>
> modified readme to add better instructions