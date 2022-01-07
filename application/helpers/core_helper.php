<?php defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';
use Carbon\Carbon;

Carbon::setlocale('tr_TR');

if (!function_exists('pre')) {
    function pre($val)
    {
        echo "<pre>";
        print_r($val);
        echo "</pre>";
    }
}

if (!function_exists('prex')) {
    function prex($val)
    {
        echo "<pre>";
        print_r($val);
        echo "</pre>";
        exit;
    }
}

if (!function_exists('pre_dump')) {
    function pre_dump($val)
    {
        echo "<pre>";
        print_r(var_dump($val));
        echo "</pre>";
    }
}

if (!function_exists('prex_dump')) {
    function prex_dump($val)
    {
        echo "<pre>";
        print_r(var_dump($val));
        echo "</pre>";
        exit;
    }
}

if (!function_exists('getIpAddress')) {
    function getIpAddress()
    {
        if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)
            && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',') > 0) {
                $addr = explode(",", $_SERVER['HTTP_X_FORWARDED_FOR']);
                return trim($addr[0]);
            } else {
                return $_SERVER['HTTP_X_FORWARDED_FOR'];
            }
        } else {
            return $_SERVER['REMOTE_ADDR'];
        }
    }
}

if (!function_exists('url_seo')) {
    function url_seo($str, $options = array())
    {
        $str      = mb_convert_encoding((string) $str, 'UTF-8', mb_list_encodings());
        $defaults = array('delimiter' => '-', 'limit' => null, 'lowercase' => true, 'transliterate' => true);
        $options  = array_merge($defaults, $options);
        $dmr      = $defaults["delimiter"];
        $char_map = array(
            // Latin
            'À' => 'A', 'Á'  => 'A', ' '  => $dmr, 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'AE', 'Ç' => 'C',
            'È' => 'E', 'É'  => 'E', 'Ê'  => 'E', 'Ë'  => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï'  => 'I',
            'Ð' => 'D', 'Ñ'  => 'N', 'Ò'  => 'O', 'Ó'  => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ő'  => 'O',
            'Ø' => 'O', 'Ù'  => 'U', 'Ú'  => 'U', 'Û'  => 'U', 'Ü' => 'U', 'Ű' => 'U', 'Ý' => 'Y', 'Þ'  => 'TH',
            'ß' => 'ss',
            'à' => 'a', 'á'  => 'a', 'â'  => 'a', 'ã'  => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'ae', 'ç' => 'c',
            'è' => 'e', 'é'  => 'e', 'ê'  => 'e', 'ë'  => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï'  => 'i',
            'ð' => 'd', 'ñ'  => 'n', 'ò'  => 'o', 'ó'  => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ő'  => 'o',
            'ø' => 'o', 'ù'  => 'u', 'ú'  => 'u', 'û'  => 'u', 'ü' => 'u', 'ű' => 'u', 'ý' => 'y', 'þ'  => 'th',
            'ÿ' => 'y',
            // Latin symbols
            '©' => '(c)',
            // Greek
            'Α' => 'A', 'Β'  => 'B', 'Γ'  => 'G', 'Δ'  => 'D', 'Ε' => 'E', 'Ζ' => 'Z', 'Η' => 'H', 'Θ'  => '8',
            'Ι' => 'I', 'Κ'  => 'K', 'Λ'  => 'L', 'Μ'  => 'M', 'Ν' => 'N', 'Ξ' => '3', 'Ο' => 'O', 'Π'  => 'P',
            'Ρ' => 'R', 'Σ'  => 'S', 'Τ'  => 'T', 'Υ'  => 'Y', 'Φ' => 'F', 'Χ' => 'X', 'Ψ' => 'PS', 'Ω' => 'W',
            'Ά' => 'A', 'Έ'  => 'E', 'Ί'  => 'I', 'Ό'  => 'O', 'Ύ' => 'Y', 'Ή' => 'H', 'Ώ' => 'W', 'Ϊ'  => 'I',
            'Ϋ' => 'Y',
            'α' => 'a', 'β'  => 'b', 'γ'  => 'g', 'δ'  => 'd', 'ε' => 'e', 'ζ' => 'z', 'η' => 'h', 'θ'  => '8',
            'ι' => 'i', 'κ'  => 'k', 'λ'  => 'l', 'μ'  => 'm', 'ν' => 'n', 'ξ' => '3', 'ο' => 'o', 'π'  => 'p',
            'ρ' => 'r', 'σ'  => 's', 'τ'  => 't', 'υ'  => 'y', 'φ' => 'f', 'χ' => 'x', 'ψ' => 'ps', 'ω' => 'w',
            'ά' => 'a', 'έ'  => 'e', 'ί'  => 'i', 'ό'  => 'o', 'ύ' => 'y', 'ή' => 'h', 'ώ' => 'w', 'ς'  => 's',
            'ϊ' => 'i', 'ΰ'  => 'y', 'ϋ'  => 'y', 'ΐ'  => 'i',
            // Turkish
            'Ş' => 'S', 'İ'  => 'I', 'Ç'  => 'C', 'Ü'  => 'U', 'Ö' => 'O', 'Ğ' => 'G',
            'ş' => 's', 'ı'  => 'i', 'ç'  => 'c', 'ü'  => 'u', 'ö' => 'o', 'ğ' => 'g',
            // Russian
            'А' => 'A', 'Б'  => 'B', 'В'  => 'V', 'Г'  => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'Yo', 'Ж' => 'Zh',
            'З' => 'Z', 'И'  => 'I', 'Й'  => 'J', 'К'  => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О'  => 'O',
            'П' => 'P', 'Р'  => 'R', 'С'  => 'S', 'Т'  => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц'  => 'C',
            'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sh', 'Ъ' => '', 'Ы'  => 'Y', 'Ь' => '', 'Э'  => 'E', 'Ю'  => 'Yu',
            'Я' => 'Ya',
            'а' => 'a', 'б'  => 'b', 'в'  => 'v', 'г'  => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh',
            'з' => 'z', 'и'  => 'i', 'й'  => 'j', 'к'  => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о'  => 'o',
            'п' => 'p', 'р'  => 'r', 'с'  => 's', 'т'  => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц'  => 'c',
            'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sh', 'ъ' => '', 'ы'  => 'y', 'ь' => '', 'э'  => 'e', 'ю'  => 'yu',
            'я' => 'ya',
            // Ukrainian
            'Є' => 'Ye', 'І' => 'I', 'Ї'  => 'Yi', 'Ґ' => 'G',
            'є' => 'ye', 'і' => 'i', 'ї'  => 'yi', 'ґ' => 'g',
            // Czech
            'Č' => 'C', 'Ď'  => 'D', 'Ě'  => 'E', 'Ň'  => 'N', 'Ř' => 'R', 'Š' => 'S', 'Ť' => 'T', 'Ů'  => 'U',
            'Ž' => 'Z',
            'č' => 'c', 'ď'  => 'd', 'ě'  => 'e', 'ň'  => 'n', 'ř' => 'r', 'š' => 's', 'ť' => 't', 'ů'  => 'u',
            'ž' => 'z',
            // Polish
            'Ą' => 'A', 'Ć'  => 'C', 'Ę'  => 'e', 'Ł'  => 'L', 'Ń' => 'N', 'Ó' => 'o', 'Ś' => 'S', 'Ź'  => 'Z',
            'Ż' => 'Z',
            'ą' => 'a', 'ć'  => 'c', 'ę'  => 'e', 'ł'  => 'l', 'ń' => 'n', 'ó' => 'o', 'ś' => 's', 'ź'  => 'z',
            'ż' => 'z',
            // Latvian
            'Ā' => 'A', 'Č'  => 'C', 'Ē'  => 'E', 'Ģ'  => 'G', 'Ī' => 'i', 'Ķ' => 'k', 'Ļ' => 'L', 'Ņ'  => 'N',
            'Š' => 'S', 'Ū'  => 'u', 'Ž'  => 'Z',
            'ā' => 'a', 'č'  => 'c', 'ē'  => 'e', 'ģ'  => 'g', 'ī' => 'i', 'ķ' => 'k', 'ļ' => 'l', 'ņ'  => 'n',
            'š' => 's', 'ū'  => 'u', 'ž'  => 'z',
        );
        if ($options['transliterate']) {
            $str = str_replace(array_keys($char_map), $char_map, $str);
        }
        $str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);
        $str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);
        $str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');
        $str = trim($str, $options['delimiter']);
        return $options['lowercase'] ? mb_strtolower($str, 'UTF-8') : $str;
    }

    if (!function_exists('clear')) {
        function clear($val)
        {
            $search  = array('<table>', '</table>');
            $replace = array('', '');
            return str_replace($search, $replace, $val);
        }
    }
}

