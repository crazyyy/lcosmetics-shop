$(document).ready(function() {

	/* ---------------------------------------------------------------------- */
		/*	Start of Latest Module
		/* ---------------------------------------------------------------------- */
		var latestitem = 1; // list of latestitems on one page
		var active = 0;
		var latest_element = $(".btnfeatured li.number").length;
		$(".tg-hazumi-featured-product > .featured").css("display", "none");
		$(".tg-hazumi-featured-product > .featured").slice(0, latestitem).css("display", "block");
		$(".tg-hazumi-featured-product").css("display", "block");
		$('.btnfeatured li.number').eq(0).addClass("active");


		$('.btnfeatured li.number a').click(function() {
			var element_index = $('.btnfeatured li.number a').index(this);
			active = element_index;
			$('.btnfeatured li.number').removeClass("active");
			$('.btnfeatured li.number').eq(element_index).addClass("active");
			$(".tg-hazumi-featured-product > .featured").hide();
			$(".tg-hazumi-featured-product > .featured").slice(element_index*latestitem, element_index*latestitem+latestitem).show();
			return false;
		});
		
		
	/* Ajax Cart */
	$('#cart > .heading a').live('hover', function() {
		$('#cart').addClass('active');
		
		$('#cart').load('index.php?route=module/cart #cart > *');
		
		$('#cart').live('mouseleave', function() {
			$(this).removeClass('active');
		});
	});
	
	/* Ajax Setting */
	$('#tg-setting').live('hover', function() {
		$('#tg-setting').addClass('active');
		
		$('#tg-setting').live('mouseleave', function() {
			$(this).removeClass('active');
		});
	});
	
	/* Ajax Links */
	$('#tg-links').live('hover', function() {
		$('#tg-links').addClass('active');
		
		$('#tg-links').live('mouseleave', function() {
			$(this).removeClass('active');
		});
	});

});

function themeglobal_addToCart(product_id) {
  $.ajax({
      url: 'index.php?route=checkout/cart/add',
      type: 'post',
      data: 'product_id=' + product_id,
      dataType: 'json',
      success: function(json) {

          if (json['redirect']) {
              location = json['redirect'];
          }

          if (json['error']) {
              if (json['error']['warning']) {
                  themeglobalNotification(json['product_name'], json['product_pic'], json['error']['warning'], 'failure');
              }
          }

          if (json['success']) {
               themeglobalNotification(json['product_name'], json['product_pic'], json['success'], 'success');
			  $('#cart-total').html(json['total']);
          }
      }
  });
}

function themeglobal_addToWishList(product_id) {
	$.ajax({
		url: 'index.php?route=account/wishlist/add',
		type: 'post',
		data: 'product_id=' + product_id,
		dataType: 'json',
		success: function(json) {
			if (json['success']) {
				 themeglobalNotification(json['product_name'], json['product_pic'], json['success'], 'success');
			}
			if (json['failure']) {
				 themeglobalNotification(json['product_name'], json['product_pic'], json['failure'], 'failure');
			}
			$('#wishlist-total').html(json['total']);
		}
	});
}

function themeglobal_addToCompare(product_id) {
	$.ajax({
		url: 'index.php?route=product/compare/add',
		type: 'post',
		data: 'product_id=' + product_id,
		dataType: 'json',
		success: function(json) {
			if (json['success']) {
               themeglobalNotification(json['product_name'], json['product_pic'], json['success'], 'success');
				$('#compare-total').html(json['total']);
			}
		}
	});
}

function themeglobalNoticeTemplates() {
  if (!$("#notification-container").length) {
    var tpl = '<div id="notification-container" style="display: none">\
                 <div id="template-pic">\
                   <a class=" ui-notify-close ui-notify-cross  "   href="#">x</a>\
                   <h2 class="icon_success"><span class="style_title">#{title}</span></h2>\
                   <div class="style_text">\
                     #{thumb}\
                     <h3>#{text}</h3>\
                   </div>\
                 </div>\
                 <div id="template-no-pic">\
                   <a class="  ui-notify-close ui-notify-cross  "  href="#">x</a>\
                   <h2 class="icon_success"><span class="style_title">#{title}</span></h2>\
                   <div class="style_text">\
                     <h3>#{text}</h3>\
                   </div>\
                 </div>\
               </div>';
    $(tpl).appendTo("body");
    $("#notification-container").notify();
  }
}

function themeglobalNotification(title, thumb, text, type) {
    if ($.browser.msie && $.browser.version.substr(0,1) < 8) {
        customNotificationnopic(title, text, type);

        return false;
    }
    themeglobalNoticeTemplates();
    $("#notification-container").notify("create", "template-pic", {
        title: title,
        thumb: thumb,
        text:  text,
        type: type
        },{
        expires: 6000
        }
    );
}

function customNotificationnopic(title, text, type) {
    themeglobalNoticeTemplates();
    $("#notification-container").notify("create", "template-no-pic", {
        title: title,
        text:  text,
        type: type
        },{
        expires: 6000
        }
    );
}