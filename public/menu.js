// Detect all clicks on the document
document.addEventListener('click', function(event) {
    // If user clicks inside the element, do nothing
    if (event.target.closest('#menu-btn') ) return
    // If user clicks outside the element, hide it!
    dropdown.classList.add('hidden')
})

// grab everything we need
const btn = document.querySelector("button.mobile-menu-button");
const menu = document.querySelector(".mobile-menu");

// add event listeners
btn.addEventListener("click", () => {
  menu.classList.toggle("hidden");
});