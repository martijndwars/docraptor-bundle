# BytesDocraptorBundle

Symfony2 bundle for using the Docraptor API.

## Installation

If you are using Composer and Symfony >= 2.1.*, add the following to `composer.json` file:

```javascript
{
    "require": {
        "bytes/docraptor-bundle": "0.0.*",
        "bytes/docraptor": "@dev"
    }
}
```

Finally, register the bundle with your kernel in `app/appKernel.php`:

```php
public function registerBundles()
{
    $bundles = array(
        // ...
        new Bytes\Bundle\DocraptorBundle\BytesDocraptorBundle(),
        // ...
    );

    // ...
}
```

## Configuration

Not yet written..

## Usage

Not yet written..