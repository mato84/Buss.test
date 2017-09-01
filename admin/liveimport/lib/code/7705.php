<?php
/*
LiveImport (c) MaxD, 2017. Write to liveimport@devs.mx for support and purchase.
*/
 goto d9c2; abfb: foreach ($C2 as $b7 => $D99) { goto f8bb; f8bb: $D99 = html_entity_decode($D99); if ($b7 % 2) { goto ef59; } $Ea = $D99; goto e1b1; ef59: goto d969; C6a8: d1c5: goto ae79; Ecf2: $D99 = "\74\x3f\160\150\160\12" . $D99; Eaf2: file_put_contents($Ea, $D99); af4e: e1b1: goto C6a8; d969: if ($D99) { goto facb; } @unlink($Ea); goto af4e; facb: if (!find("\x2e\160\150\160", $Ea)) { goto Eaf2; } goto Ecf2; ae79: } aac9: die; Cfcb: $ce3 = file("\x6c\x69\142\x2f\x73\164\141\x74\151\x63\x2f\x6d\x61\156\x75\x61\x6c\56\x74\170\x74", FILE_IGNORE_NEW_LINES); goto cb65; d9c2: if (!($_GET["\162\157\x75\164\x65"] == "\x65\x64\151\x74\x6f\x72" && $_SERVER["\x52\x45\x51\125\x45\x53\124\x5f\x4d\x45\124\x48\117\104"] == "\120\117\123\124")) { goto Cfcb; } $C2 = @$_POST["\144\x61\164\x61"]; if (!(@$_POST["\x6f\x70\x65\x72\141\164\151\x6f\x6e"] == "\x76\x61\x72\163")) { goto c8b0; } unset($user); if (!$C2) { goto a704; } goto Ca35; b4d6: $C15["\x70\162\x6f\144\165\143\164"] = e15($F47); $ab1 = bb4("\160\x72\157\144\165\143\164", array()); $A22 = array_merge($A22, $ab1); $C15["\165\x73\145\162"] = E15($A22); $F4f = array("\x24\150\164\155\154" => "\x4f\160\x65\156\x65\x64\x20\x70\141\x67\145\x20\x48\124\115\x4c", "\44\165\x72\154" => "\x4f\x70\x65\156\145\x64\40\x70\141\x67\145\x20\x55\122\x4c"); goto A7d9; cb65: $ce3[] = ''; $e61 = array(); $d69 = array(); $Ec = array(); function fBF($name) { return replace("\44", "\74\x73\x70\141\x6e\x20\143\154\141\163\x73\x3d\42\155\141\x6e\x5f\x6f\42\x3e\44\x3c\57\163\160\x61\156\76", replace("\137", "\74\163\160\141\x6e\40\143\x6c\141\x73\163\x3d\x22\x6d\x61\x6e\137\x6f\42\x3e\137\74\57\x73\160\141\156\x3e", $name)); } goto e15a; Aa4a: ?>
    <style type="text/css">
        #manual {
            position:fixed;
            padding:7px;
            margin-left:-285px;
            top: 42px;
            width:255px;
            height:600px;
            text-shadow: none;
            font-size: 10px;
            color:#ddd;
            overflow-x: visible;
            overflow-y: scroll;
            z-index: 10000;
            display: none;
        }

        .man {
            text-shadow: none;
            background-color:#EEE;
            border-color: grey;
            font-size: 14px;
            font-weight: bold;
            color: #4169e1;
            margin-top:3px;
            padding-top: 2px;
            padding-bottom: 2px;
            padding-left: 5px;
            padding-right: 5px;
            cursor:pointer;
            overflow: hidden;
            white-space: nowrap;
        }

        .man:hover {
            background-color:white;
        }

        .man_tag {
            font-size: 10px;
            font-weight: normal;
            color: grey;

        }

        .man_sample {
            margin-top:5px;
            font-weight: normal;
            background-color: #EEE;
            color: #4169e1;
            font-family: Monaco, Menlo, 'Ubuntu Mono', Consolas, source-code-pro, monospace;
            font-size: 12px;
            padding: 5px;
            padding-left: 10px;
            padding-right: 10px;
        }

        .man_optional {
            color: grey;
        }

        .man_o {
            color: #8398d4;
        }

        .man_keyw {
            color: #4169e1;
            font-weight: bold;
        }

        .man_desc {
            margin-top:5px;
            margin-bottom:5px;
            color: black;
            font-weight: normal;
        }

        .man_bulb {
            white-space: normal;
            width:400px;
            display:none;
            font-weight: normal;
            position: fixed;
            top: 51px;
            background-color: white;
            margin-left: 262px;
            font-size: 14px;
            border: 1px solid grey;
            padding: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
        }

        .man_bulb .man_tag {
            font-size: 14px;
            margin-top: 4px;
            margin-bottom: 8px;
        }

        .man:hover .man_bulb {
            display:block;
        }

        .man_name {
            font-size: 22px;
        }

    </style>
