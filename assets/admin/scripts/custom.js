$(document).ready(function(){
	var sidebar_id = $("#sidebar_id").val();

	$("#add_page").click(function(){
		var item = $(this);
		item.find('i').show();
		if($("select[name=add_link]").val() != ''){
			$.post(base_url+'/admin/sidebars/add_link/'+sidebar_id,{page_id:$("select[name=add_link]").val()},function(data){
	            $("#sidebar-body").append(data);
				item.find('i').hide();
				$("select[name=add_link]").val('');
	        });
		} else {
			alert('Please select a page');
			item.find('i').hide();

		}
	});

	$("#add_title").click(function(){
		var item = $(this);
		item.find('i').show();
		if($("input[name=title]").val() != ''){
			$.post(base_url+'/admin/sidebars/add_title/'+sidebar_id,{title:$("input[name=title]").val()},function(data){
	            $("#sidebar-body").append(data);
				item.find('i').hide();
				$("input[name=title]").val('');
	        });
		} else {
			alert('Please add title');
			item.find('i').hide();
		}
		
	});

	$("#add_image").click(function(){
		var item = $(this);
		item.find('i').show();
		if($("input[name=image_id]").val() != ''){
			$.post(base_url+'/admin/sidebars/add_image/'+sidebar_id,{image_id:$("input[name=image_id]").val()},function(data){
	            $("#sidebar-body").append(data);
				item.find('i').hide();
        		$("#img-view").html('');
       			$("input[name=image_id]").val('');
	        });
		} else {
			alert('Please select an image');
			item.find('i').hide();
		}
		
	});
	$("#add_html").click(function(){
		var item = $(this);
		item.find('i').show();
		$.post(base_url+'/admin/sidebars/add_html/'+sidebar_id,{},function(data){
            $("#sidebar-body").append(data);
			item.find('i').hide();
    		$("#img-view").html('');
   			$("textarea[name=custom_html]").val('');
   			initialize();
        });
	});

	$("#add_carousel").click(function(){
		var item = $(this);
		item.find('i').show();
		if($("select[name=carousel_id]").val() != ''){
			$.post(base_url+'/admin/sidebars/add_carousel/'+sidebar_id,{carousel_id:$("select[name=carousel_id]").val()},function(data){
	            $("#sidebar-body").append(data);
				item.find('i').hide();
       			$("select[name=carousel_id]").val('');
	        });
		} else {
			alert('Please select a carousel');
			item.find('i').hide();
		}
		
	});

	$("#select_image").click(function(){
		$('.modal-title').html('All Images');
		$('.modal-body').html('Loading Images... Please wait');
		$.post(base_url+'/admin/get_images',{},function(data){
            $(".modal-body").html(data);
        });
	});

	$(document).on("click",".remove", function(){
		var item = $(this);
		var id = $(this).attr("data-id");
        $(this).parent().remove();
        $.post(base_url+'/admin/sidebars/remove/'+sidebar_id,{itemid:id},function(data){
            $(".modal-body").html(data);
        });
    });

    $(document).on("click",".image-link", function(){
    	var dataImage = $(this).attr('data-image');
    	var dataId = $(this).attr('data-id');
        $("#full").modal('hide');
        $("#img-view").html('<img src="'+dataImage+'" style="width:100%; height:auto">');
        $("input[name=image_id]").val(dataId);
    });


});
$(function() {

	$.extend($.tablesorter.themes.bootstrap, {
		table      : 'table table-bordered',
		header     : 'bootstrap-header', // give the header a gradient background
		footerRow  : '',
		footerCells: '',
		icons      : '', // add "icon-white" to make them white; this icon class is added to the <i> in the header
		sortNone   : 'fa fa-sort',
		sortAsc    : 'fa fa-chevron-up',
		sortDesc   : 'fa fa-chevron-down',
		active     : '', // applied when column is sorted
		hover      : '', // use custom css here - bootstrap class may not override it
		filterRow  : '', // filter row class
		even       : '', // odd row zebra striping
		odd        : ''  // even row zebra striping
	});
	$(".tablesorter").tablesorter({
		theme : "bootstrap",
		widthFixed: true,

		headerTemplate : '{content} {icon}', 
		widgets : [ "uitheme", "filter", "zebra" ],
		widgetOptions : {
			zebra : ["even", "odd"],
			filter_reset : ".reset"
		},
		headers: {
	    }
	})
});

$(document).ready(function(){
	$("#sortable1").sortable();
    $("#sortable1").disableSelection();

    $("#sidebar-body").sortable();
    $("#sidebar-body").disableSelection();
    initialize();
    $('.fancybox').fancybox();

		// var editor =  $('.textarea').wysihtml5({
		// 	"font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
		// 	"emphasis": true, //Italics, bold, etc. Default true
		// 	"lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
		// 	"html": true, //Button which allows you to edit the generated HTML. Default false
		// 	"link": true, //Button to insert a link. Default true
		// 	"image": false, //Button to insert an image. Default true,
		// 	"color": false //Button to change color of font  
		// });

		// editor.on("load", function() {
		//    editor.focus();
		//    editor.composer.commands.exec("insertHTML", "<a href='#'>asdasd</a>");
		// });
});
function initialize(){
    $('textarea.editor1').ckeditor();
}
