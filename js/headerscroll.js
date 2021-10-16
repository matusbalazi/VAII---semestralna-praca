const header = document.querySelector('.main-header');
window.addEventListener('scroll', function() 
{
    if (window.scrollY > 300) 
    {
        header.style.backgroundColor = '#033D67';
    }
    else {
        header.style.backgroundColor = 'transparent';
    }
});