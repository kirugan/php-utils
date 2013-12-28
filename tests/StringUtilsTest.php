<?php
require_once '../src/StringUtils.php';
/**
 * Description of StringUtilsTest
 *
 * @author kirill
 */
class StringUtilsTest extends PHPUnit_Framework_TestCase{
    /* REMOVE REDUNDANT WS */
    public function testRemoveRedundantWS1(){
        $str_with_one_space = StringUtils::removeRedundantWS('Hello   dolly!');
        $this->assertEquals($str_with_one_space, 'Hello dolly!');
    }
    public function testRemoveRedundantWS2(){
        $str_with_one_space = StringUtils::removeRedundantWS('  Hello dolly! ');
        $this->assertEquals($str_with_one_space, ' Hello dolly! ');
    }
    /* /REMOVE */
}

?>
