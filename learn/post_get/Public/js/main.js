	$(document).ready(function() {
	var valSet = true
	$(".treeview").click(function show() {
	/// lay ra phan tu span cua treeview dk check
	var child= $(this).children().children();
	// la ra tat ca phan tu con của treeview
	var all_child = $(".treeview").children().children();
	// lay ra phan tu tiếp theo của treeview
	var next = $(this).next();
	if (next.height()==0) {
		// xóa height toàn bộ text của treeview 
		$(".treeview").next().height("0px");
		//xoa và thêm class toàn bộ phần tr con của toppic
		all_child.removeClass('treeview-menu'); 
		all_child.addClass('treeview-menu');
		// thêm heig phần tử toppic đk check
		next.height("152px");
		$(".list_muc").show();
		// them class và xóa class phẩn tử con của treeview đk check
		child.removeClass('treeview-menu');
		child.addClass('treeview-menu');
	}
	else
	{
		next.height("0px");
		child.removeClass('treeview-menu');
		child.addClass('treeview-menu');
	}
	});
});