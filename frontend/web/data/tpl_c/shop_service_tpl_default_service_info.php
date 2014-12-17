<?php keke_tpl_class::checkrefresh('shop/service/tpl/default/service_info', '1418108288' );?><?php $page_title=$service_info[title].'--'.$_K[html_title] ?><?php if($_K['inajax']) { ?>
     <?php if(!isset($ajaxmenu)) { ?>
<h3 class="flb"><em><?php echo $title;?></em><span><a href="javascript:;" class="flbc" onClick="hideWindow('<?php echo $handlekey?>');" title="close"><?php echo $_lang['close'];?></a></span></h3>
<?php } ?>
<?php } else { ?>
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html dir="ltr" lang="zh-cn" id="ie6"> <![endif]-->
<!--[if IE 7]>    <html dir="ltr" lang="zh-cn" id="ie7"> <![endif]-->
<!--[if IE 8]>    <html dir="ltr" lang="zh-cn" id="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html dir="ltr" lang="zh-cn"> <!--<![endif]-->
<head>
<meta charset="<?php echo $_K['charset'];?>">
<title><?php echo $page_title;?></title>
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE,chrome=1">
<meta name="keywords" content="<?php echo $page_keyword;?>">
<meta name="description" content="<?php echo $page_description;?>">
<meta name="generator" content="<?php echo $_lang['keke_pub'];?> <?php echo KEKE_VERSION;?>" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style” content=black" /> 
<meta name="author" content="kekezu" />
<meta name="copyright" content="<?php echo $basic_config['copyright'];?>" />
<link rel="shortcut icon" href="favicon.ico" />
<link rel="apple-touch-icon" href="favicon.ico"/>
<script type="text/javascript">
var SITEURL= "<?php echo $_K['siteurl'];?>",
    SKIN_PATH = '<?php echo SKIN_PATH;?>',
LANG       = '<?php echo $language;?>',
    INDEX      = '<?php echo $do;?>',
    CHARSET    = "<?php echo $_K['charset'];?>";
</script>
<link href="resource/css/reset.css" rel="stylesheet" charset="utf-8">
<!--公用样式-->
<link href="resource/css/base.css" rel="stylesheet" charset="utf-8">
<!--布局样式-->

<link rel="stylesheet" media="all" href="resource/css/layout/960.min.css" charset="utf-8">


<!--box样式-->
<link href="resource/css/box.css" rel="stylesheet" charset="utf-8">

<link href="resource/css/animate.css" rel="stylesheet" charset="utf-8">
<link href="<?php echo SKIN_PATH;?>/css/common.css" rel="stylesheet" charset="utf-8">
<link href="<?php echo SKIN_PATH;?>/theme/<?php echo $_K['theme'];?>/css/<?php echo $_K['theme'];?>_style.css" rel="stylesheet" charset="utf-8">
<link href="resource/js/jqplugins/tipsy/tipsy.css" rel="stylesheet">
<link href="resource/css/button/stylesheets/css3buttons.css" rel="stylesheet" charset="utf-8">
<!--[if lt IE 9]>
<script src="resource/js/system/html5.js" type="text/javascript"></script>
<![endif]-->


<!--jQuery1.4.4库-->
<script src="resource/js/jquery.js" type="text/javascript"></script>
<script src="lang/<?php echo $language;?>/script/lang.js" type="text/javascript"></script>
<script src="resource/js/system/keke.js" type="text/javascript"></script>
<script src="resource/js/in.js" type="text/javascript"></script>
<script type="text/javascript">
 //js异步加载预定义
 	In.add('mouseDelay',{path:"resource/js/jqplugins/jQuery.mouseDelay.js",type:'js'});
In.add('waypoints',{path:"resource/js/jqplugins/waypoints/waypoints.min.js",type:'js'});
In.add('custom',{path:"resource/js/system/custom.js",type:'js',rely:['waypoints']});
 	In.add('form',{path:"resource/js/system/form_and_validation.js",type:'js'});
In.add('print',{path:"resource/js/jqplugins/jquery.print.js",type:'js'});
In.add('task',{path:"resource/js/system/task.js",type:'js'});
 	In.add('calendar',{path:"resource/js/system/script_calendar.js",type:'js'}); 
In.add('xheditor',{path:"resource/js/xheditor/xheditor.js",type:'js'});  
 	In.add('script_city',{path:"resource/js/system/script_city.js",type:'js'}); 
In.add('lavalamp',{path:"resource/js/jqplugins/lavalamp/jquery.lavalamp-1.3.5.min.js",type:'js'});
In.add('tipsy',{path:"resource/js/jqplugins/tipsy/jquery.tipsy.js",type:'js'});
In.add('autoIMG',{path:"resource/js/jqplugins/autoimg/jQuery.autoIMG.min.js",type:'js'});
 	In.add('slides',{path:"resource/js/jqplugins/slides.min.jquery.js",type:'js'});
In.add('ajaxfileupload',{path:"resource/js/system/ajaxfileupload.js",type:'js'});
In.add('header_top',{path:"resource/js/system/header_top.js",type:'js',rely:['mouseDelay']}); 
In.add('lazy',{path:"resource/js/system/lazy.js",type:'js'});
In.add('pcas',{path:"resource/js/system/PCASClass.js",type:'js'});
  		

</script>



</head>
    <body id="<?php echo $do;?>">

<div class="<?php echo $_K['theme'];?>_style" id="wrapper">

        <div id="append_parent">
        </div>
        <div id="ajaxwaitid">
        	<div>
        	<img src="<?php echo SKIN_PATH;?>/theme/<?php echo $_K['theme'];?>/img/system/loading.gif" alt="loading"/>
<?php echo $_lang['request_processing'];?>
</div>
</div>
 
<!--无刷新临时替换层-->
        <div id="noflushwarper">
        	<div id="noflushwarper_sub"></div>
        </div>
 	
<!--body start-->


<!--顶部广告位 start-->
<div class="t_c site_messages">
<?php keke_loaddata_class::ad_show('GLOBAL_TOP_BANNER','service','') ?>
</div>
<!--顶部广告位-->




    <!--头部 start-->
    <header class="header" id="pageTop">
        <div class="container_24 clearfix">
        	<!--logo start-->
            <hgroup class="grid_7 logo">
             	 <h1><a href="index.php">
             	 	<?php if(isset($custom_logo)) { ?>
<img src="<?php echo $basic_config['web_logo'];?>"
<?php } else { ?>
<img src="<?php echo SKIN_PATH;?>/theme/<?php echo $_K['theme'];?>/img/style/<?php echo $basic_config['web_logo'];?>"
<?php } ?>
 title="<?php echo $_K['html_title'];?>" alt="<?php echo $_K['html_title'];?>"></a></h1>
            </hgroup>
            <!--logo end-->
            
            <div id="search" class="grid_12 m_h">
            	
            	<?php if($task_open||$shop_open) { ?>

            	<!--主搜索 start-->
                <div class="search clearfix po_re">
                    <!--搜索框和选项 start-->
                    <form action="" method="post" id="frm_search" class="clearfix fl_l">
                    <div class="search_box">
                        <div class="fl_l search_selcecter">
                        	<div id="search_select" class="search_options">
                        	<?php if($task_open) { ?>
                           		 <a href="javascript:void(0);" class="selected" rel="task_list"><span><?php echo $_lang['task'];?></span>▼</a>
                            <?php } elseif(!$task_open&&$shop_open) { ?>
 <a href="javascript:void(0);" class="selected" rel="shop_list"><span><?php echo $_lang['goods'];?></span>▼</a>
                            <?php } ?>
<?php if($task_open) { ?>
   		 <a href="javascript:void(0);" class="hidden"   rel="task_list"><?php echo $_lang['task'];?></a>
<?php } ?>
<?php if($shop_open) { ?>
                           	 	<a href="javascript:void(0);" class="hidden"   rel="shop_list"><?php echo $_lang['goods'];?></a>
 <?php } ?>
                            </div>
                        </div>
<input type="text" name="search_key" onkeydown="search_keydown(event);" id="search_key" class="fl_l search_input txt_input togg c999"
 value="<?php echo $_lang['input'];?><?php if($task_open) { ?><?php echo $_lang['task'];?><?php } ?><?php if($task_open&&$shop_open) { ?>/<?php } ?><?php if($shop_open) { ?><?php echo $_lang['goods'];?><?php } ?>" 
   x-webkit-speech x-webkit-grammar="bUIltin:search" lang="zh-CN">
                    </div>
</form>
                    <!--搜索框和选项 end-->
                    <!--搜索提交 start-->
                    <div class="fl_l header_btn">
                    	<button class="search_btn" id="search_btn" type="button" onclick="topSearch();"><span class="icon magnifier"></span><?php echo $_lang['search'];?></button>
                    </div>
                    <!--搜索提交 end-->
                </div>
                <!--主搜索 end-->
<?php } else { ?>
&nbsp;
<?php } ?>

            </div>
            


          
            	<!--用户登录注册 start-->
            	<div class="user_box clearfix grid_5">
                	<!--注册登录按钮 start-->
                  	<ul id="login_sub" class="user_login <?php if($uid) { ?>hidden<?php } ?>">
                        <li><a href="index.php?do=register" class="m_h"><?php echo $_lang['free_register'];?></a></li>
                        <li><a href="index.php?do=login"><?php echo $_lang['login'];?></a></li>
                    </ul>
                    <!--注册登录按钮 end--> 
<div class="clear"></div>




                    <!--登录成功 start-->
                    <div id="logined" class="<?php if(!$uid) { ?>hidden<?php } ?>">
                    	<!--用户登录后内容 start-->
                        <ul class="user_logined clearfix">
                            <li id="avatar">
                            	<a href="index.php?do=user" title="<?php echo $username;?>" rel="user_menu">
                            		<?php echo  keke_user_class::get_user_pic($uid,'small') ?>
                                    <span class="user_named m_h"><?php echo $username;?></span>
                            	</a>
<!--用户登录后导航菜单 start-->
                    <div id="user_menu" class="user_nav_pop grid_5 alpha omega hidden m_h">
                        <ul class="nav_list clearfix">
                                    	<li class="clearfix"><a href="index.php?do=user&view=finance&op=detail" title="<?php echo $_lang['money'];?> | <?php echo CREDIT_NAME;?>" id="money"> <div class="icon16 cur-yen reverse"></div><?php  echo keke_curren_class::output(floatval($user_info['balance']),-1);  ?>| <?php  echo keke_curren_class::output(floatval($user_info['credit']),-1);  ?></a></li>
                                        <?php if($task_open) { ?>
<li class="clearfix"><a href="index.php?do=release" title="<?php echo $_lang['pub_task'];?>" class="selected" ><div class="icon16 doc-new reverse"></div><?php echo $_lang['pub_task'];?></a></li>
<?php } ?>
<?php if($shop_open) { ?>
<li class="clearfix"><a href="index.php?do=shop_release" title="<?php echo $_lang['pub_goods'];?>" class="selected"><div class="icon16 doc-new reverse"></div><?php echo $_lang['pub_goods'];?></a></li>
<?php } ?>
<li class="clearfix <?php if($uid ==ADMIN_UID || $user_info['group_id']>0) { ?><?php } else { ?>hidden<?php } ?>" id="manage_center"><a href="control/admin/index.php" title="<?php echo $_lang['manage_center'];?>" ><div class="icon16 key reverse"></div><?php echo $_lang['manage_center'];?></a></li>
<li class="clearfix"><a href="index.php?do=user&view=index" title="<?php echo $_lang['user_center'];?>"><div class="icon16 cog reverse"></div><?php echo $_lang['user_center'];?></a></li>
<?php if($space_config==1) { ?>
<li class="clearfix"><a href="<?php echo kekezu::build_space_url($uid); ?>" title="<?php echo $_lang['my_space'];?>" id="space"><div class="icon16 compass reverse"></div><?php echo $_lang['my_space'];?></a></li>
<?php } ?>
<!--<li class="clearfix"><a href="index.php?do=user&view=message" title="<?php echo $_lang['website_msg'];?>"><div class="icon16 mail reverse"></div><?php echo $_lang['website_msg'];?></a></li>-->
<li class="clearfix"><a onclick="showWindow('out','index.php?do=logout');return false;" title="<?php echo $_lang['logout'];?>" href="index.php?do=logout"><?php echo $_lang['logout'];?></a></li>
                         </ul>
                    </div>
                    <!--用户登录后导航菜单 end-->
</li>
                            <li class="line m_h"></li>
                            <li class="logout m_h"><a title="<?php echo $_lang['website_msg'];?>" href="index.php?do=user&view=message"><?php echo $_lang['website_msg'];?></a></li>
                            <li class="clear"></li>
                        </ul>
                        <!--用户登录后内容 end-->


                    </div>
                    <!--登录成功 end-->
                    
                    
                    <div class="clear"></div>
                </div>
                <!--用户登录注册 end-->
      
            <!--移动端菜单-->
<div class="m_ctrl">
<a class="icon32 zoom reverse" href="#" rel="search"></a>
            <a class="icon32 align-just reverse" href="#" rel="nav"></a>
</div>
            <!--移动端菜单 end-->

            

        </div>
    </header>
    <!--头部 end-->
        <!--tool_E-->
 <nav id="nav" class="nav m_h">
        <div class="container_24" >
        	<div class="menu grid_24 clearfix">
                <ul class="clearfix">
                	<?php if(is_array($nav_arr)) { foreach($nav_arr as $k => $v) { ?>
                   		<li>
                   			<a href="<?php echo $v['nav_url'];?>" <?php if(isset($nav_active_index) && $v['nav_style']==$nav_active_index) { ?>class="selected"<?php } ?> <?php if($v['newwindow']) { ?>target="_blank"<?php } ?>>
                   			<span><?php echo $v['nav_title'];?></span></a>
</li>
<li class="line"></li>
<?php } } ?>
                </ul>
                <!---->
                  <div class="operate po_ab">
                    	<a href="index.php?do=help" target="_blank" title="<?php echo $_lang['help_center'];?>">
                        	<span class="icon16 help reverse"></span>
<?php echo $_lang['help_center'];?>
                        </a>
                   </div>
                <!---->
</div>
                <div class="clear"></div>
        </div>
    </nav>
    <div class="clear"></div>
<?php } ?>
<link rel="stylesheet" type="text/css" href="resource/js/jqplugins/fancybox/jquery.fancybox-1.3.4.css" media="screen">
<script src="resource/js/jqplugins/fancybox/jquery.fancybox-1.3.4.js" type="text/javascript"></script>
<script src="resource/js/jqplugins/fancybox/jquery.mousewheel-3.0.4.pack.js" type="text/javascript"></script> 
<div class="wrapper">
<!--页面头部-->
<header class="clearfix page_header">
  <div class="container_24 po_re">
   <div class="page_title">
   <!--页面导航-->

     <div class="breadcrumbs clearfix">
     	 <a href="index.php" ><?php echo $_lang['home'];?></a> &gt;
 <a href="index.php?do=shop_list&model_id=<?php echo $model_id;?>"><?php echo $_lang['witkey_shop'];?></a> &gt;
  <a href="index.php?do=shop_list&path=C<?php echo $model_id;?>A<?php echo $service_info['indus_pid'];?>"><?php echo $indus_p_arr[$service_info['indus_pid']]['indus_name'];?></a> &gt;
