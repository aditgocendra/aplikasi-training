<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title></title>
</head>
<script src="ext/dhtmlxscheduler.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="ext/dhtmlxscheduler.css" type="text/css" media="screen" title="no title" charset="utf-8">

    <script src="ext/dhtmlxscheduler_minical.js" type="text/javascript" charset="utf-8"></script>

    <style type="text/css" media="screen">
        html, body{
            margin:0px;
            padding:0px;
            height:100%;
        }   
    </style>

    <script type="text/javascript" charset="utf-8">
        function init() {
            scheduler.config.xml_date="%Y-%m-%d %H:%i";
            scheduler.init('scheduler_here');
            scheduler.load("ext/events.xml",function(){
                scheduler.renderCalendar({
                    container:"mini_here",
                    date:scheduler._date,
                    navigation:true,
                    handler:function(date,calendar){
                        alert(date);
                    }
                });
            });
        }
	

    </script>

    <body onload="init();">
        <div id="mini_here" style="width:200px"></div>
        <div id="scheduler_here" class="dhx_cal_container" style='width:300px; height:300px; display:none;'>
            <div class="dhx_cal_navline">
                <div class="dhx_cal_date"></div>
                <div class="dhx_cal_tab" name="day_tab" style="right:76px;"></div>
            </div>
            <div class="dhx_cal_header">
            </div>
            <div class="dhx_cal_data">
            </div>
        </div>
    </body>