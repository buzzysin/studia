// Get AOS from the package in npm
window.Aos = require("aos");

// Assign configuration options
let config = {
  duration: "1000"
}

// Start registering events
document.onreadystatechange = () =>
  Aos.init(config);