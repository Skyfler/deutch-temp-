"use strict";

try {
	var Slider = require('./slider');
	var SliderControlls = require('./slider-sliderControlls');
} catch (err) {
	console.warn(err);
}

function SliderWithControlls(options) {
	this._controllsSelector = options.controllsSelector;
	this._decorationItems = !!options.decorationItems;

	options.name = options.name || 'SliderWithControlls';
	Slider.call(this, options);
}

SliderWithControlls.prototype = Object.create(Slider.prototype);
SliderWithControlls.prototype.constructor = SliderWithControlls;

SliderWithControlls.prototype._init = function() {
	Slider.prototype._init.apply(this, arguments);

	this._initControlls();
};

SliderWithControlls.prototype._initControlls = function() {
	if (!this._controllsSelector) return;

	var sliderControllsElem = document.querySelector(this._controllsSelector);
	if (sliderControllsElem) {
		this._sliderControlls = new SliderControlls({
			elem: sliderControllsElem,
			slidesCount: this.getSlidesCount(),
			slider: this,
			decorationItems: this._decorationItems
		});
	}
};

try {
	module.exports = SliderWithControlls;
} catch (err) {
	console.warn(err);
}
