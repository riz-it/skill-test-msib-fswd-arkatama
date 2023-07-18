<?php
if (!function_exists('core')) {
    function css($str)
    {
        $css = '';
        if (is_array($str)) {
            foreach ($str as $s) {
                if (filter_var($s, FILTER_VALIDATE_URL)) {
                    $css .= '<link href="' . $s . '" rel="stylesheet">';
                } else {
                    $css .= '<link href="' . base_url() . '/assets/' . $s . '" rel="stylesheet">';
                }
            }
        } else {
            if (filter_var($str, FILTER_VALIDATE_URL)) {
                $css .= '<link href="' . $str . '" rel="stylesheet">';
            } else {
                $css .= '<link href="' . base_url() . '/assets/' . $str . '" rel="stylesheet">';
            }
        }
        return $css;
    }

    function js($str)
    {
        $js = '';
        if (is_array($str)) {
            foreach ($str as $s) {
                if (filter_var($s, FILTER_VALIDATE_URL)) {
                    $js .= '<script src="' . $s . '"></script>';
                } else {
                    $js .= '<script src="' . base_url() . '/assets/' . $s . '"></script>';
                }
            }
        } else {
            if (filter_var($str, FILTER_VALIDATE_URL)) {
                $js .= '<script src="' . $str . '"></script>';
            } else {
                $js .= '<script src="' . base_url() . '/assets/' . $str . '"></script>';
            }
        }
        return $js;
    }

    function fetchData($param)
    {
        $key = ["tahun", "thn", "th"];
        $output = str_replace($key, "", strtolower($param));
        $pattern = '/\s+/';
        $result = preg_replace($pattern, ' ', $output);
        return $result;
    }

    function fetchUmur($param)
    {
        preg_match_all('/\d+/', $param, $matches);
        $angka = $matches[0];
        return $angka[0];
    }

    function fetchKota($param) {
        $noNumber = preg_replace('/\d+/', ';', $param);
        
        return preg_replace('/\s*;\s*/', ';', $noNumber);
    }
}
