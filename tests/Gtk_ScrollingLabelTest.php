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
        require_once 'Gtk/ScrollingLabel.php';
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
        $this->assertEquals($result, $expected);
    }

    function testsetdirection()
    {
        $result   = $this->Gtk_ScrollingLabel->setdirection(GTK_SCROLLINGLABEL_LEFT);
        $expected = GTK_SCROLLINGLABEL_LEFT;
        $this->assertEquals($result, $expected);
    }

    function testsetbounce()
    {
        $result   = $this->Gtk_ScrollingLabel->setbounce(true);
        $expected = true;
        $this->assertEquals($result, $expected);
    }

    function testgetvisibletext()
    {
        $this->Gtk_ScrollingLabel->jumpToChar(4);
        $this->Gtk_ScrollingLabel->setVisibleLength(3);
        $result   = $this->Gtk_ScrollingLabel->getvisibletext();
        $expected = 'Thi';
        $this->assertEquals($result, $expected);
    }

    function testgetfulltext()
    {
        $result   = $this->Gtk_ScrollingLabel->getfulltext();
        $expected = 'This is some test text';
        $this->assertEquals($result, $expected);
    }

    function testgethiddentext()
    {
        $this->Gtk_ScrollingLabel->setVisibleLength(4);
        $result   = $this->Gtk_ScrollingLabel->gethiddentext();
        $expected = ' is some test text';
        $this->assertEquals($result, $expected);
    }

    function testsetfulltext()
    {
        $this->Gtk_ScrollingLabel->setFullText('This test was successful.');
        $result   = $this->Gtk_ScrollingLabel->getFullText();
        $expected = 'This test was successful.';
        $this->assertEquals($result, $expected);
    }

    function testjumptochar()
    {
        $result   = $this->Gtk_ScrollingLabel->jumptochar(4);
        $expected = 4;
        $this->assertEquals($result, $expected);
    }

    function testsetvisiblelength()
    {
        $result   = $this->Gtk_ScrollingLabel->setvisiblelength(4);
        $expected = 4;
        $this->assertEquals($result, $expected);
    }

    function testgetvisiblelength()
    {
        $this->Gtk_ScrollingLabel->setvisiblelength(4);
        $result   = $this->Gtk_ScrollingLabel->getvisiblelength();
        $expected = 4;
        $this->assertEquals($result, $expected);
    }

    function testgetscrollinglabel()
    {
        $result   = $this->Gtk_ScrollingLabel->getscrollinglabel();
        $this->assertTrue(is_resource($result));
    }

}
// Running the test.
$suite  = new PHPUnit_TestSuite('Gtk_ScrollingLabelTest');
$result = PHPUnit::run($suite);
echo $result->toString();
?>
