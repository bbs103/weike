<?php
namespace backend\controllers;
use yii\web\Controller;
class TaskController extends Controller
{
    //单人
    //任务管理
    public function actionSingle_manage() {
        return $this->renderPartial('single_manage');
    }
    //基本配置
    public function actionBasic_single() {
        return $this->renderPartial('basic_single');
    }
    //流程配置
    public function actionFlow_single() {
        return  $this->renderPartial('flow_single');
    }
    //权限配置
    public function actionAccess_single() {
        return $this->renderPartial('access_single');
    }
    
    //多人
    //任务管理
    public function actionDouble_manage() {
        return $this->renderPartial('double_manage');
    }
    //基本配置
    public function actionBasic_double() {
        return $this->renderPartial('basic_double');
    }
    //流程配置
    public function actionFlow_double() {
        return $this->renderPartial('flow_double');
    } 
    //权限配置
    public function actionAccess_double() {
        return $this->renderPartial('access_double');
    }
    //计件悬赏
    //任务管理
    public function actionPiece_manage() {
       return $this->renderPartial('piece_manage'); 
    }
    //基本配置
    public function actionBasic_piece() {
        return $this->renderPartial('basic_piece');
    }
    //流程配置
    public function actionFlow_piece() {
        return $this->renderPartial('flow_piece');
    }
    //权限配置
    public function actionAccess_piece() {
        return $this->renderPartial('access_piece');
    }
    
    //普通
    //任务管理
    public function actionNormal_manage() {
       return $this->renderPartial('normal_manage'); 
    }
    //基本配置
    public function actionBasic_normal() {
        return $this->renderPartial('basic_normal');
    }
    //流程配置
    public function actionFlow_normal() {
        return $this->renderPartial('flow_normal');
    }
    //权限配置
    public function actionAccess_normal() {
        return $this->renderPartial('access_normal');
    }
    
    //订金
    //任务管理
    public function actionSubscript_manage() {
       return $this->renderPartial('subscript_manage'); 
    }
    //基本配置
    public function actionBasic_subscript() {
        return $this->renderPartial('basic_subscript');
    }
    //流程配置
    public function actionFlow_subscript() {
        return $this->renderPartial('flow_subscript');
    }
    //权限配置
    public function actionAccess_subscript() {
        return $this->renderPartial('access_subscript');
    }

}