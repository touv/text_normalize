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
require_once 'Text/Normalize/Stemming.php';


/**
 * Classe pour garder uniquement le racine des mots
 *
 * @category  Text
 * @package   Text_Normalize
 * @author    Nicolas Thouvenin <nthouvenin@gmail.com>
 * @copyright 2008 Nicolas Thouvenin
 * @license   http://opensource.org/licenses/lgpl-license.php LGPL
 * @link      http://www.touv.fr/spip.php?id_article=145
 */
class Text_Normalize_Stemming_Eng extends Text_Normalize_Stemming
{
    static $ListS_S_EN = array(
        "aids",
        "barracks",
        "clippers",
        "crossroads",
        "gallows",
        "headquarters",
        "means",
        "news",
        "savings",
        "scales",
        "series",
        "shorts",
        "species",
        "tongs",
        "trousers",
        "walles",
        "works",
        "analysis",
        "axis",
        "basis",
        "crisis",
        "diagnosis",
        "ellipsis",
        "emphasis",
        "hypothesis",
        "neurosis",
        "oasis",
        "paralysis",
        "parenthesis",
        "synopsis",
        "synthesis",
        "thesis"
    );
    static $ListVES_F_EN = array(
        "calves",
        "halves",
        "hooves",
        "leaves",
        "loaves",
        "scarves",
        "selves",
        "shelves",
        "sheaves",
        "thieves",
        "wharves",
        "wolves"
    );
    static $ListCorresIRREG1_EN = array(
        "analyses",
        "access",
        "axes",
        "bases",
        "child",
        "crises",
        "diagnoses",
        "ellipses",
        "elf",
        "emphases",
        "hypotheses",
        "knives",
        "firemen",
        "feet",
        "geese",
        "lice",
        "lives",
        "neuroses",
        "men",
        "mice",
        "oases",
        "oxen",
        "paralyses",
        "parentheses",
        "rated",
        "sealed",
        "shoes",
        "switched",
        "synopses",
        "syntheses",
        "teeth",
        "theses",
        "used",
        "wives",
        "women",
    );
    static $ListCorresIRREG2_EN = array(
        "analysis",
        "access",
        "axis",
        "basis",
        "children",
        "crisis",
        "diagnosis",
        "ellipsis",
        "elves",
        "emphasis",
        "hypothesis",
        "knife",
        "fireman",
        "foot",
        "goose",
        "louse",
        "life",
        "neurosis",
        "man",
        "mouse",
        "oasis",
        "ox",
        "paralysis",
        "parenthesis",
        "rated",
        "sealed",
        "shoe",
        "switched",
        "synopsis",
        "synthesis",
        "tooth",
        "thesis",
        "use",
        "wife",
        "woman"
    );



