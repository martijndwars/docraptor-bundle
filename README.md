BytesDocraptorBundle
====================
Symfony2 bundle for using the Docraptor API.

 * Installation
 * Configuration
 * Usage

Installation
============
If you are using Composer and Symfony >= 2.1.*, add the following to `composer.json` file:

```javascript
{
    "require": {
        "bytes/docraptor-bundle": "*"
    }
}```

Finally, register the bundle with your kernel in `app/appKernel.php`:

```php
public function registerBundles()
{
    $bundles = array(
        // ...
        new Bytes\DocraptorBundle\BytesDocraptorBundle(),
        // ...
    );

    // ...
}```

Configuration
=============
Not yet written..

Usage
=====
Not yet written..