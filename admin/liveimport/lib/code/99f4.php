<?php
/*
LiveImport (c) MaxD, 2017. Write to liveimport@devs.mx for support and purchase.
*/
 goto C45a; C1b0: $ab9 = query("\x53\x45\x4c\x45\x43\124\40\x2a\x2c\x20\x28\123\105\x4c\105\103\x54\40\103\x4f\125\x4e\124\x28\x2a\x29\x20\106\x52\117\115\40\160\141\162\163\145\155\x78\137\x65\x6e\x74\x69\164\151\145\x73\40\x57\x48\x45\122\105\40\x69\x6e\163\137\x69\144\75\x69\x2e\151\x6e\x73\137\x69\144\x29\x20\141\x73\40\156\x20\x46\122\117\x4d\40\x70\141\162\x73\145\155\x78\x5f\151\156\x73\40\x69\40\127\x48\x45\122\105\x20\x64\x6f\156\x6f\162\x5f\151\x64\75" . $aa["\x64\x6f\156\157\x72\x5f\151\144"])->rows; function F4c($name) { return "\x27" . $name . "\x27"; } function e62($category, $D46 = 0) { goto B64d; C95f: $width = 272 - $D46 * 14; if (!$B4a) { goto f5c5; } $width -= 24; f5c5: if (!$B4a) { goto Ceb2; } goto b2b5; Df90: foreach ($Ce as $d2) { if (!($d2["\x70\x61\x72\x65\156\x74\x5f\x69\x64"] == $category["\143\141\x74\145\147\x6f\x72\171\x5f\151\x64"])) { goto Dbe8; } $B4a[] = $d2; Dbe8: Ebc6: } d65b: echo "\74\154\x69\40\x69\x64\75\x22" . $category["\x63\141\x74\145\147\157\x72\x79\x5f\151\x64"] . "\42\40"; if (!@$e1e["\163\x74\x61\164\x75\163"]) { goto E921; } echo "\144\x61\x74\141\x2d\x74\x68\145\x6d\x65\x3d\42\x65\x22"; goto d41b; d855: echo $e1e["\x6e"] . "\74\x2f\x73\x70\x61\156\x3e"; e6d7: echo "\x3c\x73\x70\141\156\40\143\154\141\x73\x73\75\x22\143\156\141\155\x65\42\40\x73\x74\171\x6c\145\x3d\x22\167\151\x64\164\x68\72" . $width . "\x70\170\42\76" . $category["\x6e\x61\x6d\x65"] . "\74\57\x73\x70\141\x6e\x3e"; echo "\x3c\164\x65\x78\164\141\x72\145\141\40\x77\162\141\160\x3d\x22\x6f\x66\x66\x22\40\156\141\x6d\145\75\x22\x75\162\x6c\x22\x20\160\x6c\x61\x63\x65\150\157\154\144\x65\x72\x3d\x22\x41\144\144\x20\163\x6f\x75\x72\x63\145\40\154\151\x6e\153\163\40\x68\145\162\145\42\40\x6f\x6e\143\150\141\156\x67\x65\75\42\x53\145\x6e\144\125\122\x4c\x28" . $category["\x63\x61\x74\x65\x67\x6f\162\171\137\151\x64"] . "\54" . f4C($category["\x66\165\154\x6c\156\x61\155\x65"]) . "\51\x22\x3e" . @$e1e["\165\162\x6c"] . "\x3c\x2f\164\x65\170\x74\141\162\145\141\x3e"; if (!$B4a) { goto f512; } goto fe8a; B64d: global $Ce, $ab9; $e1e = false; foreach ($ab9 as $b7 => $B40) { if (!($B40["\x63\141\164\x65\147\157\x72\x69\145\x73"] == $category["\143\x61\164\x65\x67\157\162\x79\x5f\x69\x64"])) { goto b1f9; } $ab9[$b7]["\x74\162\x65\x65"] = true; $e1e = $B40; goto a603; b1f9: C7bf: } a603: $B4a = array(); goto Df90; d41b: E921: if (!$B4a) { goto Cc2c; } echo "\x20\x64\x61\x74\141\x2d\162\157\x6c\145\x3d\42\143\157\x6c\154\141\x70\x73\151\x62\154\145\x22\x20\144\141\x74\141\x2d\x69\143\157\x6e\160\157\163\x3d\x22\154\145\x66\164\42\x20\144\141\164\141\55\163\150\x61\144\157\x77\x3d\x22\x66\141\x6c\x73\x65\42\x20\144\141\x74\x61\55\143\157\x72\156\x65\x72\x73\x3d\42\x66\x61\x6c\x73\145\x22"; Cc2c: echo "\x3e"; goto C95f; fe8a: echo "\74\57\x68\x32\76"; f512: $D46++; if (!$B4a) { goto Ba07; } echo "\74\165\154\x20\x64\x61\164\141\x2d\x72\x6f\154\145\75\x22\154\x69\x73\164\x76\151\145\x77\x22\x20\x64\x61\164\141\x2d\x73\150\141\x64\157\x77\75\x22\x66\141\x6c\163\145\42\40\x64\x61\x74\x61\x2d\151\156\163\145\164\75\x22\x74\162\x75\145\x22\x20\144\x61\x74\x61\55\x63\157\x72\156\145\162\163\x3d\42\146\141\x6c\163\x65\x22\76"; goto e439; E20f: echo "\x73\x74\x79\x6c\x65\75\42\154\145\x66\x74\72" . ($width - 35) . "\x70\x78\73\40\164\157\x70\72\x20\x32\x39\160\170\42\x3e"; goto C0a4; C800: echo "\x73\x74\171\154\x65\x3d\42\x6c\x65\x66\164\72" . ($width - 50) . "\160\x78\73\40\164\157\160\72\x20\x2d\63\160\170\x22\x3e"; C0a4: goto d855; e439: foreach ($B4a as $C85) { e62($C85, $D46); b539: } C113: echo "\74\57\x75\154\x3e"; Ba07: echo "\74\57\x6c\151\x3e"; goto F9ab; b2b5: echo "\x3c\x68\62\76"; Ceb2: if (!@$e1e["\156"]) { goto e6d7; } echo "\74\x73\x70\141\x6e\x20\143\154\x61\163\x73\75\42\165\151\x2d\154\151\x2d\x63\x6f\x75\156\x74\x22\x20"; if ($B4a) { goto C800; } goto E20f; F9ab: } require bd . "\x6c\x69\142\57\143\157\x64\x65\57\x63\145\x32\x31\x2e\x70\x68\x70"; ?>

