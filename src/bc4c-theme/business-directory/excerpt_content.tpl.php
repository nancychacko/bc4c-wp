<?php if ( $images->thumbnail ): ?>
    <?php echo $images->thumbnail->html; ?>
<?php endif; ?>
<?php
/* 
    <?php print_r($fields); ?>
*/
?>
<div class="listing-details">
    <?php 
        //listing/$f = $fields->filter('social');
        //print_r($f->value);
    ?>

    <?php foreach ( $fields->not('social') as $field ): ?>
        <?php echo $field->html; ?>
    <?php endforeach; ?>

    <?php
    $social = $fields->filter( 'social' );
    ?>
    <?php if ( $social ): ?>
    <div class="social-fields cf"><?php echo $social->html; ?></div>
    <?php endif; ?>
</div>
