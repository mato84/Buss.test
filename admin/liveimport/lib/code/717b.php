<?php
/*
LiveImport (c) MaxD, 2017. Write to liveimport@devs.mx for support and purchase.
*/
 goto E836; D0e3: Ea03: @($settings = Dc()); if (!($_SERVER["\122\105\x51\x55\105\x53\x54\x5f\115\x45\x54\110\x4f\x44"] == "\120\x4f\123\x54")) { goto c208; } $d84 = $_POST["\x66\151\x6c\145\x6e\141\x6d\145"]; $settings["\x66\x69\x6c\x65\156\141\155\x65"] = $d84; goto c14e; Eef0: ?>

<script src="lib/static/mxUpload.js"></script>

<script type="text/javascript">
    function FilenameChange() {
     $('#error').hide(250);
     if ($('#filename').val()) $('#continue').show(250);
        else $('#continue').hide(250);
    }
</script>
<br/>
<h1><?php  echo ba7("\111\x6d\160\157\x72\164\x20\120\x72\x6f\144\165\x63\164\x73\40\146\x72\x6f\x6d\40\x46\151\x6c\x65"); ?>

    <?php  if (!@(!$_GET["\x72\x6f\x75\164\x65"])) { goto Cc05; } ?>
        &nbsp;<span style="color: #AAA; font-weight: normal">or</span>
        <a style="font-size:15px" data-role="button" data-direction="slideup" data-inline="true" data-icon="shop" href="<?php  goto da71; De12: ?>

<br/>

<?php  if (!@$_GET["\x72\157\165\x74\145"]) { goto fa19; } ?>
    <a data-role="button" data-direction="reverse" data-inline="true" data-icon="arrow-l" href="<?php  bc(); ?>
title"><?php  goto e56e; F3d0: ?>
</a>
    <div style="width:527px; display: inline-block">
        <input oninput="FilenameChange()" onchange="FilenameChange()" data-inline="true" data-mini="true" type="text" name="filename" id="filename" value="<?php  echo @$settings["\146\151\154\x65\156\141\155\145"]; ?>
" />
    </div>
<br/>

<div id="mxprogress" style="display:none; color: green"><br/><?php  echo Ba7("\x50\154\145\141\x73\145\x20\x77\141\x69\x74\54\40\165\x70\x6c\x6f\141\x64\151\x6e\147"); ?>
...<br/><br/>

<div id="progressbar" className="progressbar" style="background-color: #ccc; height:24px; width:100%">
    <div id="pdone" style="background-color: green; height:24px; width:0"></div>
</div>

</div>

<div style="display:none">
    <input type="file" id="filepicker" onchange="mxUpload();"/>
</div>

<?php  goto C48c; E836: ini_set("\x64\x69\x73\x70\x6c\x61\171\x5f\163\164\141\162\x74\165\x70\137\145\x72\162\x6f\x72\x73", 1); ini_set("\144\151\163\x70\x6c\141\x79\137\145\x72\162\x6f\x72\x73", 1); error_reporting(-1); $donor_id = @$_GET["\151\x64"]; if ($donor_id) { goto C273; } goto c5fa; b5dc: echo "\x73\x74\171\x6c\145\75\42\x64\x69\x73\160\x6c\141\x79\x3a\x20\x6e\157\156\145\42"; fa6f: ?>
><input type="submit" data-inline="true" data-icon="check" data-theme="b" value="<?php  echo ba7("\103\157\156\164\x69\156\165\145"); ?>
" onclick="$('.ui-btn').addClass('ui-disabled'); $('#wait').show(300);"/></span>

    <?php  goto c7c1; c5fa: $donor_id = 1; C273: DB($donor_id); if (!($aa["\144\164\x79\160\145"] != "\146\151\x6c\145")) { goto Ea03; } die("\x54\x68\x69\x73\x20\144\x6f\156\x6f\x72\40\x69\163\40\156\157\x74\40\111\x6d\160\x6f\162\x74\55\x74\x79\160\145"); goto D0e3; B8a8: echo ba7("\x46\151\154\x65\x20\x70\x61\164\x68"); ?>
 (<?php  echo BA7("\x73\145\162\166\x65\x72\x20\x70\141\x74\x68\x20\157\162\40\x55\122\x4c"); ?>
):
</div>

