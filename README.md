<div id="top"></div>

<div align="center">
  <h3 style="text-align: center; font-size: 40px;"><a href="#" target="_blank" style="color: #555; font-size:54px; font-weight:bold;">Seed</a></h3>
</div>


<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#front-end-build">Front-end build</a></li>
    <li><a href="#wordpress-core-and-plugin-updates">Wordpress Core and Plugin updates</a></li>
    <li><a href="#folder-structure">Folder Structure</a></li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>


<!-- ABOUT THE PROJECT -->
## About The Project
Wordpress starter theme with Timber.

### Built With
* [Lando](https://docs.lando.dev/basics/installation.html)
* [Docker](https://www.docker.com/)
* [Wordpress](https://wordpress.org/)
* [Timber](https://timber.github.io/docs/)
* [Vanilla Javascript](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
* [SCSS](https://sass-lang.com/)
* [Gulp](https://gulpjs.com/)
<br><br>

<!-- GETTING STARTED -->
## Getting Started
### Prerequisites

1. Lando
* Install Lando
2. Docker
* Install Docker - I recommend you to install or update Docker via Lando. It will help you to install the compatible version of the Docker with Lando.
3. Composer (version 2)

4. Node
* Install [NVM](https://github.com/nvm-sh/nvm)(Node Version Manager) if you don't have one in your local.<br>
* Install node `v17.1.0` which is compatible version of this repository.<br><br>
  ```sh
  nvm install v17.1.0
  nvm use v17.1.0
  ```
<p align="right">(<a href="#top">back to top</a>)</p>

### Installation
1. Clone the repo in your local folder.

  ```sh
  git clone git@github.com:seed.git
  ```
2. Run Lando command in your project's root folder to start your local server

  ```sh
  lando start
  ```
3. Run Composer in your project's root to load Wordpress core, and plugins
  ```sh 
  composer install
  ```
4. Update wp-config if necessary.<br>
* You can copy and paste `wp-config-lando.php` into `wp-config.php`

5. Import Database<br>
* If you need to import database from the server, follow below direction.

```sh
#import sql data
lando db-import ./database.sql

#replace your url to make it run in your local
lando wp search-replace 'seed.wpengine.com' 'seed.lndo.site' 

#rebuild lando if necessary
lando rebuild 
```
6. Install NPM packages to set up the front end build environment.
```sh
# run command in './public/wp-content/themes/seed' folder
npm install
```
7. Don't forget to activate your theme and plugins, especially Timber and ACF.
<p align="right">(<a href="#top">back to top</a>)</p>


<!-- USAGE EXAMPLES -->
## Front-end Build

1. Local server<br>
* Local server will be run at `https://seed.lndo.site`
2. To build production files<br> 
* Run `npm run prod` in your `./public/wp-content/themes/seed`.
```sh
  npm run prod
```
3. To run dev mode<br> 
* Run `npm run dev` in your `./public/wp-content/themes/seed`.
* When you run `npm run dev`, browserSync will load your site at `https://localhost:3000/`
```sh
  npm run dev
```
4. [StyleLint](https://stylelint.io/)
* Run `npm run stylelint` in your `./public/wp-content/themes/seed`
```sh
  npm run stylelint
```
5. [ESLint](https://eslint.org/)
* Run `npm run eslint` in your `./public/wp-content/themes/seed`
```sh
  npm run eslint
```  
5. [Prettier](https://prettier.io/)
* Run below commands in your `./public/wp-content/themes/seed`, it will format files in build folder.
* Recommend to use  `npm run prettier-check` before use `npm run prettier-write` to avoid unnecessary file changes.
```sh
  # run prettier-check to check if your files need to be formatted
  npm run prettier-check
  
  # run prettier-write to format your files and then save them automatically
  npm run prettier-write
  
  # single file check
  npx prettier --check build/scripts/components/header.js
  
  # single file write
  npx prettier --write build/scripts/components/header.js
```  
<p align="right">(<a href="#top">back to top</a>)</p>


<!-- Updates -->
## Wordpress Core and Plugin updates
1. To update WP core and plugin, update the version number in `./composer.json` and run `composer update` to update `./composer.lock` file. 

<p align="right">(<a href="#top">back to top</a>)</p>

<!-- FOLDER STRUCTURE -->
## Folder Structure
```sh
.
├── README.md
├── composer.json # composer to load WP core and plugins
├── composer.lock
├── .gitignore 
├── .lando.yml # lando config 
├── public
│   ├── wp-config-lando.php
│   ├── wp-content
│   │   ├── themes
│   │   │   ├── seed
│   │   │   │   ├── .editorconfig #editor config 
│   │   │   │   ├── .eslintignore 
│   │   │   │   ├── .eslintrc.json #eslint config
│   │   │   │   ├── .prettierignore
│   │   │   │   ├── .prettierrc.json #prettier config
│   │   │   │   ├── .stylelintrc.json #stylelint config
│   │   │   │   ├── 404.php
│   │   │   │   ├── acf-json
│   │   │   │   ├── app
│   │   │   │   ├── archive.php
│   │   │   │   ├── babel.config.json #babel config
│   │   │   │   ├── build
│   │   │   │   │   ├── scripts # JS files
│   │   │   │   │   └── styles # SCSS files
│   │   │   │   ├── dist
│   │   │   │   │   ├── assets
│   │   │   │   │   │   ├── fav
│   │   │   │   │   │   ├── font
│   │   │   │   │   │   ├── icon
│   │   │   │   │   │   ├── img
│   │   │   │   │   ├── scripts # compiled scripts goes here
│   │   │   │   │   └── styles # compiled styles goes here
│   │   │   │   ├── functions.php # see inc folder
│   │   │   │   ├── gulp # gulp task files
│   │   │   │   ├── gulpfile.js # gulp entry point
│   │   │   │   ├── humans.txt
│   │   │   │   ├── inc
│   │   │   │   ├── index.php
│   │   │   │   ├── package-lock.json
│   │   │   │   ├── package.json
│   │   │   │   ├── page.php
│   │   │   │   ├── screenshot.png # replace screenshot image with yours
│   │   │   │   ├── search.php
│   │   │   │   ├── sidebar.php
│   │   │   │   ├── single.php
│   │   │   │   ├── style.css
│   │   │   │   ├── templates # php page template
│   │   │   │   └── views # twig files for pages and components
│   │   │   ├── index.php
```
<p align="right">(<a href="#top">back to top</a>)</p>


<!-- CONTACT -->
## Contact


<p align="right">(<a href="#top">back to top</a>)</p>

