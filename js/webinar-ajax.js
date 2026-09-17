jQuery(document).ready(function(jQuery){
    var $j = jQuery;
    var selectedCategories = [];
    var currentPage = 1;
    
    function getSelectedCategories() {
        var cats = [];
        $j('.webinar-filter-checkbox:checked').each(function(){
            cats.push($j(this).val());
        });
        return cats;
    }
    
    function loadWebinars(paged){
        currentPage = paged || 1;
        selectedCategories = getSelectedCategories();
        $j.ajax({
            url: webinar.ajaxurl,
            method: 'POST',
            data: {
                action: 'filter_webinars',
                categories: selectedCategories,
                paged: currentPage
            },
            beforeSend: function(){
                $j('#webinar-results').html('<p>Loading...</p>');
            },
            success: function(response){
                $j('#webinar-results').html(response);
                // Highlight active page
                $j('.webinar-page-btn').removeClass('active');
                $j('.webinar-page-btn[data-page="'+currentPage+'"]').addClass('active');
            },
            error: function(xhr, status, err){
                $j('#webinar-results').html('<p>Error loading results.</p>');
            }
        });
        renderSelectedTags();
    }
    
    function renderSelectedTags(){
        var html = '';
        selectedCategories.forEach(function(cat){
            var label = $j('input.webinar-filter-checkbox[value="'+cat+'"]').parent().text().trim();
            html += '<span class="filter-tag" data-category="'+cat+'">'+label+' &nbsp;| ❌</span>';
        });
        $j('.selected-filters').html(html);
    }
    
    // Checkbox change
    $j(document).on('change', '.webinar-filter-checkbox', function(){
        loadWebinars(1);
    });
    
    // Pagination button click
    $j(document).on('click', '.webinar-page-btn', function(e){
        e.preventDefault();
        var page = parseInt($j(this).data('page')) || 1;
        loadWebinars(page);
    });
    
    // Remove tag
    $j(document).on('click', '.filter-tag', function(){
        var cat = $j(this).data('category');
        $j('input.webinar-filter-checkbox[value="'+cat+'"]').prop('checked', false);
        loadWebinars(1);
    });
    
    // Reset filters
    $j(document).on('click', '#reset-filters, #reset-filters-main', function(){
        $j('.webinar-filter-checkbox').prop('checked', false);
        $j('.selected-filters').empty();
        loadWebinars(1);
    });
    
    // ✅ COMPLETELY REWRITTEN: Parent category toggle
    // Remove any existing click handlers first
    $j('.parent-header').off('click');
    $j('.expand-child').off('click');
    
    // Single unified click handler
    $j(document).on('click', '.parent-header', function(e){
        e.preventDefault();
        e.stopPropagation();
        
        // Get the parent category container
        var parentLi = $j(this).closest('.parent-category');
        var childList = parentLi.find('.child-category-list');
        var expandBtn = $j(this).find('.expand-child');
        
        console.log('Clicked parent:', parentLi);
        console.log('Child list found:', childList.length);
        console.log('Child list HTML:', childList.html());
        
        // Check current state
        var isOpen = childList.is(':visible');
        
        console.log('Is open:', isOpen);
        
        // Close all categories first
        $j('.parent-category').removeClass('open');
        $j('.child-category-list').hide().css({
            'display': 'none',
            'visibility': 'visible',
            'opacity': '1'
        });
        $j('.expand-child').text('+');
        
        // If this one wasn't open, open it
        if (!isOpen) {
            parentLi.addClass('open');
            childList.css({
                'display': 'block',
                'visibility': 'visible',
                'opacity': '1'
            }).show();
            expandBtn.text('−');
            console.log('Opened - display:', childList.css('display'));
        }
    });
    
    // Prevent checkbox label clicks from toggling parent
    $j(document).on('click', '.child-category-list label', function(e){
        e.stopPropagation();
    });
    
    // Prevent checkbox clicks from toggling parent
    $j(document).on('click', '.webinar-filter-checkbox', function(e){
        e.stopPropagation();
    });
    
    // Initial load
    loadWebinars(1);
});