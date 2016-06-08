$.fn.tabs=function(){var t=this;this.each(function(){var e=$(this);$(e.attr("href")).hide(),e.click(function(){return $(t).removeClass("selected"),$(this).addClass("selected"),$($(this).attr("href")).fadeIn(),$(t).not(this).each(function(t,e){$($(e).attr("href")).hide()}),!1})}),$(this).show(),$(this).first().click()};
//# sourceMappingURL=maps/tabs.js.map