    // {{{ transform
    /**
     * supprime ...
     *
     * @param string $str
     *
     * @return string
     */
    public function transform($str)
    {
        $word = array();
        $regles = array();
        $word_array = explode (" ",$str);
        foreach ($word_array as  $value )
        {
            $char = (substr ($value, -1 ));

            if (strlen ($value) <= 2 ) {
                $word[] = $value;
                continue;
            }

            if ($char != "s" and $char != "d" ) {
                $word[] = $value ;
                continue;
            }

            if ($char == "s") {

                if ( strcasecmp  ("sses",substr ($value,-4))==0) {
                    $word[] = preg_replace (",(ss)es$,i","\\1",$value);
                    $regles[] = 'ens1';
                }

                elseif ( strcasecmp ( "shes" ,substr ($value,-4))==0) {
                    $word[] =preg_replace (",(sh)es$,i","\\1",$value);
                    $regles[] = 'ens2';
                }

                elseif ( strcasecmp (  "ches" ,substr ($value,-4))==0) {
                    $word[] = preg_replace (",(ch)es$,i","\\1",$value);
                    $regles[] = 'ens3';
                }

                elseif ( strcasecmp( "oes" ,substr ($value,-3))==0) {
                    $word[] = preg_replace (",(o)es$,i","\\1",$value);
                    $regles[] = 'ens4';

                }

                elseif ( strcasecmp ( "ies" ,substr ($value,-3))==0) {
                    $value = preg_replace (",ies$,","y",$value, 1);
                    $word[] = preg_replace (",IES$,","Y",$value, 1);
                    $regles[] = 'ens5';
                }

                elseif ( strcasecmp ( "xes",substr ($value,-3))==0) {
                    $word[] = preg_replace (",(x)es$,i","\\1",$value);
                    $regles[] = 'ens6';
                }

                elseif (in_array (strtolower ($value),self::$ListVES_F_EN)) {
                    $value = preg_replace (",ves$,","f",$value, 1);
                    $word[] = preg_replace (",VES$,","F",$value, 1);
                    $regles[] = 'ens7';
                }


                elseif ( strcasecmp ( "ss",substr ($value,-2))==0) {
                    $value = preg_replace (",ss$,","ss",$value, 1);
                    $word[] = preg_replace (",SS$,","SS",$value, 1);
                    $regles[] = 'ens8';
                }

                elseif (in_array (strtolower($value),self::$ListS_S_EN)) {
                    $word[] = preg_replace (",s$,","s",$value, 1);
                    $regles[] = 'ens9';
                }

                elseif ( strcasecmp ("s" ,substr ($value,-1))==0) {
                    $value = preg_replace (",s$,","",$value, 1);
                    $word[] = preg_replace (",S$,","",$value, 1);
                    $regles[] = 'ens10';
                }
            }

            if ($char == "d") {

                if ( strcasecmp ( "eed" ,substr ($value,-3))==0) {
                    $value  = preg_replace (",eed$,","eed",$value, 1);
                    $word[]  = preg_replace (",EED$,","EED",$value, 1);
                    $regles[] = 'end11';
                }
                elseif ( strcasecmp (  "ed" ,substr ($value,-2))==0) {
                    $value = preg_replace (",ed$,","e",$value, 1);
                    $word[] = preg_replace (",ED$,","E",$value, 1);
                    $regles[] = 'end12';
                }
                else {
                    $word[] = $value ;
                }
            }

            if  ($term = (substr ($value,-2))) {
                if ($term == "at") {
                    $word[] = preg_replace (",(at)ate$,i","\\1",$value);
                    $regles[] = 'en13';
                }

                elseif ($term == "bl") {
                    $word[] = preg_replace (",(bl)ble$,i","\\1",$value);
                    $regles[] = 'en14';
                }
                elseif ($term == "iz") {
                    $word[] = preg_replace (",(iz)ize$,i","\\1",$value);
                    $regles[] = 'en15';
                }
                elseif ($term == "bb") {
                    $word[] = preg_replace (",(bb)b$,i","\\1",$value);
                    $regles[] = 'en16';
                }

                elseif ($term == "dd") {
                    $word[] = preg_replace (",(dd)d$,i","\\1",$value);
                    $regles[] = 'ens10';
                }

                elseif ($term == "ff") {
                    $word[] = preg_replace (",(ff)f$,i","\\1",$value);
                    $regles[] = 'en17';
                }

                elseif ($term == "gg") {
                    $word[] = preg_replace (",(gg)g$,i","\\1",$value);
                    $regles[] = 'en18';
                }

                elseif (strlen ($value)> 3 and $term == "ll") {
                    $word[] = preg_replace (",(ll)l$,i","\\1",$value);
                    $regles[] = 'en19';
                }

                elseif ($term == "mm") {
                    $word[] = preg_replace (",(mm)m$,i","\\1",$value);
                    $regles[] = 'en20';
                }

                elseif ($term == "nn") {
                    $word[] = preg_replace (",(nn)n$,i","\\1",$value);
                    $regles[] = 'en21';
                }

                elseif ($term == "pp") {
                    $word[] = preg_replace (",(pp)p$,i","\\1",$value);
                    $regles[] = 'en22';
                }

                elseif ($term == "rr") {
                    $word[] = preg_replace (",(rr)r$,i","\\1",$value);
                    $regles[] = 'en23';
                }


                elseif ($term == "tt") {
                    $word[] = preg_replace (",(tt)t$,i","\\1",$value);
                    $regles[] = 'en24';
                }

                elseif ($term == "ww") {
                    $word[] = preg_replace (",(ww)w$,i","\\1",$value);
                    $regles[] = 'en25';
                }


                elseif ($term == "xx") {
                    $word[] = preg_replace(",(xx)x$,i","\\1",$value);
                    $regles[] = 'ens10';
                }
            }

            if 	($key = array_search (strtolower ($value),self::$ListCorresIRREG1_EN)) {
                $word[] = $this->ListCorresIRREG2_EN[$key];
                $regles[] = 'en26';
            }
        }

        return implode(' ', $word);
    }
    // }}}
}
