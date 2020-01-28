<?php
namespace Skorp\Dissua\Tests;

use PHPUnit\Framework\TestCase;
use Skorp\Dissua\SameSite;

class SameSiteTest extends TestCase {

    use UserAgents;
    /** @test  */
    public function samesite_attribute_will_sent() {
        $class = new SameSite(self::$chromeValidUserAgent);
        $this->assertTrue($class->shouldSendSameSiteNone());
    }

    /** @test  */
    public function samesite_attributes_will_removed() {
        $class = new SameSite(self::$chromeInvalidUserAgent1);
        $this->assertFalse($class->shouldSendSameSiteNone());

        $class = new SameSite(self::$chromeInvalidUserAgent2);
        $this->assertFalse($class->shouldSendSameSiteNone());

        $class = new SameSite(self::$iosInvalidUserAgent);
        $this->assertFalse($class->shouldSendSameSiteNone());

        $class = new SameSite(self::$macOSInvalidUserAgent);
        $this->assertFalse($class->shouldSendSameSiteNone());

        $class = new SameSite(self::$UCBrowserInvalidUserAgent);
        $this->assertFalse($class->shouldSendSameSiteNone());

        $class = new SameSite(self::$MACEmbeddedInvalidUserAgent);
        $this->assertFalse($class->shouldSendSameSiteNone());
    }
}