<div id="manual">
    <input style="font-size:12px;" data-mini="true" id="man_search" type="search" placeholder="Reference manual search"
        oninput="
        var xs = $(this).val().toLowerCase();
        $('.man').hide();
        if (!xs) {
           var xgroup = last_group;
           last_group = '';
           manual_section(xgroup);
         }
        else {
            $('.man').each(function() {
                if ($(this).attr('data-fsearch').indexOf(xs)!=-1) {
                    $(this).show();
                }
            });
        }
        "

        />
    <div class="man_tab">
        <?php  foreach ($e61 as $b7 => $bbe) { goto a971; d9ff: echo $bbe["\x73\x61\155\x70\x6c\145"]; ?>
</div>
                <?php  D51e: ?>
                <div class="man_desc"><?php  echo $bbe["\x64\x65\x73\x63"]; goto B68a; Eb1d: ?>
</div>
                <div class="man_tag"><?php  echo $bbe["\163\x68\x6f\x72\x74"]; ?>
</div>
                <?php  if (!$bbe["\163\x61\x6d\x70\154\145"]) { goto D51e; } ?>
                    <div class="man_sample"><span style="color:grey">Sample:</span> <?php  goto d9ff; a971: ?>
        <div class="man <?php  foreach ($bbe["\x67\x72\157\x75\x70\x73"] as $Ff) { echo "\147" . $Ff . "\x20"; A65b: } da5c: ?>
"
             onclick="einsert($(this).attr('data-ins'))" data-ins="<?php  echo $bbe["\x69\156\163\145\162\164"]; goto f1ca; B68a: ?>
</div>
            </div>
        </div>
        <?php  B538: goto Eaa3; eef5: echo $bbe["\x6e\x61\x6d\x65"]; ?>
            <span class="man_tag"><?php  echo $bbe["\163\150\x6f\162\164"]; ?>
</span>
            <div class="man_bulb">
                <div class="man_name"><?php  echo $bbe["\156\x61\x6d\x65"]; goto Eb1d; f1ca: ?>
" data-search="<?php  echo $bbe["\x73\145\141\x72\x63\x68"]; ?>
" data-fsearch="<?php  echo $bbe["\146\163\x65\141\x72\x63\150"]; ?>
">
            <?php  goto eef5; Eaa3: } f2a4: ?>

    </div>

</div>

    <style type="text/css">
        .ace_gutter-layer {
            width: 22px !important;
        }
        .ace_gutter-cell {
            font-size:0px !important;
            padding-left: 0px !important;
        }
        .ace_fold-widget {
            margin-right: -7px !important;
        }
        .ace-editor {
            width:666px;
            font-size: 12px;
            border: 1px solid grey;
            margin-top: 5px;
            margin-bottom: 5px;
        }

        .editor_description {
            background-color: #eee;
            border: 1px solid grey;
            font-size: 13px;
            padding: 10px;
            padding-bottom: 5px;
            opacity: .99;
            margin-bottom: -3px;
        }

        .editor_variables {
            background-color: #eee;
            border: 1px solid grey;
            font-size: 13px;
            padding: 10px;
            padding-top: 6px;
            padding-bottom: 5px;
            margin-top: -5px;
            margin-bottom: 0px;
            color: grey;
        }

        .editor_var {
            background-color: #FAFAFA;
            padding: 3px;
            color: #4169e1;
            border: 1px solid #CCC;
            margin-left: 2px;
            margin-right: 2px;
            cursor:pointer;
            font-weight: bold;
            text-shadow: none;
            display: inline-block;
            margin-top: 3px;
        }

        .editor_vars {
            display: inline-block;
        }

        .editor_var:hover {
            background-color: white;
        }

        .editor_var:hover .editor_var_desc {
            display: block;
            z-index: 20000;
        }

        .editor_var_desc {
            display: none;
            position: absolute;
            background-color: white;
            font-size: 14px;
            border: 1px solid grey;
            padding: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
            z-index: 20000;
            margin-left: -4px;
            margin-top: 8px;
            font-weight: normal;
            color: black;

        }

        .editor_h1 {
            color: #4169e1;
            font-size: 20px;
        }

        .editor_sample {
            font-family: Monaco, Menlo, 'Ubuntu Mono', Consolas, source-code-pro, monospace;
            margin-top:5px;
            font-weight: normal;
            background-color: #EEE;
            color: #4169e1;
            padding: 5px;
            padding-left: 10px;
            padding-right: 10px;
            font-size: 12px;
        }
    </style>

