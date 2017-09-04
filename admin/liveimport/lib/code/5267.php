<?php
/*
LiveImport (c) MaxD, 2017. Write to liveimport@devs.mx for support and purchase.
*/
 goto C99a; E574: a766: if (!empty($settings["\x6d\141\x74\x63\x68"])) { goto B9dc; } $settings["\155\x61\x74\143\150"] = ''; B9dc: $B5 = query("\x53\x45\114\x45\103\124\40\151\x6e\x73\x5f\x69\144\40\106\x52\117\115\40\x70\x61\162\x73\x65\x6d\170\137\151\156\x73\40\x57\110\x45\122\x45\40\144\x6f\156\x6f\162\137\x69\x64\75{$donor_id}")->row; goto Acd1; B382: ?>
</td>
        <?php  foreach ($C2 as $b7 => $f5) { goto a728; a728: ?>
            <td id="product<?php  echo $b7; ?>
" class="product" onmouseover="$('.row<?php  echo $b7; ?>
').addClass('grey')"
                onmouseout="$('.row<?php  goto Aef7; aa6b: ?>
 <span class="product_num"><?php  echo $b7 + 1; ?>
</span> <span style="color:#ccc">Click here to test</span>
                </a>
                <span style="display:none; width:100px; color:#ccc"><?php  echo ba7("\x53\153\x69\x70\x70\x65\x64"); ?>
</span>
            </td>
        <?php  goto E1b3; E1b3: e637: goto A750; Aef7: echo $b7; ?>
').removeClass('grey')">
                <a href="<?php  echo B0("\151\x6d\160\137" . $b7); ?>
" onclick="SaveGo('')" target="_blank" style="text-decoration: none; color: white">
                        <?php  echo bA7("\x50\162\157\144\x75\x63\x74"); goto aa6b; A750: } Abf3: ?>
    </tr>
<?php  foreach (reset($C2) as $e0c => $f70) { goto b6b8; cf09: echo $e0c; ?>
</option>
                <?php  foreach ($Bfe as $D7e) { goto db43; db43: if (strpos(@$settings["\x63\157\154\x73"][$e0c], "\x3a") !== false) { goto Cafd; } if (!(strpos(@$settings["\143\157\154\x73"][$e0c], "\100\x23") !== false)) { goto E2ed; } if (!($D7e == "\157\x70\x74\151\x6f\156")) { goto e624; } $D7e = $settings["\x63\157\x6c\163"][$e0c]; e624: goto aa3b; aa3b: E2ed: goto A56a; Cafd: if (!($D7e == "\x61\x74\x74\x72\x69\142\165\x74\x65")) { goto F372; } $D7e = $settings["\x63\x6f\x6c\x73"][$e0c]; goto Ef47; cdd1: if (!(@$settings["\143\157\154\x73"][$e0c] == $D7e)) { goto ffb1; } echo "\163\145\154\x65\143\x74\x65\144\75\x22\164\x72\165\145\42"; ffb1: ?>
                        ><?php  echo str_replace("\100\x23", '', $D7e); goto d259; Ef47: F372: A56a: ?>
                    <option value="<?php  echo $D7e; ?>
"
                            <?php  goto cdd1; d259: ?>
</option>
                <?php  A212: goto e7bd; e7bd: } d0d2: ?>
        </select></td>
        <?php  goto f5ce; f5ce: foreach ($C2 as $b7 => $f5) { ?>
            <td class="row<?php  echo $b7; ?>
"><?php  echo shorten_text($f5[$e0c], 500); ?>
</td>
        <?php  Ff3a: } E81b: ?>
    </tr>
<?php  Fcd5: goto F65a; b6b8: ?>
    <tr>
        <td><select onchange="RoleChange(this)" data-mini="true" name="col<?php  echo $e0c; ?>
">
                <option value="<?php  echo $e0c; ?>
"><?php  goto cf09; F65a: } goto fde0; fde0: Aa95: ?>
</table>
</div>
    <br/>
    <?php  f44("\151\155\160\157\162\164", "\x63\x6f\156\x66\151\147\57" . $aa["\150\157\x73\164"] . "\x2f\x74\x61\163\x6b\137\x64\x65\x66\x61\165\154\164\56\x70\x68\160", "\x3c\x73\x74\x72\157\x6e\147\76\x50\162\157\x64\165\x63\164\x20\x50\110\120\x20\123\143\162\x69\160\164\72\x3c\x2f\x73\164\x72\157\x6e\147\76\40\151\x74\x20\x77\x69\x6c\x6c\40\x62\x65\40\145\170\145\143\165\x74\x65\144\x20\x66\157\162\x20\145\141\143\x68\40\160\x72\x6f\144\165\x63\x74\40\x62\x65\x66\157\x72\x65\x20\x69\156\x73\145\162\x74\x69\x6e\147", $B71); ?>
<a data-role="button" data-direction="reverse" data-inline="true" data-icon="arrow-l" href="<?php  BC(); goto c785; A47d: echo Ba7("\111\x6d\x70\157\162\x74\x20\x53\x63\150\145\155\145\40\146\x6f\162"); ?>
 <font color='grey'><?php  echo $A20; ?>
</font>
        <span style="font-size:16px; color:green; font-weight: normal">(<?php  echo $settings["\x72\157\x77\163"]; goto c697; c785: ?>
"><?php  echo BA7("\103\x61\156\143\145\x6c"); ?>
</a>
<input type="submit" name="settings" data-direction="reverse" data-inline="true" data-icon="gear" value="<?php  echo BA7("\124\141\x73\153\40\123\145\x74\164\x69\156\x67\x73"); ?>
"/>
    <?php  goto ab77; C6d6: $Df9 = "\x69\155\x70\x6f\x72\x74"; require bd . "\154\x69\142\57\143\x6f\144\x65\57\67\67\60\x35\x2e\160\x68\160"; ?>

<script type="text/javascript">
    function SkipChange() {
     data_changed=true;
     var n = $('#skip').val();
     for(var i=0;i<<?php  echo count($C2); ?>
; i++)
        if (i<n-1) {
            $('#product' + i).hide();
            $('.row' + i).hide();
        } else if (i == n-1) {
            $('#product'+i+' a').hide();
            $('#product'+i+' > span').show();
            $('#product'+i).show();
            $('.row'+i).show();
        } else {
            $('#product'+i+' .product_num').html(i-n+1);
            $('#product'+i+' a').show();
            $('#product'+i+' > span').hide();
            $('#product'+i).show();
            $('.row'+i).show();
        }
    }
</script>

<form id="form" rel="external" data-ajax="false" action="<?php  goto c285; dbc8: F48d: ?>
        <input type="submit" name="start" data-direction="reverse" data-inline="true" data-icon="play" data-theme="b" value="<?php  echo ba7("\x53\x74\x61\162\x74"); ?>
"/>
        <input type="submit" name="create_donor" data-inline="true" data-icon="calendar" data-theme="d" value="<?php  echo BA7("\123\x61\x76\x65\40\146\x6f\x72\x20\x50\145\x72\151\x6f\144\151\x63\x20\x49\x6d\x70\157\x72\x74"); goto D169; d890: goto c066; b020: $C2 = load_spreadsheet($Af2, 0, 30); if ($C2) { goto f8be; } $settings["\x65\162\162\x6f\x72"] = "\x49\x6e\166\x61\x6c\x69\x64\40\x66\x69\x6c\x65\x20\146\157\162\155\x61\164\x2e"; goto d207; C99a: $donor_id = @$_GET["\151\x64"]; if ($donor_id) { goto ec3d; } $donor_id = 1; ec3d: dB($donor_id); goto A7fb; C4fc: a8("\x69\155\x70\157\x72\x74\46\x69\x64\75{$donor_id}"); e4fb: if (!isset($_POST["\x73\x61\x76\145"])) { goto D921; } a8("\x74\x69\x74\x6c\x65"); D921: goto Da5f; ab77: if ($donor_id == 1) { goto F48d; } ?>
        <input type="submit" name="save" data-direction="reverse" data-inline="true" data-icon="check" data-theme="b" value="<?php  echo Ba7("\x53\141\166\x65"); ?>
"/>
    <?php  goto a990; goto dbc8; D0c5: ?>
        <input type="submit" name="change_file" data-theme="e" data-direction="reverse" data-inline="true" data-icon="calendar" value="<?php  echo bA7("\x43\x68\x61\x6e\147\145\x20\146\151\154\145"); ?>
"/>
    <?php  F06d: ?>

    <h2><?php  goto A47d; D92d: echo $settings["\x73\x6b\x69\x70"]; ?>
" />
    </span>
    <a class="ui-btn ui-icon-carat-r ui-btn-icon-notext ui-btn-inline ui-mini" style="margin-left: -3px"
       onclick="$('#skip').val($('#skip').val()-1+2); SkipChange()"></a>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php  echo Ba7("\x4d\141\164\x63\150\x20\x65\170\151\x73\164\151\156\x67\40\x70\x72\157\x64\165\x63\164\x73\40\x62\x79"); ?>
: &nbsp;
    <span style='width:90px; display:inline-block'>
        <select onchange="data_changed=true" name="match" data-inline='true' data-mini='true'">
            <option value="" ?>(<?php  echo BA7("\x6e\x6f\x6e\145"); goto dc40; b53e: $B71["\44\x72\x6f\167\137\x6e"] = "\103\165\162\162\145\156\x74\40\162\x6f\167\x20\x6e\165\155\x62\x65\x72\56"; $B71["\44\x63\145\154\154\x73"] = "\x41\x72\x72\x61\x79\40\x6f\146\40\141\x6c\154\x20\162\x6f\x77\40\x63\145\x6c\x6c\x73\x20\166\x61\x6c\x75\x65\x73\x2e"; foreach (reset($C2) as $e0c => $f70) { $B71["\44" . $e0c] = "\x43\157\x6c\x75\x6d\x6e\40\74\x73\164\162\157\x6e\x67\x3e{$e0c}\x3c\x2f\x73\x74\162\x6f\x6e\x67\x3e\40\x66\162\157\x6d\40\164\150\x65\x20\x63\165\162\x72\145\x6e\164\40\x72\157\167\x20\157\x66\40\74\x73\x74\162\157\x6e\x67\x3e{$A20}\x3c\x2f\x73\164\x72\x6f\156\x67\x3e"; ec72: } ed98: require bd . "\x6c\x69\x62\x2f\x63\157\x64\x65\x2f\143\145\x32\x31\x2e\160\150\160"; goto C6d6; D169: ?>
"/>
    <?php  a990: ?>

<script type="text/javascript">

    var data_changed = false;
        group = "";

    function RoleChange(sel) {
        data_changed = true;
        if (sel.selectedIndex == <?php  echo array_search("\141\x74\x74\x72\x69\142\x75\164\145", $Bfe) + 1; ?>
) {
            def = group;
            if (sel.value != 'attribute') def = sel.value;
            name = prompt('Enter attribute name (you can use specify group like "Group:Attr")', def);
            if (name == 'null' || !name) {
                sel.selectedIndex = 0;
                return;
            }
            if (name.indexOf(':')==-1) name = ':' + name;
            group = name.substr(0, name.indexOf(':'));
            if (group) group = group + ':';
            sel.options[sel.selectedIndex].text = name;
            sel.options[sel.selectedIndex].value = name;
        }
        if (sel.selectedIndex == <?php  goto B614; B4e9: file_put_contents($e93, serialize($C2)); aA9($settings); c066: if (!empty($settings["\x73\153\151\160"])) { goto a766; } $settings["\163\x6b\151\160"] = 0; goto E574; E2e0: F455: $settings["\x63\x6f\x6c\163"] = $Af5; aA9($settings); if (!isset($_POST["\141\x6a\141\x78"])) { goto bae1; } die; goto D4d4; d207: aa9($settings); a8("\151\155\x70\157\162\164\46\151\144\x3d" . $donor_id); f8be: $settings["\x72\x6f\x77\x73"] = $b02; $settings["\145\162\162\157\x72"] = false; goto B4e9; F5b2: $name = $A20; $name = if_inside('', "\x3f", $name); $name = str_replace("\x3f", '', $name); $name = if_inside('', "\x26", $name); $name = str_replace("\x26", '', $name); goto B84a; Da5f: if (!isset($_POST["\x73\164\141\x72\x74"])) { goto fdae; } c3($donor_id); A8("\x74\151\164\x6c\x65"); fdae: if (!isset($_POST["\143\162\x65\141\164\145\x5f\144\157\x6e\157\162"])) { goto add2; } goto F5b2; dc40: ?>
)</option>
            <?php  foreach ($f7b as $fe4) { ?>
                <option value="<?php  echo $fe4; ?>
" <?php  if (!($fe4 == $settings["\x6d\x61\x74\143\x68"])) { goto B5aa; } echo "\163\x65\154\145\143\x74\x65\x64\x3d\x22\x74\x72\165\145\42"; B5aa: ?>
>
                    <?php  echo $fe4; ?>
                </option>
            <?php  A3cd: } d6c7: ?>
        </select>
    </span>
<br/><br/>
<style type="text/css">
    .mxtable {
        font-size: 10px;
        background: #ddd;
        padding: 5px;
        border: 1px solid grey;
    }

    .product {
        background: grey;
        white-space: nowrap;
    }

    .product:hover {
        background: #456f9a;
    }

    .mxtable tr {
        background: white;
    }

    .mxtable tr:hover {
        background: #eee;
    }

    .grey {
        background: #eee;
    }

    .mxtable td {
        border: 1px solid grey;
        vertical-align: top;
        padding: 4px;
    }

    .ui-select {
        margin-top: 0;
        margin-bottom: 0;
    }

</style>

<div style="overflow:auto; background: #eee">
<table class="mxtable">
    <tr style="font-weight: bold; color: white; text-shadow: none;"><td style="background: grey;"><?php  echo Ba7("\106\x69\145\154\144"); goto B382; D4d4: bae1: if (!isset($_POST["\163\x65\164\x74\151\156\147\163"])) { goto C08b; } A8("\x69\x6e\x73\46\x69\144\x3d\x2d\x31\46\x64\157\x6e\x6f\162\x5f\151\144\x3d{$donor_id}\x26\142\x61\x63\153\75\151\155\160\157\162\x74\x32"); C08b: if (!isset($_POST["\x63\x68\x61\x6e\147\145\137\x66\x69\x6c\145"])) { goto e4fb; } goto C4fc; c285: Bc(); ?>
import2&id=<?php  echo $donor_id; ?>
" method="post">

    <?php  if (!($donor_id > 1)) { goto F06d; } goto D0c5; A7fb: if (!($aa["\x64\x74\171\x70\145"] != "\x66\151\154\x65")) { goto efc3; } die("\x54\x68\x69\163\40\x64\157\156\x6f\162\40\151\163\x20\x6e\x6f\x74\40\111\x6d\x70\x6f\x72\x74\x2d\164\x79\160\145"); efc3: $settings = dc(); $Af2 = "\x74\145\x6d\x70\57"; goto D5d7; cafd: a8("\151\x6d\x70\x6f\162\164\46\151\144\75" . $donor_id); B48f: $e93 = "\x74\x65\x6d\x70\x2f\151\155\x70\x6f\x72\164\137{$donor_id}" . "\x5f\160\162\145\166\x69\145\x77\x2e\x64\x61\x74"; if ($D3f or !file_exists($e93) or filemtime($e93) < filemtime($Af2)) { goto b020; } $C2 = unserialize(file_get_contents($e93)); goto d890; e302: $Bfe = explode("\x20", "\143\141\164\x65\x67\x6f\162\171\40\x64\x65\163\143\x72\151\160\x74\x69\x6f\x6e\x20\144\x6f\167\x6e\154\x6f\x61\144\x20\145\x61\x6e\40\150\x65\x69\x67\150\x74\x20\x69\x6d\141\147\x65\40\151\x73\x62\156\x20\x6a\x61\156\x20\154\145\156\x67\x74\x68\40\x6c\x6f\143\141\164\151\x6f\156\40\x6d\x61\x6e\x75\x66\141\x63\164\165\x72\145\162\40\155\145\164\x61\x5f\x64\145\163\x63\162\x69\x70\x74\x69\x6f\x6e\x20\x6d\145\164\141\137\x6b\145\171\x77\157\x72\x64\x20\x6d\157\144\x65\154\40\155\x70\156\40\156\141\155\145\x20\x70\162\x69\143\145\x20\156\145\167\137\160\162\151\143\x65\40\x70\x72\157\144\165\143\x74\x5f\x69\144\40\161\x75\141\156\164\x69\164\x79\40\x73\145\157\137\x75\x72\154\x20\163\x6b\x75\40\x74\x61\147\163\x20\165\x70\143\x20\167\145\x69\x67\x68\x74\40\x77\151\144\x74\150\40\150\x31\40\164\151\x74\x6c\145\40\x61\x74\x74\162\151\142\x75\x74\x65\x20\x6f\160\164\151\x6f\x6e\40\157\160\164\151\x6f\156\x5f\x69\155\141\147\145\40\x6f\x70\x74\x69\157\156\137\160\x72\151\x63\145\40\x6f\x70\x74\151\157\x6e\x5f\161\165\x61\x6e\164\x69\x74\x79"); $f7b = explode("\40", "\145\141\x6e\x20\151\x73\142\156\40\152\141\156\40\155\x6f\x64\x65\x6c\x20\x6d\160\156\40\x6e\141\x6d\145\x20\x70\162\157\144\165\143\x74\x5f\151\144\40\x73\x65\157\137\165\162\x6c\40\163\153\x75\40\x75\160\x63"); sort($Bfe); sort($f7b); $B71 = array(); goto b53e; a891: @unlink("\x74\145\155\x70\57" . $donor_id . "\x5f\x69\155\160\x6f\x72\164\x65\x64"); $settings["\x73\x6b\151\x70"] = $_POST["\163\x6b\x69\160"]; $settings["\155\x61\x74\143\150"] = $_POST["\155\141\x74\x63\x68"]; $Af5 = array(); foreach ($_POST as $b7 => $x) { if (!(substr($b7, 0, 3) == "\x63\x6f\154")) { goto e746; } $Af5[substr($b7, 3)] = $x; e746: E18b: } goto E2e0; B614: echo array_search("\x6f\160\164\x69\157\156", $Bfe) + 1; ?>
) {
            def = group;
            if (sel.value != 'option') def = sel.options[sel.selectedIndex].text;
            name = prompt('Enter option name', def);
            if (name == 'null' || !name) {
                sel.selectedIndex = 0;
                return;
            }
            name = name.replace(':', '');
            sel.options[sel.selectedIndex].text = name;
            sel.options[sel.selectedIndex].value = '@#' + name;
        }
    }

    function SaveGo(url) {
        save_editors();
        if (data_changed) {
            $.post( '<?php  Bc(); ?>
import2&ajax=1&id=<?php  echo $donor_id; goto Ec72; Acd1: $A20 = $settings["\146\x69\154\x65\x6e\x61\155\145"]; if (!($Bb = strrpos($A20, "\57"))) { goto b568; } $A20 = substr($A20, $Bb + 1); b568: if (!($_SERVER["\122\x45\121\x55\105\123\124\137\x4d\x45\x54\x48\117\104"] == "\x50\117\x53\x54")) { goto E220; } goto a891; c697: ?>
 <?php  echo Ba7("\162\x6f\167\x73"); ?>
)</span>
    </h2>

<?php  echo ba7("\106\151\162\x73\x74\40\162\x6f\x77\x73\x20\164\x6f\x20\x73\153\x69\x70"); ?>
:&nbsp;
    <a class="ui-btn ui-icon-carat-l ui-btn-icon-notext ui-btn-inline ui-mini" style="margin-right: -3px"
        onclick="if ($('#skip').val()>0) $('#skip').val($('#skip').val()-1); SkipChange()"></a>
    <span style='width:50px; display:inline-block'>
        <input onchange="SkipChange()" name="skip" id="skip" data-inline='true' data-mini='true' value="<?php  goto D92d; B84a: $name = if_inside('', "\x3d", $name); $name = str_replace("\x3d", '', $name); header("\114\157\143\141\x74\151\x6f\156\72\x20\x68\x74\x74\x70\x3a\57\57\x6c\x69\166\145\151\155\160\157\x72\164\x2e\144\145\x76\x73\56\155\x78\57\x73\x65\162\166\151\x63\x65\57\x70\x65\x72\x69\x6f\x64\x69\143\56\x70\x68\x70\77\156\141\x6d\x65\75" . $name); add2: E220: goto e302; D5d7: $d53 = !@$_GET["\165\160\144\x61\164\x65"]; $D3f = http_if_file_changed($Af2, $settings["\x66\151\154\145\x6e\x61\155\145"], $d53); if (file_exists($Af2)) { goto B48f; } $settings["\x65\x72\162\x6f\162"] = "\x46\151\154\145\40\x6e\x6f\x74\40\x66\x6f\x75\156\144\56"; Aa9($settings); goto cafd; Ec72: ?>
', $('#form').serialize().replace(/\%3A\%2F\%2F/g,".%2F%2F"), function(data2) {
                if (url) {
                    location = url;
                }
            });
        } else if (url) location = url;
    }

    SkipChange();
    $(document).on('submit','form',function(){
        save_editors();
    });
</script>
