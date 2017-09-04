<?php
/*
LiveImport (c) MaxD, 2017. Write to liveimport@devs.mx for support and purchase.
*/
 goto Da39; Da52: if ($bcc) { goto Eb94; } $Df9 = "\165\163\x65\162"; Eb94: require bd . "\x6c\151\142\57\x63\157\144\x65\x2f\143\x65\62\x31\x2e\160\150\x70"; require bd . "\x6c\151\x62\57\x63\x6f\144\x65\57\67\67\x30\65\56\160\x68\x70"; goto b1d2; c7b2: Bc(); ?>
script&advanced=<?php  echo !$bcc; ?>
&id=<?php  echo $aa["\144\x6f\x6e\157\162\137\151\144"]; goto E977; F090: ea6b: goto Bd5d; ca19: BC(); ?>
ins&donor_id=<?php  echo $aa["\x64\x6f\x6e\x6f\x72\x5f\x69\x64"]; ?>
&id=-1&back=script')"
   class="ui-btn ui-icon-gear ui-btn-icon-notext ui-corner-all ui-btn-inline ui-shadow"
   title="Task Settings">Task Settings</a>
<select data-mini="true" data-inline="true" onchange="
    if ($(this).val()=='product') {
      $('#test_product').show();
      $('#test_list').hide();
    } else {
      $('#test_product').hide();
      $('#test_list').show();
    }
    ">
    <option value="product">Test product URL</option>
    <option value="list">Test list URL</option>
</select>
<span id="test_product" style="margin-left: -5px">
    <div style="display:inline-block; width:385px">
        <input class="check_url" type="text" data-mini="true" data-inline="true" placeholder="Insert product URL here" oninput="UpdateTestURL('test_product')" onclick="$(this).select();" value="<?php  echo $aa["\143\x68\x65\x63\153\x5f\x75\x72\x6c"]; goto cb39; C027: goto Cfc6; b2dc: query("\125\x50\104\101\x54\105\40\160\141\x72\x73\145\x6d\170\x5f\144\x6f\156\x6f\x72\x73\x20\x53\x45\x54\x20\141\144\166\x61\x6e\143\x65\x64\x3d\x27" . $_GET["\x61\x64\x76\141\156\143\x65\144"] . "\47\40\x57\x48\105\122\105\40\x64\157\156\x6f\x72\x5f\151\x64\x3d" . $_GET["\x69\x64"]); $bcc = $_GET["\141\x64\x76\x61\x6e\x63\145\144"]; Cfc6: goto Da52; D158: ?>
wizard1&id=<?php  echo $aa["\x64\x6f\156\157\162\x5f\x69\x64"]; ?>
")'>Scheme Wizard</a>
<?php  A4fb: ?>
<a id="wiz" data-role="button" data-icon="user" data-theme="a"
   data-inline="true"
   onclick='SaveGo("<?php  goto c7b2; af19: die; da9e: if (!($_SERVER["\x52\x45\121\x55\x45\123\x54\137\x4d\105\x54\110\117\x44"] == "\120\117\x53\x54")) { goto a092; } $script = str_replace("\134\x22", "\42", @html_entity_decode($_POST["\x63\157\x64\145"])); edf($aa["\x68\157\x73\x74"], $script); goto d053; b27d: ?>
        <a style="float:right; font-size:12px" target="_blank" onclick="SaveGo()" href="<?php  echo bc(); ?>
script&id=<?php  echo $_GET["\x69\144"]; ?>
&export=1">Export scripts</a>
    </div>
    <?php  goto Fc98; b1d2: ?>

<h3>
    Import Scheme

    <font color="grey">for <?php  echo $aa["\x68\x6f\163\164"]; ?>
</font>
</h3>

<?php  if ($bcc) { goto d628; } f44("\165\163\x65\162", "\143\157\x6e\146\x69\x67\57" . $aa["\150\157\163\164"] . "\x2f\x75\x73\x65\162\x2e\160\x68\x70", "\x55\x73\145\162\40\x73\143\162\151\x70\164\54\x20\164\x68\x61\164\x20\x69\x73\x20\145\170\145\x63\165\164\x65\144\x20\x61\x66\x74\145\162\x20\160\162\157\x64\x75\x63\164\x20\141\156\141\x6c\171\x73\x69\163\x2e\x20\x57\x72\151\164\145\x20\x61\154\154\x20\x79\x6f\x75\x72\x20\x63\165\163\x74\x6f\x6d\40\x6c\157\147\x69\x63\163\x20\x68\145\x72\x65\56", false, 350); goto Bcf9; Bb40: ?>
    <h1>Scripts <font color="grey">for <?php  echo $aa["\150\x6f\163\164"]; ?>
</font></h1>
    <textarea readonly onclick="$(this).select()"><?php  echo $e4c; ?>
