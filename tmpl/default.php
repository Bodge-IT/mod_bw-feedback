<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_category
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$number_cols="2";
$incolumncount = floor(count($list)/$number_cols)+1;
$count=0;
$colnumber=0;

$module = JModuleHelper::getModule('mod_articles_with_tags');
$moduleParams = new JRegistry($module->params);
//print_r($moduleParams);
$uri 		= JURI::current();
$enduri 	= end(explode("/", $uri));
$replacement = " - " . str_replace("Mtv","MTV",ucwords(str_replace("pride and","pride & ",str_replace("-"," ",$enduri))));
?>
<div class="uk-grid">
<div style="uk-width-1-1">
<ul class="category-module-enhanced<?php echo $moduleclass_sfx; ?>">
		<?php foreach ($list as $item) : ?>
		<?php //echo $count; ?>
			<?php //echo $incolumncount; ?>
			<li>
				<?php if ($params->get('link_titles') == 1) : ?>
					<a class="mod-articles-category-title <?php echo $item->active; ?>" href="<?php echo $item->link; ?>">
						<?php echo str_replace("Hen Party Dance Classes",$replacement,$item->title); ?>
					</a>
				<?php else : ?>
					<?php echo $item->title; ?>
				<?php endif; ?>			
			</li>
					<?php $count=$count+1; ?>
		<?php if ($count==$incolumncount) : ?>		
				<?php $count = 0; ?>
		<?php $colnumber = $colnumber+1; ?>
</ul></div><div class="uk-width-1-<?php echo $colnumber+1 ?>"><ul class="category-module-enhanced<?php echo $moduleclass_sfx; ?>">

		<?php endif; ?>	
		<?php endforeach; ?>	
</ul>
</div>
<div class="uk-clearfix"></div>
</div>

 