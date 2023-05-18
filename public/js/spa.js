let lastPost = 1;
let nPosts = 3;

function scrollHandler() {
    var documentHeight = document.documentElement.offsetHeight;
    var windowHeight = window.innerHeight;
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if (scrollTop + windowHeight >= documentHeight) {
        spa_news_feed();
    }
}

function spa_news() {
    window.scrollTo(0, 0);
    lastPost = 1;
    var args = "lastPost=" + lastPost + "&nPosts=" + nPosts;
    lastPost = lastPost + nPosts;
    ajaxPrint('/news?'+args, '', 'main_content');
    window.addEventListener('scroll', scrollHandler);
}

function spa_news_feed() {
    var args = "lastPost=" + lastPost + "&nPosts=" + nPosts;
    ajaxPrintNewsFeed('/news?'+args, '', 'main_content');
    lastPost = lastPost + nPosts;
}

function spa_brands(args) {
    window.scrollTo(0, 0);
    ajaxPrint('/brands?'+args, '', 'main_content');
    window.removeEventListener('scroll', scrollHandler);
}

function spa_brand(args) {
    window.scrollTo(0, 0);
    ajaxPrint('/brand/'+args, '', 'main_content');
    window.removeEventListener('scroll', scrollHandler);
}

function spa_content(args) {
    ajaxPrint('/onenews/'+args, '', 'content');
    document.getElementById('content').style.visibility = "visible";
    document.body.style.overflow = 'hidden';
}

function spa_search() {
    document.getElementById('search').style.visibility = "visible";
    document.body.style.overflow = 'hidden';
    document.getElementById('search_form').focus();
}

function spa_searchResult() {
    window.scrollTo(0, 0);
    document.getElementById('search').style.visibility = "hidden";
    document.body.style.overflow = 'visible';
    ajaxPrint('/search?find='+document.getElementById('search_form').value, '', 'main_content');
    document.getElementById('search_form').value = "";
    window.removeEventListener('scroll', scrollHandler);
}