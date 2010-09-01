<?php
// vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4 encoding=utf-8 fdm=marker :

ini_set('include_path', dirname(__FILE__).PATH_SEPARATOR.ini_get('include_path'));

require_once 'PHPUnit/Framework.php';
require_once 'Text/Normalize.php';

require_once 'Text/Normalize/Blankchars.php';
  class Pirate extends Text_Normalize_Blankchars
        {
            public function transform($str)
            {
                return preg_replace('/[aeiouy]+/i', ' ', $str);
            }
        }


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
        $ret = $this->tn->get(Text_Normalize::Lowercase);
        $this->assertEquals('hello', $ret);
    }
    function test_bankschars()
    {
        $this->tn->set('a,;:!?..b^*c', 'en');
        $ret = $this->tn->get(Text_Normalize::Blankchars);
        $this->assertEquals('a b c', $ret);
    }
    function test_bankschars2()
    {
        $this->tn->set('a,;:!?..b^*c', 'XXX');
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
    function test_vowels()
    {
        $this->tn->set('avec chacune de celle qui font ceux-ci doivent maintenant et pour longtemps faire mieux', 'fr');
        $ret = $this->tn->get(Text_Normalize::Vowels);
        $this->assertEquals('vc chcn d cll q fnt cx-c dvnt mntnnt t pr lngtmps fr mx', $ret);
    }
    function test_duplicates()
    {
        $this->tn->set('aabbccZZZZddeefffffffffffffff', null);
        $ret = $this->tn->get(Text_Normalize::Duplicates);
        $this->assertEquals('abcZdef', $ret);
    }
    function test_stemming()
    {
        $this->tn->set('ordinateurs', 'fr');
        $ret = $this->tn->get(Text_Normalize::Stemming);
        $this->assertEquals('ordinateur', $ret);

        $this->tn->set('les animaux et oiseaux de Bordeaux', 'fr');
        $ret = $this->tn->get(Text_Normalize::Stemming);
        $this->assertEquals('le animal et oiseau de Bordeaux', $ret);

    }
    function test_uppercase_bankschars()
    {
        $this->tn->set('AzErTy "\(-)=}]@^\`|[{#~ ', 'en');
        $ret = $this->tn->get(Text_Normalize::Lowercase | Text_Normalize::Blankchars);
        $this->assertEquals('azerty', $ret);
    }
    function test_full()
    {
        // '"Interpréter, c\'est appauvrir, diminuer l\'image du monde, lui substituer un monde factice de `significations`." -- [Susan Sontag]'
        // => interpreter  appauvrir  diminuer l'image du monde  substituer un monde factice de  signification     susan sontag
        $this->tn->set('"Nous sommes à la fois un fluide qui se solidifie, un trésor qui s\'appauvrit, une histoire qui s\'écrit, une personnalité qui se crée." -- [Alexis Carrel]', 'fr');
        $ret = $this->tn->get(Text_Normalize::Lowercase | Text_Normalize::Blankchars | Text_Normalize::Symbols | Text_Normalize::Stopwords | Text_Normalize::Stemming);
        $this->assertEquals("nous somme a la un fluide se solidifie  un tresor s'appauvrit  une histoire s'ecrit  une personnalite se cree     alexis carrel", $ret);

    }

    function test_extend()
    {
        $this->tn->BlankcharsLang = 'Pirate';
        $this->tn->set('AS Nancy Lorraine', 'fr');
        $ret = $this->tn->get(Text_Normalize::Blankchars);
        $this->assertEquals("S N nc  L rr n", $ret);
    }

}