<a style="font-size:13px" id="ubutton" data-icon="arrow-u" data-theme="e" data-mini="true" data-inline="true" data-role="button" onclick="document.getElementById('filepicker').click();">
    <?php  echo bA7("\125\x70\x6c\157\x61\x64\x20\x66\151\x6c\x65"); goto F3d0; c14e: $A20 = $d84; if (!($Bb = strrpos($A20, "\x2f"))) { goto E3fe; } $A20 = substr($A20, $Bb + 1); E3fe: $settings["\163\150\157\x72\x74\137\x66\151\154\145\x6e\x61\x6d\x65"] = $A20; goto Bed3; C48c: if (!@$settings["\145\162\162\x6f\x72"]) { goto f39d; } ?>
<div id="error" style="background-color: #ffd5c2; padding: 5px; color: red">
    <?php  echo $settings["\145\162\162\x6f\x72"]; ?>
</div>
<?php  f39d: goto De12; e56e: echo BA7("\103\141\156\x63\145\154"); ?>
</a>
<?php  fa19: ?>
<span id="continue" <?php  if (!(@(!$settings["\146\151\x6c\x65\156\141\x6d\x65"]) or @$settings["\145\x72\162\157\162"])) { goto fa6f; } goto b5dc; da71: Bc(); ?>
newsite"><?php  echo Ba7("\x49\155\x70\157\x72\164\40\146\162\157\155\x20\x57\x65\x62\x2d\x73\x69\x74\x65"); ?>
</a>
    <?php  Cc05: goto Abb7; c7c1: if (!$aa["\164\157\x74\x61\x6c\137\x65\x6e\164\x69\164\x69\145\x73"]) { goto d920; } ?>
    <a onclick="if (confirm('Do you want to delete <?php  echo $aa["\164\157\x74\x61\154\x5f\x65\x6e\164\x69\164\151\x65\x73"]; ?>
 imported products?'))
        window.location = 'index.php?op=ajax&command=delete_products&amp;id=<?php  echo $donor_id; goto e12a; F630: echo ba7("\x53\x75\x70\x70\x6f\162\164\145\144\x20\146\x69\154\145\x20\164\171\x70\x65\163"); ?>
: <img style="margin-bottom: -2px; margin-left:10px; margin-top: 7px; margin-right: 13px" src="lib/static/formats.png" />
    </div>

</form>
<br/>
<div id="wait" style="display:none; background-color: #d3d9cf; padding: 5px; color: green">
    <?php  echo BA7("\x50\154\145\141\x73\145\x20\x77\141\151\164\x2c\40\x61\156\x61\x6c\x79\x7a\x69\156\x67"); goto ffd7; Abb7: ?>
</h1>


<br/>
<form rel="external" data-ajax="false" action="<?php  bC(); ?>
import&id=<?php  echo $donor_id; ?>
" method="post">
<div style="padding-left:132px; color: #AAA; font-size: 14px">
    <?php  goto B8a8; Bed3: $settings["\146\x69\x6c\x65\137\x69\x64"] = $A20; aA9($settings); A8("\151\x6d\x70\x6f\x72\164\x32\x26\165\160\x64\x61\164\x65\75\61\46\x69\x64\x3d" . $donor_id); c208: require bd . "\154\151\x62\57\143\157\144\x65\57\143\x65\62\x31\x2e\160\150\160"; goto Eef0; e12a: ?>
'" style="font-size:11px" class="ui-link ui-btn ui-btn-a ui-icon-delete ui-btn-icon-left ui-btn-inline ui-shadow ui-corner-all" role="button">
        Delete <?php  echo $aa["\164\157\164\x61\154\137\x65\156\164\x69\164\x69\x65\x73"]; ?>
 imported products</a>
    <?php  d920: ?>
    <div style="float:right; font-size: 14px; margin-top: -5px; color:#AAA">
        <?php  goto F630; ffd7: ?>
...
</div>
