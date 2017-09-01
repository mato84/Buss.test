<?php
/*
LiveImport (c) MaxD, 2017. Write to liveimport@devs.mx for support and purchase.
*/
 goto A0f5; D80d: ?>
        </ul>
        <br/>
        <div style="font-size:12px; margin-top:10px; margin-left: -5px">
            <a style="cursor:pointer" onclick="$('#operations').show(300); $('[type=checkbox]').prop('checked', true).checkboxradio('refresh')">Select All</a>
            <?php  if (!($F93 and $Db9)) { goto fc8f; } ?>
                <a style="cursor:pointer"
                   onclick="$('#operations').show(300); $('[type=checkbox]').prop('checked', false).checkboxradio('refresh'); $('.ia').prop('checked', true).checkboxradio('refresh')">
                    / Active</a>
                <a style="cursor:pointer"
                   onclick="$('#operations').show(300); $('[type=checkbox]').prop('checked', false).checkboxradio('refresh'); $('.ip').prop('checked', true).checkboxradio('refresh')">/
                    Inactive</a>
            <?php  fc8f: ?>
            <div id="operations" style="display: none; font-size:15px; margin-left:0px; margin-top:7px; zoom: 0.75; -moz-transform: scale(0.75)">
                Selected tasks
                <input  name="o_run" data-mini="true" type="submit" data-direction="reverse" data-inline="true" data-icon="play" data-theme="b" value="Start"/>
                <input name="o_on" data-mini="true" type="submit" data-direction="reverse" data-inline="true" data-icon="power" data-theme="e" value="On"/>
                <input name="o_off" data-mini="true" type="submit" data-direction="reverse" data-inline="true" data-icon="power" value="Off"/>
                <input name="o_del" onclick="return confirm('Delete selected tasks?')" data-mini="true" type="submit" data-direction="reverse" data-inline="true" data-icon="delete" data-theme="a" value="Delete"/>
                <input name="o_del_goods" onclick="return confirm('Delete products from selected tasks?')" data-mini="true" type="submit" data-direction="reverse" data-inline="true" data-icon="grid" data-theme="a" value="Delete products"/>
                <input name="o_formula" onclick="$(this).val(prompt('Enter price formula for selected tasks', 'X')); return $(this).val().length>0;" data-mini="true" type="submit" data-direction="reverse" data-inline="true" data-icon="edit" data-theme="c" value="Price formula..."/>
            </div>
        </div>
    </form>

    <br/><br/>

</div>

<script>
    $('[type=checkbox]').on('click', function() {$('#operations').show(300)});

</script>

<?php  goto a93a; bd3a: c4e4: $F93 = 0; $Db9 = 0; require bd . "\154\x69\x62\57\x63\x6f\x64\145\x2f\143\145\x32\x31\x2e\x70\x68\x70"; ?>

    <style type="text/css">
        [type=checkbox] {
            margin-left: 2px !important;
            margin-top: 6px !important;
            width: 30px !important;
            height: 30px !important;
        }

        .ui-dialog-contain {
            width: 700px !important;
            max-width: 700px !important;
        }

        .ui-listview .ui-btn {
            font-size: 14px !important;
            padding-left: 40px;
        }

        .ui-li .ui-btn-text a.ui-link-inherit {
            text-overflow: clip !important;
            overflow: visible !important;
            white-space: normal !important;
        }

        .ui-li-count {
            margin-right: 60px;
        }

        .ui-btn-icon-right {
            padding-left: 40px !important;
        }
    </style>

<div data-ajax="false">

    <a rel="external" data-role="button" data-icon="arrow-l" data-inline="true" href="<?php  goto a33a; a33a: bc(); ?>
">Back</a>
    <a rel="external" data-role="button" data-theme="b" data-icon="plus" data-inline="true"
       href="<?php  BC(); ?>
