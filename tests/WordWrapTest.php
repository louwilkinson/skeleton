<?php
namespace skeleton\test;

use skeleton\WordWrap as WordWrap;

require_once 'src/WordWrap.php';

class WordWrapTest extends \PHPUnit_Framework_TestCase {

    function testItCanWrap() {
        $w = new WordWrap();

        $this->assertEquals('', $w->wrap(null, 0));
        $this->assertEquals('', $w->wrap('', 0));
        $this->assertEquals('a', $w->wrap('a', 1));
        $this->assertEquals("a\nb", $w->wrap('a b', 1));
        $this->assertEquals("a b\nc", $w->wrap('a b c', 3));
        $this->assertEquals("a\nbc\nd", $w->wrap('a bc d', 3));
    }
}