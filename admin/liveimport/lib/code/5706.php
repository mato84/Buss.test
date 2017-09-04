<?php
/*
LiveImport (c) MaxD, 2017. Write to liveimport@devs.mx for support and purchase.
*/
 $Ae0 = 23; ?>
<style type="text/css">
    .log {
        left:750px;
        width:600px;
        top: 0px;
        margin-top: 130px;
        height:400px;
        z-index: 1000;
        background-color:#AAA;
        font-size: 10px;
        text-shadow: none;

        -webkit-transition: left 0.3s,width 0.3s,height 0.3s, margin-top 0.3s, font-size 0.3s, background-color 1s;
        -moz-transition: left 0.3s,width 0.3s,height 0.3s, margin-top 0.3s, font-size 0.3s, background-color 1s;
        -o-transition: left 0.3s,width 0.3s,height 0.3s, margin-top 0.3s, font-size 0.3s, background-color 1s;
        transition: left 0.3s,width 0.3s,height 0.3s, margin-top 0.3s, font-size 0.3s, background-color 1s;
    }
    .log:hover {
        left:450px;
        width:500px;
        background-color:#DDD;
        border: 2px solid #BBB;
        margin-top: 10px;
        height: 600px;
        font-size: 12px;
    }
    .log:hover .loghead {
        display:block;
    }
    .loghead {
        display:none;
        text-align: center;
        background-color: #BBB;
        font-size: 12px;
        padding:3px;
        height:15px;
        color:white;
        margin-bottom: 5px;
    }
    .logfeed {
        width:100%;
        height:400px;
        overflow:hidden;
        font-size: 10px;
        color: black;

        -webkit-transition: height 0.3s, font-size 0.3s;
        -moz-transition: height 0.3s, font-size 0.3s;
        -o-transition: height 0.3s, font-size 0.3s;
        transition: height 0.3s, font-size 0.3s;
    }
    .log:hover .logfeed {
        height:570px;
        font-size: 12px;
        overflow:auto;
    }
    .log a {
        color: rgb(0, 0, 238);
        font-weight: normal;
    }
    .log a:visited {
        color: rgb(85, 26, 139);
    }
    .log a:hover {
        color: rgb(85, 26, 139);
    }
</style>
<div class="log" style="position:absolute; padding:7px; color:#ddd; display:none;">
    <div class="loghead">Live Log</div>
    <div class="logfeed" id="logfeed"></div>
</div>

<img title="Close Window" src="lib/static/close.gif" id="selectclose" style="display:none; position:fixed; left:95%; top: 1%; cursor: pointer"
    onclick="iSetSelector('')" />
<iframe data-role="popup" sandbox="allow-same-origin allow-forms allow-scripts" id="selectorg"
        style="position:fixed; background-color:#EEE; left:2%; top: 4%; width:96%; height:92%;"></iframe>

<script type="text/javascript">
    // Selector-Gadget communication
    var iSelector = '';
    function GetSelector(url,selector,single) {
        $('#manual').hide();
        document.body.style.overflow = 'hidden';
        url = "index.php?op=css&url="+encodeURIComponent(url)+'&single='+single+'&cd='+Date.now()+'&domain=<?php  echo @$aa["\150\x6f\x73\164"]; ?>
';
        iSelector = selector;
        $('#selectorg').attr('src', url).popup( "open").show();
        $('#selectclose').show();
    }

    function iSetSelector(selector) {
        $('#manual').show();
        $('#selectorg').attr('src', 'about:blank').popup( "close").hide();
        $('#selectclose').hide();
        document.body.style.overflow = '';
        SetSelector(selector);
    }
</script>

<script type="text/javascript">

    $(document).ready(function(){

        $( "form" ).submit(function( event ) {
            $('textarea, input[type=text]').each(function(){$(this).val($(this).val().replace(/:\/\//g,".//")); });
        }); // Links posting protection workaround
        setInterval('UpdateLog();', 3000);
        UpdateLog();
    });

    $(window).scroll(function(){
        $('.log').css('top',($(window).scrollTop()+0)+'px');
    });



    var feeds = 0;
    function UpdateLog()
    {
        $.get('index.php?op=feed',false, function(data) {
            if (!data) return;
            var logfeed = $('.logfeed');
            if (feeds++>50) {
                logfeed.empty();
                feeds = 0;
            }
            logfeed.append(data);
            <?php  if (!(@$_GET["\x72\x6f\165\x74\145"] !== "\x77\151\172\x61\162\144\62\170")) { goto f522; } ?>
            $(".log").show();
            <?php  f522: ?>
            logfeed.animate({scrollTop:logfeed[0].scrollHeight},2500);
        },"json");
        if (typeof UpdateDonors == 'function') { UpdateDonors(); }
    }


</script>

</div><!-- /content -->

</div><!-- /page -->

</body>
</html>
