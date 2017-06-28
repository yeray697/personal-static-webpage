jQuery(document).ready(function($){
    handleWindowsResize();
    window.onresize = function() {
        handleWindowsResize();
    }

    var projectItemSize = -1;
    function handleWindowsResize() {
        var newProjectItemSize = 1;
        var width = window.innerWidth;
        if (width < 1201 && width > 600) {
            newProjectItemSize = 2;
        }
        if (projectItemSize != newProjectItemSize) {
            projectItemSize = newProjectItemSize;
            var projectitems = $( ".project-item" );
            var count = 1;
            var currentClass = "1";
            $.each( projectitems, function( index,item ) {
                $( item ).removeClass( "project-item-color-2" )
                .removeClass( "project-item-color-1" );
                if (projectItemSize == 1) {
                    if (index%2 == 0) { //par
                        $( item ).addClass( "project-item-color-1" );
                    } else { //impar
                        $( item ).addClass( "project-item-color-2" );
                    }
                } else {
                    $( item ).addClass( "project-item-color-" + currentClass );
                    count += 1;
                    if(count == 2) {
                        if (currentClass == "1") {
                            currentClass = "2";
                        } else {
                            currentClass = "1";
                        }
                        count = 0;
                    }
                }
            });

        }
    }

    /**
     * Zoom image if mouse is over project-item
     */
    $( ".project-item" ).hover(
        function() {
            $( this ).find( "img" ).addClass("zoom");
        }, function() {
            $( this ).find( "img" ).removeClass("zoom");
        }
        );
});