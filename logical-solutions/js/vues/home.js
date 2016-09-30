module.exports = {
  data: {
    // stepsSlideNumber: 1,
    productSlideNumber: 1,
    productSlideCount: 3,
    industrySlideNumber: 1,
    industrySlideCount: 4,
    caseSlideNumber: 1,
    caseSlideCount: 2,
  },
  methods: {
    showSlide: function(slideName, slideNum) {
      console.log(slideName + 'SlideNumber');
      this[slideName + 'SlideNumber'] = slideNum
    },
    prevSlide: function(slideName) {
      if (this[slideName + 'SlideNumber'] !== 1) {
        this[slideName + 'SlideNumber']--
      }
    },
    nextSlide: function(slideName) {
      if (this[slideName + 'SlideNumber'] !== this[slideName + 'SlideCount']) {
        this[slideName + 'SlideNumber']++
      }
    }
  }
}