<a href="index.php?do=shop_list&path=C<?php echo $model_id;?>A<?php echo $service_info['indus_pid'];?>"><?php echo $indus_arr[$service_info['indus_id']]['indus_name'];?></a>
     </div>
 

   <!--end 页面导航-->
   <div class="clearfix ">
     <!--页面标题头像--
            <div class="fl_l pt_10 mr_5">
                <a href="index.php?do=space&member_id=<?php echo $owner_info['uid'];?>" title="<?php echo $owner_info['username'];?>"><?php echo  keke_user_class::get_user_pic($owner_info[uid],'small') ?></a>
            </div>
<!--页面标题头像 end-->
<div class="grid_24">
     <div class="page_title">
       <h2 class="title"><a href="javascript:void(0);"/><?php echo $service_info['title'];?></a></h2>
         		<div class="clearfix page_sub_title c666">
                    <span><?php echo $_lang['pub_time'];?><?php echo $_lang['zh_mh'];?><?php if($service_info[on_time]){echo date('Y-m-d H:i:s',$service_info[on_time]); } ?></span>
                    <span class="border_l_c mar10"></span>
<span><?php echo $_lang['type'];?><?php echo $_lang['zh_mh'];?><?php echo $model_info['model_name'];?> </span>
                    <span class="border_l_c mar10"></span>
                    <span><?php echo $_lang['id'];?><?php echo $_lang['zh_mh'];?>#<?php echo $sid;?> </span>
                    <span class="border_l_c mar10"></span>
                    
                    <!--<span><?php echo $_lang['pub_people'];?><a href="index.php?do=space&member_id=<?php echo $owner_info['uid'];?>" target="_blank"><?php echo $owner_info['username'];?></a></span>
                    <span class="font_simsun">·</span>
                    <a href="javascript:void(0)" onclick="sendMessage(<?php echo $owner_info['uid']?>,'<?php echo $owner_info['username']?>')"><?php echo $_lang['send_web_msg'];?></a>-->

<?php $time = time(); ?>
<?php if($payitem_arr['top']>$time&&$item_config['2']['small_pic']) { ?><img src="<?php echo $_K['siteurl'];?>/<?php echo $item_config['2']['small_pic']?>" alt="<?php echo $_lang['top'];?>" title="<?php echo $_lang['top'];?>"><?php } ?>
<?php $is_map =  stristr($service_info[pay_item], '4'); ?>
 	<?php if($is_map&&$item_config['4']['small_pic']) { ?><img src="<?php echo $_K['siteurl'];?>/<?php echo $item_config['4']['small_pic']?>" alt="<?php echo $_lang['map'];?>" title="<?php echo $_lang['map'];?>"><?php } ?>
