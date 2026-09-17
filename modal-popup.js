document.addEventListener('DOMContentLoaded', function () {
    var modal = document.getElementById('formModal');
    var closeButton = document.querySelector('.close-button');
    var isModalShown = false;

    // Function to show the modal
    function showModal() {
        if (!isModalShown) {
            modal.style.display = 'flex';
            isModalShown = true;
        }
    }

    // Show modal after 30 seconds
    setTimeout(showModal, 30000); // 30 seconds

    // Show modal when scrolled 70% of the page
    window.addEventListener('scroll', function () {
        var scrollTop = window.scrollY || window.pageYOffset;
        var windowHeight = window.innerHeight;
        var documentHeight = document.documentElement.scrollHeight;

        var scrollPercent = (scrollTop + windowHeight) / documentHeight;

        if (scrollPercent > 0.7) {
            showModal();
        }
    });

    // Close modal when the close button is clicked
    closeButton.addEventListener('click', function () {
        modal.style.display = 'none';
    });

    // Close modal when clicking outside the modal content
    window.addEventListener('click', function (event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
});
