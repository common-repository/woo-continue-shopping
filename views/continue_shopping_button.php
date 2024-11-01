<div class="continue-shopping-wrapper">
    <?php
        $added_text = '';
        $store_url = get_permalink(get_page_by_path('store'));

        $return_to = apply_filters( 'woocommerce_continue_shopping_redirect', $store_url ? $store_url : get_permalink( wc_get_page_id( 'shop' ) ) );
        echo sprintf( '<a href="%s" class="button wc-forward">%s</a> %s', esc_url( $return_to ), esc_html__( 'Continue Shopping', 'woocommerce' ), esc_html( $added_text ) );
    ?>
</div>