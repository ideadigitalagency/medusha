<div class="product-charac-b2c">

    <h1 class="charac-b2b__title charac-b2b__title_padd"><?php the_title(); ?></h1>

    <div class="charac-b2b__param-name charac-b2b__param-name_padd">Выберите пожалуйста вкус</div>
    <form action="">

        <div class="charac-b2b__param-list charac-b2b__param-list_padd">
            <div class="charac-b2b__param-item charac-b2b__param-item_padd charac-b2b__param-item_padd-s">
                <input type="radio" name="group" class="charac-b2b-radio_padd" /> Липа
            </div>
            <div class="charac-b2b__param-item charac-b2b__param-item_padd charac-b2b__param-item_padd-s">
                <input type="radio" name="group" class="charac-b2b-radio_padd"/>Гречиха
            </div>
            <div class="charac-b2b__param-item charac-b2b__param-item_padd charac-b2b__param-item_padd-s">
                <input type="radio" name="group" class="charac-b2b-radio_padd"/>Разнотравье
            </div>
            <div class="charac-b2b__param-item">
                <input type="radio" name="group" class="charac-b2b-radio_padd"/>Акация
            </div>
        </div>

        <div class="charac-b2b__param-name charac-b2b__param-name_padd">Выберите пожалуйста объем</div>
        <div class="charac-b2b__param-list charac-b2b__param-list_padd">
            <div class="charac-b2b__param-item charac-b2b__param-item_padd charac-b2b__param-item_padd-s">
                    <input type="radio" name="group2" />0.5 мл
            </div>
            <div class="charac-b2b__param-item charac-b2b__param-item_padd charac-b2b__param-item_padd-s">
                    <input type="radio" name="group2" />0.7 мл
            </div>
            <div class="charac-b2b__param-item">
                <input type="radio" name="group2" />1 л
            </div>
        </div>

        <div class="charac-b2b__param-name charac-b2b__param-name_padd">Минимальное количество</div>
        <div class="charac-b2b__param-list charac-b2b__param-list_padd">
            <div class="charac-b2b__param-item">
                <div class="custom-select-bvzk charac-b2b-select">
                    <select style="width:100%;">
                            <option value="0">1</option>
                            <option value="1">2</option>
                            <option value="2">30</option>
                    </select>
                </div>
                <?php
                /**
                 * @since 3.0.0.
                 */
                do_action( 'woocommerce_before_add_to_cart_quantity' );

                woocommerce_quantity_input( array(
                    'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
                    'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
                    'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantity'] ) : $product->get_min_purchase_quantity(),
                ) );

                /**
                 * @since 3.0.0.
                 */
                do_action( 'woocommerce_after_add_to_cart_quantity' );
                ?>
            </div>
        </div>
    </form> 
    <div class="charac-b2b__param-name charac-b2b__param-name_padd">Цена</div>
    <div class="charac-b2b__param-item charac-b2b__param-item_padd"><?php echo $product->get_price_html(); ?>грн</div>

    <div class="single-text__link single-text__link_padd main__btn">
        <div class="woocommerce-variation-add-to-cart variations_button">
            
            <button type="submit" class="single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
            <input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>" />
            <input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
            <input type="hidden" name="variation_id" class="variation_id" value="0" />
        </div>
    </div>
</div>