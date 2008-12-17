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
 * Classe pour supprimer des symbols généant
 *
 * @category  Text
 * @package   Text_Normalize
 * @author    Nicolas Thouvenin <nthouvenin@gmail.com>
 * @copyright 2008 Nicolas Thouvenin
 * @license   http://opensource.org/licenses/lgpl-license.php LGPL
 * @link      http://www.touv.fr/spip.php?id_article=145
 */
abstract class Text_Normalize_Blankchars
{
    public static $data = array();
    // {{{ factory
    /**
     * Usine
     *
     * @param string $lng
     *
     * @return Text_Normalize_Stopwords
     */
    static function factory($lng)
    {
        if (strcasecmp($lng, 'fr') === 0 or strcasecmp($lng, 'fra') === 0) {
            if (!class_exists('Text_Normalize_Blankchars_General'))
                include_once 'Text/Normalize/Blankchars/General.php';
            return new Text_Normalize_Blankchars_General;
        }
        if (strcasecmp($lng, 'en') === 0 or strcasecmp($lng, 'eng') === 0) {
            if (!class_exists('Text_Normalize_Blankchars_General'))
                include_once 'Text/Normalize/Blankchars/General.php';
            return new Text_Normalize_Blankchars_General;
        }
        $o = null;
        if (class_exists($lng)) {
            $o = new $lng;
        }
        else {
            $lng = 'Text_Normalize_Blankchars_'.ucfirst($lng);
            include_once strtr($lng,'_','/').'.php';
            if (class_exists($lng)) {
                $o = new $lng;
            }
        }
        if (!is_null($o)) {
            if ($o instanceof Text_Normalize_Blankchars) return $o;
            else {
                trigger_error(__METHOD__.' cannot build a class : `'.$lng.'` it\'s not an instance of Text_Normalize_Stopwords', E_USER_ERROR);
            }
        }
        else {
            trigger_error(__METHOD__.' cannot build a non-existant class : `'.$lng.'`', E_USER_ERROR);
        }
    }
    // }}}

    // {{{ transform
    /**
     * supprime les mots vides
     *
     * @param string $str
     *
     * @return string
     */
    abstract function transform($str);
    // }}}
}
