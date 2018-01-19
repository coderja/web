//模块六分商品搜索功能


function searchProductByPage(pno,ps,low,height,name) {
    //1.发送ajax获取当前页数据内容
   $('#tbody').html(`
       <div class="loading">
           <img src="img/loading.gif" alt="">
       </div>
    `);
    $.ajax({
        type: 'get',
        url: 'data/09_product_search.php',
        data: {pno: pno, ps: ps, height: height, low: low, name: name},
        success: function (list) {
            //2.获取返回结果
            console.log(list)
            var product = list.data
            var recordCount = list.recordCount
            var pno = parseInt(list.pno)
            var pageCount = list.pagecount
            var ps = list.pageSize
            var low = list.low
            var height = list.height
            var name = list.name
            //3.动态创建表格
            var html = ''
            for (var p of product) {
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
                <th><img src="${p.pic}"></th>
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
                }
                ;
                html += `
                </th>
              </tr>
            `;
                $('#tbody1').html(html);
                //5.动态创建分页1 2 3 4 5 最多显示5页
                var html1 = '';
                if (pno - 2 > 0)
                    html1 += `
             <li ><a href="#" data-page="${pno}_${ps}_${low}_${height}_${name}">${pno - 2}</a></li>
          `;
                if (pno - 1 > 0)
                    html1 += `
             <li ><a href="#"  data-page="${pno}_${ps}_${low}_${height}_${name}">${pno - 1}</a></li>
          `;
                //6.默认调用第一页
                html1 += `
             <li class="active"  data-page="${pno}_${ps}_${low}_${height}_${name}"><a href="#">${pno}</a></li>
          `
                if (pno + 1 <= pageCount)
                    html1 += `
             <li ><a href="#"  data-page="${pno}_${ps}_${low}_${height}_${name}">${pno + 1}</a></li>
          `;
                if (pno + 2 <= pageCount)
                    html1 += `
             <li ><a href="#"  data-page="${pno}_${ps}_${low}_${height}_${name}">${pno + 2}</a></li>
          `;
                $('#pagination').html(html1)
            }
        },
        error: function () {
            alert('网络故障')
        }
    });
}
    searchProductByPage(1,8,0,210000000000,'');
$('#pagination').on('click','li a',e=>{
    e.preventDefault();
    var page = $(e.target).data('page');
    console.log(page)
    var arr=page.split('_');
    //var pno = parseInt(arr[0])
    var pno  = parseInt($(e.target).html());
    var pageSize = parseInt(arr[1])
    var low = parseInt(arr[2])
    var height = parseInt(arr[3])
    var name = arr[4]
    console.log(pno,pageSize,low,height,name)
    searchProductByPage(pno,pageSize,low,height,name)
})
$('#product-low').keyup(function(e){
    var name = $('#product-kw').val()
    var low = $(e.target).val()
    var high = $("#product-high").val();
    if(e.keyCode==13){
        searchProductByPage(1,8,low,high,name)
    }
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