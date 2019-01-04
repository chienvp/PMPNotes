dragula([
	document.getElementById('0'),
	document.getElementById('1'),
	document.getElementById('2'),
	document.getElementById('3'),
	document.getElementById('4'),
	document.getElementById('5')
])

.on('drag', function(el) {
	
	// add 'is-moving' class to element being dragged
	el.classList.add('is-moving');
})
.on('dragend', function(el) {
	
	// remove 'is-moving' class from element after dragging has stopped
	el.classList.remove('is-moving');
	
	// add the 'is-moved' class for 600ms then remove it
	window.setTimeout(function() {
		el.classList.add('is-moved');
		window.setTimeout(function() {
			el.classList.remove('is-moved');
		}, 600);
	}, 100);
});


var createOptions = (function() {
	var dragOptions = document.querySelectorAll('.drag-options');
	
	// these strings are used for the checkbox labels
	var options = ['Research', 'Strategy', 'Inspiration', 'Execution'];
	
	// create the checkbox and labels here, just to keep the html clean. append the <label> to '.drag-options'
	function create() {
		for (var i = 0; i < dragOptions.length; i++) {

			options.forEach(function(item) {
				var checkbox = document.createElement('input');
				var label = document.createElement('label');
				var span = document.createElement('span');
				checkbox.setAttribute('type', 'checkbox');
				span.innerHTML = item;
				label.appendChild(span);
				label.insertBefore(checkbox, label.firstChild);
				label.classList.add('drag-options-label');
				dragOptions[i].appendChild(label);
			});

		}
	}
	
	return {
		create: create
	}
	
	
}());

var showOptions = (function () {
	
	// the 3 dot icon
	var more = document.querySelectorAll('.drag-header-more');
	
	function show() {
		// show 'drag-options' div when the more icon is clicked
		var target = this.getAttribute('data-target');
		var options = document.getElementById(target);
		options.classList.toggle('active');
	}
	
	
	function init() {
		for (i = 0; i < more.length; i++) {
			more[i].addEventListener('click', show, false);
		}
	}
	
	return {
		init: init
	}
}());

jQuery.fn.shuffle = function() {
  var j;
  for (var i = 0; i < this.length; i++) {
    j = Math.floor(Math.random() * this.length);
    $(this[i]).before($(this[j]));
  }
  return this;
};

//Planning processes ordering test
$('#planning').click(function(){
	//first trigger new game
	$('#new').trigger('click').replaceWith("<a href='rita.php'>Start new game</a>");
	$('#result').replaceWith("<a id='seq' style='color:#C60'>Show sequence errors and hints to fix them</a>");
	$('#shu').replaceWith("<a id='shuPla'>Shuffle the 'Planning' list</a>");
	
	$('#shuPla').click(function(){ 
		$('.planning').shuffle();
		$("#0 li").shuffle();
		$(".planning").sortable({ items: "li", handle:'.containerTitle', opacity: 0.6, helper: 'clone', forcePlaceholderSize: true,forceHelperSize: true});
		return false;
	});
	
	//Show sequence of planning items
	$('#seq').click(function(){
		$('.unmovable').remove();
		
		i=201;
		n=1;
		
		$('.pane ul').find('li').each(function(){
			$(this).attr('rel',i);
			i++;
		});
		
		$('.pane ul').find('li').each(function(){
			if(parseInt($(this).attr('rel'))!=parseInt($(this).attr('value')))
			{
				var updown='';
				if(parseInt($(this).attr('rel'))>parseInt($(this).attr('value')))
					updown=parseInt($(this).attr('rel'))-parseInt($(this).attr('value'))+" steps UP &uarr;"; 
				else
					updown=parseInt($(this).attr('value'))-parseInt($(this).attr('rel'))+" steps DOWN &darr;";
				
				$(this).find('.bullet').remove();
				$(this).html("<span class=bullet>"+updown+" - </span>"+ $(this).html()).css('background','#C60');
			}
			else
			{
				$(this).find('.bullet').remove();
				$(this).html("<span class=bullet>"+n+" - </span>"+ $(this).html()).css('background','#E7E7E7');
			}
			n++;
		});
		
	  return false;
	});
	
	//From everything from mixed but leave planning
	$('#0').find('li').each(function(){
		if($(this).attr('data')!='2') $(this).remove();//remove all others
	});
	
	//shift planning list from mixed to planning
	$('.drag-column .drag-column-planning').append($('#0').html());
	//Shuffle planning list
	$('.drag-column .drag-column-planning').shuffle().parent().css({"width":"500px", "margin":"0 auto","position":"absolute","left":"32%"});
	$(".drag-column .drag-column-planning").sortable({ items: "li", handle:'.containerTitle', opacity: 0.6, helper: 'clone', forcePlaceholderSize: true,forceHelperSize: true});
	//Remove all other panels and just leave the planning panel for eazy sorting
	$('#masterList').find('ul').each(function(){
		if(!$(this).hasClass('planning')) $(this).parent().remove();
	});
	return false;
});

