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
  <img src="logo.png" alt="<?php _('The ALT logo') ?>" />
  <h1><?php echo _('My awesome landing page') ?></h1>
  <h2><?php echo _('Some short paragraph to define the mission of the company/produce.') ?></h2>
</header>

<nav>
  <ul>
    <li>English</li>
    <li>Español</li>
    <li>Valencià/Català</li>
    <li>Italiano</li>
    <li>Français</li>
    <li>...</li>
  </ul>
</nav>

<section id="faq">
  <h1><?php _('Description') ?></h1>
  <p><?php _('An answer') ?></p>
  
  <h1><?php _('Another description') ?></h1>
  <p><?php _('Another answer') ?></p>
</section>

<section id="form">
  <form action="dowant.php" method="post">
    <?php echo _('Name') ?>
    <label for="name"><?php _('Name') ?></label>
    <input name="name" type="text" />
    
    <?php echo _('Email') ?>
    <label for="email"><?php _('Email') ?></label>
    <input name="email" type="text" />
    <input name="agree-terms" type="checkbox" /> <a href=""><?php echo _('I agree to the conditions.') ?></a>
  </form>
</section>

<footer>
  <p>
    &copy; <?php echo strftime('%Y') ?>
    <a href="http://prhlt.iti.upv.es" title="Pattern Recognition and Human Language Technology">PRHLT</a>
    <a href="http://www.upv.es" title="Universidad Politécnica de Valencia">UPV</a>
  </p>
  <ul>
    <li><a href="http://www.w3.org/WAI/WCAG1AA-Conformance" title="Accesible site" rel="external">AAA</a></li>
    <li><a href="http://browsehappy.com" title="Use a good browser" rel="external">Browse Happy</a></li>
  </ul>
  <!--<p><?php echo sprintf( _("Last modification: %s"), strftime('%c') ) ?></p>-->
</footer>

</body>
</html>
