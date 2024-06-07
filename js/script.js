$(document).ready(function() {
    //При наличии нужного класса на элементе другому элементу добавлется соответствующий класс, и наоборот
    if($('#main_container').hasClass('admin_pn')) {
        $('.admin_login').addClass('hide_form');                             //Удаление формы авторизации при успешном входе в админ-панель
       
        $('.book_illustration').on('mouseover', function() {                 //При наведении курсора на любой элемент,
            $(this).children('img').css('outline', '2px solid red');         //будут отображены все доступные инструменты управления содержимым
            $(this).children('.control_icons').addClass('show_c_icons');
        });                                          
        $('.book_illustration').on('mouseout', function() {         
            $(this).children('img').css('outline', '');
            $(this).children('.control_icons').removeClass('show_c_icons');

        });
    }
    //Запрет перетаскивания всех изображений на сайте
    $('img').on('mousedown', function(e){
        e.preventDefault();

    })
    
})