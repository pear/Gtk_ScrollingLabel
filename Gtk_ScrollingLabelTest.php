<?php
/**
 * PHPUnit test case for Gtk_ScrollingLabel
 * 
 * The method skeletons below need to be filled in with 
 * real data so that the tests will run correctly. Replace 
 * all EXPECTED_VAL and PARAM strings with real data. 
 * 
 * Created with PHPUnit_Skeleton on 2004-09-30
 */
require_once 'PHPUnit.php';
class Gtk_ScrollingLabelTest extends PHPUnit_TestCase {

    var $Gtk_ScrollingLabel;

    function Gtk_ScrollingLabelTest($name)
    {
        $this->PHPUnit_TestCase($name);
    }

    function setUp()
    {
        require_once 'ScrollingLabel.php';
        $this->Gtk_ScrollingLabel =& new Gtk_ScrollingLabel();
        $this->Gtk_ScrollingLabel->setfulltext('This is some test text');
    }

    function tearDown()
    {
        unset($this->Gtk_ScrollingLabel);
    }

    function testsetspeed()
    {
        $result   = $this->Gtk_ScrollingLabel->setspeed(100);
        $expected = 100;
        $this->assertEquals($expected, $result);
    }

    function testsetdirection()
    {
        $result   = $this->Gtk_ScrollingLabel->setdirection(GTK_SCROLLINGLABEL_LEFT);
        $expected = GTK_SCROLLINGLABEL_LEFT;
        $this->assertEquals($expected, $result);
    }

    function testsetbounce()
    {
        $result   = $this->Gtk_ScrollingLabel->setbounce(true);
        $expected = true;
        $this->assertEquals($expected, $result);
    }

    function testgetvisibletext()
    {
        $result   = $this->Gtk_ScrollingLabel->getvisibletext();
        $expected = str_pad('This is some test text', 70, ' ', STR_PAD_LEFT);
        $this->assertEquals($expected, $result);
    }

    function testgetfulltext()
    {
        $result   = $this->Gtk_ScrollingLabel->getfulltext();
        $expected = 'This is some test text';
        $this->assertEquals($expected, $result);
    }

    function testgethiddentext()
    {
        $this->Gtk_ScrollingLabel->setVisibleLength(4);
        $result   = $this->Gtk_ScrollingLabel->gethiddentext();
        $expected = ' is some test text';
        $this->assertEquals($expected, $result);
    }

    function testsetfulltext()
    {
        $this->Gtk_ScrollingLabel->setFullText('This is some test text');
        $expected = 'This is some test text';
        $this->assertEquals($expected, $this->Gtk_ScrollingLabel->getFullText());
    }

    function testjumptochar()
    {
        $result   = $this->Gtk_ScrollingLabel->jumptochar(4);
        $expected = 4;
        $this->assertEquals($expected, $result);
    }

    function testsetvisiblelength()
    {
        $result   = $this->Gtk_ScrollingLabel->setvisiblelength(4);
        $expected = 4;
        $this->assertEquals($expected, $result);
    }

    function testgetvisiblelength()
    {
        $this->Gtk_ScrollingLabel->setvisiblelength(4);
        $result   = $this->Gtk_ScrollingLabel->getvisiblelength();
        $expected = 4;
        $this->assertEquals($expected, $result);
    }

    function testgetscrollinglabel()
    {
        $result   = $this->Gtk_ScrollingLabel->getscrollinglabel();
        $this->assertTrue(is_object($result));
    }

}
// Running the test.
if (!extension_loaded('gtk')) {
    dl( 'php_gtk.' . PHP_SHLIB_SUFFIX);
}
$suite  = new PHPUnit_TestSuite('Gtk_ScrollingLabelTest');
$result = PHPUnit::run($suite);
echo $result->toString();
?>
