<?php
namespace backend\controllers;
use yii\web\Controller;

class UserController extends Controller 
{
   //用户组管理
   public function actionUser_group() {
       return $this->renderPartial('user_group');
   }
   //设置用户组
   public function actionGroup_manage() {
     return $this->renderPartial('group_manage');   
   }
   //系统组管理
   public function actionSystem_group() {
       return $this->renderPartial('system_group');      
   }
   //添加系统组
   public function actionAdd_system() {
       return $this->renderPartial('add_system');
   }
   //信誉规则
   public function actionRule_manage() {
       return $this->renderPartial('rule_manage');
   }  
   //增加信誉规则
   public function actionAdd_rule() {
       return $this->renderPartial('add_rule');      
   }
   //互评配置
   public function actionComment_config() {
       return $this->renderPartial('comment_config');      
   }
   //互评记录
   public function actionComment_record() {
       return $this->renderPartial('comment_record');      
   }
   //交易维权
   public function actionDeal_safeguard() {
       return $this->renderPartial('deal_safeguard');      
   }
   //交易举报
   public function actionDeal_inform() {
       return $this->renderPartial('deal_inform');      
   }
   //投诉建议
   public function actionComplaint_suggest() {
       return $this->renderPartial('complaint_suggest');      
   }
   //企业认证
   public function actionCompany_approve() {
       return $this->renderPartial('company_approve');      
   }   
   //银行认证
   public function actionBank_approve() {
       return $this->renderPartial('bank_approve');      
   }
   //实名认证
   public function actionAutonym_approve() {
       return $this->renderPartial('autonym_approve');      
   }
   //邮箱认证
   public function actionEmail_approve() {
       return $this->renderPartial('email_approve');      
   }
   //手机认证
   public function actionMobile_approve() {
       return $this->renderPartial('mobile_approve');      
   }
   //认证项目
   public function actionApprove_manage() {
       return $this->renderPartial('approve_manage');      
   }   
}