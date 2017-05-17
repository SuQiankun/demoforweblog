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
        //ajax -->/username/'+name+'/password/'+psw
        var url = '/index.php/home/login/loginIn';
        var data = {'username':name,'password':psw};

        $.post(url,data,function(result){

        });

    }


}