const menuBtn = document.querySelector('#menu-btn')
const dropdown = document.querySelector('#dropdown')

menuBtn.addEventListener('click', () => {
    if (dropdown.classList.contains('hidden')) {
        dropdown.classList.remove('hidden');
    } else {
        dropdown.classList.add('hidden')
    }
});

// Detect all clicks on the document
document.addEventListener('click', function(event) {
    // If user clicks inside the element, do nothing
    if (event.target.closest('#menu-btn') ) return
    // If user clicks outside the element, hide it!
    dropdown.classList.add('hidden')
})