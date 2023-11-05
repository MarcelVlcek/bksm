
$(document).ready(function() {
   
/*
 * BACKGROUND COVER    
 */

    var covers = $('.fadecovers');

    covers.children(':not(:last)').hide();

    setInterval(function() {

        covers.children(':last').fadeOut(6000, function() {
            $(this).prependTo( covers );
        }).prev().fadeIn(6000);
    }, 3000);


/*
 * BACK TO TOP 
 */

    var backToTop = $('<a>', {
        href: '#home',
        class: 'back-to-top',
        html: '<i class="fa-solid fa-circle-arrow-up fa-3x"></i>'
    });

    backToTop
            .hide()
            .appendTo('body')
            .on('click', function(){
                $('body').animate({ scrollTop: 0 });
            });

            var win = $(window);
            win.on('scroll', function(){
                if (win.scrollTop() >= 100) backToTop.fadeIn();
                else backToTop.hide();
            });

    
/*
 * NAVIGATION ACTIVE
 */


document.querySelectorAll('.nav-link').forEach
(link => {
    if(link.href == window.location.href){
        link.setAttribute('aria-current', 'page')
    }

    
})


/*
 * RESPONSIVE NAVIGATION LINKS
 */


const toggleBtn = document.querySelector('.toggle-btn')
const toggleBtnIcon = document.querySelector('.toggle-btn i')
const dropDownMenu = document.querySelector('.dropdown-menu')  

toggleBtn.onclick = function () {
    dropDownMenu.classList.toggle('open')
    const isOpen = dropDownMenu.classList.contains('open')

    
}

})        




/*
 *  READ MORE BUTTON 
 */



const btn = document
    .querySelector('.read-more-btn');

const text = document
    .querySelector('.card__read-more');

const cardHolder = document
    .querySelector('.card-holder');

cardHolder
    .addEventListener('click', e => {

        const current = e.target;

        const isReadMoreBtn = current.className.includes('read-more-btn');

        if (!isReadMoreBtn)
            return;

        const currentText = e.target.parentNode.querySelector('.card__read-more');

        currentText.classList.toggle('card__read-more--open');

        current.textContent = current.textContent.includes('Viac...') ? 'Menej...' : 'Viac...';

    });
