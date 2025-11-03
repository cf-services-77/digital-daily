const itemsNav = [
    'logo-header',
    'home',
    'products',
    'service',
    'portfolio',
    'contact-header',
    'contact-head',
    'last-app',
    'app-custom',
    'learn-more',
    'erp-transport',
    'logo-footer',
    'contact-footer'
];

const itemsPages = [
    'home',
    'products',
    'erp-transport',
    'service',
    'portfolio'
];

for (let i = 0; i < itemsNav.length; i++) {
    const item = itemsNav[i];
    const itemElt = document.querySelector('.' + item + '-cls');
    
    itemElt.addEventListener('click', () => {
        for (let j = 0; j < itemsPages.length; j++) {
            const page = itemsPages[j];
            const pageElt = document.getElementById(page + '-app');

            if (itemElt.dataset.link == page) {
                pageElt.classList.remove('none');
            } else {
                if (!pageElt.classList.contains('none')) {
                    pageElt.classList.add('none');
                }
            }
        }
    });
}