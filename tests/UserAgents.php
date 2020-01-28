<?php
namespace Skorp\Dissua\Tests;

trait UserAgents {

    static $chromeValidUserAgent = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130";
    static $chromeInvalidUserAgent1 = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.3945.130";
    static $chromeInvalidUserAgent2 = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3945.130";
    static $iosInvalidUserAgent = "Mozilla/5.0 (iPhone; CPU iPhone OS 12_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.0 EdgiOS/44.8.0 Mobile/15E148 Safari/605.1.15";
    static $macOSInvalidUserAgent = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.1 Safari/605.1.15";
    static $UCBrowserInvalidUserAgent = "Mozilla/5.0 (Linux; U; Android 4.1.2; en-us; SM-T210R Build/JZO54K) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30 UCBrowser/2.3.2.300";
    static $MACEmbeddedInvalidUserAgent = "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3) AppleWebKit/534.31 (KHTML, like Gecko) Chrome/17.0.558.0 Safari/534.31 UCBrowser/3.0.0.357";

}
