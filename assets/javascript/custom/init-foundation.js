jQuery(document).foundation();

jQuery(document).on('open.fndtn.offcanvas', '[data-offcanvas]', function () {
  jQuery('html').css('overflow', 'hidden');
});

jQuery(document).on('close.fndtn.offcanvas', '[data-offcanvas]', function () {
  jQuery('html').css('overflow', 'auto');
});