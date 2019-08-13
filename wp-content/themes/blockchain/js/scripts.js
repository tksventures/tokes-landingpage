function MobileMenu() {
	var mobileMenu = $('.mobile-menu'),
		toggleMenuElement = $('.js-mobile-menu-toggle');

	this.open = function () {
		toggleMenuElement.addClass('open');
		mobileMenu.addClass('open');
		_html.addClass('overflow-hidden');
		// _header.addClass('header--light');
	};

	this.close = function () {
		toggleMenuElement.removeClass('open');
		mobileMenu.removeClass('open');
		_html.removeClass('overflow-hidden');
		// _header.removeClass('header--light');
	};

	this.init = function () {
		toggleMenuElement.on(_touchTap, function (e){
			e.preventDefault();
			toggleMenuElement.toggleClass('open');
			mobileMenu.toggleClass('open');
			_html.toggleClass('overflow-hidden');
			// _header.toggleClass('header--light');
			return false;
		});
	};
}
function WaypointAnimation() {
    this.init = function () {
        
        if(issetElement('.lead__icon')){
            var motionLeadPath = MorphSVGPlugin.pathDataToBezier("#pathLeadLine");

            TweenMax.to("#pathLeadLine",0,{visibility:'hidden'});

            $('.lead--main').waypoint({
                handler: function(direction) {
                    TweenMax.to("#pathLeadLine",0,{visibility:'visible'});
                    TweenMax.from('#pathLeadLine', 2, {drawSVG: "100% 100%", repeat: -1, repeatDelay: 1, yoyo: true});
                },
                offset: '100%'
            });
        }

        if(issetElement('.platform__item')){
            $('.platform__item').each(function () {
                var _this = $(this);

                _this.waypoint({
                    handler: function () {
                        _this.removeClass('before-animation');
                    },
                    offset: '90%'
                });
            });
        }
        
        if(issetElement('.how-to-use__item')){
            $('.how-to-use__item').each(function () {
                var _this = $(this);

                _this.waypoint({
                    handler: function () {
                        _this.removeClass('before-animation');
                    },
                    offset: '90%'
                });
            });
        }
        
        if(issetElement('.team__item')){
            $('.team__item').each(function () {
                var _this = $(this);

                _this.waypoint({
                    handler: function () {
                        _this.removeClass('before-animation');
                    },
                    offset: '50%'
                });
            });
        }
        
        if(issetElement('.for-industry__scheme')){
            $('.for-industry__scheme').waypoint({
                handler: function () {
                    $('.for-industry__scheme-item').each(function (i) {
                        var _this = $(this);
                        setTimeout(function () {
                            _this.removeClass('before-animation');
                        }, i * 150)
                    });
                },
                offset: '50%'
            });
        }
        
        if(issetElement('.team-info')){
            $('.team-info').waypoint({
                handler: function () {

                    $('.team-info .section-header').removeClass('before-animation');

                    $('.team-info__item').each(function (i) {
                        var _this = $(this);
                        setTimeout(function () {
                            _this.removeClass('before-animation');
                        }, i * 200)
                    });
                },
                offset: '50%'
            });
        }
        
        if(issetElement('.logos')){
            $('.logos').each(function () {
                var _thisLogos = $(this);
                _thisLogos.waypoint({
                    handler: function(direction) {
                        _thisLogos.find('.section-header').removeClass('before-animation');
                        _thisLogos.find('.logos__list-item').each(function (i) {
                            var _this = $(this);
                            setTimeout(function () {
                                _this.removeClass('before-animation');
                            }, i * 150)
                        });
                    },
                    offset: '50%'
                });
            });
        }
        
        if(issetElement('.roadmap')){
            $('.roadmap').waypoint({
                handler: function(direction) {
                    if(!$('.roadmap').hasClass('animate')){
                        var _interval = 600,
                            _cinterval = 600,
                            _items = $('.roadmap__item'),
                            _separators = $('.roadmap__separator');

                        $('.roadmap').addClass('animate');
                        
                        _items.each(function () {
                            var _this = $(this);
                            if(!_this.hasClass('animate')){
                                setTimeout(function () {
                                    _this.addClass('animating');
                                }, _interval);
                                setTimeout(function () {
                                    _this.removeClass('animating').addClass('animate');
                                }, _interval + 600);
                            }
                            _interval += 600;
                        });

                        _separators.each(function () {
                            var _this = $(this);
                            if(!_this.hasClass('animate')){
                                setTimeout(function () {
                                    _this.addClass('animate');
                                }, _cinterval);
                            }
                            _cinterval += 600;
                        });
                    }
                },
                offset: '25%'
            });
        }

        if(issetElement('.content__section')){
            $('.content__section').each(function () {
                var _this = $(this);

                _this.waypoint({
                    handler: function () {
                        _this.removeClass('before-animation');
                    },
                    offset: '50%'
                });
            });
        }

        if(issetElement('.features__item')){
            $('.features__item').each(function () {
                var _this = $(this);

                _this.waypoint({
                    handler: function () {
                        _this.removeClass('before-animation');
                    },
                    offset: '50%'
                });
            });
        }

        if(issetElement('.additional-functions')){
            $('.additional-functions').waypoint({
                handler: function () {
                    $('.additional-functions').removeClass('before-animation');
                },
                offset: '50%'
            });
        }

        if(issetElement('.downloads')){
            $('.downloads').waypoint({
                handler: function () {
                    $('.downloads__inner').removeClass('before-animation');
                },
                offset: '50%'
            });
        }

        if(issetElement('.links__item')){
            $('.links__item').each(function () {
                var _this = $(this);

                _this.waypoint({
                    handler: function () {
                        _this.removeClass('before-animation');
                    },
                    offset: '60%'
                });
            });
        }

        if(issetElement('.platform__scheme')){

            var motionPath = MorphSVGPlugin.pathDataToBezier("#svgPlatform-path1", {align:"#svgPlatform-arrow1"}),
                motionPath2 = MorphSVGPlugin.pathDataToBezier("#svgPlatform-path1", {align:"#svgPlatform-truck1"}),
                motionPath3 = MorphSVGPlugin.pathDataToBezier("#svgPlatform-path2", {align:"#svgPlatform-arrow2"}),
                motionPath4 = MorphSVGPlugin.pathDataToBezier("#svgPlatform-path3", {align:"#svgPlatform-arrow3"}),
                motionPath5 = MorphSVGPlugin.pathDataToBezier("#svgPlatform-path4", {align:"#svgPlatform-arrow4"}),
                motionPath6 = MorphSVGPlugin.pathDataToBezier("#svgPlatform-path4", {align:"#svgPlatform-truck4"}),
                motionPath7 = MorphSVGPlugin.pathDataToBezier("#svgPlatform-path6", {align:"#svgPlatform-arrow6"}),
                motionPath8 = MorphSVGPlugin.pathDataToBezier("#svgPlatform-path7", {align:"#svgPlatform-arrow7"}),
                motionPath9 = MorphSVGPlugin.pathDataToBezier("#svgPlatform-path8", {align:"#svgPlatform-arrow8"}),
                motionPath10 = MorphSVGPlugin.pathDataToBezier("#svgPlatform-path9", {align:"#svgPlatform-arrow9"}),
                motionPath11 = MorphSVGPlugin.pathDataToBezier("#svgPlatform-path10", {align:"#svgPlatform-arrow10"}),
                motionPath12 = MorphSVGPlugin.pathDataToBezier("#svgPlatform-path11", {align:"#svgPlatform-arrow11"}),
                motionPath13 = MorphSVGPlugin.pathDataToBezier("#svgPlatform-path12", {align:"#svgPlatform-arrow12"}),
                motionPath14 = MorphSVGPlugin.pathDataToBezier("#svgPlatform-path13", {align:"#svgPlatform-arrow13"}),
                motionPath15 = MorphSVGPlugin.pathDataToBezier("#svgPlatform-path14", {align:"#svgPlatform-arrow14"}),
                motionPath16 = MorphSVGPlugin.pathDataToBezier("#svgPlatform-path15", {align:"#svgPlatform-arrow15"}),
                motionPath17 = MorphSVGPlugin.pathDataToBezier("#svgPlatform-path16", {align:"#svgPlatform-arrow16"});;

            TweenMax.set("#svgPlatform-arrow1", {xPercent:-50, yPercent:-50});
            TweenMax.set("#svgPlatform-truck1", {xPercent:-50, yPercent:-70});
            TweenMax.set("#svgPlatform-arrow2", {xPercent:-50, yPercent:-50});
            TweenMax.set("#svgPlatform-arrow3", {xPercent:-50, yPercent:-50});
            TweenMax.set("#svgPlatform-arrow4", {xPercent:-50, yPercent:-50});
            TweenMax.set("#svgPlatform-truck4", {xPercent:-50, yPercent:-70});
            TweenMax.set("#svgPlatform-arrow6", {xPercent:-50, yPercent:-50});
            TweenMax.set("#svgPlatform-arrow7", {xPercent:-50, yPercent:-50});
            TweenMax.set("#svgPlatform-arrow8", {xPercent:-50, yPercent:-50});
            TweenMax.set("#svgPlatform-arrow9", {xPercent:-50, yPercent:-50});
            TweenMax.set("#svgPlatform-arrow10", {xPercent:-50, yPercent:-50});
            TweenMax.set("#svgPlatform-arrow11", {xPercent:-50, yPercent:-50});
            TweenMax.set("#svgPlatform-arrow12", {xPercent:-50, yPercent:-50});
            TweenMax.set("#svgPlatform-arrow13", {xPercent:-50, yPercent:-50});
            TweenMax.set("#svgPlatform-arrow14", {xPercent:-50, yPercent:-50});
            TweenMax.set("#svgPlatform-arrow15", {xPercent:-50, yPercent:-50});
            TweenMax.set("#svgPlatform-arrow16", {xPercent:-50, yPercent:-50});

            TweenMax.to("#svgPlatform-arrow1", 1.5, {bezier:{values:motionPath, type:"cubic"}, ease: Power0.easeNone, repeatDelay:0, repeat:-1, yoyo:false});
            TweenMax.to("#svgPlatform-truck1", 4, {bezier:{values:motionPath2, type:"cubic"}, ease: SlowMo.ease.config(0.1, 0.4, false), repeatDelay:0, repeat:-1, yoyo:false});
            TweenMax.to("#svgPlatform-arrow2", 3, {bezier:{values:motionPath3, type:"cubic"}, ease: Power0.easeNone, repeatDelay:0, repeat:-1, yoyo:false});
            TweenMax.to("#svgPlatform-arrow3", 3, {bezier:{values:motionPath4, type:"cubic"}, ease: Power0.easeNone, repeatDelay:0, repeat:-1, yoyo:false});
            TweenMax.to("#svgPlatform-arrow4", 2, {bezier:{values:motionPath5, type:"cubic"}, ease: Power0.easeNone, repeatDelay:0, repeat:-1, yoyo:false});
            TweenMax.to("#svgPlatform-truck4", 4, {bezier:{values:motionPath6, type:"cubic"}, ease: SlowMo.ease.config(0.1, 0.4, false), repeatDelay:0, repeat:-1, yoyo:false});
            TweenMax.to("#svgPlatform-arrow6", 1.5, {bezier:{values:motionPath7, type:"cubic"}, ease: Power0.easeNone, repeatDelay:0, repeat:-1, yoyo:false});
            TweenMax.to("#svgPlatform-arrow7", 1, {bezier:{values:motionPath8, type:"cubic"}, ease: Power0.easeNone, repeatDelay:0, repeat:-1, yoyo:false});
            TweenMax.to("#svgPlatform-arrow8", 2, {bezier:{values:motionPath9, type:"cubic"}, ease: Power0.easeNone, repeatDelay:0, repeat:-1, yoyo:false});
            TweenMax.to("#svgPlatform-arrow9", 2, {bezier:{values:motionPath10, type:"cubic"}, ease: Power0.easeNone, repeatDelay:0, repeat:-1, yoyo:false});
            TweenMax.to("#svgPlatform-arrow10", 1, {bezier:{values:motionPath11, type:"cubic"}, ease: Power0.easeNone, repeatDelay:0, repeat:-1, yoyo:false});
            TweenMax.to("#svgPlatform-arrow11", 1, {bezier:{values:motionPath12, type:"cubic"}, ease: Power0.easeNone, repeatDelay:0, repeat:-1, yoyo:false});

            TweenMax.to("#svgPlatform-arrow12", 2, {bezier:{values:motionPath13, type:"cubic"}, ease: Power0.easeNone, repeatDelay:0, repeat:-1, yoyo:false});
            TweenMax.to("#svgPlatform-arrow13", 2, {bezier:{values:motionPath14, type:"cubic"}, ease: Power0.easeNone, repeatDelay:0, repeat:-1, yoyo:false});
            TweenMax.to("#svgPlatform-arrow14", 2, {bezier:{values:motionPath15, type:"cubic"}, ease: Power0.easeNone, repeatDelay:0, repeat:-1, yoyo:false});
            TweenMax.to("#svgPlatform-arrow15", 2, {bezier:{values:motionPath16, type:"cubic"}, ease: Power0.easeNone, repeatDelay:0, repeat:-1, yoyo:false});
            TweenMax.to("#svgPlatform-arrow16", 2, {bezier:{values:motionPath17, type:"cubic"}, ease: Power0.easeNone, repeatDelay:0, repeat:-1, yoyo:false});

            var cashboxRectanglesTimeline = new TimelineMax({repeat: -1, yoyo: true});
            cashboxRectanglesTimeline.staggerFromTo('#svgPlatform-cashbox-rectangles path', 0.5, {css: {opacity: '0'}}, {css:{opacity: '1'}}, 0.5);

            var plantsTimeline = new TimelineMax({repeat: -1});
            plantsTimeline.staggerFromTo('#svgPlatform-plants > g', 0.26667, {css: {opacity: '0'}}, {css:{opacity: '1'}}, 0.26667);

            var robotEllipsesTimeline = new TimelineMax({repeat: -1, repeatDelay: 2});
            robotEllipsesTimeline.staggerFromTo('#svgPlatform-robot-ellipses > g', 0.1, {css: {opacity: '0'}}, {css:{opacity: '1'}}, 0.1);

            var forkliftTimeline = new TimelineMax({repeat: -1, repeatDelay: 1, yoyo: true});
            forkliftTimeline.fromTo('#svgPlatform-forklift-forks', 0.4, {y: '0'}, {y: '-12%'});

            var blockchainTimeline = new TimelineMax({repeat: -1, repeatDelay: 0.5});
            blockchainTimeline.staggerFromTo('#svgPlatform-blockchain-tiles > g', 0.5, {css: {opacity: '0'}}, {css:{opacity: '1'}}, 0.5);

            var coins1Timeline = new TimelineMax({repeat: -1, repeatDelay: 0.5});
            coins1Timeline.staggerFromTo('#svgPlatform-coins-1 > g', 0.25, {css: {opacity: '0'}}, {css:{opacity: '1'}}, 0.25);

            var coins2Timeline = new TimelineMax({repeat: -1, repeatDelay: 0.5});
            coins2Timeline.staggerFromTo('#svgPlatform-coins-2 > g', 0.25, {css: {opacity: '0'}}, {css:{opacity: '1'}}, 0.25);

        }

    }
}


