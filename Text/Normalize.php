<?php
// vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4 encoding=utf-8 fdm=marker :
// {{{ Licence
// +--------------------------------------------------------------------------+
// | Text_Normalize                                                           |
// +--------------------------------------------------------------------------+
// | Copyright (C) 2008 Nicolas Thouvenin                                     |
// +--------------------------------------------------------------------------+
// | This library is free software; you can redistribute it and/or            |
// | modify it under the terms of the GNU General Public License              |
// | as published by the Free Software Foundation; either  version 2          |
// | of the License, or (at your option) any later version.                   |
// |                                                                          |
// | This program is distributed in the hope that it will be useful,          |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of           |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU         |
// | General Public License for more details.                                 |
// |                                                                          |
// | You should have received a copy of the GNU General Public License        |
// | along with this library; if not, write to the Free Software              |
// | Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA  |
// +--------------------------------------------------------------------------+
// }}}

/**
 * @category  Text
 * @package   Text_Normalize
 * @author    Nicolas Thouvenin <nthouvenin@gmail.com>
 * @copyright 2008 Nicolas Thouvenin
 * @license   http://opensource.org/licenses/lgpl-license.php LGPL
 * @version   SVN: $Id$
 * @link      http://www.touv.fr/spip.php?id_article=145
 */



/**
 * Classe Permettant
 *
 * @category  Text
 * @package   Text_Normalize
 * @author    Nicolas Thouvenin <nthouvenin@gmail.com>
 * @copyright 2008 Nicolas Thouvenin
 * @license   http://opensource.org/licenses/lgpl-license.php LGPL
 * @link      http://www.touv.fr/spip.php?id_article=145
 */
class Text_Normalize
{
    const Blankchars = 1;
    const Symbols    = 4;
    const Stopwords  = 8;
    const Uppercase  = 16;
    const Stemming   = 32;
    /**
     * Chaine de caractère (forcement en UTF-8) à traiter
     * @var string
     */
    private $_input;

    /**
     * Mode à appliquer
     * @var integer
     */
    private $_mode = 0;

    /**
     * Chaine de caractère (forcement en UTF-8) produite
     * @var string
     */
    private $_output;

    /**
     * Langue de la chaine de caractère
     * @var string
     */
    private $_lang;

    // {{{ __construct
    /**
     * Constructeur
     *
     * @param string $str
     * @param string $lng
     */
    function __construct($str, $lng)
    {
        $this->set($str, $lng);
    }
    // }}}

    // {{{ set
    /**
     * Fixe la chaine à traiter
     *
     * @param string $str
     * @param string $lng
     */
    public function set($str, $lng)
    {
        $this->_input = $str;
        $this->_lang  = $lng;
    }
    // }}}


    // {{{ get
    /**
     * Retourne la chaine normalizée
     *
     * @param integer $cod
     *
     * @return string
     */
    public function get($mod)
    {
        $this->_mode = $mod;
        $this->_output = $this->_input;
        if (($this->_mode & self::Blankchars) === self::Blankchars) {
            $this->_output = $this->_Blankchars($this->_output);
        }
        if (($this->_mode & self::Symbols) === self::Symbols) {
            $this->_output = $this->_Symbols($this->_output);
        }
        if (($this->_mode & self::Stemming) === self::Stemming) {
            $this->_output = $this->_Stemming($this->_output);
        }
        if (($this->_mode & self::Stopwords) === self::Stopwords) {
            $this->_output = $this->_Stopwords($this->_output);
        }
        if (($this->_mode & self::Uppercase) === self::Uppercase) {
            $this->_output = $this->_Uppercase($this->_output);
        }
        return trim($this->_output, ' ');
    }
    // }}}

    // {{{ _Blankchars
    /**
     * Enleve les caractères inutiles
     *
     * @param string $str chaine à traiter
     *
     * @return string
     */
    private function _Blankchars($str)
    {
        include_once('Text/Normalize/Blankchars.php');
        $bchr = Text_Normalize_Blankchars::factory($this->_lang);
        return $bchr->transform($str);
    }
    // }}}

    // {{{ _Symbols
    /**
     * Enleve les caractères accentués
     *
     * @param string $str chaine à traiter
     *
     * @return string
     */
    private function _Symbols($str)
    {
        include_once('Text/Normalize/Symbols.php');
        $symb = Text_Normalize_Symbols::factory($this->_lang);
        return $symb->transform($str);
    }
    // }}}

    // {{{ _Stopwords
    /**
     * Enleve les mots vides
     *
     * @param string $str chaine à traiter
     *
     * @return string
     */
    private function _Stopwords($str)
    {
        include_once('Text/Normalize/Stopwords.php');
        $swrd = Text_Normalize_Stopwords::factory($this->_lang);
        return $swrd->transform($str);
    }
    // }}}

    // {{{ _Uppercase
    /**
     * Enleve les Majuscules
     *
     * @param string $str chaine à traiter
     *
     * @return string
     */
    private function _Uppercase($str)
    {
        return strtolower($str);
    }
    // }}}

    // {{{ _Stemming
    /**
     * Garde uniquement la racine
     *
     * @param string $str chaine à traiter
     *
     * @return string
     */
    private function _Stemming($str)
    {
        include_once('Text/Normalize/Stemming.php');
        $stm = Text_Normalize_Stemming::factory($this->_lang);
        return $stm->transform($str);
    }
    // }}}
}



