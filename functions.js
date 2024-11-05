function openTab(event, tabName) {
    // Get all elements with class "tab-content" and hide them
    const tabContents = document.querySelectorAll(".tab-content");
    for (let i = 0; i < tabContents.length; i++) {
        tabContents[i].classList.remove("active");
    }

    // Get all elements with class "tab-button" and remove the "active" class
    const tabButtons = document.querySelectorAll(".tab-button");
    for (let i = 0; i < tabButtons.length; i++) {
        tabButtons[i].classList.remove("active");
    }

    // Show the selected tab content and add the "active" class to the button
    document.getElementById(tabName).classList.add("active");
    event.currentTarget.classList.add("active");
}