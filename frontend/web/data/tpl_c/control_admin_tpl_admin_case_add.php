<?php keke_tpl_class::checkrefresh('control/admin/tpl/admin_case_add', '1418090816' );?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_K['charset'];?>">
<title>keke admin</title>


<link href="tpl/css/admin_management.css" rel="stylesheet" type="text/css" />
<link href="../../resource/css/buttons.css" rel="stylesheet" type="text/css" />
<link title="style1" href="tpl/skin/default/style.css" rel="stylesheet" type="text/css" />
<!--<link title="style2" href="tpl/skin/light/style.css" rel="stylesheet" type="text/css" />-->
<script type="text/javascript" src="../../resource/js/jquery.js"></script>
<script type="text/javascript" src="../../resource/js/system/keke.js"></script>
<script type="text/javascript" src="../../resource/js/in.js"></script>
</head>
<body class="frame_body">
<div class="frame_content">
<div id="append_parent"></div>  
<div class="page_title">
    	<h1><?php echo $_lang['case_manage'];?></h1>
        <div class="tool">
             <a href="index.php?do=<?php echo $do?>&view=list"><?php echo $_lang['case_list'];?></a>
 <a class="here" href="index.php?do=<?php echo $do?>&view=add&case_id=<?php echo $case_id;?>"><?php if($case_info['case_id']) { ?><?php echo $_lang['edit'];?><?php } else { ?><?php echo $_lang['add'];?><?php } ?><?php echo $_lang['case'];?></a>
            </div>
    </div>
<div class="box post">
<div class="title"><h2><?php if($case_info['case_id']) { ?><?php echo $_lang['edit'];?><?php } else { ?><?php echo $_lang['add'];?><?php } ?><?php echo $_lang['case'];?></h2></div>
            <div class="detail">
            	 <form action="index.php?do=<?php echo $do?>&view=add" method="post" id="frm" name="frm" enctype="multipart/form-data">
            	 	<input type="hidden" name="hdn_case_id" value="<?php echo $case_id;?>">
<input type="hidden" id="obj_id" name="fds[obj_id]">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <th scope="row" width="130"><?php echo $_lang['case_img'];?><?php echo $_lang['zh_mh'];?></th>
                        <td>
                       		  <?php if($case_info['case_img']) { ?>
  <?php $file = substr($case_info['case_img'],strrpos($case_info['case_img'],"/")+1) ?>
  <a href="<?php echo $_K['siteurl'];?>/<?php echo $case_info['case_img'];?>" target="_blank"><?php echo $file;?></a>
  <br>
<?php } ?>
                   <input type="file" name="fle_case_img" id="fle_case_img" ><span id="span_msg" style="color:red"></span>
                   <input type="hidden" name = "hdn_case_img" id="hdn_case_img" >
   <div class="c999"><?php echo $_lang['support_img_type'];?></div>
                        </td>
                      </tr>
  <tr>
  	<th scope="row" width="130"><?php echo $_lang['case_type'];?><?php echo $_lang['zh_mh'];?></th>
<td>
  	<select name="case_type" id="case_type" onchange ="search_case();">
  		<option value="0" >---<?php echo $_lang['please_choose'];?>---</option>
  		<option value="task" <?php if($case_info['obj_type']=='task') { ?>selected="selected"<?php } ?>>---<?php echo $_lang['task'];?>---</option>
<option value="service" <?php if($case_info['obj_type']=='service') { ?>selected="selected"<?php } ?>>---<?php echo $_lang['shop'];?>---</option>
  		</select>

                             <span id="case_type_msg"></span>