ins&donor_id=<?php  echo $aa["\x64\157\x6e\157\x72\x5f\x69\144"]; goto Acf6; af38: echo $ea3; ?>
" method="post">
        <br/>
        <ul data-role="listview">
            <?php  $a9c = query("\x53\x45\x4c\105\x43\124\x20\52\x2c\x20\x28\x53\105\114\105\x43\124\x20\103\117\125\x4e\x54\x28\x2a\51\40\x46\x52\x4f\115\40\160\x61\162\x73\x65\x6d\x78\x5f\x65\156\x74\x69\x74\151\145\x73\x20\127\110\x45\122\x45\x20\151\x6e\163\137\x69\x64\75\x69\56\151\x6e\163\x5f\151\144\51\x20\141\163\40\x6e\40\x46\122\117\115\40\x70\141\x72\x73\145\155\x78\x5f\x69\x6e\163\40\x69\x20\x57\x48\105\122\x45\40\144\157\x6e\x6f\162\x5f\x69\144\x3d" . $aa["\x64\157\x6e\157\x72\x5f\151\144"] . "\x20\117\122\104\105\122\40\102\x59\x20\164\x69\164\154\145")->rows; foreach ($a9c as $ins) { goto f84d; f49c: e130: ?>
                    <?php  if (!$ins["\x6e"]) { goto E0f2; } ?>
<span class="ui-li-count"><?php  echo $ins["\x6e"]; goto B267; Bd44: if (!$ins["\x73\x74\x61\164\165\x73"]) { goto d6c0; } echo "\x20\x64\x61\x74\x61\55\164\150\145\155\x65\x3d\x22\x65\42"; d6c0: ?>
><input type="checkbox" class="<?php  if ($ins["\163\164\141\164\x75\163"]) { goto c940; } goto B7ac; f84d: if (!($ins["\x74\151\x74\154\145"] == "\x44\145\146\141\165\154\164")) { goto ab89; } goto d510; ab89: if ($ins["\x73\164\141\x74\x75\x73"]) { goto Fb76; } $Db9++; goto cdac; Ccdc: ?>
" name="<?php  echo $ins["\151\x6e\163\137\151\144"]; ?>
"/><a href="index.php?route=ins&id=<?php  echo $ins["\151\156\x73\137\x69\x64"]; ?>
&il=<?php  goto E5c3; B7ac: echo "\151\x70"; goto Bd7f; c940: echo "\x69\x61"; Bd7f: goto Ccdc; E5c3: echo $ea3; ?>
"><?php  echo $ins["\164\151\x74\x6c\x65"]; ?>
</a>
                    <?php  if (!@$_GET["\x69\154"]) { goto e130; } goto c9cc; cdac: goto e3c2; Fb76: $F93++; e3c2: ?>
                <li<?php  goto Bd44; B267: ?>
 products</span><?php  E0f2: ?>
</li>
            <?php  d510: goto B824; c9cc: ?>
                        <a data-icon='play' data-theme='b'
                           href="<?php  echo bc() . "\164\x61\163\153\163\x26\x69\x64\75" . $_GET["\x69\x64"] . "\46\162\165\x6e\75" . $ins["\x69\x6e\163\x5f\151\144"]; ?>
&il=<?php  echo $ea3; ?>
">Start Task</a>
                    <?php  goto f49c; B824: } A3dc: goto D80d; a93a: if (!$ea3) { goto D87e; } ?>
    <style type="text/css">
        .video {
            display: block;
            font-size: 18px;
            background: #DDD;
            padding: 5px;
            text-decoration: none;
            text-shadow: none;
            font-weight: normal !important;
        }

        .video:hover {
            background: #EDEF7D;
        }

        .video img {
            vertical-align: middle;
            margin-right: 7px;
        }

        .video span {
            color: grey !important;
        }
    </style>
    <a target='_blank' href='https://www.youtube.com/watch?v=ZikSxm1p6mo' class="video">
        <img src="lib/static/video.png"/> <span>Video:</span> Automated Processing Setup
    </a>
<?php  D87e: goto ac45; bfbe: echo $aa["\x64\157\156\157\162\x5f\x69\144"]; ?>
&il=<?php  echo $ea3; ?>
">Category Tree</a>


    <h2>Tasks <font color="grey">for <?php  echo $aa["\150\157\163\x74"]; goto a430; Aa90: be7d: F5fe: F2($_GET["\x69\x64"], $_GET["\144\x65\x6c\145\164\145\x5f\x65\156\164\151\164\x69\145\163"]); a8("\x74\141\x73\x6b\163\46\x69\144\75" . $_GET["\151\x64"] . "\x26\151\154\x3d" . $ea3); E2c9: goto a535; a430: ?>
</font></h2>
    <form rel="external" data-ajax="false"
          action="<?php  BC(); ?>
