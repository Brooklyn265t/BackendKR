document.addEventListener('DOMContentLoaded', function() {
    var btnUP = document.getElementById('btnup');
    // Проверка, существует ли кнопка
    if (btnUP) {
        btnUP.addEventListener('click', function() {
            // Плавно переместиться в начало страницы
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    } else {
        console.error('Кнопка с id "btnup" не найдена.');
    }
});