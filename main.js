document.addEventListener('DOMContentLoaded', function() {
    const btns = document.querySelectorAll('.btn-modal');
    const modal = document.querySelector('.bloc-modal');
    const close = document.querySelector('.close');
    const index = document.querySelector('.bloc-modal img');

    btns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            const dataIndex = e.target.getAttribute('data-index');
            index.src = `img/p-${dataIndex}.jpg`;
            modal.classList.add('active-modal');
        });
    });

    close.addEventListener('click', () => {
        modal.classList.remove('active-modal');
    });
});
