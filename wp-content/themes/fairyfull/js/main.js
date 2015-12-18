 	$(document).ready(function() {
    var slider = $("#lightSlider").lightSlider({
    	item: 1,
    	thumbItem:10
    });
    slider.goToSlide(3);
    slider.goToPrevSlide();
    slider.goToNextSlide();
    slider.getCurrentSlideCount();
    slider.refresh();
    slider.play(); 
    slider.pause();    
  });