.sl-slider-wrapper {
	width: 800px;
	height: 400px;
	margin: 0 auto;
	position: relative;
	overflow: hidden;
}

.sl-slider {
	position: absolute;
	top: 0;
	left: 0;
}

/* Slide wrapper and slides */

.sl-slide,
.sl-slides-wrapper,
.sl-slide-inner {
	position: absolute;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
} 

.sl-slide {
	z-index: 1;
}

/* The duplicate parts/slices */

.sl-content-slice {
	overflow: hidden;
	position: absolute;
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
	background: #fff;
	-webkit-backface-visibility: hidden;
	-moz-backface-visibility: hidden;
	-o-backface-visibility: hidden;
	-ms-backface-visibility: hidden;
	backface-visibility: hidden;
	opacity : 1;
}

/* Horizontal slice */

.sl-slide-horizontal .sl-content-slice {
	width: 100%;
	height: 50%;
	left: -200px;
	-webkit-transform: translateY(0%) scale(1);
	-moz-transform: translateY(0%) scale(1);
	-o-transform: translateY(0%) scale(1);
	-ms-transform: translateY(0%) scale(1);
	transform: translateY(0%) scale(1);
}

.sl-slide-horizontal .sl-content-slice:first-child {
	top: -200px;
	padding: 200px 200px 0px 200px;
}

.sl-slide-horizontal .sl-content-slice:nth-child(2) {
	top: 50%;
	padding: 0px 200px 200px 200px;
}

/* Vertical slice */

.sl-slide-vertical .sl-content-slice {
	width: 50%;
	height: 100%;
	top: -200px;
	-webkit-transform: translateX(0%) scale(1);
	-moz-transform: translateX(0%) scale(1);
	-o-transform: translateX(0%) scale(1);
	-ms-transform: translateX(0%) scale(1);
	transform: translateX(0%) scale(1);
}

.sl-slide-vertical .sl-content-slice:first-child {
	left: -200px;
	padding: 200px 0px 200px 200px;
}

.sl-slide-vertical .sl-content-slice:nth-child(2) {
	left: 50%;
	padding: 200px 200px 200px 0px;
}

/* Content wrapper */
/* Width and height is set dynamically */
.sl-content-wrapper {
	position: absolute;
}

.sl-content {
	width: 100%;
	height: 100%;
	background: #fff;
}

/* Default styles for background colors */
.sl-slide-horizontal .sl-slide-inner {
	background: #ddd;
}

.sl-slide-vertical .sl-slide-inner {
	background: #ccc;
}