/**
  * Header Connect
  * retinaLogo
  * ajaxContactForm
  * headerFixed
  * select js
  * mobileNav
  * ajaxSubscribe
  * alertBox
  * loadmore
*/

; (function ($) {
    "use strict";

    var themesflatTheme = {

        // Main init function
        init: function () {
            this.config();
            this.events();
        },

        // Define vars for caching
        config: function () {
            this.config = {
                $window: $(window),
                $document: $(document),
            };
        },

        // Events
        events: function () {
            var self = this;

            // Run on document ready
            self.config.$document.on('ready', function () {


                // Retina Logos
                self.retinaLogo();


            });

            // Run on Window Load
            self.config.$window.on('load', function () {

            });
        },

    }; // end themesflatTheme

    // Start things up
    themesflatTheme.init();

    var retinaLogos = function() {
        var retina = window.devicePixelRatio > 1 ? true : false;
          if(retina) {
              $('#site-logo-inner').find('img').attr( {src:'assets/images/logo/logo@2x.png',width:'197',height:'48'} );

              $('#logo-footer.style').find('img').attr( {src:'assets/images/logo/logo-footer@2x.png',width:'197',height:'48'} );
          }   
        };

    var ajaxContactForm = function () {
        $('#contactform,#commentform').each(function () {
            $(this).validate({
                submitHandler: function (form) {
                    var $form = $(form),
                        str = $form.serialize(),
                        loading = $('<div />', { 'class': 'loading' });

                    $.ajax({
                        type: "POST",
                        url: $form.attr('action'),
                        data: str,
                        beforeSend: function () {
                            $form.find('.form-submit,comment-form').append(loading);
                        },
                        success: function (msg) {
                            var result, cls;
                            if (msg === 'Success') {
                                result = 'Message Sent Successfully To Email Administrator. ( You can change the email management a very easy way to get the message of customers in the user manual )';
                                cls = 'msg-success';
                            } else {
                                result = 'Error sending email.';
                                cls = 'msg-error';
                            }

                            $form.prepend(
                                $('<div />', {
                                    'class': 'flat-alert ' + cls,
                                    'text': result
                                }).append(
                                    $('<a class="close" href="#"><i class="fa fa-close"></i></a>')
                                )
                            );

                            $form.find(':input').not('.submit').val('');
                        },
                        complete: function (xhr, status, error_thrown) {
                            $form.find('.loading').remove();
                        }
                    });
                }
            });
        }); // each contactform
    };


    var headerFixed = function () {
        if ($('body').hasClass('header-fixed')) {
          var nav = $('.header-lower');
          if (nav.length) {
            var
              offsetTop = nav.offset().top,
              headerHeight = nav.height(),
              injectSpace = $("<div>", {
                height: headerHeight
              }).insertAfter(nav);
            injectSpace.hide();
    
            $(window).on('load scroll', function () {
              if ($(window).scrollTop() > offsetTop + headerHeight) {
                nav.addClass('is-fixed');
                injectSpace.show();
              } else {
                nav.removeClass('is-fixed');
                injectSpace.hide();
              }
    
              if ($(window).scrollTop() > 300) {
                nav.addClass('is-small');
              } else {
                nav.removeClass('is-small');
              }
            })
          }
        }
      };
   
    //=========NICE SELECT=========
    $('.select_js').niceSelect();
        

    //Submenu Dropdown Toggle
	if($('.main-header li.dropdown2 ul').length){
		$('.main-header li.dropdown2').append('<div class="dropdown2-btn"></div>');
		
		//Dropdown Button
		$('.main-header li.dropdown2 .dropdown2-btn').on('click', function() {
			$(this).prev('ul').slideToggle(500);
		});
		
		//Disable dropdown parent link
		$('.navigation li.dropdown2 > a').on('click', function(e) {
			e.preventDefault();
		});
		
		//Disable dropdown parent link
		$('.main-header .navigation li.dropdown2 > a,.hidden-bar .side-menu li.dropdown2 > a').on('click', function(e) {
			e.preventDefault();
		});
		
		$('.price-block .features .arrow').on('click', function(e) {
			$(e.target.offsetParent.offsetParent.offsetParent).toggleClass('active-show-hidden')
		});
		
	}

    // Mobile Nav Hide Show
	if($('.mobile-menu').length){
		
		//$('.mobile-menu .menu-box').mCustomScrollbar();
		
		var mobileMenuContent = $('.main-header .nav-outer .main-menu').html();
		$('.mobile-menu .menu-box .menu-outer').append(mobileMenuContent);
		$('.sticky-header .main-menu').append(mobileMenuContent);
		
		//Hide / Show Submenu
		$('.mobile-menu .navigation > li.dropdown2 > .dropdown2-btn').on('click', function(e) {
			e.preventDefault();
			var target = $(this).parent('li').children('ul');
			
			if ($(target).is(':visible')){
				$(this).parent('li').removeClass('open');
				$(target).slideUp(500);
				$(this).parents('.navigation').children('li.dropdown2').removeClass('open');
				$(this).parents('.navigation').children('li.dropdown2 > ul').slideUp(500);
				return false;
			}else{
				$(this).parents('.navigation').children('li.dropdown2').removeClass('open');
				$(this).parents('.navigation').children('li.dropdown2').children('ul').slideUp(500);
				$(this).parent('li').toggleClass('open');
				$(this).parent('li').children('ul').slideToggle(500);
			}
		});

		//3rd Level Nav
		$('.mobile-menu .navigation > li.dropdown2 > ul  > li.dropdown2 > .dropdown2-btn').on('click', function(e) {
			e.preventDefault();
			var targetInner = $(this).parent('li').children('ul');
			
			if ($(targetInner).is(':visible')){
				$(this).parent('li').removeClass('open');
				$(targetInner).slideUp(500);
				$(this).parents('.navigation > ul').find('li.dropdown2').removeClass('open');
				$(this).parents('.navigation > ul').find('li.dropdown > ul').slideUp(500);
				return false;
			}else{
				$(this).parents('.navigation > ul').find('li.dropdown2').removeClass('open');
				$(this).parents('.navigation > ul').find('li.dropdown2 > ul').slideUp(500);
				$(this).parent('li').toggleClass('open');
				$(this).parent('li').children('ul').slideToggle(500);
			}
		});

		//Menu Toggle Btn
		$('.mobile-nav-toggler').on('click', function() {
			$('body').addClass('mobile-menu-visible');

		});

		//Menu Toggle Btn
		$('.mobile-menu .menu-backdrop, .close-btn').on('click', function() {
			$('body').removeClass('mobile-menu-visible');
			$('.mobile-menu .navigation > li').removeClass('open');
			$('.mobile-menu .navigation li ul').slideUp(0);
		});

		$(document).keydown(function(e){
	        if(e.keyCode === 27) {
				$('body').removeClass('mobile-menu-visible');
			$('.mobile-menu .navigation > li').removeClass('open');
			$('.mobile-menu .navigation li ul').slideUp(0);
        	}
	    });
		
	}

    var ajaxSubscribe = {
        obj: {
            subscribeEmail: $('#subscribe-email'),
            subscribeButton: $('#subscribe-button'),
            subscribeMsg: $('#subscribe-msg'),
            subscribeContent: $("#subscribe-content"),
            dataMailchimp: $('#subscribe-form').attr('data-mailchimp'),
            success_message: '<div class="notification_ok">Thank you for joining our mailing list! Please check your email for a confirmation link.</div>',
            failure_message: '<div class="notification_error">Error! <strong>There was a problem processing your submission.</strong></div>',
            noticeError: '<div class="notification_error">{msg}</div>',
            noticeInfo: '<div class="notification_error">{msg}</div>',
            basicAction: 'mail/subscribe.php',
            mailChimpAction: 'mail/subscribe-mailchimp.php'
        },

        eventLoad: function () {
            var objUse = ajaxSubscribe.obj;

            $(objUse.subscribeButton).on('click', function () {
                if (window.ajaxCalling) return;
                var isMailchimp = objUse.dataMailchimp === 'true';

                if (isMailchimp) {
                    ajaxSubscribe.ajaxCall(objUse.mailChimpAction);
                } else {
                    ajaxSubscribe.ajaxCall(objUse.basicAction);
                }
            });
        },

        ajaxCall: function (action) {
            window.ajaxCalling = true;
            var objUse = ajaxSubscribe.obj;
            var messageDiv = objUse.subscribeMsg.html('').hide();
            $.ajax({
                url: action,
                type: 'POST',
                dataType: 'json',
                data: {
                    subscribeEmail: objUse.subscribeEmail.val()
                },
                success: function (responseData, textStatus, jqXHR) {
                    if (responseData.status) {
                        objUse.subscribeContent.fadeOut(500, function () {
                            messageDiv.html(objUse.success_message).fadeIn(500);
                        });
                    } else {
                        switch (responseData.msg) {
                            case "email-required":
                                messageDiv.html(objUse.noticeError.replace('{msg}', 'Error! <strong>Email is required.</strong>'));
                                break;
                            case "email-err":
                                messageDiv.html(objUse.noticeError.replace('{msg}', 'Error! <strong>Email invalid.</strong>'));
                                break;
                            case "duplicate":
                                messageDiv.html(objUse.noticeError.replace('{msg}', 'Error! <strong>Email is duplicate.</strong>'));
                                break;
                            case "filewrite":
                                messageDiv.html(objUse.noticeInfo.replace('{msg}', 'Error! <strong>Mail list file is open.</strong>'));
                                break;
                            case "undefined":
                                messageDiv.html(objUse.noticeInfo.replace('{msg}', 'Error! <strong>undefined error.</strong>'));
                                break;
                            case "api-error":
                                objUse.subscribeContent.fadeOut(500, function () {
                                    messageDiv.html(objUse.failure_message);
                                });
                        }
                        messageDiv.fadeIn(500);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('Connection error');
                },
                complete: function (data) {
                    window.ajaxCalling = false;
                }
            });
        }
    };

   

    var alertBox = function () {
        $(document).on('click', '.close', function (e) {
            $(this).closest('.flat-alert').remove();
            e.preventDefault();
        })
    };


    // Dom Ready
    $(function () {
        $( window ).on('load resize',function() {
            retinaLogos();
        });
        headerFixed();
        ajaxContactForm();
        ajaxSubscribe.eventLoad();
        alertBox();

    });

})(jQuery);



//////////////////////////////////////////////Zoom Image /////////////////////////////////////////////////////////

 // Function to activate zoom modal functionality
  function enableZoomableImages(selector) {
    const images = document.querySelectorAll(selector);
    const modal = document.getElementById('globalImageModal');
    const modalImg = document.getElementById('globalModalImage');

    images.forEach(img => {
      img.style.cursor = 'zoom-in';
      img.addEventListener('click', function () {
        modalImg.src = this.src;
        modal.style.display = 'flex';
      });
    });
  }

  // Close function
  function closeImageModal() {
    document.getElementById('globalImageModal').style.display = 'none';
  }

  // Enable zoom on images with class `.zoomable-image`
  window.onload = function () {
    enableZoomableImages('.zoomable-image');
  };


  ////////////////////////////////////////////////////////Comman Delete/////////////////////////////////////////////////


//   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.delete-record').forEach(button => {
        button.addEventListener('click', function () {
            const id = this.getAttribute('data-id');
            const url = this.getAttribute('data-url');
            const table = this.getAttribute('data-table');
            const key = this.getAttribute('data-key');
            const redirect = this.getAttribute('data-redirect');

            console.log(url);
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you really want to delete this record?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch(url, {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify({
                            id: id,
                            table: table,
                            key: key
                        })
                    })
                    .then(res => res.json())
                    .then(response => {
                        if (response.status === 'success') {
                            Swal.fire('Deleted!', response.message, 'success').then(() => {
                                window.location.href = redirect;
                            });
                        } else {
                            Swal.fire('Error!', response.message, 'error');
                        }
                    });
                }
            });
        });
    });
});


