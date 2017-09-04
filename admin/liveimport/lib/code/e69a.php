<?php
// *** ParseMX widget
header('Content-Type: text/html; charset=utf-8');

$file = "temp/status.tmp";
$host = "";
$state = false;
$total_entities = 0;

if (file_exists($file)) {
    $file = unserialize(file_get_contents($file));
    if (is_array($file)) {
        extract($file);
        if (!$active_tasks) $state = false;
    }
}

// Demo data
if (false) {
    $state = true;
    $active_tasks = 50;
    $done_tasks = 50;
    $started = time() - 60*60;
    $total_entities = 230;
}

if (!$state) exit;

if ($state) {
    $percent = round($done_tasks * 100 / ($done_tasks + $active_tasks + 1));
    if (!$percent) $percent = 1;
}


// Dummy function for translation
function t($phrase) {
    $p = strpos($phrase, '#');
    if ($p) $phrase = substr($phrase, 0, $p);
    return $phrase;
}

function timespan($seconds) {
    if ($seconds<60) return t("less then a minute");
    $mins = round($seconds / 60);
    if ($mins<60)
        if ((int)($mins/10)==1) return $mins. t(" minutes ");
        elseif ($mins % 10 == 1) return $mins. t(" minute");
        elseif (($mins % 10 > 1) and ($mins % 10 < 5)) return $mins. t(" minutes #X2-X4");
        else return $mins. " minutes";

    $hours = round($mins / 60);
    if ($hours<24)
        if ((int)($hours/10)==1) return $hours. t(" hours");
        elseif ($hours % 10 == 1) return $hours. t(" hour");
        elseif (($hours % 10 > 1) and ($hours % 10 < 5)) return $hours. t(" hours #X2-X4");
        else return $hours. t(" hours");

    $days = round($hours / 24);
    if ((int)($days/10)==1) return $days. t(" days");
    elseif ($days % 10 == 1) return $days. t(" day");
    elseif (($days % 10 > 1) and ($days % 10 < 5)) return $days. t(" days #X2-X4");
    else return $days. t(" days");
}

?>
<div style="margin-top:9px; margin-left:10px; height:24px; line-height:24px; font-size: 12px; display: inline-block; width: 50vw; overflow: hidden">
    <div style="background-color: white; display:table-cell; white-space: nowrap">
        <a href="liveimport/" style="text-decoration: none" target="_blank">
            <img src="liveimport/lib/static/icon.png" width="22" height="22" style="vertical-align:middle;">
            <span style="font-weight: bold; font-size:14px">
                <font color="#8de43c">Live</font>Import
                &nbsp; <?php echo $host ?>
            </span>
            <span style="color:blue"><?php echo $total_entities ?></span> products
        </a>
            <?php if ($state) { ?>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <span style='color: #AAA'><b> <?php echo timespan((microtime(true)-$started)/$percent*(100-$percent)) ?></b> left</span>
                &nbsp;&nbsp;
            <?php } ?>
    </div>
<?php if ($state) { ?>
    <div style='background-color: #ccc; display:table-cell; width:100%'>
        <div style='width:<?php echo $percent ?>%; overflow: hidden; background-color: green; text-align: center; color:white'>
            <?php echo $percent ?>%
        </div>
    </div>
<?php } ?>
</div>