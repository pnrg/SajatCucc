<?php
defined('_JEXEC') or die;
$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base() . 'modules/mod_forum/tmpl/css/forum.css');
?>

<div id="icon-hirdetesek">

<i class="fa fa-comments-o fa-4x"></i>
</div>
<div id="kozepremind">
<?php echo JText::_('MOD_FORUM_OSSZES_POST'),'<strong>'.$maxpost.'</strong>', JText::_( 'MOD_FORUM_OSSZES_POST2' ),'<strong>'.$ossztema.'</strong>', JText::_('MOD_FORUM_OSSZES_POST3'), '<strong>'.$osszmegtekintes.'</strong>', JText::_('MOD_FORUM_KATEGORIA'); ?>
</br>
</br>
<div id="gomb">
<a class="btn btn-success" href="http://localhost/testkeng/index.php/apro/ujhirdetes">
  <i class="fa fa-mail-forward fa-lg"></i> <?php echo JText::_('MOD_FORUM_UGRAS'); ?> </a>
</div>
</div>