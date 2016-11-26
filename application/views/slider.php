
<link href="../static/css/tst/styles.css" rel="stylesheet">

<body>

<div class="stage" style="height: auto;">
	<div id="SLDR-ONE" class="sldr">
		<ul class="wrp animate">
			<li class="elmnt-one">
				<div class="skew">
					<div class="wrap">
						<img src="../static/img/Lake.jpg" width="1000" height="563">
					</div>
				</div>
			</li>
			<li class="elmnt-two"><div class="skew">
					<div class="wrap">
						<img src="../static/img/Mountain-Range.jpg" width="1000" height="563">
					</div>
				</div>
			</li>
			<li class="elmnt-three">
				<div class="skew">
					<div class="wrap">
						<img src="../static/img/Mt-Fuji.jpg" width="1000" height="563">
					</div>
				</div>
			</li>
			<li class="elmnt-four">
				<div class="skew">
					<div class="wrap">
						<img src="../static/img/Pink-Forest.jpg" width="1000" height="563">
					</div>
				</div>
			</li>
		</ul>
	</div>

	
</div>

<script src="../static/js/jquery-1.10.2.min.js"></script>
<script src="../static/js/jquery.sldr.js"></script>
<script>

$( window ).load( function() {

	$( '.sldr' ).each( function() {
		var th = $( this );
		th.sldr({
			focalClass    : 'focalPoint',
			offset        : th.width() / 2,
			sldrWidth     : 'responsive',
			nextSlide     : th.nextAll( '.sldr-nav.next:first' ),
			previousSlide : th.nextAll( '.sldr-nav.prev:first' ),
			selectors     : th.nextAll( '.selectors:first' ).find( 'li' ),
			toggle        : th.nextAll( '.captions:first' ).find( 'div' ),
			sldrInit      : sliderInit,
			sldrStart     : slideStart,
			sldrComplete  : slideComplete,
			sldrLoaded    : sliderLoaded,
			sldrAuto      : true,
			sldrTime      : 5000,
			hasChange     : true
		});
	});

});

/**
 * Sldr Callbacks
 */

/**
 * When the sldr is initiated, before the DOM is manipulated
 * @param {object} args the slides, callback, and config of the slider
 * @return null
 */
function sliderInit( args ) {

}

/**
 * When individual slides are loaded
 * @param {object} args the slides, callback, and config of the slider
 * @return null
 */
function slideLoaded( args ) {

}

/**
 * When the full slider is loaded, after the DOM is manipulated
 * @param {object} args the slides, callback, and config of the slider
 * @return null
 */
function sliderLoaded( args ) {

}

/**
 * Before the slides change focal points
 * @param {object} args the slides, callback, and config of the slider
 * @return null
 */
function slideStart( args ) {

}

/**
 * After the slides are done changing focal points
 * @param {object} args the slides, callback, and config of the slider
 * @return null
 */
function slideComplete( args ) {

}

</script>

</body>