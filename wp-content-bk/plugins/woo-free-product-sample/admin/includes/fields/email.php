
<input class="<?php echo esc_attr( $value['class'] ); ?>" <?php if( isset($value['is_pro']) && $value['is_pro'] == true && !\Woo_Free_Product_Sample_Helper::is_pro()) { ?>disabled<?php } ?> id="<?php echo $value['name']; ?>" type="email" name="<?php echo $this->_optionName."[".$value['name']."]"; ?>" value="<?php echo isset( $setting_options[$value['name']] ) ? $setting_options[$value['name']] : ''; ?>" placeholder="<?php echo $value['placeholder']; ?>">