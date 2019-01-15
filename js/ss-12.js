var siteNav = {
    element: document.querySelector('#site-nav-overlay'),
    open: function(){
        document.querySelector('body').classList.add('overlay-on');
    },
    close: function(){
        document.querySelector('body').classList.remove('overlay-on');
    },
    toggle: function(e){
        e.stopPropagation();
        document.querySelector('body').classList.toggle('overlay-on');
    }
};

document.querySelector('#site-nav-btn').addEventListener('click', siteNav.toggle);

document.querySelector('#site-nav-overlay').addEventListener('click', siteNav.toggle);