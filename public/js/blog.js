
        $(document).ready(function() {
            $("#nav_li_dashboard").click(function() {
                $(".nav_ul_top li").removeClass("active");
                $("#nav_li_dashboard").addClass("active");
                $(".main").load("{{route('dashboard')}}");
            });
            $("#nav_li_profile").click(function() {
                $(".nav_ul_top li").removeClass("active");
                $("#nav_li_profile").addClass("active");
                $(".main").load("{{route('profile')}}");
            });
            $("#nav_li_blog").click(function() {
                $(".nav_ul_top li").removeClass("active");
                $("#nav_li_blog").addClass("active");
                $(".main").load("{{route('blog.index')}}");
            });
            $("#nav_li_user").click(function() {
                $(".nav_ul_top li").removeClass("active");
                $("#nav_li_user").addClass("active");
                $(".main").load("{{route('user')}}");
            });
        });

        function htmlbodyHeightUpdate() {
            var height3 = $(window).height()
            var height1 = $('.nav').height() + 50
            height2 = $('.main').height()
            if (height2 > height3) {
                $('html').height(Math.max(height1, height3, height2) + 10);
                $('body').height(Math.max(height1, height3, height2) + 10);
            } else {
                $('html').height(Math.max(height1, height3, height2));
                $('body').height(Math.max(height1, height3, height2));
            }
        }

        $(document).ready(function() {
            htmlbodyHeightUpdate()
            $(window).resize(function() {
                htmlbodyHeightUpdate()
            });
            $(window).scroll(function() {
                height2 = $('.main').height()
                htmlbodyHeightUpdate()
            });
        });
  




$(document).ready(function() {
        $("#textsearch").on('keyup', function() {
            var value = $(this).val();
            console.log(value);
            $.ajax({
                type: 'get',
                url: '{{URL::to('search_blog')}}',
                data: {
                    'search': value
                },
                success: function(data) {
                    console.log("success ajax");
                    $('tbody').html(data);
                },
                error: function(data) {
                    //alert(data.responseText)
                    console.log("error ajax");
                }
            });
        });
    });
    
        $(document).on('click',".a",function() {
            var number_of_page = $(this).text();
            page_num = parseInt(number_of_page);
            console.log(number_of_page);
                var data1 = number_of_page * 3;
                var data2 = data1 - 2;
            $.ajax({
                type: 'get',
                url: '{{URL::to('Pagination_blog')}}',
                data: {
                    "data1": data1,
                    "data2": data2,
                },
                success: function(data) {
                    console.log("success ajax");
                    $('tbody').html(data);
                },
                error: function(data) {
                    //alert(data.responseText)
                    console.log("error ajax");
                }
            });
            
            if(page_num!=1){
                $(".page-item_Previous").removeClass("disabled");
            }else{
                $(".page-item_Previous").addClass("disabled");
            }
        });

    $(document).on('click',".delete_blog",function() {
        var id = this.id;
        console.log(id);
        var confirm_delete = confirm("Press a button!");
        if (confirm_delete == true) {
            console.log("You pressed OK!");
            $.ajax({
                type: 'get',
                url: '{{URL::to('blog_destroy')}}',
                data: {
                    "id": id
                },
                success: function(data) {
                    console.log("Delete Success");
                    $("#tr"+id).remove();
                
                },
                error: function(data) {
                    console.log("error ajax");
                }
            });
        } else {
            console.log("You pressed Cancel!");
        }
    });




    $(document).ready(function() {
        $("#textsearch").on('keyup', function() {
            var value = $(this).val();
            console.log(value);
            $.ajax({
                type: 'get',
                url: '{{URL::to('search')}}',
                data: {
                    'search': value
                },
                success: function(data) {
                    console.log("success ajax");
                    $('tbody').html(data);
                },
                error: function(data) {
                    //alert(data.responseText)
                    console.log("error ajax");
                }
            });
        });
    });



 type="text/javascript">
    $.ajaxSetup({
        headers: {
            'csrftoken': '{{ csrf_token() }}'
        }
    });