// ///////////////////////////////////////////Comman Status Change/////////////////////////////////////////////////


document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.update-status-btn').forEach(button => {
        button.addEventListener('click', function () {
            const id = this.getAttribute('data-id');
            const table = this.getAttribute('data-table');
            const key = this.getAttribute('data-key');
            const status = this.getAttribute('data-status');
            const redirect = this.getAttribute('data-redirect');
            const message = this.getAttribute('data-message') || "Do you want to update the status?";
            Swal.fire({
                title: 'Confirm Status Change',
                text: message,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, update it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch(updateStatusUrl, {
                        method: "POST",
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify({
                            id: id,
                            table: table,
                            key: key,
                            status: status
                        })
                    })
                    .then(res => res.json())
                    .then(response => {
                        if (response.status === 'success') {
                            Swal.fire('Updated!', response.message, 'success').then(() => {
                                window.location.href = redirect;
                            });
                        } else {
                            Swal.fire('Error!', response.message, 'error');
                        }
                    });
                }
            });
        });
    });
});


// /////////////////////////////////////////////////////get_category_by_vehicle_type///////////////////////////////////////////////////////////////////


$(document).ready(function () {
    $('#vehicle_type_id').on('change', function () {
        const vehicleTypeId = $(this).val();

        if (vehicleTypeId !== "") {
            $.ajax({
                url: URL,
                type: 'POST',
                data: { vehicle_type_id: vehicleTypeId },
                dataType: 'json',
                success: function (response) {
                    $('#cat_id').html('<option value="">Select Category</option>');
                    $.each(response, function (index, item) {
                        $('#cat_id').append('<option value="' + item.id + '">' + item.name + '</option>');
                    });
                },
                error: function () {
                    alert('Error loading cat_id list.');
                }
            });
        } else {
            $('#cat_id').html('<option value="">Select Category</option>');
        }
    });
});


