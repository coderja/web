//存取页面大小
var pageSize = localStorage['pageSize'];
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
    url: 'data/user_list.php',
    data: {pno:pno, pageSize: pageSize},
    success: function(pager){
      //表格内容
      var html = '';
      $.each(pager.data, function(i, u){
        html += `
          <tr>
            <td><input type="checkbox"></td>
            <td>${u.uid}</td>
            <td><img class="pic" src="${'../'+u.avatar}"></td>
            <td><p class="fname" title="${u.uname}">${u.uname}</p></td>
            <td><p class="title" title="${u.user_name}">${u.user_name}</p></td>
            <td><p class="spec" title="${u.gener}">${u.gender}</p></td>
            <td><p class="spec" title="${u.email}">${u.email}</p></td>
            <td><p class="spec" title="${u.phone}">${u.phone}</p></td>
            <td>
              <a href="user_details.html">详情</a>
              <a href="user_update.html">修改</a>
              <a href="user_delete.html">删除</a>
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
