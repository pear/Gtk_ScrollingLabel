<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
// +----------------------------------------------------------------------+
// | PHP Version 4                                                        |
// +----------------------------------------------------------------------+
// | Copyright (c) 2005 Scott Mattocks
// +----------------------------------------------------------------------+
// | This source file is subject to version 3.0 of the PHP license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.php.net/license/3_0.txt.                                  |
// | If you did not receive a copy of the PHP license and are unable to   |
// | obtain it through the world-wide-web, please send a note to          |
// | license@php.net so we can mail you a copy immediately.               |
// +----------------------------------------------------------------------+
// | Author: Scott Mattocks <scottmattocks@php.net>                       |
// +----------------------------------------------------------------------+
//
// $Id$
/**
 * This document is a short usage example/tutorial
 * for the ScrollingLabel package.  The package is
 * used to create a label whose text moves across
 * the visible area of the label.  The text can 
 * move from left to right, right to left, or bounce
 * between the edges of the label.
 *                                                 
 * @author    Scott Mattocks                          
 * @author    Christian Weiske
 * @category  Gtk
 * @package   Gtk_ScrollingLabel                     
 * @license   http://www.php.net/license/3_0.txt PHP License 3.0
 * @copyright Copyright &copy 2005 Scott Mattocks
 */

/**
 * The first thing to do is to create the new label.
 * As with any Gtk widget you should create the label
 * and assign it by reference. You can, if you chose,
 * pass the text you wish to display on construction.
 *
 * Note: To see this example in action between each
 *       step requires showing all widgets and starting
 *       the main loop after each step. To do this
 *       just copy and paste the last two lines right
 *       after the step you wish to see.
 */
require_once 'Gtk/ScrollingLabel.php';
$sLabel =& new Gtk_ScrollingLabel('Hello World');

/**
 * Having a label all by itself isn't very helpful.
 * 'How do I get my label into a container' you 
 * ask?  Easy.
 */
$gWin =& new GtkWindow();
$gWin->connect_object('destroy', array('gtk', 'main_quit'));
$gWin->add($sLabel->getScrollingLabel());

/**
 * We now have a scrolling label.  That is all there
 * is to the basic set up.  
 *
 * You can, of course, make things more interesting
 * and interactive by connecting events and changing
 * directions. First lets get things moving.
 */
$sLabel->startScroll();

/**
 * Next lets get things moving faster. The speed is
 * the number of milliseconds between movements of
 * the label. If you want the label to move faster
 * make the speed smaller. Slower, make it higher.
 * (Blame GTK not me for this one.) The default speed
 * is 70 milliseconds between movements.
 */
$sLabel->setSpeed(45);

/**
 * We can change almost anything about this label.
 * Lets make the text bounce back and forth and 
 * say something different. While we are at it lets
 * give the text plenty of room to move.
 */
$sLabel->setBounce(true);
$sLabel->setFullText('Gtk_ScrollingLabel Rocks!');
$sLabel->setVisibleLength(50);

/**
 * Now we have a label that reads 'Gtk_ScrollingLabel Rocks'
 * bouncing around the screen pretty quickly.
 * This is all well and good but the real magic happens
 * when you start connecting events.
 *
 * Since the text is whizzing by at the speed of light,
 * it would be nice to be able to pause the text so that
 * a user can read it.
 */
$sLabel->setPauseSignal('enter-notify-event');
$sLabel->setUnPauseSignal('leave-notify-event');

/**
 * Now our text will pause right where it is when a user
 * moves the mouse over it.  When they move the mouse
 * away, the text will start scrolling again. Signals 
 * can also be connected for starting and stoping the 
 * the text.  The class can also be extended to allow
 * more methods to be connected to events.
 */

/**
 * This is just a quick sampling of what can be done
 * using Gtk_ScrollingLabel. To find out more read the online
 * documentation or take a look at the inline API comments.
 * If you have any questions please do not hesitate to ask.
 * Thank you,
 * Scott Mattocks
 */
 
$gWin->show_all();
gtk::main();

?>