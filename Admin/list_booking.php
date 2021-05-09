


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head><title>
	Hotel Room Booking Tutorial (Demo)
</title><link href="Media/layout.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/modal.js"></script>
    <link href='css/main.css' type="text/css" rel="stylesheet" /> 
    <link href='Themes/scheduler_white.css' type="text/css" rel="stylesheet" /> 
	<script type="text/javascript">

	    var modal = new DayPilot.Modal();
	    modal.border = "10px solid #ccc";
	    modal.closed = function () {
	        if (this.result == "OK") {
	            dps.commandCallBack('refresh');
	        }
	    };

	    function createEvent(start, end, resource) {
	        modal.height = 250;
	        modal.showUrl("New.aspx?start=" + start.toStringSortable() + "&end=" + end.toStringSortable() + "&r=" + resource);
	    }

	    function editEvent(id) {
	        modal.height = 300;
	        modal.showUrl("Edit.aspx?id=" + id);
	    }

	    function afterRender(data) {
	    };

	    function filter(property, value) {
	        if (!dps.clientState.filter) {
	            dps.clientState.filter = {};
	        }
	        if (dps.clientState.filter[property] != value) { // only refresh when the value has changed
	            dps.clientState.filter[property] = value;
	            dps.commandCallBack('filter');
	        }
	    }
	
	</script>
    <style type="text/css">
        .scheduler_white_rowheader 
        {
            background: -webkit-gradient(linear, left top, left bottom, from(#eeeeee), to(#dddddd));
	        background: -moz-linear-gradient(top, #eeeeee 0%, #dddddd);
	        background: -ms-linear-gradient(top, #eeeeee 0%, #dddddd);
	        background: -webkit-linear-gradient(top, #eeeeee 0%, #dddddd);
	        background: linear-gradient(top, #eeeeee 0%, #dddddd);
	        filter: progid:DXImageTransform.Microsoft.gradient(startColorStr="#eeeeee", endColorStr="#dddddd");

        }
        .scheduler_white_rowheader_inner 
        {
        	border-right: 1px solid #ccc;
        }
        .scheduler_white_rowheadercol2
        {
    	    background: White;
        }
        .scheduler_white_rowheadercol2 .scheduler_white_rowheader_inner 
        {
    	    top: 2px;
    	    bottom: 2px;
    	    left: 2px;
    	    background-color: transparent;
	        border-left: 5px solid #1a9d13; /* green */
	        border-right: 0px none;
        }
        .status_dirty.scheduler_white_rowheadercol2 .scheduler_white_rowheader_inner
        {
	        border-left: 5px solid #ea3624; /* red */
        }
        .status_cleanup.scheduler_white_rowheadercol2 .scheduler_white_rowheader_inner
        {
	        border-left: 5px solid #f9ba25; /* orange */
        }
    
    </style>	

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-212202-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>	
</head>
<body>
    <form method="post" action="./" id="aspnetForm">
<div class="aspNetHidden">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTg3NzQ3MzMxMQ9kFgJmD2QWAgIDD2QWAgIBD2QWAgIDDw8WCB4KU2VwYXJhdG9ycygpc0RheVBpbG90LldlYi5VaS5TZXBhcmF0b3JDb2xsZWN0aW9uLCBEYXlQaWxvdCwgVmVyc2lvbj03LjUuMjk3OC4xLCBDdWx0dXJlPW5ldXRyYWwsIFB1YmxpY0tleVRva2VuPTQyNjk0MTk1NGYwNWU3ZmUZMjAyMS0wNC0xMFQwMDowMDowMCUyNlJlZB4JU3RhcnREYXRlBgCArC7ordgIHgtfIURhdGFCb3VuZGceCVJlc291cmNlcygpckRheVBpbG90LldlYi5VaS5SZXNvdXJjZUNvbGxlY3Rpb24sIERheVBpbG90LCBWZXJzaW9uPTcuNS4yOTc4LjEsIEN1bHR1cmU9bmV1dHJhbCwgUHVibGljS2V5VG9rZW49NDI2OTQxOTU0ZjA1ZTdmZa8BUm9vbSAxMDElMjYlMjYyJTI2JlJvb20gMTAyJTI2JTI2MyUyNiZSb29tIDEwMyUyNiUyNjQlMjYmUm9vbSAxMDQlMjYlMjY5JTI2JlJvb20gMTA1JTI2JTI2MTIlMjYmUm9vbSAxMDYlMjYlMjYxNCUyNiZSb29tIDIwMSUyNiUyNjE2JTI2JlJvb20gMjAyJTI2JTI2MTclMjYmUm9vbSAyMDMlMjYlMjYxOCUyNmRkZPwnYCNXjOTl//bjIXeqd+ccehj5J6Vy/FAB+QNE/Y4N" />
</div>


<script src="/tutorial/hotel/WebResource.axd?d=boyPzhQwmmIgybt20YPnc1O7zoPpgnT79XlgD173vPQZzmN4aRtf2PHuIdFI6PJQRdkGYKOkz_HsDS7BD_K7WtgLp27_NcRLHyZs9miIKV5CR63KtFr3364uCocyoyI80&amp;t=635148828000000000" type="text/javascript"></script>
<script src="/tutorial/hotel/WebResource.axd?d=Au3VqMJXXFsyCZJgdmHCzd0itqP2_ZOigKq8taMpmv51F4L28_w7AVnSt0BWUm6Q1WswVRK_lbNr1incmuD_GZWIfuof1iqjSdJO5oQb3hc_LmmEZLZ_d1prNdMWS2zHTc83bZm2quzgRecNYhxJZg2&amp;t=635148828000000000" type="text/javascript"></script>
<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="E48FC2F1" />
	<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
	<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAAaTy/F2D1drsY5nuo2jDEcl6Ob1RrjcwESEL8U9VRHIFrxxTXzmMpdFIGcUfoXYQgxGSdJRt3w0motSacr/SZIZUH9FB68CqtO9nkv8Xxd/lx249Ai4vkqnFHF2L/fQZyXIYuChp7/XWmKF7vziYaWsya6b0zFof5tJZAVWkXcJlQ==" />
</div>
    <div class="page">
        <div id="header">
			<div class="bg-help">
				<div class="inBox">
					<h1 id="logo"><a href='http://code.daypilot.org/48275/hotel-room-booking-asp-net-c-vb-sql-server'>Hotel Room Booking Tutorial</a></h1>
					<p id="claim"><a href="http://www.daypilot.org/">DayPilot</a> - AJAX Calendar/Scheduling Controls for ASP.NET</p>
					<hr class="hidden" />
				</div>
			</div>
        </div>
        <div class="shadow"></div>
        <div class="main">
            
    <div style="margin-bottom: 5px;">
    Show rooms:
        <select name="ctl00$MainContent$DropDownListFilter" id="ctl00_MainContent_DropDownListFilter" onchange="filter(&#39;room&#39;, this.value)">
	<option value="0">All</option>
	<option value="1">Single</option>
	<option value="2">Double</option>
	<option value="3">Triple</option>
	<option value="4">Family</option>

</select>
    </div>
    <div id="ctl00_MainContent_DayPilotScheduler1">

</div>

    <br />


        </div>
        <div class="clear">
        </div>
    </div>
    <div class="footer">
        
    </div>
    
<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['aspnetForm'];
if (!theForm) {
    theForm = document.aspnetForm;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="/tutorial/hotel/WebResource.axd?d=QfJow5OUb1ClS8q5idSmau5cAkS_p1Cag5IlFm6Z-q5CPxMwyzMYyYDCT4_kqYwUo_-ry8mwLFnSnk0PGnHCFWTVWog-0ppjBcIUqcUXFsY1&amp;t=637460981481343508" type="text/javascript"></script>


<script type="text/javascript">
//<![CDATA[

WebForm_InitCallback();//]]>
</script>
<script type='text/javascript'>
/* DayPilotPro: DayPilot, Version=7.5.2978.1, Culture=neutral, PublicKeyToken=426941954f05e7fe */
function dps_Init() {
var v = new DayPilot.Scheduler('ctl00_MainContent_DayPilotScheduler1');
v.allowMultiSelect = true;
v.api = 1;
v.autoRefreshCommand = 'refresh';
v.autoRefreshEnabled = false;
v.autoRefreshInterval = 60;
v.autoRefreshMaxCount = 20;
v.autoScroll = 'Drag';
v.borderColor = '#000000';
v.businessBeginsHour = 9;
v.businessEndsHour = 18;
v.cellBackColor = '#FFFFD5';
v.cellBackColorNonBusiness = '#FFF4BC';
v.cellBorderColor = '#EAD098';
v.cellDuration = 1440;
v.cellGroupBy = 'Month';
v.cellSelectColor = '#316AC5';
v.cellWidth = 20;
v.cornerHtml = '';
v.cornerBackColor = '';
v.crosshairColor = 'Gray';
v.crosshairOpacity = 20;
v.crosshairType = 'Header';
v.cssClassPrefix = 'scheduler_white';
v.cssOnly = true;
v.days = 365;
v.dragOutAllowed = false;
v.durationBarColor = 'Blue';
v.durationBarHeight = 3;
v.durationBarMode = 'Duration';
v.durationBarVisible = true;
v.dynamicEventRendering = 'Progressive';
v.dynamicEventRenderingCacheSweeping = false;
v.dynamicEventRenderingCacheSize = 200;
v.dynamicEventRenderingMargin = 50;
v.dynamicLoading = false;
v.emptyBackColor = '#FFFFFF';
v.eventBorderColor = '#000000';
v.eventBorderVisible = true;
v.eventBackColor = '#FFFFFF';
v.eventCorners = 'Regular';
v.eventFontColor = '#000000';
v.eventFontFamily = 'Tahoma';
v.eventFontSize = '8pt';
v.eventHeight = 50;
v.eventMoveMargin = 5;
v.eventMoveToPosition = false;
v.eventResizeMargin = 5;
v.events.list = [];
v.headerFontColor = '#000000';
v.headerFontFamily = 'Tahoma';
v.headerFontSize = '8pt';
v.headerHeight = 17;
v.height = 350;
v.heightSpec = 'Max';
v.hourBorderColor = '#EAD098';
v.hourFontFamily = 'Tahoma';
v.hourFontSize = '10pt';
v.hourNameBackColor = '#ECE9D8';
v.hourNameBorderColor = '#ACA899';
v.loadingLabelText = 'Loading...';
v.loadingLabelVisible = true;
v.loadingLabelFontSize = '10pt';
v.loadingLabelFontFamily = 'Tahoma';
v.loadingLabelFontColor = '#FFFFFF';
v.loadingLabelBackColor = 'Red';
v.scrollX = 1800;
v.scrollY = 0;
v.snapToGrid = true;
v.layout = 'Auto';
v.messageHideAfter = 5000;
v.messageBarPosition = 'Top';
v.moveBy = 'Top';
v.notifyCommit = 'Immediate';
v.numberFormat = '0.00';
v.resources = [{"columns":[{"html":"1 bed"},{"html":"Ready"}],"name":"Room 101","areas":null,"id":"2","html":"Room 101"},{"columns":[{"html":"2 beds"},{"html":"Ready"}],"name":"Room 102","areas":null,"id":"3","html":"Room 102"},{"columns":[{"html":"2 beds"},{"html":"Ready"}],"name":"Room 103","areas":null,"id":"4","html":"Room 103"},{"id":"9","areas":null,"name":"Room 104","html":"Room 104","columns":[{"html":"2 beds"},{"html":"Cleanup"}],"cssClass":"status_cleanup"},{"id":"12","areas":null,"name":"Room 105","html":"Room 105","columns":[{"html":"3 beds"},{"html":"Dirty"}],"cssClass":"status_dirty"},{"id":"14","areas":null,"name":"Room 106","html":"Room 106","columns":[{"html":"3 beds"},{"html":"Dirty"}],"cssClass":"status_dirty"},{"columns":[{"html":"4 beds"},{"html":"Ready"}],"name":"Room 201","areas":null,"id":"16","html":"Room 201"},{"columns":[{"html":"4 beds"},{"html":"Ready"}],"name":"Room 202","areas":null,"id":"17","html":"Room 202"},{"id":"18","areas":null,"name":"Room 203","html":"Room 203","columns":[{"html":"4 beds"},{"html":"Dirty"}],"cssClass":"status_dirty"}];
v.rowMarginBottom = 0;
v.rowMinHeight = 0;
v.rowHeaderColumns = [{"width":80,"title":"Room"},{"width":80,"title":"Size"},{"width":80,"title":"Status"}];
v.rowHeaderWidth = 80;
v.rowHeaderWidthAutoFit = true;
v.rowHeaderCols = null;
v.scrollDelay = 500;
v.separators = [{"Color":"Red","Location":"2021-04-10T00:00:00"}];
v.shadow = 'Fill';
v.showBaseTimeHeader = true;
v.showNonBusiness = true;
v.showToolTip = true;
v.sortDirections = [];
v.startDate = '2021-01-01T00:00:00';
v.syncResourceTree = false;
v.timeBreakColor = '#000000';
v.timeFormat = 'Clock12Hours';
v.timeHeader = [[{"width":620,"innerHTML":"January 2021","start":"2021-01-01T00:00:00","end":"2021-02-01T00:00:00"},{"width":560,"innerHTML":"February 2021","start":"2021-02-01T00:00:00","left":620,"end":"2021-03-01T00:00:00"},{"width":620,"innerHTML":"March 2021","start":"2021-03-01T00:00:00","left":1180,"end":"2021-04-01T00:00:00"},{"width":600,"innerHTML":"April 2021","start":"2021-04-01T00:00:00","left":1800,"end":"2021-05-01T00:00:00"},{"width":620,"innerHTML":"May 2021","start":"2021-05-01T00:00:00","left":2400,"end":"2021-06-01T00:00:00"},{"width":600,"innerHTML":"June 2021","start":"2021-06-01T00:00:00","left":3020,"end":"2021-07-01T00:00:00"},{"width":620,"innerHTML":"July 2021","start":"2021-07-01T00:00:00","left":3620,"end":"2021-08-01T00:00:00"},{"width":620,"innerHTML":"August 2021","start":"2021-08-01T00:00:00","left":4240,"end":"2021-09-01T00:00:00"},{"width":600,"innerHTML":"September 2021","start":"2021-09-01T00:00:00","left":4860,"end":"2021-10-01T00:00:00"},{"width":620,"innerHTML":"October 2021","start":"2021-10-01T00:00:00","left":5460,"end":"2021-11-01T00:00:00"},{"width":600,"innerHTML":"November 2021","start":"2021-11-01T00:00:00","left":6080,"end":"2021-12-01T00:00:00"},{"width":620,"innerHTML":"December 2021","start":"2021-12-01T00:00:00","left":6680,"end":"2022-01-01T00:00:00"}],[{"innerHTML":"1","start":"2021-01-01T00:00:00"},{"innerHTML":"2","start":"2021-01-02T00:00:00"},{"innerHTML":"3","start":"2021-01-03T00:00:00"},{"innerHTML":"4","start":"2021-01-04T00:00:00"},{"innerHTML":"5","start":"2021-01-05T00:00:00"},{"innerHTML":"6","start":"2021-01-06T00:00:00"},{"innerHTML":"7","start":"2021-01-07T00:00:00"},{"innerHTML":"8","start":"2021-01-08T00:00:00"},{"innerHTML":"9","start":"2021-01-09T00:00:00"},{"innerHTML":"10","start":"2021-01-10T00:00:00"},{"innerHTML":"11","start":"2021-01-11T00:00:00"},{"innerHTML":"12","start":"2021-01-12T00:00:00"},{"innerHTML":"13","start":"2021-01-13T00:00:00"},{"innerHTML":"14","start":"2021-01-14T00:00:00"},{"innerHTML":"15","start":"2021-01-15T00:00:00"},{"innerHTML":"16","start":"2021-01-16T00:00:00"},{"innerHTML":"17","start":"2021-01-17T00:00:00"},{"innerHTML":"18","start":"2021-01-18T00:00:00"},{"innerHTML":"19","start":"2021-01-19T00:00:00"},{"innerHTML":"20","start":"2021-01-20T00:00:00"},{"innerHTML":"21","start":"2021-01-21T00:00:00"},{"innerHTML":"22","start":"2021-01-22T00:00:00"},{"innerHTML":"23","start":"2021-01-23T00:00:00"},{"innerHTML":"24","start":"2021-01-24T00:00:00"},{"innerHTML":"25","start":"2021-01-25T00:00:00"},{"innerHTML":"26","start":"2021-01-26T00:00:00"},{"innerHTML":"27","start":"2021-01-27T00:00:00"},{"innerHTML":"28","start":"2021-01-28T00:00:00"},{"innerHTML":"29","start":"2021-01-29T00:00:00"},{"innerHTML":"30","start":"2021-01-30T00:00:00"},{"innerHTML":"31","start":"2021-01-31T00:00:00"},{"innerHTML":"1","start":"2021-02-01T00:00:00"},{"innerHTML":"2","start":"2021-02-02T00:00:00"},{"innerHTML":"3","start":"2021-02-03T00:00:00"},{"innerHTML":"4","start":"2021-02-04T00:00:00"},{"innerHTML":"5","start":"2021-02-05T00:00:00"},{"innerHTML":"6","start":"2021-02-06T00:00:00"},{"innerHTML":"7","start":"2021-02-07T00:00:00"},{"innerHTML":"8","start":"2021-02-08T00:00:00"},{"innerHTML":"9","start":"2021-02-09T00:00:00"},{"innerHTML":"10","start":"2021-02-10T00:00:00"},{"innerHTML":"11","start":"2021-02-11T00:00:00"},{"innerHTML":"12","start":"2021-02-12T00:00:00"},{"innerHTML":"13","start":"2021-02-13T00:00:00"},{"innerHTML":"14","start":"2021-02-14T00:00:00"},{"innerHTML":"15","start":"2021-02-15T00:00:00"},{"innerHTML":"16","start":"2021-02-16T00:00:00"},{"innerHTML":"17","start":"2021-02-17T00:00:00"},{"innerHTML":"18","start":"2021-02-18T00:00:00"},{"innerHTML":"19","start":"2021-02-19T00:00:00"},{"innerHTML":"20","start":"2021-02-20T00:00:00"},{"innerHTML":"21","start":"2021-02-21T00:00:00"},{"innerHTML":"22","start":"2021-02-22T00:00:00"},{"innerHTML":"23","start":"2021-02-23T00:00:00"},{"innerHTML":"24","start":"2021-02-24T00:00:00"},{"innerHTML":"25","start":"2021-02-25T00:00:00"},{"innerHTML":"26","start":"2021-02-26T00:00:00"},{"innerHTML":"27","start":"2021-02-27T00:00:00"},{"innerHTML":"28","start":"2021-02-28T00:00:00"},{"innerHTML":"1","start":"2021-03-01T00:00:00"},{"innerHTML":"2","start":"2021-03-02T00:00:00"},{"innerHTML":"3","start":"2021-03-03T00:00:00"},{"innerHTML":"4","start":"2021-03-04T00:00:00"},{"innerHTML":"5","start":"2021-03-05T00:00:00"},{"innerHTML":"6","start":"2021-03-06T00:00:00"},{"innerHTML":"7","start":"2021-03-07T00:00:00"},{"innerHTML":"8","start":"2021-03-08T00:00:00"},{"innerHTML":"9","start":"2021-03-09T00:00:00"},{"innerHTML":"10","start":"2021-03-10T00:00:00"},{"innerHTML":"11","start":"2021-03-11T00:00:00"},{"innerHTML":"12","start":"2021-03-12T00:00:00"},{"innerHTML":"13","start":"2021-03-13T00:00:00"},{"innerHTML":"14","start":"2021-03-14T00:00:00"},{"innerHTML":"15","start":"2021-03-15T00:00:00"},{"innerHTML":"16","start":"2021-03-16T00:00:00"},{"innerHTML":"17","start":"2021-03-17T00:00:00"},{"innerHTML":"18","start":"2021-03-18T00:00:00"},{"innerHTML":"19","start":"2021-03-19T00:00:00"},{"innerHTML":"20","start":"2021-03-20T00:00:00"},{"innerHTML":"21","start":"2021-03-21T00:00:00"},{"innerHTML":"22","start":"2021-03-22T00:00:00"},{"innerHTML":"23","start":"2021-03-23T00:00:00"},{"innerHTML":"24","start":"2021-03-24T00:00:00"},{"innerHTML":"25","start":"2021-03-25T00:00:00"},{"innerHTML":"26","start":"2021-03-26T00:00:00"},{"innerHTML":"27","start":"2021-03-27T00:00:00"},{"innerHTML":"28","start":"2021-03-28T00:00:00"},{"innerHTML":"29","start":"2021-03-29T00:00:00"},{"innerHTML":"30","start":"2021-03-30T00:00:00"},{"innerHTML":"31","start":"2021-03-31T00:00:00"},{"innerHTML":"1","start":"2021-04-01T00:00:00"},{"innerHTML":"2","start":"2021-04-02T00:00:00"},{"innerHTML":"3","start":"2021-04-03T00:00:00"},{"innerHTML":"4","start":"2021-04-04T00:00:00"},{"innerHTML":"5","start":"2021-04-05T00:00:00"},{"innerHTML":"6","start":"2021-04-06T00:00:00"},{"innerHTML":"7","start":"2021-04-07T00:00:00"},{"innerHTML":"8","start":"2021-04-08T00:00:00"},{"innerHTML":"9","start":"2021-04-09T00:00:00"},{"innerHTML":"10","start":"2021-04-10T00:00:00"},{"innerHTML":"11","start":"2021-04-11T00:00:00"},{"innerHTML":"12","start":"2021-04-12T00:00:00"},{"innerHTML":"13","start":"2021-04-13T00:00:00"},{"innerHTML":"14","start":"2021-04-14T00:00:00"},{"innerHTML":"15","start":"2021-04-15T00:00:00"},{"innerHTML":"16","start":"2021-04-16T00:00:00"},{"innerHTML":"17","start":"2021-04-17T00:00:00"},{"innerHTML":"18","start":"2021-04-18T00:00:00"},{"innerHTML":"19","start":"2021-04-19T00:00:00"},{"innerHTML":"20","start":"2021-04-20T00:00:00"},{"innerHTML":"21","start":"2021-04-21T00:00:00"},{"innerHTML":"22","start":"2021-04-22T00:00:00"},{"innerHTML":"23","start":"2021-04-23T00:00:00"},{"innerHTML":"24","start":"2021-04-24T00:00:00"},{"innerHTML":"25","start":"2021-04-25T00:00:00"},{"innerHTML":"26","start":"2021-04-26T00:00:00"},{"innerHTML":"27","start":"2021-04-27T00:00:00"},{"innerHTML":"28","start":"2021-04-28T00:00:00"},{"innerHTML":"29","start":"2021-04-29T00:00:00"},{"innerHTML":"30","start":"2021-04-30T00:00:00"},{"innerHTML":"1","start":"2021-05-01T00:00:00"},{"innerHTML":"2","start":"2021-05-02T00:00:00"},{"innerHTML":"3","start":"2021-05-03T00:00:00"},{"innerHTML":"4","start":"2021-05-04T00:00:00"},{"innerHTML":"5","start":"2021-05-05T00:00:00"},{"innerHTML":"6","start":"2021-05-06T00:00:00"},{"innerHTML":"7","start":"2021-05-07T00:00:00"},{"innerHTML":"8","start":"2021-05-08T00:00:00"},{"innerHTML":"9","start":"2021-05-09T00:00:00"},{"innerHTML":"10","start":"2021-05-10T00:00:00"},{"innerHTML":"11","start":"2021-05-11T00:00:00"},{"innerHTML":"12","start":"2021-05-12T00:00:00"},{"innerHTML":"13","start":"2021-05-13T00:00:00"},{"innerHTML":"14","start":"2021-05-14T00:00:00"},{"innerHTML":"15","start":"2021-05-15T00:00:00"},{"innerHTML":"16","start":"2021-05-16T00:00:00"},{"innerHTML":"17","start":"2021-05-17T00:00:00"},{"innerHTML":"18","start":"2021-05-18T00:00:00"},{"innerHTML":"19","start":"2021-05-19T00:00:00"},{"innerHTML":"20","start":"2021-05-20T00:00:00"},{"innerHTML":"21","start":"2021-05-21T00:00:00"},{"innerHTML":"22","start":"2021-05-22T00:00:00"},{"innerHTML":"23","start":"2021-05-23T00:00:00"},{"innerHTML":"24","start":"2021-05-24T00:00:00"},{"innerHTML":"25","start":"2021-05-25T00:00:00"},{"innerHTML":"26","start":"2021-05-26T00:00:00"},{"innerHTML":"27","start":"2021-05-27T00:00:00"},{"innerHTML":"28","start":"2021-05-28T00:00:00"},{"innerHTML":"29","start":"2021-05-29T00:00:00"},{"innerHTML":"30","start":"2021-05-30T00:00:00"},{"innerHTML":"31","start":"2021-05-31T00:00:00"},{"innerHTML":"1","start":"2021-06-01T00:00:00"},{"innerHTML":"2","start":"2021-06-02T00:00:00"},{"innerHTML":"3","start":"2021-06-03T00:00:00"},{"innerHTML":"4","start":"2021-06-04T00:00:00"},{"innerHTML":"5","start":"2021-06-05T00:00:00"},{"innerHTML":"6","start":"2021-06-06T00:00:00"},{"innerHTML":"7","start":"2021-06-07T00:00:00"},{"innerHTML":"8","start":"2021-06-08T00:00:00"},{"innerHTML":"9","start":"2021-06-09T00:00:00"},{"innerHTML":"10","start":"2021-06-10T00:00:00"},{"innerHTML":"11","start":"2021-06-11T00:00:00"},{"innerHTML":"12","start":"2021-06-12T00:00:00"},{"innerHTML":"13","start":"2021-06-13T00:00:00"},{"innerHTML":"14","start":"2021-06-14T00:00:00"},{"innerHTML":"15","start":"2021-06-15T00:00:00"},{"innerHTML":"16","start":"2021-06-16T00:00:00"},{"innerHTML":"17","start":"2021-06-17T00:00:00"},{"innerHTML":"18","start":"2021-06-18T00:00:00"},{"innerHTML":"19","start":"2021-06-19T00:00:00"},{"innerHTML":"20","start":"2021-06-20T00:00:00"},{"innerHTML":"21","start":"2021-06-21T00:00:00"},{"innerHTML":"22","start":"2021-06-22T00:00:00"},{"innerHTML":"23","start":"2021-06-23T00:00:00"},{"innerHTML":"24","start":"2021-06-24T00:00:00"},{"innerHTML":"25","start":"2021-06-25T00:00:00"},{"innerHTML":"26","start":"2021-06-26T00:00:00"},{"innerHTML":"27","start":"2021-06-27T00:00:00"},{"innerHTML":"28","start":"2021-06-28T00:00:00"},{"innerHTML":"29","start":"2021-06-29T00:00:00"},{"innerHTML":"30","start":"2021-06-30T00:00:00"},{"innerHTML":"1","start":"2021-07-01T00:00:00"},{"innerHTML":"2","start":"2021-07-02T00:00:00"},{"innerHTML":"3","start":"2021-07-03T00:00:00"},{"innerHTML":"4","start":"2021-07-04T00:00:00"},{"innerHTML":"5","start":"2021-07-05T00:00:00"},{"innerHTML":"6","start":"2021-07-06T00:00:00"},{"innerHTML":"7","start":"2021-07-07T00:00:00"},{"innerHTML":"8","start":"2021-07-08T00:00:00"},{"innerHTML":"9","start":"2021-07-09T00:00:00"},{"innerHTML":"10","start":"2021-07-10T00:00:00"},{"innerHTML":"11","start":"2021-07-11T00:00:00"},{"innerHTML":"12","start":"2021-07-12T00:00:00"},{"innerHTML":"13","start":"2021-07-13T00:00:00"},{"innerHTML":"14","start":"2021-07-14T00:00:00"},{"innerHTML":"15","start":"2021-07-15T00:00:00"},{"innerHTML":"16","start":"2021-07-16T00:00:00"},{"innerHTML":"17","start":"2021-07-17T00:00:00"},{"innerHTML":"18","start":"2021-07-18T00:00:00"},{"innerHTML":"19","start":"2021-07-19T00:00:00"},{"innerHTML":"20","start":"2021-07-20T00:00:00"},{"innerHTML":"21","start":"2021-07-21T00:00:00"},{"innerHTML":"22","start":"2021-07-22T00:00:00"},{"innerHTML":"23","start":"2021-07-23T00:00:00"},{"innerHTML":"24","start":"2021-07-24T00:00:00"},{"innerHTML":"25","start":"2021-07-25T00:00:00"},{"innerHTML":"26","start":"2021-07-26T00:00:00"},{"innerHTML":"27","start":"2021-07-27T00:00:00"},{"innerHTML":"28","start":"2021-07-28T00:00:00"},{"innerHTML":"29","start":"2021-07-29T00:00:00"},{"innerHTML":"30","start":"2021-07-30T00:00:00"},{"innerHTML":"31","start":"2021-07-31T00:00:00"},{"innerHTML":"1","start":"2021-08-01T00:00:00"},{"innerHTML":"2","start":"2021-08-02T00:00:00"},{"innerHTML":"3","start":"2021-08-03T00:00:00"},{"innerHTML":"4","start":"2021-08-04T00:00:00"},{"innerHTML":"5","start":"2021-08-05T00:00:00"},{"innerHTML":"6","start":"2021-08-06T00:00:00"},{"innerHTML":"7","start":"2021-08-07T00:00:00"},{"innerHTML":"8","start":"2021-08-08T00:00:00"},{"innerHTML":"9","start":"2021-08-09T00:00:00"},{"innerHTML":"10","start":"2021-08-10T00:00:00"},{"innerHTML":"11","start":"2021-08-11T00:00:00"},{"innerHTML":"12","start":"2021-08-12T00:00:00"},{"innerHTML":"13","start":"2021-08-13T00:00:00"},{"innerHTML":"14","start":"2021-08-14T00:00:00"},{"innerHTML":"15","start":"2021-08-15T00:00:00"},{"innerHTML":"16","start":"2021-08-16T00:00:00"},{"innerHTML":"17","start":"2021-08-17T00:00:00"},{"innerHTML":"18","start":"2021-08-18T00:00:00"},{"innerHTML":"19","start":"2021-08-19T00:00:00"},{"innerHTML":"20","start":"2021-08-20T00:00:00"},{"innerHTML":"21","start":"2021-08-21T00:00:00"},{"innerHTML":"22","start":"2021-08-22T00:00:00"},{"innerHTML":"23","start":"2021-08-23T00:00:00"},{"innerHTML":"24","start":"2021-08-24T00:00:00"},{"innerHTML":"25","start":"2021-08-25T00:00:00"},{"innerHTML":"26","start":"2021-08-26T00:00:00"},{"innerHTML":"27","start":"2021-08-27T00:00:00"},{"innerHTML":"28","start":"2021-08-28T00:00:00"},{"innerHTML":"29","start":"2021-08-29T00:00:00"},{"innerHTML":"30","start":"2021-08-30T00:00:00"},{"innerHTML":"31","start":"2021-08-31T00:00:00"},{"innerHTML":"1","start":"2021-09-01T00:00:00"},{"innerHTML":"2","start":"2021-09-02T00:00:00"},{"innerHTML":"3","start":"2021-09-03T00:00:00"},{"innerHTML":"4","start":"2021-09-04T00:00:00"},{"innerHTML":"5","start":"2021-09-05T00:00:00"},{"innerHTML":"6","start":"2021-09-06T00:00:00"},{"innerHTML":"7","start":"2021-09-07T00:00:00"},{"innerHTML":"8","start":"2021-09-08T00:00:00"},{"innerHTML":"9","start":"2021-09-09T00:00:00"},{"innerHTML":"10","start":"2021-09-10T00:00:00"},{"innerHTML":"11","start":"2021-09-11T00:00:00"},{"innerHTML":"12","start":"2021-09-12T00:00:00"},{"innerHTML":"13","start":"2021-09-13T00:00:00"},{"innerHTML":"14","start":"2021-09-14T00:00:00"},{"innerHTML":"15","start":"2021-09-15T00:00:00"},{"innerHTML":"16","start":"2021-09-16T00:00:00"},{"innerHTML":"17","start":"2021-09-17T00:00:00"},{"innerHTML":"18","start":"2021-09-18T00:00:00"},{"innerHTML":"19","start":"2021-09-19T00:00:00"},{"innerHTML":"20","start":"2021-09-20T00:00:00"},{"innerHTML":"21","start":"2021-09-21T00:00:00"},{"innerHTML":"22","start":"2021-09-22T00:00:00"},{"innerHTML":"23","start":"2021-09-23T00:00:00"},{"innerHTML":"24","start":"2021-09-24T00:00:00"},{"innerHTML":"25","start":"2021-09-25T00:00:00"},{"innerHTML":"26","start":"2021-09-26T00:00:00"},{"innerHTML":"27","start":"2021-09-27T00:00:00"},{"innerHTML":"28","start":"2021-09-28T00:00:00"},{"innerHTML":"29","start":"2021-09-29T00:00:00"},{"innerHTML":"30","start":"2021-09-30T00:00:00"},{"innerHTML":"1","start":"2021-10-01T00:00:00"},{"innerHTML":"2","start":"2021-10-02T00:00:00"},{"innerHTML":"3","start":"2021-10-03T00:00:00"},{"innerHTML":"4","start":"2021-10-04T00:00:00"},{"innerHTML":"5","start":"2021-10-05T00:00:00"},{"innerHTML":"6","start":"2021-10-06T00:00:00"},{"innerHTML":"7","start":"2021-10-07T00:00:00"},{"innerHTML":"8","start":"2021-10-08T00:00:00"},{"innerHTML":"9","start":"2021-10-09T00:00:00"},{"innerHTML":"10","start":"2021-10-10T00:00:00"},{"innerHTML":"11","start":"2021-10-11T00:00:00"},{"innerHTML":"12","start":"2021-10-12T00:00:00"},{"innerHTML":"13","start":"2021-10-13T00:00:00"},{"innerHTML":"14","start":"2021-10-14T00:00:00"},{"innerHTML":"15","start":"2021-10-15T00:00:00"},{"innerHTML":"16","start":"2021-10-16T00:00:00"},{"innerHTML":"17","start":"2021-10-17T00:00:00"},{"innerHTML":"18","start":"2021-10-18T00:00:00"},{"innerHTML":"19","start":"2021-10-19T00:00:00"},{"innerHTML":"20","start":"2021-10-20T00:00:00"},{"innerHTML":"21","start":"2021-10-21T00:00:00"},{"innerHTML":"22","start":"2021-10-22T00:00:00"},{"innerHTML":"23","start":"2021-10-23T00:00:00"},{"innerHTML":"24","start":"2021-10-24T00:00:00"},{"innerHTML":"25","start":"2021-10-25T00:00:00"},{"innerHTML":"26","start":"2021-10-26T00:00:00"},{"innerHTML":"27","start":"2021-10-27T00:00:00"},{"innerHTML":"28","start":"2021-10-28T00:00:00"},{"innerHTML":"29","start":"2021-10-29T00:00:00"},{"innerHTML":"30","start":"2021-10-30T00:00:00"},{"innerHTML":"31","start":"2021-10-31T00:00:00"},{"innerHTML":"1","start":"2021-11-01T00:00:00"},{"innerHTML":"2","start":"2021-11-02T00:00:00"},{"innerHTML":"3","start":"2021-11-03T00:00:00"},{"innerHTML":"4","start":"2021-11-04T00:00:00"},{"innerHTML":"5","start":"2021-11-05T00:00:00"},{"innerHTML":"6","start":"2021-11-06T00:00:00"},{"innerHTML":"7","start":"2021-11-07T00:00:00"},{"innerHTML":"8","start":"2021-11-08T00:00:00"},{"innerHTML":"9","start":"2021-11-09T00:00:00"},{"innerHTML":"10","start":"2021-11-10T00:00:00"},{"innerHTML":"11","start":"2021-11-11T00:00:00"},{"innerHTML":"12","start":"2021-11-12T00:00:00"},{"innerHTML":"13","start":"2021-11-13T00:00:00"},{"innerHTML":"14","start":"2021-11-14T00:00:00"},{"innerHTML":"15","start":"2021-11-15T00:00:00"},{"innerHTML":"16","start":"2021-11-16T00:00:00"},{"innerHTML":"17","start":"2021-11-17T00:00:00"},{"innerHTML":"18","start":"2021-11-18T00:00:00"},{"innerHTML":"19","start":"2021-11-19T00:00:00"},{"innerHTML":"20","start":"2021-11-20T00:00:00"},{"innerHTML":"21","start":"2021-11-21T00:00:00"},{"innerHTML":"22","start":"2021-11-22T00:00:00"},{"innerHTML":"23","start":"2021-11-23T00:00:00"},{"innerHTML":"24","start":"2021-11-24T00:00:00"},{"innerHTML":"25","start":"2021-11-25T00:00:00"},{"innerHTML":"26","start":"2021-11-26T00:00:00"},{"innerHTML":"27","start":"2021-11-27T00:00:00"},{"innerHTML":"28","start":"2021-11-28T00:00:00"},{"innerHTML":"29","start":"2021-11-29T00:00:00"},{"innerHTML":"30","start":"2021-11-30T00:00:00"},{"innerHTML":"1","start":"2021-12-01T00:00:00"},{"innerHTML":"2","start":"2021-12-02T00:00:00"},{"innerHTML":"3","start":"2021-12-03T00:00:00"},{"innerHTML":"4","start":"2021-12-04T00:00:00"},{"innerHTML":"5","start":"2021-12-05T00:00:00"},{"innerHTML":"6","start":"2021-12-06T00:00:00"},{"innerHTML":"7","start":"2021-12-07T00:00:00"},{"innerHTML":"8","start":"2021-12-08T00:00:00"},{"innerHTML":"9","start":"2021-12-09T00:00:00"},{"innerHTML":"10","start":"2021-12-10T00:00:00"},{"innerHTML":"11","start":"2021-12-11T00:00:00"},{"innerHTML":"12","start":"2021-12-12T00:00:00"},{"innerHTML":"13","start":"2021-12-13T00:00:00"},{"innerHTML":"14","start":"2021-12-14T00:00:00"},{"innerHTML":"15","start":"2021-12-15T00:00:00"},{"innerHTML":"16","start":"2021-12-16T00:00:00"},{"innerHTML":"17","start":"2021-12-17T00:00:00"},{"innerHTML":"18","start":"2021-12-18T00:00:00"},{"innerHTML":"19","start":"2021-12-19T00:00:00"},{"innerHTML":"20","start":"2021-12-20T00:00:00"},{"innerHTML":"21","start":"2021-12-21T00:00:00"},{"innerHTML":"22","start":"2021-12-22T00:00:00"},{"innerHTML":"23","start":"2021-12-23T00:00:00"},{"innerHTML":"24","start":"2021-12-24T00:00:00"},{"innerHTML":"25","start":"2021-12-25T00:00:00"},{"innerHTML":"26","start":"2021-12-26T00:00:00"},{"innerHTML":"27","start":"2021-12-27T00:00:00"},{"innerHTML":"28","start":"2021-12-28T00:00:00"},{"innerHTML":"29","start":"2021-12-29T00:00:00"},{"innerHTML":"30","start":"2021-12-30T00:00:00"},{"innerHTML":"31","start":"2021-12-31T00:00:00"}]];
v.timeHeaders = [{"groupBy":"Month"}];
v.treeEnabled = false;
v.treeIndent = 20;
v.treeImageCollapse = '';
v.treeImageExpand = '';
v.treeImageNoChildren = '';
v.treeImageMarginLeft = 2;
v.treeImageMarginTop = 2;
v.treePreventParentUsage = false;
v.uniqueID = 'ctl00$MainContent$DayPilotScheduler1';
v.useEventBoxes = 'Always';
v.viewType = 'Resources';
v.width = '100%';
v.weekStarts = 0;
v.tagFields = ["ReservationStatus"];
v.callbackError = function(result, context) { alert('An exception was thrown in the server-side event handler:\n\n' + result.substring(result.indexOf('$$$')+3)); };
v.afterEventRender = function(e, div) {};
v.afterRender = function(data, isCallBack) {afterRender(data);};
v.eventClickHandling = 'JavaScript';
v.onEventClick = function(e) {editEvent(e.value());};
v.eventHoverHandling = 'Bubble';
v.eventDoubleClickHandling = 'Disabled';
v.onEventDoubleClick = function(e) {alert('Event with id ' + e.value() + ' double-clicked.')};
v.eventRightClickHandling = 'ContextMenu';
v.onEventRightClick = function(e) {alert('Event with id ' + e.value() + ' clicked.')};
v.eventResizeHandling = 'CallBack';
v.onEventResize = function(e, newStart, newEnd) { alert('Event with id ' + e.value() + ' was resized.');};
v.eventSelectHandling = 'Disabled';
v.onEventSelect = function(e, change) {alert('Event selected.')};
v.eventMoveHandling = 'CallBack';
v.onEventMove = function(e, newStart, newEnd, newResource, external, ctrl, shift) { var newColumn = newResource; alert('Event with id ' + e.value() + ' was moved.');};
v.timeRangeSelectedHandling = 'JavaScript';
v.onTimeRangeSelected = function(start, end, resource) { var column = resource; createEvent(start, end, column);};
v.timeRangeDoubleClickHandling = 'Disabled';
v.onTimeRangeDoubleClick = function(start, end, resource) {alert(start.toString() + '\n' + end.toString() + '\n' + resource);};
v.eventEditHandling = 'Disabled';
v.onEventEdit = function(e, newText) {alert('The text of event ' + e.value() + ' was changed to ' + newText + '.');};
v.resourceHeaderClickHandling = 'Disabled';
v.onResourceHeaderClick = function(resource) {alert('Resource with id ' + resource.value + ' clicked.')};
v.timeHeaderClickHandling = 'Disabled';
v.onTimeHeaderClick = function(header) {alert('Time header clicked: ' + header.start + '.')};
v.resourceCollapseHandling = 'Disabled';
v.onResourceCollapse = function(resource) {alert('Resource collapsed:' + resource.value)};
v.resourceExpandHandling = 'Disabled';
v.onResourceExpand = function(resource) {alert('Resource expanded:' + resource.value)};
v.onAutoRefresh = function(args) {};
v.cellProperties = {"1_0":{"backColor":"#f8f8f8"},"2_0":{"backColor":"#f8f8f8"},"8_0":{"backColor":"#f8f8f8"},"9_0":{"backColor":"#f8f8f8"},"15_0":{"backColor":"#f8f8f8"},"16_0":{"backColor":"#f8f8f8"},"22_0":{"backColor":"#f8f8f8"},"23_0":{"backColor":"#f8f8f8"},"29_0":{"backColor":"#f8f8f8"},"30_0":{"backColor":"#f8f8f8"},"36_0":{"backColor":"#f8f8f8"},"37_0":{"backColor":"#f8f8f8"},"43_0":{"backColor":"#f8f8f8"},"44_0":{"backColor":"#f8f8f8"},"50_0":{"backColor":"#f8f8f8"},"51_0":{"backColor":"#f8f8f8"},"57_0":{"backColor":"#f8f8f8"},"58_0":{"backColor":"#f8f8f8"},"64_0":{"backColor":"#f8f8f8"},"65_0":{"backColor":"#f8f8f8"},"71_0":{"backColor":"#f8f8f8"},"72_0":{"backColor":"#f8f8f8"},"78_0":{"backColor":"#f8f8f8"},"79_0":{"backColor":"#f8f8f8"},"85_0":{"backColor":"#f8f8f8"},"86_0":{"backColor":"#f8f8f8"},"92_0":{"backColor":"#f8f8f8"},"93_0":{"backColor":"#f8f8f8"},"99_0":{"backColor":"#f8f8f8"},"100_0":{"backColor":"#f8f8f8"},"106_0":{"backColor":"#f8f8f8"},"107_0":{"backColor":"#f8f8f8"},"113_0":{"backColor":"#f8f8f8"},"114_0":{"backColor":"#f8f8f8"},"120_0":{"backColor":"#f8f8f8"},"121_0":{"backColor":"#f8f8f8"},"127_0":{"backColor":"#f8f8f8"},"128_0":{"backColor":"#f8f8f8"},"134_0":{"backColor":"#f8f8f8"},"135_0":{"backColor":"#f8f8f8"},"141_0":{"backColor":"#f8f8f8"},"142_0":{"backColor":"#f8f8f8"},"148_0":{"backColor":"#f8f8f8"},"149_0":{"backColor":"#f8f8f8"},"155_0":{"backColor":"#f8f8f8"},"156_0":{"backColor":"#f8f8f8"},"162_0":{"backColor":"#f8f8f8"},"163_0":{"backColor":"#f8f8f8"},"169_0":{"backColor":"#f8f8f8"},"170_0":{"backColor":"#f8f8f8"},"176_0":{"backColor":"#f8f8f8"},"177_0":{"backColor":"#f8f8f8"},"183_0":{"backColor":"#f8f8f8"},"184_0":{"backColor":"#f8f8f8"},"190_0":{"backColor":"#f8f8f8"},"191_0":{"backColor":"#f8f8f8"},"197_0":{"backColor":"#f8f8f8"},"198_0":{"backColor":"#f8f8f8"},"204_0":{"backColor":"#f8f8f8"},"205_0":{"backColor":"#f8f8f8"},"211_0":{"backColor":"#f8f8f8"},"212_0":{"backColor":"#f8f8f8"},"218_0":{"backColor":"#f8f8f8"},"219_0":{"backColor":"#f8f8f8"},"225_0":{"backColor":"#f8f8f8"},"226_0":{"backColor":"#f8f8f8"},"232_0":{"backColor":"#f8f8f8"},"233_0":{"backColor":"#f8f8f8"},"239_0":{"backColor":"#f8f8f8"},"240_0":{"backColor":"#f8f8f8"},"246_0":{"backColor":"#f8f8f8"},"247_0":{"backColor":"#f8f8f8"},"253_0":{"backColor":"#f8f8f8"},"254_0":{"backColor":"#f8f8f8"},"260_0":{"backColor":"#f8f8f8"},"261_0":{"backColor":"#f8f8f8"},"267_0":{"backColor":"#f8f8f8"},"268_0":{"backColor":"#f8f8f8"},"274_0":{"backColor":"#f8f8f8"},"275_0":{"backColor":"#f8f8f8"},"281_0":{"backColor":"#f8f8f8"},"282_0":{"backColor":"#f8f8f8"},"288_0":{"backColor":"#f8f8f8"},"289_0":{"backColor":"#f8f8f8"},"295_0":{"backColor":"#f8f8f8"},"296_0":{"backColor":"#f8f8f8"},"302_0":{"backColor":"#f8f8f8"},"303_0":{"backColor":"#f8f8f8"},"309_0":{"backColor":"#f8f8f8"},"310_0":{"backColor":"#f8f8f8"},"316_0":{"backColor":"#f8f8f8"},"317_0":{"backColor":"#f8f8f8"},"323_0":{"backColor":"#f8f8f8"},"324_0":{"backColor":"#f8f8f8"},"330_0":{"backColor":"#f8f8f8"},"331_0":{"backColor":"#f8f8f8"},"337_0":{"backColor":"#f8f8f8"},"338_0":{"backColor":"#f8f8f8"},"344_0":{"backColor":"#f8f8f8"},"345_0":{"backColor":"#f8f8f8"},"351_0":{"backColor":"#f8f8f8"},"352_0":{"backColor":"#f8f8f8"},"358_0":{"backColor":"#f8f8f8"},"359_0":{"backColor":"#f8f8f8"}};
v.cellConfig = {"default":{"business":1,"backColor":"#ffffff"},"y":9,"vertical":true,"horizontal":false,"x":365};
v.hashes = {"colors":"JA7almkMiPo6r8+8cyn6fBkUxCM=","callBack":"hZVsZ5nUbhXn\/c1UvcbCui+T\/s4=","timeHeader":"Q+lgAfwWa4ogR\/uHuNzfAEES6FI=","corner":"kj9\/HVS+ZSoiJgQv9dBXDdKZMZw=","separators":"9Zf952LI\/Q0nZqvWqC3W04Lj6TU="};
v.init();
return v.initialized ? v : null;
}
var dps = dps_Init() || dps;
</script>
</form>
</body>
</html>