</textarea>
    <?php  goto af19; d053: $url = $_POST["\x75\162\154"]; if (!@$_POST["\x70\x6c\151\163\x74"]) { goto F0b3; } $url = "\52" . $url; F0b3: query("\x55\x50\104\101\124\105\40\160\x61\x72\x73\145\155\170\137\144\157\x6e\x6f\x72\x73\x20\x53\105\x54\x20\x63\x68\x65\143\153\x5f\x75\162\x6c\x3d\x27{$url}\x27\40\x57\110\105\122\x45\40\144\x6f\x6e\157\162\137\x69\x64\75" . $_GET["\151\x64"]); goto bdc9; Bcf9: goto b442; d628: ?>
    <div style="margin-bottom: -6px">
    <?php  foreach ($A01 as $F5c) { goto ea3b; Bc07: ?>
;
            editor_id = '#<?php  echo $F5c; ?>
';
        $('#<?php  echo $F5c; ?>
').show();
            editor<?php  goto Ff9f; ea3b: $F5c = strtolower($F5c); ?>
        <div class="script_tab" id="tab<?php  echo $F5c; ?>
" onclick="
        $('.script_tab').removeClass('script_active');
        $(this).addClass('script_active');
        $('.editor').hide();
            editor = editor<?php  echo $F5c; goto Bc07; Ff9f: echo $F5c; ?>
.focus();
            save_editors('vars');
        "><?php  echo $F5c . "\x2e\x70\x68\160"; ?>
</div>
    <?php  E754: goto A852; A852: } b946: goto b27d; Da39: $aa = query("\x53\x45\x4c\105\103\124\40\x2a\x20\x46\122\117\115\40\160\x61\x72\x73\145\x6d\x78\x5f\144\x6f\156\157\162\x73\40\x57\x48\105\x52\x45\40\x64\157\x6e\x6f\162\137\x69\144\75" . $_GET["\151\144"])->row; if (!@$_GET["\x65\x78\160\157\162\x74"]) { goto da9e; } $e4c = A8a($aa["\150\x6f\163\x74"]); $e4c = htmlentities($e4c); require bd . "\154\151\142\x2f\143\x6f\x64\x65\57\x63\x65\62\61\x2e\x70\x68\160"; goto Bb40; cd68: echo "\125\163\x65\162"; d52e: ?>
 Mode</a>

<script type="text/javascript">

    var url_changed = false;

    function SetSelector(selector) {
        if (selector)
            editor.insert("'"+selector+"'");
        editor.focus();
    }

    function SaveGo(url) {
        save_editors();
        if (url) location = url;
    }

    function UpdateTestURL(sel) {
        url_changed = true;
        var go = $("#"+sel+" .test_check").attr('href');
        var url = $.trim( $("#"+sel+" input").val() ).replace(/\//g,"_sxs_").replace(/:/g,"_dxd_").replace(/&/g,"_dad_");
        //url = escape(url);
        if (url) $("#"+sel+" .test_check").removeClass("ui-disabled");
        else $("#"+sel+" .test_check").addClass("ui-disabled");
        if (sel=='test_list') url = "*" + url;
        go = go.substr(0,go.indexOf("&url=")+5) + url + "#result";
        $("#"+sel+" .test_check").attr('href',go);
    }

    $("html, body").animate({ scrollTop: $(document).height()+50000 }, 1000);

    $(document).ready(function(){
        <?php  if (!$bcc) { goto ea6b; } ?>
            $('#tabuser').addClass('script_active');
            $('#user').show();
            editor = editoruser;
        <?php  goto F090; bdc9: $aa["\143\x68\x65\x63\153\x5f\x75\162\154"] = $url; die; a092: if (isset($_GET["\141\x64\x76\x61\156\x63\145\144"])) { goto b2dc; } $bcc = $aa["\x61\144\166\x61\x6e\x63\x65\x64"]; goto C027; cb39: ?>
">
    </div>
    <a class="test_check <?php  if ($aa["\143\x68\x65\x63\x6b\x5f\165\162\x6c"]) { goto e7d0; } echo "\x75\x69\55\144\151\163\x61\142\x6c\x65\144"; e7d0: ?>
"
       style="font-size: 11px; margin-right: -20px"
       data-role="button" data-mini="true" data-icon="check" data-theme="e" data-inline="true" target="_blank"
       href="<?php  goto a2ad; fccf: bc(); ?>
')">Back</a>
<?php  if ($aa["\x61\165\x74\x6f\137\165\x70\x64\141\x74\145"]) { goto A4fb; } ?>
<a id="wiz" data-role="button" data-transition="slidedown"
   data-inline="true" data-icon="star" data-theme="e"
   onclick='SaveGo("<?php  bc(); goto D158; E977: ?>
")'><?php  if ($bcc) { goto ec80; } echo "\x50\162\x6f\147\x72\141\x6d\155\145\x72"; goto d52e; ec80: goto cd68; Fc98: foreach ($A01 as $b7 => $F5c) { $F5c = strtolower($F5c); f44($F5c, "\143\157\x6e\x66\151\147\x2f" . $aa["\150\157\163\x74"] . "\x2f" . $F5c . "\56\x70\150\160", $Eb8[$b7], false, 300, true); d620: } Bfc7: ?>

    <style type="text/css">
        .script_tab {
            display: inline-block;
            background-color: #DDD;
            font-size: 14px;
            border: 1px solid grey;
            padding: 10px;
            padding-top: 5px;
            color: grey;
            font-weight: bold;
            cursor:pointer;
            z-index: 0;
        }

        .script_tab:hover {
            background-color: #EEEEEE;
        }

        .script_active {
            background-color: white;
        }
        .script_active:hover {
            background-color: white !important;
        }
    </style>
<?php  b442: ?>

<div style="text-align: center; margin-top:-29px; margin-bottom: -17px">
        <a type="button" data-iconpos="notext" data-mini="true" data-theme="e" data-role="button" data-icon="lightning" data-mini="true" title="Single element selector" data-inline="true" onclick="
        // Get line and pos
        editor.focus();
        var sel = editor.getSelectionRange();
        if (sel.start.column==sel.end.column) {
            var pos = sel.start.column;
            sel.setStart(sel.start.row,0);
            sel.setEnd(sel.start.row+1,0);
            var line = editor.session.getTextRange(sel);
            var m = [];
            var quo = 0;
            var doit = false;
            for (var i=0;i<line.length;i++)
                if (line[i]=='\'') {
                    doit = true;
                    quo = 1-quo;
                    m[i]=quo+2;
                   }
                else m[i] = quo;
        }
        if (doit) {
            if (!m[pos]) // Find it near
                for (i=0;i<line.length;i++)
                    if (m[i] && (Math.abs(pos-i) <5))   pos = i;

            if (m[pos]) while (m[pos]!=3) pos--;
            else doit = false;
            if (doit) {
                sel = editor.getSelectionRange();
                sel.start.column = pos;
                while (m[pos]!=2) pos++;
                sel.end.column = pos+1;
                editor.getSelection().setSelectionRange(sel);
            }
        }

        GetSelector($('.check_url:visible').val(),editor.session.getTextRange(editor.getSelectionRange()).replace('\'','').replace('\'',''),1);
        " >Single element selector</a>
            <a type="button" data-iconpos="notext"  data-theme="e" data-mini="true" data-role="button" data-icon="android" data-mini="true" data-inline="true" title="Multiply elements selector"
                   onclick="
        // Get line and pos
        editor.focus();
        var sel = editor.getSelectionRange();
        if (sel.start.column==sel.end.column) {
            var pos = sel.start.column;
            sel.setStart(sel.start.row,0);
            sel.setEnd(sel.start.row+1,0);
            var line = editor.session.getTextRange(sel);
            var m = [];
            var quo = 0;
            var doit = false;
            for (var i=0;i<line.length;i++)
                if (line[i]=='\'') {
                    doit = true;
                    quo = 1-quo;
                    m[i]=quo+2;
                   }
                else m[i] = quo;
        }
        if (doit) {
            if (!m[pos]) // Find it near
                for (i=0;i<line.length;i++)
                    if (m[i] && (Math.abs(pos-i) <5))   pos = i;

            if (m[pos]) while (m[pos]!=3) pos--;
            else doit = false;
            if (doit) {
                sel = editor.getSelectionRange();
                sel.start.column = pos;
                while (m[pos]!=2) pos++;
                sel.end.column = pos+1;
                editor.getSelection().setSelectionRange(sel);
            }
        }

        GetSelector($('.check_url:visible').val(),editor.session.getTextRange(editor.getSelectionRange()).replace('\'','').replace('\'',''),0);
        ">Multiply elements selector</a>
</div>

<div style="background: #DDD; padding-left:4px; margin-top:15px; margin-bottom: 20px">
<a style="font-size:16px; margin-right: 4px" data-mini="true"
   onclick="SaveGo('<?php  goto ca19; a2ad: echo b0($aa["\x63\x68\x65\x63\x6b\137\165\x72\154"]); ?>
" onclick="SaveGo('')">Check</a>
</span>
<span id="test_list" style="display:none; margin-left: -5px">
    <div style="display:inline-block; width:413px">
        <input class="check_url" type="text" data-mini="true" data-inline="true" placeholder="Insert list URL here" oninput="UpdateTestURL('test_list')" onclick="$(this).select();" value="<?php  echo $aa["\143\x68\x65\143\x6b\x5f\154\165\162\x6c"]; ?>
">
    </div>
    <a class="test_check <?php  if ($aa["\143\150\x65\143\x6b\137\x6c\165\x72\154"]) { goto Df9e; } goto Ce40; Ce40: echo "\x75\151\55\144\151\163\x61\142\x6c\x65\144"; Df9e: ?>
"
       style="font-size: 11px; margin-right: -20px"
       data-role="button" data-mini="true" data-icon="check" data-theme="e" data-inline="true" target="_blank"
       href="<?php  echo B0("\52" . $aa["\x63\150\145\x63\153\x5f\154\165\x72\x6c"]); ?>
" onclick="SaveGo('')">Check</a>
</span>
</div>

<a data-transition="reverse" rel="external" data-role="button" data-icon="arrow-l" data-inline="true"
   onclick="SaveGo('<?php  goto fccf; Bd5d: ?>
        editoruser.focus();
        save_editors('vars');
    });

    editor_id = '#user';

</script>
