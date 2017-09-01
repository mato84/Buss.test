<?php
/*
LiveImport (c) MaxD, 2017. Write to liveimport@devs.mx for support and purchase.
*/
 goto ac71; ed55: echo $LI_DB_USER; ?>
"></p>
    <p>Password: <input type="text" name="pass" value="<?php  echo $LI_DB_PASS; ?>
"></p>
    <p>Database: <input type="text" name="database" value="<?php  echo $LI_DB; goto C14e; C32a: B20("\x4c\x49\137\x44\x42\137\120\x41\123\123", $LI_DB_PASS); A8(''); Fcec: B496: if (isset($LI_DB)) { goto a87c; } goto f437; f437: $LI_DB = "\154\151\x76\x65\x69\155\160\157\162\164"; a87c: if (isset($LI_DB_SERV)) { goto B844; } $LI_DB_SERV = "\x6c\x6f\x63\141\154\x68\157\x73\164"; B844: goto dca1; Ef0c: if (!$efc) { goto e6d5; } ?>
        <h3 style="color: red"><?php  echo $efc; ?>
</h3>
    <?php  e6d5: goto C564; ac71: $efc = false; if (!($_SERVER["\x52\x45\x51\x55\x45\x53\124\x5f\x4d\105\124\x48\x4f\x44"] == "\120\117\x53\124")) { goto B496; } $LI_DB = $_POST["\x64\x61\x74\x61\x62\x61\x73\145"]; $LI_DB_SERV = $_POST["\x73\x65\162\x76"]; $LI_DB_USER = $_POST["\165\163\145\162"]; goto Cacd; dca1: if (isset($LI_DB_USER)) { goto A50c; } $LI_DB_USER = "\x72\157\157\164"; A50c: if (isset($LI_DB_PASS)) { goto D1c2; } $LI_DB_PASS = "\x72\x6f\x6f\x74"; goto d6ba; d6ba: D1c2: require bd . "\154\x69\x62\x2f\143\157\x64\x65\x2f\143\145\62\61\x2e\160\150\160"; ?>

<form data-ajax="false" action="<?php  bC(); ?>
db" method="post">

    <?php  goto Ef0c; C564: ?>

    <h2> MySQL Database Details </h2>

    <p><?php  echo e6; ?>
 requires database to keep data.</p>

    <p>Server: <input type="text" name="serv" value="<?php  echo $LI_DB_SERV; ?>
"></p>
    <p>User: <input type="text" name="user" value="<?php  goto ed55; Cacd: $LI_DB_PASS = $_POST["\x70\141\x73\x73"]; if (!li_db_connect()) { goto Fcec; } B20("\x4c\111\137\104\x42", $LI_DB); B20("\x4c\x49\137\x44\102\x5f\123\105\x52\x56", $LI_DB_SERV); B20("\114\111\137\x44\102\x5f\x55\x53\105\x52", $LI_DB_USER); goto C32a; C14e: ?>
"></p>

    <input type="submit" data-direction="reverse" data-inline="true" data-icon="check" data-theme="b" value="Connect"/>


</form>
