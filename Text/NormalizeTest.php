<?php
// vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4 encoding=utf-8 fdm=marker :

ini_set('include_path', dirname(__FILE__).PATH_SEPARATOR.ini_get('include_path'));

require_once 'PHPUnit/Framework.php';
require_once 'Text/Normalize.php';

class Text_NormalizeTest extends PHPUnit_Framework_TestCase
{
    var $tn;
    function setUp()
    {
        $this->tn = new Text_Normalize('', 'fr');
    }
    function tearDown()
    {
        $this->tn = null;
    }

    function test_uppercase()
    {
        $this->tn->set('HELLO', 'en');
        $ret = $this->tn->get(Text_Normalize::Uppercase);
        $this->assertEquals('hello', $ret);
    }
    function test_bankschars()
    {
        $this->tn->set('a,;:!?..b^*c', 'en');
        $ret = $this->tn->get(Text_Normalize::Blankchars);
        $this->assertEquals('a b c', $ret);
    }
    function test_accents()
    {
        $this->tn->set('élève', 'fr');
        $ret = $this->tn->get(Text_Normalize::Symbols);
        $this->assertEquals('eleve', $ret);
    }
    function test_stopwords()
    {
        $this->tn->set('avec chacune de celle qui font ceux-ci doivent maintenant et pour longtemps faire mieux', 'fr');
        $ret = $this->tn->get(Text_Normalize::Stopwords);
        $this->assertEquals('de ceux-ci et faire', $ret);
    }
    function test_stemming()
    {
        $this->tn->set('ordinateurs', 'fr');
        $ret = $this->tn->get(Text_Normalize::Stemming);
        $this->assertEquals('ordinateur', $ret);
    }
    function test_uppercase_bankschars()
    {
        $this->tn->set('AzErTy "\(-)=}]@^\`|[{#~ ', 'en');
        $ret = $this->tn->get(Text_Normalize::Uppercase | Text_Normalize::Blankchars);
        $this->assertEquals('azerty', $ret);
    }
}
