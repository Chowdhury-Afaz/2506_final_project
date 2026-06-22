     var swiper = new Swiper(".mySwiper", {
      pagination: {
        el: ".swiper-pagination",
      },
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: true,
      },

    });
    var swiper = new Swiper(".swiperFeature", {
      slidesPerView: 4,
      spaceBetween: 10,
      loop: true,
      keyboard: {
        enabled: true,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
      },
    });
    var swiper = new Swiper(".catagorySwiper", {
      navigation: {
        nextEl: ".rightBtn",
        prevEl: ".leftBtn",
      },
      slidesPerView: 5,
      loop:true,
      keyboard: {
        enabled: true,
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 4,
        },
        1024: {
          slidesPerView: 5,
        },
      },
    });
    var swiper = new Swiper(".swiperReview", {
      slidesPerView: 3,
      spaceBetween: 10,
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: true,
      },
      pagination: {
        el: ".dots",
        clickable: true,
      },
      navigation: {
        nextEl: ".next",
        prevEl: ".prev",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
    });
   
 // countdown jquery file starts here

   $('#cot_sale_timer').countdown('2026/04/30', function(event) {
  var $this = $(this).html(event.strftime(''
    +
    '<div class="cot_sale_timer_para"><span class="span_1">%D</span><span class="span_2">Days</span></div> ' +
    '<span class="colon_sign">:</span>'+
    '<div class="cot_sale_timer_para"><span class="span_1">%H</span><span class="span_2">Hours</span></div> ' +
    '<span class="colon_sign">:</span>'+
    '<div class="cot_sale_timer_para"><span class="span_1">%M</span><span class="span_2">Min</span></div> ' +
    '<span class="colon_sign">:</span>'+
    '<div class="cot_sale_timer_para"><span class="span_1">%S</span><span class="span_2">Sec</span></div> ' 
    
    ));
  });
  // countdown jquery file ends here

