<template>
    <div class="login-box">
        <el-form :label-position="labelPosition" label-width="80px" :model="formLabelAlign">
            <el-form-item label="用户名">
                <el-input v-model="formLabelAlign.name" placeholder="formLabelAlign.namePlaceholder"></el-input>
            </el-form-item>
            <el-form-item label="密码">
                <el-input v-model="formLabelAlign.region"></el-input>
            </el-form-item>
            <div>
                <el-button type="primary">主要按钮1</el-button>
            </div>
        </el-form>
    </div>

     
</template>

<style>
.login-box {
  width: 300px;
  height: auto;
}
</style>

<script>
export default {
  data() {
    return {
      labelPosition: "right",
      formLabelAlign: {
        name: "user_name",
        region: "password",
        namePlaceholder: "请输入用户名"
      }
    };
  }
};
</script>
