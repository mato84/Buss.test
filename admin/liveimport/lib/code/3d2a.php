<?php
/*
LiveImport (c) MaxD, 2017. Write to liveimport@devs.mx for support and purchase.
*/
 goto cbc3; ab75: ?>
        <a data-transition="slideup" rel="external" target="_blank" data-role="button" data-icon="grid" data-inline="true" href="<?php  bc(); ?>
log&full=1">Detailed</a>
    <?php  F298: ?>
    <a data-transition="slideup" data-role="button" rel="external" data-theme="b" data-icon="delete" data-inline="true" href="<?php  goto cd6a; cd6a: bC(); ?>
log&clear=1">Clear</a>
    <script type="text/javascript">
        $("html, body").animate({ scrollTop: $(document).height()+50000 }, "slow");
    </script>
<?php  F919: goto Ed12; E9c7: goto B40d; cf8a: fclose($B22); Bef7: ?>
    <a id="end"/>
    <a data-transition="reverse" rel="external" data-role="button" data-icon="arrow-l" data-inline="true" href="<?php  goto Ec2a; C2d5: c864: $Ea = "\164\145\155\x70\x2f\x6d\x78\154\157\x67" . rand(1, 10000) . "\56\150\x74\x6d\x6c"; copy($log_file, $Ea); header("\x4c\157\143\141\164\x69\157\156\72\x20" . $Ea); die; goto C5b7; F7a0: $a71 = "\160\165\162\x70\x6c\x65"; a350: if (!$a71) { goto A604; } echo $Ac; A604: goto E9c7; Ec2a: bc(); ?>
">Back</a>
<?php  if (!file_exists($log_file)) { goto F919; } ?>
    <?php  if (@$_GET["\x66\165\x6c\x6c"]) { goto F298; } goto ab75; C5b7: B5d4: require bd . "\154\x69\142\57\143\x6f\x64\x65\x2f\x63\145\x32\61\56\160\150\160"; ?>
    <h2>Log <?php  if (file_exists($log_file)) { goto F80a; } echo "\151\163\x20\145\x6d\x70\164\x79"; goto B3c2; B3c2: F80a: ?>
</h2>
<?php  if (!file_exists($log_file)) { goto Bef7; } @($B22 = fopen($log_file, "\x72")); B40d: goto Ac09; cbc3: if (!isset($_GET["\143\x6c\145\141\x72"])) { goto a395; } if (!file_exists($log_file)) { goto df02; } @unlink($log_file); df02: A8(''); goto C25e; Ac09: if (@feof($B22)) { goto cf8a; } $Ac = fgets($B22); $a71 = ''; if (!strpos($Ac, "\x3a\162\145\x64\42")) { goto f927; } $a71 = "\x72\145\144"; goto B5ec; B5ec: f927: if (!strpos($Ac, "\72\x67\162\x65\145\x6e\42")) { goto bf38; } $a71 = "\x67\162\145\145\x6e"; bf38: if (!strpos($Ac, "\72\x70\x75\162\x70\154\145\x22")) { goto a350; } goto F7a0; C25e: a395: if (!isset($_GET["\146\x75\x6c\x6c"])) { goto B5d4; } if (!($Cf = glob("\164\145\x6d\x70\57\155\170\154\x6f\x67\52\56\150\x74\x6d\154"))) { goto c864; } foreach ($Cf as $Ea) { unlink($Ea); A554: } F6a1: goto C2d5; Ed12: ?>
