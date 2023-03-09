<?php
$author = get_user_by('ID', $authorID);
$author_meta = get_user_meta($authorID);
$nickname = (!empty($author_meta['nickname'][0])) ? $author_meta['nickname'][0] : '';
$first_name = (!empty($author_meta['first_name'][0])) ? $author_meta['first_name'][0] : '';
$last_name = (!empty($author_meta['last_name'][0])) ? $author_meta['last_name'][0] : '';
$name = ($first_name && $last_name) ? $first_name . ' ' . $last_name : $nickname;
//$designation = get_field('designation', 'user_'.$authorID);
$image = get_field('profile_photo', 'user_'.$authorID);
?>

<div class="bs-post__author has-text-align-center">
	<div class="profile-desc">
		<figure>
			<img src="<?php echo $image; ?>" alt="user-avatar">
		</figure>
		<span class="prefix"><?php echo (!empty($prefix) ? $prefix : '')?></span>
		<span class="name">
			<?php
			echo $name;
			// if($designation && $designation!==''):
			// 	echo ", $designation";
			// endif;
			?>
		</span>
	</div>
</div>
