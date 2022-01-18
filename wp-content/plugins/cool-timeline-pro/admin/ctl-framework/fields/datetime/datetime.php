<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Field: Date picker
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */

class CTL_Field_datetime extends CTL_Fields {

	public function __construct( $field, $value = '', $unique = '' ) {
		parent::__construct( $field, $value, $unique );
	}

	public function render() {
		add_action('admin_footer', 'wpc_admin_datetimepicker_js_function');
		echo $this->field_before();
		
		echo '<input type="text" name="'. $this->field_name() .'" id="'.$this->field_name().'" value="'. esc_attr( $this->value ) .'" class="ctl-date-picker" ' . $this->field_attributes() .'/>';
		echo $this->field_after();

		wp_register_script( 'ctl-flatpickr-script',CTP_PLUGIN_URL.'/assets/js/flatpickr.js', array('jquery'), CTLPV, true);
		wp_register_style( 'ctl-flatpickr-styles', CTP_PLUGIN_URL.'/assets/css/flatpickr.css' );
		
		wp_enqueue_style('ctl-flatpickr-styles');		
		wp_enqueue_script('ctl-flatpickr-script');

	}
}

function wpc_admin_datetimepicker_js_function() {
	echo '<script>jQuery(function() {
			jQuery(".ctl-date-picker").flatpickr({
				dateFormat: "m/d/Y h:i K",
				enableTime: true,
				minuteIncrement:1,
				defaultMinute:0,
				minDate:"01/01/1000",
				maxDate:"12/31/2050", 	 
			}); 
		});
	</script>';
}

