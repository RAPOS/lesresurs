/**
 * Created by Admin on 12.05.2016.
 */
var _prevBanner = null;
var _nextBanner = null;
var _currentBanner = null;
var _banner = null;
var _setBanner = null;

$(document).ready(function () {
    _setBanner = setInterval(function(){nextBanner()}, 5000);
});

function prevBanner() {
    _banner = $('.banner-main .active');
    _currentBanner = _banner.attr('data-id');
    _prevBanner = _banner.attr('data-prev');
    _nextBanner = _banner.attr('data-next');

    $('.banner-main').css('background', 'url("../images/banner-main-' + _prevBanner + '.jpg") no-repeat top center');
    $('div[data-id=' + _currentBanner + ']').removeClass('active');
    $('div[data-id=' + _prevBanner + ']').addClass('active');
}

function nextBanner() {
    _banner = $('.banner-main .active');
    _currentBanner = _banner.attr('data-id');
    _prevBanner = _banner.attr('data-prev');
    _nextBanner = _banner.attr('data-next');

    $('.banner-main').css('background', 'url("../images/banner-main-' + _nextBanner + '.jpg") no-repeat top center');
    $('div[data-id=' + _currentBanner + ']').removeClass('active');
    $('div[data-id=' + _nextBanner + ']').addClass('active');
}