$('#new').click(function(){
	if(!confirm('Are you sure you want to start a new game?')) return false;
	var list='';
	$('.drag-column-planning').each(function(){
		list+=$(this).find('ul').html();
		$(this).find('ul').html("<li class='unmovable'></li>");
	});
	console.log('Vao roi nha' + list);
	$('#0').append(list).shuffle();
	$('#0').find('.correct').each(function(){
		$(this).parent().css('background','#E7E7E7');
		$(this).remove();
	});
	$('#r').remove();
	$("#masterList").sortable({ items: "li", handle:'.containerTitle', opacity: 0.6, helper: 'clone', forcePlaceholderSize: true,forceHelperSize: true});
	return false;
});

$("#0 li").shuffle();
$('#shu').click(function(){ 
	$("#0 li").shuffle();
	$("#masterList").sortable({ items: "li", handle:'.containerTitle', opacity: 0.6, helper: 'clone', forcePlaceholderSize: true,forceHelperSize: true});
	return false;
});
var totalItems = $('#0 li').length;
$( "#result" ).click(function() {
	if($('#0').find('li').length==totalItems)
	{
		alert('No results found.');
		return false;
		//if (!confirm('Are you sure you want to check the results\nbefore you complete the game?')) return false;
	}
	var wrong=0;
	var total=0;
	$("#masterList").find('li').each(function(){
		//Check the result
		if($(this).attr('data')!=$(this).parent().attr('id') && $(this).parent().attr('id')!='0' && $(this).attr('remove')!='remove')
		{
			$(this).css("background","#FF7774");
			wrong+=1;
			var correctHeading='';
			var currentId=$(this).attr('data');
			$("#masterList").find('ul').each(function(){
				console.log('current class: ' + currentId + '------' +$(this).attr('id') + '--' + $(this).parent().find('.drag-column-header').html());
				if($(this).attr('id')==currentId)
					correctHeading=$(this).parent().find('.headertitle').html();
			});
			$(this).find('.correct').remove();
			$(this).append("<span class='correct' style='display:block;padding-top:3px;margin-top:3px;border-top: 1px dotted #ff0000;'><strong>Should be under:<br> \""+ correctHeading +"\"</strong></span>");
		}
		
		//attmpted
		if($(this).parent().attr('id')!='0' && $(this).attr('remove')!='remove') total+=1;
	});
	$('#r').remove();
	
	if(total>0)
	{
		var string="<span id='r'> ( Total: <strong>"+totalItems+"</strong> | Attempted: <strong>";
		string+=total+"</strong> | Result: <strong>"+ parseInt(total-wrong)+"</strong> out of <strong>";
		string+=total + "</strong> | <strong>";
		string+=parseInt((total-wrong)*100/total);
		string+="%</strong>)</span>";
		$(this).after(string);
	}
	return false;
});

createOptions.create();
showOptions.init();