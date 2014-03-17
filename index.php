<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="-1" />
  <meta http-equiv="Title" content="<?php echo _('My awesome landing page') ?>" />
  <meta name="Title" content="<?php echo _('My awesome landing page') ?>" />
  <meta name="Author" content="<?php echo _('The authors') ?>" />
  <meta name="Description" content="<?php echo _('A short description of the page.') ?>" />
  <meta name="Keywords" content="<?php echo _('Some keywords') ?>" />
  <meta name="Distribution" content="global" />
  <meta name="Robots" content="index, follow" />
  
  <title><?php echo _('My awesome landing page') ?></title>
  <link rel="stylesheet" type="text/css" href="base.css" media="projection,screen" />  
</head>

<body id="top">

<header>
  <img src="logo.png" alt="<?php echo _('The ALT logo') ?>" />
  <h1><?php echo _('My awesome landing page') ?></h1>
  <h2><?php echo _('Some short paragraph to define the mission of the company/product.') ?></h2>
</header>

<nav>
  <ul>
    <li>English</li>
    <li>Español</li>
    <li>Italiano</li>
    <li>Français</li>
    <li>...</li>
  </ul>
</nav>

<section id="faq">
  <h1><?php echo _('Description') ?></h1>
  <p><?php echo _('An answer') ?></p>
  
  <h1><?php echo _('Another description') ?></h1>
  <p><?php echo _('Another answer') ?></p>
</section>

<section id="form">
  <form action="dowant.php" method="post">
    <label for="name"><?php echo _('Name') ?></label>
    <input name="name" type="text" />
    
    <label for="email"><?php echo _('Email') ?></label>
    <input name="email" type="text" />
    
    <input name="agree-terms" type="checkbox" />
    <a href="terms.php"><?php echo _('I agree to the conditions.') ?></a>
    
    <input type="submit" />
  </form>
</section>

<footer>
  <p>
    &copy; <?php echo strftime('%Y') ?>
  </p>
  <ul>
    <li><a href="http://www.w3.org/WAI/WCAG1AA-Conformance" title="<?php echo _('Accesible site') ?>" rel="external">AAA</a></li>
    <li><a href="http://browsehappy.com" title="<?php echo _('Use a good browser') ?>" rel="external"><?php echo _('Browse Happy') ?></a></li>
  </ul>
  <!--<p><?php echo sprintf( _("Last modification: %s"), strftime('%c') ) ?></p>-->
</footer>

</body>
</html>