// /////////////////////////////////////////////////////get_makes_by_category_type///////////////////////////////////////////////////////////////////


$(document).ready(function () {
    $('#cat_id').on('change', function () {
        const catId = $(this).val();

        if (catId !== "") {
            $.ajax({
                url: URL1,
                type: 'POST',
                data: { cat_id: catId },
                dataType: 'json',
                success: function (response) {
                    $('#make_id').html('<option value="">Select Make</option>');
                    $.each(response, function (index, item) {
                        $('#make_id').append('<option value="' + item.id + '">' + item.name + '</option>');
                    });
                },
                error: function () {
                    alert('Error loading make list.');
                }
            });
        } else {
            $('#make_id').html('<option value="">Select Make</option>');
        }
    });
});


// //////////////////////////////////////////////////get_model_by_make_type/////////////////////////////////////////////////////////////////////


$(document).ready(function () {
    $('#make_id').on('change', function () {
        const makeId = $(this).val();

        if (makeId !== "") {
            $.ajax({
                url: URL2,
                type: 'POST',
                data: { make_id: makeId },
                dataType: 'json',
                success: function (response) {
                    $('#model_id').html('<option value="">Select Model</option>');
                    $.each(response, function (index, item) {
                        $('#model_id').append('<option value="' + item.id + '">' + item.name + '</option>');
                    });
                },
                error: function () {
                    alert('Error loading make list.');
                }
            });
        } else {
            $('#model_id').html('<option value="">Select Model</option>');
        }
    });
});

