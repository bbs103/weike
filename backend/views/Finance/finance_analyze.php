<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>keke admin</title>


<link href="tpl/css/admin_management.css" rel="stylesheet" type="text/css" />
<link href="resource/css/buttons.css" rel="stylesheet" type="text/css" />
<link title="style1" href="tpl/skin/default/style.css" rel="stylesheet" type="text/css" />
<!--<link title="style2" href="tpl/skin/light/style.css" rel="stylesheet" type="text/css" />-->
<script type="text/javascript" src="resource/js/jquery.js"></script>
<script type="text/javascript" src="resource/js/system/keke.js"></script>
<script type="text/javascript" src="resource/js/in.js"></script>
</head>
<body class="frame_body">
<div class="frame_content">
<div id="append_parent"></div>
<div class="page_title">
    <h1>财务模块</h1>
    <div class="tool">
    	 <a href="index.php?r=finance/finance_survey">财务概况</a>
<a href="index.php?r=finance/finance_detail">财务明细</a>
    <a href="index.php?r=finance/finance_analyze" class="here">财务分析</a>
   
    <a href="index.php?r=finance/pay_audit">充值审核</a>
   <a href="index.php?r=finance/deposit_audit">提现审核</a>
   
    </div>
</div>
<div class="box search p_relative">
 </div>
<!--搜索结束-->
<div class="box list">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <th scope="row"><strong>收入报表</strong>
 <button type="button" class="pill" onclick="location.href='index.php?do=finance&view=report&ac=update'">
                 	<span class="icon magnifier">&nbsp;</span>刷新报表数据           		</button>
</th>
     </tr>
     <tr>
     	<th scope="row">
     		<select id="years">
     			     			<option value="2014">2014</option>
     			     			<option value="2013">2013</option>
     			     			<option value="total">所有</option>
     		</select>
     		<button type="button" class="pill" onclick="return setXML_Flie();">
                 	<span class="icon magnifier">&nbsp;</span>查看           		</button>
</th>
     </tr>
  	</table>   
     <div id="income" style="float:left;"></div>
     <div id="analysis"></div>
</div>  
<script type="text/javascript" src="tpl/anychart_files/js/AnyChart.js"></script>
<script type='text/javascript'>
 //<![CDATA[
     	AnyChart.swfFile='tpl/anychart_files/swf/AnyChart.swf';
 	var chart = new AnyChart();
 	chart.width = '500';
 	chart.height = '500';
 	 	chart.setXMLFile("tpl/anychart_files/xml/income_2014.xml");//('tpl/anychart_files/xml/income_%s.xml');//tpl/anychart_files/xml/income.xml
    chart.write('income');
    var charts = new AnyChart();
 	charts.width = '500';
 	charts.height = '500';
    charts.setXMLFile("tpl/anychart_files/xml/analysis_2014.xml");
    charts.write('analysis');
//]]>
function setXML_Flie(){
 chart.setXMLFile('tpl/anychart_files/xml/income_'+$('#years').val()+'.xml');
 charts.setXMLFile('tpl/anychart_files/xml/analysis_'+$('#years').val()+'.xml');
 return false;
 }
</script>
</div>
<script type="text/javascript"
src="resource/js/artdialog/artDialog.js"></script>
<script type="text/javascript"
src="resource/js/artdialog/jquery.artDialog.js?skin=default"></script>
<script type="text/javascript"
src="resource/js/artdialog/artDialog.iframeTools.source.js"></script>
<script type="text/javascript" src="../../lang/cn/script/lang.js"></script>
<script type="text/javascript">
In.add('form_and_validation', {
path : "resource/js/system/form_and_validation.js",
type : 'js'
});
In.add('xheditor', {
path : "resource/js/xheditor/xheditor.js",
type : 'js'
});
In.add('mousewheel', {
path : "tpl/js/jquery.mousewheel.min.js",
type : 'js'
});
//In.add('styleswitch',{path:"tpl/js/styleswitch.js",type:'js'});
In.add('table', {
path : "tpl/js/table.js",
type : 'js'
});
In.add('calendar', {
path : "resource/js/system/script_calendar.js"
});
In('form_and_validation', 'xheditor', 'mousewheel', 'table', 'calendar');
</script>

<script type="text/javascript">
function cdel(o, s) {
d = art.dialog;
var c = "你确认删除操作？";
if (s) {
c = s;
}
d.confirm(c, function() {
window.location.href = o.href;
});
return false;
}
function cpass(o, s, type) {
d = art.dialog;
if (type == 1) {
var c = "确认审核通过？";
} else {
var c = "确认审核失败？";
}
if (s) {
c = s;
}
d.confirm(c, function() {
window.location.href = o.href;
});
return false;
}
function cfreeze(o, s, type) {
d = art.dialog;
if (type == 1) {
var c = "确认冻结？";
}
if (s) {
c = s;
}
d.confirm(c, function() {
window.location.href = o.href;
});
return false;
}
function crecomm(o, s, type) {
d = art.dialog;
if (type == 1) {
var c = "确认推荐？";
} else {
var c = "确认取消推荐？";
}
if (s) {
c = s;
}
d.confirm(c, function() {
window.location.href = o.href;
});
return false;
}
function pdel(frm) {
d = art.dialog;
var frm = frm;
var c = "你确认删除操作？";
d.confirm(c, function() {
$("#" + frm).submit();
});
return false;
}
function batch_act(obj, frm) {
d = art.dialog;
var frm = frm;
var c = $(obj).val();
var conf = $(":checkbox[name='ckb[]']:checked").length;
if (conf > 0) {
d.confirm("确定" + c + '?', function() {
$(".sbt_action").val(c);
$("#" + frm).submit();
});
} else {
d.alert("您没有选择任何操作项");
}
return false;
}
</script>
</body>
</html>