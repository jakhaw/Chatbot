const btns = document.querySelectorAll('.tab-btn');
const content = document.querySelectorAll('.adminpanel-content');
const page_content = document.querySelector('.page-content');

page_content.addEventListener('click', function(e){
    const id = e.target.dataset.id;
    if(id){
        btns.forEach(function(btn){
            btn.classList.remove('active');
        });
        content.forEach(function(content){
            content.classList.remove('active');
        });
        e.target.classList.add('active');
        const article = document.getElementById(id);
        article.classList.add('active');
    };
});