function invertibleHeader() {
    _header.toggleClass('header--sticky', _window.scrollTop() > 50);
    _window.on('scroll', function () {
        _header.toggleClass('header--sticky', _window.scrollTop() > 50);
    });
}

// function headerHorizontalScroll() {
//     _window.on('scroll', function () {
//         var _scrollLeft = '-' + _window.scrollLeft() + 'px';
//         _header.css({left: _scrollLeft});
//     });
// }

function showVideoFrame() {
    $('.js-show-video-frame').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
}

function App() {
    return {
        mobileMenu: new MobileMenu(),
        waypointAnimation: new WaypointAnimation(),
        init: function () {
            this.mobileMenu.init();
            //headerHorizontalScroll();
            this.waypointAnimation.init();
            invertibleHeader();
            showVideoFrame();
        }
    }
}

_document.ready(function() {
    app = new App();
    app.init();
    
    _document.on(_touchTap, '.header__menu-item--parent > a', function (e) {
        e.preventDefault();
        $(this).closest('.header__menu-item').toggleClass('header__menu-item--open');
        return false;
    });

    _document.on(_touchTap, function (e) {
        if($(e.target).closest('.header__menu-item--parent').length > 0){
            // e.preventDefault();
            // return false;
        } else if($('.header__menu-item--parent').hasClass('header__menu-item--open')){
            $('.header__menu-item--parent').removeClass('header__menu-item--open');
        }
    });
    
    _document.on('click', '.collapsed-list__item-title', function (e) {
        e.preventDefault();

        var _this = $(this),
            _thisParent = _this.closest('.collapsed-list__item'),
            _thisContent = _thisParent.find('.collapsed-list__item-content');
        
        _thisParent.toggleClass('collapsed-list__item--opening');
        _thisContent.slideToggle(function () {
            _thisParent.toggleClass('collapsed-list__item--open');
            _thisParent.toggleClass('collapsed-list__item--opening');
        });

        return false;
    });

    _document.on('click', '.scroll-to', function(e){
        var _headerHeight = 82,
            _thisHref = $(this).attr('href'),
            _sectionId = _thisHref.substr(_thisHref.indexOf("#")),
            _thisSection = $(_sectionId);

        app.mobileMenu.close();
        if(_thisSection.length > 0){
            e.preventDefault();
            $('html, body').animate({
                scrollTop: _thisSection.offset().top - _headerHeight
            }, 500);
            return false;
        }
    });

    if( issetElement('.mc4wp-alert') ) {

        $('#modal-subscribe').modal();
    }
});
