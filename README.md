# Detect Incompatible SameSite Useragents

This class tries to determine the incompatible UserAgents for SameSite=None Attribute.


<a href="https://github.com/skorp/laravel-samesite-incompatible-clients/blob/master/LICENSE"><img src="https://img.shields.io/github/license/skorp/detect-incompatible-samesite-useragents"></a> 
![Laravel](https://github.com/skorp/detect-incompatible-samesite-useragents/workflows/tests/badge.svg)

## Installation 

You can install this package via composer using this command:

```bash
composer require "skorp/detect-incompatible-samesite-useragents"
```

## Usage
```php
use Skorp\Dissua\SameSite;

$shouldSendSameSiteNone = SameSite::handle('Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130');
if(!$shouldSendSameSiteNone) {
    //remove samesite attribute

}
```
ported from : https://www.chromium.org/updates/same-site/incompatible-clients

#### Links about SameSite Cookie:
https://www.chromium.org/updates/same-site/incompatible-clients<br>
https://web.dev/samesite-cookie-recipes/<br>
https://www.netsparker.com/blog/web-security/same-site-cookie-attribute-prevent-cross-site-request-forgery<br>
https://www.thinktecture.com/identity/samesite/prepare-your-identityserver/

Your feedback is welcome.