tasks&id=<?php  echo $aa["\144\x6f\156\x6f\x72\x5f\x69\x64"]; ?>
&il=<?php  goto af38; A0f5: $ea3 = @$_GET["\151\154"]; if (!@$_GET["\144\145\154\x65\x74\x65\x5f\145\x6e\164\x69\x74\x69\145\x73"]) { goto E2c9; } if (!(ini_get("\155\141\170\137\x65\x78\145\143\165\164\x69\157\156\x5f\164\151\155\145") < 600)) { goto F5fe; } if (ini_get("\x73\141\146\145\137\155\x6f\x64\145")) { goto be7d; } set_time_limit(600); goto Aa90; da4a: set_time_limit(600); d144: Ec85: foreach ($_POST as $id => $c44) { goto d370; Ace4: a65b: query("\x55\x50\104\101\124\105\40\x70\141\162\163\x65\x6d\170\137\x69\156\163\40\x53\105\124\40\x73\164\x61\164\x75\x73\x3d\47\x31\x27\x20\x57\x48\x45\122\x45\x20\x69\x6e\163\x5f\151\144\75" . $id); goto c1f5; e248: query("\x55\x50\x44\x41\x54\105\40\160\x61\162\x73\145\x6d\x78\x5f\x69\x6e\x73\x20\123\105\124\x20\x73\164\141\164\x75\163\x3d\47\60\x27\x20\127\110\105\122\105\x20\151\156\x73\x5f\151\x64\x3d" . $id); goto Ebd1; Ebd1: goto c1f5; ab6e: query("\x44\105\114\105\x54\105\40\x46\122\117\x4d\40\160\141\x72\x73\x65\x6d\x78\137\x69\x6e\163\x20\x57\x48\x45\x52\105\40\x69\156\163\x5f\x69\144\x3d" . $id); goto c1f5; f64e: goto B241; efe0: Ea61: C3($_GET["\x69\144"], $id); $ins = query("\x53\x45\114\105\x43\124\40\52\40\x46\122\x4f\x4d\40\160\141\162\163\x65\155\170\137\151\x6e\163\40\127\x48\x45\x52\x45\x20\x69\x6e\163\137\x69\144\75" . $id)->row; xlog("\116\x4f\x54\111\x43\x45\72\40\x54\x61\163\x6b\x20\74\x62\76" . $ins["\164\x69\x74\154\145"] . "\74\x2f\x62\x3e\x20\x73\164\141\x72\x74\145\144\56"); goto c1f5; goto Ace4; B170: if (!empty($_POST["\157\x5f\x6f\146\x66"])) { goto e248; } if (!empty($_POST["\157\137\144\x65\x6c"])) { goto ab6e; } if (!empty($_POST["\157\x5f\144\x65\x6c\x5f\x67\x6f\157\144\x73"])) { goto f64e; } if (!empty($_POST["\x6f\x5f\x66\157\162\x6d\165\x6c\x61"])) { goto fee9; } goto c1f5; goto efe0; d370: if (is_numeric($id)) { goto fdaf; } goto Eb54; fdaf: if (!empty($_POST["\x6f\137\162\165\x6e"])) { goto Ea61; } if (!empty($_POST["\157\x5f\x6f\156"])) { goto a65b; } goto B170; B241: F2($_GET["\x69\x64"], $id); goto c1f5; fee9: query("\125\120\104\x41\124\105\40\x70\x61\x72\163\145\155\170\x5f\151\156\163\x20\x53\105\x54\x20\x70\x72\151\143\x65\x3d\x27" . escape($_POST["\x6f\x5f\146\157\162\155\x75\154\x61"]) . "\x27\x20\x57\110\105\x52\105\40\151\156\x73\x5f\151\x64\75" . $id); c1f5: goto B68e; B68e: Eb54: goto febf; febf: } da31: goto bd3a; Acf6: ?>
&il=<?php  echo $ea3; ?>
">Add Task</a>
    <a rel="external" data-role="button" data-icon="grid" data-inline="true"
       href="<?php  bc(); ?>
tree&id=<?php  goto bfbe; Ebb7: f25f: $aa = query("\123\105\114\105\103\124\40\x2a\x20\x46\x52\x4f\115\x20\160\141\x72\163\x65\x6d\170\x5f\x64\157\x6e\x6f\x72\x73\40\127\x48\105\x52\x45\x20\144\157\156\x6f\162\x5f\151\144\75" . $_GET["\151\144"])->row; if (empty($_POST)) { goto c4e4; } if (!(ini_get("\x6d\x61\x78\x5f\x65\170\x65\x63\x75\x74\151\x6f\x6e\x5f\x74\x69\x6d\145") < 600)) { goto Ec85; } if (ini_get("\163\x61\146\x65\137\155\x6f\144\x65")) { goto d144; } goto da4a; a535: if (!@$_GET["\162\165\x6e"]) { goto f25f; } c3($_GET["\151\144"], $_GET["\162\165\x6e"]); $ins = query("\x53\105\x4c\105\x43\124\x20\52\x20\x46\x52\x4f\x4d\40\160\141\x72\163\x65\155\x78\x5f\x69\156\x73\x20\127\x48\x45\122\105\x20\151\156\x73\x5f\x69\144\75" . $_GET["\162\x75\x6e"])->row; xlog("\x4e\117\124\111\103\x45\72\40\x54\141\x73\x6b\x20\74\142\x3e" . $ins["\x74\151\x74\154\145"] . "\74\x2f\x62\x3e\40\x73\x74\141\162\x74\145\x64\56"); A8("\x74\141\163\153\x73\46\151\x64\75" . $_GET["\151\144"] . "\46\x69\154\x3d" . $ea3); goto Ebb7; ac45: ?>
