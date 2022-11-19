  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });

  const sideNav = document.querySelectorAll('.sidenav');
  M.Sidenav.init(sideNav);

const materialbox = document.querySelectorAll('.materialboxed');
M.Materialbox.init(materialbox);

const scroll = document.querySelectorAll('.scrollspy');
M.ScrollSpy.init(scroll, {
    scrollOffset: 50
});
