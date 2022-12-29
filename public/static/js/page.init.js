$(document).ready(function(){
	$('footer').html(`<script src="/static/js/async.js" charset="utf-8" ></script><script src="/static/js/script.js" charset="utf-8" ></script>`);
	$('.darkmode i').each(function(e,l){$(this).hasClass('mdi-brightness-4') ? Utils.darkMode(true,this) : null;});
})
