# Kirby Knowledge Base

[Kirby](http://getkirby.com/) is a simple file-based cms, made by <https://twitter.com/bastianallgeier>. At <http://www.6wunderkinder.com> we're using it as an internal knowledge-base for any type of documentation (processes, products, API...). It took us a long time to find the best setup for this and because we think most companies are struggling with this, we decided to open-source it.

## Features

* Markdown Formatting
* Syntax Highlighting
* Search

## How to install?

Installing this is super simple!

1. Download and install [Kirby](http://getkirby.com/)
2. Download/clone this repository and copy over the files into the existing Kirby directories created in step 1.
3. Create your own structure in the *content* folder! We've kept our's for the sake of demonstration, just delete what you don't need.

***Tip:*** We highly recommend to use Kirby with Dropbox (<http://getkirby.com/blog/kirby-meets-dropbox> - locally and on your server) and to share the *content* folder with everyone in the team to make editing content extremely simple.

## What we've used to create the knowledge-base

* We've rewritten the treemenu snippet to create a simple and clean menu (<https://github.com/bastianallgeier/kirbycms-extensions/tree/master/snippets/treemenu)
* We've used the breadcrumb snippet (<https://github.com/bastianallgeier/kirbycms-extensions/tree/master/snippets/breadcrumb>)
* We've used the search plugin (<https://github.com/bastianallgeier/kirbycms-extensions/tree/master/plugins/search>)
* We've used the syntax highlighting plugin (link: https://github.com/bastianallgeier/kirbycms-extensions/tree/master/plugins/highlight>)
* We created this simple theme (and got inspired from <https://developers.facebook.com/docs>)

## Follow us

* <http://twitter.com/christianreber>
* <http://twitter.com/rafifyalda>
* <http://twitter.com/6Wunderkinder>

## More about Kirby

If you want to read more about how to format text with Kirby, please read the following links.

* <http://getkirby.com/blog/text-formatting-101>
* <http://getkirby.com/content/02-docs/kirby-cheatsheet.pdf>
* <http://getkirby.com/docs/getting-started>