<script type="text/javascript">
$(document).ready(function () {
    $("textarea").click(function (event) {
        return false;
    });
    $("li").hover(
        function(e) {
            e.stopPropagation();
            $(">.xmenu", this).css("display", "block");
            $(">h2>a>span>span>.xmenu", this).css("display", "block");
        },
        function() {
            $(">.xmenu", this).css("display", "none");
            $(">h2>a>span>span>.xmenu", this).css("display", "none");
        }
    );
});

function SendURL(id,cat_name) {
    $.ajax({
        url: "index.php?op=l"+"tree",
        type: "POST",
        data: { operation: "url", donor_id: <?php  goto Ef66; C45a: $ea3 = @$_GET["\x69\154"]; $donor_id = $_GET["\151\x64"]; $aa = query("\123\x45\114\x45\x43\124\40\x2a\40\x46\122\117\x4d\40\x70\141\162\x73\x65\x6d\x78\x5f\x64\157\x6e\157\162\163\40\x57\x48\x45\x52\105\40\144\157\156\157\162\137\151\144\x3d" . $donor_id)->row; function ccomp($D6, $Cb9) { if ($D6["\x66\165\x6c\154\x6e\x61\155\145"] > $Cb9["\x66\165\x6c\x6c\156\141\155\145"]) { goto E406; } return -1; goto E71d; E406: return 1; E71d: } usort($Ce, "\x63\x63\x6f\x6d\x70"); goto C1b0; Ef66: echo $donor_id; ?>
, category_id: id, name: cat_name, urls : $('#'+id+' textarea').val() }
    }).done(function( res ) {
            if (res=='OK') $('#'+id).addClass()
        });
}

