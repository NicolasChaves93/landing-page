!function(t){"use strict";function e(e){var r=t(e.currentTarget);if(!r.hasClass(u)){l.removeClass(u),r.addClass(u);var a=e.currentTarget.dataset.condition,o={pageUrl:location.href,pageRef:l.closest(".tm-woo-grid-list-toggle-button-wrapper").data("page-referrer"),glCondition:a};t.cookie(g,a,{expires:365,path:"/"}),t.tmWcProductsAjax(o)}}function r(e){if(tmWooAjaxProducts.ajaxPagination){e.preventDefault();var r={pageUrl:e.currentTarget.href};t.tmWcProductsAjax(r)}}function a(e){e.preventDefault();var r=t(i).find(".product").length,a=t(e.currentTarget),c={pageUrl:e.currentTarget.dataset.href,action:"tm_wc_load_more",productsCount:r};a.addClass("loading"),t.post(tmWooAjaxProducts.ajaxurl,c,function(e){if(a.removeClass("loading"),e.success){t(i).find(".product").last().after(e.data.products),a.replaceWith(e.data.button);var r=t.Event("tm_wc_products_changed");t(document).trigger(r),o()}})}function o(){t(c).off("change","select.orderby"),s=t(n),(l=s.find(d)).off("click"),l.on("click",function(t){e(t)}),t(c).on("change","select.orderby",function(e){t.tmWcOrderingHandler(e)}),t(m).off("click"),t(m).on("click",function(t){r(t)}),t(p).off("click"),t(p).on("click",function(t){a(t)})}var c=".woocommerce-ordering",n=".tm-woo-grid-list-toggle-button",d=".tm-woo-grid-list-toggler",i=".tm-wc-ajax-products-wrapper",s=t(n),l=s.find(d),u="disabled",g="tm-woo-grid-list",f=(t(i),t(".woocommerce-breadcrumb")),m=".woocommerce-pagination a.page-numbers",p="button.tm-wc-ajax-load-more-button";t.tmWcProductsAjax=function(e){var r=t(i);r.addClass("loading"),e.action="tm_wc_rebuild_products",e.wcbreadcrumbs=f.length,t.post(tmWooAjaxProducts.ajaxurl,e,function(a){if(r.removeClass("loading"),a.success){r.replaceWith(a.data.products);var c=t.Event("tm_wc_products_changed");for(var n in a.data.filters){var d=t("div[data-sidebar="+n+"]"),i=d.children(),s=0;a.data.filters[n].forEach(function(e,r,a){!1!==e.content?void 0!==i[s]?i[s].id===e.id?(t(i[s]).replaceWith(e.content),c.widgets_updated=!0,s++):""!==e.content&&(t(i[s]).before(e.content),c.widgets_updated=!0,i=d.children(),s++):(t("div[data-sidebar="+n+"]").append(e.content),c.widgets_updated=!0,i=d.children()):s++})}a.data.wcbreadcrumbs&&f.replaceWith(a.data.wcbreadcrumbs),history.pushState&&location.href!==e.pageUrl&&history.pushState(null,null,e.pageUrl),t(document).trigger(c),o()}})},t.tmWcOrderingHandler=function(e){var r=t(e.currentTarget);if(tmWooAjaxProducts.ajaxOrderby||!r.closest("form").hasClass("woocommerce-ordering")){var a,o=location.href,c=r.closest("form").serialize(),n=location.search,d={pageUrl:a=n.length?o.replace(n,"?"+c):o+"?"+c,task:"ordering"};t.tmWcProductsAjax(d)}else r.closest("form").submit()},t(document).ready(function(){o()})}(jQuery);