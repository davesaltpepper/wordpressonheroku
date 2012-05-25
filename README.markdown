# Wordpress on Heroku

Wordpress on Heroku--you know, when you want to run Wordpress on Heroku.

## List of improvements

* **SMTP over Sendmail** - Make sure to install the SendGrid addon.
* **MySQL** - Make sure to install the ClearDB addon.
* **SSL everywhere** - Added FORCE_SSL_LOGIN and FORCE_SSL_ADMIM.
* **Uses NGINX** - Depends on a custom Nginx build, see my [heroku-buildpack-wordpress](http://github.com/mchung/heroku-buildpack-wordpress)
* **PHP-FPM** - Manages PHP processes with PHP-FPM. No more mucking around with PHP_FCGI_CHILDREN and PHP_FCGI_MAX_REQUESTS.  You can view a status page at `/status.html`.

## Can I use this or what?

Yes. But there are a few constraints

## Okay, hit me with them.

Anything to do with the [ephemeral filesystem](http://devcenter.heroku.com/articles/dyno-isolation)

* You cannot upload files. WORKAROUND: Upload to S3 and embed content.
* You cannot update themes or plugins. WORKAROUND: Commit and deploy changes via git.

## TODO

* Handle image uploads to S3 instead (plugin or custom code). If you know of a Wordpress S3 plugin that actually works, I'd be happy to add it in.
* Automatically update this repo to latest stable Wordpress.

## I thought Heroku was only for Ruby applications?

Not anymore. Heroku's latest offerings (See [Celadon Cedar stack](http://devcenter.heroku.com/articles/cedar)) makes it easy (well, easyish) for developers to install and run any language, or actually any service.

