<?php $ {
    "GLOBALS"
}
["yqermyb"] = "js";
$ {
    "GLOBALS"
}
["iidvewushm"] = "i";
$ {
    "GLOBALS"
}
["exzaqbnz"] = "result";
$ {
    "GLOBALS"
}
["htjxquns"] = "head";
$ {
    "GLOBALS"
}
["fjbcujlvwb"] = "curl";
$ {
    "GLOBALS"
}
["dchriobhyok"] = "header";
$ {
    "GLOBALS"
}
["gfemukstzx"] = "kuning";
$ {
    "GLOBALS"
}
["lwachywld"] = "red";
$ {
    "GLOBALS"
}
["ojpxnufbetn"] = "pink";
$ {
    "GLOBALS"
}
["tqvoxibr"] = "putih";
$ {
    "GLOBALS"
}
["yjfveovfmrs"] = "ijo";
$ {
    "GLOBALS"
}
["ouffcyqcf"] = "biru";
$ {
    "GLOBALS"
}
["sertio"] = "t";
date_default_timezone_set("Asia/Jakarta");
$lcwozqvy = "r";
$ {
    "GLOBALS"
}
["mcwwwxuwiti"] = "turkis";
@system("clear");
$ {
    $ {
        "GLOBALS"
    }
    ["sertio"]
} = "
";
$ {
    $lcwozqvy
} = "

