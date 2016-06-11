var menuTriggered = false;
$('#menu-button-container').click(
	function ()
	{
		if ( menuTriggered == false)
		{
			menuActive();
			menuTriggered = true;
		}			
		else 
		{
			menuInactive();
			menuTriggered = false;
		}				
	}
);
function menuActive()
{
	$("#menu-button div").eq(0).velocity(
		{ translateY: "4px", rotateZ: "45deg" },
		{ duration:300, easing: "ease" }
	);
	$("#menu-button div").eq(1).velocity(
		{ translateY: "-4px", rotateZ: "-45deg" },
		{ duration:300, easing: "ease" }
	);
	$(".menu").velocity(
		{ translateX: "-100%", opacity: 1 },
		{ duration: "500", easing:"ease" }
	);
}
function menuInactive()
{
	$("#menu-button div").eq(0).velocity("reverse"
	);

	$("#menu-button div").eq(1).velocity("reverse"
	);

	$(".menu").velocity("reverse"
	);
}
