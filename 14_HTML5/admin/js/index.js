/*$('[name=usubmit]').click(e=>{
    e.preventDefault();
    var ureg = /^\w{3,12}$/i,preg=/^\w{3,12}$/i;
    if(ureg.test($('[name=uname]').val())&&preg.test($('[name=upwd]').val())){
        var val = $('form').serialize()
        $.post('data/01_login.php',val).then(data=> {
            if(data.code==1){
                location.href='main.html';
            }else{
                alert(data.msg)
            }
        })
    }else{
        alert('用户名或密码格式错误')
    }
})*/
//切换验证码
$('#vcode').click(e=>{
    var $tar = $(e.target);
    if($tar.is('a.change_vcode')){
        e.preventDefault();
        $tar.prev().attr('src','data/03_code_gg.php')
    }

})
$('[name=usubmit]').click(function(e){
        e.preventDefault();
        var u = $('[name=uname]').val();
        var p = $('[name=upwd]').val();
        var yzm = $('[name=vcode]').val();
        var ureg = /^\w{3,12}$/i,preg=/^\w{3,12}$/,yzmreg=/^[a-z]{4}$/i;
        if(!ureg.test(u)){
           alert('用户名格式不正确，请检查再试');
            return;
        }if(!preg.test(p)){
           alert('密码格式不正确，请检查再试');
            return;
        }
        if(!yzmreg.test(yzm)){
            alert('验证码格式不正确,请检查再试');
            return;
        }
        $.ajax({
            url:"data/01_login.php",
            type:'post',
            data:{uname:u,upwd:p,yzm:yzm},
            success:function(text){
                console.log(text)
               if(text.code>0) {
                   location.href = 'product_list.html'
               }else {
                   alert(text.msg)
               }
            },
            error:function(){
                alert('网络发生了故障,请检查')
            }
        })
})