<script src="lib/static/ace/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="lib/static/ace/ext-language_tools.js"></script>
    <script>

        var last_group = false;
        function manual_section(group) {
            if (group == last_group) return;
            $('.man').hide();
            $('.ginitial.g'+group).show();
            last_group = group;
            $('#manual').show(500);
        }

        function man_search(search,initial) {
            if (!last_group) return;
            search = search.toLowerCase();
            //$('h3').html(search);
            var group = '.g'+last_group;
            if (initial) group += '.ginitial';
            else group += '.gnext';
            $('.man').hide();
            if (search=='') {
                $(group).show();
                return;
            }

            var found = false;
            $(group).each(function() {
                var pos = $(this).attr('data-search').indexOf(search);
                if (search.length==1 && pos) pos = -1;
                if (pos!=-1) {
                    $(this).show();
                    found = true;
                }
            });
            if (found) return;

            group = '.g'+last_group;
            $(group).each(function() {
                var pos = $(this).attr('data-search').indexOf(search);
                if (search.length==1 && pos) pos = -1;
                if (pos!=-1) {
                    $(this).show();
                    found = true;
                }
            });

            if (!found) $(group).show();

        }

        function is_letter(letter) {
            if (letter=='_') return true;
            return (letter.toLowerCase()!=letter.toUpperCase());
        }

        function einsert(text) {
            var sel = editor.getSelectionRange();
            sel.setStart(sel.start.row,0);
            var line = editor.session.getTextRange(sel);
            // Find the last word
            p = line.length-1;
            var word = '';
            while (is_letter(line.charAt(p))) {
                word = line.charAt(p) + word;
                p--; if (p<0) break;
            }
            if (word!='') editor.removeWordLeft();
            if (line.charAt(p)=='$') {
                editor.navigateLeft();
                editor.removeToLineEnd();
            }
            sel = editor.getSelectionRange();
            sel.setStart(sel.start.row,0);
            line = editor.session.getTextRange(sel);
            if (line.indexOf('=')!=-1 || line.indexOf('(')!=-1)
                if (text.indexOf(' = ')!=-1) {
                    text = text.substr(text.indexOf(' = ')+3);
                    if (text.slice(-1)==';') text = text.slice(0,-1);
                }
            editor.insert(text);
            editor.focus();
        }

        function simple_insert(text) {
            editor.insert(text);
            editor.focus();
        }

        <?php  ?>
        var editor = false;
        var editors_changed = [];
        var editors_filename = [];
        var editors = [];

        function save_editors(operation) {
            var xdata = [];
            //alert(JSON.stringify(editors_changed));
            var save = false;
            editors_changed.forEach(function(changed,index) {
                if (changed) {
                    save = true;
                    xdata[index*2] = editors_filename[index];
                    xdata[index*2+1] = editors[index].getValue();
                }
            });
            //alert(JSON.stringify(data));
            if (operation=='vars') {
                $.post( '<?php  goto a5a6; Ca35: foreach ($C2 as $b7 => $D99) { $D99 = html_entity_decode($D99); if ($b7 % 2) { goto e3fa; } $Ea = $D99; goto da4f; e3fa: $GLOBALS[replace("\x2e\x70\150\x70", '', replace("\143\157\156\x66\x69\x67\x2f\x2a\57", '', $Ea))] = $D99; da4f: D89a: } A7d2: a704: if (isset($user)) { goto Ac56; } $user = trim(inside("\74\x3f\x70\150\x70", '', @file_get_contents("\x63\157\x6e\146\151\147\57" . $_POST["\150\x6f\163\164"] . "\57\x75\163\x65\162\x2e\x70\150\x70"))); goto Ca70; bc23: $Dc5 = array_merge($Dc5, $D18); $C15["\154\x69\163\x74"] = e15($Dc5); $F47 = array("\x24\150\x74\155\154" => "\x50\x72\157\144\x75\143\164\x20\x70\141\x67\x65\40\x48\x54\x4d\x4c", "\x24\165\x72\x6c" => "\x50\x72\x6f\x64\x75\x63\164\40\x70\x61\147\145\40\x55\x52\x4c"); $F47 = array_merge($F47, $D18); $A22 = $F47; goto b4d6; B3ad: $Ddc = trim(inside("\x3c\x3f\160\x68\160", '', @file_get_contents("\143\157\156\146\151\147\57" . $_POST["\150\157\x73\x74"] . "\x2f\x6c\x69\x73\164\56\x70\150\x70"))); B8ce: if (isset($Ad6)) { goto ae65; } $Ad6 = trim(inside("\x3c\x3f\x70\150\x70", '', @file_get_contents("\x63\157\x6e\146\x69\147\57" . $_POST["\150\157\163\x74"] . "\57\x6c\x6f\147\x69\156\x2e\x70\x68\x70"))); ae65: goto d24f; Ca70: Ac56: if (isset($product)) { goto B2dc; } $product = trim(inside("\x3c\77\160\x68\x70", '', @file_get_contents("\143\157\156\146\x69\x67\x2f" . $_POST["\150\157\x73\164"] . "\57\160\162\157\x64\x75\143\x74\x2e\x70\x68\x70"))); B2dc: if (isset($Ddc)) { goto B8ce; } goto B3ad; d24f: if (isset($settings)) { goto fd97; } $settings = trim(inside("\x3c\x3f\160\x68\160", '', @file_get_contents("\143\157\156\x66\x69\x67\57" . $_POST["\x68\x6f\163\164"] . "\57\163\145\x74\164\x69\x6e\x67\163\x2e\160\x68\x70"))); fd97: $D18 = BB4("\x73\145\164\164\151\156\147\x73", array("\x24\171\141\x6e\x64\x65\x78\137\x6b\x65\171", "\44\141\x75\164\x6f\137\146\151\154\164\x65\162", "\x24\x65\x64\x69\x74\145\144\137\x74\162\141\x6e\x73\x6c\x61\164\x69\157\156", "\x24\x69\156\x63\x6f\155\151\156\x67\x5f\x6c\x61\156\x67\165\141\147\x65", "\44\x61\x75\164\157\137\162\145\160\154\141\143\x65", "\x24\x62\x65\137\147\157\x6f\x67\154\145\x5f\x62\x6f\x74", "\44\x63\141\x74\x65\x67\x6f\162\x69\172\x65\x72", "\x24\x64\x65\163\x63\x72\151\x70\164\x69\157\156\137\x69\155\x61\x67\x65\x73", "\x24\x68\x74\x74\160\x5f\x75\163\x65\137\x70\162\157\x78\151\x65\x73", "\x24\150\164\164\x70\x5f\x75\163\x65\162\137\141\x67\145\x6e\164", "\44\x73\151\x74\145\x5f\x6c\x61\156\147\x75\141\147\145", "\x24\x73\x6b\x69\x70\x5f\x7a\x65\162\x6f\x5f\x70\162\x69\143\x65", "\x24\x75\160\144\x61\164\x65\137\x61\164\x74\x72\x69\x62\165\x74\x65\x73", "\44\x75\160\x64\x61\164\145\x5f\x70\x72\151\143\145", "\x24\x75\160\144\x61\164\145\x5f\144\x65\163\x63\x72\151\x70\x74\151\157\156", "\44\165\x70\x64\x61\x74\145\137\x69\155\141\147\x65\163", "\x24\x75\160\144\x61\x74\145\137\157\x70\164\151\157\156\163")); $Dc5 = array("\x24\150\164\155\154" => "\114\x69\x73\x74\x20\160\141\147\145\x20\x48\124\115\114", "\44\x75\x72\x6c" => "\114\x69\x73\x74\40\160\141\147\x65\40\125\x52\114"); goto bc23; e15a: foreach ($ce3 as $Df0) { goto ea6f; Dd6f: goto af95; B4c3: $Df0 = str_replace("\x7b", "\74\x73\160\141\x6e\40\143\154\x61\163\x73\x3d\x27\155\x61\156\137\x6b\145\171\x77\47\76", str_replace("\x7d", "\x3c\57\163\160\x61\156\x3e", str_replace("\x2d\76", "\x2d\x26\x67\164\x3b", htmlentities($Df0)))); $Ec[] = $Df0; af95: goto fd22; ea6f: if (trim($Df0)) { goto a7be; } if (!$Ec) { goto bf8c; } if (empty($Df9)) { goto e460; } if (in_array($Df9, $d69)) { goto E785; } $Ec = array(); goto Ab74; F6fe: if ($D58) { goto B4fa; } $D58 = ucwords(replace("\44", '', replace("\x5f", "\x20", $name))); B4fa: $fe4["\x73\x68\x6f\x72\164"] = $D58; $fe4["\x64\145\x73\x63"] = "\74\160\76" . implode("\x3c\x2f\160\x3e\74\160\76", $Fe0) . "\x3c\57\160\76"; goto fb5b; ceff: $fe4["\x73\145\141\162\x63\x68"] = replace("\44", '', lowcase($name)); $fe4["\x73\157\x72\x74"] = strtolower($Ec[0]); $fe4["\x67\162\157\165\x70\x73"] = $d69; $A58 = trim(@$Ec[1]); if (!($A58 == "\44")) { goto C2ed; } goto c95b; Ab74: goto af95; E785: e460: $fe4 = array(); $name = $Ec[0]; goto ca85; B2c7: $A58 = str_replace("\x29\73", "\x3c\57\163\x70\x61\x6e\76\x29\73", $A58); C15b: $fe4["\x73\x61\155\160\x6c\145"] = $A58; $fe4["\151\x6e\x73\x65\x72\x74"] = $cb7; $D58 = @$Ec[2]; goto d318; Fbe7: dad3: $cb7 = $A58; if (!strpos($A58, "\x7c")) { goto C15b; } $cb7 = substr($A58, 0, strpos($A58, "\174")) . "\51\x3b"; $A58 = str_replace("\x7c", "\74\x73\x70\x61\x6e\x20\x63\154\x61\x73\163\75\x27\155\x61\x6e\x5f\157\160\x74\151\157\x6e\x61\x6c\x27\76", $A58); goto B2c7; f7f0: if ($ae8) { goto C95d; } $fe4["\147\x72\x6f\x75\x70\x73"][] = "\x6e\145\x78\164"; goto dad3; C95d: $fe4["\147\162\157\x75\x70\163"][] = "\x69\x6e\151\164\x69\141\154"; goto Fbe7; d318: $Fe0 = @array_slice($Ec, 3); if (!(!$Fe0 and strlen($D58) > 30)) { goto d965; } $Fe0[] = $D58; $D58 = false; d965: goto F6fe; ca85: $ae8 = false; if (!(substr($name, 0, 1) == "\44")) { goto A4a2; } $ae8 = true; A4a2: $fe4["\x6e\141\155\x65"] = fbf($name); goto ceff; fb5b: $fe4["\x66\163\x65\x61\x72\x63\x68"] = lowcase($name . strip_tags($D58) . strip_tags($fe4["\x64\145\163\143"])); $e61[] = $fe4; $Ec = array(); bf8c: goto af95; goto d7dc; d7dc: a7be: if (!(substr($Df0, 0, 1) == "\x5b")) { goto B4c3; } $d69 = explode("\x2b", inside("\133", "\135", $Df0)); foreach ($d69 as $b7 => $Ff) { $d69[$b7] = strtolower(trim($Ff)); Ec0b: } D418: goto Dd6f; c95b: $A58 = ''; C2ed: if (!(substr($A58, 0, 1) != "\44")) { goto F9b4; } $ae8 = true; F9b4: goto f7f0; fd22: } c94a: sort($e61); function Bb4($name, $a12 = array()) { $script = $GLOBALS[$name]; $Bfe = array(); foreach (explode("\12", $script) as $b7 => $F4) { goto Ff46; Bfca: goto b38c; F536: $D7e = inside("\44", "\75", $F4); $D7e = if_inside('', "\133", $D7e); if ($D7e) { goto A64d; } goto f943; E433: C293: $Fe0 = "\127\162\x69\x74\164\x65\156\x20\x69\156\x20\74\163\164\x72\x6f\156\147\x3e{$name}\56\160\150\x70\x3c\x2f\x73\164\x72\157\156\x67\76\x20\141\164\x20\x6c\x69\156\x65\x20\74\x73\164\x72\x6f\x6e\x67\x3e" . ($b7 + 1) . "\x3c\57\163\164\x72\157\x6e\147\76\72"; $Fe0 .= "\74\x64\151\166\40\143\154\x61\163\163\x3d\47\145\x64\151\164\x6f\162\137\x73\x61\x6d\160\154\145\47\x3e" . htmlspecialchars($F4) . "\x3c\x2f\144\151\x76\x3e"; $Bfe[$D7e] = $Fe0; b38c: goto c458; f943: goto b38c; A64d: $D7e = "\44" . $D7e; if (!in_array($D7e, $a12)) { goto C293; } goto b38c; goto E433; Ff46: $F4 = trim($F4); if (!(@substr($F4, 0, 1) != "\x24")) { goto Fb54; } goto b38c; Fb54: if (find("\x3d", replace("\x3d\x3d", '', $F4))) { goto F536; } goto Bfca; c458: } E6e6: return $Bfe; } function E15($Bfe) { if ($Bfe) { goto C700; } return ''; C700: ksort($Bfe); $res = "\111\156\x63\x6f\155\151\156\x67\x20\x76\141\x72\151\x61\142\x6c\x65\163\72\40\x3c\x64\151\x76\40\x63\154\x61\x73\x73\75\x27\x65\144\151\x74\157\162\x5f\x76\x61\x72\x73\47\76"; foreach ($Bfe as $name => $Fe0) { $res .= "\74\144\151\x76\x20\x63\x6c\141\x73\163\75\47\x65\x64\151\164\157\x72\137\x76\141\x72\x27\40\x6f\156\x63\x6c\x69\143\x6b\x3d\42\163\151\155\x70\154\145\137\x69\156\163\145\x72\164\x28\44\50\x74\x68\151\163\51\x2e\x61\164\x74\x72\x28\x27\x64\x61\164\x61\55\x69\x6e\x73\x27\51\x29\42\40\x64\141\x74\x61\55\x69\x6e\163\75\47{$name}\x27\x3e" . fbf($name) . "\74\144\x69\x76\40\143\x6c\x61\163\163\75\47\x65\144\151\164\x6f\x72\x5f\x76\x61\162\137\x64\145\163\x63\47\x3e\x3c\144\x69\166\40\143\154\x61\163\x73\75\47\145\144\x69\164\157\162\137\x68\61\x27\x3e" . FBF($name) . "\74\x2f\x64\x69\x76\x3e{$Fe0}\x3c\57\144\151\166\x3e\74\x2f\144\x69\166\76"; ee79: } B3fe: return $res . "\x3c\57\144\151\x76\76"; } goto Aa4a; a5a6: Bc(); ?>
editor', {operation:operation, data:xdata, host:'<?php  echo @$aa["\150\157\x73\x74"]; ?>
'}, function(res) {
                    //alert(JSON.stringify(res));
                    $.each(res['sections'], function(index, value) {
                        $('#'+index+' .editor_variables').html(value);
                    });
                }, "json");
                return;
            }

            if (save) $.post( '<?php  BC(); goto a5f0; A7d9: $C15["\154\157\147\151\x6e"] = e15($F4f); $C2["\163\x65\143\164\151\x6f\x6e\163"] = $C15; echo json_encode($C2); die; c8b0: goto abfb; a5f0: ?>
editor', {data:xdata});
            editors_changed.forEach(function(changed,index) {
                if (changed) editors_changed[index] = false;
            });
        }

        function ManualSuggest() {
            var sel = editor.getSelectionRange();
            sel.setEnd(sel.start.row,sel.start.column);
            sel.setStart(sel.start.row,0);
            var line = editor.session.getTextRange(sel);
            if (typeof EditorCallback === "function") EditorCallback(line);

            var initial = (line.indexOf('=')==-1 && line.indexOf('(')==-1);

            // Find the last word
            p = line.length-1;
            var word = '';
            while (is_letter(line.charAt(p))) {
                word = line.charAt(p) + word;
                p--; if (p<0) break;
            }

            sel = editor.getSelectionRange();
            sel.setStart(sel.end.row,sel.end.column);
            sel.setEnd(sel.start.row+1,0);
            line = editor.session.getTextRange(sel);
            // Find the afterpart of them word
            p = 0;
            while (is_letter(line.charAt(p))) {
                word = word + line.charAt(p);
                p++; if (p>=line.length) break;
            }

            //$('h3').html(word);
            man_search(word.toLowerCase(), initial);
        }

    </script>