if (!function_exists('create_pagination_config')) {
    function create_pagination_config($data)
    {

        $config                       = [];
        $config['base_url']           = $data->url;
        $config['total_rows']         = $data->total_rows;
        $config['per_page']           = $data->page;
        $config['use_page_numbers']   = true;
        $config['page_query_string']  = false;
        $config['reuse_query_string'] = true;
        $config['first_link']         = 'İlk';
        $config['last_link']          = 'Son';
        $config['first_tag_open']     = '<li class="page-item" aria-current="page"><span class="page-link">';
        $config['first_tag_close']    = '</span></li>';
        $config['last_tag_open']      = '<li class="page-item" aria-current="page"><span class="page-link">';
        $config['last_tag_close']     = '</span></li>';
        $config['next_tag_open']      = '<li class="page-item" aria-current="page"><span class="page-link">';
        $config['next_tag_close']     = '</span></li>';
        $config['prev_tag_open']      = '<li class="page-item" aria-current="page"><span class="page-link">';
        $config['prev_tag_close']     = '</span></li>';
        $config['cur_tag_open']       = '<li class="page-item active" aria-current="page"><span class="page-link">';
        $config['cur_tag_close']      = '</span></li>';
        $config['num_tag_open']       = '<li class="page-item" aria-current="page"><span class="page-link">';
        $config['num_tag_close']      = '</span></li>';
        $config['full_tag_open']      = '<div class="pagination"><nav aria-label="..."><ul class="pagination pagination-sm">';
        $config['full_tag_close']     = '</ul></nav></div>';
        return $config;
    }
}

