// JavaScript for tournament.html
document.addEventListener("DOMContentLoaded", function() {
    const versusItems = document.querySelectorAll('.versus');

    //Add hover effect
    versusItems.forEach(function(versus) {
        versus.addEventListener("mouseenter", function() {
            versus.style.backgroundColor = "#f2f2f2";
            versus.style.boxShadow = "0 4px 6px rgba(0, 0, 0, 0.1)";
        });

        versus.addEventListener("mouseleave", function() {
            versus.style.backgroundColor = "#fff";
            versus.style.boxShadow = "0 2px 4px rgba(0, 0, 0, 0.1)";
        });

        // "Insert score effect"
        const link = versus.querySelector('a');
        link.addEventListener("click", function(event) {
            const confirmMessage = "Are you sure that you want play this?";
            if (!confirm(confirmMessage)) {
                event.preventDefault();
            }
        });
    });
});

