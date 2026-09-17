 // Lazy loading images
 
           document.addEventListener('DOMContentLoaded', function () {
            // Select all images with the class 'lazy'
            const lazyImages = document.querySelectorAll('img.lazy');
            
            // Create an IntersectionObserver to monitor the visibility of images
            const imageObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        // Set the src attribute from data-src
                        img.src = img.dataset.src;
                        // Optional: Add a class to fade in the image
                        img.onload = () => img.classList.add('visible');
                        img.onerror = () => console.error('Failed to load image:', img.dataset.src);
                        // Stop observing the image after it is loaded
                        imageObserver.unobserve(img);
                    }
                });
            }, {
                rootMargin: '100px', // Load images before they enter the viewport
                threshold: 0.1 // Load the image when at least 10% is visible
            });

            // Observe each image
            lazyImages.forEach(img => imageObserver.observe(img));
        });
        
        
        


        // Function to lazy load CSS and JS
        document.addEventListener('DOMContentLoaded', function () {
            const lazySections = document.querySelectorAll('.section.lazy');

            const sectionObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const section = entry.target;
                        const cssUrl = section.dataset.css;
                        const jsUrl = section.dataset.js;

                        // Load CSS
                        if (cssUrl) {
                            const link = document.createElement('link');
                            link.rel = 'stylesheet';
                            link.href = cssUrl;
                            document.head.appendChild(link);
                        }

                        // Load JS
                        if (jsUrl) {
                            const script = document.createElement('script');
                            script.src = jsUrl;
                            document.body.appendChild(script);
                        }

                        section.classList.add('visible');
                        sectionObserver.unobserve(section);
                    }
                });
            });

            lazySections.forEach(section => sectionObserver.observe(section));
        });
        
        
//load given Url after whole page load using jquery
jQuery(window).on('load', function() {
    // Load the AJAX request after 10 seconds
    setTimeout(function() {
        jQuery.ajax({
            url: 'https://360smsapp.com/wp-content/themes/thegem-child/cap2.php?id=60653_b',
            type: 'GET',
            success: function(response) {
                console.log('Script loaded successfully');
                // Optionally handle the response:
                // jQuery('#some-element').html(response);
            },
            error: function() {
                console.log('Error loading the script.');
            }
        });
    }, 2000); // 10000 milliseconds = 10 seconds




    // Load external scripts after 10 seconds
    setTimeout(function() {
        // Load Waypoints script
        var waypointScript = document.createElement('script');
        waypointScript.src = 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js';
        waypointScript.defer = true;
        document.body.appendChild(waypointScript);

        // Load CounterUp script
        var counterUpScript = document.createElement('script');
        counterUpScript.src = 'https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js';
        counterUpScript.defer = true;
        document.body.appendChild(counterUpScript);

        console.log('External scripts loaded successfully');
    }, 10000); // 10000 milliseconds = 10 seconds
});


        
 
        
        
        
        
        
        
        
  