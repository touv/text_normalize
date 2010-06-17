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

require_once 'Text/Normalize/Blankchars.php';

/**
 * Classe traitant des voyelles en général
 *
 * @category  Text
 * @package   Text_Normalize
 * @author    Nicolas Thouvenin <nthouvenin@gmail.com>
 * @copyright 2008 Nicolas Thouvenin
 * @license   http://opensource.org/licenses/lgpl-license.php LGPL
 * @link      http://www.touv.fr/spip.php?id_article=145
 */
class Text_Normalize_Vowels_General extends Text_Normalize_Vowels
{
    static $data = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
    // {{{ transform
    /**
     * Transformatino de la chaine
     *
     * @param string $str
     *
     * @return string
     */
    public function transform($str)
    {
        return str_replace(self::$data, '', $str);
    }
    // }}}
}
