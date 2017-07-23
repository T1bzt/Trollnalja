var largest = 0; //start with 0

$('ul li').each(function(){ //loop through each section
    var findWidth = $(this).width(); //find the height
    if(findWidth > largest){ //see if this height is greater than "largest" height
        largest = findWidth; //if it is greater, set largest height to this one
    }
    console.log("Width: " + findWidth);
});
$("ul li ").css({"width":largest+"px"});





