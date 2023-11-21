<?php
/* *********************************************************************
 * This Original Work is copyright of 51 Degrees Mobile Experts Limited.
 * Copyright 2023 51 Degrees Mobile Experts Limited, Davidson House,
 * Forbury Square, Reading, Berkshire, United Kingdom RG1 3EU.
 *
 * This Original Work is licensed under the European Union Public Licence
 * (EUPL) v.1.2 and is subject to its terms as set out below.
 *
 * If a copy of the EUPL was not distributed with this file, You can obtain
 * one at https://opensource.org/licenses/EUPL-1.2.
 *
 * The 'Compatible Licences' set out in the Appendix to the EUPL (as may be
 * amended by the European Commission) shall be deemed incompatible for
 * the purposes of the Work and the provisions of the compatibility
 * clause in Article 5 of the EUPL shall not apply.
 *
 * If using the Work as, or as part of, a network application, by
 * including the attribution notice(s) required under Article 5 of the EUPL
 * in the end user terms of the application under an appropriate heading,
 * such notice(s) shall fulfill the requirements of that article.
 * ********************************************************************* */

namespace fiftyone\pipeline\devicedetection\tests;

use fiftyone\pipeline\core\Logger;
use fiftyone\pipeline\devicedetection\examples\onpremise\classes\GettingStartedConsole;
use fiftyone\pipeline\devicedetection\examples\onpremise\classes\MatchMetrics;
use fiftyone\pipeline\devicedetection\examples\onpremise\classes\MetaDataConsole;
use PHPUnit\Framework\TestCase;

class ExampleTests extends TestCase
{
    public function testGettingStartedConsole()
    {
        $logger = new Logger("info");
        $output = array();
        (new GettingStartedConsole())->run($logger, function($str) use (&$output) { $output[] = $str; });
        $this->assertTrue(count($output) > 0);
    }
    public function testMetadataConsole()
    {
        $logger = new Logger("info");
        $output = array();
        (new MetaDataConsole())->run($logger, function($str) use (&$output) { $output[] = $str; });
        $this->assertTrue(count($output) > 0);
    }
    public function testMatchMetrics()
    {
        $logger = new Logger("info");
        $output = array();
        (new MatchMetrics())->run(true, $logger, function($str) use (&$output) { $output[] = $str; });
        $this->assertTrue(count($output) > 0);
    }
}