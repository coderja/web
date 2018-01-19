//模块二分页显示产品列表

/**
 * 分页显示产品列表数据
 * @param pno       页码示例  1 2 3
 * @param pageSize  当前页记录数
 */
function loadProductByPage(pno,pageSize){
  //1.发送ajax获取当前页数据内容
  $.ajax({
    type:'get',
    url:'data/04_product_list.php',
    data:{pageNo:pno,pageSize:pageSize},
    success:function(list){
        //2.获取返回结果
        //console.log(list)
        var product = list.data
        var recordCount = list.recordCount
        var pno = parseInt(list.pno)
        var pageCount = list.pageCount
        var pageSize = list.pageSize
        //3.动态创建表格
        var html=''
        for(var p of product) {
          html += `
               <tr>
                <th>
                  <div class="checkbox" style="margin: 0;">
                    <label>
                      <input type="checkbox">全选
                    </label>
                  </div>
                </th>
                <th>${p.lid}</th>
                <th>产品图片</th>
                <th>${p.price}</th>
                <th  style="width: 100px;overflow: hidden;white-space:nowrap;text-overflow: clip">${p.title}</th>
                <th>${p.spec}</th>
                <th>`;
          //4.如果当前元素失效，不创建 删除/更新/详细信息按钮
          if (p.expire == 0) {
            html += `
                   <a href="${p.lid}" data-page="${pno}" class="btn-del">删除</a>
                   <a href="${p.lid}" data-page="${pno}" class="btn-update">更新</a>
                   <a href="${p.lid}" data-page="${pno}"  class="btn-detail">详细信息</a>`
          };
            html+=`
                </th>
              </tr>
            `;
            $('#tbody1').html(html);
          //5.动态创建分页1 2 3 4 5 最多显示5页
          var html1='';
          if(pno-2>0)
            html1+=`
             <li ><a href="#">${pno-2}</a></li>
          `;
          if(pno-1>0)
          html1+=`
             <li ><a href="#">${pno-1}</a></li>
          `;
          //6.默认调用第一页
          html1+=`
             <li class="active"><a href="#">${pno}</a></li>
          `
          if(pno+1<=pageCount)
          html1+=`
             <li ><a href="#">${pno+1}</a></li>
          `;
          if(pno+2<=pageCount)
          html1+=`
             <li ><a href="#">${pno+2}</a></li>
          `;
          $('#pagination').html(html1)
        }
    },
    error:function(){
      alert('网络故障')
    }
  })




  //6.不同页码调用loadProductByPage()方法
}
loadProductByPage(1,8)
  //7.为分页中每个页码添加点击事件
 $('#pagination').on('click','li a',function(e){
    e.preventDefault();
    var pno = parseInt($(this).html());
    //console.log(pno)
    loadProductByPage(pno,8)
  })


//模块三删除指定的商品
//1.获取所有删除按钮_事件代理 .btn_del
//2.绑定点击事件
$('#tbody1').on('click','a.btn-del',function(e){
//3.阻止事件默认行为
   e.preventDefault();
    console.log(2)
    var rs = window.confirm("是否删除该商品")
    if(!rs){
        return
    }
//4.获取商品编号
    $tar = $(e.target);
    var lid = $tar.attr('href');
    var pno = $tar.data('page')
    console.log(lid,pno)
//5:发送ajax请求05_product_del.php
    $.ajax({
        type:'POST',
        url:'data/05_product_del.php',
        data:{lid:lid},
        success:function(data){
            if(data.code>0)
                alert(data.msg);
            else{
                alert(data.msg)
            }
            loadProductByPage(pno,8)
        },
        error:function(){
          alert('网络故障')
        }

    })
})
//6.获取返回结果 json code>0删除成功
//模块四产品的详细信息
$('#tbody1').on('click','a.btn-detail',function(e){
    e.preventDefault();
    var $tar = $(e.target);
    var lid =$tar.attr('href');
    $.ajax({
        type:'get',
        url:'data/06_product_detail.php',
        data:{lid:lid},
        success:function(data){
          console.log(data)
            var html='';
            var div= $('div.detail-jumbotron');
            div.find('.plid').html(data.lid)
            div.find('.ppname').html(data.lname)
            div.find('.pcategory').html(data.category)
            div.find('.pprice').html(data.price)
            div.find('.pos').html(data.cpu)
            div.find('.pdisk').html(data.disk)
            div.show();
        },
        error:function(){
            alert('网络故障')
        }
    })
});
//点击按钮隐藏元素
$('#detail_close').click(e=>{
    e.preventDefault();
    $('div.detail-jumbotron').hide();
})

