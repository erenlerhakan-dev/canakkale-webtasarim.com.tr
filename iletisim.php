<!DOCTYPE html>
<html class="no-js" lang="tr" dir="ltr">

<head>
<title>Çanakkale Web Yazılım - Profesyonel Web Geliştirme ve Yazılım Çözümleri</title>
<meta name="description" content="Çanakkale Web Yazılım - Profesyonel Web Geliştirme ve Yazılım Çözümleri. Çanakkale, Türkiye'de profesyonel web geliştirme ve yazılım çözümleri. CRM, ERP, E-ticaret, Rezervasyon Sistemleri ve Laravel, React, Django ve daha fazlasıyla özel yazılım geliştirme.">

<?php include_once('head_meta.php'); ?>

</head>

<body>

<?php include_once('preloader.php'); ?>

<div class="header-area header-area--default">

<?php include_once('header.php'); ?>

</div>

<div id="main-wrapper">

<div class="site-wrapper-reveal">
<!--==================== Conact us Section Start ====================-->
<div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-lg-6">
<div class="conact-us-wrap-one mb-30">
<h3 class="heading">To make requests for <br>further information, <br><span class="text-color-primary">contact us</span> via our social channels. </h3>
<div class="sub-heading">We just need a couple of hours! <br> No more than 2 working days since receiving your issue ticket.</div>
</div>
</div>

<div class="col-lg-6 col-lg-6">
<div class="contact-form-wrap">

<h4>Bize Mesaj Gönderin</h4>

<form id="contact-form" action="assets/php/mail.php" method="post">
<div class="contact-form">
<div class="contact-input">
<div class="contact-inner">
<input name="con_name" type="text" placeholder="Name *" required>
</div>
<div class="contact-inner">
<input name="con_email" type="email" placeholder="Email *" required>
</div>
</div>
<div class="contact-inner">
<input name="con_subject" type="text" placeholder="Subject *" required>
</div>
<div class="contact-inner contact-message">
<textarea name="con_message" placeholder="Please describe what you need." required></textarea>
</div>
<div class="submit-btn mt-20">
<button class="ht-btn ht-btn-md" type="submit">Send message</button>
<p class="form-messege"></p>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

<div class="contact-us-info-wrappaer section-space--pb_100">
<div class="container">
<div class="row align-items-center">

<div class="col-lg-4 col-md-6">
<div class="conact-info-wrap mt-30">
<h5 class="heading mb-20">Adres</h5>
<ul class="conact-info__list">
<li>Esenler Mh. Ahmet P. Cd. No:19/17 Çanakkale</li>
</ul>
</div>
</div>

<div class="col-lg-4 col-md-6">
<div class="conact-info-wrap mt-30">
<h5 class="heading mb-20">Telefon</h5>
<ul class="conact-info__list">
<li>+90 534 792 25 31</li>
</ul>
</div>
</div>

<div class="col-lg-4 col-md-6">
<div class="conact-info-wrap mt-30">
<h5 class="heading mb-20">E-posta</h5>
<ul class="conact-info__list">
<li>info@cozumcloud.com.tr</li>
</ul>
</div>
</div>

</div>
</div>
</div>

</div>

<?php include_once('footer.php'); ?>

</div>

<a href="#" class="scroll-top" id="scroll-top">
<i class="arrow-top fas fa-chevron-up"></i>
<i class="arrow-bottom fas fa-chevron-up"></i>
</a>

<?php include_once('mobile_menu.php'); ?>

<?php include_once('footer_scripts.php'); ?>

</body>

</html>