/**
 * This document is a short usage example/tutorial
 * for the ScrollingLabel package.  The package is
 * used to create a label whose text moves across
 * the visible area of the label.  The text can 
 * move from left to right, right to left, or bounce
 * between the edges of the label.
 *
 * @author  Scott Mattocks
 * @package ScrollingLabel
 */

/**
 * The first thing to do is to create the new label.
 * As with any GTK widget you should create the label
 * and assign it by reference. You can, if you chose,
 * pass the text you wish to display on construction.
 */
require_once 'GTK/ScrollingLabel';
$sLabel =& new ScrollingLabel('Hello World');

/**
 * Having a label all by itself isn't very helpful.
 * 'How do I get my label into a container' you 
 * ask?  Easy.
 */
$gWin =& new GTKWindow;
$gWin->add($sLabel->getScrollingLabel);

/**
 * We now have a scrolling label.  That is all there
 * is to the basic set up.  You can make things more
 * interesting and interactive by connecting events
 * and changing directions. First lets get things 
 * moving.
 */
$sLabel->start();

/**
 * Next lets get things moving faster. The speed is
 * the number of milliseconds between movements of
 * the label.  If you want the label to move faster
 * make the speed smaller.  Slower, make it higher.
 * (Blame GTK not me for this one.) The default speed
 * is 70 milliseconds between movements.
 */
$sLabel->setSpeed(40);

/**
 * We can change almost anything about this label.
 * Lets make the text scroll in the opposite direction,
 * show fewer characters at a time, and say something
 * else.
 */
$sLabel->setDirection(GTK_SCROLL_RIGHT);
$sLabel->setVisibleLength(30);
$sLabel->setFullText('ScrollingLabel Rocks!');

/**
 * Now we have a label that reads 'ScrollingLabel Rocks'
 * flying by the screen pretty quickly showing only 30
 * characters at a time, moving from left to right.
 * This is all well and good but the real magic happens
 * when you start connecting events.
 *
 * Since the text is whizing by at the speed of light,
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
 * using ScrollingLabel.  To find out more read the online
 * documentation or take a look at the inline API comments.
 * If you have any questions please do not hesitate to ask.
 * Thank you,
 * Scott Mattocks
 */