<?php if(!$indexing) { exit; } ?>
<h1><?php echo $LANG[13005]; ?></h1>

<div style='padding: 0 20px;'>
	
	<?php echo $LANG[12084]; ?>
	<br /><br />
	<?php echo $LANG[12085]; ?>
	<br /><br />
	<div style='text-align:center;'><span style='font-size: 20px;'><?php echo $admin_email; ?></span></div>
	
	<br /><br />
	
	<?php echo $LANG[12086]; ?>
	
	<br /><br />
	
	<?php echo $LANG[12087]; ?>
	<br /><br /><br />
</div>

<div style='display:table;margin: 0 auto;'><a target='_blank' href='http://m.me/l2ageofodin' class='default dbig'>MESSENGER</a></div>

<?php if($face_on == 1) { ?>

<br /><div style='text-align:center;'><?php echo $LANG[12089]; ?></div><br />

<div style='display:table;margin: 0 auto;'><a target='_blank' href='<?php echo $facePage; ?>' class='default dbig'>Facebook</a></div>
<br /><br />

<div class='faceIndex'>
	<div class="fb-page" data-href="<?php echo $facePage; ?>" data-width="468" data-height="290" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="<?php echo $facePage; ?>"></blockquote></div></div>
</div>
<?php } ?>

