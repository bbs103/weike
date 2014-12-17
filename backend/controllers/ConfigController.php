<?php
namespace backend\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;

class ConfigController extends Controller{
	//全局配置--基本配置
	public function actionBasic_config(){
		return $this->renderPartial('basic_config');
	}
	//全局配置--站点配置
	public function actionGlobal_config(){
		return $this->renderPartial('global_config');
	}
	//全局配置--seo配置
	public function actionSeo_config(){
		return $this->renderPartial('seo_config');
	}
	//全局配置--email配置
	public function actionEmail_config(){
		return $this->renderPartial('email_config');
	}


	//模型管理--商城模型管理
	public function actionShop_model(){
		return $this->renderPartial('shop_model');
	}
	//模型管理--任务模型管理
	public function actionTask_model(){
		return $this->renderPartial('task_model');
	}


	//会员整合
	public function actionUcenter_integrate(){
		return $this->renderPartial('ucenter_integrate');
	}


	//自定义导航
	public function actionCustom_nav(){
		return $this->renderPartial('custom_nav');
	}


	//汇率管理
	public function actionRate_config(){
		return $this->renderPartial('rate_config');
	}


	//行业管理--行业列表
	public function actionIndustry_manage(){
		return $this->renderPartial('industry_manage');
	}
	//行业管理--行业合并
	public function actionIndustry_merge(){
		return $this->renderPartial('industry_merge');
	}
	//行业管理--行业添加
	public function actionAdd_industry(){
		return $this->renderPartial('add_industry');
	}


	//技能管理--技能添加
	public function actionAdd_skill(){
		return $this->renderPartial('add_skill');
	}
	//技能管理--技能列表
	public function actionSkill_manage(){
		return $this->renderPartial('skill_manage');
	}


	//接口管理--oauth
	public function actionOauth_login(){
		return $this->renderPartial('oauth_login');
	}
	//接口管理--微博关注
	public function actionWeibo_concerns(){
		return $this->renderPartial('weibo_concerns');
	}


	//地图接口
	public function actionMap_api(){
		return $this->renderPartial('map_api');
	}


	//短信管理--短信发送
	public function actionSend_message(){
		return $this->renderPartial('send_message');
	}
	//短信管理--账号信息
	public function actionMessage_config(){
		return $this->renderPartial('message_config');
	}


	//短息模板--模板编辑
	public function actionEdit_template(){
		return $this->renderPartial('edit_template');
	}
	//短信模板--模板列表
	public function actionMessage_template(){
		return $this->renderPartial('message_template');
	}


	//支付管理--线下支付
	public function actionOffline_pay(){
		return $this->renderPartial('offline_pay');
	}
	//支付管理--支付配置
	public function actionPay_api(){
		return $this->renderPartial('pay_api');
	}
	//支付管理--在线支付
	public function actionOnline_pay(){
		return $this->renderPartial('online_pay');
	}


	//增值服务管理
	public function actionService_manage(){
		return $this->renderPartial('service_manage');
	}
	//增值服务管理--威客
	public function actionService_weike(){
		return $this->renderPartial('service_weike');
	}
	//增值服务管理--雇主
	public function actionService_employer(){
		return $this->renderPartial('service_employer');
	}
	

	//增值服务--购买记录
	public function actionBuy_record(){
		return $this->renderPartial('buy_record');
	}

	
	
	
	

	
}
?>