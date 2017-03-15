$('#grid-headline').masonry({
  itemSelector: '.grid-item',
  columnWidth: '.grid-sizer',
  percentPosition: true
});

$('#grid-newsflash').masonry({
  itemSelector: '.grid-item-nf',
  columnWidth: '.grid-sizer-nf',
  percentPosition: true
});

$('.special.cards .image').dimmer({
	on: 'hover'
});

$('.wew.card .image').dimmer({
  on: 'hover'
});

$('.woww.card .image').dimmer({
  on: 'hover'
});

$('.ui.sticky').sticky();