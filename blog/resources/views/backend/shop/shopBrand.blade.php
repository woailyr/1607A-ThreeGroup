<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SHOP 管理中心 - 品牌管理 </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{asset('backends/styles/general.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backends/styles/main.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>

<h1>
<span class="action-span"><a href="{{url('backend/shopBrandAdd')}}">添加品牌</a></span>
<span class="action-span1"><a href="{{url('backend/main')}}">SHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 商品品牌 </span>
<div style="clear:both"></div>
</h1>

<div class="form-div">
  <form action="javascript:search_brand()" name="searchForm">
    <img src="images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH">
     <input type="text" name="brand_name" size="15">
    <input type="submit" value=" 搜索 " class="button">
  </form>
</div>

<form method="post" action="" name="listForm">
<!-- start brand list -->
<div class="list-div" id="listDiv">

  <table cellpadding="3" cellspacing="1">
    <tbody>
		<tr>
			<th>品牌名称</th>
			<th>品牌网址</th>
			<th>品牌描述</th>
			<th>排序</th>
			<th>是否显示</th>
			<th>操作</th>
		</tr>
        <tr>
			<td class="first-cell"><span style="float:right"><a href="../data/brandlogo/1240803062307572427.gif" target="_brank"><img src="images/picflag.gif" width="16" height="16" border="0" alt="品牌LOGO"></a></span>
			<span onclick="javascript:listTable.edit(this, 'edit_brand_name', 1)" title="点击修改内容" style="">诺基亚</span>
			</td>
			<td><a href="http://www.nokia.com.cn/" target="_brank">http://www.nokia.com.cn/</a></td>
			<td align="left" >公司网站：http://www.nokia.com.cn/ 客服电话：...</td>
			<td align="right"><span onclick="javascript:listTable.edit(this, 'edit_sort_order', 1)">50</span></td>
			<td align="center"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_show', 1)"></td>
			<td align="center">
				<a href="brand.php?act=edit&amp;id=1" title="编辑">编辑</a> |
				<a href="javascript:;" onclick="listTable.remove(1, '你确认要删除选定的商品品牌吗？')" title="编辑">移除</a> 
			</td>
		</tr>
		<!--start，这些都是显示代码，没有格式化，开发时会删除 -->
        <tr>
      <td class="first-cell" style="background-color: rgb(255, 255, 255);">
        <span style="float:right"><a href="../data/brandlogo/1240802922410634065.gif" target="_brank"><img src="images/picflag.gif" width="16" height="16" border="0" alt="品牌LOGO"></a></span>
        <span onclick="javascript:listTable.edit(this, 'edit_brand_name', 2)" title="点击修改内容" style="">摩托罗拉</span>
      </td>
      <td style="background-color: rgb(255, 255, 255);"><a href="http://www.motorola.com.cn" target="_brank">http://www.motorola.com.cn</a></td>
      <td align="left" style="background-color: rgb(255, 255, 255);">官方咨询电话：4008105050
售后网点：http://www.mo...</td>
      <td align="right" style="background-color: rgb(255, 255, 255);"><span onclick="javascript:listTable.edit(this, 'edit_sort_order', 2)">50</span></td>
      <td align="center" style="background-color: rgb(255, 255, 255);"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_show', 2)"></td>
      <td align="center" style="background-color: rgb(255, 255, 255);">
        <a href="brand.php?act=edit&amp;id=2" title="编辑">编辑</a> |
        <a href="javascript:;" onclick="listTable.remove(2, '你确认要删除选定的商品品牌吗？')" title="编辑">移除</a> 
      </td>
    </tr>
        <tr>
      <td class="first-cell" style="background-color: rgb(255, 255, 255);">
        <span style="float:right"><a href="../data/brandlogo/1240803144788047486.gif" target="_brank"><img src="images/picflag.gif" width="16" height="16" border="0" alt="品牌LOGO"></a></span>
        <span onclick="javascript:listTable.edit(this, 'edit_brand_name', 3)">多普达</span>
      </td>
      <td style="background-color: rgb(255, 255, 255);"><a href="http://www.dopod.com " target="_brank">http://www.dopod.com </a></td>
      <td align="left" style="background-color: rgb(255, 255, 255);">官方咨询电话：4008201668
售后网点：http://www.do...</td>
      <td align="right" style="background-color: rgb(255, 255, 255);"><span onclick="javascript:listTable.edit(this, 'edit_sort_order', 3)">50</span></td>
      <td align="center" style="background-color: rgb(255, 255, 255);"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_show', 3)"></td>
      <td align="center" style="background-color: rgb(255, 255, 255);">
        <a href="brand.php?act=edit&amp;id=3" title="编辑">编辑</a> |
        <a href="javascript:;" onclick="listTable.remove(3, '你确认要删除选定的商品品牌吗？')" title="编辑">移除</a> 
      </td>
    </tr>
        <tr>
      <td class="first-cell" style="background-color: rgb(255, 255, 255);">
        <span style="float:right"><a href="../data/brandlogo/1240803247838195732.gif" target="_brank"><img src="images/picflag.gif" width="16" height="16" border="0" alt="品牌LOGO"></a></span>
        <span onclick="javascript:listTable.edit(this, 'edit_brand_name', 4)">飞利浦</span>
      </td>
      <td style="background-color: rgb(255, 255, 255);"><a href="http://www.philips.com.cn " target="_brank">http://www.philips.com.cn </a></td>
      <td align="left" style="background-color: rgb(255, 255, 255);">官方咨询电话：4008800008
售后网点：http://www.ph...</td>
      <td align="right" style="background-color: rgb(255, 255, 255);"><span onclick="javascript:listTable.edit(this, 'edit_sort_order', 4)">50</span></td>
      <td align="center" style="background-color: rgb(255, 255, 255);"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_show', 4)"></td>
      <td align="center" style="background-color: rgb(255, 255, 255);">
        <a href="brand.php?act=edit&amp;id=4" title="编辑">编辑</a> |
        <a href="javascript:;" onclick="listTable.remove(4, '你确认要删除选定的商品品牌吗？')" title="编辑">移除</a> 
      </td>
    </tr>
        <tr>
      <td class="first-cell" style="background-color: rgb(255, 255, 255);">
        <span style="float:right"><a href="../data/brandlogo/1240803352280856940.gif" target="_brank"><img src="images/picflag.gif" width="16" height="16" border="0" alt="品牌LOGO"></a></span>
        <span onclick="javascript:listTable.edit(this, 'edit_brand_name', 5)">夏新</span>
      </td>
      <td style="background-color: rgb(255, 255, 255);"><a href="http://www.amobile.com.cn" target="_brank">http://www.amobile.com.cn</a></td>
      <td align="left" style="background-color: rgb(255, 255, 255);">官方咨询电话：4008875777
售后网点：http://www.am...</td>
      <td align="right" style="background-color: rgb(255, 255, 255);"><span onclick="javascript:listTable.edit(this, 'edit_sort_order', 5)">50</span></td>
      <td align="center" style="background-color: rgb(255, 255, 255);"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_show', 5)"></td>
      <td align="center" style="background-color: rgb(255, 255, 255);">
        <a href="brand.php?act=edit&amp;id=5" title="编辑">编辑</a> |
        <a href="javascript:;" onclick="listTable.remove(5, '你确认要删除选定的商品品牌吗？')" title="编辑">移除</a> 
      </td>
    </tr>
        <tr>
      <td class="first-cell" style="background-color: rgb(255, 255, 255);">
        <span style="float:right"><a href="../data/brandlogo/1240803412367015368.gif" target="_brank"><img src="images/picflag.gif" width="16" height="16" border="0" alt="品牌LOGO"></a></span>
        <span onclick="javascript:listTable.edit(this, 'edit_brand_name', 6)">三星</span>
      </td>
      <td style="background-color: rgb(255, 255, 255);"><a href="http://cn.samsungmobile.com" target="_brank">http://cn.samsungmobile.com</a></td>
      <td align="left" style="background-color: rgb(255, 255, 255);">官方咨询电话：8008105858
售后网点：http://cn.sam...</td>
      <td align="right" style="background-color: rgb(255, 255, 255);"><span onclick="javascript:listTable.edit(this, 'edit_sort_order', 6)">50</span></td>
      <td align="center" style="background-color: rgb(255, 255, 255);"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_show', 6)"></td>
      <td align="center" style="background-color: rgb(255, 255, 255);">
        <a href="brand.php?act=edit&amp;id=6" title="编辑">编辑</a> |
        <a href="javascript:;" onclick="listTable.remove(6, '你确认要删除选定的商品品牌吗？')" title="编辑">移除</a> 
      </td>
    </tr>
        <tr>
      <td class="first-cell" style="background-color: rgb(255, 255, 255);">
        <span style="float:right"><a href="../data/brandlogo/1240803482283160654.gif" target="_brank"><img src="images/picflag.gif" width="16" height="16" border="0" alt="品牌LOGO"></a></span>
        <span onclick="javascript:listTable.edit(this, 'edit_brand_name', 7)">索爱</span>
      </td>
      <td style="background-color: rgb(255, 255, 255);"><a href="http://www.sonyericsson.com.cn/" target="_brank">http://www.sonyericsson.com.cn/</a></td>
      <td align="left" style="background-color: rgb(255, 255, 255);">官方咨询电话：4008100000
售后网点：http://www.so...</td>
      <td align="right" style="background-color: rgb(255, 255, 255);"><span onclick="javascript:listTable.edit(this, 'edit_sort_order', 7)">50</span></td>
      <td align="center" style="background-color: rgb(255, 255, 255);"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_show', 7)"></td>
      <td align="center" style="background-color: rgb(255, 255, 255);">
        <a href="brand.php?act=edit&amp;id=7" title="编辑">编辑</a> |
        <a href="javascript:;" onclick="listTable.remove(7, '你确认要删除选定的商品品牌吗？')" title="编辑">移除</a> 
      </td>
    </tr>
        <tr>
      <td class="first-cell" style="background-color: rgb(255, 255, 255);">
        <span style="float:right"><a href="../data/brandlogo/1240803526904622792.gif" target="_brank"><img src="images/picflag.gif" width="16" height="16" border="0" alt="品牌LOGO"></a></span>
        <span onclick="javascript:listTable.edit(this, 'edit_brand_name', 8)">LG</span>
      </td>
      <td style="background-color: rgb(255, 255, 255);"><a href="http://cn.wowlg.com" target="_brank">http://cn.wowlg.com</a></td>
      <td align="left" style="background-color: rgb(255, 255, 255);">官方咨询电话：4008199999
售后网点：http://www.lg...</td>
      <td align="right" style="background-color: rgb(255, 255, 255);"><span onclick="javascript:listTable.edit(this, 'edit_sort_order', 8)">50</span></td>
      <td align="center" style="background-color: rgb(255, 255, 255);"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_show', 8)"></td>
      <td align="center" style="background-color: rgb(255, 255, 255);">
        <a href="brand.php?act=edit&amp;id=8" title="编辑">编辑</a> |
        <a href="javascript:;" onclick="listTable.remove(8, '你确认要删除选定的商品品牌吗？')" title="编辑">移除</a> 
      </td>
    </tr>
        <tr>
      <td class="first-cell" style="background-color: rgb(255, 255, 255);">
        <span style="float:right"><a href="../data/brandlogo/1240803578417877983.gif" target="_brank"><img src="images/picflag.gif" width="16" height="16" border="0" alt="品牌LOGO"></a></span>
        <span onclick="javascript:listTable.edit(this, 'edit_brand_name', 9)">联想</span>
      </td>
      <td style="background-color: rgb(255, 255, 255);"><a href="http://www.lenovomobile.com/" target="_brank">http://www.lenovomobile.com/</a></td>
      <td align="left" style="background-color: rgb(255, 255, 255);">官方咨询电话：4008188818
售后网点：http://www.le...</td>
      <td align="right" style="background-color: rgb(255, 255, 255);"><span onclick="javascript:listTable.edit(this, 'edit_sort_order', 9)">50</span></td>
      <td align="center" style="background-color: rgb(255, 255, 255);"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_show', 9)"></td>
      <td align="center" style="background-color: rgb(255, 255, 255);">
        <a href="brand.php?act=edit&amp;id=9" title="编辑">编辑</a> |
        <a href="javascript:;" onclick="listTable.remove(9, '你确认要删除选定的商品品牌吗？')" title="编辑">移除</a> 
      </td>
    </tr>
        <tr>
      <td class="first-cell" style="background-color: rgb(255, 255, 255);">
        <span style="float:right"></span>
        <span onclick="javascript:listTable.edit(this, 'edit_brand_name', 10)">金立</span>
      </td>
      <td style="background-color: rgb(255, 255, 255);"><a href="http://www.gionee.net" target="_brank">http://www.gionee.net</a></td>
      <td align="left" style="background-color: rgb(255, 255, 255);">官方咨询电话：4007796666
售后网点：http://www.gi...</td>
      <td align="right" style="background-color: rgb(255, 255, 255);"><span onclick="javascript:listTable.edit(this, 'edit_sort_order', 10)">50</span></td>
      <td align="center" style="background-color: rgb(255, 255, 255);"><img src="images/yes.gif" onclick="listTable.toggle(this, 'toggle_show', 10)"></td>
      <td align="center" style="background-color: rgb(255, 255, 255);">
        <a href="brand.php?act=edit&amp;id=10" title="编辑">编辑</a> |
        <a href="javascript:;" onclick="listTable.remove(10, '你确认要删除选定的商品品牌吗？')" title="编辑">移除</a> 
      </td>
    </tr>

	<!--end，这些都是显示代码，没有格式化，开发时会删除 -->
    <tr>
		<td align="right" nowrap="true" colspan="6">
            <div id="turn-page">
			总计  <span id="totalRecords">11</span>
        个记录分为 <span id="totalPages">2</span>
        页当前第 <span id="pageCurrent">1</span>
        页，每页 <input type="text" size="3" id="pageSize" value="10" onkeypress="return listTable.changePageSize(event)">
        <span id="page-link">
          <a href="javascript:listTable.gotoPageFirst()">第一页</a>
          <a href="javascript:listTable.gotoPagePrev()">上一页</a>
          <a href="javascript:listTable.gotoPageNext()">下一页</a>
          <a href="javascript:listTable.gotoPageLast()">最末页</a>
          <select id="gotoPage" onchange="listTable.gotoPage(this.value)">
            <option value="1">1</option><option value="2">2</option>          </select>
        </span>
      </div>
      </td>
    </tr>
  </tbody></table>

<!-- end brand list -->
</div>
</form>


<div id="footer">
	版权所有 &copy; 2006-2013 软工教育 - 高级PHP - </div>
</div>

</body>
</html>