</td>
  	</tr>

 <script type="text/javascript">
 	function search_case(){
var search_type = $("#case_type").val(); 

art.dialog.open('index.php?do=case&view=search&search_type='+search_type,{
title:"<?php echo $_lang['case_search'];?>",
height:400,
width:700,
closeFn:function (){
  
$("#obj_id").val(art.dialog.data('obj_id_val'));
$("#txt_task_title").val(art.dialog.data('title_val'));
$("#txt_case_price").val(art.dialog.data('cash_val'));
$("#hdn_case_img").val(art.dialog.data('case_img'));
$("#case_type").val(art.dialog.data('case_type'));
}
},false);
  					}

 </script>
  
  <tr>
                        <th scope="row" width="130"><?php echo $_lang['case_name'];?><?php echo $_lang['zh_mh'];?></th>
                        <td>
                       		<input type="text" id="txt_task_title" value="<?php if($case_info['case_title']) { ?><?php echo $case_info['case_title']?><?php } else { ?><?php echo $case_info['task_title']?><?php } ?>"
 name="fds[case_title]" class="txt" style=" width:260px;"
 	limit="required:true;len:2-50" msg="<?php echo $_lang['txt_case_title_msg'];?>" title="<?php echo $_lang['txt_case_title_msg'];?>" msgarea="span_name"/>
                        	<span id="span_name"></span>
</td>
                      </tr>
  
   <tr>
                        <th scope="row" width="130"><?php echo $_lang['case_money'];?><?php echo $_lang['zh_mh'];?></th>
                        <td>
                       		<input type="text" id="txt_case_price" value="<?php if($case_info['case_price']) { ?><?php echo $case_info['case_price'];?><?php } elseif($case_info['task_price']) { ?><?php echo $case_info['task_price']?><?php } else { ?><?php } ?>"
 name="fds[case_price]" class="txt" style=" width:260px;" onkeyup="clearstr(this)"/>
                        </td>
                      </tr>
  
  
   <tr>
                        <th scope="row">&nbsp;</th>
                        <td>
                            <div class="clearfix padt10">
                            	<input type="hidden" name="sbt_edit" value="1">
                            	<button class="positive pill primary button" name="sbt_edit" type="button" value="<?php echo $_lang['submit'];?>" onclick="case_sbt();">
                            		<span class="icon check"></span>
<?php echo $_lang['submit'];?></button>
                                
                                </div>
                        </td>
                      </tr>
   				 </table>
   	 </div>
</div>
<script type="text/javascript">
      
 
function case_sbt(){

if(!$("#case_type").val()){
$("#case_type_msg").html('请选择类型');
return false;
}
var case_img = '<?php echo $case_info['case_img'];?>';
if($("#hdn_case_img").val()==''&&$("#fle_case_img").val()==''){
$("#hdn_case_img").val(case_img);
}
if($("#fle_case_img").val()||case_img){ 
   
if(checkForm(document.getElementById('frm'))){ 
$("#frm").submit(); 
}		
}else{

$("#span_msg").html('请上传图片');
return false;

}
 

}



</script>




 </div>
<script type="text/javascript"
src="../../resource/js/artdialog/artDialog.js"></script>
<script type="text/javascript"
src="../../resource/js/artdialog/jquery.artDialog.js?skin=default"></script>
<script type="text/javascript"
src="../../resource/js/artdialog/artDialog.iframeTools.source.js"></script>
<script type="text/javascript" src="../../lang/<?php echo $language?>/script/lang.js"></script>
<script type="text/javascript">
In.add('form_and_validation', {
path : "../../resource/js/system/form_and_validation.js",
type : 'js'
});
In.add('xheditor', {
path : "../../resource/js/xheditor/xheditor.js",
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
path : "../../resource/js/system/script_calendar.js"
});
In('form_and_validation', 'xheditor', 'mousewheel', 'table', 'calendar');
</script>

<script type="text/javascript">
function cdel(o, s) {
d = art.dialog;
var c = "<?php echo $_lang['you_comfirm_delete_operate'];?>";
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
var c = "<?php echo $_lang['you_comfirm_delete_operate'];?>";
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
d.confirm("<?php echo $_lang['confirm'];?>" + c + '?', function() {
$(".sbt_action").val(c);
$("#" + frm).submit();
});
} else {
d.alert("<?php echo $_lang['has_none_being_choose'];?>");
}
return false;
}
</script>
<?php if(KEKE_DEBUG) { ?>
<div
style="background-color: red; color: #fff; width: 400px; text-align: center;">
querys:
<?php echo db_factory::create()->get_query_num() ?>
&nbsp; times:
<?php echo kekezu::execute_time() ?>
</div>

<?php } ?>
</body>
</html>
<?php keke_tpl_class::ob_out();?>