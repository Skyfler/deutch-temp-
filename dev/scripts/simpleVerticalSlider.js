"use strict";

try {
	var Helper = require('./helper');
} catch (err) {
	console.warn(err);
}

function SimpleVerticalSlider(options) {
	options.name = options.name || 'SimpleVerticalSlider';
	Helper.call(this, options);

	this._elem = options.elem;
	this._transitionDuration = options.transitionDuration || 0.5;
	this._overflowHiddenContainerSelector = options.overflowHiddenContainerSelector || '.overflow_hidden_container';
	this._overflowContainerSelector = options.overflowContainerSelector || '.overflow_block';
	this._controllsSelector = options.controllsSelector || '';
	this._slideSelector = options.slideSelector || '.slider_slide';
	this._transitionTopWidthArr = options.transitionTopWidthArr || [];
	this._transitionOpacityWidthArr = options.transitionOpacityWidthArr || [];
	this._transitionInProcessClass = options.transitionInProcessClass || '';
	this._customMoveCheck = options.customMoveCheck || false
	this._sliderActiveWidthArr = this._transitionTopWidthArr.concat(this._transitionOpacityWidthArr);

	this._onClick = this._onClick.bind(this);
	this._onTransitionTopEnd = this._onTransitionTopEnd.bind(this);
	this._onTransitionOpacity1End = this._onTransitionOpacity1End.bind(this);
	this._onTransitionOpacity2End = this._onTransitionOpacity2End.bind(this);
	this._onWindowResize = this._onWindowResize.bind(this);

	this._init();
}

SimpleVerticalSlider.prototype = Object.create(Helper.prototype);
SimpleVerticalSlider.prototype.constructor = SimpleVerticalSlider;

SimpleVerticalSlider.prototype._init = function() {
	this._overflowContainer = this._elem.querySelector(this._overflowHiddenContainerSelector);
	this._overflowBlock = this._overflowContainer.querySelector(this._overflowContainerSelector);
	this._sidesArr = this._overflowBlock.querySelectorAll(this._slideSelector);

	this._setInitialPosition();

	this._addListener(this._elem, 'click', this._onClick);
	this._addListener(window, 'resize', this._onWindowResize);
};

SimpleVerticalSlider.prototype._setInitialPosition = function() {
	this._removeListener(this._elem, 'transitionend', this._onTransitionTopEnd);
	this._removeListener(this._elem, 'transitionend', this._onTransitionOpacity1End);
	this._removeListener(this._elem, 'transitionend', this._onTransitionOpacity2End);

	this._activeSlideIndex = 0;
	var slide = this._sidesArr[this._activeSlideIndex];

	this._setVendorCss(this._overflowBlock, 'transition', '');
	for (var i = 0; i < this._sidesArr.length; i++) {
		this._setVendorCss(this._sidesArr[i], 'transition', '');
		this._sidesArr[i].style.opacity = '';
	}

	var offsetTop = slide.offsetTop;
	var offsetHeight = slide.offsetHeight;
	this._overflowBlock.style.top = -offsetTop + 'px';
	this._overflowContainer.style.height = slide.offsetHeight + 'px';

	this._setActiveSliderControll(this._activeSlideIndex);

	this._transitionInProgress = false;
	if (this._transitionInProcessClass) {
		this._elem.classList.remove(this._transitionInProcessClass);
	}
};

SimpleVerticalSlider.prototype._moveSlide = function(index) {
	var success = false;

	if (this._transitionInProgress) return success;

	if (this._customMoveCheck && !this._customMoveCheck(this, index, this._sidesArr, this._elem)) return success;

	if (this._transitionOpacityWidthArr.indexOf(this._checkScreenWidth()) !== -1) {
		success = this._moveSlideWithOpacity(index);
	} else if (this._transitionTopWidthArr.indexOf(this._checkScreenWidth()) !== -1) {
		success = this._moveSlideWithScroll(index);
	}

	return success;
};

SimpleVerticalSlider.prototype._moveSlideWithScroll = function(index) {
	var slide = this._sidesArr[index];
	if (!slide || index === this._activeSlideIndex) return false;

	this._currentTransitionElem = this._overflowBlock;
	this._currentTransitionProp = 'top';

	this._activeSlideIndex = index;

	this._setVendorCss(this._currentTransitionElem, 'transition', this._currentTransitionProp + ' ease ' + this._transitionDuration + 's');

	this._addListener(this._elem, 'transitionend', this._onTransitionTopEnd);

	this._transitionInProgress = true;
	if (this._transitionInProcessClass) {
		this._elem.classList.add(this._transitionInProcessClass);
	}

	var offsetTop = slide.offsetTop;
	var offsetHeight = slide.offsetHeight;
	this._currentTransitionElem.style[this._currentTransitionProp] = -offsetTop + 'px';
	this._overflowContainer.style.height = slide.offsetHeight + 'px';
	return true;
};

