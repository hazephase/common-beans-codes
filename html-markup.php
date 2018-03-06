<?php
    {$markup_id}_before_markup // fires before the opening markup.
    {$markup_id}_prepend_markup // fires after the opening markup (not available for selfclosed markup).
    {$markup_id}_append_markup // fires before the closing markup (not available for selfclosed markup).
    {$markup_id}_after_markup // fires after the closing markup.

beans html markup
    beans_open_markup_e( 'markup_id', 'html_tag',  array( 'attribute' => 'attribute-value' ) );

    	echo '<!-- some content -->';

    beans_close_markup_e( 'markup_id', 'html_tag' );

beans_add_attribute( '', '', '' );
