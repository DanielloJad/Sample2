document.addEventListener("DOMContentLoaded", function() {
    var dropdowns = document.querySelectorAll(".dropdown");
    
    dropdowns.forEach(function(dropdown) {
        var dropdownBtn = dropdown.querySelector(".dropdown-btn");
        var dropdownContent = dropdown.querySelector(".dropdown-content");
        
        dropdownBtn.addEventListener("click", function() {
            dropdownContent.classList.toggle("show");
        });
    });

    window.addEventListener("click", function(event) {
        if (!event.target.matches('.dropdown-btn')) {
            dropdowns.forEach(function(dropdown) {
                var dropdownContent = dropdown.querySelector(".dropdown-content");
                if (dropdownContent.classList.contains('show')) {
                    dropdownContent.classList.remove('show');
                }
            });
        }
    });
});

document.addEventListener("DOMContentLoaded", function() {
    var sidebarItems = document.querySelectorAll(".sidebar-item");
    var contents = document.querySelectorAll(".content");

    sidebarItems.forEach(function(item) {
        item.addEventListener("click", function() {
            var contentId = item.dataset.content;
            contents.forEach(function(content) {
                if (content.id === "content-" + contentId) {
                    content.classList.remove("hidden");
                } else {
                    content.classList.add("hidden");
                }
            });
        });
    });
});
