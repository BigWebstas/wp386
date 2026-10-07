wp386
=====

![Screenshot](screenshot.png?raw=true)

A [live demo](http://themes.kkob.us/wp386/) is available.

wp386 is a WordPress theme based on the Bootstrap theme [BOOTSTRA.386](https://github.com/kristopolous/BOOTSTRA.386).

How to Install
==============

wp386 uses [Bootstrap 5](https://getbootstrap.com/) and Sass. `style.css` is not committed, so you must generate it (requires Node.js):

```
$ npm install
$ npm run build
```

Use `npm run watch` to rebuild on changes.

Version History
===============

## Version 1.2.1

* Fix: navbar was not pinned to the top, so the sidebar could cover it

## Version 1.2

* Updated for current WordPress: title-tag, HTML5 and block-editor support, `wp_body_open()`
* PHP 8 compatible nav walker; sanitized and translatable customizer option
* Fix: mismatched comments heading tags; HTTPS links
* Bootstrap 2.3.1 replaced by Bootstrap 5.3 (installed via npm); the retro look is rebuilt on top of it
* Build: Dart Sass via `npm run build` instead of Compass; dropdown menus no longer need jQuery
* Fix: unbalanced layout markup when the sidebar is empty

## Version 1.1

* "Black on White" theme (in the theme customizer)
* Japanese and German localizations
* Bugfix: Will not show the sidebar when no widgets are enabled

## Version 1.0

* Initial release

Legal
=====

wp386 is distributed under the [GNU GPL 3.0](http://www.gnu.org/licenses/gpl-3.0.html) license.

Copyright (C) 2013 Keitaroh Kobayashi

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

wp386 packages a font "[Fixedsys](http://www.moviecorner.de/en/font-fixedsys-ttf/fixedsys-download.html)" which is distributed under the GNU GPL 2.0 license.
