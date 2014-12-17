<?php
namespace backend\controllers;

use yii\web\Controller;

class ShopController extends Controller 
{
	//店铺管理
	public function actionShop_manage() {
		return $this->renderPartial('shop_manage');
	}
	//作品订单管理
	public function actionOrder_opus() {
		return $this->renderPartial('order_opus');
	}
	//作品管理
	public function actionOpus_manage() {
		return $this->renderPartial('opus_manage');
	}
	//作品基本配置
	public function actionOpus_config() {
		return $this->renderPartial('opus_config');
	}
	//作品流程配置
	public function actionFlow_opus() {
		return $this->renderPartial('flow_opus');
	}
	//服务订单管理
	public function actionOrder_service() {
		return $this->renderPartial('order_service');
	}
	//服务管理
	public function actionService_manage() {
		return $this->renderPartial('service_manage');
	}
	//服务配置
	public function actionService_config() {
		return $this->renderPartial('service_config');
	}
	//服务流程配置
	public function actionFlow_service() {
		return $this->renderPartial('flow_service');
	}

}
