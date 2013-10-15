//Navbar code
$(document).ready(function(){
  var slideMenu = $('#nav-menu-slide');

  //Extract the sub menus
  $('#menu-top-navigation > li > .sub-menu').each(function(i,v){
    var vj = $(v);
    var slideCenter = $('#nav-menu-slide-center');
    var group_index = 0;
    //Partition the submenu into groups of 3 or less
    while(vj.children('li').length > 3){
      //get 3 children and allocate them into a new submenu
      vj.children("li:lt(4)").wrapAll("<div></div>");
      group_index++;
      if(group_index > 100) break;
    }
    vj.children('li').wrapAll("<div>");
    //move the submenu to slide menu
    var parent = vj.parent();
    var parent_position_left = parent.position().left;
    var parent_index = parent.index();
    parent.attr('data-hassubmenu','true');
    vj.css({left: parent_position_left});
    slideCenter.append(vj.attr('data-sub-menu-index',''+parent_index));
  });

  //Manage slide menu hover state
  $('#nav-menu-slide').hover(function(){
    slideMenu.stop();
  }, function(){
    slideMenu.stop()
          .animate({
            top: -24
          }, 400, 'swing', function(){
            slideMenu.stop();
        });
  });

  //Activate and close slide menu hover state from top level
  $('#menu-top-navigation > li').each(function(i,v){
    var vj = $(v);
    if(vj.attr('data-hassubmenu') == 'true'){
      vj.hover(function() {
        $('#nav-menu-slide-center ul').hide();
        $('#nav-menu-slide-center ul[data-sub-menu-index='+i+']').css({display: 'block'});
        slideMenu.stop()
        .animate({
          top: 71
        });
      }, function(){
        slideMenu.stop()
          .animate({
            top: -24
          }, 400, 'swing', function(){
            $('#nav-menu-slide-center ul[data-sub-menu-index='+i+']').hide();
            slideMenu.stop();
        });
      });
    }
  });
});