if (!function_exists('array_to_object')) {
    function array_to_object($array)
    {
        $object = new stdClass();
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $value = array_to_object($value);
            }
            $object->$key = $value;
        }
        return $object;
    }
}



if (!function_exists('fav_and_app_icons')) {
    function fav_and_app_icons(): string
    {
        $folder = 'site_url';
        return <<<HTML
                <link rel="apple-touch-icon" sizes="57x57" href="{$folder('assets/front/favicon/apple-icon-57x57.png')}">
                <link rel="apple-touch-icon" sizes="60x60" href="{$folder('assets/front/favicon/apple-icon-60x60.png')}">
                <link rel="apple-touch-icon" sizes="72x72" href="{$folder('assets/front/favicon/apple-icon-72x72.png')}">
                <link rel="apple-touch-icon" sizes="76x76" href="{$folder('assets/front/favicon/apple-icon-76x76.png')}">
                <link rel="apple-touch-icon" sizes="114x114" href="{$folder('assets/front/favicon/apple-icon-114x114.png')}">
                <link rel="apple-touch-icon" sizes="120x120" href="{$folder('assets/front/favicon/apple-icon-120x120.png')}">
                <link rel="apple-touch-icon" sizes="144x144" href="{$folder('assets/front/favicon/apple-icon-144x144.png')}">
                <link rel="apple-touch-icon" sizes="152x152" href="{$folder('assets/front/favicon/apple-icon-152x152.png')}">
                <link rel="apple-touch-icon" sizes="180x180" href="{$folder('assets/front/favicon/apple-icon-180x180.png')}">
                <link rel="icon" type="image/png" sizes="192x192" href="{$folder('assets/front/favicon/android-icon-192x192.png')}">
                <link rel="icon" type="image/png" sizes="32x32" href="{$folder('assets/front/favicon/favicon-32x32.png')}">
                <link rel="icon" type="image/png" sizes="96x96" href="{$folder('assets/front/favicon/favicon-96x96.png')}">
                <link rel="icon" type="image/png" sizes="16x16" href="{$folder('assets/front/favicon/favicon-16x16.png')}">
                <link rel="manifest" href="{$folder('assets/front/favicon/manifest.json')}">
                <meta name="msapplication-TileImage" content="{$folder('assets/front/favicon/ms-icon-144x144.png')}'">
                <meta name="msapplication-TileColor" content="#ffffff">
                <meta name="theme-color" content="#ffffff">
        HTML;
    }
}

if (!function_exists('webp_support')) {
    function webp_support($image)
    {
        if( strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) == true ) {
            $checkimage = $image.'.webp';
            // webp is supported!
        }
        if( strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) == false ) {
            $checkimage = $image;
        }
        return $checkimage;
    }
}

if (!function_exists('get_months')) {
    function get_months($val)
    {
        $months = [
            '01' => 'Ocak',
            '02' => 'Şubat',
            '03' => 'Mart',
            '04' => 'Nisan',
            '05' => 'Mayıs',
            '06' => 'Haziran',
            '07' => 'Temmuz',
            '08' => 'Ağustos',
            '09' => 'Eylül',
            '10' => 'Ekim',
            '11' => 'Kasım',
            '12' => 'Aralık'
        ];

        return $months[$val];
    }
}

if (!function_exists('current_date')) {
    function current_date()
    {
        $date = Carbon::now();
        $date->toISO8601String();
        return $date->tz('Europe/Istanbul')->toDateTimeString();
    }
}