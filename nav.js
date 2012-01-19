(function( $ ){

$.fn.noteNav=function(Align)
{
	return this.each(function()
	{
		var element=$(this),
		html=element.html();
		Align=Align.toLowerCase();
		
		switch(Align)
		{
			case 'left':element.addClass('NoteNav-Left');
			break;
			case 'center':element.addClass('NoteNav-Center');
			break;
			case 'right':element.addClass('NoteNav-Right');
			break;
			default:return;
		}
		element.addClass('NoteNav');
		//element.html('<br>'+html);
	});
};
})( jQuery );