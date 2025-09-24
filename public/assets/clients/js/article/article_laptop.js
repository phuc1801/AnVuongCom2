const read_more_btn = document.querySelector('#read_more');
read_more_btn.addEventListener('click', function(){
    const text_decoration = document.querySelector('#text-decoration');
    const read_more_icon = document.querySelector('#read_more_icon');
    const read_more_text = document.querySelector('#read_more_text');
    text_decoration.classList.toggle('show-more');
    if(text_decoration.classList.contains('show-more'))
    {
        read_more_text.textContent = 'Thu gọn';
        read_more_icon.classList.replace('fa-angles-down','fa-angles-up');
    }
    else{
        read_more_text.textContent = 'Xem thêm';
        read_more_icon.classList.replace('fa-angles-up','fa-angles-down');
    }
})
