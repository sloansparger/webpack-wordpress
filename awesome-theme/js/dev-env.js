module.exports =
  document.addEventListener('DOMContentLoaded', function() {
    if (window.location.href.indexOf('localhost:8888') !== -1) {
      const links = [...document.getElementsByTagName('a')]

      links.forEach(link => {
        link.setAttribute('href', link.getAttribute("href").replace('localhost:8888', 'localhost:3000'))
      })
    }
  }, false);
