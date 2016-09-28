module.exports = {
  data: {
    stepsSlideNumber: 2,
    productSlideNumber: 1,
    industrySlideNumber: 1,
    caseSlideNumber: 1,
  },
  methods: {
    showSlide: function(slideName, slideNum) {
      console.log(slideName + 'SlideNumber');
      this[slideName + 'SlideNumber'] = slideNum
    }
  }
}
