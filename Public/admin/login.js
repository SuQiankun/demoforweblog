/**
 * Created by suqiankun on 17/5/17.
 */

/*
*
* */
var login = {
    check:function(){
      var name = $('input[name=username]').val();
      var psw = $('input[name=password]').val();
        if(!name){
            showTip.error('用户名不能为空');
            return false;
        }
        if(!psw){
            showTip.error('密码不能为空');
            return false;
        }

        var url = 'loginIn'
        var data = 'username='+name+'&'+'password='+psw;

        $.ajax({
            type: "POST",
            url: url,
            data: data,
            success: function(json){
                if (json.status == 200){
                    window.location.href = json.urlStr;
                }else{
                    showTip.error(json.message);
                }
            },
            dataType: 'JSON'
        });


    }


}