//***Scroll Link */
$(document).ready(function () {
    var scrollLink = $('.scroll');
    scrollLink.click(function (e) {
        e.preventDefault();
        $('body,html').animate({
            scrollTop: $(this.hash).offset().top
        }, 1000)
    });

    // scroll aktif
    // $(window).scroll(function () {
    //     var scrollbarLocation = $(this).scrollTop();
    //     scrollLink.each(function () {
    //         var sectionOffset = $(this.hash).offset().top
    //         if (sectionOffset <= scrollbarLocation) {
    //             $(this).parent().addClass('active');
    //             $(this).parent().siblings().removeClass('active');
    //         }
    //     });
    // });


    // $(() => {
    //     $('ul.links li').on('click', () => {
    //         $(this).parent().removeClass('active');
    //         $(this).addClass('active');
    //     })
    // })
    $(function () {
        $('.links a').filter(function () {
            return this.href == location.href
        }).parent().addClass('active').siblings().removeClass('active')
        $('.links a').click(function () {
            $(this).parent().addClass('active').siblings().removeClass('active')
        })
    })


    // Sidebar Toggle
    var sidebar = $('.sidebar');

    $('.sidebar-toggle').on('click', () => {
        sidebar.toggleClass('show-sidebar');
    })

    //Close Button sidebar

    var closeBtn = $('.close-btn');
    closeBtn.click(() => {
        sidebar.removeClass('show-sidebar');
    })


    // Footer Year
    var date = $('#date');
    var dateNow = new Date();
    var getYear = dateNow.getFullYear()
    date.html(getYear);




});
