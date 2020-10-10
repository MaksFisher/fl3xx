$(document).ready(function () {

	/**
	 * open/close select
	 */
	$('.select-btn').on('click', function () {

		if (!$(this).closest('.select').hasClass('select--opened')) {
			$('.select--opened').find('.select-list').slideUp();
			$('.select--opened').removeClass('select--opened');
		}

		$(this).closest('.select').toggleClass('select--opened');
		$(this).next().slideToggle();
	});

	/**
	 * close selects for click outside
	 */
	$(document).on('click', function (event) {
		let $target = $(event.target);
		if (!$target.closest($('.select')).length) {
			$('.select--opened').find('.select-list').slideUp();
			$('.select--opened').removeClass('select--opened');
		}
	});

	/**
	 * set active option
	 */
	$('.select-list__item').on('click', function () {
		const selectParent = $(this).closest('.select');
		selectParent.find('.select-result').text($(this).text());
		selectParent.find('.select-list__item--selected').removeClass('select-list__item--selected');
		$(this).addClass('select-list__item--selected');
		selectParent.find('input.form-field-hidden').val($(this).text());
		$('.select--opened').find('.select-list').slideUp();
		$('.select--opened').removeClass('select--opened');

	})

})