<?php keke_tpl_class::checkrefresh('control/admin/tpl/admin_case_search', '1418090819' );?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
  <div class="box search p_relative">
   
    
    </div>
    <!--搜索结束-->

    <div class="box list">
    	<div class="title"><h2><?php echo $_lang['case_search'];?></h2></div>
        <div class="detail">
        	<form action="#" method="post">
        		<label><?php echo $_lang['case_type'];?></label>
<select id="search_type" name="search_type">
<option value="task" <?php if($search_type=='task') { ?> selected="selected" <?php } ?>><?php echo $_lang['task'];?></option>
<option value="service"  <?php if($search_type=='service') { ?> selected="selected" <?php } ?> ><?php echo $_lang['goods'];?></option>
</select>

<label><?php echo $_lang['case_id'];?></label>
<input type="text" name="search_id" id="search_id" class="txt" value="<?php echo $search_id?>"/>
<button class="pill" type="submit" value="<?php echo $_lang['search'];?>" name="sbt_search">
        		<span class="icon magnifier"></span><?php echo $_lang['search'];?>
</button>
</form>

        	<form action="" id='frm_list' method="post">
        	<input type="hidden" value="<?php echo $page;?>" name="page">
<input type="hidden" name="w[page_size]" value="<?php echo $page_size;?>">
               <div id="ajax_dom"><input type="hidden" value="<?php echo $page;?>" name="page">
               <table cellpadding="0" cellspacing="0">
                <tbody>
                  <tr>
                    <th width="12%"><?php echo $_lang['case_id'];?></th>
                    <th width="20%"><?php echo $_lang['case_title'];?></th>
                    <th width="10%"><?php echo $_lang['case_type'];?></th>
                    <th width="15%"><?php echo $_lang['case_cash'];?></th>
                    <th width="15%"><?php echo $_lang['pub_name'];?></th>

                  </tr>
                  <?php if(is_array($task_case_arr)) { foreach($task_case_arr as $k => $v) { ?>
 
               
                  <?php if($search_type=='task') { ?>
     <tr class="item" style="cursor:pointer;" onclick="add_caseinfo('<?php echo $v['task_id']?>','')" >
    <td class="td25" id="id_<?php echo $v['task_id']?>"><?php echo $v['task_id']?></td> 
                    <td class="td28" id="title_<?php echo $v['task_id']?>"  ext="<?php echo $v['task_title']?>"><?php echo	kekezu::cutstr($v['task_title'], 20); ?></td>
                    <td ><?php echo $model_type_arr[$v['model_id']]?></td>
                    <td> <font color=red id="cash_<?php echo $v['task_id']?>"><?php  echo keke_curren_class::output(floatval($v['task_cash']),-1);  ?></font> </td>
<input type="hidden" id="casher_<?php echo $v['task_id']?>" value="<?php echo $v['task_cash']?>">
                    <td><?php echo $v['username']?></td> 
  <?php } else { ?>
 <tr class="item" style="cursor:pointer;" onclick="add_caseinfo('<?php echo $v['service_id']?>','<?php echo $v['pic']?>')" >
<td class="td25" id="id_<?php echo $v['service_id']?>"><?php echo $v['service_id']?></td> 
                    <td class="td28" id="title_<?php echo $v['service_id']?>"   ext="<?php echo $v['title']?>"><?php echo kekezu::cutstr($v['title'], 20); ?></td>
                    <td><?php echo $model_type_arr[$v['model_id']]?></td>
                    <td> <font color=red id="cash_<?php echo $v['service_id']?>"> <?php  echo keke_curren_class::output(floatval($v['price']),-1);  ?></font> </td>
<input type="hidden" id="casher_<?php echo $v['service_id']?>" value="<?php echo $v['price']?>">
                    <td><?php echo $v['username']?></td>
</tr>
  <?php } ?>
                 	
                 
                  <?php } } ?>
                  
                </tbody>
              </table>
  <div class="page"><?php echo $pages['page'];?></div>
  </div>
        	</form>
        </div>       
    </div>
<!--主体结束-->
 
<script type="text/javascript">
function add_caseinfo(k,img){
var k = k;
var obj_id_val = parseInt($("#id_"+k).html());//对象id
var title_val = $("#title_"+k).attr("ext");//案例标题
var cash_val = $("#casher_"+k).val();
var case_type = '<?php echo $search_type?>';

if(img){
var case_img = img;	
}
art.dialog.data('cash_val',cash_val);
art.dialog.data('title_val',title_val);
art.dialog.data('obj_id_val',obj_id_val);
art.dialog.data('case_type',case_type);
art.dialog.data('case_img',case_img);
art.dialog.close();
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