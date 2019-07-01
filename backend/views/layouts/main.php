<?php
/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?= Html::csrfMetaTags() ?>
   <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title><?= Html::encode($this->title) ?></title>


 <!-- FONT AWESOME-->
   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/@fortawesome/fontawesome-free/css/brands.css">
   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/@fortawesome/fontawesome-free/css/regular.css">
   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/@fortawesome/fontawesome-free/css/solid.css">
   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/@fortawesome/fontawesome-free/css/fontawesome.css"><!-- SIMPLE LINE ICONS-->
   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/simple-line-icons/css/simple-line-icons.css"><!-- ANIMATE.CSS-->
   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/animate.css/animate.css"><!-- WHIRL (spinners)-->
   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/whirl/dist/whirl.css"><!-- =============== PAGE VENDOR STYLES ===============-->
   <!-- WEATHER ICONS-->
   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/weather-icons/css/weather-icons.css"><!-- =============== BOOTSTRAP STYLES ===============-->

	<link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/bootstrap.css" id="bscss">
   <!--<link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/bootstrap-rtl.css" id="bscss"> -->

   <!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/app.css" id="maincss">
   <!-- <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/app-rtl.css" id="maincss"> -->
<!--  <link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/theme-e.css" id="maincss"> -->

   <!-- on your view layout file HEAD section -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

<script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/jquery/dist/jquery.js"></script>





