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

require_once 'Text/Normalize/Symbols.php';

/**
 * Classe stockant les equivalences entre les caratères accentués et leur version appauvri
 *
 * @category  Text
 * @package   Text_Normalize
 * @author    Nicolas Thouvenin <nthouvenin@gmail.com>
 * @copyright 2008 Nicolas Thouvenin
 * @license   http://opensource.org/licenses/lgpl-license.php LGPL
 * @link      http://www.touv.fr/spip.php?id_article=145
 */
class Text_Normalize_Symbols_Sbt extends Text_Normalize_Symbols
{
    static $data = array(
        100=>'d',
        10007=>'x',
        101=>'e',
        10102=>'1',
        10103=>'2',
        10104=>'3',
        10105=>'4',
        10106=>'5',
        10107=>'6',
        10108=>'7',
        10109=>'8',
        10110=>'9',
        10111=>'10',
        10112=>'1',
        10113=>'2',
        10114=>'3',
        10115=>'4',
        10116=>'5',
        10117=>'6',
        10118=>'7',
        10119=>'8',
        10120=>'9',
        10121=>'10',
        10122=>'1',
        10123=>'2',
        10124=>'3',
        10125=>'4',
        10126=>'5',
        10127=>'6',
        10128=>'7',
        10129=>'8',
        10130=>'9',
        10131=>'10',
        102=>'f',
        103=>'g',
        104=>'h',
        105=>'i',
        106=>'j',
        107=>'k',
        108=>'l',
        109=>'m',
        110=>'n',
        111=>'o',
        112=>'p',
        113=>'q',
        114=>'r',
        115=>'s',
        116=>'t',
        117=>'u',
        118=>'v',
        119=>'w',
        120=>'x',
        121=>'y',
        122=>'z',
        12297=>'>',
        123=>'{',
        12315=>']',
        124=>'|',
        125=>'}',
        160=>' ',
        161=>'i',
        162=>'c',
        163=>'f',
        165=>'y',
        167=>'s',
        169=>'c',
        170=>'a',
        171=>'<<',
        172=>'-',
        173=>'-',
        174=>'R',
        175=>'-',
        176=>'o',
        177=>'+-',
        178=>'2',
        179=>'3',
        180=>'\'',
        181=>'u',
        182=>'P',
        183=>'.',
        185=>'1',
        186=>'o',
        187=>'>>',
        188=>'1/4',
        189=>'1/2',
        189=>'1/2',
        190=>'3/4',
        191=>'?',
        192=>'A',
        193=>'A',
        194=>'A',
        195=>'A',
        196=>'A',
        197=>'A',
        198=>'AE',
        199=>'C',
        200=>'E',
        201=>'E',
        202=>'E',
        203=>'E',
        204=>'I',
        205=>'I',
        206=>'I',
        207=>'I',
        208=>'D',
        209=>'N',
        210=>'O',
        211=>'O',
        212=>'O',
        213=>'O',
        214=>'O',
        215=>'x',
        216=>'O',
        217=>'U',
        218=>'U',
        219=>'U',
        220=>'U',
        221=>'Y',
        222=>'P',
        223=>'ss',
        224=>'a',
        225=>'a',
        226=>'a',
        227=>'a',
        228=>'a',
        229=>'a',
        230=>'ae',
        231=>'c',
        232=>'e',
        233=>'e',
        234=>'e',
        235=>'e',
        236=>'i',
        237=>'i',
        238=>'i',
        239=>'i',
        240=>'d',
        241=>'n',
        242=>'o',
        243=>'o',
        244=>'o',
        245=>'o',
        246=>'o',
        247=>'/',
        248=>'o',
        249=>'u',
        250=>'u',
        251=>'u',
        252=>'u',
        253=>'y',
        254=>'p',
        255=>'y',
        256=>'A',
        257=>'a',
        258=>'A',
        259=>'a',
        260=>'A',
        261=>'a',
        262=>'C',
        263=>'c',
        264=>'C',
        265=>'c',
        268=>'C',
        269=>'c',
        274=>'E',
        275=>'e',
        278=>'E',
        279=>'e',
        280=>'E',
        281=>'e',
        282=>'E',
        283=>'e',
        284=>'G',
        285=>'g',
        286=>'G',
        287=>'g',
        288=>'G',
        289=>'g',
        290=>'G',
        291=>'g',
        304=>'I',
        305=>'i',
        305=>'i',
        307=>'ij',
        317=>'L',
        318=>'l',
        320=>'l',
        321=>'L',
        322=>'l',
        323=>'N',
        324=>'n',
        327=>'N',
        328=>'n',
        329=>'n',
        33=>'!',
        332=>'O',
        333=>'o',
        337=>'o',
        338=>'OE',
        339=>'oe',
        34=>'"',
        341=>'r',
        344=>'R',
        345=>'r',
        346=>'S',
        347=>'s',
        348=>'S',
        349=>'s',
        35=>'#',
        350=>'S',
        351=>'s',
        352=>'S',
        353=>'s',
        36=>'$',
        360=>'U',
        361=>'u',
        362=>'U',
        363=>'u',
        366=>'U',
        367=>'u',
        368=>'U',
        369=>'u',
        37=>'%',
        372=>'W',
        373=>'w',
        374=>'Y',
        375=>'y',
        376=>'Y',
        377=>'Z',
        378=>'z',
        379=>'Z',
        38=>'&',
        380=>'z',
        381=>'Z',
        382=>'z',
        40=>'(',
        402=>'f',
        41=>')',
        42=>'*',
        42=>'*',
        4260615=>'A',
        4260616=>'A',
        4260619=>'A',
        4260620=>'A',
        4260647=>'A',
        43=>'+',
        4326144=>'B',
        4326145=>'B',
        4326146=>'B',
        4326147=>'B',
        4326148=>'B',
        4326150=>'B',
        4326151=>'B',
        4326152=>'B',
        4326152=>'B',
        4326154=>'B',
        4326155=>'B',
        4326156=>'B',
        4326183=>'B',
        4326184=>'B',
        4391680=>'C',
        4391683=>'C',
        4391684=>'C',
        4391686=>'C',
        4391688=>'C',
        4391688=>'C',
        4391690=>'C',
        4391691=>'C',
        4391720=>'C',
        44=>',',
        4457216=>'D',
        4457217=>'D',
        4457218=>'D',
        4457219=>'D',
        4457220=>'D',
        4457222=>'D',
        4457223=>'D',
        4457224=>'D',
        4457224=>'D',
        4457226=>'D',
        4457227=>'D',
        4457251=>'D',
        4457255=>'D',
        4457256=>'D',
        4522755=>'E',
        4522758=>'E',
        4522760=>'E',
        4522762=>'E',
        4522763=>'E',
        4522791=>'E',
        4588288=>'F',
        4588289=>'F',
        4588290=>'F',
        4588291=>'F',
        4588292=>'F',
        4588294=>'F',
        4588295=>'F',
        4588296=>'F',
        4588296=>'F',
        4588298=>'F',
        4588299=>'F',
        4588300=>'F',
        4588327=>'F',
        4588328=>'F',
        46=>'.',
        4653824=>'G',
        4653825=>'G',
        4653827=>'G',
        4653828=>'G',
        4653832=>'G',
        4653832=>'G',
        4653834=>'G',
        4653835=>'G',
        4653836=>'G',
        4653864=>'G',
        47=>'/',
        4719360=>'H',
        4719361=>'H',
        4719363=>'H',
        4719364=>'H',
        4719366=>'H',
        4719367=>'H',
        4719368=>'H',
        4719368=>'H',
        4719370=>'H',
        4719371=>'H',
        4719372=>'H',
        4719395=>'H',
        4719399=>'H',
        4719400=>'H',
        4784902=>'I',
        4784904=>'I',
        4784906=>'I',
        4784907=>'I',
        4784908=>'I',
        4784935=>'I',
        4850432=>'J',
        4850433=>'J',
        4850435=>'J',
        4850436=>'J',
        4850438=>'J',
        4850439=>'J',
        4850440=>'J',
        4850440=>'J',
        4850442=>'J',
        4850443=>'J',
        4850444=>'J',
        4850471=>'J',
        4850472=>'J',
        4915968=>'K',
        4915969=>'K',
        4915970=>'K',
        4915971=>'K',
        4915972=>'K',
        4915974=>'K',
        4915975=>'K',
        4915976=>'K',
        4915976=>'K',
        4915978=>'K',
        4915979=>'K',
        4915980=>'K',
        4916008=>'K',
        4981504=>'L',
        4981506=>'L',
        4981507=>'L',
        4981508=>'L',
        4981510=>'L',
        4981511=>'L',
        4981512=>'L',
        4981512=>'L',
        4981514=>'L',
        4981515=>'L',
        4981544=>'L',
        5047040=>'M',
        5047041=>'M',
        5047042=>'M',
        5047043=>'M',
        5047044=>'M',
        5047046=>'M',
        5047047=>'M',
        5047048=>'M',
        5047048=>'M',
        5047050=>'M',
        5047051=>'M',
        5047052=>'M',
        5047079=>'M',
        5047080=>'M',
        5112576=>'N',
        5112578=>'N',
        5112580=>'N',
        5112582=>'N',
        5112583=>'N',
        5112584=>'N',
        5112584=>'N',
        5112586=>'N',
        5112587=>'N',
        5112616=>'N',
        5178118=>'O',
        5178119=>'O',
        5178120=>'O',
        5178122=>'O',
        5178124=>'O',
        5178151=>'O',
        5178152=>'O',
        5243648=>'P',
        5243649=>'P',
        5243650=>'P',
        5243651=>'P',
        5243652=>'P',
        5243654=>'P',
        5243655=>'P',
        5243656=>'P',
        5243656=>'P',
        5243658=>'P',
        5243659=>'P',
        5243660=>'P',
        5243687=>'P',
        5243688=>'P',
        5309184=>'Q',
        5309185=>'Q',
        5309186=>'Q',
        5309187=>'Q',
        5309188=>'Q',
        5309190=>'Q',
        5309191=>'Q',
        5309192=>'Q',
        5309192=>'Q',
        5309194=>'Q',
        5309195=>'Q',
        5309196=>'Q',
        5309223=>'Q',
        5309224=>'Q',
        5374720=>'R',
        5374722=>'R',
        5374723=>'R',
        5374724=>'R',
        5374726=>'R',
        5374727=>'R',
        5374728=>'R',
        5374728=>'R',
        5374730=>'R',
        5374731=>'R',
        5374760=>'R',
        5440256=>'S',
        5440259=>'S',
        5440260=>'S',
        5440262=>'S',
        5440263=>'S',
        5440264=>'S',
        5440264=>'S',
        5440266=>'S',
        5440267=>'S',
        5440291=>'S',
        5440296=>'S',
        5505792=>'T',
        5505793=>'T',
        5505794=>'T',
        5505795=>'T',
        5505796=>'T',
        5505798=>'T',
        5505799=>'T',
        5505800=>'T',
        5505800=>'T',
        5505802=>'T',
        5505803=>'T',
        5505827=>'T',
        5505832=>'T',
        5571335=>'U',
        5571336=>'U',
        5571340=>'U',
        5571367=>'U',
        5636864=>'V',
        5636865=>'V',
        5636866=>'V',
        5636867=>'V',
        5636868=>'V',
        5636870=>'V',
        5636871=>'V',
        5636872=>'V',
        5636872=>'V',
        5636874=>'V',
        5636875=>'V',
        5636876=>'V',
        5636903=>'V',
        5636904=>'V',
        5702400=>'W',
        5702401=>'W',
        5702403=>'W',
        5702404=>'W',
        5702406=>'W',
        5702407=>'W',
        5702408=>'W',
        5702408=>'W',
        5702410=>'W',
        5702411=>'W',
        5702412=>'W',
        5702439=>'W',
        5702440=>'W',
        5767936=>'X',
        5767937=>'X',
        5767938=>'X',
        5767939=>'X',
        5767940=>'X',
        5767942=>'X',
        5767943=>'X',
        5767944=>'X',
        5767944=>'X',
        5767946=>'X',
        5767947=>'X',
        5767948=>'X',
        5767975=>'X',
        5767976=>'X',
        58=>':',
        5833472=>'Y',
        5833475=>'Y',
        5833476=>'Y',
        5833478=>'Y',
        5833479=>'Y',
        5833480=>'Y',
        5833482=>'Y',
        5833483=>'Y',
        5833484=>'Y',
        5833511=>'Y',
        5833512=>'Y',
        5899008=>'Z',
        5899010=>'Z',
        5899011=>'Z',
        5899012=>'Z',
        5899014=>'Z',
        5899016=>'Z',
        5899016=>'Z',
        5899018=>'Z',
        5899019=>'Z',
        5899043=>'Z',
        5899047=>'Z',
        5899048=>'Z',
        59=>';',
        60=>'<',
        603=>'e',
        60556036=>'M',
        61=>'=',
        62=>'>',
        62128898=>'d',
        62128899=>'d',
        62128903=>'d',
        62194435=>'e',
        62194436=>'e',
        62522116=>'k',
        62980867=>'r',
        62980868=>'r',
        63=>'?',
        6357767=>'a',
        6357768=>'a',
        6357771=>'a',
        6357772=>'a',
        6357799=>'a',
        64=>'@',
        6423297=>'b',
        6423298=>'b',
        6423299=>'b',
        6423300=>'b',
        6423302=>'b',
        6423303=>'b',
        6423304=>'b',
        6423304=>'b',
        6423306=>'b',
        6423307=>'b',
        6423308=>'b',
        6423335=>'b',
        6423336=>'b',
        64256=>'ff',
        64257=>'fi',
        64258=>'fl',
        64259=>'ffi',
        64260=>'ffl',
        6488832=>'c',
        6488835=>'c',
        6488836=>'c',
        6488838=>'c',
        6488840=>'c',
        6488840=>'c',
        6488842=>'c',
        6488843=>'c',
        6488872=>'c',
        65=>'A',
        6554368=>'d',
        6554369=>'d',
        6554370=>'d',
        6554371=>'d',
        6554372=>'d',
        6554374=>'d',
        6554375=>'d',
        6554376=>'d',
        6554376=>'d',
        6554378=>'d',
        6554379=>'d',
        6554403=>'d',
        6554407=>'d',
        6554408=>'d',
        66=>'B',
        6619907=>'e',
        6619910=>'e',
        6619912=>'e',
        6619914=>'e',
        6619915=>'e',
        6619943=>'e',
        6685440=>'f',
        6685441=>'f',
        6685442=>'f',
        6685443=>'f',
        6685444=>'f',
        6685446=>'f',
        6685447=>'f',
        6685448=>'f',
        6685448=>'f',
        6685450=>'f',
        6685451=>'f',
        6685452=>'f',
        6685479=>'f',
        6685480=>'f',
        67=>'C',
        6750976=>'g',
        6750979=>'g',
        6750980=>'g',
        6750984=>'g',
        6750984=>'g',
        6750986=>'g',
        6750988=>'g',
        6751016=>'g',
        68=>'D',
        6816512=>'h',
        6816513=>'h',
        6816515=>'h',
        6816516=>'h',
        6816518=>'h',
        6816519=>'h',
        6816520=>'h',
        6816520=>'h',
        6816522=>'h',
        6816523=>'h',
        6816524=>'h',
        6816547=>'h',
        6816551=>'h',
        6816552=>'h',
        6882054=>'i',
        6882055=>'i',
        6882056=>'i',
        6882058=>'i',
        6882059=>'i',
        6882060=>'i',
        6882087=>'i',
        69=>'E',
        6947584=>'j',
        6947585=>'j',
        6947587=>'j',
        6947588=>'j',
        6947590=>'j',
        6947591=>'j',
        6947592=>'j',
        6947592=>'j',
        6947594=>'j',
        6947595=>'j',
        6947596=>'j',
        6947623=>'j',
        6947624=>'j',
        70=>'F',
        700=>'\'',
        7013120=>'k',
        7013121=>'k',
        7013122=>'k',
        7013123=>'k',
        7013124=>'k',
        7013126=>'k',
        7013127=>'k',
        7013128=>'k',
        7013128=>'k',
        7013130=>'k',
        7013131=>'k',
        7013132=>'k',
        7013160=>'k',
        7078656=>'l',
        7078658=>'l',
        7078659=>'l',
        7078660=>'l',
        7078662=>'l',
        7078664=>'l',
        7078664=>'l',
        7078666=>'l',
        7078667=>'l',
        7078696=>'l',
        71=>'G',
        7144192=>'m',
        7144193=>'m',
        7144194=>'m',
        7144195=>'m',
        7144196=>'m',
        7144198=>'m',
        7144199=>'m',
        7144200=>'m',
        7144200=>'m',
        7144202=>'m',
        7144203=>'m',
        7144204=>'m',
        7144231=>'m',
        7144232=>'m',
        72=>'H',
        7209728=>'n',
        7209730=>'n',
        7209732=>'n',
        7209734=>'n',
        7209735=>'n',
        7209736=>'n',
        7209736=>'n',
        7209738=>'n',
        7209739=>'n',
        7209768=>'n',
        7275270=>'o',
        7275272=>'o',
        7275274=>'o',
        7275276=>'o',
        7275303=>'o',
        7275304=>'o',
        73=>'I',
        732=>'~',
        7340800=>'p',
        7340801=>'p',
        7340802=>'p',
        7340803=>'p',
        7340804=>'p',
        7340806=>'p',
        7340807=>'p',
        7340808=>'p',
        7340808=>'p',
        7340810=>'p',
        7340811=>'p',
        7340812=>'p',
        7340839=>'p',
        7340840=>'p',
        74=>'J',
        7406336=>'q',
        7406337=>'q',
        7406338=>'q',
        7406339=>'q',
        7406340=>'q',
        7406342=>'q',
        7406343=>'q',
        7406344=>'q',
        7406344=>'q',
        7406346=>'q',
        7406347=>'q',
        7406348=>'q',
        7406375=>'q',
        7406376=>'q',
        7471872=>'r',
        7471874=>'r',
        7471875=>'r',
        7471876=>'r',
        7471878=>'r',
        7471879=>'r',
        7471880=>'r',
        7471880=>'r',
        7471882=>'r',
        7471883=>'r',
        7471912=>'r',
        75=>'K',
        7537408=>'s',
        7537411=>'s',
        7537412=>'s',
        7537414=>'s',
        7537416=>'s',
        7537416=>'s',
        7537418=>'s',
        7537419=>'s',
        7537443=>'s',
        7537448=>'s',
        76=>'L',
        7602944=>'t',
        7602945=>'t',
        7602946=>'t',
        7602947=>'t',
        7602948=>'t',
        7602950=>'t',
        7602952=>'t',
        7602952=>'t',
        7602954=>'t',
        7602955=>'t',
        7602979=>'t',
        7602984=>'t',
        7668487=>'u',
        7668488=>'u',
        7668492=>'u',
        7668519=>'u',
        77=>'M',
        7734016=>'v',
        7734017=>'v',
        7734018=>'v',
        7734019=>'v',
        7734020=>'v',
        7734022=>'v',
        7734023=>'v',
        7734024=>'v',
        7734024=>'v',
        7734026=>'v',
        7734027=>'v',
        7734028=>'v',
        7734055=>'v',
        7734056=>'v',
        7799552=>'w',
        7799553=>'w',
        7799555=>'w',
        7799556=>'w',
        7799558=>'w',
        7799559=>'w',
        7799560=>'w',
        7799560=>'w',
        7799562=>'w',
        7799563=>'w',
        7799564=>'w',
        7799591=>'w',
        7799592=>'w',
        78=>'N',
        7865088=>'x',
        7865089=>'x',
        7865091=>'x',
        7865092=>'x',
        7865094=>'x',
        7865095=>'x',
        7865096=>'x',
        7865096=>'x',
        7865098=>'x',
        7865099=>'x',
        7865100=>'x',
        7865127=>'x',
        7865128=>'x',
        79=>'O',
        7930624=>'y',
        7930627=>'y',
        7930628=>'y',
        7930630=>'y',
        7930631=>'y',
        7930632=>'y',
        7930634=>'y',
        7930635=>'y',
        7930636=>'y',
        7930663=>'y',
        7930664=>'y',
        7996160=>'z',
        7996162=>'z',
        7996163=>'z',
        7996164=>'z',
        7996166=>'z',
        7996168=>'z',
        7996168=>'z',
        7996170=>'z',
        7996171=>'z',
        7996195=>'z',
        7996199=>'z',
        7996200=>'z',
        80=>'P',
        803=>'.',
        81=>'Q',
        8194=>' ',
        8195=>' ',
        8195=>' ',
        8196=>' ',
        8197=>' ',
        8199=>' ',
        82=>'R',
        8200=>' ',
        8202=>' ',
        8208=>'-',
        8208=>'-',
        8211=>'-',
        8212=>'-',
        8213=>'-',
        8214=>'||',
        8216=>'\'',
        8217=>'\'',
        8217=>'\'',
        8218=>'\'',
        8220=>'"',
        8221=>'"',
        8221=>'"',
        8222=>'"',
        8224=>'+',
        8226=>'.',
        8229=>'..',
        8230=>'...',
        8240=>'%',
        8242=>'\'',
        8243=>'"',
        83=>'S',
        8364=>'C',
        8364=>'euro',
        84=>'T',
        8411=>'t',
        8453=>'%',
        8458=>'g',
        8459=>'H',
        8459=>'H',
        8464=>'I',
        8464=>'I',
        8466=>'L',
        8466=>'L',
        8467=>'l',
        8467=>'l',
        8471=>'P',
        8472=>'P',
        8472=>'P',
        8475=>'R',
        8475=>'R',
        8478=>'rx',
        8482=>'tm',
        8486=>'ohm',
        8487=>'mho',
        8491=>'A',
        8492=>'B',
        8492=>'B',
        8495=>'e',
        8496=>'E',
        8496=>'E',
        8497=>'F',
        8497=>'F',
        8499=>'M',
        8499=>'M',
        85=>'U',
        8500=>'oscr',
        8531=>'1/3',
        8532=>'2/3',
        8533=>'1/5',
        8534=>'2/5',
        8535=>'3/5',
        8536=>'4/5',
        8537=>'1/6',
        8538=>'5/6',
        8539=>'1/8',
        8540=>'3/8',
        8541=>'5/8',
        8542=>'7/8',
        8596=>'<->',
        86=>'V',
        8645=>'u',
        8658=>'rarr',
        8660=>'<=>',
        8660=>'<=>',
        87=>'W',
        8704=>'A',
        8705=>'C',
        8706=>'d',
        8707=>'E',
        8708=>'E',
        8709=>'O',
        8712=>'E',
        8715=>'ni',
        8720=>'U',
        8721=>'E',
        8722=>'-',
        8723=>'-+',
        8724=>'+',
        8726=>'\\',
        8727=>'*',
        8728=>'o',
        8734=>'oo',
        8739=>'|',
        8741=>'||',
        8743=>'^',
        8744=>'or',
        8747=>'f',
        8750=>'f',
        8758=>':',
        8759=>'::',
        8764=>'~',
        8771=>'=',
        8773=>'=',
        8776=>'=',
        8788=>':=',
        88=>'X',
        8800=>'ne',
        8801=>'=',
        8801=>'<<',
        8804=>'<=',
        8805=>'>=',
        8806=>'<=',
        8807=>'>=',
        8810=>'<<',
        8811=>'>>',
        8818=>'<',
        8819=>'>',
        8831=>'>',
        8846=>'u',
        8852=>'T',
        8852=>'u',
        8853=>'oplus',
        8853=>'+',
        8854=>'ominus',
        8855=>'x',
        8855=>'x',
        8856=>'osol',
        8857=>'o',
        8857=>'o',
        8858=>'o',
        8859=>'oast',
        8861=>'o',
        8874=>'Vvdash',
        8896=>'^',
        8897=>'v',
        8899=>'U',
        89=>'Y',
        8901=>'s',
        8903=>'*',
        8907=>'l',
        8909=>'=',
        8918=>'l',
        8920=>'<<<',
        8921=>'>>>',
        8945=>'d',
        8966=>'=',
        90=>'Z',
        91=>'[',
        92=>'\\',
        9251=>'b',
        93=>']',
        94=>'^',
        9416=>'S',
        95=>'_',
        96=>'`',
        9675=>'O',
        9675=>'O',
        97=>'a',
        9708=>'.',
        9711=>'x',
        978=>'Y',
        98=>'b',
        99=>'c',
    );
    // {{{ transform
    /**
     * etabil les correspondances
     *
     * @param string $str
     *
     * @return string
     */
    public function transform($str)
    {
        $out = '';
        $ns = strlen($str);

        // On appauvrie les temres
        for ($nn = 0; $nn < $ns; $nn++) {
            $ch = $str[$nn];
            $ii = $this->ordUTF8 ($ch);
            $ss = $this->get($ii);
			$ent = is_null($ss) ? $ch : $ss;
            $out .= $ent;
        }
        return $out;

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
    public function get($s)
    {
        if (isset(self::$data[$s]))
            return self::$data[$s];
    }
    // }}}

	function ordUTF8($c, $index = 0, &$bytes = null)
	{
	  $len = strlen($c);
	  $bytes = 0;

	  if ($index >= $len)
	    return false;

	  $h = ord($c{$index});

	  if ($h <= 0x7F) {
	    $bytes = 1;
	    return $h;
	  }
	  else if ($h < 0xC2)
	    return false;
	  else if ($h <= 0xDF && $index < $len - 1) {
	    $bytes = 2;
	    return ($h & 0x1F) <<  6 | (ord($c{$index + 1}) & 0x3F);
	  }
	  else if ($h <= 0xEF && $index < $len - 2) {
	    $bytes = 3;
	    return ($h & 0x0F) << 12 | (ord($c{$index + 1}) & 0x3F) << 6
	                             | (ord($c{$index + 2}) & 0x3F);
	  }
	  else if ($h <= 0xF4 && $index < $len - 3) {
	    $bytes = 4;
	    return ($h & 0x0F) << 18 | (ord($c{$index + 1}) & 0x3F) << 12
	                             | (ord($c{$index + 2}) & 0x3F) << 6
	                             | (ord($c{$index + 3}) & 0x3F);
	  }
	  else
	    return false;
	}


}