</script>

<style type="text/css">

    li {
        padding-right: 0px !important;
    }

    .ui-li-count {
        right: inherit !important;
    }

    .xmenu {
        position: absolute;
        z-index: 1000;
        font-size: 10px;
        display: none;
        margin-top: -3px;
        margin-left: -3px;
    }

    .xmenu a {
        margin-left: 3px !important;
        margin-right: 3px !important;
    }

    .xmenu .ui-btn-inner {
        font-size: 10px;
        padding-left: 30px !important;
        padding-right: 10px !important;
    }

    .cname {
        overflow: hidden;
        display: inline-block;
        white-space: nowrap;
        line-height: 43px;
        font-size: 12px;
    }

    .ui-li-heading, .ui-btn-inner {
        overflow: visible !important;
    }

    textarea {
        font-size: 10px !important;
        height:37px !important;
        width: 400px !important;
        display: inline-block !important;
    }

    /* Basic settings */
    .ui-li-static.ui-collapsible {
        padding: 0;
    }

    .ui-li-static.ui-collapsible > .ui-collapsible-content > .ui-listview,
    .ui-li-static.ui-collapsible > .ui-collapsible-heading {
        margin: 0;
    }

    .ui-li-static.ui-collapsible > .ui-collapsible-content {
        padding-top: 0;
        padding-bottom: 0;
        padding-right: 0;
        border-bottom-width: 0;
    }

    /* collapse vertical borders */
    .ui-li-static.ui-collapsible > .ui-collapsible-content > .ui-listview > li.ui-last-child,
    .ui-li-static.ui-collapsible.ui-collapsible-collapsed > .ui-collapsible-heading > a.ui-btn {
        border-bottom-width: 0;
    }

    .ui-li-static.ui-collapsible > .ui-collapsible-content > .ui-listview > li.ui-first-child,
    .ui-li-static.ui-collapsible > .ui-collapsible-content > .ui-listview > li.ui-first-child > a.ui-btn,
    .ui-li-static.ui-collapsible > .ui-collapsible-heading > a.ui-btn {
        border-top-width: 0;
    }

    /* Remove right borders */
    .ui-li-static.ui-collapsible > .ui-collapsible-heading > a.ui-btn,
    .ui-li-static.ui-collapsible > .ui-collapsible-content > .ui-listview > .ui-li-static,
    .ui-li-static.ui-collapsible > .ui-collapsible-content > .ui-listview > li > a.ui-btn,
    .ui-li-static.ui-collapsible > .ui-collapsible-content {
        border-right-width: 0;
    }

    /* Remove left borders */
    /* Here, we need class ui-listview-outer to identify the outermost listview */
    .ui-listview-outer > .ui-li-static.ui-collapsible .ui-li-static.ui-collapsible.ui-collapsible,
    .ui-listview-outer > .ui-li-static.ui-collapsible > .ui-collapsible-heading > a.ui-btn,
    .ui-li-static.ui-collapsible > .ui-collapsible-content {
        border-left-width: 0;
    }
</style>

<h2><font color="grey"><?php  echo $ee; ?>
</font> Category Tree </h2>
<br/>
<ul data-role="listview" class="ui-listview-outer">
<?php  foreach ($Ce as $category) { if ($category["\x70\141\x72\x65\156\x74\x5f\151\144"]) { goto e464; } E62($category); e464: bc5f: } goto Fd56; Fd56: ccd5: ?>
</ul>

<br/><br/>
    <a rel="external" data-role="button" data-icon="arrow-l" data-inline="true" href="<?php  BC(); ?>
tasks&id=<?php  echo $aa["\144\x6f\x6e\157\162\137\151\144"]; goto e697; e697: ?>
&il=<?php  echo $ea3; goto D6ae; D6ae: ?>
">Back</a>