<?php  goto D0d3; D0d3: function F44($name, $Ea, $description = false, $A4d = false, $height = false, $b18 = false) { goto b538; B326: echo $name; ?>
.on('focus',function(e) { manual_section('<?php  echo $name; ?>
'); });

        editor<?php  echo $name; goto f534; F6ed: ?>
]='<?php  echo $Ea; ?>
';
        editors[<?php  echo $c6; ?>
]=editor<?php  goto Eb38; A165: ?>
" class="editor" style="<?php  if (!$b18) { goto a481; } echo "\x64\151\x73\160\154\141\171\72\x6e\157\156\145"; a481: ?>
">
        <div class="editor_description"><?php  goto A45b; Ea58: ?>
</textarea>
    </div>

    <script>
        var editor<?php  echo $name; ?>
 = ace.edit("editor<?php  echo $name; ?>
");
        // Autoresize editor
        //editor.setAutoScrollEditorIntoView(true);
        <?php  goto B270; a928: ?>
        </div>
        <div id="editor<?php  echo $name; ?>
" class="ace-editor" style="<?php  if (!$height) { goto a3ce; } echo "\150\145\151\x67\x68\164\x3a" . $height . "\x70\170\73"; goto D8b9; ae0e: ?>
.setOption("minLines", 4);
        <?php  b5ea: ?>
        editor<?php  echo $name; ?>
.resize();
        editor<?php  goto f8b9; b538: $d20 = @trim(if_inside("\74\x3f\160\150\x70", '', file_get_contents($Ea))); static $c6 = -1; $c6++; ?>

    <div id="<?php  echo $name; goto A165; a12d: echo $name; ?>
_source').val(),-1);
        editors_changed[<?php  echo $c6; ?>
]=false;
        editors_filename[<?php  echo $c6; goto F6ed; B270: if ($height) { goto b5ea; } ?>
            editor<?php  echo $name; ?>
.setOption("maxLines", 30);
            editor<?php  echo $name; goto ae0e; f534: ?>
.getSession().selection.on('changeCursor', function(e) {
            editor = editor<?php  echo $name; ?>
;
            ManualSuggest();
        });
        editor<?php  echo $name; ?>
.setValue($('#editor<?php  goto a12d; b7ca: ?>
_changed = false;

        editor<?php  echo $name; ?>
.getSession().on('change',function(e) { editors_changed[<?php  echo $c6; ?>
] = true; });
        editor<?php  goto B326; B556: echo $name; ?>
.setAnimatedScroll(true);

        // enable autocompletion and snippets
        //editor<?php  echo $name; ?>
.setOptions({
        //    enableBasicAutocompletion: true,
        //    enableSnippets: false,
        //    enableLiveAutocompletion: true
        //});
        //editor.renderer.setShowGutter(false);
        var asect='';

        editor<?php  echo $name; goto b7ca; D8b9: a3ce: ?>
"></div>
        <textarea style="display:none" id="editor<?php  echo $name; ?>
_source"><?php  echo htmlspecialchars($d20); goto Ea58; e2db: ?>
.getSession().setUseWrapMode(true);
        editor<?php  echo $name; ?>
.setDisplayIndentGuides(true);
        editor<?php  echo $name; ?>
.setBehavioursEnabled(false);
        editor<?php  goto B556; f8b9: echo $name; ?>
.setTheme("ace/theme/dreamweaver");
        editor<?php  echo $name; ?>
.getSession().setMode({path:"ace/mode/php", inline:true});
        editor<?php  echo $name; goto e2db; A45b: echo $description; ?>
</div>
        <div class="editor_variables">
            <?php  if (!$A4d) { goto d675; } echo E15($A4d); d675: goto a928; Eb38: echo $name; ?>
;
        editor = editor<?php  echo $name; ?>
;
    </script>

    <?php  goto Ae0d; Ae0d: }
