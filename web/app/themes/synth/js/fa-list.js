jQuery(document).ready(function(){
	jQuery('.fa_list i').click(function(){
		var value = jQuery(this).attr('data-value');
		jQuery('.fa_list i').removeClass('selected');
		jQuery(this).addClass('selected');
		jQuery('.fa_list_block .actual-icon i').attr('class', 'fa '+value);
		jQuery('.fa_list_block .wpb_vc_param_value').val(value);
	});

	jQuery('.fa_list_block .searchinput').keyup(function(){
		var searchValue = jQuery(this).val();
		jQuery('.fa_list i').removeClass('active');
		jQuery('.fa_list i').each(function(){
			var dataValue = jQuery(this).attr('data-value');
			if (dataValue.indexOf(searchValue) >= 0) {
				jQuery(this).addClass('active');
			}
		});
	})
});