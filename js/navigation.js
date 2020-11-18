// import $ from 'jQuery';
let $ = jQuery;

$('.sorella_site-header').on('mouseenter', '.menu-item-has-children', (e) => {
    $(e.currentTarget).addClass('open');
    
}).on('mouseleave', '.menu-item-has-children', (e) => {
    $(e.currentTarget).removeClass('open');
    
})

$('.sorella_site-header').on('click', '.menu-toggle', (e) => {
    $(e.currentTarget).toggleClass('open');
    $('.sorella_navigation').toggleClass('open');
})