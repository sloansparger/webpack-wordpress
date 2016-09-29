module.exports = {
  ready: function() {
    const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']

    window.registrationDates = window.registrationDates.map(timestamp => {
      const newDate = new Date(timestamp)
      const date = newDate.getDate()
      const month = months[newDate.getMonth()]
      const year = newDate.getFullYear()
      return `${month} ${date}, ${year}`
    })

    const select = document.querySelector('.training-date select')

    window.registrationDates.forEach(date => {
      const option = document.createElement('option')
      option.text = date
      select.add(option)
    })
  }
}
