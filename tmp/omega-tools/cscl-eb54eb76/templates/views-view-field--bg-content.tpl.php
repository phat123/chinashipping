<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */
?>
<?php
	/* $num_image= count($field->view->result);
	
	  echo "<pre>";
	print_r($row->_field_data['nid']['entity']->field_url['und'][0]['uri']);
	echo "</pre>";
	exit();  */

		$url=$row->_field_data['nid']['entity']->field_url['und'][0]['value'];
		$uri=$row->_field_data['nid']['entity']->field_bg_content_image['und'][0]['uri'];
		$url_img=file_create_url($uri);	
		if(isset($_GET['h'])){
			$height=$_GET['h'];
		}
		else{
			$height=700;
		}
	
	//echo $path;
/* print $output;  */?>
<div class="bg-content" >
<?php if(trim($url)!=''&& $url!=null):?>
	<a href="<?php echo $url;?>"><img class="content_img" src="<?php echo $url_img;?>" width="100%" <?php if($height!=null){echo "height='".$height."px'";}?> ></a></div>
<?php else:?>
	<img class="content_img" src="<?php echo $url_img;?>" width="100%" <?php if($height!=null){echo "height='".$height."px'";}?>></div>
<?php endif;?>
