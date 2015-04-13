jQuery(document).ready(function(){
	jQuery('.typcn_list span').click(function(){
		var value = jQuery(this).attr('data-value');
		jQuery('.typcn_list span').removeClass('selected');
		jQuery(this).addClass('selected');
		jQuery('.typcn_list_block .actual-icon span').attr('class', 'typcn '+value);
		jQuery('.typcn_list_block .wpb_vc_param_value').val(value);
	});

	jQuery('.typcn_list_block .searchinput').keyup(function(){
		var searchValue = jQuery(this).val();
		jQuery('.typcn_list span').removeClass('active');
		jQuery('.typcn_list span').each(function(){
			var dataValue = jQuery(this).attr('data-value');
			if (dataValue.indexOf(searchValue) >= 0) {
				jQuery(this).addClass('active');
			}
		});
	})
});