</div>
     </div>
 </div>
   <div class="grid_4 hidden">
<?php if($uid!=$owner_info['uid']) { ?>
        <a href="index.php?do=shop_order&sid=<?php echo $sid?>" class="submit block"><?php echo $_lang['now_buy'];?></a>
     	<?php } ?>
</div>
   </div>
  <div class="page_nav_box grid_24">
   <!--页面子导航-->
     <nav class="clearfix page_nav po_re mt_10" id="top_nav">
      <ul>
          <li  <?php if(!$view||$view=='base') { ?>class="selected"<?php } ?>>
             <a href="<?php echo $basic_url;?>" title="<?php echo $_lang['goods_recommend'];?>"><span class="icon16 box mr_5"></span><?php echo $_lang['goods_recommend'];?></a>
          </li>
         <li <?php if($view=='sale') { ?>class="selected"<?php } ?>>
             <a href="<?php echo $basic_url;?>&view=sale" title="<?php echo $_lang['buy_record'];?>"><span class="icon16 doc-lines-stright mr_5"></span><?php echo $_lang['buy_record'];?> <span class="c999">[ <?php echo $service_info['sale_num'];?> ]</span></a>
         </li>
         <li <?php if($view=='comment') { ?>class="selected"<?php } ?>>
            <a href="<?php echo $basic_url;?>&view=comment" title="<?php echo $_lang['leave_word'];?>"><span class="icon16 spechbubble-2 mr_5"></span><?php echo $_lang['leave_word'];?> <span class="c999">[ <?php echo $service_info['leave_num'];?> ]</span></a>
         </li>
         <li <?php if($view=='mark') { ?>class="selected"<?php } ?>>
            <a href="<?php echo $basic_url;?>&view=mark" title="<?php echo $_lang['evaluation'];?>"><span class="icon16 cert mr_5"></span><?php echo $_lang['evaluation'];?><span class="c999">[ <?php echo $mc['all'];?> ]</span></a>
        </li>
<?php if($uid==$service_info['uid']) { ?>
  <li <?php if($view=='tools') { ?> class="selected" <?php } ?>>
            <a href="<?php echo $basic_url;?>&view=tools" title="<?php echo $_lang['tool'];?>"><span class="icon16 box mr_5"></span><?php echo $_lang['tool'];?><span class="c999"></span></a>
        </li>
<?php } ?>
        <!--<li class="border_n">
            <a href="javascript:void(0);" class="" title="<?php echo $_lang['stop_in_left'];?>"><span class="icon16 arrow-bottom-left" style="display:block;" id="arrow-bottom-left"><?php echo $_lang['stop_in_left'];?></span></a>
        </li>-->
        </ul>
   </nav>
  
</div>	
  <!--end 页面子导航-->
  <div class="clear">
  </div>
 </div>
 </div>
</header>
<!--end 页面头部--><!--主内容-->
<section class="clearfix content">
 <div class="container_24">

  <section class="clearfix section">
   <!--左边导航 start-->
<div class="second_menu container_24 po_ab hidden" id="left_nav">
        <div class="suffix_23 pull_1">
            <nav class="minor_nav box clearfix">
                <ul class="nav_group">
                    <li>
                    	<a href="<?php echo $basic_url;?>" <?php if(!$view||$view=='base') { ?>class="selected"<?php } ?> title="<?php echo $_lang['goods_recommend'];?>"><span class="icon16 box block"><?php echo $_lang['business'];?></span></a>
                </li>
                <li>
                    <a href="<?php echo $basic_url;?>&view=sale" <?php if($view=='sale') { ?>class="selected"<?php } ?> title="<?php echo $_lang['buy_record'];?> [<?php echo $service_info['sale_num'];?>]"><span class="icon16 doc-lines-stright block"><?php echo $_lang['shopping'];?></span></a>
                </li>
                <li>
                    <a href="<?php echo $basic_url;?>&view=comment" <?php if($view=='comment') { ?>class="selected"<?php } ?> title="<?php echo $_lang['leave_word'];?> [<?php echo $service_info['leave_num'];?>]"><span class="icon16 block spechbubble-2"><?php echo $_lang['_liu_'];?></span></a>
                </li>
                <li >
                    <a href="<?php echo $basic_url;?>&view=mark" <?php if($view=='mark') { ?>class="selected"<?php } ?> title="<?php echo $_lang['evaluation'];?> [{<?php echo $mc['all'];?>]"><span class="icon16 cert block"><?php echo $_lang['_ping_'];?></span></a>
                </li>
        
                </ul>
                <ul class="nav_group">
<li>
         	<a href="javascript:void(0);" class="" title="<?php echo $_lang['stop_in_top'];?>">
            	<div class="icon16 arrow-top-right block" id="arrow-top-right"><?php echo $_lang['stop'];?></div>
            </a>
         </li>
                </ul>
            </nav>
        </div>
    </div>