//更新商品价格
//点击更新按钮 ->查询指定商品的信息->显示div
$('#tbody1').on('click','a.btn-update',function(e){
    e.preventDefault();
    var lid = $(e.target).attr('href');
    $.ajax({
        type:'get',
        url:'data/07_product_find.php',
        data:{lid:lid},
        success:function(data){
            $('.update-jumbotron .pname').text(data.lname);
            $('.update-jumbotron .input-price').val(data.price).data('lid',data.lid);
            $('.update-jumbotron .lid').html(data.lid);
            $('.update-jumbotron').show();
        },
        error:function(){
            alert('网络故障请检查')
        }
    })
})
//获取更新按钮
//获取lid
//发送ajax请求商品信息
//保存update-jumbotron .pname .input-price
//显示div
//点击提交按钮 ->更新商品价格->隐藏div
$('.update-jumbotron').on('click','a[data-action=update-cancel]',()=>{
    $('div.update-jumbotron').hide();
})

$('.update-jumbotron').on('click','a[data-action=update-ok]',e=>{
    e.preventDefault();
    var lid = $('.update-jumbotron .lid').html();
    console.log(lid)
    var price = $('.update-jumbotron .input-price').val();
    $.ajax({
        type:'post',
        url:'data/08_product_update.php',
        data:{lid:lid,price:price},
        success:function(list){
            if(list.code>0){
            alert(list.msg)
            //alert(list.msg);
            $('div.update-jumbotron').hide();
            //
            }
          },
        error:function(list){
            alert(list.msg)
        }
    })
})





































//存取页面大小
/*var pageSize = localStorage['pageSize'];
if(!pageSize){
  pageSize = 10;
}
$('#page-size').val(pageSize).change(function(){
  localStorage['pageSize'] = $(this).val();
  loadProductByPage(1, $(this).val());
});

//分页条单击事件处理
$('#pagination').on('click', 'li a', function(e){
  e.preventDefault();
  loadProductByPage($(this).attr('href'), localStorage['pageSize']);
})

//分页加载数据
function loadProductByPage(pno, pageSize){
  $('#table-laptop tbody').html('<div class="loading"><img src="img/loading.gif" alt=""></div>');
  $.ajax({
    url: 'data/product_list.php',
    data: {pno:pno, pageSize: pageSize},
    success: function(pager){
      //表格内容
      var html = '';
      $.each(pager.data, function(i, l){
        html += `
          <tr>
            <td><input type="checkbox"></td>
            <td>${l.lid}</td>
            <td><img class="pic" src="${'../'+l.pic}"></td>
            <td><p class="fname" title="${l.fname}">${l.fname}</p></td>
            <td><p class="title" title="${l.title}">${l.title}</p></td>
            <td><p class="spec" title="${l.spec}">${l.spec}</p></td>
            <td>￥${l.price}</td>
            <td>
              <a href="product_details.html">详情</a>
              <a href="product_update.html">修改</a>
              <a href="product_delete.html">删除</a>
            </td>
          </tr>
        `;
      })
      $('#table-laptop tbody').html(html);

      //分页条
      var html = '';
      html += `<li class="${pager.pno<=1?'disabled':''}"><a href="${pager.pno>1?pager.pno-1:'#'}">上一页</a></li>`;
      if(pager.pno-2>0){
        html += `<li><a href="${pager.pno-2}">${pager.pno-2}</a></li>`;
      }
      if(pager.pno-1>0){
        html += `<li><a href="${pager.pno-1}">${pager.pno-1}</a></li>`;
      }
      html += `<li class="active"><a href="${pager.pno}">${pager.pno}</a></li>`;
      if(pager.pno+1<=pager.pageCount){
        html += `<li><a href="${pager.pno+1}">${pager.pno+1}</a></li>`;
      }
      if(pager.pno+2<=pager.pageCount){
        html += `<li><a href="${pager.pno+2}">${pager.pno+2}</a></li>`;
      }
      html += `<li class="${pager.pno>=pager.pageCount?'disabled':''}"><a href="${pager.pno<pager.pageCount?pager.pno+1:'#'}">下一页</a></li>`;
      $('#pagination').html(html);
    }
  })
}
loadProductByPage(1, 10)
*/