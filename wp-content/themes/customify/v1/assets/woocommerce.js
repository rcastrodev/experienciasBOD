jQuery(document).ready(function(r){function a(){r(document.body).trigger("wc_toggle_done")}r.blockUI&&(r.blockUI.defaults.overlayCSS.backgroundColor="#FFF",r.blockUI.defaults.overlayCSS.opacity=.7),jQuery(document).on("selective-refresh-content-rendered",function(t,e){"Customify_Builder_Item_WC_Cart__render"!==e&&"customify_customize_render_header"!==e||r(document.body).trigger("wc_fragment_refresh")}),r(document.body).on("added_to_cart",function(t,e,a){r(".item--wc_cart").addClass("cart-active")}),Customify_JS.wc_open_cart&&r(document.body).trigger("added_to_cart"),r(document.body).on("wc_cart_button_updated",function(t,e){var a=e.parent();e.hasClass("single_add_to_cart_button")||r(".added_to_cart",a).addClass("button");var c=r(".add_to_cart_button",a).data("icon-pos")||"before",n=r(".add_to_cart_button",a).data("cart-icon")||"",o="",i="";n&&(i='<i class="'+n+'"></i>'),o="after"===c?i?wc_add_to_cart_params.i18n_view_cart+" "+i:wc_add_to_cart_params.i18n_view_cart:i?i+" "+wc_add_to_cart_params.i18n_view_cart:wc_add_to_cart_params.i18n_view_cart,r(".added_to_cart.wc-forward",a).html(o)}),r(document.body).on("hover",".item--wc_cart",function(){r(this).removeClass("cart-active")}),r(document.body).on("click",".wc-view-switcher .wc-view-mod",function(t){t.preventDefault();var e=r(this).data("mod")||"grid";r(".wc-view-switcher .wc-view-mod").removeClass("active"),r(this).addClass("active"),r(".woocommerce-listing, .products").removeClass("wc-grid-view wc-list-view"),r(".woocommerce-listing, .products").addClass("wc-"+e+"-view"),function(t,e,a){var c=new Date;c.setTime(c.getTime()+24*a*60*60*1e3);var n="expires="+c.toUTCString();document.cookie=t+"="+e+";"+n+";path=/"}("customify_wc_pl_view_mod",e,360)}),r.fn._wc_plus_minus=function(){return this.each(function(){var a=r(this);if(!(a.data("qty-added")||!1)){a.data("qty-added",1),a.wrap('<span class="input-qty-pm"></span>');var t=a.parent();a.attr("type","text"),t.append('<button type="button" class="input-pm-act input-pm-plus">+</button>'),t.prepend('<button type="button" class="input-pm-act input-pm-minus">-</button>'),r(".input-pm-plus",t).click(function(t){t.preventDefault();var e=parseInt(a.val());isNaN(e)?a.val(0):a.val(e+1),a.trigger("change")}),r(".input-pm-minus",t).click(function(t){t.preventDefault();var e=parseInt(a.val());!isNaN(e)&&0<e?a.val(e-1):a.val(0),a.trigger("change")})}}),this},woocommerce_params.qty_pm&&r('input.qty[type="number"]')._wc_plus_minus(),r(document.body).on("updated_wc_div",function(){r('input.qty[type="number"]')._wc_plus_minus()});var c=r(".wc-tabs-toggle");r(".tab-section",c).not(":eq(0)").removeClass("active").find(".tab-section-content").slideUp(a),c.on("click",".tab-section-heading",function(t){t.preventDefault();var e=r(this).closest(".tab-section");e.hasClass("active")?r(".tab-section",c).removeClass("active").find(".tab-section-content").slideUp(a):(r(".tab-section",c).removeClass("active").find(".tab-section-content").slideUp(a),e.toggleClass("active").find(".tab-section-content").slideDown(a))})});