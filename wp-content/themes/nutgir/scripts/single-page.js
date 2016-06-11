$(document).ready()
{
	for (i=0; i < $("p img").size(); i++)
	{
		if ( (i % 2) == 0 )
		{
			$("p img").eq(i).addClass("right");
		}
		else
		{
			$("p img").eq(i).addClass("left");
		}
	}	
}