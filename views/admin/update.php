<?php include "header_admin.php"?>
<!-- Main content wrapper -->
<div class="wrapper">
    
	   	<!-- Form -->
		<form class="form" id="add_news" action="route_admin.php?controller=controller_tintuc&action=update&id_tt=<?php echo $_GET['id_tt']?>" method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="widget">
				    <div class="title">
						<img src="images/icons/dark/add.png" class="titleIcon" />
						<h6>Chỉnh sửa bài viết</h6>
                    </div>
                    
                    <div class="title">
		                <h6>Bài viết</h6>
		                
                    </div>
                    
<div class="tab_container">
    <div id="tab1" class="tab_content pd0">
        <div class="formRow">
	        <label class="formLeft" for="param_name">Tên:<span class="req">*</span></label>
	        <div class="formRight">
		        <span class="oneTwo"><input name="name" id="param_name" _autocheck="true" type="text" /></span>
		        <span name="name_autocheck" class="autocheck"></span>
		        <div name="name_error" class="clear error"></div>
	        </div>
	        <div class="clear"></div>
        </div>

        <div class="formRow">
	        <label class="formLeft" for="param_name">Ngày viết:<span class="req">*</span></label>
	        <div class="formRight">
		        <span class="oneTwo"><input name="date" id="param_name" _autocheck="true" type="text" /></span>
		        <span name="name_autocheck" class="autocheck"></span>
		        <div name="name_error" class="clear error"></div>
	        </div>
	        <div class="clear"></div>
        </div>

        <div class="formRow">
            <label class="formLeft">Hình ảnh:<span class="req">*</span></label>
            <div class="formRight">
                <div class="left"><input type="file"  id="image" name="image"  ></div>
                <div name="image_error" class="clear error"></div>
            </div>
            <div class="clear"></div>
        </div>       
    
        <div class="formRow">
            <label class="formLeft">Nội dung:</label>
            <div class="formRight">
		        <textarea name="content" id="param_content" class="editor"></textarea>
		        <div name="content_error" class="clear error"></div>
	        </div>
            <div class="clear"></div>     
        </div>
        <div class="formRow hide"></div>           
    </div>    
</div>

<div class="formSubmit">
	<input type="submit" value="Chỉnh sửa" class="redB" />
	<input type="reset" value="Hủy bỏ" class="basic" />
</div>
<div class="clear"></div>
                </div>
</fieldset>
</form>

</div>
<?php include "footer_admin.php" ?>