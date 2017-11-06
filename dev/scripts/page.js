"use strict";

(function ready() {

	var _polyfills = require('./polyfills');
	var _extendStandartPrototypes = require('./extendStandartPrototypes');
	var CustomSelect = require('./customSelect');
	var SimpleMenu = require('./simpleMenu');
	var SimpleVerticalSlider = require('./simpleVerticalSlider');
	var SliderWithControlls = require('./slider-sliderWithControlls');
	var LangSwitcher = require('./langSwitcher');

	_polyfills.init();
	_extendStandartPrototypes.init();

	var headerElem = document.querySelector('#header');
	if (headerElem) {
		var header = new SimpleMenu({
			elem: headerElem,
			openBtn: document.querySelector('#header_menu_open_btn'),
			closeBtn: document.querySelector('#header_menu_close_btn')
		});
	}

	var langSelectElemsArr = [];

	var langSelectHeaderElem = document.querySelector('#lang_switch_header');
	if (langSelectHeaderElem) {
		var langSelectHeader = new CustomSelect({
			elem: langSelectHeaderElem
		});

		langSelectElemsArr.push(langSelectHeaderElem);
	}

	var langSelectFooterElem = document.querySelector('#lang_switch_footer');
	if (langSelectFooterElem) {
		var langSelectFooter = new CustomSelect({
			elem: langSelectFooterElem
		});

		langSelectElemsArr.push(langSelectFooterElem);
	}

	var langSwitcher = new LangSwitcher({
		langSelectElemsArr: langSelectElemsArr
	});

	var productSliderElem = document.querySelector('#product_vertical_slider');
	if (productSliderElem) {
		function customMoveCheck(self, slideIndex, slidesArr, mainElem) {
			if (mainElem.classList.contains('text_slider_transition')) {
				return false;
			}
			return true;
		}

		var imageSlider = new SimpleVerticalSlider({
			elem: productSliderElem,
			transitionDuration: 0.5,
			overflowHiddenContainerSelector: '.image_overflow_hidden_container',
			overflowContainerSelector: '.image_overflow_block',
			slideSelector: '.image_slide',
			transitionTopWidthArr: ['md', 'lg'],
			transitionOpacityWidthArr: ['sm'],
			transitionInProcessClass: 'image_slider_transition',
			controllsSelector: '',
			customMoveCheck: customMoveCheck
		});

		var textSlider = new SimpleVerticalSlider({
			elem: productSliderElem,
			transitionDuration: 0.5,
			overflowHiddenContainerSelector: '.text_overflow_hidden_container',
			overflowContainerSelector: '.text_overflow_block',
			slideSelector: '.text_slide',
			transitionTopWidthArr: [],
			transitionOpacityWidthArr: ['sm', 'md', 'lg'],
			transitionInProcessClass: 'text_slider_transition',
			controllsSelector: '',
			customMoveCheck: customMoveCheck
		});
	}

	var feedbackSliderElem = document.querySelector('#feedback_slider');
	if (feedbackSliderElem) {
		var feedbackSlider = new SliderWithControlls({
			elem: feedbackSliderElem,
			delay: 5000,
			breakPoint: 0,
			controllsSelector: '#page_slide5_slider_controlls'
		});
	}

})();
