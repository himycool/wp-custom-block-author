<?php
$author = get_the_author_meta('ID', $authorID);
$author_meta = get_user_meta($author);
//$author_url = get_author_posts_url($authorID);
$nickname = (!empty($author_meta['nickname'][0])) ? $author_meta['nickname'][0] : '';
$first_name = (!empty($author_meta['first_name'][0])) ? $author_meta['first_name'][0] : '';
$last_name = (!empty($author_meta['last_name'][0])) ? $author_meta['last_name'][0] : '';
$name = ($first_name && $last_name) ? $first_name . ' ' . $last_name : $nickname;
//$designation = (!empty($author_meta['designation'][0])) ? $author_meta['designation'][0] : '';
$description = (!empty($author_meta['description'][0])) ? $author_meta['description'][0] : '';
//$image = (get_the_author_meta( 'image' )) ? get_the_author_meta( 'image' ) : " ";
$image = get_field('profile_photo', 'user_'.$authorID);
?>
<div class="post__author-bio">
    <div class="post__author-bio-left">
    <figure>
		<img src="<?php echo $image; ?>" alt="user-avatar">
	</figure>
    </div>
    <div class="post__author-bio-right">
        <div class="post__author-details">
            <div class="post__author-name">
                <h5><a href="#"><?php echo $name; ?></a></h5>
                <h6><?php //echo $designation; ?></h6>
            </div>
        </div>
        <p><?php echo $description; ?></p>        
    </div>
</div>