// Mobile Filter Functionality
$(document).ready(function() {
    // Apply Filters Button
    $('.applyFilters').on('click', function() {
        var selectedCategories = [];
        var selectedRatings = [];
        var minPrice = $('#minPrice').val();
        var maxPrice = $('#maxPrice').val();

        // Get selected categories
        $('.filterOptions .form-check-input:checked').each(function() {
            selectedCategories.push($(this).val());
        });

        // Get selected ratings
        $('.ratingOptions .form-check-input:checked').each(function() {
            selectedRatings.push($(this).val());
        });

        // Build active filters display
        var activeFiltersHtml = '';
        if (selectedCategories.length > 0) {
            activeFiltersHtml += '<b>' + selectedCategories.join(', ') + '</b>';
            activeFiltersHtml += ' <iconify-icon icon="hugeicons:cancel-01" class="removeFilter" data-filter="category"></iconify-icon>';
        }
        if (minPrice || maxPrice) {
            if (activeFiltersHtml) activeFiltersHtml += ' ';
            activeFiltersHtml += '<b>Min ' + (minPrice || '0') + ' - Max ' + (maxPrice || '100') + '</b>';
            activeFiltersHtml += ' <iconify-icon icon="hugeicons:cancel-01" class="removeFilter" data-filter="price"></iconify-icon>';
        }
        if (selectedRatings.length > 0) {
            if (activeFiltersHtml) activeFiltersHtml += ' ';
            activeFiltersHtml += '<b>' + selectedRatings.length + ' Star Rating</b>';
            activeFiltersHtml += ' <iconify-icon icon="hugeicons:cancel-01" class="removeFilter" data-filter="rating"></iconify-icon>';
        }

        // Update active filters display
        if (activeFiltersHtml) {
            $('.activeFiltersDisplay p').html('Active Filters: ' + activeFiltersHtml);
        } else {
            $('.activeFiltersDisplay p').html('Active Filters: None');
        }

        // Close offcanvas
        var filterOffcanvas = bootstrap.Offcanvas.getInstance(document.getElementById('filterOffcanvas'));
        if (filterOffcanvas) {
            filterOffcanvas.hide();
        }

        // Show notification
        alert('Filters applied successfully!');
    });

    // Clear All Filters Button
    $('.clearFilters').on('click', function() {
        // Reset all checkboxes
        $('.filterOptions .form-check-input').prop('checked', false);
        $('.ratingOptions .form-check-input').prop('checked', false);

        // Reset price inputs
        $('#minPrice').val('');
        $('#maxPrice').val('');
        $('#priceRange').val(50);

        // Reset active filters display
        $('.activeFiltersDisplay p').html('Active Filters: None');

        // Show notification
        alert('All filters cleared!');
    });

    // Remove individual filter
    $(document).on('click', '.removeFilter', function() {
        var filterType = $(this).data('filter');

        if (filterType === 'category') {
            $('.filterOptions .form-check-input').prop('checked', false);
        } else if (filterType === 'price') {
            $('#minPrice').val('');
            $('#maxPrice').val('');
            $('#priceRange').val(50);
        } else if (filterType === 'rating') {
            $('.ratingOptions .form-check-input').prop('checked', false);
        }

        // Rebuild active filters display
        var activeFiltersHtml = '';
        var selectedCategories = [];
        var selectedRatings = [];
        var minPrice = $('#minPrice').val();
        var maxPrice = $('#maxPrice').val();

        $('.filterOptions .form-check-input:checked').each(function() {
            selectedCategories.push($(this).val());
        });

        $('.ratingOptions .form-check-input:checked').each(function() {
            selectedRatings.push($(this).val());
        });

        if (selectedCategories.length > 0) {
            activeFiltersHtml += '<b>' + selectedCategories.join(', ') + '</b>';
            activeFiltersHtml += ' <iconify-icon icon="hugeicons:cancel-01" class="removeFilter" data-filter="category"></iconify-icon>';
        }
        if (minPrice || maxPrice) {
            if (activeFiltersHtml) activeFiltersHtml += ' ';
            activeFiltersHtml += '<b>Min ' + (minPrice || '0') + ' - Max ' + (maxPrice || '100') + '</b>';
            activeFiltersHtml += ' <iconify-icon icon="hugeicons:cancel-01" class="removeFilter" data-filter="price"></iconify-icon>';
        }
        if (selectedRatings.length > 0) {
            if (activeFiltersHtml) activeFiltersHtml += ' ';
            activeFiltersHtml += '<b>' + selectedRatings.length + ' Star Rating</b>';
            activeFiltersHtml += ' <iconify-icon icon="hugeicons:cancel-01" class="removeFilter" data-filter="rating"></iconify-icon>';
        }

        if (activeFiltersHtml) {
            $('.activeFiltersDisplay p').html('Active Filters: ' + activeFiltersHtml);
        } else {
            $('.activeFiltersDisplay p').html('Active Filters: None');
        }
    });

    // Price range slider sync
    $('#priceRange').on('input', function() {
        var value = $(this).val();
        $('#maxPrice').val(value);
    });

    // Quick View Modal Functionality
    // Add quick view button to all featureCards
    $('.featureCard').each(function() {
        var $card = $(this);
        var $img = $card.find('.featureImg img');
        var $title = $card.find('.featureCnt a');
        var $price = $card.find('.featureCnt p');
        
        // Get product data
        var imgSrc = $img.attr('src') || './img/AppleBig.png';
        var title = $title.text() || 'Product Name';
        var price = $price.text() || '$0.00';
        
        // Add data attributes to quick view button
        $card.find('.featureIcons li:last-child a').attr({
            'class': 'quickViewBtn',
            'data-bs-toggle': 'modal',
            'data-bs-target': '#quickViewModal',
            'data-img': imgSrc,
            'data-title': title,
            'data-price': price,
            'data-sku': 'FRT-' + Math.floor(Math.random() * 1000),
            'data-category': 'Fruits'
        });
    });

    // Handle quick view button click
    $(document).on('click', '.quickViewBtn', function(e) {
        e.preventDefault();
        
        var $btn = $(this);
        var imgSrc = $btn.data('img');
        var title = $btn.data('title');
        var price = $btn.data('price');
        var sku = $btn.data('sku');
        var category = $btn.data('category');
        
        // Update modal content
        $('#quickViewImage').attr('src', imgSrc);
        $('#quickViewTitle').text(title);
        $('#quickViewPrice').text(price);
        $('#quickViewSku').text(sku);
        $('#quickViewCategory').text(category);
        
        // Reset quantity to 1
        $('.qtyInput').val(1);
    });

    // Quantity selector functionality
    $(document).on('click', '.qtyBtn.minus', function() {
        var $input = $(this).siblings('.qtyInput');
        var currentValue = parseInt($input.val()) || 1;
        if (currentValue > 1) {
            $input.val(currentValue - 1);
        }
    });

    $(document).on('click', '.qtyBtn.plus', function() {
        var $input = $(this).siblings('.qtyInput');
        var currentValue = parseInt($input.val()) || 1;
        if (currentValue < 10) {
            $input.val(currentValue + 1);
        }
    });

    // Prevent non-numeric input in quantity field
    $(document).on('input', '.qtyInput', function() {
        var value = $(this).val();
        value = value.replace(/[^0-9]/g, '');
        if (value === '' || parseInt(value) < 1) {
            value = 1;
        } else if (parseInt(value) > 10) {
            value = 10;
        }
        $(this).val(value);
    });

    // Add to cart button functionality
    $(document).on('click', '.addToCartBtn', function() {
        var title = $('#quickViewTitle').text();
        var price = $('#quickViewPrice').text();
        var quantity = $('.qtyInput').val();
        
        // Show success message
        alert('Added to cart:\n' + title + '\nQuantity: ' + quantity + '\nPrice: ' + price);
        
        // Close modal
        var modal = bootstrap.Modal.getInstance(document.getElementById('quickViewModal'));
        if (modal) {
            modal.hide();
        }
    });

    // Wishlist button functionality
    $(document).on('click', '.wishlistBtn', function() {
        var $btn = $(this);
        $btn.toggleClass('active');
        
        if ($btn.hasClass('active')) {
            $btn.css({
                'border-color': 'var(--branding-success)',
                'color': 'var(--branding-success)'
            });
            alert('Added to wishlist!');
        } else {
            $btn.css({
                'border-color': 'var(--gray-scale-gray-–-300)',
                'color': 'var(--gray-scale-gray-–-700)'
            });
            alert('Removed from wishlist!');
        }
    });
});
  function changeQty(delta) {
    const input = document.getElementById('qty');
    let val = parseInt(input.value) || 1;
    val = Math.max(1, val + delta);
    input.value = val;
  }
 
  // Thumbnail active state
  document.querySelectorAll('.thumbnail').forEach(thumb => {
    thumb.addEventListener('click', () => {
      document.querySelectorAll('.thumbnail').forEach(t => t.classList.remove('active'));
      thumb.classList.add('active');
    });
  });
 
  // Wishlist toggle
  const wishlistBtn = document.querySelector('.wishlist-btn');
  wishlistBtn.addEventListener('click', () => {
    const icon = wishlistBtn.querySelector('iconify-icon');
    if (icon.getAttribute('icon') === 'ph:heart-bold') {
      icon.setAttribute('icon', 'ph:heart-fill');
      wishlistBtn.style.background = '#fff0ef';
    } else {
      icon.setAttribute('icon', 'ph:heart-bold');
      wishlistBtn.style.background = '#fff';
    }
  });