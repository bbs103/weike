<?php
namespace backend\controllers;
use app\models\WitkeyMemberGroup;//使用对应的表
use app\models\WitkeyMember;
use app\models\WitkeySpace;
use yii\data\Pagination;//分页对象
use yii\db\Query;//数据库类
use yii\web\Controller;

class FinanceController extends Controller 
{
        public $enableCsrfValidation = false;
	//财务概况
	public function actionFinance_survey() {
		return $this->renderPartial('finance_survey');
	}
	//财务明细
	public function actionFinance_detail() {
		return $this->renderPartial('finance_detail');
	}
	//财务分析
	public function actionFinance_analyze() {
		return $this->renderPartial('finance_analyze');
	}
	//充值审核
	public function actionPay_audit() {
		return $this->renderPartial('pay_audit');
	}
	//提现审核
	public function actionDeposit_audit() {
		return $this->renderPartial('deposit_audit');
	}
	//手动充值
	public function actionManul_pay() {
		return $this->renderPartial('manul_pay');
	}
	//添加用户
	public function actionAdd_user() {
                 //echo '<pre>';
                $model=new WitkeyMemberGroup();
                $result=$model::find()->all();
                //var_dump($data);
                $data=array("info"=>$result);		
		return $this->renderPartial('add_user',$data);
	}
        //添加用户
	public function actionAdd_user_pro() {
                var_dump($_POST);
                $model=new WitkeySpace();
                $username=$_POST['username'];
                $password=md5($_POST['password']);
                $email=$_POST['email'];
                $group=$_POST['group_id'];
                $time=time();
		$ip=$_SERVER['REMOTE_ADDR'];
                $model->username = $username;
		$model->password= $password;
		$model->group_id = $group;
		$model->email = $email;
		$model->reg_time=$time;
		$model->reg_ip=$ip;              
                if($model->insert()) {
                    $this->redirect('index.php?r=finance/user_manage');                
                }else {
                    $this->redirect('index.php?r=finance/add_user');
                }
	}
	//用户管理
	public function actionUser_manage() {
		return $this->renderPartial('user_manage');
	}

}