// //////////////////////////////////////////////////////////get_variant_by_model//////////////////////////////////////////////////////

$(document).ready(function () {
    $('#model_id').on('change', function () {
        const modelId = $(this).val();

        if (modelId !== "") {
            $.ajax({
                url: URL3,
                type: 'POST',
                data: { model_id: modelId },
                dataType: 'json',
                success: function (response) {
                    $('#variant_id').html('<option value="">Select Variant</option>');
                    $.each(response, function (index, item) {
                        $('#variant_id').append('<option value="' + item.id + '">' + item.name + '</option>');
                    });
                },
                error: function () {
                    alert('Error loading make list.');
                }
            });
        } else {
            $('#variant_id').html('<option value="">Select Variant</option>');
        }
    });
});

// //////////////////////////////////////////////////////////get_city_by_canton//////////////////////////////////////////////////////

$(document).ready(function () {
    $('#state').on('change', function () {
        const stateId = $(this).val();

        if (stateId !== "") {
            $.ajax({
                url: URL4,
                type: 'POST',
                data: { state: stateId },
                dataType: 'json',
                success: function (response) {
                    $('#city').html('<option value="">Select City</option>');
                    $.each(response, function (index, item) {
                        $('#city').append('<option value="' + item.id + '">' + item.city_name + '</option>');
                    });
                },
                error: function () {
                    alert('Error loading make list.');
                }
            });
        } else {
            $('#city').html('<option value="">Select City</option>');
        }
    });
});


// ///////////////////////////////////////////////Hide & Show Fields Based on Vehicle Type ///////////////////////////////////////////////

$(document).ready(function(){
    var $vt = $('#vehicle_type_id');

    function toggleFields() {
        // Read data-type attribute of selected <option>
        var typeKey = $vt.find('option:selected').data('type'); // e.g., "car", "bike", "bus"
        // Hide all feature blocks
        $('.feature-car, .feature-bike, .feature-commercial').hide();
        // Show matching ones
        if (typeKey) {
            $('.feature-' + typeKey).show();
        }
    }

    // On page load (for edit case with pre-selected value)
    toggleFields();

    // On change of vehicle type
    $vt.on('change', function(){
        toggleFields();
    });
});