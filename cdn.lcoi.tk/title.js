var ty = 1;
        var wait_long=0;

        function upt_title() {
            if (ty == 1) {
                document.title = title;
            }
        }
        window.onfocus = function () {
            ty = 1;
            if(wait_long==1){
                document.title = '终于回来了';
            }
            else{
                document.title = '回来啦！';
            }
            wait_long=0;
            var t = setTimeout("upt_title()", 1500);
        };
        window.onblur = function () {
            ty = 0;
            document.title = '诶？你怎么走了';
            var t = setTimeout("if(ty==0){document.title = \'怎么还不回来QwQ\';wait_long=1;}", 3000);
        };
        upt_title();