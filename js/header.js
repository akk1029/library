window.onmouseover = function(event) {
    closeDropdowns(event, 'dropbtn1', 'myDropdown1');
    closeDropdowns(event, 'dropbtn2', 'myDropdown2');
}

function closeDropdowns(event, dropbtnClass, dropdownId) {
    var dropdownButton = document.querySelector('.' + dropbtnClass);
    var dropdown = document.getElementById(dropdownId);

    if (!event.target.matches('.' + dropbtnClass) && !isDescendant(dropdown, event.relatedTarget) && !isDescendant(dropdown, event.target)) {
        dropdown.classList.remove('show');
    }
}

function isDescendant(parent, child) {
    var node = child;
    while (node !== null) {
        if (node === parent) {
            return true;
        }
        node = node.parentNode;
    }
    return false;
}

function dropdown1() {
    document.getElementById("myDropdown1").classList.toggle("show");
}

function dropdown2() {
    document.getElementById("myDropdown2").classList.toggle("show");
}