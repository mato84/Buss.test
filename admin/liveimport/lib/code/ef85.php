<?php
/*
LiveImport (c) MaxD, 2017. Write to liveimport@devs.mx for support and purchase.
*/
 goto C66b; d203: ?>
login" method="post">

    <?php  if (!$efc) { goto A65a; } ?>
        <h3 style="color: red"><?php  echo $efc; ?>
</h3>
    <?php  goto E5c6; f395: if ($bd4) { goto f523; } A8(''); f523: F063: if (!empty($bb9)) { goto dc63; } goto Bbe5; e145: A8(''); Dd0b: goto e87d; Ac42: if (!($_POST["\160\141\163\163\167\157\x72\x64"] != $_POST["\x70\x61\x73\x73\x77\x6f\x72\x64\62"])) { goto a5fa; } goto b521; f65c: if (!$bd4) { goto a153; } $bd4 = false; a153: goto F063; a767: goto f395; C66b: $bd4 = @$_GET["\143\x68\141\x6e\x67\x65"]; if (!isset($_POST["\x70\141\x73\163\x77\x6f\x72\144\62"])) { goto D043; } $bd4 = true; D043: if (F6()) { goto a767; } goto f65c; Eca9: if ($bb9 == sha1($_POST["\x70\x61\163\163\167\157\x72\144"])) { goto f831; } $efc = "\x49\x6e\x76\141\154\151\x64\40\160\x61\163\x73\167\157\162\144\x21"; goto Dd0b; f831: a50(); goto e145; ff2d: e87d: d807: require bd . "\x6c\x69\x62\x2f\x63\x6f\144\x65\57\x63\x65\x32\x31\56\160\150\x70"; ?>

<form data-ajax="false" action="<?php  bc(); goto d203; Bbe5: $bd4 = true; dc63: $efc = false; if (!($_SERVER["\x52\x45\121\x55\x45\x53\124\137\x4d\105\124\110\117\x44"] == "\120\x4f\123\124")) { goto d807; } if ($bd4) { goto Ac42; } goto Eca9; b521: $efc = "\x50\x61\x73\x73\167\157\x72\x64\x73\x20\144\157\x65\x73\x6e\x27\164\40\x6d\141\164\x63\150\x2c\40\x74\162\x79\x20\x61\x67\x61\x69\156\56"; a5fa: B20("\x4c\x49\x5f\120\x41\123\x53", sha1($_POST["\x70\x61\163\x73\x77\x6f\162\x64"])); A50(); A8(''); goto ff2d; E5c6: A65a: ?>

    <?php  if ($bd4) { goto fc1d; } ?>

        <h2> <?php  echo e6; goto C8a2; C8a2: ?>
 Login </h2>

        <p>Password: <input type="password" name="password"></p>

    <?php  goto a306; fc1d: ?>

        <h2> Access Protection </h2>

        <p>Welcome to LiveImport! Lets record access password.</p>

        <p>Password: <input type="password" name="password"></p>
        <p>Once again: <input type="password" name="password2"></p>

    <?php  a306: goto f78f; f78f: ?>

    <input type="submit" data-direction="reverse" data-inline="true" data-icon="check" data-theme="b" value="OK"/>


</form>