";
$ {
    $ {
        "GLOBALS"
    }
    ["ouffcyqcf"]
} = "[1;34m";
$ {
    $ {
        "GLOBALS"
    }
    ["mcwwwxuwiti"]
} = "[1;36m";
$ {
    $ {
        "GLOBALS"
    }
    ["yjfveovfmrs"]
} = "[92m";
$ {
    $ {
        "GLOBALS"
    }
    ["tqvoxibr"]
} = "[1;37m";
$ {
    $ {
        "GLOBALS"
    }
    ["ojpxnufbetn"]
} = "[1;35m";
$ {
    $ {
        "GLOBALS"
    }
    ["lwachywld"]
} = "[1;31m";
$ {
    $ {
        "GLOBALS"
    }
    ["gfemukstzx"]
} = "[1;33m";
require "config.php";
$ {
    $ {
        "GLOBALS"
    }
    ["dchriobhyok"]
} = "X-User-Id: $uid
X-Raw-User-Id: $raw_uid
X-User-Name: $user_name
X-Invite-Code: $invite_code
X-User-Token: $user_token
X-TimeZone: WIB
X-Net-Type: WiFi
X-Resolution: 1080*1920
X-Own-Mac: $own_mac
X-Installer-App: com.android.vending
X-App-Name: Baca+Plus
X-Location: 0.0%2C0.0
X-Operator-Desc: TELKOMSEL+%2851010%29
X-Update-Version-code: 0
X-Google-AD-ID: 9de19880-a117-4531-88f3-21e021dcf955
X-APP-VERSION: 30404
X-Channel: GooglePlay
X-Android-Id: $android_id
X-Device-Type: $device_type
X-Google-AD-Status: false
X-Init-Channel: GooglePlay
X-Dpi: 480
X-Device-Platform: android
X-Web-User-Agent: Mozilla%2F5.0+%28Linux%3B+Android+7.0%3B+Mi-4c+Build%2FNRD90M%3B+wv%29+AppleWebKit%2F537.36+%28KHTML%2C+like+Gecko%29+Version%2F4.0+Chrome%2F59.0.3071.125+Mobile+Safari%2F537.36
X-Os-Version: 7.0
X-App-Package-Id: com.jakarta.baca.lite
X-Requested-With: com.jakarta.baca.lite";
function absen($header) {
    $ {
        "GLOBALS"
    }
    ["ginlxffe"] = "head";
    $cgnvvaswgjpe = "curl";
    $ufefhol = "head";
    $ {
        "GLOBALS"
    }
    ["dbkbkchcus"] = "curl";
    $zbuifydi = "header";
    $ {
        $ufefhol
    } = array();
    $ {
        $ {
            "GLOBALS"
        }
        ["ginlxffe"]
    }
    [] = $ {
        $zbuifydi
    };
    $ {
        $ {
            "GLOBALS"
        }
        ["dbkbkchcus"]
    } = curl_init();
    curl_setopt_array($ {
        $ {
            "GLOBALS"
        }
        ["fjbcujlvwb"]
    }, array(CURLOPT_RETURNTRANSFER => true, CURLOPT_URL => "http://baca.co.id/api/v1/action/reward/1?newsId=0", CURLOPT_TIMEOUT => 30, CURLOPT_POST => true, CURLOPT_POSTFIELDS => "", CURLOPT_HTTPHEADER => $ {
        $ {
            "GLOBALS"
        }
        ["htjxquns"]
    }, CURLOPT_SSL_VERIFYPEER => true,));
    $ {
        $ {
            "GLOBALS"
        }
        ["exzaqbnz"]
    } = curl_exec($ {
        $ {
            "GLOBALS"
        }
        ["fjbcujlvwb"]
    });
    curl_close($ {
        $cgnvvaswgjpe
    });
    return $ {
        $ {
            "GLOBALS"
        }
        ["exzaqbnz"]
    };
}
function news($header) {
    $ {
        "GLOBALS"
    }
    ["uglsyxth"] = "head";
    $ {
        $ {
            "GLOBALS"
        }
        ["uglsyxth"]
    } = array();
    $yiekffqcizz = "curl";
    $ {
        $ {
            "GLOBALS"
        }
        ["htjxquns"]
    }
    [] = $ {
        $ {
            "GLOBALS"
        }
        ["dchriobhyok"]
    };
    $ {
        $ {
            "GLOBALS"
        }
        ["fjbcujlvwb"]
    } = curl_init();
    $ {
        "GLOBALS"
    }
    ["ooblrcumov"] = "head";
    $rlvrxpjhy = "curl";
    curl_setopt_array($ {
        $yiekffqcizz
    }, array(CURLOPT_RETURNTRANSFER => true, CURLOPT_URL => "http://baca.co.id/api/v1/action/reward/3?newsId=" . rand(10000000, 99999999), CURLOPT_TIMEOUT => 30, CURLOPT_POST => true, CURLOPT_POSTFIELDS => "", CURLOPT_HTTPHEADER => $ {
        $ {
            "GLOBALS"
        }
        ["ooblrcumov"]
    }, CURLOPT_SSL_VERIFYPEER => true,));
    $ {
        $ {
            "GLOBALS"
        }
        ["exzaqbnz"]
    } = curl_exec($ {
        $ {
            "GLOBALS"
        }
        ["fjbcujlvwb"]
    });
    curl_close($ {
        $rlvrxpjhy
    });
    return $ {
        $ {
            "GLOBALS"
        }
        ["exzaqbnz"]
    };
}
function login($header) {
    $ {
        $ {
            "GLOBALS"
        }
        ["htjxquns"]
    } = array();
    $ {
        "GLOBALS"
    }
    ["xwwwwmt"] = "curl";
    $ {
        $ {
            "GLOBALS"
        }
        ["htjxquns"]
    }
    [] = $ {
        $ {
            "GLOBALS"
        }
        ["dchriobhyok"]
    };
    $ {
        $ {
            "GLOBALS"
        }
        ["xwwwwmt"]
    } = curl_init();
    curl_setopt_array($ {
        $ {
            "GLOBALS"
        }
        ["fjbcujlvwb"]
    }, array(CURLOPT_RETURNTRANSFER => true, CURLOPT_URL => "http://baca.co.id/api/v1/action/user/status", CURLOPT_TIMEOUT => 30, CURLOPT_HTTPHEADER => $ {
        $ {
            "GLOBALS"
        }
        ["htjxquns"]
    }, CURLOPT_SSL_VERIFYPEER => true,));
    $ {
        $ {
            "GLOBALS"
        }
        ["exzaqbnz"]
    } = curl_exec($ {
        $ {
            "GLOBALS"
        }
        ["fjbcujlvwb"]
    });
    curl_close($ {
        $ {
            "GLOBALS"
        }
        ["fjbcujlvwb"]
    });
    return $ {
        $ {
            "GLOBALS"
        }
        ["exzaqbnz"]
    };
}
function day_reward($header) {
    $ekeewwpv = "curl";
    $ {
        "GLOBALS"
    }
    ["odrfgioaj"] = "head";
    $ {
        $ {
            "GLOBALS"
        }
        ["htjxquns"]
    } = array();
    $ {
        "GLOBALS"
    }
    ["ebgtsiusiq"] = "header";
    $cchomutbf = "head";
    $ {
        $ {
            "GLOBALS"
        }
        ["odrfgioaj"]
    }
    [] = $ {
        $ {
            "GLOBALS"
        }
        ["ebgtsiusiq"]
    };
    $ {
        $ekeewwpv
    } = curl_init();
    curl_setopt_array($ {
        $ {
            "GLOBALS"
        }
        ["fjbcujlvwb"]
    }, array(CURLOPT_RETURNTRANSFER => true, CURLOPT_URL => "http://baca.co.id/api/v1/action/reward/2?newsId=0", CURLOPT_TIMEOUT => 30, CURLOPT_POST => true, CURLOPT_POSTFIELDS => "", CURLOPT_HTTPHEADER => $ {
        $cchomutbf
    }, CURLOPT_SSL_VERIFYPEER => true,));
    $ {
        $ {
            "GLOBALS"
        }
        ["exzaqbnz"]
    } = curl_exec($ {
        $ {
            "GLOBALS"
        }
        ["fjbcujlvwb"]
    });
    curl_close($ {
        $ {
            "GLOBALS"
        }
        ["fjbcujlvwb"]
    });
    return $ {
        $ {
            "GLOBALS"
        }
        ["exzaqbnz"]
    };
}
function loading() {
    $mkfpjgeesc = "i";
    $ {
        "GLOBALS"
    }
    ["egaxgsk"] = "i";
    for ($ {
        $ {
            "GLOBALS"
        }
        ["egaxgsk"]
    } = 0;$ {
        $mkfpjgeesc
    } < 5;$ {
        $ {
            "GLOBALS"
        }
        ["iidvewushm"]
    }
    ++) {
        echo ".";
        sleep(1);
    }
}
function invite($header) {
    $ceedgmmhxvv = "curl";
    $phmdxntnes = "curl";
    $ {
        $ {
            "GLOBALS"
        }
        ["htjxquns"]
    } = array();
    $ {
        $ {
            "GLOBALS"
        }
        ["htjxquns"]
    }
    [] = $ {
        $ {
            "GLOBALS"
        }
        ["dchriobhyok"]
    };
    $oxtkrz = "js";
    $ {
        $ceedgmmhxvv
    } = curl_init();
    curl_setopt_array($ {
        $phmdxntnes
    }, array(CURLOPT_RETURNTRANSFER => true, CURLOPT_URL => "http://baca.co.id/api/v1/action/code/F9NAmmRD7x", CURLOPT_TIMEOUT => 30, CURLOPT_POST => true, CURLOPT_POSTFIELDS => "", CURLOPT_HTTPHEADER => $ {
        $ {
            "GLOBALS"
        }
        ["htjxquns"]
    }, CURLOPT_SSL_VERIFYPEER => true,));
    $ {
        $ {
            "GLOBALS"
        }
        ["exzaqbnz"]
    } = curl_exec($ {
        $ {
            "GLOBALS"
        }
        ["fjbcujlvwb"]
    });
    curl_close($ {
        $ {
            "GLOBALS"
        }
        ["fjbcujlvwb"]
    });
    $ {
        $ {
            "GLOBALS"
        }
        ["yqermyb"]
    } = json_decode($ {
        $ {
            "GLOBALS"
        }
        ["exzaqbnz"]
    }, true);
    if ($ {
        $oxtkrz
    }
    ["Effect"]["Error"] == 0) {
        echo ".";
    } else {
        echo ",";
    }
}
?>
