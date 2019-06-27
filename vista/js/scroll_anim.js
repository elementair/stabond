$(document).ready(function () {
    


    /***Scroll fijo***/
    function ScrollHandler(pageId) { 
        var page = $('#' + pageId);
        var pageStart = page.offset().top;
        var pageJump = false;

        function scrollToPage() {
            pageJump = true;
            $('html, body').animate({ 
                scrollTop: pageStart 
            }, {
                duration: 800,
                complete: function() {
                pageJump = false;
                }
            });

            
            switch(pageId){
                case 'inicio':
                    
                    // $("#logo img").attr("src", "svg/navicon.svg");
                    $(".btn-toggle").css("Background-color", "#00000000");
                    $("#inicio").css("color", "#ccc");
                    $("#nosotros").css("color", "#000");
                    $("#servicios").css("color", "#000");
                    $("#portafolio").css("color", "#000");
                    $("#contacto").css("color", "#000");
                    if(screen.width >= 576){
                        $("#inicio").css("color", "#000");
                        $("#nosotros").css("color", "#000");
                        $("#servicios").css("color", "#000");
                        $("#portafolio").css("color", "#000");
                        $("#contacto").css("color", "#000");
                    }
                   
                break;

                case 'nosotros':

                    $(".btn-toggle").css("Background-color", "#ffffff80");
                    $("#inicio").css("color", "#000");
                    $("#nosotros").css("color", "#ccc");
                    $("#servicios").css("color", "#000");
                    $("#portafolio").css("color", "#000");
                    $("#contacto").css("color", "#000");
                    if(screen.width >= 576){
                        $("#inicio").css("color", "#000");
                        $("#nosotros").css("color", "#000");
                        $("#servicios").css("color", "#000");
                        $("#portafolio").css("color", "#000");
                        $("#contacto").css("color", "#000");
                    }
                   

                break;

                case 'servicios':

                    $(".btn-toggle").css("Background-color", "#ffffff80");
                    $("#inicio").css("color", "#000");
                    $("#nosotros").css("color", "#000");
                    $("#servicios").css("color", "#ccc");
                    $("#portafolio").css("color", "#000");
                    $("#contacto").css("color", "#000");
                    if(screen.width >= 576){
                        $("#inicio").css("color", "#000");
                        $("#nosotros").css("color", "#000");
                        $("#servicios").css("color", "#000");
                        $("#portafolio").css("color", "#000");
                        $("#contacto").css("color", "#000");
                    }

                break;

                case 'portafolio':

                    $(".btn-toggle").css("Background-color", "#ffffff80");
                    $("#inicio").css("color", "#000");
                    $("#nosotros").css("color", "#000");
                    $("#servicios").css("color", "#000");
                    $("#portafolio").css("color", "#ccc");
                    $("#contacto").css("color", "#000");
                    if(screen.width >= 576){
                        $("#inicio").css("color", "#000");
                        $("#nosotros").css("color", "#000");
                        $("#servicios").css("color", "#000");
                        $("#portafolio").css("color", "#000");
                        $("#contacto").css("color", "#000");
                    }
                   
                break;

                case 'contacto':

                    $(".btn-toggle").css("Background-color", "#ffffff80");
                    $("#inicio").css("color", "#000");
                    $("#nosotros").css("color", "#000");
                    $("#servicios").css("color", "#000");
                    $("#portafolio").css("color", "#000");
                    $("#contacto").css("color", "#ccc");

                    if(screen.width >= 576){
                        $("#inicio").css("color", "#000");
                        $("#nosotros").css("color", "#000");
                        $("#servicios").css("color", "#000");
                        $("#portafolio").css("color", "#000");
                        $("#contacto").css("color", "#000");
                    }
                break;

               
            }
        }

        window.addEventListener('wheel', function(event) {
           var viewStart = $(window).scrollTop();
                if (!pageJump)  {   
                    var pageHeight = page.height();
                    var pageStopPortion = pageHeight / 2;
                    var viewHeight = $(window).height();

                    var viewEnd = viewStart + viewHeight;
                    var pageStartPart = viewEnd - pageStart;
                    var pageEndPart = (pageStart + pageHeight) - viewStart;
                      
                    var canJumpDown = pageStartPart >= 0; 
                    var stopJumpDown = pageStartPart > pageStopPortion; 
              
                    var canJumpUp = pageEndPart >= 0; 
                    var stopJumpUp = pageEndPart > pageStopPortion; 

                    var scrollingForward = event.deltaY > 0;
                    if (  ( scrollingForward && canJumpDown && !stopJumpDown) 
                    || (!scrollingForward && canJumpUp   && !stopJumpUp)) {
                        event.preventDefault();
                        scrollToPage();
                    } 
                }else {
                    event.preventDefault();
                }    
        });
    }

    new ScrollHandler('inicio'); 
    new ScrollHandler('nosotros');
    new ScrollHandler('servicios');
    new ScrollHandler('portafolio');
    new ScrollHandler('contacto');
});
