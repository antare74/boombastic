// SIDEBAR
const toggleBtn = document.querySelector('.sidebar-toggle');
const closeBtn = document.querySelector('.close-btn');
const sidebar = document.querySelector('.sidebar');

toggleBtn.addEventListener('click', () => {
    // console.log(sidebar.classList.contains('sidebar'));
    sidebar.classList.toggle('show-sidebar');
});

closeBtn.addEventListener('click', () => {
    sidebar.classList.remove('show-sidebar');
});


const modalBtn = document.querySelector('.modal-btn');
const showModal = document.querySelector('.modal-overlay');
const closeModal = document.querySelector('.close-button');

modalBtn.addEventListener('click', () => {
    // console.log(showModal.classList.contains('open-modal'));
    // if (showModal.classList.contains('open-modal')) {
    //     showModal.classList.remove('open-modal')
    // } else {
    //     showModal.classList.add('open-modal');
    // }
    showModal.classList.add('open-modal');
});

closeModal.addEventListener('click', () => {
    showModal.classList.remove('open-modal')
});
