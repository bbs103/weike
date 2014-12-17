<?php
namespace backend\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;

class ArticleController extends Controller{
	//网站公告列表
	public function actionWeb_affiche(){
		return $this->renderPartial('web_affiche');
	}
	//网站公告添加
	public function actionAdd_affiche(){
		return $this->renderPartial('add_affiche');
	}


	//关于网站列表
	public function actionAbout_manage(){
		return $this->renderPartial('about_manage');
	}
	//关于网站添加
	public function actionAdd_about(){
		return $this->renderPartial('add_about');
	}


	//文章管理--文章列表
	public function actionArticle_manage(){
		return $this->renderPartial('article_manage');
	}
	//文章管理--文章添加
	public function actionAdd_article(){
		return $this->renderPartial('add_article');
	}


	//文章分类--分类管理
	public function actionCategory_manage(){
		return $this->renderPartial('category_manage');
	}
	//文章分类--分类添加
	public function actionAdd_category(){
		return $this->renderPartial('add_category');
	}


	//帮助分类--分类管理
	public function actionHelp_category(){
		return $this->renderPartial('help_category');
	}
	//帮助分类--分类添加
	public function actionAdd_help_category(){
		return $this->renderPartial('add_help_category');
	}


	//帮助管理--帮助列表
	public function actionHelp_manage(){
		return $this->renderPartial('help_manage');
	}
	//帮助管理--帮助添加
	public function actionAdd_help(){
		return $this->renderPartial('add_help');
	}


	//案例管理--案例列表
	public function actionCase_manage(){
		return $this->renderPartial('case_manage');
	}
	//案例管理--案例添加
	public function actionAdd_case(){
		return $this->renderPartial('add_case');
	}
}
?>