$(document).ready(function () {


	if ('.select') {
		initSelectPones();
	}

	/**
	 * Initialization phone code DD
	 */
	function initSelectPones() {

		const phones = require('../data.json');

		/**
		 * Init phone code list
		 */
		phones.forEach((el, i) => {
			$('.select-list').append(`<div class="select-list__item">+${el.phoneCode} (${el.code})</div>`)
		})
	}

	/**
	 * toggle select list 
	 */
	$('.select-btn').on('click', function () {
		$('.select').toggleClass('select--opened');
		$('.select-list').slideToggle();
	})

	/**
	 * close select list
	 */
	function closeSelect() {
		$('.select').removeClass('select--opened');
		$('.select-list').slideUp();
	}

	$(document).click(function (event) {
		var $target = $(event.target);
		if (!$target.closest('.select-btn').length && !$target.closest('.select-list').length) {
			closeSelect()
		}
	});

	/**
	 * set phone code
	 */
	$('.select-list__item').on('click', function () {
		let selectedCode = $(this).text();
		let selectedFormattedCode = selectedCode.replace(/[^+\d]/g, '');
		closeSelect();

		$('.select-btn__code').text(selectedCode);
		$('#select-result').data('code', selectedFormattedCode);

		mergePhone();
	})

	/**
	 * merge phone code and inputing phone
	 */
	function mergePhone() {
		let value = $('.select-input').val().replace(/\D/g, '');
		$('.select-input').val(value);

		if (value.length) {
			$('#select-result').val(`${$('#select-result').data('code')}${value}`)
		} else {
			$('#select-result').val('');
		}
	}

	$('.select-input').on('input', mergePhone);


})