</head>
<body >
<?php $this->beginBody() ?>
   <div class="wrapper">
      <!-- top navbar-->
      <header class="topnavbar-wrapper">
         <!-- START Top Navbar-->
         <nav class="navbar topnavbar">
            <!-- START navbar header-->
            <div class="navbar-header"><a class="navbar-brand" href="#/">
                  <div class="brand-logo"><img class="img-fluid" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/logo.png" alt="App Logo"></div>
                  <div class="brand-logo-collapsed"><img class="img-fluid" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/logo-single.png" alt="App Logo"></div>
               </a></div><!-- END navbar header-->
            <!-- START Left navbar-->
            <ul class="navbar-nav mr-auto flex-row">
               <li class="nav-item">
                  <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops--><a class="nav-link d-none d-md-block d-lg-block d-xl-block" href="#" data-trigger-resize="" data-toggle-state="aside-collapsed"><em class="fas fa-bars"></em></a><!-- Button to show/hide the sidebar on mobile. Visible on mobile only.--><a class="nav-link sidebar-toggle d-md-none" href="#" data-toggle-state="aside-toggled" data-no-persist="true"><em class="fas fa-bars"></em></a></li><!-- START User avatar toggle-->
               <li class="nav-item d-none d-md-block">
                  <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops--><a class="nav-link" id="user-block-toggle" href="#user-block" data-toggle="collapse"><em class="icon-user"></em></a></li><!-- END User avatar toggle-->
               <!-- START lock screen-->
               <!-- <li class="nav-item d-none d-md-block"><a class="nav-link" href="lock.html" title="Lock screen"><em class="icon-lock"></em></a></li> --><!-- END lock screen-->
            </ul><!-- END Left navbar-->
            <!-- START Right Navbar-->
            <ul class="navbar-nav flex-row">
               <!-- Search icon-->
               <li class="nav-item"><a class="nav-link" href="#" data-search-open=""><em class="icon-magnifier"></em></a></li><!-- Fullscreen (only desktops)-->
               <li class="nav-item d-none d-md-block"><a class="nav-link" href="#" data-toggle-fullscreen=""><em class="fas fa-expand"></em></a></li><!-- START Alert menu-->
               <li class="nav-item dropdown dropdown-list"><a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-toggle="dropdown"><em class="icon-bell"></em><span class="badge badge-danger">11</span></a><!-- START Dropdown menu-->
                  <div class="dropdown-menu dropdown-menu-right animated flipInX">
                     <div class="dropdown-item">
                        <!-- START list group-->
                        <div class="list-group">
                           <!-- list item-->
                           <div class="list-group-item list-group-item-action">
                              <div class="media">
                                 <div class="align-self-start mr-2"><em class="fab fa-twitter fa-2x text-info"></em></div>
                                 <div class="media-body">
                                    <p class="m-0">New followers</p>
                                    <p class="m-0 text-muted text-sm">1 new follower</p>
                                 </div>
                              </div>
                           </div><!-- list item-->
                           <div class="list-group-item list-group-item-action">
                              <div class="media">
                                 <div class="align-self-start mr-2"><em class="fas fa-envelope fa-2x text-warning"></em></div>
                                 <div class="media-body">
                                    <p class="m-0">New e-mails</p>
                                    <p class="m-0 text-muted text-sm">You have 10 new emails</p>
                                 </div>
                              </div>
                           </div><!-- list item-->
                           <div class="list-group-item list-group-item-action">
                              <div class="media">
                                 <div class="align-self-start mr-2"><em class="fas fa-tasks fa-2x text-success"></em></div>
                                 <div class="media-body">
                                    <p class="m-0">Pending Tasks</p>
                                    <p class="m-0 text-muted text-sm">11 pending task</p>
                                 </div>
                              </div>
                           </div><!-- last list item-->
                           <div class="list-group-item list-group-item-action"><span class="d-flex align-items-center"><span class="text-sm">More notifications</span><span class="badge badge-danger ml-auto">14</span></span></div>
                        </div><!-- END list group-->
                     </div>
                  </div><!-- END Dropdown menu-->
               </li><!-- END Alert menu-->
               <!-- START Offsidebar button-->
               <li class="nav-item"><a class="nav-link" href="#" data-toggle-state="offsidebar-open" data-no-persist="true"><em class="icon-notebook"></em></a></li><!-- END Offsidebar menu-->

			    <li class="nav-item">
                    <?php
                      echo Html::beginForm(['/site/logout'], 'post'). Html::submitButton('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', ['class' => 'icon-power btn btn-link nav-link logout-position logout']).Html::endForm();
                    ?>
                  </li>
            </ul><!-- END Right Navbar-->





            <!-- START Search form-->
            <form class="navbar-form" role="search" action="search.html">
               <div class="form-group"><input class="form-control" type="text" placeholder="Type and hit enter ...">
                  <div class="fas fa-times navbar-form-close" data-search-dismiss=""></div>
               </div><button class="d-none" type="submit">Submit</button>
            </form><!-- END Search form-->
         </nav><!-- END Top Navbar-->
      </header><!-- sidebar-->
      <aside class="aside-container">
         <!-- START Sidebar (left)-->
         <div class="aside-inner">
            <nav class="sidebar" data-sidebar-anyclick-close="">
               <!-- START sidebar nav-->
               <ul class="sidebar-nav">
                  <!-- START user info-->
                  <li class="has-user-block">
                     <div class="collapse" id="user-block">
                        <div class="item user-block">
                           <!-- User picture-->
                           <div class="user-block-picture">
                              <div class="user-block-status"><img class="img-thumbnail rounded-circle" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/user/02.jpg" alt="Avatar" width="60" height="60">
                                 <div class="circle bg-success circle-lg"></div>
                              </div>
                           </div><!-- Name and Job-->
                           <div class="user-block-info"><span class="user-block-name">Hello, Mike</span><span class="user-block-role">Designer</span></div>
                        </div>
                     </div>
                  </li><!-- END user info-->
                  <!-- Iterates over all sidebar items-->
                  <li class="nav-heading "><span data-localize="sidebar.heading.HEADER">Main Navigation</span></li>
                  </li>
                  <li <?php  echo ($this->context->id=='site')?'class="active"':'';?>>

                   <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>" title="Dashboard">
                      <em class="icon-grid"></em><span>Dashboard</span>
                   </a>
                 </li>

                 <?php
				 if(Yii::$app->user->can('Invoice')){
                 ?>
                 <li  <?php  echo ($this->context->id=='invoice')?'class="active"':'';?>>
                   <a href="<?php echo Yii::$app->urlManager->createUrl('invoice'); ?>" title="Invoices Sent">
                   	<em class="fa fa-arrow-up"></em>
                      <span>Invoices Sent</span>
                   </a>
                 </li>
				 <?php
				 }
				 ?>

				   <?php

                 if(Yii::$app->user->can('Account')){
                 ?>
                 <li <?php  echo ($this->context->id=='account')?'class="active"':'';?> >
                   <a href="<?php echo Yii::$app->urlManager->createUrl('account'); ?>" title="Payors">
                   	<em class="icon-people"></em>
                      <span>Customers (Payors)</span>
                   </a>
                 </li>
				 <?php
				 }
				 ?>

				  <?php
				 if(Yii::$app->user->can('Invoice')){
                 ?>
                 <li  <?php  echo ($this->context->id=='invoice')?'class="active"':'';?>>
                   <a href="<?php echo Yii::$app->urlManager->createUrl('invoice'); ?>" title="Invoices Received">
                   	<em class="fa fa-arrow-down"></em>
                      <span>Invoices Received</span>
                   </a>
                 </li>
				 <?php
				 }
				 ?>

				  <?php

                 if(Yii::$app->user->can('Account')){
                 ?>
                 <li <?php  echo ($this->context->id=='account')?'class="active"':'';?> >
                   <a href="<?php echo Yii::$app->urlManager->createUrl('account'); ?>" title="Payees">
                   	<em class="icon-people"></em>
                      <span>Vendors (Payees)</span>
                   </a>
                 </li>
				 <?php
				 }
				 ?>




				 <?php
				 if(Yii::$app->user->can('Item')){
                 ?>
                 <li <?php  echo ($this->context->id=='item')?'class="active"':'';?> >
                   <a href="<?php echo Yii::$app->urlManager->createUrl('item'); ?>" title="Items">
					<em class="icon-present"></em>
					                   <span>Items</span>
                   </a>
                 </li>
				 <?php
				 }
				 ?>

                 <?php

				 if(Yii::$app->user->can('ItemCategory')){
                 ?>
                 <li <?php  echo ($this->context->id=='item-category')?'class="active"':'';?> >
                   <a href="<?php echo Yii::$app->urlManager->createUrl('item-category'); ?>" title="Item Categories">
                   	<em class="icon-list"></em>
                      <span>Item Categories</span>
                   </a>
                 </li>
				 <?php
				 }
				 ?>



                 <?php

                 if(Yii::$app->user->can('Account') && array_key_exists("superadmin", Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId()))){
                 ?>
                 <li <?php  echo ($this->context->id=='account')?'class="active"':'';?> >
                   <a href="<?php echo Yii::$app->urlManager->createUrl('account'); ?>" title="Accounts">
                   	<em class="icon-note"></em>
                      <span>Accounts </span>
                   </a>
                 </li>
				 <?php
				 }
				 ?>



                 <li>
                   <a href="#settings"  title="Settings" data-toggle="collapse">
					      <em class="icon-settings"></em>
                      <span>Settings</span>
                   </a>

					<ul class="sidebar-nav sidebar-subnav collapse" id="settings">


					<li class="sidebar-subnav-header">Settings</li>


						 <li <?php  echo ($this->context->id=='user')?'class="active"':'';?> >
						   <a href="<?php echo Yii::$app->urlManager->createUrl('user'); ?>" title="Team">
							<em class="fa fa-users-cog"></em>
							  <span>Team</span>
						   </a>
						 </li>



							 <li>
								<a href="<?php echo Yii::$app->urlManager->createUrl('user/changepassword'); ?>" title="Change Password">
								<em class="fa fa-lock"></em>
								   <span>Change Password</span>
								</a>
							 </li>




                  <li <?php  echo ($this->context->id=='account-setting')?'class="active"':'';?> >
                     <a href="<?php echo Yii::$app->urlManager->createUrl('setting/account-setting'); ?>" title="Account Settings">
                        <em class="fa fa-user-check"></em>
                        <span>Account Settings</span>
                     </a>
                  </li>
                  <li <?php  echo ($this->context->id=='invoice-setting')?'class="active"':'';?> >
                     <a href="<?php echo Yii::$app->urlManager->createUrl('setting/invoice-setting'); ?>" title="Invoice Settings">
                        <em class="fa fa-money-bill-alt"></em>
                        <span>Invoice Settings</span>
                     </a>
                  </li>

                  <li <?php  echo ($this->context->id=='email-template')?'class="active"':'';?> >
                     <a href="<?php echo Yii::$app->urlManager->createUrl('email-template'); ?>" title="Email Templates">
                     <em class="fa fa-envelope"></em>
                        <span>Email Templates</span>
                     </a>
                  </li>

				   <li <?php  echo ($this->context->id=='sms-template')?'class="active"':'';?> >
                     <a href="<?php echo Yii::$app->urlManager->createUrl('sms-template'); ?>" title="SMS Templates">
                     <em class="fa fa-mobile-alt"></em>
                        <span>SMS Templates</span>
                     </a>
                  </li>

				   <li <?php  echo ($this->context->id=='smtp')?'class="active"':'';?> >
                     <a href="<?php echo Yii::$app->urlManager->createUrl('setting/smtp'); ?>" title="SMTP Settings">
                     <em class="fa fa-envelope-open"></em>
                        <span>SMTP Settings</span>
                     </a>
                  </li>

				  <li <?php  echo ($this->context->id=='payment-gateway')?'class="active"':'';?> >
                     <a href="<?php echo Yii::$app->urlManager->createUrl('payment-gateway'); ?>" title="Payment Gateway">
                     <em class="fa fa-server"></em>
                        <span>Payment Gateway</span>
                     </a>
                  </li>


				  <li <?php  echo ($this->context->id=='transaction')?'class="active"':'';?> >
                     <a href="<?php echo Yii::$app->urlManager->createUrl('transaction'); ?>" title="Transactions">
                     <em class="fa fa-money-check"></em>
                        <span>Transactions</span>
                     </a>
                  </li>

				   <li <?php  echo ($this->context->id=='tax-type')?'class="active"':'';?> >
                     <a href="<?php echo Yii::$app->urlManager->createUrl('tax-type'); ?>" title="Tax Settings">
                     <em class="fa fa-align-right"></em>
                        <span>Tax Settings</span>
                     </a>
                  </li>

				   <li <?php  echo ($this->context->id=='discount-type')?'class="active"':'';?> >
                     <a href="<?php echo Yii::$app->urlManager->createUrl('discount-type'); ?>" title="Discount Settings">
                     <em class="fa fa-divide"></em>
                        <span>Discount Settings</span>
                     </a>
                  </li>


					</ul>

                 </li>

	<?php
						if(array_key_exists("superadmin", Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId())))
						{
							?>

				  <li>
                   <a href="#super-settings"  title="Settings" data-toggle="collapse">
					      <em class="icon-settings"></em>
                      <span>Super Settings</span>
                   </a>

					<ul class="sidebar-nav sidebar-subnav collapse" id="super-settings">


					<li class="sidebar-subnav-header">Super Settings</li>

						<?php
						if(Yii::$app->user->can('User')){
						 ?>
						 <li <?php  echo ($this->context->id=='user')?'class="active"':'';?> >
						   <a href="<?php echo Yii::$app->urlManager->createUrl('user'); ?>" title="User">
							<em class="fa fa-users-cog"></em>
							  <span>All Users</span>
						   </a>
						 </li>
						 <?php
						 }
						?>


						<?php
						 if(Yii::$app->user->can('Rbac')){
						?>
						 <li <?php  echo ($this->context->id=='rbac')?'class="active"':'';?> >
						   <a href="<?php echo Yii::$app->urlManager->createUrl('rbac'); ?>" title="Rights">
							<em class="icon-shield"></em>
							  <span>Rights</span>
						   </a>
						 </li>
						 <?php
						 }
						 ?>


              	  <li <?php  echo ($this->context->id=='transaction')?'class="active"':'';?> >
                     <a href="<?php echo Yii::$app->urlManager->createUrl('transaction'); ?>" title="Transactions">
                     <em class="fa fa-money-check"></em>
                        <span>All Transactions</span>
                     </a>
                  </li>



					<?php
						 if(Yii::$app->user->can('SystemSetting')){
						 ?>
				   <li <?php  echo ($this->context->id=='system-setting')?'class="active"':'';?> >
                     <a href="<?php echo Yii::$app->urlManager->createUrl('system-setting'); ?>" title="System Settings">
                     <em class="fa fa-cogs"></em>
                        <span>System Settings</span>
                     </a>
                  </li>
					<?php
						 }
						 ?>

						<?php
						 if(Yii::$app->user->can('Country')){
						 ?>
						 <li  <?php  echo ($this->context->id=='country')?'class="active"':'';?>>
						   <a href="<?php echo Yii::$app->urlManager->createUrl('country'); ?>" title="Countries">
							<em class="fa fa-sync-alt"></em>
							  <span>Countries</span>
						   </a>
						 </li>
						 <?php
						 }
						 ?>

						 <?php

						 if(Yii::$app->user->can('State')){
						 ?>
						 <li  <?php  echo ($this->context->id=='state')?'class="active"':'';?>>
						   <a href="<?php echo Yii::$app->urlManager->createUrl('state'); ?>" title="States">
							<em class="fa fa-sync-alt"></em>
							  <span>States</span>
						   </a>
						 </li>
						 <?php
						 }
						 ?>

                 <?php

                 if(Yii::$app->user->can('City')){
                 ?>
                 <li  <?php  echo ($this->context->id=='city')?'class="active"':'';?>>
                   <a href="<?php echo Yii::$app->urlManager->createUrl('city'); ?>" title="Cities">
                   	<em class="fa fa-sync-alt"></em>
                      <span>Cities</span>
                   </a>
                 </li>
				 <?php
				 }
				 ?>

                 <?php


                 if(Yii::$app->user->can('Currency')){
                 ?>
                 <li  <?php  echo ($this->context->id=='currency')?'class="active"':'';?>>
                   <a href="<?php echo Yii::$app->urlManager->createUrl('currency'); ?>" title="Currencies">
                   	<em class="fa fa-sync-alt"></em>
                      <span>Currencies</span>
                   </a>
                 </li>
				 <?php
				 }
				 ?>




					</ul>

                 </li>

 <?php
						 }
						 ?>
               </ul>
               <!-- END sidebar nav-->
            </nav>
         </div><!-- END Sidebar (left)-->
      </aside><!-- offsidebar-->
      <aside class="offsidebar d-none">
         <!-- END Sidebar (left)-->
         <nav>
            <div role="tabpanel">
               <!-- Nav tabs-->
               <ul class="nav nav-tabs nav-justified" role="tablist">
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="#app-settings" aria-controls="app-settings" role="tab" data-toggle="tab"><em class="icon-equalizer fa-lg"></em></a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#app-chat" aria-controls="app-chat" role="tab" data-toggle="tab"><em class="icon-user fa-lg"></em></a></li>
               </ul><!-- Tab panes-->
               <div class="tab-content">
                  <div class="tab-pane fade active show" id="app-settings" role="tabpanel">
                     <h3 class="text-center text-thin mt-4">Settings</h3>
                     <div class="p-2">
                        <h4 class="text-muted text-thin">Themes</h4>
                        <div class="row row-flush mb-2">
                           <div class="col mb-2">
                              <div class="setting-color"><label data-load-css="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/theme-a.css"><input type="radio" name="setting-theme" checked="checked"><span class="icon-check"></span><span class="split"><span class="color bg-info"></span><span class="color bg-info-light"></span></span><span class="color bg-white"></span></label></div>
                           </div>
                           <div class="col mb-2">
                              <div class="setting-color"><label data-load-css="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/theme-b.css"><input type="radio" name="setting-theme"><span class="icon-check"></span><span class="split"><span class="color bg-green"></span><span class="color bg-green-light"></span></span><span class="color bg-white"></span></label></div>
                           </div>
                           <div class="col mb-2">
                              <div class="setting-color"><label data-load-css="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/theme-c.css"><input type="radio" name="setting-theme"><span class="icon-check"></span><span class="split"><span class="color bg-purple"></span><span class="color bg-purple-light"></span></span><span class="color bg-white"></span></label></div>
                           </div>
                           <div class="col mb-2">
                              <div class="setting-color"><label data-load-css="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/theme-d.css"><input type="radio" name="setting-theme"><span class="icon-check"></span><span class="split"><span class="color bg-danger"></span><span class="color bg-danger-light"></span></span><span class="color bg-white"></span></label></div>
                           </div>
                        </div>
                        <div class="row row-flush mb-2">
                           <div class="col mb-2">
                              <div class="setting-color"><label data-load-css="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/theme-e.css"><input type="radio" name="setting-theme"><span class="icon-check"></span><span class="split"><span class="color bg-info-dark"></span><span class="color bg-info"></span></span><span class="color bg-gray-dark"></span></label></div>
                           </div>
                           <div class="col mb-2">
                              <div class="setting-color"><label data-load-css="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/theme-f.css"><input type="radio" name="setting-theme"><span class="icon-check"></span><span class="split"><span class="color bg-green-dark"></span><span class="color bg-green"></span></span><span class="color bg-gray-dark"></span></label></div>
                           </div>
                           <div class="col mb-2">
                              <div class="setting-color"><label data-load-css="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/theme-g.css"><input type="radio" name="setting-theme"><span class="icon-check"></span><span class="split"><span class="color bg-purple-dark"></span><span class="color bg-purple"></span></span><span class="color bg-gray-dark"></span></label></div>
                           </div>
                           <div class="col mb-2">
                              <div class="setting-color"><label data-load-css="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/theme-h.css"><input type="radio" name="setting-theme"><span class="icon-check"></span><span class="split"><span class="color bg-danger-dark"></span><span class="color bg-danger"></span></span><span class="color bg-gray-dark"></span></label></div>
                           </div>
                        </div>
                     </div>
                     <div class="p-2">
                        <h4 class="text-muted text-thin">Layout</h4>
                        <div class="clearfix">
                           <p class="float-left">Fixed</p>
                           <div class="float-right"><label class="switch"><input id="chk-fixed" type="checkbox" data-toggle-state="layout-fixed"><span></span></label></div>
                        </div>
                        <div class="clearfix">
                           <p class="float-left">Boxed</p>
                           <div class="float-right"><label class="switch"><input id="chk-boxed" type="checkbox" data-toggle-state="layout-boxed"><span></span></label></div>
                        </div>
                        <div class="clearfix">
                           <p class="float-left">RTL</p>
                           <div class="float-right"><label class="switch"><input id="chk-rtl" type="checkbox"><span></span></label></div>
                        </div>
                     </div>
                     <div class="p-2">
                        <h4 class="text-muted text-thin">Aside</h4>
                        <div class="clearfix">
                           <p class="float-left">Collapsed</p>
                           <div class="float-right"><label class="switch"><input id="chk-collapsed" type="checkbox" data-toggle-state="aside-collapsed"><span></span></label></div>
                        </div>
                        <div class="clearfix">
                           <p class="float-left">Collapsed Text</p>
                           <div class="float-right"><label class="switch"><input id="chk-collapsed-text" type="checkbox" data-toggle-state="aside-collapsed-text"><span></span></label></div>
                        </div>
                        <div class="clearfix">
                           <p class="float-left">Float</p>
                           <div class="float-right"><label class="switch"><input id="chk-float" type="checkbox" data-toggle-state="aside-float"><span></span></label></div>
                        </div>
                        <div class="clearfix">
                           <p class="float-left">Hover</p>
                           <div class="float-right"><label class="switch"><input id="chk-hover" type="checkbox" data-toggle-state="aside-hover"><span></span></label></div>
                        </div>
                        <div class="clearfix">
                           <p class="float-left">Show Scrollbar</p>
                           <div class="float-right"><label class="switch"><input id="chk-scroll" type="checkbox" data-toggle-state="show-scrollbar" data-target=".sidebar"><span></span></label></div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="app-chat" role="tabpanel">
                     <h3 class="text-center text-thin mt-4">Connections</h3>
                     <div class="list-group">
                        <!-- START list title-->
                        <div class="list-group-item border-0"><small class="text-muted">ONLINE</small></div><!-- END list title-->
                        <div class="list-group-item list-group-item-action border-0">
                           <div class="media"><img class="align-self-center mr-3 rounded-circle thumb48" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/user/05.jpg" alt="Image">
                              <div class="media-body text-truncate"><a href="#"><strong>Juan Sims</strong></a><br><small class="text-muted">Designeer</small></div>
                              <div class="ml-auto"><span class="circle bg-success circle-lg"></span></div>
                           </div>
                        </div>
                        <div class="list-group-item list-group-item-action border-0">
                           <div class="media"><img class="align-self-center mr-3 rounded-circle thumb48" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/user/06.jpg" alt="Image">
                              <div class="media-body text-truncate"><a href="#"><strong>Maureen Jenkins</strong></a><br><small class="text-muted">Designeer</small></div>
                              <div class="ml-auto"><span class="circle bg-success circle-lg"></span></div>
                           </div>
                        </div>
                        <div class="list-group-item list-group-item-action border-0">
                           <div class="media"><img class="align-self-center mr-3 rounded-circle thumb48" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/user/07.jpg" alt="Image">
                              <div class="media-body text-truncate"><a href="#"><strong>Billie Dunn</strong></a><br><small class="text-muted">Designeer</small></div>
                              <div class="ml-auto"><span class="circle bg-danger circle-lg"></span></div>
                           </div>
                        </div>
                        <div class="list-group-item list-group-item-action border-0">
                           <div class="media"><img class="align-self-center mr-3 rounded-circle thumb48" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/user/08.jpg" alt="Image">
                              <div class="media-body text-truncate"><a href="#"><strong>Tomothy Roberts</strong></a><br><small class="text-muted">Designeer</small></div>
                              <div class="ml-auto"><span class="circle bg-warning circle-lg"></span></div>
                           </div>
                        </div><!-- START list title-->
                        <div class="list-group-item border-0"><small class="text-muted">OFFLINE</small></div><!-- END list title-->
                        <div class="list-group-item list-group-item-action border-0">
                           <div class="media"><img class="align-self-center mr-3 rounded-circle thumb48" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/user/09.jpg" alt="Image">
                              <div class="media-body text-truncate"><a href="#"><strong>Lawrence Robinson</strong></a><br><small class="text-muted">Designeer</small></div>
                              <div class="ml-auto"><span class="circle bg-warning circle-lg"></span></div>
                           </div>
                        </div>
                        <div class="list-group-item list-group-item-action border-0">
                           <div class="media"><img class="align-self-center mr-3 rounded-circle thumb48" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/img/user/10.jpg" alt="Image">
                              <div class="media-body text-truncate"><a href="#"><strong>Tyrone Owens</strong></a><br><small class="text-muted">Designeer</small></div>
                              <div class="ml-auto"><span class="circle bg-warning circle-lg"></span></div>
                           </div>
                        </div>
                     </div>
                     <div class="px-3 py-4 text-center">
                        <!-- Optional link to list more users--><a class="btn btn-purple btn-sm" href="#" title="See more contacts"><strong>Load more..</strong></a></div><!-- Extra items-->
                     <div class="px-3 py-2">
                        <p><small class="text-muted">Tasks completion</small></p>
                        <div class="progress progress-xs m-0">
                           <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"><span class="sr-only">80% Complete</span></div>
                        </div>
                     </div>
                     <div class="px-3 py-2">
                        <p><small class="text-muted">Upload quota</small></p>
                        <div class="progress progress-xs m-0">
                           <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"><span class="sr-only">40% Complete</span></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </nav><!-- END Off Sidebar (right)-->
      </aside><!-- Main section-->
      <section class="section-container">
         <!-- Page content-->
         <div class="content-wrapper">
			<div class="content-heading">
               <div><?php echo $this->title; ?><small data-localize="dashboard.WELCOME"></small></div><!-- START Language list-->
			   <!--
               <div class="ml-auto">
                  <div class="btn-group"><button class="btn btn-secondary dropdown-toggle dropdown-toggle-nocaret" type="button" data-toggle="dropdown">English</button>
                     <div class="dropdown-menu dropdown-menu-right-forced animated fadeInUpShort" role="menu"><a class="dropdown-item" href="#" data-set-lang="en">English</a><a class="dropdown-item" href="#" data-set-lang="es">Spanish</a></div>
                  </div>
               </div>
			   -->
			   <!-- END Language list-->
            </div>
			<?= $content ?>
		</div>
      </section>
	  <!-- Page footer-->
      <footer class="footer-container"><span>&copy; My Company <?= date('Y') ?> <?= Yii::powered() ?></span></footer>