<!--左边导航 end-->
  <div class="show_panel container_24 po_re">
  	<?php if(!$view||$view=='base') { ?>
     <div class="clearfix box po_re grid_19">
       <!--left-->
   <div class="panel clearfix box">
         <div class="clearfix">       
             <div class="product_desc clearfix">
             	<div class="pad10 clearfix">
            		<div class="product_desc_lcon grid_10 alpha omega">
            			<div class="pro_decs_img">
        					<?php if(is_array($cover_list)) { ?>
<?php if(is_array($cover_list)) { foreach($cover_list as $k => $v) { ?>
                            <a href="<?php echo $v;?>" class="group" rel="shop_group" <?php if($k>0) { ?> class="hidden" <?php } ?>>
                          	  <img alt="<?php echo $service_info['title'];?>" src="<?php echo $v;?>" onerror='$(this).attr("src","tpl/default/img/shop/shop_default.gif")'>
                            </a>
                            <?php } } ?>
<?php } else { ?>
 <a href="<?php echo $v;?>" class="group" rel="shop_group" <?php if($k>0) { ?> class="hidden" <?php } ?>>
                          	  <img alt="<?php echo $service_info['title'];?>" src="<?php echo $v;?>" onerror='$(this).attr("src","tpl/default/img/shop/shop_default.gif")'>
                            </a>
<?php } ?>
</div>
<div class="clear"></div>
<?php if($num>1) { ?>
            			<div class="clearfix t_c pro_decs_page">
            				<a href="#" onclick="slide('prev'); return false;"><span class="arrow_l"></span><?php echo $_lang['prev'];?></a>
<span class="pad10"><span id="num">1</span>/<?php echo $num;?></span>
<a href="#" onclick="slide('next'); return false;"><?php echo $_lang['next'];?><span class="arrow_r"></span></a>
</div>
<?php } ?>
</div>
<div class="product_desc_rcon fl_l ">
<p class="pro_price"><span><?php echo $_lang['price'];?></span><b><?php  echo keke_curren_class::output(floatval($service_info[price]),-1);  ?></b> / <?php echo $service_info['unite_price'];?> </p>
<p><span><?php echo $_lang['working_hours'];?></span><?php echo $service_info['service_time'];?><?php echo $service_info['unit_time'];?></p>
<p><span><?php echo $_lang['sales'];?></span><em><?php echo $service_info['sale_num'];?></em><span><?php echo $_lang['browse_people'];?></span><?php echo $service_info['views'];?></p>
<p><span><?php echo $_lang['area'];?></span><?php if($owner_info['residency']) { ?><?php echo $owner_info['residency']?><?php } else { ?><?php echo $_lang['now_no'];?><?php } ?></p>
<p class="grid_5 alpha omega"><?php if($uid!=$owner_info['uid']) { ?><a href="index.php?do=shop_order&sid=<?php echo $sid?>&steps=step1&op=buy" class="submit block">预订服务</a><?php } ?></p>
                         <div class="clear"></div>
 <p class="clearfix msg msg_warn grid_8 alpha omega"><?php echo $_lang['friendly_notice'];?><?php echo $_lang['zh_mh'];?><?php echo $_lang['alipay_order_notice'];?></p>
 <div class="clear"></div>
 <p class="clearfix grid_8 pl_5 law_notice"><?php echo $_lang['disclaimer'];?><?php echo $_lang['zh_mh'];?><?php echo $_lang['law_notice'];?></p>
</div> 
 </div>
             </div>
<div class="prefix_1 suffix_1">

<div class="describe mt_20  clearfix">
                <h2 class="border_b_c mb_10"><span class="font16"><?php echo $_lang['recommend'];?></span></h2>
                <?php if($service_info['point']) { ?>
<details open  class="map">       
       <summary class="pad5 fontb"><?php echo $_lang['shop_map'];?><em class="c999 font_normal"></em></summary> 
<?php if($_K['map_api']=='baidu') { ?>
<?php if($_K['map_api']=='baidu') { ?>
<script type="text/javascript" src="<?php echo $_K['baidu_api'];?>"></script>
<?php } else { ?>
<script type="text/javascript" src="<?php echo $_K['google_api'];?>"></script>
<?php } ?>
<div id="div_map"  >
<script type="text/javascript">
$(function(){	
var px = parseFloat("<?php echo $px;?>");
var py = parseFloat("<?php echo $py;?>");												
init(px,py,8);
})
function init(px,py,zo){							
map = new BMap.Map("container"); // 创建地图实例
var point = new BMap.Point(py,px); // 创建点坐标												
map.centerAndZoom(point, zo); // 初始化地图，设置中心点坐标和地图级别
map.enableScrollWheelZoom(); //鼠标滑动设置地图级别
var opts = {type: BMAP_NAVIGATION_CONTROL_SMALL};
map.addControl(new BMap.NavigationControl(opts)); //添加平移缩放控件	
var marker = new BMap.Marker(point);
map.addOverlay(marker);	
}						
</script>
<input type="hidden" name="px" id="px" value="<?php echo $px;?>"/>
<input type="hidden" name="py" id="py" value="<?php echo $py;?>"/> 

<div id="container" style="width:200px;height:200px"></div>

</div>
<?php } else { ?>
<?php if($_K['map_api']=='baidu') { ?>
<script type="text/javascript" src="<?php echo $_K['baidu_api'];?>"></script>
<?php } else { ?>
<script type="text/javascript" src="<?php echo $_K['google_api'];?>"></script>
<?php } ?>
<div id="div_map"  >
<script type="text/javascript">
$(function(){	
var px = parseFloat("<?php echo $px;?>");
var py = parseFloat("<?php echo $py;?>");												
init(px,py,8);
})
function init(px,py,zo){
var myLatlng = new google.maps.LatLng(px,py);
var myOptions = {center: myLatlng,	zoom: 6,mapTypeId: google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById('container'),myOptions); 
   var marker = new google.maps.Marker({map: map,position:myLatlng	})

}	

</script>
<input type="hidden" name="px" id="px" value="<?php echo $px;?>"/>
<input type="hidden" name="py" id="py" value="<?php echo py;?>"/> 		
<div id="container" style="width:200px;height:200px"></div>

</div>
<?php } ?>  
<div class="pl_10"> 地址：<?php echo $service_info['city'];?></div>  
    </details>	
<?php } ?>
                    <div class="ws_prewrap ws_break"><?php echo htmlspecialchars_decode($service_info['content']) ?></div>
            </div>


          <div class="clear"></div>
          <!--其他作品-->
           <div class="mt_30 other_product pt_20">
             <div class="clearfix">
             	<?php if($more_list) { ?>
                     <?php if(is_array($more_list)) { foreach($more_list as $v) { ?>
<a class="grid_3 alpha" href="index.php?do=service&sid=<?php echo $v['service_id'];?>" title="<?php echo $v['title'];?>" target="_blank">
   <img src="<?php echo keke_shop_class::output_pics($v['pic'],100,1); ?>"  onerror="$(this).attr('src','<?php echo SKIN_PATH;?>/img/shop/shop_default.gif')" alt="<?php echo $v['title'];?>" alt=''>
</a>
<?php } } ?>
                <?php } ?>
              </div><a class="block" href="index.php?do=space&member_id=<?php echo $service_info['uid'];?>&view=goods" target="_blank"><?php echo $_lang['more'];?><span class="fontb"><?php echo $owner_info['username'];?></span><?php echo $_lang['de_works'];?>&gt;&gt;</a>
           </div>
          <!--end 其他作品-->
          <div class="shop_intrest mt_20 pt_10 m_h t_c pb_10 clearfix">
                    <h3 class="t_l"><span class="font14 c333"><?php echo $_lang['you_may_interested_goods'];?></span></h3>
                    <ul>
                    <?php if($related_list) { ?>
                    <?php if(is_array($related_list)) { foreach($related_list as $v) { ?>
                    <li>
<a href="index.php?do=service&sid=<?php echo $v['service_id'];?>" onerror="$(this).attr('src','<?php echo SKIN_PATH;?>/img/shop/shop_default.gif')" target="_blank" title="<?php echo $v['title'];?>">
 	<img src="<?php echo keke_shop_class::output_pics($v['pic'],100,1); ?>" alt="<?php echo $v['title'];?>">
<a href="ndex.php?do=service&sid=<?php echo $v['service_id'];?>" class="block pad0" style="line-height:18px;"><?php echo $v['title'];?></a>
<span class="cc00 block mar0" style="line-height:18px;"><?php  echo keke_curren_class::output(floatval($v['price']),-1);  ?> / <?php echo $v['unite_price'];?></span>


</a>
</li>
<?php } } ?>
</ul>
                    <?php } else { ?>
<div class="t_c">
                      <?php echo $_lang['now_no'];?>
</div>
                    <?php } ?>
            </div>
        </div>
   <!--end left-->

 <!--right-->
     <div class="grid_8 alpha omega pt_10 hidden">
       <!--人数统计-->
        <div class="statistics mt_10 mb_10 clearfix ">
        	<ul>
            <li>
                
                    <strong class="digital t_c"><?php echo $service_info['sale_num'];?></strong>
                    <span><?php echo $_lang['buy_people'];?></span>
               
            </li>
            <li class="border_l_c">
                
                    <strong class="digital t_c"><?php echo $service_info['focus_num'];?></strong>
                    <span><?php echo $_lang['collection_people'];?></span>
                
            </li>
            <li class="border_l_c">
                
                    <strong class="digital t_c"><?php echo $service_info['views'];?></strong>
                    <span><?php echo $_lang['browse_people'];?></span>
                
            </li>
            <li class="border_l_c">
                
                    <strong class="digital t_c"><?php echo $service_info['leave_num'];?></strong>
                    <span><?php echo $_lang['leave_word'];?></span>
                
            </li>
</ul>
        </div>
        <!--end 人数统计-->
<!--现在购买-->
      <div class="buyNow mt_10 clearfix po_re">
        <span class="po_ab shop_arrow"></span>
        <span class="fontb c900 fl_l ml_10"><?php  echo keke_curren_class::output(floatval($service_info[price]),-1);  ?></span>
  </div>
      <!--end 现在购买-->
  <!--附加信息-->
        <div class="shop_otherInfo bord_c mt_10">
          <ul>
            <li>
                <span><?php echo $_lang['company'];?></span><?php  echo keke_curren_class::output(floatval($service_info[unite_price]),-1);  ?>
            </li>
            <li>
                <span><?php echo $_lang['type'];?></span><?php echo $model_info['model_name'];?>
            </li>
            <li>
                <span><?php echo $_lang['class'];?></span><?php echo $indus_p_arr[$service_info['indus_pid']]['indus_name'];?>/<?php echo $indus_arr[$service_info['indus_id']]['indus_name'];?>
            </li>
            <li>
                <span><?php echo $_lang['pay_money'];?></span><?php echo $_lang['online_pay'];?>
            </li>
          </ul>
        </div>
        <!--end 附加信息-->
<!--作者信息-->
                            <div class="shop_author normal2 mb_10 clearfix">
                                <div class="t_c fl_l portrait mr_10">
                                    <div style="height:118;width:120">
                                        <?php echo  keke_user_class::get_user_pic($owner_info[uid],'middle') ?>
                                    </div>
                                    <a href="index.php?do=space&member_id=<?php echo $owner_info['uid'];?>" class="button mt_10" target="_blank"><b class="fl_l"><?php echo $_lang['into_space'];?></b><span class="icon16 top-right-expand fl_r"></span></a>
                                </div>
                                <div class="fl_l ml_10">
                                    <p class="shop_sign">
                                        <b><a href="index.php?do=space&member_id=<?php echo $owner_info['uid'];?>"  class="pt_10 font14b" target="_blank"><?php echo $owner_info['username'];?></a> <?php echo $user_level['pic']?></b>
                                        <div class="clear">
                                        </div>
                                        <span><?php if($owner_info['residency']) { ?><?php echo $owner_info['residency']?><?php } else { ?><?php echo $_lang['now_no'];?><?php } ?></span>
                                    </p>
                                    <p>
                                        <?php if(is_array($auth_info)) { foreach($auth_info as $k => $v) { ?><a href="javascript:void(0)" title="<?php echo $v['auth_title'];?>"><img src="<?php echo $_K['siteurl'];?>/<?php echo $v['auth_small_ico'];?>" alt=''></a><?php } } ?>
                                    </p>
                                    <div class="shop_sum1 clearfix">
                                        <ul>
                                            <li class="border_r_c fl_l">
                                                <a href="javascript:void(0);" class="font14b block"><?php if($owner_info['seller_total_num']) { ?><?php echo number_format($owner_info[seller_good_num]/$owner_info[seller_total_num],4)*100 ?><?php } else { ?>0<?php } ?>%</a>
                                                <span><?php echo $_lang['good_evaluation_rate'];?></span>
                                            </li>
                                            <li class="border_r_c fl_l">
                                                <a href="javascript:void(0);" class="font14b block"><?php echo intval($owner_info[accepted_num]) ?></a>
                                                <span><?php echo $_lang['win_bid'];?></span>
                                            </li>
                                            <li class="fl_l">
                                                <a href="javascript:void(0);" class="font14b block"><?php echo intval($service_info[sale_num]) ?></a>
                                                <span><?php echo $_lang['sell'];?></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--loading 加载 start-->
                                    <div class="loading_bar">
                                        <div class="progress_bar" grade="<?php echo $user_level['grade_rate'];?>">
                                            <?php echo $user_level['grade_rate'];?>%
                                        </div>
                                    </div>
                                    <!--loading 加载 end-->
                                </div>
                            </div>
                            <!--end 作者信息-->
       <div class="shop_ad mt_10">
            
       </div>
       <div class="shop_intrest mt_20 pt_10">
           <h3><span class="font14 pl_10"><?php echo $_lang['you_may_interested_goods'];?></span></h3>
   <?php if($related_list) { ?>
   	<?php if(is_array($related_list)) { foreach($related_list as $v) { ?>
<a href="index.php?do=service&sid=<?php echo $v['service_id'];?>" target="_blank" title="<?php echo $v['title'];?>">
<img src="<?php echo keke_shop_class::output_pics($v[pic],100,1) ?>"  onerror="$(this).attr('src','<?php echo SKIN_PATH;?>/img/shop/shop_default.gif')" alt="<?php echo $v['title'];?>">
</a>

<a href="ndex.php?do=service&sid=<?php echo $v['service_id'];?>" class="block pad0" style="line-height:18px;"><?php echo $v['title'];?></a>
<span class="cc00 block mar0" style="line-height:18px;"><?php  echo keke_curren_class::output(floatval($v['price']),-1);  ?></b> / <?php echo $v['unite_price'];?> </span>
<?php } } ?>
<?php } else { ?>
<div class="t_c">
                      <?php echo $_lang['now_no'];?>
</div>
<?php } ?>
        </div>
     </div><!--right-->
 
 <div class="clear"></div>
<!--右下角的返回顶部-->
     <div class="operate fl_r mt_10 hidden">
 		<a href="index.php?do=service&sid=<?php echo $sid;?>" class="" title="<?php echo $_lang['return_home'];?>"><span class="icon16 home"></span></a>
 		<a href="javascript:void(0)" class="scrollTop" title="<?php echo $_lang['return_top'];?>"><span class="icon16 arrow-top"></span></a>
     </div>
      <!--end右下角的返回顶部-->
   </div>
</div>
</div>

 <div class="grid_5 clearfix shop_info_rcon">
<!--作者信息-->
        	<div class="shop_author box normal2 clearfix mb_10">
        	<div class="inner">
        		<div class="box_header">
                	<h2 class="title"><?php echo $_lang['seller_info'];?></h2>
                </div>
         
<div class="pad5 clearfix border_b_c">
<div class="clearfix">
                    <div class="t_c fl_l mr_10">
                            <?php echo  keke_user_class::get_user_pic($owner_info['uid'],'small') ?>
                    </div>
<p class="shop_sign fl_l">
                        <a href="index.php?do=space&member_id=<?php echo $owner_info['uid'];?>" class="font14b block" target="_blank"><?php echo $owner_info['username'];?></a>
<?php echo $user_level['pic']?>
                    </p>
</div>
                <p>
                	<!--卖家的认证信息-->
                    <?php if(is_array($auth_info)) { foreach($auth_info as $k => $v) { ?>
<a href="javascript:void(0)" title="<?php echo $v['auth_title'];?>" class="mr_5">
<img src="<?php echo $_K['siteurl'];?>/<?php echo $v['auth_small_ico'];?>" alt=''>
</a>
<?php } } ?>
                </p>
<p><?php echo $_lang['good_evaluation_rate'];?><?php if($owner_info['seller_total_num']) { ?><span class="cc00 ml_10 pl_5">
<?php echo number_format($owner_info['seller_good_num']/$owner_info['seller_total_num'],4)*100 ?><?php } else { ?>0<?php } ?>%</span>
<?php if($square_open&&$service_info['uid']!=$uid) { ?>
<?php $weth = kekezu::get_if_focus($uid,$service_info['uid']); ?>
<?php if(!$weth) { ?>
<a href="javascript:void(0);" class="fl_r" onclick="add_follow('add_focus','<?php echo $service_info['uid'];?>');"  id="add_follow_<?php echo $service_info['uid'];?>">加关注</a></p>
<?php } else { ?>
<a href="javascript:void(0);" class="fl_r" onclick="follow('remove_focus','<?php echo $service_info['uid'];?>');" id="add_follow_<?php echo $service_info['uid'];?>">取消关注</a>
<?php } ?>
<?php } ?>
</p>
<p><?php echo $_lang['sale_goods'];?><span class="c333 ml_5"><?php echo $seller_goods_num;?></span></p>
<?php if(is_array($shop_aid)) { foreach($shop_aid as $k => $v) { ?>
<p><span><?php echo $v['aid_name'];?><em class="cc00 ml_5"><?php echo $v['avg'];?><?php echo $_lang['fen'];?></em></span><span class="stars a5"><?php echo keke_user_mark_class::gen_star2($v['avg']); ?></span></p>							
<?php } } ?>

                <div class="shop_sum1 clearfix hidden">
                    <ul>
                        <li class="border_r_c fl_l">
                            <a href="javascript:void(0);" class="font14b block"><?php if($owner_info['seller_total_num']) { ?><?php echo number_format($owner_info['seller_good_num']/$owner_info['seller_total_num'],4)*100 ?><?php } else { ?>0<?php } ?>%</a>
                            <span><?php echo $_lang['good_evaluation_rate'];?></span>
                        </li>
                        <li class="border_r_c fl_l">
                            <a href="javascript:void(0);" class="font14b block"><?php echo intval($owner_info['accepted_num']) ?></a>
                            <span><?php echo $_lang['win_bid'];?></span>
                        </li>
                        <li class="fl_l">
                            <a href="javascript:void(0);" class="font14b block"><?php echo intval($service_info['sale_num']) ?></a>
                            <span><?php echo $_lang['sell'];?></span>
                        </li>
                    </ul>
                </div>
                <!--loading 加载 start--
                <div class="loading_bar">
                    <div class="progress_bar" grade="<?php echo $user_level['grade_rate'];?>">
                        <?php echo $user_level['grade_rate'];?>%
                    </div>
                </div>
                <!--loading 加载 end-->

        	</div>
<div class="shop_author_link clearfix">
<a href="index.php?do=space&member_id=<?php echo $owner_info['uid'];?>" target="_blank" class="fl_l"><?php echo $_lang['view_shop_space'];?></a>
<a href="javascript:void(0)" onclick="sendMessage(<?php echo $owner_info['uid']?>,'<?php echo $owner_info['username']?>')" class="fl_r"><?php echo $_lang['send_web_msg'];?></a>
</div>
</div>
</div>	
        <!--end 作者信息-->
  <?php if($user_info['group_id']&&$service_info['service_status']!=4) { ?>
<div class="">
<a class="button block" href="javascript:service_op(1);">
<span class="padlock-closed  icon16"></span>
 <?php echo $_lang['disable'];?>
</a>
</div>
<?php } ?>
<?php if($uid==$owner_info['uid']) { ?>
<div class="">
<a class="button block" href="###" onclick="seEdit('<?php echo $sid;?>');">
<span class="pencil  icon16"></span>
 <?php echo $_lang['edit'];?>
</a>
<?php if(is_array($item_list)) { foreach($item_list as $v) { ?>
<a class="button block" href="index.php?do=service&sid=<?php echo $sid?>&view=tools">
<img src="<?php echo $v['small_pic'];?>" alt="<?php echo $v['item_name'];?>">
 <?php echo $v['item_name'];?>
</a>
<?php } } ?>
</div>
<?php } ?>
<div class="">
<a class="button block" href="javascript:void(0);" onclick="favor('service_id','service','<?php echo $model_code;?>','<?php echo $owner_info['uid'];?>','<?php echo $sid;?>','<?php echo $service_info['title'];?>','<?php echo $sid;?>')">
<span class="star-fav-empty  icon16"></span>
<?php echo $service_info['focus_num'];?> <?php echo $_lang['ci'];?><?php echo $_lang['favorit'];?>
</a>
<?php if($uid&&$uid!=$owner_info['uid']) { ?>
<a class="button block" href="javascript:void(0)"  onclick="report('product','2','<?php echo $sid;?>','<?php echo $owner_info['uid'];?>','<?php echo $owner_info['username'];?>');" title="<?php echo $_lang['report'];?>">
         		<span class="icon16 hand-1"></span>
<?php echo $_lang['report'];?>
         	</a>
<?php } ?>
<a class="button block" href="index.php?do=ajax&view=share&oid=1&title=<?php echo $service_info['title'];?>" id="share1" onclick="return false;" onmouseover="share(this);" title="<?php echo $_lang['share'];?>">
<span class="icon16 share"></span>
<?php echo $_lang['share'];?>
</a>

</div>	


</div>
 
 
 <?php } elseif($view=='sale') { ?>
<div class="panel clearfix box grid_24">
            	<header class="clearfix box_header">
<div class="pl_20">
      <nav class="box_nav">
        <ul class="clearfix">
          <li <?php if(!$w) { ?> class="selectedLava" <?php } ?>>
          	<a href="<?php echo $basic_url;?>&view=<?php echo $view;?>#pageTop"><?php echo $_lang['all'];?>[ <?php echo $service_info['sale_num'];?> ]</a>
          </li>
          <li <?php if($t=='today') { ?> class="selectedLava" <?php } ?>>
          	<a href="<?php echo $basic_url;?>&view=<?php echo $view;?>&t=today#pageTop" ><?php echo $_lang['newest'];?>[ <?php echo $today_sale;?> ]</a>
          </li>
        </ul>
      </nav>
    </div>
</header>
                <div class="clearfix">
                
                <div class="list mt_10">
                    <dl>
                        <dd class="tags">
                            <ul>
                                <li class="w2">
                                    <?php echo $_lang['buyer'];?><?php if(!$uid) { ?><?php echo $_lang['after_login_view'];?><?php } ?>
                                </li>
                                <li class="w2">
                                    <?php echo $_lang['give_price'];?>
                                </li>
                                <li class="w4">
                                    <?php echo $_lang['success_deal_time'];?>
                                </li>
                                <li class="w2">
                                    <?php echo $_lang['status'];?>
                                </li>
                            </ul>
                        </dd>
<?php if($sale_list) { ?>
<?php if(is_array($sale_list)) { foreach($sale_list as $v) { ?>
               <dd>
        <ul style="height:25px;">
                     <li class="w2">
                     	<?php if($uid) { ?>
                         <a href="index.php?do=space&member_id=<?php echo $v['order_uid'];?>" target="_blank"><?php echo $v['order_username'];?></a>
<?php } else { ?>
<?php echo $_lang['not_can_view'];?>
<?php } ?>
                     </li>
                     <li class="w2 red">
                       <?php  echo keke_curren_class::output(floatval($v[order_amount]),-1);  ?>
                      </li>
                     <li class="w4">
                         <?php if($v[order_time]){echo date('Y-m-d H:i:s',$v[order_time]); } ?>
                     </li>
                     <li class="w2">
                                   <?php echo $status_arr[$v['order_status']];?>
                     </li>
                   </ul>
               </dd>
   <?php } } ?>
<?php } else { ?>
   <dd class="bf7 clearfix t_c font14b">
                                    <?php echo $_lang['now_no_deal_record'];?>
            </dd>
<?php } ?>
         </dl>
         </div>
 
         <!--page 翻页 start-->
         <div class="page fl_r">
            <p class="clearfix"><?php echo $pages['page'];?></p>
            <div class="clear"></div>
         </div>
        <!--page 翻页 end-->
</div>
     </div>
<?php } elseif($view=='comment') { ?>
<div class="panel clearfix box grid_24">

<!--留言部分-->
                <div class="lyk pl_20 mt_10 mb_20 clearfix">
                	<h3 id="h3_pub_comment"><?php echo $_lang['pub_new_msg'];?></h3>
                    <div class="grid_14">
                    	
 <div class="work_answer">
<div class="answer-form">
                       <textarea class="font14 txt_input"  id="tar_comment"  cols="100" onkeydown="checkCommentInner(this,event)"><?php echo $_lang['pub_new_comment'];?></textarea>
<div class=" ">
<button type="button" class="button block fl_l" value="<?php echo $_lang['send_comment'];?>" onclick="comment_add()"><span class="check icon"></span><?php echo $_lang['public'];?></button>
<span class="answer_word"><?php echo $_lang['you_can_input'];?></span>
</div>
</div>
</div>

                    </div>
                    <div class="grid_8">
                        <p class="ly_notice">
                            	<?php echo $_lang['to_people_notice'];?>
                        </p>
                    </div>
                </div>
                <!--end 留言部分-->
<div class="clear"></div>	
                <div class="pl_20 pr_20">
                	<h3><?php echo $_lang['leave_word'];?>[<?php echo $service_info['leave_num'];?>]</h3>

                	<div id="comment_page">
                    
                    <!--留言-->
<?php if(is_array($comment_data)) { foreach($comment_data as $k => $v) { ?>
                    <div class="ly1 mt_10 mb_10" id="p_<?php echo $v['comment_id']?>">
                        <div class="top1 clearfix">
                            <a href="index.php?do=space&member_id=<?php echo $v['uid']?>" class="block fl_l">
                            	<?php echo  keke_user_class::get_user_pic($v['uid'],'small') ?>
</a>
<?php if($uid ==ADMIN_UID||$user_info['group_id']==7) { ?>
<div class="operate po_ab hidden"> 
<a href="javascript:;" onclick="comment_del('p_<?php echo $v['comment_id'];?>','<?php echo $v['comment_id']?>');return false;"><span class="icon16 trash"></span><?php echo $_lang['delete'];?></a>
<a href="javascript:;" onclick="comment_reply('<?php echo $v['comment_id']?>');return false;"><span class="icon16 spechbubble"></span><?php echo $_lang['reply'];?></a>
                            </div>
<?php } ?>
<div class="comment_detail">
<a href="index.php?do=space&member_id=<?php echo $v['uid']?>"><?php echo $v['username'];?></a>
                            <span><?php if($v['on_time']){echo date('Y-m-d H:i:s',$v['on_time']); } ?></span>
                             <p class="font14 ws_prewrap ws_break"><?php echo $v['content'];?></p> 
                        </div>
</div>

<!--留言回复开始-->
<div class="cc pl_30 mt_10" id="p_reply_<?php echo $v['comment_id'];?>">
<?php if(is_array($reply_arr)) { foreach($reply_arr as $k1 => $v1) { ?>
    <?php if($v1['p_id']==$v['comment_id']) { ?>
 <div id="div_reply_<?php echo $v1['comment_id']?>" class="comment_item po_re clearfix">

<div class="fl_l mr_10">
    	<a href="index.php?do=space&member_id=<?php echo $v1['uid']?>" title="<?php echo $v1['username'];?>"><?php echo  keke_user_class::get_user_pic($v1['uid'],'small') ?></a>
</div>
<div class="grid_19 alpha">
<a href="index.php?do=space&member_id=<?php echo $v1['uid']?>"><?php echo $v1['username'];?></a><?php echo $_lang['yu'];?><?php if($v1['on_time']){echo date('Y-m-d H:i:s',$v1['on_time']); } ?><?php echo $_lang['comment'];?>:
<p class="db ws_prewrap ws_break"><?php echo $v1['content'];?></p>
</div>
<div class="operate po_ab hidden">
<?php if($uid == $v1['uid'] || $uid ==ADMIN_UID||$user_info['group_id']==7) { ?>
 	<a href="javascript:;" onclick="comment_del('div_reply_<?php echo $v1['comment_id']?>','<?php echo $v1['comment_id']?>');return false;"><span class="icon16 trash"></span><?php echo $_lang['delete'];?></a>
                                	<?php } ?>
</div>
<div class="clear"></div>

 </div>
<?php } ?>
 		<?php } } ?>
</div>
<!--留言回复结束-->
                    </div>

 <!--有留言才有回复-->
 <?php if($uid==$owner_info['uid']||$uid ==ADMIN_UID) { ?>
<div class="work_answer pl_30 pt_10 pb_10 clearfix hidden" id="answers_<?php echo $v['comment_id']?>">
<div class="answer-form ">
                    	<div class="grid_10 alpha">
<textarea class=" txt_input reply_comment" onkeydown="checkCommentInner(this,event)" cols="70" id="txt_reply_<?php echo $v['comment_id'];?>" style="height:15px;"><?php echo $_lang['reply'];?></textarea>
                       	   <div class="answer-textarea  answer-zone pt_10" >
                                <button type="button" class="button answer-zone" value="<?php echo $_lang['confirm'];?>" onclick="comment_reply('<?php echo $v['comment_id']?>')"><span class="check icon"></span><?php echo $_lang['reply'];?></button>
                                <span class="answer_word"><?php echo $_lang['you_can_input'];?></span>
                            </div>
                        </div>
</div>
  	</div>
<?php } ?>
<?php } } ?>

<!--end留言-->
                <!--page 翻页 start-->
                <?php if($comment_page['page']) { ?>
<div class="page">
                    <p class="clearfix" >                       
                         <?php echo $comment_page['page'];?>
                    </p>
<div class="clear">
                    </div>
                </div>
<?php } ?>
                <!--page 翻页 end-->
                <div class="clear"></div>
</div></div>
                <div class="clear"></div>

                	
                

      
                
            </div>
<script  type="text/javascript" >
$(function (){ 
notice_comment();
$(".reply_comment").live('click',function(){
notice_comment();
})
$("#tar_comment").focus(function(){
if(this.value=="<?php echo $_lang['pub_new_comment'];?>"){
 this.value = ''; 
 }
}).blur(function(){
this.value==''?this.value="<?php echo $_lang['pub_new_comment'];?>":'';
})
})
//增加评论
function comment_add()
{
var uid = '<?php echo $uid?>';
if(check_user_login())
{
var t = $("#tar_comment").val().toString().substr(0,100);
if(t=="<?php echo $_lang['pub_new_comment'];?>"||t==''){
showDialog("<?php echo $_lang['say_little'];?>",'alert',"<?php echo $_lang['msg_fail'];?>","",1);return false;
}else{
$.post(basic_url+"&view=comment&op=add",{content:t},function(text){ 
if(text=='2'){
showDialog("<?php echo $_lang['donot_submit_again'];?>",'alert',"<?php echo $_lang['operate_fail'];?>","",1);

}else if(text=='3'){
showDialog("<?php echo $_lang['sensitive_word'];?>",'alert',"<?php echo $_lang['deal_fail'];?>","",1); 
}else{
var text_val = $(text);
$("#comment_page").before(text_val); 
comment();
notice_comment();
}

 },'text'); 
}
}
}
//删除评论
function comment_del(obj,comment_id){ 
var obj = obj ;
var comment_id = comment_id;
$.post(basic_url+"&view=comment&op=del",{comment_id:comment_id},function(json){
if(json.status!=0){ 
$("#"+obj).slideUp(600);  
$("#answers_"+comment_id).slideUp(600); 
}else{ 
     showDialog(json.data,"alert",json.msg);	
} 
},'json');  
}
//回复
function comment_reply(comment_id){

var reply_box = $('#answers_'+comment_id);

if(reply_box.is(':visible')){
var comment_id = comment_id;
var t = $("#txt_reply_"+comment_id).val().toString().substr(0,100);
$.post(basic_url+"&view=comment&op=reply",{content:t,pid:comment_id},function(text){
if(text=='2'){
showDialog("<?php echo $_lang['you_haved_replied'];?>",'alert',"<?php echo $_lang['operate_fail'];?>","",1); 
}else if(text=='3'){
showDialog("<?php echo $_lang['sensitive_word'];?>",'alert',"<?php echo $_lang['deal_fail'];?>","",1); 
}else{ 
var text_val = $(text);
$(text_val).appendTo($("#p_reply_"+comment_id)); 
text_val.hide(); 
text_val.slideDown(500); 
comment();
}
},'text'); 
}else{
reply_box.removeClass('hidden');
}
} 
function comment(){
$('.operate a').tipsy({gravity:$.fn.tipsy.autoNS}).hover(function(){
$(this).children('.icon16').addClass("reverse");
}, function(){
$(this).children('.icon16').removeClass("reverse");
});
//评论鼠标移动事件显示工具栏
$(".top1,.comment_item").hover(function(){
$(this).children('.operate').removeClass('hidden');

},function(){
$(this).children('.operate').addClass('hidden');
}); 
};

function notice_comment(){

$(".reply_comment").focus(function(){ 
    var content = $(this).val(); 
    if (content == "<?php echo $_lang['reply'];?>") {

        $(this).val("");
//$(this).siblings('.answer-zone').removeClass('hidden');
    }
    }); 
    $(".reply_comment").blur(function(){
        var content = $(this).val();
        if (!content) {
            $(this).val("<?php echo $_lang['reply'];?>");
//$(this).siblings('.answer-zone').addClass('hidden');
        }
    });
}




</script>
<?php } elseif($view=='mark') { ?>
<div class="panel clearfix box grid_24">
                <header class="clearfix box_header">
   <div class="pl_20">
                      	<nav class="box_nav">
                        	<ul class="clearfix">
  	<li><a href="<?php echo $basic_url;?>&view=mark"><?php echo $_lang['all_evaluation'];?>[ <?php echo $mc['all'];?> ]</a></li>
  	<li><a href="<?php echo $basic_url;?>&view=mark&st=1"><?php echo $_lang['good_value'];?>[ <?php echo intval($mark_count[1][count]) ?> ]</a></li>
<li><a href="<?php echo $basic_url;?>&view=mark&st=2"><?php echo $_lang['mid_evaluation'];?>[ <?php echo intval($mark_count[2][count]) ?> ]</a></li>
<li><a href="<?php echo $basic_url;?>&view=mark&st=3"><?php echo $_lang['bad_value'];?>[ <?php echo intval($mark_count[3][count]) ?> ]</a></li>
<li><a href="<?php echo $basic_url;?>&view=mark&ut=1"><?php echo $_lang['from_seller'];?>[<?php echo $mc['seller'];?>]</a></li>
<li><a href="<?php echo $basic_url;?>&view=mark&ut=2"><?php echo $_lang['from_buyer'];?>[{<?php echo $mc['buyer'];?>]</a></li>
      		</ul>
                         </nav>
     </div>
                </header>
                <div class="prefix_1 suffix_1">
<?php if($mark_info) { ?> <!--评价-->
<?php if(is_array($mark_info)) { foreach($mark_info as $v) { ?>
                    <div class="ly1 mt_20 mb_10">
                        <div class="top1 clearfix mt_10">
                            <div class="fl_l mr_10">
                            	<a href="index.php?do=space&member_id=<?php echo $v['by_uid'];?>" title="<?php echo $v['by_username'];?>"><?php echo  keke_user_class::get_user_pic($v[by_username],'small') ?></a>
对<a href="index.php?do=space&member_id=<?php echo $v['uid'];?>" class="ml_10 mr_10"><?php echo $v['username'];?></a><?php echo $_lang['de'];?>
<?php if($v['mark_status']==1) { ?><?php echo $_lang['good_value'];?><?php } elseif($v['mark_status']==2) { ?><?php echo $_lang['mid_evaluation'];?><?php } elseif($v['mark_status']=='3') { ?><?php echo $_lang['bad_value'];?><?php } else { ?><?php echo $_lang['no_reply_evaluation'];?><?php } ?><img src="resource/img/ico/ico_mark_<?php echo $v['mark_status'];?>.gif" alt=''>
                            </div>
                        </div>
                        <div class="pl_10 grid_16">
                            <p class="mt_10 font14"><?php echo $v['mark_content'];?>
                            </p>
                        </div>
<?php $aid_info=keke_user_mark_class::get_user_aid($v[by_uid],$v[mark_type],$v[mark_status],2,$v['model_code'],$v['obj_id']); ?>

<div class="fl_r">
<?php if(is_array($aid_info)) { foreach($aid_info as $k2 => $v2) { ?>
<div class="grid_3 omega">
        	 <b><?php echo $v2['aid_name'];?></b>&nbsp;&nbsp;&nbsp;&nbsp;<font color="red"><?php echo $v2['avg'];?></font><?php echo $_lang['fen'];?>
          </div>
       <div class="grid_2 alpha">
        <div class="clearfix">
             <?php echo keke_user_mark_class::gen_star2($v2['avg']); ?>
         </div>
         </div>
<div class="clear"></div>
<?php } } ?>
</div>
                    </div>
<div class="clear"></div>
<?php } } ?><!--end评价-->
<?php } else { ?>
<div class="t_c"><span class="c999"><?php echo $_lang['now_no_record'];?></span></div>
<?php } ?>
                    
                    
                </div>
                <!--page 翻页 start-->
                <div class="page">
                    <p class="clearfix"><?php echo $pages['page'];?> </p>
                    <div class="clear">
                    </div>
                </div>
                <!--page 翻页 end-->
                <div class="clear">
                </div>
   </div>
<?php } elseif($view=='tools'&&$uid==$service_info['uid']) { ?>
 <?php require S_ROOT.'/control/shop_payitem_tools.php' ?>
<?php } ?>
 </div>
 </section>
  <!--商品详情_底部广告-->
   <?php keke_loaddata_class::ad_show('GOODINFO_BOTTOM','service','') ?>
 <aside class="clearfix mb_10">	
  
      <div class="grid_12">
         <div class="box normal2 clearfix">
         	<div class="inner">
         	<div class="box_header">
           		<h3 class="title"><?php echo $_lang['same_hot_case'];?></h3>
   	</div>
<div class="pt_10 clearfix">
   <?php if($hot_list) { ?>
   <?php $i=0 ?>
   	<?php if(is_array($hot_list)) { foreach($hot_list as $v) { ?>
<?php $i++ ?>
   		<div class="grid_4 t_c alpha">
              	  <div <?php if($i%3!==0) { ?> class="border_r_c" <?php } ?>>
              		<a href="index.php?do=service&sid=<?php echo $v['service_id'];?>" target="_blank">
                     <img src="<?php echo keke_shop_class::output_pics($v['pic'],100,1); ?>"  onerror="$(this).attr('src','<?php echo SKIN_PATH;?>/img/shop/shop_default.gif')" alt="<?php echo $v['title'];?>">
</a>
                        <p><span class="c900 font14"><?php  echo keke_curren_class::output(floatval($v[price]),-1);  ?></span></p>
                       <div class="po_re text_ov ">
                       			<a href="index.php?do=service&sid=<?php echo $v['service_id'];?>" target="_blank" title="<?php echo $v['title'];?>"><?php echo kekezu::cutstr($v[title],24) ?>gfdsg</a>
   </div>
                  </div>
                </div>
<?php } } ?>
 <div class="clear"></div>
             <a class="block t_r mr_20 mt_20 " href="index.php?do=shop_list&path=C<?php echo $model_id;?>;" target="_blank"><?php echo $_lang['view_more_case'];?>&gt;&gt;</a>
   <?php } else { ?>
<div class="t_c">
                      <?php echo $_lang['now_no'];?>
</div>
   <?php } ?>
           </div>
   </div>
        </div>
</div>
         <div class="grid_12 alpha omega">
          <div class="box normal2 example clearfix shop_list">
          	<div class="inner">
          		<div class="box_header">
           		<h3 class="title"><?php echo $_lang['relevant_class_task_list'];?></h3>
   </div>
             <?php if($task_list) { ?><?php $i=0; ?>
                <div class="grid_6 alpha omega">
                    <ul class="border_r_c task_list">
                        <?php if(is_array($task_list)) { foreach($task_list as $k => $v) { ?>
                        <?php if($k<7) { ?><?php $i++; ?>
                        <li>
                            <a href="index.php?do=task&task_id=<?php echo $v['task_id'];?>" title="<?php echo kekezu::cutstr($v['task_title'],28) ?>"><span class="c900"><?php  echo keke_curren_class::output(floatval($v['task_cash']),-1);  ?></span> <?php echo kekezu::cutstr($v['task_title'],28) ?></a>
</li>
                        <?php } ?>
                        <?php } } ?>
                    </ul>
                </div>
                <?php if($i==7) { ?>
                <div class="grid_6 alpha omega">
                    <ul class="border_r_c task_list">
                        <?php if(is_array($task_list)) { foreach($task_list as $j => $v) { ?>
                        <?php if($j>6) { ?>
                        <li>
                            <a href="index.php?do=task&task_id=<?php echo $v['task_id'];?>" title="<?php echo kekezu::cutstr($v['task_title'],28) ?>"><span class="c900"><?php  echo keke_curren_class::output(floatval($v['task_cash']),-1);  ?></span><span class="bk_color"> <?php echo kekezu::cutstr($v['task_title'],28) ?></span></a>
                        </li>
                        <?php } ?>
                        <?php } } ?>
                    </ul>
                </div>
                <?php } ?>
                            

<div class="clear"></div>
                   <a class="block t_r mr_20 mt_5 " href="index.php?do=task_list" target="_blank"><?php echo $_lang['view_more_task'];?>&gt;&gt;</a>
 <?php } else { ?>
<div class="t_c">
                      <?php echo $_lang['now_no'];?>
</div>
<?php } ?>  
 
              </div>
  </div>
           </div>
      
</aside>	
 </div>
</section>
<!--end 主内容-->
</div>
 <script type="text/javascript" >
     $(document).ready(function() {
        $("a.group").fancybox({
    
   });
    
 });
  </script>
<script type="text/javascript" src="resource/js/xheditor/xheditor.js"></script>
<script type="text/javascript">
var uid 	  = parseInt('<?php echo $uid;?>')+0;
var sid		  = parseInt('<?php echo $sid;?>')+0;
var basic_url = "index.php?do=service&sid="+sid;
</script>
<script type="text/javascript" >
In.add('service',{path:"resource/js/system/service.js",type:'js'});
In('service'); 
In('lazy',function(){
loadPics();
})
</script>
<script src="resource/js/uploadify/jquery.uploadify-3.1.min.js" type="text/javascript"></script>

<link href="resource/js/uploadify/uploadify.css" rel="stylesheet">
<?php if(!isset($inajax)) { ?>

<!--页脚 satrt-->
<footer class="footer clearfix">
<!--网站链接以及语言栏 关注我们 搜索 start-->






            <!--网站版权声明 start-->
            <section class="site_copyright clearfix">
            	<div class="container_24 clearfix ">
            		
            		
                    	 	<dl>
<dt>
                    	 		<?php echo $_lang['company'];?><?php echo $basic_config['company'];?><span class="pad10"><?php echo $_lang['address'];?><?php echo $basic_config['address'];?></span><?php echo $_lang['contact_phone'];?><?php echo $basic_config['phone'];?>
</dt>
<dd>
                    	 	<?php echo P_NAME;?><?php echo KEKE_VERSION;?> <?php echo $basic_config['copyright'];?><a href="http://icp.valu.cn/" target="_blank"><?php echo $basic_config['filing'];?></a>
<?php if(KEKE_DEBUG) { ?>
<span>
Querys: <?php echo db_factory::create()->get_query_num() ?>
 &nbsp;
Times:<?php echo kekezu::execute_time() ?>
</span>			
<?php } ?>
</dd>  
                    	 	</dl>
 <div class="clear"></div>


<!--语言栏 关注我们 搜索 start-->

                    <div class="site_attach clearfix">
<?php if($attent_api_open) { ?>

                        	<div class="social">
                            	<?php echo $_lang['about_us_'];?>
                            	
                                <?php if(is_array($attent_api_open)) { foreach($attent_api_open as $k => $v) { ?>
<?php if($attent_list[$k]['v']) { ?>

<?php $i = explode("_", $k);$i = $i['0'];$j=($attent_list[$k]); ?> 
<a href="index.php?do=wb&focus=<?php echo $j?>&wb_type=<?php echo $i?>"><img src="resource/img/ico/<?php echo $i;?>_t.gif" title="<?php echo $attent_list[$k]?>"></a> 

<?php } ?>
<?php } } ?>

                            </div>
     
<?php } ?>

                        <div class="lan_box">
                            <form action="" method="post" id="lan_bottom">
                                <div class="clearfix">
                                     <label><?php echo $_lang['language'];?></label>
                                     <select id="lan" name="lan" style="width:100px" onchange="setLang(this)">
  <?php if(is_array($lang_list)) { foreach($lang_list as $k => $v) { ?>
    <option value="<?php echo $k;?>" c="<?php echo $curr_list[$k]['0'];?>" <?php if($k==$language) { ?>selected<?php } ?>><?php echo $v;?></option>
  <?php } } ?>
                                     </select>
                                
                           
                               
                                     <label> <?php echo $_lang['currency'];?><?php echo $_lang['zh_mh'];?></label>
                                     <select  style="width:100px" onchange="setCurr(this.value,1);">
  <?php if(is_array($f_c_list)) { foreach($f_c_list as $k => $v) { ?>
    <option value="<?php echo $k;?>" id="<?php echo $k;?>" <?php if($currency==$k) { ?>selected<?php } ?>><?php echo $v['title'];?></option>
  <?php } } ?>
                                     </select>
                                 </div>
                            </form>
</div>	
                        

</div>

                  
                    <!--语言栏 关注我们 搜索 end-->


                </div>
   				<div class="clearfix"><?php echo htmlspecialchars_decode($basic_config['stats_code']) ?></div>
            </section>
            <!--网站版权声明 end-->
            
            <!--返回顶部 start-->

        	<a class="top animated hidden" href="javascript:void(0);" title="<?php echo $_lang['return_top'];?>"><em>&diams;</em>Top</a>
              
            <!--返回顶部 end-->
    </footer>
    <!--页脚 end-->
</div>
<?php if($uid) { ?>
<?php kekezu::update_oltime($uid,$username) ?>
<?php } ?>
<script type="text/javascript">
var uid='<?php echo $uid;?>';
var xyq = "<?php echo $xyq = session_id(); ?>";
<?php if($exec_time_traver) { ?>
$(function(){
   $.get('js.php?op=time&r='+Math.random());	
})
<?php } ?>
 //js异步加载
In('header_top','custom','lavalamp','tipsy','autoIMG','slides');




</script>

<!--[if IE 6]></div><![endif]-->
<!--[if IE 7]></div><![endif]-->
<!--[if IE 8]></div><![endif]-->
</body>
</html>
<?php } ?>
<?php keke_tpl_class::ob_out();?>