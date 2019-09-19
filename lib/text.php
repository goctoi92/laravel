<?php
namespace Lib;

class Text {

    static function cleanString($text) {
        // 1) convert á ô => a o
        $text = preg_replace("/[áàảãạăắằẳẵặâấầẩẫậ]/u","a",$text);
        $text = preg_replace("/[ÁÀẢÃẠĂẮẰẲẴẶÂẤẦẨẪẬ]/u","A",$text);
        $text = preg_replace("/[ÍÌÎÏỈĨỊ]/u","I",$text);
        $text = preg_replace("/[íìîïỉĩị]/u","i",$text);
        $text = preg_replace("/[éèẻẽẹêếếềểễệë]/u","e",$text);
        $text = preg_replace("/[ÉÈẺẼẸÊẾẾỀỂỄỆË]/u","E",$text);
        $text = preg_replace("/[óòọỏôộốồổỗõºöơợờớởỡ]/u","o",$text);
        $text = preg_replace("/[ÓÒỌỎÔỘỐỒỔỖÕºÖƠỢỜỚỞỠ]/u","O",$text);
        $text = preg_replace("/[úùûüưừứựửữủũửụủ]/u","u",$text);
        $text = preg_replace("/[ÚÙÛÜƯỪỨỰỬỮỦŨỬỤỦ]/u","U",$text);
        $text = preg_replace("/[đ]/u","d",$text);
        $text = preg_replace("/[Đ]/u","D",$text);
        $text = preg_replace("/[ỹỷỳýỵ]/u","y",$text);
        $text = preg_replace("/[ỸỶỲÝỴ]/u","Y",$text);
        $text = preg_replace("/[’‘‹›‚]/u","'",$text);
        $text = preg_replace("/[“”«»„]/u",'"',$text);
        $text = str_replace("–","-",$text);
        $text = str_replace(" "," ",$text);
        $text = str_replace("ç","c",$text);
        $text = str_replace("Ç","C",$text);
        $text = str_replace("ñ","n",$text);
        $text = str_replace("Ñ","N",$text);

        //2) Translation CP1252. &ndash; => -
        $trans = get_html_translation_table(HTML_ENTITIES);
        $trans[chr(130)] = '&sbquo;';    // Single Low-9 Quotation Mark
        $trans[chr(131)] = '&fnof;';    // Latin Small Letter F With Hook
        $trans[chr(132)] = '&bdquo;';    // Double Low-9 Quotation Mark
        $trans[chr(133)] = '&hellip;';    // Horizontal Ellipsis
        $trans[chr(134)] = '&dagger;';    // Dagger
        $trans[chr(135)] = '&Dagger;';    // Double Dagger
        $trans[chr(136)] = '&circ;';    // Modifier Letter Circumflex Accent
        $trans[chr(137)] = '&permil;';    // Per Mille Sign
        $trans[chr(138)] = '&Scaron;';    // Latin Capital Letter S With Caron
        $trans[chr(139)] = '&lsaquo;';    // Single Left-Pointing Angle Quotation Mark
        $trans[chr(140)] = '&OElig;';    // Latin Capital Ligature OE
        $trans[chr(145)] = '&lsquo;';    // Left Single Quotation Mark
        $trans[chr(146)] = '&rsquo;';    // Right Single Quotation Mark
        $trans[chr(147)] = '&ldquo;';    // Left Double Quotation Mark
        $trans[chr(148)] = '&rdquo;';    // Right Double Quotation Mark
        $trans[chr(149)] = '&bull;';    // Bullet
        $trans[chr(150)] = '&ndash;';    // En Dash
        $trans[chr(151)] = '&mdash;';    // Em Dash
        $trans[chr(152)] = '&tilde;';    // Small Tilde
        $trans[chr(153)] = '&trade;';    // Trade Mark Sign
        $trans[chr(154)] = '&scaron;';    // Latin Small Letter S With Caron
        $trans[chr(155)] = '&rsaquo;';    // Single Right-Pointing Angle Quotation Mark
        $trans[chr(156)] = '&oelig;';    // Latin Small Ligature OE
        $trans[chr(159)] = '&Yuml;';    // Latin Capital Letter Y With Diaeresis
        $trans['euro'] = '&euro;';    // euro currency symbol
        ksort($trans);

        foreach ($trans as $k => $v) {
            $text = str_replace($v, $k, $text);
        }

        $text = strip_tags($text);

        // 4) &amp; => & &quot; => '
        $text = html_entity_decode($text);

        $text = preg_replace('/[^(\x20-\x7F)]*/','', $text);

        $targets=array('\r\n','\n','\r','\t');
        $results=array(" "," "," ","");
        $text = str_replace($targets,$results,$text);

        return ($text);
    }

    static function rewriteTitle($text)
    {
        $text = self::cleanString($text);
        $text = preg_replace("/[^a-zA-Z0-9]/", "-", $text);
        $text = preg_replace("/-{2,}/", "-", $text);
        $text = trim($text, '-');
        $text = strtolower($text);
        return $text;
    }

    static function cate_parent($data,$parent = 0, $str = '',$select = 0){
        foreach ($data as $item){
            $name = $item['name'];
            $id = $item['id'];
            if ($item['parent_id'] == $parent){
                if ($select != 0 && $id == $select)
                    echo "<option selected='selected' value='$id'>$str $name</option>";
                else
                    echo "<option value='$id'>$str $name</option>";
                self::cate_parent($data,$id,$str.'----');
            }
        }
    }
}