</div>

<?php $this->endBody() ?>

</body>
</html>

<!-- =============== VENDOR SCRIPTS ===============-->
 <!-- MODERNIZR-->
   <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/modernizr/modernizr.custom.js"></script><!-- STORAGE API-->
   <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/js-storage/js.storage.js"></script><!-- SCREENFULL-->
   <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/screenfull/dist/screenfull.js"></script><!-- i18next-->
   <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/i18next/i18next.js"></script>
   <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/i18next-xhr-backend/i18nextXHRBackend.js"></script>

   <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/popper.js/dist/umd/popper.js"></script>
   <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/bootstrap/dist/js/bootstrap.js"></script><!-- =============== PAGE VENDOR SCRIPTS ===============-->
   <!-- SLIMSCROLL-->
   <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/jquery-slimscroll/jquery.slimscroll.js"></script><!-- SPARKLINE-->
   <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/jquery-sparkline/jquery.sparkline.js"></script><!-- FLOT CHART-->
   <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/flot/jquery.flot.js"></script>
   <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/jquery.flot.tooltip/js/jquery.flot.tooltip.js"></script>
   <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/flot/jquery.flot.resize.js"></script>
   <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/flot/jquery.flot.pie.js"></script>
   <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/flot/jquery.flot.time.js"></script>
   <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/flot/jquery.flot.categories.js"></script>
   <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/jquery.flot.spline/jquery.flot.spline.js"></script><!-- EASY PIE CHART-->
   <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/easy-pie-chart/dist/jquery.easypiechart.js"></script><!-- MOMENT JS-->
   <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/vendor/moment/min/moment-with-locales.js"></script><!-- =============== APP SCRIPTS ===============-->
   <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/app.js"></script>

<?php $this->endPage() ?>