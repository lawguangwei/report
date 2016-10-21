<?php
/**
 * Created by PhpStorm.
 * User: luogw
 * Date: 2016-09-30
 * Time: 14:21
 */
$this->title='管理员登陆';
?>

<div class="form-div">
    <form>
        <label id="label">账号：</label>
        <input type="text">
        <label>密码：</label>
        <input type="password">
    </form>
</div>
<script type="application/javascript">
    alert($('#label').text());
</script>