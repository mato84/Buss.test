<?php
/*
LiveImport (c) MaxD, 2017. Write to liveimport@devs.mx for support and purchase.
*/
 goto c465; D9ce: $E6b = HTTP_CATALOG; b137: echo "\xd\12\40\40\x20\40\x3c\x73\143\162\x69\160\x74\40\x74\171\160\145\x3d\47\x74\x65\170\x74\x2f\152\141\166\x61\x73\143\x72\x69\160\164\x27\x3e\15\xa\x20\x20\x20\40\x20\x20\40\40\x69\x66\x20\50\167\x69\x6e\x64\157\167\56\157\x70\x65\x6e\x65\x72\40\x26\46\40\50\x20\167\x69\x6e\x64\157\x77\56\157\x70\x65\x6e\145\x72\x2e\x6c\157\x63\x61\164\151\157\x6e\56\150\x72\x65\146\x2e\x69\156\x64\x65\170\x4f\146\x28\47" . domain(HTTPS_SERVER) . "\x27\x29\41\x3d\55\x31\x20\x29\x20\x29\xd\12\40\40\x20\40\40\40\40\40\x20\x20\x20\40\x77\151\156\x64\157\x77\x2e\x63\x6c\x6f\x73\x65\50\x29\x3b\15\12\40\x20\x20\40\x20\40\x20\x20\167\x69\x6e\144\x6f\x77\56\154\x6f\x63\x61\164\151\x6f\x6e\x3d\x27{$E6b}\47\x3b\15\12\15\xa\x20\x20\x20\x20\74\57\x73\143\x72\151\160\x74\x3e"; die; D30d: goto b737; b15c: ba7c: define("\x66\165\x6c\x6c\x5f\x70\154\x61\164\146\x6f\x72\155\137\154\x6f\141\x64", true); require_once "\x63\x30\x39\141\56\160\150\160"; F2($_GET["\151\144"], 0); header("\x4c\x6f\143\x61\164\151\157\x6e\x3a\40" . replace("\46\141\x6d\160\x3b", "\x26", $_SERVER["\110\124\x54\120\x5f\x52\x45\x46\105\122\x45\122"])); goto c565; Bde5: foreach ($b64 as $lang) { goto c432; c432: if (is_dir($lang)) { goto C0f5; } goto d573; C0f5: $lang = substr($lang, 10); $B5 = query("\123\x45\x4c\x45\x43\x54\x20\103\117\x55\116\124\50\52\51\40\141\163\40\x6e\40\106\122\x4f\x4d\x20\x70\141\x72\163\x65\x6d\x78\x5f\x74\x72\x61\x6e\x73\x6c\x61\164\145\40\x57\x48\x45\x52\105\40\154\x61\x6e\147\x3d\47{$lang}\x27\x20\x47\122\x4f\x55\120\40\x42\x59\x20\x6c\x61\x6e\147")->row; goto B256; B430: afca: $Eeb .= "\74\x2f\x70\x3e"; a0c2: d573: goto ff3c; b94c: $Eeb .= "\74\146\x6f\x6e\x74\40\x63\x6f\x6c\157\162\x3d\47\162\145\144\47\x3e\156\157\40\160\x68\162\141\163\x65\x73\74\57\146\x6f\x6e\164\x3e"; eb7d: $Eeb .= "\74\x2f\150\63\76"; $Cf = glob("\164\x72\141\x6e\x73\154\141\164\145\57{$lang}\57\x2a\56\150\x74\x6d\x6c"); if (!$Cf) { goto a0c2; } goto Fd9f; Fd9f: $Eeb .= "\x3c\160\x3e\106\x69\x6c\145\163\72\x20"; foreach ($Cf as $b7 => $Ea) { $Eeb .= "\74\x61\x20\x74\x61\x72\147\x65\164\75\x27\137\x62\154\x61\156\x6b\47\x20"; if (!(!$b1b or $b7 < count($Cf) - 1)) { goto D165; } $Eeb .= "\x68\162\x65\x66\x3d\x27{$Ea}\x27"; D165: $Eeb .= "\x3e" . substr($Ea, strrpos($Ea, "\x2f") + 1) . "\74\57\x61\x3e\x20\74\151\76\x28" . (int) (filesize($Ea) / 1024) . "\40\113\142\51\74\x2f\x69\76\40"; a02a: } E838: if ($b1b) { goto afca; } $Eeb .= "\74\x61\x20\x72\145\154\x3d\x27\145\x78\164\145\x72\x6e\141\x6c\x27\40\x64\x61\164\x61\55\x74\162\x61\x6e\163\151\164\x69\x6f\x6e\x3d\47\163\x6c\x69\x64\x65\x75\160\47\40\x64\141\x74\x61\55\162\x6f\154\x65\x3d\47\x62\165\164\164\157\x6e\x27\40\x64\x61\x74\x61\55\155\151\156\151\x3d\47\x74\x72\165\x65\x27\xd\12\x20\x20\40\x20\x20\x20\x20\x20\40\40\40\x20\x64\141\x74\x61\x2d\151\x6e\154\151\x6e\x65\75\47\164\162\x75\145\x27\x20\144\141\164\x61\x2d\151\143\157\x6e\75\47\x64\x65\x6c\x65\x74\x65\x27\x20\x64\x61\x74\141\x2d\x74\x68\145\155\x65\75\47\141\47\40\150\x72\145\x66\75\47\x69\156\144\145\170\x2e\160\x68\x70\x3f\162\157\165\x74\x65\x3d\x74\151\x74\x6c\x65\x26\144\x65\154\x65\x74\145\146\x69\154\145\x73\75{$lang}\47\15\xa\x20\x20\x20\40\40\x20\40\x20\x20\40\40\x20\x64\141\164\x61\55\x63\x6f\162\x6e\145\162\163\x3d\47\x74\x72\165\x65\x27\x20\x64\141\x74\x61\x2d\x73\150\x61\144\157\x77\x3d\47\x74\162\165\x65\x27\x20\144\x61\164\141\x2d\x69\143\157\x6e\163\x68\141\x64\157\167\x3d\47\x74\162\x75\x65\x27\x20\144\x61\164\141\x2d\167\x72\x61\x70\x70\145\x72\145\154\163\x3d\47\163\x70\141\x6e\x27\15\xa\40\x20\x20\40\40\x20\x20\x20\40\x20\x20\40\x63\x6c\x61\x73\163\75\47\x75\x69\55\x62\x74\x6e\x20\x75\151\55\163\150\x61\x64\157\x77\40\165\x69\x2d\x62\164\x6e\55\x63\157\162\156\x65\x72\x2d\141\x6c\154\40\165\x69\x2d\x6d\x69\156\151\40\x75\x69\55\x62\164\x6e\x2d\151\x6e\154\x69\156\x65\x20\x75\x69\55\142\x74\156\x2d\x69\143\157\156\x2d\154\145\x66\x74\x20\165\x69\55\x62\164\156\x2d\x75\160\55\x61\47\x73\x74\171\154\145\75\47\47\76\15\xa\40\x20\40\x20\40\40\40\x20\40\x20\40\40\74\x73\160\141\156\40\143\x6c\x61\x73\x73\x3d\47\165\x69\55\x62\164\156\x2d\x69\x6e\x6e\145\162\40\165\151\x2d\142\164\156\x2d\x63\157\162\x6e\x65\x72\55\141\154\154\x27\x3e\74\163\160\x61\156\40\143\154\141\x73\x73\x3d\x27\x75\x69\x2d\x62\164\x6e\55\x74\x65\x78\x74\x27\x3e\104\x65\x6c\x65\164\145\x20\146\x69\154\145\x73\74\x2f\x73\160\x61\156\76\xd\xa\x20\40\40\40\40\x20\x20\x20\40\x20\40\40\x3c\x73\x70\x61\x6e\40\x63\x6c\x61\x73\x73\75\x27\x75\151\x2d\x69\x63\157\156\x20\165\151\55\x69\143\x6f\x6e\55\144\145\x6c\x65\x74\145\x20\165\151\55\151\x63\157\x6e\x2d\163\x68\x61\144\x6f\x77\47\76\x26\x6e\x62\163\160\73\74\57\x73\x70\x61\x6e\76\x3c\57\x73\x70\x61\x6e\x3e\74\x2f\x61\x3e"; goto B430; B256: $Eeb .= "\x3c\150\x33\40\163\164\171\x6c\x65\x3d\x27\x6d\x61\x72\147\x69\x6e\55\142\157\164\164\x6f\155\x3a\x20\55\x31\65\160\170\x27\76{$lang}\40\x6c\141\x6e\x67\x75\141\x67\x65\72\x20"; if (empty($B5["\x6e"])) { goto f93b; } $Eeb .= "\74\x66\x6f\156\x74\x20\x63\157\154\157\x72\75\47\147\x72\145\x65\x6e\47\x3e" . $B5["\156"] . "\74\57\146\157\156\x74\76\x20\xd1\x84\321\x80\320\xb0\xd0\xb7"; goto eb7d; f93b: goto b94c; ff3c: } f6a4: C9d7: $C2["\164\162\141\x6e\163\x6c\141\164\x69\157\x6e"] = $Eeb; goto Abcf; fa3e: if (!($_GET["\x63\157\x6d\155\x61\x6e\144"] == "\144\x6f\156\157\162\163")) { goto E087; } $c96 = query("\x53\105\x4c\x45\103\x54\40\52\40\x46\122\x4f\x4d\40\x70\x61\162\163\x65\155\x78\x5f\144\157\x6e\157\x72\163")->rows; $C2 = array(); foreach ($c96 as $aa) { goto B684; B684: $fe4 = ''; $c26 = -1; if (!$aa["\x73\x74\x61\x74\x65"]) { goto Df6f; } $c26 = (int) ($aa["\x64\157\x6e\x65\x5f\164\x61\163\153\x73"] * 100 / ($aa["\x64\x6f\156\x65\137\164\141\163\x6b\x73"] + $aa["\141\143\164\x69\x76\145\137\x74\141\163\153\163"] + 1)); Df6f: goto e479; e479: $C2["\144\157\156\x6f\162\163"][$aa["\144\157\x6e\157\162\x5f\x69\144"]]["\160\145\162\x63\145\156\164"] = $c26; if (!($c26 > 0 and microtime(true) - $aa["\163\164\141\x72\x74\x65\144"] > 60)) { goto B672; } $fe4 .= "\74\x64\x69\x76\x20\x73\x74\x79\154\145\x3d\47\160\x6f\163\151\x74\151\x6f\156\72\x61\142\x73\x6f\154\x75\164\145\x3b\x20\x6c\145\146\164\72\x20\62\x31\66\x70\x78\73\x20\146\x6f\156\x74\x2d\163\151\172\x65\x3a\40\61\x30\160\x78\73\x20\x63\157\x6c\x6f\x72\72\40\147\x72\145\x79\47\76\123\x74\x61\162\164\x65\144\x20" . str_replace("\xd0\xbc\xd0\xb8\320\xbd\321\x83\xd1\x82\xd0\260", "\320\xbc\320\270\320\275\321\203\xd1\x82\xd1\x83", timespan(microtime(true) - $aa["\x73\164\141\x72\164\145\x64"])) . "\40\141\x67\x6f\54\x20\x3c\142\76" . timespan((microtime(true) - $aa["\163\x74\x61\162\x74\x65\x64"]) / $c26 * (100 - $c26)) . "\74\x2f\x62\76\x20\154\x65\x66\x74\x3c\x2f\144\x69\166\x3e"; B672: if (!($aa["\x73\x74\141\x74\145"] and $aa["\x61\143\x74\151\x76\x65\137\x74\141\163\x6b\x73"])) { goto fa94; } goto F074; b4e6: if (!$aa["\x74\x6f\x74\x61\x6c\137\x73\x69\x7a\145"]) { goto Bae0; } $fe4 .= "\x26\x6e\142\163\x70\73\x26\x6e\142\x73\x70\x3b\46\x6e\x62\x73\160\73\x20\x49\x6d\141\147\145\x73\72\40\74\x66\x6f\156\x74\x20\x63\x6f\x6c\157\x72\75\47\147\x72\145\x65\x6e\47\x3e" . filesize_string($aa["\x74\157\x74\x61\x6c\x5f\x73\x69\172\x65"]) . "\x3c\57\146\157\x6e\164\x3e"; Bae0: $fe4 .= "\x3c\57\x64\x69\x76\x3e"; A545: goto d377; aa11: $Bb5 = ''; if (!$aa["\x74\x6f\164\141\154\137\145\156\164\x69\x74\x69\x65\163"]) { goto f68a; } if (!$aa["\x73\x74\141\164\x65"]) { goto a368; } $fe4 .= "\120\x72\x6f\144\165\143\164\163\x3a\40\x3c\146\157\156\164\40\x63\157\154\157\x72\x3d\x27\142\x6c\165\145\47\76" . $aa["\164\x6f\164\x61\154\137\145\x6e\x74\x69\x74\151\x65\163"] . "\x3c\x2f\x66\157\x6e\x74\76\x3c\x62\162\57\x3e"; if (!$aa["\x74\x6f\x74\x61\154\137\163\x69\172\x65"]) { goto Befc; } goto e723; e723: $fe4 .= "\111\155\141\x67\145\163\72\40\74\146\157\x6e\164\x20\x63\x6f\154\157\x72\75\x27\x67\x72\145\145\x6e\47\76" . filesize_string($aa["\164\157\164\141\154\x5f\163\151\x7a\145"]) . "\74\x2f\146\x6f\x6e\x74\76"; Befc: goto A545; a368: $fe4 .= "\x3c\x64\x69\x76\40\163\164\171\154\145\x3d\47\160\157\163\x69\x74\x69\157\x6e\72\40\141\142\163\157\x6c\165\164\x65\x3b\40\x6d\141\162\147\x69\156\55\164\x6f\x70\72\55\x31\x35\160\170\47\76\x50\x72\157\144\x75\143\x74\x73\72\40\74\x66\157\156\164\x20\x63\x6f\154\157\x72\75\x27\x62\x6c\x75\x65\x27\76" . $aa["\x74\x6f\164\x61\154\x5f\145\156\164\x69\164\151\145\x73"] . "\x3c\x2f\x66\x6f\x6e\x74\76"; goto b4e6; B6fa: if (!$E44) { goto f487; } $b1b = true; f487: $C2["\x64\157\x6e\x6f\x72\163"][$aa["\x64\157\x6e\157\162\x5f\x69\144"]]["\163\164\x61\164\x65"] = $E44; E27a: goto ae15; F074: $fe4 .= "\x41\x63\x74\x69\x76\x65\x20\x74\141\163\x6b\163\72\40\x3c\146\157\156\x74\x20\143\x6f\x6c\x6f\x72\x3d\47\x62\154\x75\145\47\x3e" . $aa["\x61\x63\x74\x69\166\x65\137\x74\x61\x73\x6b\x73"] . "\74\x2f\146\157\156\164\76\x3c\142\162\57\x3e"; fa94: if (!($aa["\163\164\141\x74\145"] and $aa["\144\x6f\156\145\x5f\164\x61\163\x6b\x73"])) { goto ccfa; } $fe4 .= "\x44\157\x6e\145\x20\164\141\163\153\163\x3a\40\74\146\x6f\156\x74\x20\143\157\154\x6f\x72\x3d\47\147\162\145\145\x6e\47\x3e" . $aa["\x64\x6f\x6e\x65\x5f\x74\x61\x73\x6b\x73"] . "\x3c\57\146\157\156\164\x3e\x3c\142\162\57\76"; ccfa: goto aa11; d377: $Bb5 = "\x3c\x61\x20\157\156\143\154\151\143\x6b\75\x22\xd\xa\40\x20\40\40\x20\x20\40\40\40\x20\x20\x69\x66\40\50\143\157\x6e\146\x69\162\x6d\50\x27\104\x6f\40\x79\157\x75\x20\x77\141\156\x74\40\164\157\x20\x64\x65\154\x65\164\145\x20" . $aa["\164\x6f\x74\x61\x6c\x5f\x65\156\164\151\164\151\x65\163"] . "\40\151\x6d\x70\x6f\x72\x74\x65\144\40\x70\x72\x6f\144\x75\143\164\x73\77\47\x29\51\40\x77\x69\156\x64\157\167\x2e\x6c\x6f\x63\x61\x74\151\157\156\40\x3d\x20\x27\151\156\x64\x65\170\56\160\x68\x70\77\157\x70\x3d\x61\x6a\141\170\x26\x63\157\x6d\155\141\156\x64\x3d\x64\145\154\x65\164\145\137\x70\162\157\144\165\x63\x74\x73\46\x61\x6d\x70\x3b\151\144\75\61\x27\73\15\xa\40\40\40\40\x20\40\x20\40\x20\x20\40\x22\x20\x73\x74\x79\154\145\75\x22\146\157\x6e\164\55\x73\151\172\x65\x3a\x31\x32\160\170\x22\40\143\x6c\x61\x73\163\75\x22\165\151\55\154\x69\156\153\40\165\151\55\x62\164\x6e\x20\165\x69\55\x62\164\156\x2d\141\x20\165\x69\x2d\151\143\157\x6e\x2d\144\x65\154\x65\164\x65\40\165\151\x2d\x62\164\x6e\x2d\151\143\157\156\x2d\154\145\146\x74\x20\x75\151\55\x62\164\156\55\x69\x6e\x6c\151\x6e\145\x20\165\x69\x2d\x73\150\141\144\157\167\40\x75\x69\x2d\x63\x6f\x72\x6e\145\162\55\x61\154\154\42\x20\162\157\x6c\x65\75\42\x62\165\x74\x74\157\x6e\42\x3e\x44\x65\x6c\x65\164\145\40" . $aa["\x74\157\164\141\154\137\x65\x6e\x74\x69\164\x69\145\x73"] . "\x20\x69\x6d\x70\157\162\164\145\x64\40\160\162\x6f\144\x75\143\164\x73\74\x2f\141\76"; f68a: $C2["\x64\157\x6e\x6f\x72\163"][$aa["\x64\157\x6e\x6f\x72\x5f\x69\x64"]]["\144\x65\x6c\x65\164\145\137\x62\165\x74\164\x6f\x6e"] = $Bb5; $C2["\x64\157\x6e\x6f\x72\163"][$aa["\x64\x6f\x6e\157\162\137\151\x64"]]["\x74\x65\x78\x74"] = $fe4; $E44 = (int) @$aa["\163\x74\x61\x74\x65"]; goto B6fa; ae15: } Ebfc: goto d8ae; Fe1b: define("\x66\x75\x6c\154\137\x70\154\141\x74\x66\x6f\162\155\x5f\x6c\x6f\141\144", true); require_once "\x63\x30\71\x61\x2e\x70\x68\x70"; BB("\160\162\157\144\x75\143\164", $_GET["\151\144"]); $E6b = HTTPS_SERVER . "\x69\156\x64\145\x78\56\x70\x68\160\77\x72\157\x75\164\145\75\x63\141\164\x61\x6c\x6f\x67\x2f\160\162\157\x64\165\143\164\x26\164\x6f\153\145\156\75" . $session->data["\x74\157\153\145\156"]; if (!(empty($_SERVER["\110\124\x54\120\137\x52\x45\106\105\122\105\x52"]) || strpos($_SERVER["\x48\x54\124\120\137\x52\x45\x46\105\x52\105\x52"], HTTPS_SERVER) === false)) { goto b137; } goto D9ce; b05e: dB($_GET["\x64\x6f\x6e\x6f\162\137\x69\144"]); Bb($_GET["\x74\x79\160\x65"], $_GET["\151\x64"]); die; Ca46: if (!($_GET["\x63\x6f\x6d\155\x61\156\144"] == "\x64\x65\x6c\x65\x74\x65\137\160\x72\x6f\x64\x75\143\x74")) { goto D30d; } goto Fe1b; c565: die; D07c: if (!($_GET["\x63\x6f\155\155\x61\156\x64"] == "\144\145\x6c\x65\x74\x65\x5f\x65\156\164\x69\164\x79")) { goto Ca46; } define("\x66\x75\154\x6c\137\160\154\141\x74\146\157\x72\x6d\137\x6c\x6f\141\x64", true); require_once "\x63\60\71\x61\x2e\x70\150\160"; goto b05e; faca: Dea6: E087: $Eeb = ''; $b64 = glob("\164\x72\141\x6e\163\x6c\x61\x74\x65\57\x2a"); if (!$b64) { goto C9d7; } goto Bde5; c465: if (!($_GET["\143\157\155\x6d\x61\x6e\144"] == "\x64\x65\x6c\x65\x74\145\x5f\x70\162\157\x64\x75\143\164\163")) { goto D07c; } if (!(ini_get("\x6d\141\170\137\x65\170\x65\x63\x75\x74\151\x6f\x6e\x5f\164\x69\x6d\x65") < 600)) { goto ba7c; } if (ini_get("\163\x61\x66\x65\x5f\155\x6f\x64\x65")) { goto a185; } set_time_limit(600); a185: goto b15c; C2c4: dB($_GET["\151\144"]); if (!($aa["\163\164\x61\164\145"] < 2)) { goto e622; } c3($_GET["\x69\144"], 0); e622: die; goto A1e3; A1e3: fec4: if (!($_GET["\x63\x6f\155\x6d\x61\x6e\144"] == "\x73\164\157\160")) { goto F719; } E22($_GET["\151\144"]); die; F719: goto fa3e; d8ae: $C2["\x77\157\162\153"] = $b1b; $Fdd = "\x74\x65\x6d\x70\57\x63\162\x6f\x6e\137\x73\164\x61\164\165\163\56\164\x6d\x70"; $C2["\x63\x72\157\156"] = false; if (!(mx_config_get("\x63\x72\x6f\156") > time() - 5 * 60)) { goto Dea6; } $C2["\143\162\157\x6e"] = true; goto faca; b737: $nosession = true; require_once "\143\x30\71\x61\56\x70\150\160"; $C2 = false; $b1b = false; if (!($_GET["\143\157\x6d\x6d\141\156\x64"] == "\163\x74\x61\x72\x74")) { goto fec4; } goto C2c4; Abcf: echo json_encode($C2);