SimpleVerticalSlider.prototype._onTransitionTopEnd = function(e) {
	var target = e.target;
	var prop = e.propertyName;
	if (!target || target !== this._currentTransitionElem || !prop || prop !== this._currentTransitionProp) return;

	this._removeListener(this._elem, 'transitionend', this._onTransitionTopEnd);

	this._setVendorCss(this._currentTransitionElem, 'transition', '');

	delete this._currentTransitionElem;
	delete this._currentTransitionProp;

	this._transitionInProgress = false;
	if (this._transitionInProcessClass) {
		this._elem.classList.remove(this._transitionInProcessClass);
	}
};

SimpleVerticalSlider.prototype._moveSlideWithOpacity = function(index) {
	var slide = this._sidesArr[index];
	if (!slide || index === this._activeSlideIndex) return false;

	this._currentTransitionElem = this._sidesArr[this._activeSlideIndex];
	this._currentTransitionProp = 'opacity';

	this._activeSlideIndex = index;

	this._setVendorCss(this._currentTransitionElem, 'transition', this._currentTransitionProp + ' ease ' + (this._transitionDuration / 2) + 's');

	this._addListener(this._elem, 'transitionend', this._onTransitionOpacity1End);

	this._transitionInProgress = true;
	if (this._transitionInProcessClass) {
		this._elem.classList.add(this._transitionInProcessClass);
	}

	this._currentTransitionElem.style[this._currentTransitionProp] = 0;
	slide.style[this._currentTransitionProp] = 0;

	return true;
};

SimpleVerticalSlider.prototype._onTransitionOpacity1End = function(e) {
	var target = e.target;
	var prop = e.propertyName;
	if (!target || target !== this._currentTransitionElem || !prop || prop !== this._currentTransitionProp) return;

	this._removeListener(this._elem, 'transitionend', this._onTransitionOpacity1End);
	this._addListener(this._elem, 'transitionend', this._onTransitionOpacity2End);

	var prevTransElem = this._currentTransitionElem;
	this._currentTransitionElem = this._sidesArr[this._activeSlideIndex];

	this._setVendorCss(prevTransElem, 'transition', '');
	this._setVendorCss(this._currentTransitionElem, 'transition', this._currentTransitionProp + ' ease ' + (this._transitionDuration / 2) + 's');

	var offsetTop = this._currentTransitionElem.offsetTop;
	var offsetHeight = this._currentTransitionElem.offsetHeight;
	this._overflowBlock.style.top = -offsetTop + 'px';
	this._overflowContainer.style.height = offsetHeight + 'px';
	this._currentTransitionElem.style[this._currentTransitionProp] = '';
	prevTransElem.style[this._currentTransitionProp] = '';
};

SimpleVerticalSlider.prototype._onTransitionOpacity2End = function(e) {
	var target = e.target;
	var prop = e.propertyName;
	if (!target || target !== this._currentTransitionElem || !prop || prop !== this._currentTransitionProp) return;

	this._removeListener(this._elem, 'transitionend', this._onTransitionOpacity2End);

	this._setVendorCss(this._currentTransitionElem, 'transition', '');

	delete this._currentTransitionElem;
	delete this._currentTransitionProp;

	this._transitionInProgress = false;
	if (this._transitionInProcessClass) {
		this._elem.classList.remove(this._transitionInProcessClass);
	}
};

SimpleVerticalSlider.prototype._onWindowResize = function() {
	var activeWidth = this._sliderActiveWidthArr.indexOf(this._checkScreenWidth()) !== -1;

	if (this._active && !activeWidth) {
		this._active = false;
		return;
	} else if (!this._active && !activeWidth) {
		return;
	} else if (!this._active && activeWidth) {
		this._active = true;
		this._setInitialPosition();
	}

	var slide = this._sidesArr[this._activeSlideIndex];
	var offsetTop = slide.offsetTop;
	var offsetHeight = slide.offsetHeight;
	this._overflowBlock.style.top = -offsetTop + 'px';
	this._overflowContainer.style.height = offsetHeight + 'px';
};

SimpleVerticalSlider.prototype._onClick = function(e) {
	var target = e.target;
	if (!target) return;

	var actionElem = target.closest(this._controllsSelector + '[data-action][data-target-slide-index]');
	if (!actionElem) return;

	var action = actionElem.dataset.action;
	var targetSlideIndex = parseInt(actionElem.dataset.targetSlideIndex);
	if (!action || targetSlideIndex !== targetSlideIndex) return;

	if (action === 'change-slide') {
		e.preventDefault();
		if (this._moveSlide(targetSlideIndex)) {
			this._setActiveSliderControll(targetSlideIndex);
		}
	}
};

SimpleVerticalSlider.prototype._setActiveSliderControll = function(slideIndex) {
	var sliderControlls = this._elem.querySelectorAll(this._controllsSelector + '[data-action="change-slide"][data-target-slide-index]'),
		activeControllFound = false;

	for (var i = 0, targetSlideIndex; i < sliderControlls.length; i++) {
		targetSlideIndex = parseInt(sliderControlls[i].dataset.targetSlideIndex);

		if (!activeControllFound && targetSlideIndex === slideIndex) {
			activeControllFound = true;
			sliderControlls[i].classList.add('active');
		} else {
			sliderControlls[i].classList.remove('active');
		}
	}

	return activeControllFound;
};

try {
	module.exports = SimpleVerticalSlider;
} catch (err) {
	console.warn(err);
}
