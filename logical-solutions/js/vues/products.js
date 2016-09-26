module.exports = {
  data: {
    modalOpen: false,
    currentTitle: '',
    currentImage: '',
    currentDescription: '',
  },
  methods: {
    closeModal: function() {
      this.modalOpen = false
      this.currentTitle = ''
      this.currentImage = ''
      this.currentDescription = ''
    },
    openModal: function(title, image, description) {
      this.modalOpen = true
      this.currentTitle = title
      this.currentImage = image
      this.currentDescription = description
    }
  }
}
